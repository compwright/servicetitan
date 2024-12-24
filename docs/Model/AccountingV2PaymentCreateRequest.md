# # AccountingV2PaymentCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_id** | **int** |  |
**memo** | **string** |  | [optional]
**paid_on** | **\DateTime** |  | [optional]
**auth_code** | **string** |  | [optional]
**check_number** | **string** |  | [optional]
**export_id** | **string** | Gets or sets the identifier when exported. | [optional]
**transaction_status** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentResponseTransactionStatus**](AccountingV2PaymentResponseTransactionStatus.md) |  | [optional]
**status** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentResponseStatus**](AccountingV2PaymentResponseStatus.md) |  | [optional]
**splits** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel[]**](AccountingV2PaymentSplitApiModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
