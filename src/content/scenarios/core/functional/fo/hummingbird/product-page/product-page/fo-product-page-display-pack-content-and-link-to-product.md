---
title: "FO - Product Page - Display pack content and link to product"
weight: 12
---

# FO - Product Page - Display pack content and link to product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-6985
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/15_displayPackContentAndLinkProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | Your shop should be displayed |
| On the search field, writte "Pack" | You should see the product "Pack mug + Framed poster" |
| Click on "Pack mug = Framed poster" | You should have a label "Pack"<br><br>You should have a box on the right of ther product with the title "This pack cointains" in bold, <br>Under this title you should have the different product with <br> * It image <br> * it title with the detail of the combination (all of it is a link for the product) <br> * It price<br> * It number under the pack ( here x5 ) |
| Click on "Today is a good day Framed poster Dimension-40x60cm" | You should see the product Today is a good day Framed poster with the combination Dimension with 40x60cm |
