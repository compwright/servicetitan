# # InventoryV2PurchaseOrderItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Item Id |
**sku_id** | **int** | SKU Id of this item |
**sku_name** | **string** | Item name |
**sku_code** | **string** | Item code |
**sku_type** | **string** | Item type(material or equipment) |
**description** | **string** | Item description |
**vendor_part_number** | **string** | Vendor part number for this item |
**quantity** | **float** | Item quantity |
**quantity_received** | **float** | Quantity received for this item, PO must have at least one receipt for this to be not 0 |
**cost** | **float** | Item cost |
**total** | **float** | Item total cost |
**serial_numbers** | [**\CompWright\ServiceTitan\Model\InventoryV2SerialNumberResponse[]**](InventoryV2SerialNumberResponse.md) | List of serial numbers |
**status** | **string** | Item status |
**chargeable** | **bool** | Indicates whether item price is charged to customer |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
