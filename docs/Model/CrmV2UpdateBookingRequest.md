# # CrmV2UpdateBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | Source of the booking | [optional]
**name** | **string** | Name of the booking&#39;s customer | [optional]
**address** | [**\CompWright\ServiceTitan\Model\CrmV2AddressPatchModel**](CrmV2AddressPatchModel.md) |  | [optional]
**customer_type** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateBookingRequestCustomerType**](CrmV2UpdateBookingRequestCustomerType.md) |  | [optional]
**start** | **\DateTime** | Booking&#39;s start date time, in UTC | [optional]
**summary** | **string** | Booking summary | [optional]
**campaign_id** | **int** | ID of the booking&#39;s campaign | [optional]
**business_unit_id** | **int** | ID of the booking&#39;s business unit | [optional]
**job_type_id** | **int** | ID of the booking&#39;s job type | [optional]
**priority** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateBookingRequestPriority**](CrmV2UpdateBookingRequestPriority.md) |  | [optional]
**is_first_time_client** | **bool** | True if first time client | [optional]
**uploaded_images** | **string[]** | Uploaded images | [optional]
**external_id** | **string** | External ID of booking | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
