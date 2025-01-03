# # MembershipsV2LocationRecurringServiceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Recurring service name | [optional]
**active** | **bool** | Whether recurring service is active | [optional]
**recurring_service_type_id** | **int** | Recurring Service Type ID | [optional]
**duration_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseDurationType**](MembershipsV2LocationRecurringServiceResponseDurationType.md) |  | [optional]
**duration_length** | **int** | The duration length for the given duration type | [optional]
**from** | **\DateTime** | Beginning date of recurring service | [optional]
**memo** | **string** | Memo | [optional]
**invoice_template_id** | **int** | Invoice template ID | [optional]
**invoice_template_for_following_years_id** | **int** | Invoice template ID for the 2nd year and following (for ongoing memberships) | [optional]
**business_unit_id** | **int** | Business unit ID | [optional]
**job_type_id** | **int** | Job type ID | [optional]
**campaign_id** | **int** | Campaign ID | [optional]
**priority** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponsePriority**](MembershipsV2LocationRecurringServiceResponsePriority.md) |  | [optional]
**job_summary** | **string** | Job summary | [optional]
**recurrence_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceType**](MembershipsV2LocationRecurringServiceResponseRecurrenceType.md) |  | [optional]
**recurrence_interval** | **int** | The recurrence interval for the given recurrence type. Can be 0 when RecurrenceType is Seasonal. | [optional]
**recurrence_months** | [**\CompWright\ServiceTitan\Model\MembershipsV2Month[]**](MembershipsV2Month.md) | A list of months when the recurring service occurs, if it is a seasonal recurrence type | [optional]
**recurrence_days_of_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2WeekDay[]**](MembershipsV2WeekDay.md) | A list specifying which days of the week this recurring service recurs when RecurrenceType is Weekly | [optional]
**recurrence_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceWeek**](MembershipsV2LocationRecurringServiceResponseRecurrenceWeek.md) |  | [optional]
**recurrence_day_of_nth_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceDayOfNthWeek**](MembershipsV2LocationRecurringServiceResponseRecurrenceDayOfNthWeek.md) |  | [optional]
**job_start_time** | **string** | Job start time | [optional]
**estimated_payroll_cost** | **float** | Estimated payroll cost | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
