---
title: Enable Disable Tax Breakdown
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Orders > Invoices" page | Invoices page is displayed successfully |
| Enable tax breakdown and save the form | The tax breakdown is enabled successfully<br><br>The validation message is displayed successfully<br>"Update successful" |
| Go to "International > taxes" page | Taxes page is displayed successfully |
| Go to "Tax rules" page | The tax rules page is displayed successfully |
| Create new tax rule group<br>name: 'FR tax Rule ${faker.random.word()}'<br>enabled: true | The validation message is displayed successfully<br>"Successful creation." |
| Create the first tax rule<br>country: 'France'<br>behaviour: 'Combine'<br>tax: 'TVA FR 20%' | The validation message is displayed successfully<br>"Successful creation." |
| Click on "Add new tax rule" button | New tax rule form is displayed successfully |
| Create the second tax rule<br>country: 'France'<br>behaviour: 'Combine'<br>tax: 'TVA FR 10%' | The validation message is displayed successfully<br>"Successful creation." |
| Go to "Catalog > Products" page | Products list is displayed successfully |
| Create new product<br>type: 'Standard product'<br>productHasCombinations: false<br>taxRule: taxRuleGroupToCreated.name | Product is created successfully |
| Click on preview button | The product page in FO is displayed successfully |
| Add the product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the default account "pub@prestashop.com" | The customer is logged successfully |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Go to "BO > Orders > Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Payment accepted" | The order status is updated successfully<br>The invoice is created successfully |
| Download the invoice | The invoice is downloaded successfully<br>There are 2 taxes in the invoice (10.000 %, 20.000 %) |
| Delete the invoice from the disk | The invoice is deleted successfully |
| Go to "Orders > Invoices" page | Invoices page is displayed correctly |
| Disable tax breackdown and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to "Orders > Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Download the invoice | The invoice is downloaded successfully<br>There is one tax in the invoice (30.000 %) |
