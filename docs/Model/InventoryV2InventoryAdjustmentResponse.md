# # InventoryV2InventoryAdjustmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Inventory adjustment Id |
**active** | **bool** | Is active |
**number** | **string** | Number |
**reference_number** | **string** | Reference number |
**type** | **string** | Inventory Adjustment Type |
**inventory_location_id** | **int** | Id of Inventory Location for this adjustment |
**business_unit_id** | **int** | Business Unit Id | [optional]
**created_by_id** | **int** | Employee who created this adjustment | [optional]
**memo** | **string** | memo/summary field |
**date** | **\DateTime** | Adjustment date |
**created_on** | **\DateTime** | system created date |
**modified_on** | **\DateTime** | last time adjustment was modified date |
**batch_id** | **int** | Batch Id | [optional]
**sync_status** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryAdjustmentResponseSyncStatus**](InventoryV2InventoryAdjustmentResponseSyncStatus.md) |  |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryAdjustmentItemResponse[]**](InventoryV2InventoryAdjustmentItemResponse.md) | Collection of adjustment items |
**custom_fields** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldResponse[]**](InventoryV2CustomFieldResponse.md) | Collection of custom fields |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
