# # MembershipsV2InvoiceTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Invoice template ID |
**name** | **string** | Invoice template name (can be absent) | [optional]
**created_on** | **\DateTime** | Invoice template creation date |
**created_by_id** | **int** | ID of the user that created invoice template | [optional]
**active** | **bool** | Whether invoice template is active |
**total** | **float** | Invoice template total |
**is_settings_template** | **bool** | Whether invoice template is shared |
**import_id** | **string** | Import ID | [optional]
**items** | [**\CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateItemResponse[]**](MembershipsV2InvoiceTemplateItemResponse.md) | A list of invoice template items |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
