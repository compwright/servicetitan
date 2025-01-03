# # MembershipsV2RecurringServiceTypeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Recurring service type ID |
**created_on** | **\DateTime** | When recurring service type was created |
**created_by_id** | **int** | ID of the user that created this recurring service type | [optional]
**modified_on** | **\DateTime** | When recurring service type was modified |
**active** | **bool** | Whether recurring service type is active |
**recurrence_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2RecurringServiceTypeResponseRecurrenceType**](MembershipsV2RecurringServiceTypeResponseRecurrenceType.md) |  |
**recurrence_interval** | **int** | The recurrence interval for the given recurrence type |
**recurrence_months** | [**\CompWright\ServiceTitan\Model\MembershipsV2Month[]**](MembershipsV2Month.md) | A list of months when the recurring service occurs, if it is a seasonal recurrence type |
**duration_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseDurationType**](MembershipsV2LocationRecurringServiceResponseDurationType.md) |  |
**duration_length** | **int** | The recurrence duration length (number of events) |
**invoice_template_id** | **int** | Invoice template ID | [optional]
**business_unit_id** | **int** | Business unit ID | [optional]
**job_type_id** | **int** | Job type ID | [optional]
**priority** | [**\CompWright\ServiceTitan\Model\MembershipsV2RecurringServiceTypeResponsePriority**](MembershipsV2RecurringServiceTypeResponsePriority.md) |  |
**campaign_id** | **int** | Campaign ID | [optional]
**job_summary** | **string** | Job summary | [optional]
**name** | **string** | Recurring service type name | [optional]
**import_id** | **string** | Import ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
