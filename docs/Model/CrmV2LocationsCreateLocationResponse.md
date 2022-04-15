# # CrmV2LocationsCreateLocationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_zone_id** | **int** | ID of the location tax zone | [optional]
**id** | **int** | ID of the location |
**customer_id** | **int** | ID of the location’s customer. |
**active** | **bool** | If false, the record has been deactivated. |
**name** | **string** | Name of the location |
**address** | [**OneOfCrmV2CustomersCustomerAddress**](OneOfCrmV2CustomersCustomerAddress.md) | Location’s address |
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldModel[]**](CrmV2CustomersCustomFieldModel.md) | Location record’s custom fields |
**created_on** | **\DateTime** | DateTime (UTC) that location record was created |
**created_by_id** | **int** | User ID who created the record. |
**modified_on** | **\DateTime** | Modified On (UTC) for the record. |
**merged_to_id** | **int** | Tells you which location record this record was merged into. | [optional]
**contacts** | [**\CompWright\ServiceTitan\Model\CrmV2LocationsLocationContact[]**](CrmV2LocationsLocationContact.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
