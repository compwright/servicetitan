# CompWright\ServiceTitan\CustomerMembershipsApi

All URIs are relative to https://api-integration.servicetitan.io/memberships/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerMembershipsCreate()**](CustomerMembershipsApi.md#customerMembershipsCreate) | **POST** /tenant/{tenant}/memberships/sale | Creates membership sale invoice
[**customerMembershipsGet()**](CustomerMembershipsApi.md#customerMembershipsGet) | **GET** /tenant/{tenant}/memberships/{id} | Gets customer membership specified by ID
[**customerMembershipsGetList()**](CustomerMembershipsApi.md#customerMembershipsGetList) | **GET** /tenant/{tenant}/memberships | Gets a list of customer memberships
[**customerMembershipsUpdate()**](CustomerMembershipsApi.md#customerMembershipsUpdate) | **PATCH** /tenant/{tenant}/memberships/{id} | Updates specified customer membership in \&quot;patch\&quot; mode


## `customerMembershipsCreate()`

```php
customerMembershipsCreate($tenant, $memberships_v2_membership_sale_invoice_create_request): \CompWright\ServiceTitan\Model\MembershipsV2MembershipSaleInvoiceCreateResponse
```

Creates membership sale invoice

Creates membership sale invoice

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomerMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$memberships_v2_membership_sale_invoice_create_request = {"customerId":0,"businessUnitId":0,"saleTaskId":0,"durationBillingId":0,"locationId":0,"recurringServiceAction":{},"recurringLocationId":0}; // \CompWright\ServiceTitan\Model\MembershipsV2MembershipSaleInvoiceCreateRequest

try {
    $result = $apiInstance->customerMembershipsCreate($tenant, $memberships_v2_membership_sale_invoice_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerMembershipsApi->customerMembershipsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **memberships_v2_membership_sale_invoice_create_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2MembershipSaleInvoiceCreateRequest**](../Model/MembershipsV2MembershipSaleInvoiceCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\MembershipsV2MembershipSaleInvoiceCreateResponse**](../Model/MembershipsV2MembershipSaleInvoiceCreateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerMembershipsGet()`

```php
customerMembershipsGet($id, $tenant): \CompWright\ServiceTitan\Model\MembershipsV2CustomerMembershipResponse
```

Gets customer membership specified by ID

Gets customer membership specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomerMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Customer membership ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->customerMembershipsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerMembershipsApi->customerMembershipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Customer membership ID |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\MembershipsV2CustomerMembershipResponse**](../Model/MembershipsV2CustomerMembershipResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerMembershipsGetList()`

```php
customerMembershipsGetList($tenant, $ids, $customer_ids, $active, $status, $duration, $billing_frequency, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2CustomerMembershipResponse
```

Gets a list of customer memberships

Gets a list of customer memberships

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomerMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$customer_ids = 'customer_ids_example'; // string | Filters by customer IDs
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$status = 'status_example'; // OneOfMembershipsV2MembershipStatus | Filters by membership status\\ Values: [Active, Suspended, Expired, Canceled, Deleted]
$duration = 56; // int | Format - int32. Filters by membership duration (in months); use null for ongoing memberships
$billing_frequency = 'billing_frequency_example'; // OneOfMembershipsV2MembershipRecurrenceType | Filters by membership billing frequency\\ Values: [OneTime, Monthly, EveryOtherMonth, Quarterly, BiAnnual, Annual]
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->customerMembershipsGetList($tenant, $ids, $customer_ids, $active, $status, $duration, $billing_frequency, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerMembershipsApi->customerMembershipsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **customer_ids** | **string**| Filters by customer IDs | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **status** | **OneOfMembershipsV2MembershipStatus**| Filters by membership status\\ Values: [Active, Suspended, Expired, Canceled, Deleted] | [optional]
 **duration** | **int**| Format - int32. Filters by membership duration (in months); use null for ongoing memberships | [optional]
 **billing_frequency** | **OneOfMembershipsV2MembershipRecurrenceType**| Filters by membership billing frequency\\ Values: [OneTime, Monthly, EveryOtherMonth, Quarterly, BiAnnual, Annual] | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2CustomerMembershipResponse**](../Model/PaginatedResponseOfMembershipsV2CustomerMembershipResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerMembershipsUpdate()`

```php
customerMembershipsUpdate($id, $tenant, $memberships_v2_customer_membership_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Updates specified customer membership in \"patch\" mode

Updates specified customer membership in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomerMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Customer membership ID
$tenant = 56; // int | Tenant ID
$memberships_v2_customer_membership_update_request = {"businessUnitId":0,"nextScheduledBillDate":"string","status":{},"memo":"string","from":"string","to":"string","soldById":0,"billingTemplateId":0,"locationId":0,"recurringServiceAction":{},"recurringLocationId":0,"paymentMethodId":0,"paymentTypeId":0,"renewalMembershipTaskId":0,"initialDeferredRevenue":0,"cancellationBalanceInvoiceId":0,"cancellationInvoiceId":0}; // \CompWright\ServiceTitan\Model\MembershipsV2CustomerMembershipUpdateRequest | Customer membership update request

try {
    $result = $apiInstance->customerMembershipsUpdate($id, $tenant, $memberships_v2_customer_membership_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerMembershipsApi->customerMembershipsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Customer membership ID |
 **tenant** | **int**| Tenant ID |
 **memberships_v2_customer_membership_update_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2CustomerMembershipUpdateRequest**](../Model/MembershipsV2CustomerMembershipUpdateRequest.md)| Customer membership update request | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\ModificationResponse**](../Model/ModificationResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
