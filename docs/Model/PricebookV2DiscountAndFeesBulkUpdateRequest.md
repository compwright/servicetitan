# # PricebookV2DiscountAndFeesBulkUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponseType**](PricebookV2DiscountAndFeesResponseType.md) |  |
**code** | **string** | Code used for the discount or fee |
**display_name** | **string** | Name for the discount of fee |
**description** | **string** | Description for the item |
**amount_type** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponseAmountType**](PricebookV2DiscountAndFeesResponseAmountType.md) |  |
**amount** | **float** | Amount is either the flat amount or percentage you want discounted/added |
**limit** | **float** | The maximum amount that can be applied for this item |
**taxable** | **bool** | Should tax be applied when the item is added on an estimate or invoice |
**categories** | **int[]** | The category technicians will use to find the item |
**hours** | **float** | The number of hours associated with the SKU |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU |
**account** | **string** | The accounting account assigned to the SKU |
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. |
**active** | **bool** | Active shows if this item is currently active |
**bonus** | **float** | Bonus |
**commission_bonus** | **float** | Flat rate bonus paid for this item |
**pays_commission** | **bool** | PaysCommissions shows if for this item commission payed |
**exclude_from_payroll** | **bool** | Exclude from payroll |
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesUpdateRequestExternalData**](PricebookV2DiscountAndFeesUpdateRequestExternalData.md) |  | [optional]
**id** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
