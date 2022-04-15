# # PricebookV2ServiceBulkUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU |
**description** | **string** | Description on the SKU that is displayed with the item |
**warranty** | [**OneOfPricebookV2SkuWarrantyRequest**](OneOfPricebookV2SkuWarrantyRequest.md) | Description of the warranty included in this SKU |
**categories** | **int[]** | Categories that this SKU belongs to |
**price** | **float** | Price of this SKU sold |
**member_price** | **float** | The price if the item is sold to a member |
**add_on_price** | **float** | The price of the SKU is sold as an add-on item |
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item |
**taxable** | **bool** | Is this SKU taxable |
**account** | **string** | The accounting account assigned to this SKU |
**hours** | **float** | Hours needed to complete this service |
**is_labor** | **bool** | Is a labor service |
**recommendations** | **int[]** | Recommended other services to include with this SKU |
**upgrades** | **int[]** | Upgrades that can be sold for this SKU |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU |
**service_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of materials linked to the service |
**service_equipment** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]**](PricebookV2SkuLinkRequest.md) | Array of equipment linked to the service |
**active** | **bool** | Active shows if the SKU is active or inactive |
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. |
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission |
**commission_bonus** | **float** | Flat rate bonus paid for this task |
**external_data** | [**OneOfPricebookV2ExternalDataRequest**](OneOfPricebookV2ExternalDataRequest.md) | External data update model. | [optional]
**id** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
