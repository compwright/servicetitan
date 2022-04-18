# # MembershipsV2LocationRecurringServiceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Recurring service name | [optional]
**active** | **bool** | Whether recurring service is active | [optional]
**recurring_service_type_id** | **int** | Recurring Service Type ID | [optional]
**duration_type** | [**OneOfMembershipsV2ServiceRecurrenceDuration**](OneOfMembershipsV2ServiceRecurrenceDuration.md) | The recurrence duration type | [optional]
**duration_length** | **int** | The duration length for the given duration type | [optional]
**from** | **\DateTime** | Beginning date of recurring service | [optional]
**memo** | **string** | Memo | [optional]
**invoice_template_id** | **int** | Invoice template ID | [optional]
**invoice_template_for_following_years_id** | **int** | Invoice template ID for the 2nd year and following (for ongoing memberships) | [optional]
**business_unit_id** | **int** | Business unit ID | [optional]
**job_type_id** | **int** | Job type ID | [optional]
**campaign_id** | **int** | Campaign ID | [optional]
**priority** | [**OneOfMembershipsV2Priority**](OneOfMembershipsV2Priority.md) | Recurring service priority | [optional]
**job_summary** | **string** | Job summary | [optional]
**recurrence_type** | [**OneOfMembershipsV2ServiceRecurrenceType**](OneOfMembershipsV2ServiceRecurrenceType.md) | The recurrence type (e.g. Daily, Weekly, Monthly, etc.) | [optional]
**recurrence_interval** | **int** | The recurrence interval for the given recurrence type. Can be 0 when RecurrenceType is Seasonal. | [optional]
**recurrence_months** | [**\CompWright\ServiceTitan\Model\MembershipsV2Month[]**](MembershipsV2Month.md) | A list of months when the recurring service occurs, if it is a seasonal recurrence type | [optional]
**recurrence_days_of_week** | [**\CompWright\ServiceTitan\Model\MembershipsV2WeekDay[]**](MembershipsV2WeekDay.md) | A list specifying which days of the week this recurring service recurs when RecurrenceType is Weekly | [optional]
**recurrence_week** | [**OneOfMembershipsV2WeekOfMonth**](OneOfMembershipsV2WeekOfMonth.md) | Enum value corresponding to which week of the month this recurring service recurs when RecurrenceType is NthWeekdayOfMonth. Used with RecurrenceDayOfNthWeek. | [optional]
**recurrence_day_of_nth_week** | [**OneOfMembershipsV2WeekDay**](OneOfMembershipsV2WeekDay.md) | Enum value corresponding to which day of the week this recurring service recurs when RecurrenceType is NthWeekdayOfMonth. Used with RecurrenceWeek. | [optional]
**job_start_time** | **string** | Job start time | [optional]
**estimated_payroll_cost** | **float** | Estimated payroll cost | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
