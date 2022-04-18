# # CrmV2LeadResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the lead |
**status** | [**OneOfCrmV2LeadStatus**](OneOfCrmV2LeadStatus.md) | Status of the lead |
**customer_id** | **int** | Customer associated to the lead | [optional]
**location_id** | **int** | Location associated to the lead | [optional]
**business_unit_id** | **int** | Business unit associated to the lead | [optional]
**job_type_id** | **int** | Job type associated to the lead | [optional]
**priority** | [**OneOfCrmV2Priority**](OneOfCrmV2Priority.md) | Priority of the lead |
**campaign_id** | **int** | Campaign associated to the lead |
**summary** | **string** | Summary of the lead | [optional]
**call_reason_id** | **int** | Call reason ID used to classify the lead by the user | [optional]
**follow_up_date** | **\DateTime** | The next time someone is supposed to follow up on this lead | [optional]
**created_on** | **\DateTime** | When the lead was created |
**created_by_id** | **int** | User ID who created this lead |
**modified_on** | **\DateTime** | When the lead was modified |
**tag_type_ids** | **int[]** | List of IDs of tags on the lead | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
