# # PricebookV2MaterialCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code for the SKU |
**display_name** | **string** | Name that displays with the SKU | [optional]
**description** | **string** | Description on the SKU that is displayed with the item |
**cost** | **float** | The cost paid to acquire the material | [optional]
**active** | **bool** | Active shows if the SKU is active or inactive | [optional]
**price** | **float** | Price of this SKU sold | [optional]
**member_price** | **float** | The price if the item is sold to a member | [optional]
**add_on_price** | **float** | The price of the SKU is sold as an add-on item | [optional]
**add_on_member_price** | **float** | The price if the SKU is sold to a member as an add-on item | [optional]
**hours** | **float** | The number of hours associated with the installing the material | [optional]
**commission_bonus** | **float** | Flat rate bonus paid for this task | [optional]
**pays_commission** | **bool** | PaysCommissions shows if this task pays commission | [optional]
**deduct_as_job_cost** | **bool** | Is this deducted as job cost | [optional]
**unit_of_measure** | **string** | The unit of measure used for this SKU | [optional]
**is_inventory** | **bool** | Is this material a part of your inventory | [optional]
**account** | **string** | The accounting account assigned to this SKU | [optional]
**cost_of_sale_account** | **string** |  | [optional]
**asset_account** | **string** |  | [optional]
**taxable** | **bool** | Is this SKU taxable | [optional]
**primary_vendor** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequestPrimaryVendor**](PricebookV2EquipmentCreateRequestPrimaryVendor.md) |  | [optional]
**other_vendors** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]**](PricebookV2SkuVendorRequest.md) | Other vendors that you might go to acquire this SKU | [optional]
**assets** | [**\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]**](PricebookV2SkuAssetRequest.md) | Images, videos or PDFs attached to SKU | [optional]
**categories** | **int[]** | Categories that this SKU belongs to | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesCreateRequestExternalData**](PricebookV2DiscountAndFeesCreateRequestExternalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
