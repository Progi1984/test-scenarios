---
title: Categories Bulk Actions In BO
weight: 4
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Design>Pages" page<br>Pages page is displayed correctly | Pages page is displayed correctly |
| Reset all filters of Categories table and get number of elements | All filters are reset<br>All categories are displayed |
| Go to Add new page category page | Add new page category page is displayed correctly |
| Fill all information :<br><br>Name : todelete<br>Description : Random<br>Displayed : Yes<br><br>And Save Form | Category saved successfully |
| Go back to pages page | Pages page is displayed correctly |
| Go to Add new page category page | Go to Add new page category page |
| Fill all information :<br><br>Name : todelete<br>Description : Random<br>Displayed : Yes<br><br>And Save Form | Category saved successfully |
| Go back to pages page | Pages page is displayed correctly |
| filter by name<br>Criteria : "todelete" | Categories list is filtered<br>Pages listed have "todelete" in their Name |
| Disable categories with Bulk Actions and check Result | Categories are disabled successfully with bulk actions |
| Enable categories with Bulk Actions and check Result' | Categories are enabled successfully with bulk actions |
| filter by name<br>Criteria : "todelete" | Categories list is filtered<br>Categories listed have "todelete" in their name |
| Delete categories with Bulk Actions and check Result | The categories is deleted successfully |
| Reset all filters of Categories | All filters are reset<br>All categories are displayed |
