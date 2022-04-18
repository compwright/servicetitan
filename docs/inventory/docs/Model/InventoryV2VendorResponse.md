# # InventoryV2VendorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Vendor Id |
**name** | **string** | Vendor name |
**active** | **bool** | Active/Inactive status |
**is_truck_replenishment** | **bool** | Indicates if vendor can be used for replenishment |
**is_mobile_creation_restricted** | **bool** | Indicates if vendor can be used for purchasing on mobile |
**memo** | **string** | Vendor memo |
**delivery_option** | **string** | Default delivery option |
**default_tax_rate** | **float** | Default tax rate for this vendor |
**contact_info** | [**OneOfInventoryV2VendorContactInfoResponse**](OneOfInventoryV2VendorContactInfoResponse.md) | Vendor contact information |
**address** | [**OneOfInventoryV2AddressResponse**](OneOfInventoryV2AddressResponse.md) | Vendor address |
**created_on** | **\DateTime** | system created date |
**modified_on** | **\DateTime** | last time adjustment was modified date |
**external_data** | [**\CompWright\ServiceTitan\Model\InventoryV2ExternalDataModel[]**](InventoryV2ExternalDataModel.md) | List of external data attached to this vendor, that corresponds to the application guid provided in the request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
