# # PricebookV2EquipmentUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU | [optional]
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item | [optional]
**price** | **float** | Price of this SKU sold | [optional]
**member_price** | **float** | The price if the item is sold to a member | [optional]
**add_on_price** | **float** | The price of the SKU is sold as an add-on item | [optional]
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item | [optional]
**active** | **bool** | Active shows if the SKU is active or inactive | [optional]
**manufacturer** | **string** | Name of the manufactures | [optional]
**model** | **string** | The model of the equipment | [optional]
**manufacturer_warranty** | [**OneOfPricebookV2SkuWarrantyRequest**](OneOfPricebookV2SkuWarrantyRequest.md) | Description of the manufacturer warranty included in this SKU | [optional]
**service_provider_warranty** | [**OneOfPricebookV2SkuWarrantyRequest**](OneOfPricebookV2SkuWarrantyRequest.md) | Description of the manufacturer warranty included in this SKU | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**recommendations** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationRequest[]**](PricebookV2EquipmentRecommendationRequest.md) | Recommended services and materials to include with this SKU | [optional]
**upgrades** | **int[]** | Upgrades that can be sold for this SKU | [optional]
**equipment_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of materials used with this equipment | [optional]
**categories** | **int[]** | Categories that this SKU belongs to | [optional]
**primary_vendor** | [**OneOfPricebookV2SkuVendorRequest**](OneOfPricebookV2SkuVendorRequest.md) | The primary vendor you use to acquire this SKU | [optional]
**other_vendors** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]**](PricebookV2SkuVendorRequest.md) | Other vendors that you might go to acquire this SKU | [optional]
**account** | **string** | The accounting account assigned to this SKU | [optional]
**cost_of_sale_account** | **string** |  | [optional]
**asset_account** | **string** |  | [optional]
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission | [optional]
**commission_bonus** | **float** | Flat rate bonus paid for this task | [optional]
**hours** | **float** | The number of hours associated with the installing the equipment | [optional]
**taxable** | **bool** | Is this SKU taxable | [optional]
**cost** | **float** | The cost paid to acquire the material | [optional]
**unit_of_measure** | **string** | The unit of measure used for this SKU | [optional]
**is_inventory** | **bool** | Is this equipment a part of your inventory | [optional]
**external_data** | [**OneOfPricebookV2ExternalDataRequest**](OneOfPricebookV2ExternalDataRequest.md) | External data update model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)