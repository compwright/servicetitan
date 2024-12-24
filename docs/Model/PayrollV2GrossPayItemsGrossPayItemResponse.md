# # PayrollV2GrossPayItemsGrossPayItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The gross pay item ID | [optional]
**employee_id** | **int** | The employee/technician ID | [optional]
**employee_type** | [**\CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemResponseEmployeeType**](PayrollV2GrossPayItemsGrossPayItemResponseEmployeeType.md) |  | [optional]
**business_unit_name** | **string** | The business unit name | [optional]
**payroll_id** | **int** | The payroll ID |
**date** | **\DateTime** | The date (UTC) of the gross pay item |
**activity** | **string** | The activity | [optional]
**activity_code_id** | **int** | The payroll activity code ID | [optional]
**activity_code** | **string** | The payroll activity code name | [optional]
**amount** | **float** | The amount |
**amount_adjustment** | **float** | The amount adjustment | [optional]
**payout_business_unit_name** | **string** | The payout business unit name | [optional]
**gross_pay_item_type** | [**\CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemResponseGrossPayItemType**](PayrollV2GrossPayItemsGrossPayItemResponseGrossPayItemType.md) |  |
**started_on** | **\DateTime** | The start time (UTC) | [optional]
**ended_on** | **\DateTime** | The end time (UTC) | [optional]
**paid_duration_hours** | **float** | The paid duration in hours | [optional]
**paid_time_type** | [**\CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemResponsePaidTimeType**](PayrollV2GrossPayItemsGrossPayItemResponsePaidTimeType.md) |  | [optional]
**job_id** | **int** | The job ID |
**job_number** | **string** | The job number | [optional]
**job_type_name** | **string** | Name of the job type | [optional]
**project_number** | **string** | The project number | [optional]
**project_id** | **int** | The project ID | [optional]
**invoice_id** | **int** | The invoice ID | [optional]
**invoice_number** | **string** | The invoice number | [optional]
**invoice_item_id** | **int** | The invoice item ID | [optional]
**customer_id** | **int** | The customer ID | [optional]
**customer_name** | **string** | The customer name | [optional]
**location_id** | **int** | The location ID | [optional]
**location_name** | **string** | The location name | [optional]
**location_address** | **string** | The location address | [optional]
**location_zip** | **string** | The location zip | [optional]
**zone_name** | **string** | The zone name | [optional]
**tax_zone_name** | **string** | The tax zone name | [optional]
**labor_type_id** | **int** | ID of the labor type | [optional]
**labor_type_code** | **string** | Code of the labor type | [optional]
**is_prevailing_wage_job** | **bool** | Defines whether it&#39;s a prevailing wage job | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
