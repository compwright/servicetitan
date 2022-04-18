# # InventoryV2InventoryReceiptItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Item Id |
**sku_id** | **int** | Sku Id |
**name** | **string** | Item Name |
**code** | **string** | Item Code |
**description** | **string** | Item Description |
**quantity** | **float** | Receipt quantity |
**cost** | **float** | Item cost |
**general_ledger_account** | [**OneOfInventoryV2GLAccountResponse**](OneOfInventoryV2GLAccountResponse.md) | General ledge account information | [optional]
**cost_of_sale_account** | [**OneOfInventoryV2GLAccountResponse**](OneOfInventoryV2GLAccountResponse.md) | Cost of sale account information | [optional]
**asset_account** | [**OneOfInventoryV2GLAccountResponse**](OneOfInventoryV2GLAccountResponse.md) | Asset account information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
