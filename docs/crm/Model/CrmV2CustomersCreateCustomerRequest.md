# # CrmV2CustomersCreateCustomerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the customer |
**type** | [**OneOfCrmV2CustomerType**](OneOfCrmV2CustomerType.md) | Residential or commercial | [optional]
**do_not_mail** | **bool** | Customer has been flagged as “do not mail” | [optional]
**do_not_service** | **bool** | Customer has been flagged as “do not service” | [optional]
**locations** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersNewLocation[]**](CrmV2CustomersNewLocation.md) | Locations for the customer |
**address** | [**OneOfCrmV2CustomersCustomerAddress**](OneOfCrmV2CustomersCustomerAddress.md) | Bill-To address of the customer record |
**contacts** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersNewCustomerContact[]**](CrmV2CustomersNewCustomerContact.md) | Contacts for the customer | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]**](CrmV2CustomersCustomFieldUpdateModel.md) | Customer record’s custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
