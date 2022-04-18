# # DispatchV2GpsPingCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_id** | **string** | Gets or sets the ID of the object for which location information is provided |
**unit_name** | **string** | Gets or sets the name of the object for which location information is provided |
**event_time** | **\DateTime** | Gets or sets the time of the recording |
**latitude** | **double** | Gets or sets the latitude coordinate of the unit&#39;s location at the time of recording | [optional]
**longitude** | **double** | Gets or sets the longitude coordinate of the unit&#39;s location at the time of recording | [optional]
**speed** | **double** | Gets or sets the speed of the vehicle at the time of recording | [optional]
**street** | **string** | Gets the location&#39;s street address |
**city** | **string** | Gets the location&#39;s city |
**region** | **string** | Gets the location&#39;s region |
**postal_code** | **string** | Gets the location&#39;s postal code |
**message** | **string** | Gets or sets the response message received from the GPS provider about the unit at the time of recording |
**external_id** | **string** | Unique External ID for data point |
**is_new** | **bool** | Indicate if gps ping unit is a new one |
**status_message** | **string** | Gets the status message |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
