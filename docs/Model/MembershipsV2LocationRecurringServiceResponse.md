# # MembershipsV2LocationRecurringServiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Recurring service ID |
**name** | **string** | Recurring service name |
**active** | **bool** | Whether recurring service is active |
**created_on** | **\DateTime** | When recurring service was created |
**created_by_id** | **int** | ID of the user that created this recurring service | [optional]
**modified_on** | **\DateTime** | When recurring service was modified |
**import_id** | **string** | Internal import ID label | [optional]
**membership_id** | **int** | Customer membership ID | [optional]
**location_id** | **int** | Location ID |
**recurring_service_type_id** | **int** | Recurring Service Type ID |
**duration_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseDurationType**](MembershipsV2LocationRecurringServiceResponseDurationType.md) |  |
**duration_length** | **int** | The duration length for the given duration type |
**from** | **\DateTime** | Beginning date of recurring service | [optional]
**to** | **\DateTime** | End date of recurring service | [optional]
**memo** | **string** | Memo | [optional]
**invoice_template_id** | **int** | Invoice template ID | [optional]
**invoice_template_for_following_years_id** | **int** | Invoice template ID for the 2nd year and following (for ongoing memberships) | [optional]
**first_visit_complete** | **bool** | Whether first visit is complete |
**activated_from_id** | **int** | ID of the invoice item that is the sale task of this membership | [optional]
**allocation** | **float** | Recurring service allocation |
**business_unit_id** | **int** | Business unit ID | [optional]
**job_type_id** | **int** | Job type ID | [optional]
**campaign_id** | **int** | Campaign ID | [optional]
**priority** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponsePriority**](MembershipsV2LocationRecurringServiceResponsePriority.md) |  |
**job_summary** | **string** | Job summary | [optional]
**recurrence_type** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceType**](MembershipsV2LocationRecurringServiceResponseRecurrenceType.md) |  |
**recurrence_interval** | **int** | The recurrence interval for the given recurrence type. Can be 0 when RecurrenceType is Seasonal. |
**recurrence_months** | [**\CompWright\ServiceTitan\Model\MembershipsV2Month[]**](MembershipsV2Month.md) | A list of months when the recurring service occurs, if it is a seasonal recurrence type |
**recurrence_days_of_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2WeekDay[]**](MembershipsV2WeekDay.md) | A list specifying which days of the week this recurring service recurs when RecurrenceType is Weekly |
**recurrence_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceWeek**](MembershipsV2LocationRecurringServiceResponseRecurrenceWeek.md) |  |
**recurrence_day_of_nth_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponseRecurrenceDayOfNthWeek**](MembershipsV2LocationRecurringServiceResponseRecurrenceDayOfNthWeek.md) |  | [optional]
**recurrence_days_of_month** | **int[]** | A list of days of the month on which this recurring service recurs when RecurrenceType is Monthly. |
**job_start_time** | **string** | Job start time | [optional]
**estimated_payroll_cost** | **float** | Estimated payroll cost | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
