---
title: "Faceted search module - Add new template"
weight: 21
---

# Faceted search module - Add new template
## Details
* **Component** : ps_facetedsearch
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4272
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_facetedsearch/02_configuration/21_addNewTemplate.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Add new template" button below your template | * The "New filters template" section is displayed<br> * You can configure it as you want and saved it |
