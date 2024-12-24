# # AccountingV2TaxRateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Tax Rate Id | [optional]
**tax_name** | **string** | Tax Rate Name | [optional]
**tax_base_type** | [**\CompWright\ServiceTitan\Model\AccountingV2TaxBaseTypeNames[]**](AccountingV2TaxBaseTypeNames.md) | Indicates how the tax rate is applied (Subtotal, Labor, Material) |
**tax_rate** | **float** | Tax rate as a fractional/decimal value |
**sales_tax_item** | **string** | The Quickbooks item that relates to this tax rate | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
