# # InventoryV2UpdatePurchaseOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **int** | Id of the vendor for this PO | [optional]
**type_id** | **int** | Id of the purchase order type for this PO | [optional]
**business_unit_id** | **int** | Id of the business unit for this PO | [optional]
**inventory_location_id** | **int** | Id of the inventory location for this PO | [optional]
**job_id** | **int** | Id of the job for this PO, if not specified non-job PO will be created | [optional]
**technician_id** | **int** | Id of the technician for this PO | [optional]
**project_id** | **int** | Id of the project for this PO | [optional]
**ship_to** | [**OneOfInventoryV2UpdateAddressRequest**](OneOfInventoryV2UpdateAddressRequest.md) | Address where PO will be shipped | [optional]
**vendor_invoice_number** | **string** | Vendor invoice number | [optional]
**impacts_technician_payroll** | **bool** | Indicates whether this PO will impact technician&#39;s payroll | [optional]
**memo** | **string** | Summary/memo for this PO | [optional]
**date** | **\DateTime** | PO date | [optional]
**required_on** | **\DateTime** | PO Required On date | [optional]
**tax** | **float** | Tax | [optional]
**shipping** | **float** | Shipping cost | [optional]
**items** | [**\CompWright\ServiceTitan\Model\InventoryV2UpdatePurchaseOrderItemRequest[]**](InventoryV2UpdatePurchaseOrderItemRequest.md) | List of new/updated PO items. Every active PO item that is not on this list will be marked as inactive | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
