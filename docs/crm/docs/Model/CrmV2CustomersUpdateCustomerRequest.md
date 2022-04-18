# # CrmV2CustomersUpdateCustomerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the customer | [optional]
**type** | [**OneOfCrmV2CustomerType**](OneOfCrmV2CustomerType.md) | Residential or commercial | [optional]
**address** | [**OneOfCrmV2CustomersUpdateCustomerAddress**](OneOfCrmV2CustomersUpdateCustomerAddress.md) | Bill-To address of the customer record | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]**](CrmV2CustomersCustomFieldUpdateModel.md) | Customer record’s custom fields | [optional]
**do_not_mail** | **bool** | Customer has been flagged as “do not mail” | [optional]
**do_not_service** | **bool** | Customer has been flagged as “do not service” | [optional]
**active** | **bool** | Customer has been flagged as “active” ar \&quot;innactive\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
