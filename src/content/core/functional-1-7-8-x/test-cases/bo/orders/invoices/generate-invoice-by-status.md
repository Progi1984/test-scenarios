---
title: Generate Invoice By Status
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Orders > Orders" page | Orders listing is displayed correctly |
| Go to the fisrt order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully |
| Go to the second order page | The order page is displayed successfully |
| Change the order status to "Payment accepted" | The status is changed successfully |
| Go to the "Orders > Invoices" page | Invoices page is displayed correctly |
| Click on Generate invoice by status and check the error message | The error message is displayed successfully<br>"No invoice has been found for this status." |
| Select the status "Cancelled" then click on Generate invoice by status button | The error message is displayed successfully<br>"You must select at least one order status." |
| Choose the statuses "Payment accepted" and "Shipped", then click on "Generate invoice by status" | The pdf file is generated successfylly |
