---
title: " FO - Menu and Navigation - Navigate and display - Pagination"
weight: 2
---

#  FO - Menu and Navigation - Navigate and display - Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6957
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/03_navigationAndDisplay/02_pagination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Homepage > In popular product block > Click All products | Home category is displayed |
| Scroll down to bottom of the page > See pagination is displayed | See in pagination navigation : 2 pages of products and "Showing 1-12 of 19 item(s)" message |
| Click on "Next" | On pagination navigation, see Showing 13-19 of 19 item(s) and "Previous" button is displayed. Next button is hidden. |
| Go to BO > Shop Parameters > Products Settings > Scroll down to Pagination block > Edit Products per page = 6 > Save | Message "Update successful" is displayed |
| Go back to FO > Refresh page of Home category | See only 6 products are displayed<br><br>See in pagination navigation : 4 pages of products and "Showing 7-12 of 19 item(s)" message. You are on page 2. |
| Click on "Next" | Page 3 is displayed<br><br>Pagination navigation displays : Showing 13-18 of 19 item(s)<br><br>Previous and Next buttons are displayed and clickable |
| Go back to BO > Shop Parameters > Products Settings > Scroll down to Pagination block > Edit Products per page = 20 > Save | Message "Update successful" is displayed |
| Click View my store > Homepage > In popular product block > Click All products | See Showing 1-19 of 19 item(s) displayed<br>Pagination navigation bar is not displayed. |
| Go Back to BO > Product settings and reset number of products per page to 12 | Message "Update successful" is displayed |
