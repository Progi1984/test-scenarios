---
title: Enable / disable shop
weight: 1
---

## Preconditions

prestashop installed\
login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to shop parameters > general page | page title contains 'Preferences' |
| go to maintenance tab | Page title contains 'Maintenance' |
| Disable shop | successful update message is displayed |
| View my shop | Maintenance text 'We are currently updating our shop and will be back really soon. Thanks for your patience.' is displayed |
| Go to BO and update maintenance text | successful update message is displayed |
| View my shop | New maintenance text is displayed |
| Go to BO and reset the default maintenance text | successful update message is displayed |
| click add my ip and save | successful update message is displayed |
| View my shop | Home page is displayed successfully |
| Go back to BO, delete the ip address and enable | successful update message is displayed |
| View my shop | Home page is displayed successfully |
