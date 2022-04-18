# # PricebookV2DiscountAndFeesUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**OneOfPricebookV2PriceModifierType**](OneOfPricebookV2PriceModifierType.md) | Type should be entered as Discount or Fee to show the type | [optional]
**code** | **string** | Code used for the discount or fee | [optional]
**display_name** | **string** | Name for the discount of fee | [optional]
**description** | **string** | Description for the item | [optional]
**amount_type** | [**OneOfPricebookV2PriceModifierAmountType**](OneOfPricebookV2PriceModifierAmountType.md) | The amount type takes either \&quot;percentage\&quot; or \&quot;flat \&quot; and apply the \&quot;amount\&quot; field accordingly | [optional]
**amount** | **float** | Amount is either the flat amount or percentage you want discounted/added | [optional]
**limit** | **float** | The maximum amount that can be applied for this item | [optional]
**taxable** | **bool** | Should tax be applied when the item is added on an estimate or invoice | [optional]
**categories** | **int[]** | The category technicians will use to find the item | [optional]
**hours** | **float** | The number of hours associated with the SKU | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**account** | **string** | The accounting account assigned to the SKU | [optional]
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**active** | **bool** | Active shows if this item is currently active | [optional]
**bonus** | **float** | Bonus | [optional]
**commission_bonus** | **float** | Flat rate bonus paid for this item | [optional]
**pays_commission** | **bool** | PaysCommissions shows if for this item commission payed | [optional]
**exclude_from_payroll** | **bool** | Exclude from payroll | [optional]
**external_data** | [**OneOfPricebookV2ExternalDataRequest**](OneOfPricebookV2ExternalDataRequest.md) | External data update model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
