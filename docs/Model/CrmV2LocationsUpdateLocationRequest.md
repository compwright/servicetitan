# # CrmV2LocationsUpdateLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **int** | ID of the location’s customer. | [optional]
**name** | **string** | Name of the location | [optional]
**address** | [**\CompWright\ServiceTitan\Model\CrmV2LocationsUpdateLocationRequestAddress**](CrmV2LocationsUpdateLocationRequestAddress.md) |  | [optional]
**active** | **bool** | If false, the record has been deactivated. | [optional]
**tax_zone_id** | **int** | ID of the location tax zone | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]**](CrmV2CustomersCustomFieldUpdateModel.md) | List of custom fields and their values. This list must describe the full list of custom fields on the location. If location A has values for custom fields X and Y and this field only contains a model for custom field X, then the value for custom field Y on location A will be removed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
