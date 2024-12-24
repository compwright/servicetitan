# # AccountingV2InvoiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**sync_status** | **string** |  | [optional]
**summary** | **string** |  | [optional]
**reference_number** | **string** |  | [optional]
**invoice_date** | **\DateTime** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**sub_total** | **string** |  | [optional]
**sales_tax** | **string** |  | [optional]
**sales_tax_code** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceResponseSalesTaxCode**](AccountingV2InvoiceResponseSalesTaxCode.md) |  | [optional]
**total** | **string** |  | [optional]
**balance** | **string** |  | [optional]
**customer** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseBusinessUnit**](AccountingV2InventoryBillResponseBusinessUnit.md) |  | [optional]
**customer_address** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseShipTo**](AccountingV2InventoryBillResponseShipTo.md) |  | [optional]
**location_address** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseShipTo**](AccountingV2InventoryBillResponseShipTo.md) |  | [optional]
**business_unit** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseBusinessUnit**](AccountingV2InventoryBillResponseBusinessUnit.md) |  | [optional]
**term_name** | **string** |  | [optional]
**created_by** | **string** |  | [optional]
**batch** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseBatch**](AccountingV2InventoryBillResponseBatch.md) |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**adjustment_to_id** | **int** |  | [optional]
**job** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceResponseJob**](AccountingV2InvoiceResponseJob.md) |  | [optional]
**project_id** | **int** |  | [optional]
**royalty** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceResponseRoyalty**](AccountingV2InvoiceResponseRoyalty.md) |  | [optional]
**employee_info** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceResponseEmployeeInfo**](AccountingV2InvoiceResponseEmployeeInfo.md) |  | [optional]
**commission_eligibility_date** | **string** |  | [optional]
**items** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemResponse[]**](AccountingV2InvoiceItemResponse.md) |  | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\AccountingV2CustomFieldResponse[]**](AccountingV2CustomFieldResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
