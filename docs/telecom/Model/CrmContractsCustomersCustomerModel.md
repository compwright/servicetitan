# # CrmContractsCustomersCustomerModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**active** | **bool** |  |
**name** | **string** |  |
**email** | **string** |  |
**balance** | **float** |  | [optional]
**do_not_mail** | **bool** |  |
**address** | [**\CompWright\ServiceTitan\Model\AddressOutput**](AddressOutput.md) |  |
**import_id** | **string** |  |
**do_not_service** | **bool** |  |
**type** | [**\CompWright\ServiceTitan\Model\CrmCustomersCustomerType**](CrmCustomersCustomerType.md) |  |
**contacts** | [**\CompWright\ServiceTitan\Model\ContactsContractsContactOutputModel[]**](ContactsContractsContactOutputModel.md) |  |
**merged_to_id** | **int** |  | [optional]
**modified_on** | **\DateTime** |  |
**memberships** | [**\CompWright\ServiceTitan\Model\MembershipsMembershipModel[]**](MembershipsMembershipModel.md) |  |
**has_active_membership** | **bool** |  | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CustomFieldApiModel[]**](CustomFieldApiModel.md) |  |
**created_on** | **\DateTime** |  |
**created_by** | **int** |  | [optional]
**phone_settings** | [**\CompWright\ServiceTitan\Model\CrmContractsCustomersCustomerPhoneModel[]**](CrmContractsCustomersCustomerPhoneModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
