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
**duration_type** | [**OneOfMembershipsV2ServiceRecurrenceDuration**](OneOfMembershipsV2ServiceRecurrenceDuration.md) | The recurrence duration type |
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
**priority** | [**OneOfMembershipsV2Priority**](OneOfMembershipsV2Priority.md) | Recurring service priority |
**job_summary** | **string** | Job summary | [optional]
**recurrence_type** | [**OneOfMembershipsV2ServiceRecurrenceType**](OneOfMembershipsV2ServiceRecurrenceType.md) | The recurrence type (e.g. Daily, Weekly, Monthly, etc.) |
**recurrence_interval** | **int** | The recurrence interval for the given recurrence type. Can be 0 when RecurrenceType is Seasonal. |
**recurrence_months** | [**\CompWright\ServiceTitan\Model\MembershipsV2Month[]**](MembershipsV2Month.md) | A list of months when the recurring service occurs, if it is a seasonal recurrence type |
**recurrence_days_of_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2WeekDay[]**](MembershipsV2WeekDay.md) | A list specifying which days of the week this recurring service recurs when RecurrenceType is Weekly |
**recurrence_week** | [**OneOfMembershipsV2WeekOfMonth**](OneOfMembershipsV2WeekOfMonth.md) | Enum value corresponding to which week of the month this recurring service recurs when RecurrenceType is NthWeekdayOfMonth. Used with RecurrenceDayOfNthWeek. |
**recurrence_day_of_nth_week** | [**OneOfMembershipsV2WeekDay**](OneOfMembershipsV2WeekDay.md) | Enum value corresponding to which day of the week this recurring service recurs when RecurrenceType is NthWeekdayOfMonth. Used with RecurrenceWeek. | [optional]
**recurrence_days_of_month** | **int[]** | A list of days of the month on which this recurring service recurs when RecurrenceType is Monthly. |
**job_start_time** | **string** | Job start time | [optional]
**estimated_payroll_cost** | **float** | Estimated payroll cost | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
