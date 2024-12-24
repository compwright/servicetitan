# # CrmV2CreateBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | Source of the booking |
**name** | **string** | Name of the customer |
**address** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponseAddress**](CrmV2BookingResponseAddress.md) |  | [optional]
**contacts** | [**\CompWright\ServiceTitan\Model\CrmV2BookingContactModel[]**](CrmV2BookingContactModel.md) | Contacts for the booking | [optional]
**customer_type** | **string** | Type of the customer (Residential/Commercial) | [optional]
**start** | **\DateTime** | Booking&#39;s start Date(time) in UTC | [optional]
**summary** | **string** | Summary of the booking |
**campaign_id** | **int** | ID of the booking&#39;s campaign | [optional]
**business_unit_id** | **int** | ID of the booking&#39;s business unit | [optional]
**job_type_id** | **int** | ID of the booking&#39;s job type | [optional]
**priority** | [**\CompWright\ServiceTitan\Model\CrmV2BookingResponsePriority**](CrmV2BookingResponsePriority.md) |  | [optional]
**is_first_time_client** | **bool** | True if first time client |
**uploaded_images** | **string[]** | Uploaded images | [optional]
**is_send_confirmation_email** | **bool** | Returns true if customer should receive email when booking is created | [optional]
**external_id** | **string** | External ID of booking |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
