---
title: simple Filter Stocks
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog stocks Page | Page title contains : stocks *<br>number of element in grid > 0 |
| filter by name <br>Criteria : 'Hummingbird printed t-shirt' | number of element in grid after filter < total of element in grid<br>all element in grid column name contains 'Hummingbird printed t-shirt' |
| reset filter | number of element in grid after reset = total of element in grid |
| filter by reference <br>Criteria : demo_1 | number of element in grid after filter < total of element in grid<br>all element in grid column reference contains 'demo_1' |
| reset filter | number of element in grid after reset = total of element in grid |
| filter by supplier <br>Criteria : 'N/A' | number of element in grid after filter < total of element in grid<br>all element in grid column supplier contains 'N/A' |
| reset filter | number of element in grid after reset = total of element in grid |
