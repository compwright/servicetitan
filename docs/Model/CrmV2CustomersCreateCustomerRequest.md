# # CrmV2CustomersCreateCustomerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the customer |
**type** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCreateCustomerRequestType**](CrmV2CustomersCreateCustomerRequestType.md) |  | [optional]
**do_not_mail** | **bool** | Customer has been flagged as “do not mail” | [optional]
**do_not_service** | **bool** | Customer has been flagged as “do not service” | [optional]
**locations** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersNewLocation[]**](CrmV2CustomersNewLocation.md) | Locations for the customer |
**address** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponseAddress**](CrmV2CustomersCustomerResponseAddress.md) |  |
**contacts** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersNewCustomerContact[]**](CrmV2CustomersNewCustomerContact.md) | Contacts for the customer | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]**](CrmV2CustomersCustomFieldUpdateModel.md) | Customer record’s custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
