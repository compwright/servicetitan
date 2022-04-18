# # AccountingV2PaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**type_id** | **int** |  |
**active** | **bool** |  | [optional]
**memo** | **string** |  | [optional]
**paid_on** | **\DateTime** |  | [optional]
**auth_code** | **string** |  | [optional]
**check_number** | **string** |  | [optional]
**export_id** | **string** | Gets or sets the identifier when exported. | [optional]
**transaction_status** | [**OneOfAccountingV2TransactionProcessingStatus**](OneOfAccountingV2TransactionProcessingStatus.md) |  | [optional]
**status** | [**OneOfAccountingV2PaymentStatus**](OneOfAccountingV2PaymentStatus.md) |  | [optional]
**splits** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel[]**](AccountingV2PaymentSplitApiModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
