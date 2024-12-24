# # CrmV2CustomersCustomerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the customer |
**active** | **bool** | False indicates that someone has deactivated the customer record, typically upon merging with another record. |
**name** | **string** | Name of the customer |
**type** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponseType**](CrmV2CustomersCustomerResponseType.md) |  |
**address** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponseAddress**](CrmV2CustomersCustomerResponseAddress.md) |  |
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldModel[]**](CrmV2CustomersCustomFieldModel.md) | Customer record’s custom fields |
**balance** | **float** | Customer’s account balance |
**do_not_mail** | **bool** | Customer has been flagged as “do not mail” |
**do_not_service** | **bool** | Customer has been flagged as “do not service” |
**created_on** | **\DateTime** | DateTime (UTC) that customer record was created |
**created_by_id** | **int** | User ID who created the record. |
**modified_on** | **\DateTime** | Modified on (UTC) for the record. |
**merged_to_id** | **int** | The customer ID of the record that this record was previously merged to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
