# # InventoryV2InventoryReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Return Id |
**active** | **bool** | Is active |
**number** | **string** | Number |
**reference_number** | **string** | Reference number |
**vendor_id** | **int** | Vendor |
**purchase_order_id** | **int** | Purchase order | [optional]
**job_id** | **int** | Job | [optional]
**business_unit_id** | **int** | Business unit |
**inventory_location_id** | **int** | Inventory location | [optional]
**created_by_id** | **int** | User who created this return | [optional]
**memo** | **string** | Memo/summary field |
**return_amount** | **float** | Return total, including tax and shipping |
**tax_amount** | **float** | Return tax |
**shipping_amount** | **float** | Return shipping cost |
**return_date** | **\DateTime** | Return date |
**created_on** | **\DateTime** | System created date |
**modified_on** | **\DateTime** | Last time return was modified |
**batch_id** | **int** | Batch | [optional]
**sync_status** | [**OneOfInventoryV2SyncStatus**](OneOfInventoryV2SyncStatus.md) | Sync status |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryReturnItemResponse[]**](InventoryV2InventoryReturnItemResponse.md) | Collection of return items |
**custom_fields** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldResponse[]**](InventoryV2CustomFieldResponse.md) | Collection of custom fields |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
