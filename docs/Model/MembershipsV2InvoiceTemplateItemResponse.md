# # MembershipsV2InvoiceTemplateItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Invoice template item ID |
**sku_id** | **int** | Linked SKU ID |
**sku_type** | [**OneOfMembershipsV2SkuType**](OneOfMembershipsV2SkuType.md) | The type of linked SKU |
**quantity** | **float** | Quantity |
**unit_price** | **float** | Unit price |
**is_add_on** | **bool** | Whether invoice item is add-on |
**import_id** | **string** | Import ID | [optional]
**workflow_action_item_id** | **int** | The invoice item ID that created this invoice template item via ModifyMembershipWorkflowAction | [optional]
**description** | **string** | Item description | [optional]
**cost** | **float** | Materials cost | [optional]
**hours** | **float** | Sold/billable hours | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
