# CompWright\ServiceTitan\TasksApi

All URIs are relative to https://api-integration.servicetitan.io/taskmanagement/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksCreate()**](TasksApi.md#tasksCreate) | **POST** /tenant/{tenant}/tasks | Tasks_Create
[**tasksCreateSubtask()**](TasksApi.md#tasksCreateSubtask) | **POST** /tenant/{tenant}/tasks/{id}/subtasks | Tasks_CreateSubtask


## `tasksCreate()`

```php
tasksCreate($tenant, $task_management_v2_task_create_request): \CompWright\ServiceTitan\Model\TaskManagementV2TaskCreateResponse
```

Tasks_Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('servicetitanapplicationkey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('servicetitanapplicationkey', 'Bearer');


$apiInstance = new CompWright\ServiceTitan\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$task_management_v2_task_create_request = {"reportedById":0,"assignedToId":0,"isClosed":true,"name":"string","businessUnitId":0,"employeeTaskTypeId":0,"employeeTaskSourceId":0,"employeeTaskResolutionId":0,"reportedDate":"string","completeBy":"string","involvedEmployeeIdList":[0],"customerId":0,"jobId":0,"description":"string","priority":"Low"}; // \CompWright\ServiceTitan\Model\TaskManagementV2TaskCreateRequest

try {
    $result = $apiInstance->tasksCreate($tenant, $task_management_v2_task_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **task_management_v2_task_create_request** | [**\CompWright\ServiceTitan\Model\TaskManagementV2TaskCreateRequest**](../Model/TaskManagementV2TaskCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\TaskManagementV2TaskCreateResponse**](../Model/TaskManagementV2TaskCreateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksCreateSubtask()`

```php
tasksCreateSubtask($id, $tenant, $task_management_v2_subtask_create_request): \CompWright\ServiceTitan\Model\TaskManagementV2SubtaskCreateResponse
```

Tasks_CreateSubtask

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('servicetitanapplicationkey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('servicetitanapplicationkey', 'Bearer');


$apiInstance = new CompWright\ServiceTitan\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$task_management_v2_subtask_create_request = {"isClosed":true,"name":"string","assignedToId":0,"dueDateTime":"string"}; // \CompWright\ServiceTitan\Model\TaskManagementV2SubtaskCreateRequest

try {
    $result = $apiInstance->tasksCreateSubtask($id, $tenant, $task_management_v2_subtask_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreateSubtask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **task_management_v2_subtask_create_request** | [**\CompWright\ServiceTitan\Model\TaskManagementV2SubtaskCreateRequest**](../Model/TaskManagementV2SubtaskCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\TaskManagementV2SubtaskCreateResponse**](../Model/TaskManagementV2SubtaskCreateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
