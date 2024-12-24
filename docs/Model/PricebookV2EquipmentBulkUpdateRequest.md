# # PricebookV2EquipmentBulkUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU |
**description** | **string** | Description on the SKU that is displayed with the item |
**price** | **float** | Price of this SKU sold |
**member_price** | **float** | The price if the item is sold to a member |
**add_on_price** | **float** | The price of the SKU is sold as an add-on item |
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item |
**active** | **bool** | Active shows if the SKU is active or inactive |
**manufacturer** | **string** | Name of the manufactures |
**model** | **string** | The model of the equipment |
**manufacturer_warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequestManufacturerWarranty**](PricebookV2EquipmentUpdateRequestManufacturerWarranty.md) |  |
**service_provider_warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequestManufacturerWarranty**](PricebookV2EquipmentUpdateRequestManufacturerWarranty.md) |  |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU |
**recommendations** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationRequest[]**](PricebookV2EquipmentRecommendationRequest.md) | Recommended services and materials to include with this SKU |
**upgrades** | **int[]** | Upgrades that can be sold for this SKU |
**equipment_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of materials used with this equipment |
**categories** | **int[]** | Categories that this SKU belongs to |
**primary_vendor** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequestPrimaryVendor**](PricebookV2EquipmentUpdateRequestPrimaryVendor.md) |  |
**other_vendors** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]**](PricebookV2SkuVendorRequest.md) | Other vendors that you might go to acquire this SKU |
**account** | **string** | The accounting account assigned to this SKU |
**cost_of_sale_account** | **string** |  |
**asset_account** | **string** |  |
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. |
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission |
**commission_bonus** | **float** | Flat rate bonus paid for this task |
**hours** | **float** | The number of hours associated with the installing the equipment |
**taxable** | **bool** | Is this SKU taxable |
**cost** | **float** | The cost paid to acquire the material |
**unit_of_measure** | **string** | The unit of measure used for this SKU |
**is_inventory** | **bool** | Is this equipment a part of your inventory |
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesUpdateRequestExternalData**](PricebookV2DiscountAndFeesUpdateRequestExternalData.md) |  | [optional]
**id** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
