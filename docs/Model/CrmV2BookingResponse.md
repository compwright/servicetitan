# # CrmV2BookingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the booking |
**source** | **string** | Source of the booking |
**created_on** | **\DateTime** | when the booking was created |
**name** | **string** | Name of the booking&#39;s customer |
**address** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponseAddress**](CrmV2BookingResponseAddress.md) |  | [optional]
**customer_type** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponseCustomerType**](CrmV2BookingResponseCustomerType.md) |  | [optional]
**start** | **\DateTime** | Booking&#39;s start date time, in UTC |
**summary** | **string** | Booking summary | [optional]
**campaign_id** | **int** | ID of the booking&#39;s campaign | [optional]
**business_unit_id** | **int** | ID of the booking&#39;s business unit | [optional]
**is_first_time_client** | **bool** | Returns true if first time client | [optional]
**uploaded_images** | **string[]** | Uploaded images | [optional]
**is_send_confirmation_email** | **bool** | Returns true if customer should receive email when booking is created | [optional]
**status** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponseStatus**](CrmV2BookingResponseStatus.md) |  |
**dismissing_reason_id** | **int** | ID of the reason booking was dismissed | [optional]
**job_id** | **int** | ID of the job booked from the booking | [optional]
**external_id** | **string** | External ID of booking |
**priority** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponsePriority**](CrmV2BookingResponsePriority.md) |  | [optional]
**job_type_id** | **int** | ID of the booking&#39;s job type | [optional]
**booking_provider_id** | **int** | Booking provider id |
**modified_on** | **\DateTime** | When the booking was modified |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
