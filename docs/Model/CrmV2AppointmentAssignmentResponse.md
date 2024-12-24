# # CrmV2AppointmentAssignmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the appointment assignment |
**technician_id** | **int** | ID of the technician |
**technician_name** | **string** | Name of the technician |
**assigned_by_id** | **int** | ID of the user who assigned the appointment assignment |
**assigned_on** | **\DateTime** | Date/time (in UTC) when the appointment assignment was assigned |
**status** | [**\CompWright\ServiceTitan\Model\CrmV2AppointmentAssignmentResponseStatus**](CrmV2AppointmentAssignmentResponseStatus.md) |  |
**is_paused** | **bool** | Whether appointment assignment is paused |
**job_id** | **int** | ID of the job |
**appointment_id** | **int** | ID of the appointment |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
