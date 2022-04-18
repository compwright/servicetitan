# # AccountingV2InventoryBillResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**purchase_order_id** | **int** |  | [optional]
**sync_status** | **string** |  | [optional]
**reference_number** | **string** |  | [optional]
**vendor_number** | **string** |  | [optional]
**summary** | **string** |  | [optional]
**bill_date** | **\DateTime** |  | [optional]
**bill_amount** | **string** |  | [optional]
**tax_amount** | **string** |  | [optional]
**shipping_amount** | **string** |  | [optional]
**created_by** | **string** |  | [optional]
**created_on** | **\DateTime** |  | [optional]
**term_name** | **string** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**ship_to_description** | **string** |  | [optional]
**batch** | [**OneOfAccountingV2BatchResponse**](OneOfAccountingV2BatchResponse.md) |  | [optional]
**business_unit** | [**OneOfAccountingV2NamedFieldResponse**](OneOfAccountingV2NamedFieldResponse.md) |  | [optional]
**vendor** | [**OneOfAccountingV2NamedFieldResponse**](OneOfAccountingV2NamedFieldResponse.md) |  | [optional]
**ship_to** | [**OneOfAccountingV2AddressResponse**](OneOfAccountingV2AddressResponse.md) |  | [optional]
**items** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponse[]**](AccountingV2InventoryBillItemResponse.md) |  | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\AccountingV2CustomFieldResponse[]**](AccountingV2CustomFieldResponse.md) |  | [optional]
**job_id** | **int** |  | [optional]
**job_number** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
