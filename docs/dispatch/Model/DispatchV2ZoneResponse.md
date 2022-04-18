# # DispatchV2ZoneResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id of the zone record |
**active** | **bool** | Whether the zone is enabled |
**name** | **string** | Descriptive identifier | [optional]
**zips** | **string[]** | A list of assigned zip codes to the zone | [optional]
**cities** | **string[]** | A list of assigned cities to the zone | [optional]
**territory_numbers** | **string[]** | A list of assigned territory numbers to the zone | [optional]
**locn_numbers** | **string[]** | A list of assigned LOCN numbers to the zone | [optional]
**created_by** | **int** | User ID who created the zone |
**created_on** | **\DateTime** | Date/time (in UTC) the zone was created |
**modified_on** | **\DateTime** | Date/time (in UTC) the zone was last modified |
**service_days_enabled** | **bool** | Whether the service days option is enabled |
**service_days** | **string[]** | A list of assigned service days | [optional]
**business_units** | **int[]** | A list of assigned business units | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
