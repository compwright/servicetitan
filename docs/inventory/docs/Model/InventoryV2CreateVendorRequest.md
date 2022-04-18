# # InventoryV2CreateVendorRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name |
**active** | **bool** | Active |
**memo** | **string** | Memo | [optional]
**first_name** | **string** | Contact First name | [optional]
**last_name** | **string** | Contact Last Name | [optional]
**phone** | **string** | Contact Phone | [optional]
**email** | **string** | Contact Email | [optional]
**fax** | **string** | Contact Fax | [optional]
**is_truck_replenishment** | **bool** | Replenishment Vendor |
**delivery_option** | [**OneOfPurchaseOrderDeliveryOption**](OneOfPurchaseOrderDeliveryOption.md) | Default PO Delivery Method | [optional]
**tax_rate** | **float** | Default Tax Rate |
**restricted_mobile_creation** | **bool** | Restrict PO Creation in Mobile |
**vendor_quickbooks_item** | **string** | Vendor Quickbooks Item | [optional]
**payment_term_id** | **int** | Payment Term Id | [optional]
**remittance_vendor_id** | **int** | Remittance Vendor Id | [optional]
**address** | [**OneOfInventoryV2AddressRequest**](OneOfInventoryV2AddressRequest.md) | Address |
**external_data** | [**OneOfInventoryV2ExternalDataUpdateRequest**](OneOfInventoryV2ExternalDataUpdateRequest.md) | Optional model that contains a list of external data items that should be attached to this vendor. | [optional]
**tags** | [**\CompWright\ServiceTitan\Model\InventoryV2TagRequest[]**](InventoryV2TagRequest.md) | Tags | [optional]
**vendor_contacts** | [**\CompWright\ServiceTitan\Model\InventoryV2CreateVendorContactRequest[]**](InventoryV2CreateVendorContactRequest.md) | Email Recipients | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
