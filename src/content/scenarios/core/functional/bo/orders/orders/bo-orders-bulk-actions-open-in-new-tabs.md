---
title: "BO - Orders - Bulk actions - Open in new tabs"
weight: 7
---

# BO - Orders - Bulk actions - Open in new tabs
## Steps
| Step Description | Expected result |
| ----- | ----- |
| From BO > Go to the Orders > Orders page | Orders listing is displayed correctly |
| Select more than one order from the list, click on the Bulk actions button and Click on "Open in new Tabs" | The last order is displayed in a new tab |
| Come back to Orders page | An alert "It looks like you have exceeded the number of tabs allowed. Check your browser settings to open multiple tabs." is displayed |
| Accept the pop up to open multiple tabs<br>{color:red}NO popoup on automated tests{color} -> Check the scond tab | All the orders selected are displayed in different tabs |