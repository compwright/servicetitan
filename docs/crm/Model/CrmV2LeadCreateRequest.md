# # CrmV2LeadCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **int** | ID of the customer | [optional]
**location_id** | **int** | ID of the location | [optional]
**campaign_id** | **int** | ID of the campaign |
**business_unit_id** | **int** | ID of the business unit | [optional]
**job_type_id** | **int** | ID of job type | [optional]
**summary** | **string** | Lead summary |
**tag_type_ids** | **int[]** | List of IDs of tags on the lead | [optional]
**priority** | [**OneOfCrmV2Priority**](OneOfCrmV2Priority.md) | Priority of the lead | [optional]
**call_reason_id** | **int** | ID of the call reason | [optional]
**follow_up_date** | **\DateTime** | Date of when to follow up | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
