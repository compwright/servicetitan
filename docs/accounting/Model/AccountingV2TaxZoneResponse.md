# # AccountingV2TaxZoneResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Tax Zone Id |
**name** | **string** | Tax Zone Name | [optional]
**color** | **int** | Tax Zone Color | [optional]
**is_tax_rate_separated** | **bool** | Tax Zone has separate material and labor taxes |
**is_multiple_tax_zone** | **bool** | Tax Zone has multiple rates |
**rates** | [**\CompWright\ServiceTitan\Model\AccountingV2TaxRateResponse[]**](AccountingV2TaxRateResponse.md) | Tax Zone rates |
**created_on** | **\DateTime** | Date which the Tax Zone was created |
**active** | **bool** | Tax zone is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
