# # MembershipsV2MembershipTypeRecurringServiceItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the recurring service item |
**membership_type_id** | **int** | Membership type ID associated with the item |
**recurring_service_type_id** | **int** | Recurring service type ID associated with the item |
**offset** | **int** | Number of weeks or months (depending on offset type) between membership start and recurring service start |
**offset_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeRecurringServiceItemResponseOffsetType**](MembershipsV2MembershipTypeRecurringServiceItemResponseOffsetType.md) |  |
**allocation** | **float** | The percentage of deferred revenue allocated to the recurring service item |
**import_id** | **string** | Import ID | [optional]
**created_on** | **\DateTime** | When recurring service item was created |
**created_by_id** | **int** | ID of the user that created this recurring service item | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
