# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.UserStatusApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getByStatus()**](PeopleUserStatusApi.md#getByStatus) | **GET** /api/2.0/people/status/{status} | Get profiles by status |
| [**updateUserActivationStatus()**](PeopleUserStatusApi.md#updateUserActivationStatus) | **PUT** /api/2.0/people/activationstatus/{activationstatus} | Set an activation status to the users |
| [**updateUserStatus()**](PeopleUserStatusApi.md#updateUserStatus) | **PUT** /api/2.0/people/status/{status} | Change a user status |


## `getByStatus()`

```php
getByStatus($status, $filter_by, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Get profiles by status
Returns a list of profiles filtered by the user status.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-by-status/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | |
| **filter_by** | **string**| Specifies the criteria used to filter the profiles in the request. | [optional] |
| **count** | **int**| The maximum number of user profiles to retrieve. | [optional] |
| **start_index** | **int**| The starting index for retrieving data in a paginated request. | [optional] |
| **sort_by** | **string**| Specifies the property or field name by which the results should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_separator** | **string**| Represents the separator used to split multiple filter criteria in a query string. | [optional] |
| **filter_value** | **string**| A string value representing additional filter criteria used in query parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$filter_by = some text; // string | Specifies the criteria used to filter the profiles in the request.
$count = 1234; // int | The maximum number of user profiles to retrieve.
$start_index = 1234; // int | The starting index for retrieving data in a paginated request.
$sort_by = some text; // string | Specifies the property or field name by which the results should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_separator = some text; // string | Represents the separator used to split multiple filter criteria in a query string.
$filter_value = some text; // string | A string value representing additional filter criteria used in query parameters.

try {
    $result = $apiInstance->getByStatus($status, $filter_by, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserStatusApi->getByStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserActivationStatus()`

```php
updateUserActivationStatus($activationstatus, $update_members_request_dto): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Set an activation status to the users
Sets the required activation status to the list of users with the IDs specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-user-activation-status/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activationstatus** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The new user activation status. | |
| **update_members_request_dto** | [**\OpenAPI\Client\Model\UpdateMembersRequestDto**](../Model/UpdateMembersRequestDto.md)| The request parameters for updating the user information. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activationstatus = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The new user activation status.
$update_members_request_dto = new \OpenAPI\Client\Model\UpdateMembersRequestDto(); // \OpenAPI\Client\Model\UpdateMembersRequestDto | The request parameters for updating the user information.

try {
    $result = $apiInstance->updateUserActivationStatus($activationstatus, $update_members_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserStatusApi->updateUserActivationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserStatus()`

```php
updateUserStatus($status, $update_members_request_dto): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Change a user status
Changes a status of the users with the IDs specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-user-status/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The new user status. | |
| **update_members_request_dto** | [**\OpenAPI\Client\Model\UpdateMembersRequestDto**](../Model/UpdateMembersRequestDto.md)| The request parameters for updating the user information. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The new user status.
$update_members_request_dto = new \OpenAPI\Client\Model\UpdateMembersRequestDto(); // \OpenAPI\Client\Model\UpdateMembersRequestDto | The request parameters for updating the user information.

try {
    $result = $apiInstance->updateUserStatus($status, $update_members_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserStatusApi->updateUserStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
