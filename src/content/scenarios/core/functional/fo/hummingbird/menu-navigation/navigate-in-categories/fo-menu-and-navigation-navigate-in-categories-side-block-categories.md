---
title: "FO - Menu and Navigation - Navigate in Categories -Side block categories"
weight: 3
---

# FO - Menu and Navigation - Navigate in Categories -Side block categories
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6951
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/01_navigateInCategories/03_sideBlockCategories.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In Menu, click on Accessories | Accessories category page is displayed<br>Side block has 2 subcategory : Stationery and Home accessories |
| Click on Stationery on the side block | Stationery category page is displayed<br>Side block only contains Stationery subcategory |
| In menu > Click on Clothes | Clothes category page is displayed<br>Side block has 2 subcategory : Men and Women |
| Click on Women on the side block | Women category page is displayed<br>Side block only contains Women subcategory |
| In menu > Click on Art | Art category page is displayed<br>Side block has no subcategory, only category name Art |
