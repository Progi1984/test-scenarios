<?php

namespace Console\App\Service\API;

/**
 * TestRail API binding for PHP (API v2, available since TestRail 3.0)
 *  Updated for TestRail 5.7
 *
 * Learn more:
 *
 * http://docs.gurock.com/testrail-api2/start
 * http://docs.gurock.com/testrail-api2/accessing
 *
 * Copyright Gurock Software GmbH. See license.md for details.
 */
class TestRail
{
    /**
     * @var string
     */
    private $_user = '';
    /**
     * @var string
     */
    private $_password = '';
    /**
     * @var string
     */
    private $_url;
    /**
     * @var int
     */
    private $countRequests = 0;

    public function __construct(string $base_url)
    {
        $base_url = trim($base_url, '/') . '/';
        $this->_url = $base_url . 'index.php?/api/v2/';
    }
    /**
     * Get/Set User
     *
     * Returns/sets the user used for authenticating the API requests.
     */
    public function get_user(): string
    {
        return $this->_user;
    }
    public function set_user(string $user): self
    {
        $this->_user = $user;
        return $this;
    }
    /**
     * Get/Set Password
     *
     * Returns/sets the password used for authenticating the API requests.
     */
    public function get_password(): string
    {
        return $this->_password;
    }

    public function set_password(string $password): self
    {
        $this->_password = $password;
        return $this;
    }

    public function getRequestsCount(): int
    {
        return $this->countRequests;
    }

    /**
     * Send Get
     *
     * Issues a GET request (read) against the API and returns the result
     * (as PHP array).
     *
     * Arguments:
     *
     * $uri                 The API method to call including parameters
     *                      (e.g. get_case/1)
     * $data                 The path to save the attachment from a 
     *                      'get_attachment' request.
     */
    public function send_get(string $uri, $data=null)
    {
        return $this->_send_request('GET', $uri, $data);
    }
    /**
     * Send POST
     *
     * Issues a POST request (write) against the API and returns the result
     * (as PHP array).
     *
     * Arguments:
     *
     * $uri                 The API method to call including parameters
     *                      (e.g. add_case/1)
     * $data                The data to submit as part of the request (as
     *                      PHP array, strings must be UTF-8 encoded)
     *                      If adding an attachment, must be the path
     *                      to the file
     */
    public function send_post(string $uri, $data)
    {
        return $this->_send_request('POST', $uri, $data);
    }

    protected function _send_request(string $method, $uri, $data)
    {
        $this->countRequests++;

        $ch = $this->createCurlRessource();
        curl_setopt_array($ch,
            array(
                CURLOPT_URL => $this->_url . $uri,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => array (
                    'Content-Type: application/json')
        ));

        if ($method == 'POST') {
            $data_str = '';
            // Check for 'add_attachment' API methods
            if (substr($uri, 0, 14) === 'add_attachment') {
                $attachmentData = file_get_contents($data);
                $boundary = '---------------' . uniqid();
                $crlf = "\r\n";
                
                $data_str = '--' . $boundary . $crlf
                    . 'Content-Disposition: form-data; name="attachment"; filename="' 
                    . basename($data) . '"' . $crlf . $crlf
                    . $attachmentData . $crlf
                    . '--' . $boundary . '--' . $crlf;
                
                curl_setopt_array(
                    $ch,
                    array(
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: multipart/form-data; boundary=' . $boundary,
                            'Content-Length: ' . strlen($data_str))
                ));
            } else if (is_array($data)) {
                $data_str = json_encode($data);
            }
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_str);
        } else {
            curl_setopt($ch, CURLOPT_POST, false);
        }

        curl_setopt($ch, CURLOPT_USERPWD, "$this->_user:$this->_password");

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);

        if (!$response) {
            throw new TestRailException(curl_error($ch));
        }

        if ((substr($uri, 0, 15) == "get_attachment/")
            && ($info['http_code'] == 200)) {
            // Receive attachment
            file_put_contents($data, $response);
            $result = $data;
        } else {
            $result = json_decode($response, true);
        }

        if ($info['http_code'] != 200) {
            throw new TestRailException(
                sprintf(
                    'TestRail API returned HTTP %s (%s)',
                    $info['http_code'],
                    isset($result['error']) ? 
                        '"' . $result['error'] . '"' : 
                        'No additional error message received'
                )
            );
        }
        $this->closeCurlRessource($ch);
        return $result;
    }

    private function createCurlRessource()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        return $ch;
    }

    private function closeCurlRessource($ch)
    {
        curl_close($ch);
    }
}
