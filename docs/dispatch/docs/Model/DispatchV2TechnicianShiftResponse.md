# # DispatchV2TechnicianShiftResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id of the shift record |
**shift_type** | [**OneOfDispatchV2ShiftType**](OneOfDispatchV2ShiftType.md) | How the shift is displayed and contributes to availability calculations |
**title** | **string** | Descriptive identifier |
**note** | **string** | Optional detailed explanation of the shift | [optional]
**active** | **bool** | Whether the shift is enabled |
**technician_id** | **int** | &amp;gt;Unique id of the technician this shift applies to |
**start** | **\DateTime** | When the shift begins |
**end** | **\DateTime** | When the shift ends |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)