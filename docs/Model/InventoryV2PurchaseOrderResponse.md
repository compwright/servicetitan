# # InventoryV2PurchaseOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Purchase order Id |
**number** | **string** | Purchase order number |
**invoice_id** | **int** | Id of invoice associated with PO | [optional]
**job_id** | **int** | Id of job associated with PO | [optional]
**project_id** | **int** | Id of project associated with PO | [optional]
**status** | **string** | Status of this PO |
**type_id** | **int** | The purchase order type Id of this PO |
**vendor_id** | **int** | Id of vendor for this PO |
**technician_id** | **int** | Id of technician for this PO | [optional]
**ship_to** | [**\CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderResponseShipTo**](InventoryV2PurchaseOrderResponseShipTo.md) |  |
**business_unit_id** | **int** | Id of business unit for this PO | [optional]
**inventory_location_id** | **int** | Inventory location Id of PO | [optional]
**batch_id** | **int** | Batch Id of PO | [optional]
**vendor_document_number** | **string** | Vendor document number of PO |
**date** | **\DateTime** | PO date |
**required_on** | **\DateTime** | PO required on date | [optional]
**sent_on** | **\DateTime** | PO sent on date | [optional]
**received_on** | **\DateTime** | PO received on date | [optional]
**created_on** | **\DateTime** | When PO was created, system date |
**modified_on** | **\DateTime** | When PO was last modified, system date |
**total** | **float** | PO total, including items cost, tax and shipping cost |
**tax** | **float** | PO tax |
**shipping** | **float** | PO shipping cost |
**summary** | **string** | PO summary/memo |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderItemResponse[]**](InventoryV2PurchaseOrderItemResponse.md) | List of PO items |
**custom_fields** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldResponse[]**](InventoryV2CustomFieldResponse.md) | List of custom fields for this PO |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
