# # InventoryV2UpdateVendorRequestExternalData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_guid** | **string** | Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided. |
**external_data** | [**\CompWright\ServiceTitan\Model\InventoryV2ExternalDataModel[]**](InventoryV2ExternalDataModel.md) | External data list. This list must include all of the external data for the job. If job A has custom data with keys X and Y and this field only contains an item with a key X, then custom data with a key Y on job A will be removed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
