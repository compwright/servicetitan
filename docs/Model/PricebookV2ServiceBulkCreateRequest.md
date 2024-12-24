# # PricebookV2ServiceBulkCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]**](PricebookV2SkuLinkBulkCreateRequest.md) | Array of materials linked to the service | [optional]
**service_equipment** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]**](PricebookV2SkuLinkBulkCreateRequest.md) | Array of equipment linked to the service | [optional]
**recommendations** | [**\CompWright\ServiceTitan\Model\PricebookV2ServiceRecommendationBulkCreateRequest[]**](PricebookV2ServiceRecommendationBulkCreateRequest.md) | Recommended services and materials to include with this SKU | [optional]
**upgrades** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuUpgradeBulkCreateRequest[]**](PricebookV2SkuUpgradeBulkCreateRequest.md) | Upgrades that can be sold for this SKU | [optional]
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item |
**warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2ServiceBulkCreateRequestWarranty**](PricebookV2ServiceBulkCreateRequestWarranty.md) |  | [optional]
**categories** | **int[]** | Categories that this SKU belongs to | [optional]
**price** | **float** | Price of this SKU sold | [optional]
**member_price** | **float** | The price if the item is sold to a member | [optional]
**add_on_price** | **float** | The price of the SKU is sold as an add-on item | [optional]
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item | [optional]
**taxable** | **bool** | Is this SKU taxable | [optional]
**account** | **string** | The accounting account assigned to this SKU | [optional]
**hours** | **float** | Hours needed to complete this service | [optional]
**is_labor** | **bool** | Is a labor service | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**active** | **bool** | Active shows if the SKU is active or inactive | [optional]
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**pays_commission** | **bool** | True if this task pays commission | [optional]
**commission_bonus** | **float** | Flat rate bonus paid for this task | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesCreateRequestExternalData**](PricebookV2DiscountAndFeesCreateRequestExternalData.md) |  | [optional]
**custom_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
