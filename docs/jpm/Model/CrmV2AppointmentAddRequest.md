# # CrmV2AppointmentAddRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_id** | **int** | ID of job for new appointment |
**start** | **\DateTime** | Start date/time (in UTC) of new appointment |
**end** | **\DateTime** | End date/time (in UTC) of new appointment |
**arrival_window_start** | **\DateTime** | Arrival window start date/time (in UTC) for new appointment, if configured | [optional]
**arrival_window_end** | **\DateTime** | Arrival window end date/time (in UTC) for new appointment, if configured | [optional]
**technician_ids** | **int[]** | List of IDs of technicians to assign to new appointment | [optional]
**special_instructions** | **string** | Special instructions associated to the appointment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
