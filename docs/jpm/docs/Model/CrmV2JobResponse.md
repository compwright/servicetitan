# # CrmV2JobResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the job |
**job_number** | **string** | Job number |
**customer_id** | **int** | ID of the job&#39;s customer |
**location_id** | **int** | ID of the job&#39;s location |
**job_status** | **string** | Status of the job |
**completed_on** | **\DateTime** | Date/time (in UTC) when the job was completed | [optional]
**business_unit_id** | **int** | ID of the job&#39;s business unit |
**job_type_id** | **int** | ID of job type |
**priority** | **string** | Priority of the job |
**campaign_id** | **int** | ID of the job&#39;s campaign |
**summary** | **string** | Job summary | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CustomFieldApiModel[]**](CustomFieldApiModel.md) | Custom fields on the job |
**appointment_count** | **int** | Number of appointments on the job |
**first_appointment_id** | **int** | ID of the first appointment on the job |
**last_appointment_id** | **int** | ID of the last appointment on the job |
**recall_for_id** | **int** | ID of the job for which this job is a recall | [optional]
**warranty_id** | **int** | ID of the job for which this job is a warranty | [optional]
**job_generated_lead_source** | [**OneOfJpmJobGeneratedLeadSource**](OneOfJpmJobGeneratedLeadSource.md) | Object that contains:             JobId: ID of the job from which this job was generated             EmployeeId: ID of the office user or technician | [optional]
**no_charge** | **bool** | Whether the job is a no-charge job |
**notifications_enabled** | **bool** | Whether notifications will be sent to customers |
**created_on** | **\DateTime** | Date/time (in UTC) when the job was created |
**created_by_id** | **int** | ID of the user who created the job |
**modified_on** | **\DateTime** | Date/time (in UTC) when job was last modified |
**tag_type_ids** | **int[]** | Tags on the job |
**lead_call_id** | **int** | ID of the Call that resulted in this job | [optional]
**booking_id** | **int** | ID of the Booking that resulted in this job | [optional]
**sold_by_id** | **int** | ID of the Technician that sold this job | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\CrmV2ExternalDataModel[]**](CrmV2ExternalDataModel.md) | List of external data attached to this job, that corresponds to the application guid provided in the request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
