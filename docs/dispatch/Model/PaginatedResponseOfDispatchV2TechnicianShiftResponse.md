# # PaginatedResponseOfDispatchV2TechnicianShiftResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page** | **int** | From which page this output has started |
**page_size** | **int** | Page size for this query (i.e. how many records were requested to return) |
**has_more** | **bool** | True if there are more records in the query than returned in this result |
**total_count** | **int** | Total count of records for this query (can optionally be populated) | [optional]
**data** | [**\CompWright\ServiceTitan\Model\DispatchV2TechnicianShiftResponse[]**](DispatchV2TechnicianShiftResponse.md) | The collection of result items, will never have more than PageSize items |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
