# # AccountingV2DetailedPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**sync_status** | **string** |  | [optional]
**reference_number** | **string** |  | [optional]
**date** | **\DateTime** |  | [optional]
**type** | **string** |  | [optional]
**type_id** | **string** |  | [optional]
**total** | **string** |  | [optional]
**unapplied_amount** | **string** |  | [optional]
**memo** | **string** |  | [optional]
**customer** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseBusinessUnit**](AccountingV2InventoryBillResponseBusinessUnit.md) |  | [optional]
**batch** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponseBusinessUnit**](AccountingV2InventoryBillResponseBusinessUnit.md) |  | [optional]
**created_by** | **string** |  | [optional]
**general_ledger_account** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount**](AccountingV2InventoryBillItemResponseGeneralLedgerAccount.md) |  | [optional]
**applied_to** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentAppliedResponse[]**](AccountingV2PaymentAppliedResponse.md) |  | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\AccountingCustomFieldModel[]**](AccountingCustomFieldModel.md) |  | [optional]
**auth_code** | **string** |  | [optional]
**check_number** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
