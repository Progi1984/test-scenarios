---
title: "FO - Menu and Navigation - Navigate and display - Display \"On sale!\" bandeau"
weight: 4
---

# FO - Menu and Navigation - Navigate and display - Display \"On sale!\" bandeau
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6959
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/03_navigationAndDisplay/04_displayOnSaleFlag.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Hummingbird printed t-shirt" | Product page opens |
| Go to BO > Catalog > Products > Edit product Hummingbird printed t-shirt > Go to tab Pricing > Check "Display the "On sale!" flag on the product page, and on product listings." > Save | Message Successful update. is displayed |
| Click on Preview button | Product page is displayed in a new tab |
| Look on Product Image | See a new "On sale!" bandeau |
