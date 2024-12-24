# # InventoryV2InventoryTransferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Inventory transfer Id |
**transfer_type** | **string** | Type |
**status** | **string** | Status |
**number** | **string** | Number |
**reference_number** | **string** | Reference number |
**from_location_id** | **int** | Inventory location to transfer from |
**to_location_id** | **int** | Inventory location where transfer is going |
**created_by_id** | **int** | Employee who created this transfer | [optional]
**memo** | **string** | Memo/summary field |
**date** | **\DateTime** | Transfer date |
**picked_date** | **\DateTime** | Transfer picked date | [optional]
**received_date** | **\DateTime** | Transfer recevived date | [optional]
**created_on** | **\DateTime** | system created date |
**modified_on** | **\DateTime** | last time transfer was modified date |
**batch_id** | **int** | Batch | [optional]
**sync_status** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryAdjustmentResponseSyncStatus**](InventoryV2InventoryAdjustmentResponseSyncStatus.md) |  |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryTransferItemResponse[]**](InventoryV2InventoryTransferItemResponse.md) | Collection of transfer items |
**custom_fields** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldResponse[]**](InventoryV2CustomFieldResponse.md) | Collection of custom fields |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
