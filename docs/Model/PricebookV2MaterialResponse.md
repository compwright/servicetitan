# # PricebookV2MaterialResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id for the SKU |
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU | [optional]
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
**unit_of_measure** | **string** | The unit of measure used for this SKU | [optional]
**is_inventory** | **bool** | Is this material a part of your inventory |
**account** | **string** | The accounting account assigned to the SKU | [optional]
**cost_of_sale_account** | **string** |  | [optional]
**asset_account** | **string** |  | [optional]
**taxable** | **bool** | Is this SKU taxable | [optional]
**primary_vendor** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentResponsePrimaryVendor**](PricebookV2EquipmentResponsePrimaryVendor.md) |  | [optional]
**other_vendors** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuVendorResponse[]**](PricebookV2SkuVendorResponse.md) | Other vendors that you might go to acquire this SKU | [optional]
**categories** | **int[]** | Categories that this SKU belongs to |
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetResponse[]**](PricebookV2SkuAssetResponse.md) | Images, videos or PDFs attached to SKU |
**modified_on** | **\DateTime** | Timestamp where the item was last modified |
**source** | **string** | The source catalog for this SKU. | [optional]
**external_id** | **string** | External id is the id of the original source of the item when it comes from a catalog | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2ExternalDataModel[]**](PricebookV2ExternalDataModel.md) | List of external data attached to this job, that corresponds to the application guid provided in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
