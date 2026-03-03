---
title: "BO - Advanced Parameters - Multistore - CRUD shops"
weight: 2
---

# BO - Advanced Parameters - Multistore - CRUD shops
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1183

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters > Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on "Add new store" | Add new page is displayed |
| Fill the informations of the new shop > Save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| Click on edit > Edit information > Save | * A green alert "Successful update" is displayed<br> * the content is updated |
| Click on the dropdown arrow > Delete | an alert is displayed with : <br><br>Delete select items <br>Name : new_shop<br>Yes / No |
| Click on OK | * A green alert "Successful deletion" is displayed<br> * the shop is well deleted from the multistore tree and from the list |
