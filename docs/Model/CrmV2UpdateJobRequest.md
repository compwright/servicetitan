# # CrmV2UpdateJobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **int** | ID of the job&#39;s customer | [optional]
**location_id** | **int** | ID of the job&#39;s location | [optional]
**business_unit_id** | **int** | ID of the job&#39;s business unit | [optional]
**job_type_id** | **int** | ID of job type | [optional]
**priority** | **string** | Priority of the job | [optional]
**campaign_id** | **int** | ID of the job&#39;s campaign | [optional]
**summary** | **string** | Job summary | [optional]
**should_update_invoice_items** | **bool** | If set to true, update the business unit of invoice items on job&#39;s invoice | [optional]
**custom_fields** | [**\CompWright\ServiceTitan\Model\CrmV2CustomFieldModel[]**](CrmV2CustomFieldModel.md) | List of custom fields and their values. This list must describe the full list of custom fields on the job. If job A has values for custom fields X and Y and this field only contains a model for custom field X, then the value for custom field Y on job A will be removed. | [optional]
**tag_type_ids** | **int[]** | List of tag types. This list must describe the full list of tags on the job. If job A has tags X and Y and this field only contains a ID for tag X, then tag Y on job A will be removed. | [optional]
**external_data** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateJobRequestExternalData**](CrmV2UpdateJobRequestExternalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
