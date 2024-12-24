# # PricebookV2EquipmentBulkCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**equipment_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]**](PricebookV2SkuLinkBulkCreateRequest.md) | Array of materials used with this equipment | [optional]
**recommendations** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationBulkCreateRequest[]**](PricebookV2EquipmentRecommendationBulkCreateRequest.md) | Recommended services and materials to include with this SKU | [optional]
**upgrades** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuUpgradeBulkCreateRequest[]**](PricebookV2SkuUpgradeBulkCreateRequest.md) | Upgrades that can be sold for this SKU | [optional]
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item |
**price** | **float** | Price of this SKU sold | [optional]
**member_price** | **float** | The price if the item is sold to a member | [optional]
**add_on_price** | **float** | The price of the SKU is sold as an add-on item | [optional]
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item | [optional]
**active** | **bool** | Active shows if the SKU is active or inactive | [optional]
**manufacturer** | **string** | Name of the manufactures | [optional]
**model** | **string** | The model of the equipment | [optional]
**manufacturer_warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequestManufacturerWarranty**](PricebookV2EquipmentCreateRequestManufacturerWarranty.md) |  | [optional]
**service_provider_warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequestManufacturerWarranty**](PricebookV2EquipmentCreateRequestManufacturerWarranty.md) |  | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**categories** | **int[]** | Categories that this SKU belongs to | [optional]
**primary_vendor** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequestPrimaryVendor**](PricebookV2EquipmentCreateRequestPrimaryVendor.md) |  | [optional]
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
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesCreateRequestExternalData**](PricebookV2DiscountAndFeesCreateRequestExternalData.md) |  | [optional]
**custom_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
