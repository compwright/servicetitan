# # PricebookV2ServiceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU | [optional]
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item | [optional]
**warranty** | [**OneOfPricebookV2SkuWarrantyRequest**](OneOfPricebookV2SkuWarrantyRequest.md) | Description of the warranty included in this SKU | [optional]
**categories** | **int[]** | Categories that this SKU belongs to | [optional]
**price** | **float** | Price of this SKU sold | [optional]
**member_price** | **float** | The price if the item is sold to a member | [optional]
**add_on_price** | **float** | The price of the SKU is sold as an add-on item | [optional]
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item | [optional]
**taxable** | **bool** | Is this SKU taxable | [optional]
**account** | **string** | The accounting account assigned to this SKU | [optional]
**hours** | **float** | Hours needed to complete this service | [optional]
**is_labor** | **bool** | Is a labor service | [optional]
**recommendations** | **int[]** | Recommended other services to include with this SKU | [optional]
**upgrades** | **int[]** | Upgrades that can be sold for this SKU | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**service_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of materials linked to the service | [optional]
**service_equipment** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of equipment linked to the service | [optional]
**active** | **bool** | Active shows if the SKU is active or inactive | [optional]
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission | [optional]
**commission_bonus** | **float** | Flat rate bonus paid for this task | [optional]
**external_data** | [**OneOfPricebookV2ExternalDataRequest**](OneOfPricebookV2ExternalDataRequest.md) | External data update model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
