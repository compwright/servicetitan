# # CrmV2AppointmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Appointment ID |
**job_id** | **int** | ID of the job that the appointment was created for |
**appointment_number** | **string** | Appointment number | [optional]
**start** | **\DateTime** | Appointment&#39;s start date/time (in UTC) |
**end** | **\DateTime** | Appointment&#39;s end date/time (in UTC) |
**arrival_window_start** | **\DateTime** | Arrival window start date/time (in UTC), if configured | [optional]
**arrival_window_end** | **\DateTime** | Arrival window end date/time (in UTC), if configured | [optional]
**status** | [**\CompWright\ServiceTitan\Model\CrmV2AppointmentResponseStatus**](CrmV2AppointmentResponseStatus.md) |  |
**special_instructions** | **string** | Special instructions associated to the appointment | [optional]
**created_on** | **\DateTime** | When the appointment was created (in UTC) |
**modified_on** | **\DateTime** | When the appointment was modified (in UTC) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
