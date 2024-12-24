# # PricebookV2ServiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id for the SKU |
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item |
**warranty** | [**\CompWright\ServiceTitan\Model\PricebookV2ServiceResponseWarranty**](PricebookV2ServiceResponseWarranty.md) |  | [optional]
**categories** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuCategoryResponse[]**](PricebookV2SkuCategoryResponse.md) | Categories that this SKU belongs to |
**price** | **float** | Price of this SKU sold |
**member_price** | **float** | The price if the item is sold to a member |
**add_on_price** | **float** | The price of the SKU is sold as an add-on item |
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item |
**taxable** | **bool** | Is this SKU taxable |
**account** | **string** | The accounting account assigned to this SKU | [optional]
**hours** | **float** | Hours needed to complete this service |
**is_labor** | **bool** | Is a labor service | [optional]
**recommendations** | **int[]** | Recommended other service or materials to include with this SKU |
**upgrades** | **int[]** | Upgrades that can be sold for this SKU |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetResponse[]**](PricebookV2SkuAssetResponse.md) | Images, videos or PDFs attached to SKU |
**service_materials** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkResponse[]**](PricebookV2SkuLinkResponse.md) | Array of materials that is used with this service |
**service_equipment** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuLinkResponse[]**](PricebookV2SkuLinkResponse.md) | Array of equipment used with this service |
**active** | **bool** | Active shows if the SKU is active or inactive |
**cross_sale_group** | **string** | A grouping of similar items that you&#39;ll then be able to track as a separate columns on the Technical Performance Board. | [optional]
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission |
**modified_on** | **\DateTime** | Timestamp when the item was last modified |
**source** | **string** | The source catalog for this SKU. | [optional]
**external_id** | **string** | External id is the id of the original source of the item when it comes from a catalog | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2ExternalDataModel[]**](PricebookV2ExternalDataModel.md) | List of external data attached to this job, that corresponds to the application guid provided in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
