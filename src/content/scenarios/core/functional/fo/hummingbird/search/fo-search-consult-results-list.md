---
title: "FO - Search - Consult results list"
weight: 4
---

# FO - Search - Consult results list
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5105
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/07_search/04_consultResultsList.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In search bar type "mug" > Press "Enter" | Search results for "mug" page is displayed<br><br>Found 5 products |
| Click on Mug The best is yet to come | Mug The best is yet to come product page is displayed |
| Click on Previous from your browser | Search results for "mug" page is displayed<br><br>Found 5 products |
| In search bar type "fox" > Press Enter | Search results for "fox" page is displayed<br><br>Found 7 products |
| Click on Mountain fox cushion | Mountain fox cushion product page is displayed |
| Click on Previous from your browser | Search results for "fox" page is displayed<br><br>Found 7 products |
| In search bar > Remove your search > Press Enter | "Nothing to search for" page is displayed |
