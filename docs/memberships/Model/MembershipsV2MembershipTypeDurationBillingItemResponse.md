# # MembershipsV2MembershipTypeDurationBillingItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the duration/billing option |
**duration** | **int** | Duration of the entry | [optional]
**billing_frequency** | [**OneOfMembershipsV2MembershipRecurrenceType**](OneOfMembershipsV2MembershipRecurrenceType.md) | Billing frequency of the entry |
**sale_price** | **float** | Sale price of the entry |
**billing_price** | **float** | Billing price of the entry |
**renewal_price** | **float** | Renewal price of the entry |
**import_id** | **string** | Import ID of the entry | [optional]
**active** | **bool** | Whether the duration/billing option is active |
**created_on** | **\DateTime** | When duration/billing option was created |
**created_by_id** | **int** | ID of the user that created this duration/billing option | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
