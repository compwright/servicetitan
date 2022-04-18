# # PricebookV2CategoryCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the category |
**active** | **bool** | Active shows if this category is currently active | [optional]
**description** | **string** | A description that described the category | [optional]
**parent_id** | **int** | The id of the category that is the parent of this item | [optional]
**position** | **int** | The position location of this item | [optional]
**image** | **string** | The image to display as the category | [optional]
**category_type** | [**OneOfPricebookV2CategoryType**](OneOfPricebookV2CategoryType.md) | The category type. This field can be Service or Material. |
**business_unit_ids** | **int[]** | The business units that are associated with this category | [optional]
**sku_images** | **string[]** | The images that will be used for the SKUs under this category | [optional]
**sku_videos** | **string[]** | The videos that will be used for the videos under this category | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
