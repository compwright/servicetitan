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
**sales_tax_code** | [**OneOfAccountingV2SalesTaxResponse**](OneOfAccountingV2SalesTaxResponse.md) |  | [optional]
**total** | **string** |  | [optional]
**balance** | **string** |  | [optional]
**customer** | [**OneOfAccountingV2NamedFieldResponse**](OneOfAccountingV2NamedFieldResponse.md) |  | [optional]
**customer_address** | [**OneOfAccountingV2AddressResponse**](OneOfAccountingV2AddressResponse.md) |  | [optional]
**location_address** | [**OneOfAccountingV2AddressResponse**](OneOfAccountingV2AddressResponse.md) |  | [optional]
**business_unit** | [**OneOfAccountingV2NamedFieldResponse**](OneOfAccountingV2NamedFieldResponse.md) |  | [optional]
**term_name** | **string** |  | [optional]
**created_by** | **string** |  | [optional]
**batch** | [**OneOfAccountingV2BatchResponse**](OneOfAccountingV2BatchResponse.md) |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**adjustment_to_id** | **int** |  | [optional]
**job** | [**OneOfAccountingV2JobResponse**](OneOfAccountingV2JobResponse.md) |  | [optional]
**project_id** | **int** |  | [optional]
**royalty** | [**OneOfAccountingV2RoyaltyResponse**](OneOfAccountingV2RoyaltyResponse.md) |  | [optional]
**employee_info** | [**OneOfAccountingV2EmployeeInfoResponse**](OneOfAccountingV2EmployeeInfoResponse.md) |  | [optional]
**commission_eligibility_date** | **string** |  | [optional]
**items** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemResponse[]**](AccountingV2InvoiceItemResponse.md) |  | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\AccountingV2CustomFieldResponse[]**](AccountingV2CustomFieldResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
