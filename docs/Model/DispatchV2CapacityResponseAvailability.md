# # DispatchV2CapacityResponseAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | **\DateTime** | When the availability time frame starts |
**end** | **\DateTime** | When the availability time frame ends |
**business_unit_ids** | **int[]** | Business units that the availability applies to |
**total_availability** | **float** | Number of jobs that total capacity can allow to be booked during this time frame |
**open_availability** | **float** | Number of remaining jobs that can be booked during this time frame |
**technicians** | [**\CompWright\ServiceTitan\Model\DispatchV2CapacityResponseTechnician[]**](DispatchV2CapacityResponseTechnician.md) | Technician details for this availability time frame |
**is_exceeding_ideal_booking_percentage** | **bool** | Indicate if Ideal Booking Percentage is exceeded |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
