# # AccountingV2AdjustmentInvoiceCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** |  | [optional]
**type_id** | **int** |  | [optional]
**invoiced_on** | **\DateTime** |  | [optional]
**subtotal** | **float** |  | [optional]
**tax** | **float** |  | [optional]
**summary** | **string** |  | [optional]
**royalty_status** | [**OneOfAccountingV2RoyaltyStatus**](OneOfAccountingV2RoyaltyStatus.md) |  | [optional]
**royalty_date** | **\DateTime** |  | [optional]
**royalty_sent_on** | **\DateTime** |  | [optional]
**royalty_memo** | **string** |  | [optional]
**export_id** | **string** |  | [optional]
**items** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemUpdateRequest[]**](AccountingV2InvoiceItemUpdateRequest.md) |  | [optional]
**payments** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentSettlementUpdateRequest[]**](AccountingV2PaymentSettlementUpdateRequest.md) |  | [optional]
**adjustment_to_id** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
