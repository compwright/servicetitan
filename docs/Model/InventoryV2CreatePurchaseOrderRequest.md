# # InventoryV2CreatePurchaseOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **int** | Id of the vendor for this PO |
**type_id** | **int** | Id of the purchase order type for this PO |
**business_unit_id** | **int** | Id of the business unit for this PO |
**inventory_location_id** | **int** | Id of the inventory location for this PO |
**job_id** | **int** | Id of the job for this PO, if not specified non-job PO will be created | [optional]
**technician_id** | **int** | Id of the technician for this PO | [optional]
**project_id** | **int** | Id of the project for this PO | [optional]
**ship_to** | [**OneOfInventoryV2CreateAddressRequest**](OneOfInventoryV2CreateAddressRequest.md) | Address where PO will be shipped |
**vendor_invoice_number** | **string** | Optional vendor invoice number, you should provide it for auto-received POs | [optional]
**impacts_technician_payroll** | **bool** | Indicates whether this PO will impact technician&#39;s payroll |
**memo** | **string** | Summary/memo for this PO | [optional]
**date** | **\DateTime** | PO date |
**required_on** | **\DateTime** | PO Required On date |
**tax** | **float** | Tax |
**shipping** | **float** | Shipping cost |
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2CreatePurchaseOrderItemRequest[]**](InventoryV2CreatePurchaseOrderItemRequest.md) | List of PO items |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
