# CompWright\ServiceTitan\TimesheetsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**timesheetsGetJobTimesheets()**](TimesheetsApi.md#timesheetsGetJobTimesheets) | **GET** /payroll/v2/tenant/{tenant}/jobs/{job}/timesheets | Gets a list of job timesheets |


## `timesheetsGetJobTimesheets()`

```php
timesheetsGetJobTimesheets($job, $tenant, $technician_id, $started_on, $ended_on): \CompWright\ServiceTitan\Model\PayrollV2TimesheetsJobTimesheetResponse[]
```

Gets a list of job timesheets

Gets a list of job timesheets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerToken
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: appKey
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');


$apiInstance = new CompWright\ServiceTitan\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$technician_id = 56; // int | Format - int64. The technician ID
$started_on = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates after certain date/time (in UTC)
$ended_on = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates before certain date/time (in UTC)

try {
    $result = $apiInstance->timesheetsGetJobTimesheets($job, $tenant, $technician_id, $started_on, $ended_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsGetJobTimesheets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **technician_id** | **int**| Format - int64. The technician ID | [optional] |
| **started_on** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates after certain date/time (in UTC) | [optional] |
| **ended_on** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates before certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PayrollV2TimesheetsJobTimesheetResponse[]**](../Model/PayrollV2TimesheetsJobTimesheetResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
