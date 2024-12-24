# # PricebookV2DiscountAndFeesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id for the discount or fee |
**type** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponseType**](PricebookV2DiscountAndFeesResponseType.md) |  |
**code** | **string** | Code used for the discount or fee |
**display_name** | **string** | Name for the discount of fee | [optional]
**description** | **string** | Description for the item |
**amount_type** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponseAmountType**](PricebookV2DiscountAndFeesResponseAmountType.md) |  |
**amount** | **float** | Amount is either the flat amount or percentage you want discounted/added |
**limit** | **float** | The maximum amount that can be applied for this item |
**taxable** | **bool** | Should tax be applied when the item is added on an estimate or invoice |
**categories** | **int[]** | The category technicians will use to find the item | [optional]
**hours** | **float** | The number of hours associated with the SKU |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetResponse[]**](PricebookV2SkuAssetResponse.md) | Images, videos or PDFs attached to SKU | [optional]
**account** | **string** | The accounting account assigned to the SKU | [optional]
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**active** | **bool** | Active shows if this item is currently active |
**bonus** | **float** | Bonus |
**commission_bonus** | **float** | Flat rate bonus paid for this item |
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission |
**exclude_from_payroll** | **bool** | Exclude from payroll |
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2ExternalDataModel[]**](PricebookV2ExternalDataModel.md) | List of external data attached to this job, that corresponds to the application guid provided in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
