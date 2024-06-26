---
title: "BO - Advanced Parameters - Logs - Logs by email"
weight: 2
---

# BO - Advanced Parameters - Logs - Logs by email
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1175
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/08_logs/02_logsByEmail.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Logs | Page title contains 'Logs' |
| Add a invalid email to "Send emails to" > Save | Alert displays : Invalid email: demo@prestashop.. |
| Add a valid email to "Send emails to" > Save | Successful update |
| In Minimum severity level > Choose Informative Only > Save | Alert Successful update is displayed |
| Go to BO > Product page > Edit a product > Edit the title > Save | In emails, see the email titled _Log: You have a new alert from your store_ is sent to demo@prestashop.com |
