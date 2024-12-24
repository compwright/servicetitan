# # CrmV2JobCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **int** | ID of the job&#39;s customer |
**location_id** | **int** | ID of the job&#39;s location |
**business_unit_id** | **int** | ID of the job&#39;s business unit |
**job_type_id** | **int** | ID of job type |
**priority** | **string** | Priority of the job |
**campaign_id** | **int** | ID of the job&#39;s campaign |
**appointments** | [**\CompWright\ServiceTitan\Model\CrmV2AppointmentInformation[]**](CrmV2AppointmentInformation.md) | List of appointment information |
**summary** | **string** | Job summary | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomFieldModel[]**](CrmV2CustomFieldModel.md) | Custom fields on the job | [optional]
**tag_type_ids** | **int[]** | List of IDs of tags on the job | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\CrmV2JobCreateRequestExternalData**](CrmV2JobCreateRequestExternalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
