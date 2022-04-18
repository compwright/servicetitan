# # CrmV2CustomersCustomerContactWithModifiedOnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the contact |
**type** | [**OneOfCrmV2ContactType**](OneOfCrmV2ContactType.md) | Landline, mobile, e-mail, or fax. |
**value** | **string** | The email, phone number, or fax number for the contact. |
**memo** | **string** | Short description about this contact, for example, “work #” or “Owner’s daughter - Kelly.” | [optional]
**modified_on** | **\DateTime** | Modified On (UTC) for the record |
**phone_settings** | [**OneOfCrmV2CustomersPhoneSettings**](OneOfCrmV2CustomersPhoneSettings.md) | Phone settings of the customer contact |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
