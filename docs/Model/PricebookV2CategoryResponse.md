# # PricebookV2CategoryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id for the category |
**name** | **string** | The name of the category |
**active** | **bool** | Active shows if this category is currently active |
**description** | **string** | A description that described the category | [optional]
**image** | **string** | The image to display as the category | [optional]
**parent_id** | **int** | The id of the category that is the parent of this item | [optional]
**position** | **int** | The position location of this item |
**category_type** | [**\CompWright\ServiceTitan\Model\PricebookV2CategoryResponseCategoryType**](PricebookV2CategoryResponseCategoryType.md) |  |
**subcategories** | [**\CompWright\ServiceTitan\Model\PricebookV2CategoryResponse[]**](PricebookV2CategoryResponse.md) | The array of the subcategories | [optional]
**business_unit_ids** | **int[]** | The business units that are associated with this category | [optional]
**sku_images** | **string[]** | The images that will be used for the SKUs under this category | [optional]
**sku_videos** | **string[]** | The videos that will be used for the videos under this category | [optional]
**source** | **string** | The source of the category if it was imported from a catalog | [optional]
**external_id** | **string** | External id is the id of the original source of the item when it comes from a catalog | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
