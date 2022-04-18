# # PricebookV2MaterialBulkUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU |
**description** | **string** | Description on the SKU that is displayed with the item |
**cost** | **float** | The cost paid to acquire the material |
**active** | **bool** | Active shows if the SKU is active or inactive |
**price** | **float** | Price of this SKU sold |
**member_price** | **float** | The price if the item is sold to a member |
**add_on_price** | **float** | The price of the SKU is sold as an add-on item |
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item |
**hours** | **float** | The number of hours associated with the installing the material |
**commission_bonus** | **float** | Flat rate bonus paid for this task |
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission |
**deduct_as_job_cost** | **bool** | Is this deducted as job cost |
**unit_of_measure** | **string** | The unit of measure used for this SKU |
**is_inventory** | **bool** | Is this material a part of your inventory |
**account** | **string** | The accounting account assigned to this SKU |
**cost_of_sale_account** | **string** |  |
**asset_account** | **string** |  |
**taxable** | **bool** | Is this SKU taxable |
**primary_vendor** | [**OneOfPricebookV2SkuVendorRequest**](OneOfPricebookV2SkuVendorRequest.md) | The primary vendor you use to acquire this SKU |
**other_vendors** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]**](PricebookV2SkuVendorRequest.md) | Other vendors that you might go to acquire this SKU |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU |
**categories** | **int[]** | Categories that this SKU belongs to |
**external_data** | [**OneOfPricebookV2ExternalDataRequest**](OneOfPricebookV2ExternalDataRequest.md) | External data update model. | [optional]
**id** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
