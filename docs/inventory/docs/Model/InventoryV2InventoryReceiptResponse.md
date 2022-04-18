# # InventoryV2InventoryReceiptResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Receipt Id |
**active** | **bool** | Is active |
**number** | **string** | Number |
**vendor_invoice_number** | **string** | Vendor invoice number |
**created_by_id** | **int** | User who created this receipt | [optional]
**memo** | **string** | Memo/summary field |
**purchase_order_id** | **int** | Id of purchase order |
**bill_id** | **int** | Id of bill | [optional]
**job_id** | **int** | Id of job | [optional]
**business_unit_id** | **int** | Id of business unit | [optional]
**vendor_id** | **int** | Id of vendor |
**technician_id** | **int** | Id of technician | [optional]
**inventory_location_id** | **int** | Id of inventory location |
**ship_to** | [**OneOfInventoryV2AddressResponse**](OneOfInventoryV2AddressResponse.md) | Ship to address | [optional]
**ship_to_description** | **string** | Ship to description |
**receipt_amount** | **float** | Receipt total, including tax and shipping |
**tax_amount** | **float** | Receipt tax |
**shipping_amount** | **float** | Receipt shipping cost |
**received_on** | **\DateTime** | Date received | [optional]
**created_on** | **\DateTime** | System created date |
**modified_on** | **\DateTime** | last time receipt was modified |
**batch_id** | **int** | Id of batch | [optional]
**sync_status** | [**OneOfInventoryV2SyncStatus**](OneOfInventoryV2SyncStatus.md) | Sync status |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2InventoryReceiptItemResponse[]**](InventoryV2InventoryReceiptItemResponse.md) | Collection of receipt items |
**custom_fields** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldResponse[]**](InventoryV2CustomFieldResponse.md) | Collection of custom fields |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
