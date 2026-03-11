---
title: "BO - Advanced Parameter - Admin API - Add API Client"
weight: 1
---

# BO - Advanced Parameter - Admin API - Add API Client
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7633

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Admin API | Admin API Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API Client" | New API Client Page is displayed correctly |
| Fill the form with following data<br>Click on "Generate client secret & Save" button | The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is displayed |
| Click on the "Copy" button | The clipboard contains the value of the client secret |
| Reload the page | The message “The API Client and Client secret has been generated sucessfully.” is not displayed<br>The message "Client secret: " is not displayed |
| In BO, Go to Advanced Parameters > Admin API | Admin API Page is displayed correctly.<br>There is 1 API access in the list |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
