# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.SearchApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountsEntriesWithFilesShared()**](PeopleSearchApi.md#getAccountsEntriesWithFilesShared) | **GET** /api/2.0/accounts/file/{id}/search | Get account entries with file sharing settings |
| [**getAccountsEntriesWithFoldersShared()**](PeopleSearchApi.md#getAccountsEntriesWithFoldersShared) | **GET** /api/2.0/accounts/folder/{id}/search | Get account entries with folder sharing settings |
| [**getAccountsEntriesWithRoomsShared()**](PeopleSearchApi.md#getAccountsEntriesWithRoomsShared) | **GET** /api/2.0/accounts/room/{id}/search | Get account entries |
| [**getSearch()**](PeopleSearchApi.md#getSearch) | **GET** /api/2.0/people/@search/{query} | Search users |
| [**getSimpleByFilter()**](PeopleSearchApi.md#getSimpleByFilter) | **GET** /api/2.0/people/simple/filter | Search users by extended filter |
| [**getUsersWithFilesShared()**](PeopleSearchApi.md#getUsersWithFilesShared) | **GET** /api/2.0/people/file/{id} | Get users with file sharing settings |
| [**getUsersWithFoldersShared()**](PeopleSearchApi.md#getUsersWithFoldersShared) | **GET** /api/2.0/people/folder/{id} | Get users with folder sharing settings |
| [**getUsersWithRoomShared()**](PeopleSearchApi.md#getUsersWithRoomShared) | **GET** /api/2.0/people/room/{id} | Get users with room sharing settings |
| [**searchUsersByExtendedFilter()**](PeopleSearchApi.md#searchUsersByExtendedFilter) | **GET** /api/2.0/people/filter | Search users with detailed information by extended filter |
| [**searchUsersByQuery()**](PeopleSearchApi.md#searchUsersByQuery) | **GET** /api/2.0/people/search | Search users (using query parameters) |
| [**searchUsersByStatus()**](PeopleSearchApi.md#searchUsersByStatus) | **GET** /api/2.0/people/status/{status}/search | Search users by status filter |


## `getAccountsEntriesWithFilesShared()`

```php
getAccountsEntriesWithFilesShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\ObjectArrayWrapper
```

Get account entries with file sharing settings
Returns the account entries with their sharing settings for a file with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-accounts-entries-with-files-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the account sharing settings from the response. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the account sharing settings in the response. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user is invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The area of the account entries. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of the user types. | [optional] |
| **count** | **int**| The number of items to retrieve in a request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |
| **filter_separator** | **string**| Specifies the separator used in filter expressions. | [optional] |
| **filter_value** | **string**| The text filter applied to the accounts search query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectArrayWrapper**](../Model/ObjectArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the account sharing settings from the response.
$include_shared = true; // bool | Specifies whether to include the account sharing settings in the response.
$invited_by_me = true; // bool | Specifies whether the user is invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The area of the account entries.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of the user types.
$count = 1234; // int | The number of items to retrieve in a request.
$start_index = 1234; // int | The starting index for the query results.
$filter_separator = some text; // string | Specifies the separator used in filter expressions.
$filter_value = some text; // string | The text filter applied to the accounts search query.

try {
    $result = $apiInstance->getAccountsEntriesWithFilesShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getAccountsEntriesWithFilesShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsEntriesWithFoldersShared()`

```php
getAccountsEntriesWithFoldersShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\ObjectArrayWrapper
```

Get account entries with folder sharing settings
Returns the account entries with their sharing settings in a folder with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-accounts-entries-with-folders-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the account sharing settings from the response. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the account sharing settings in the response. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user is invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The area of the account entries. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of the user types. | [optional] |
| **count** | **int**| The number of items to retrieve in a request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |
| **filter_separator** | **string**| Specifies the separator used in filter expressions. | [optional] |
| **filter_value** | **string**| The text filter applied to the accounts search query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectArrayWrapper**](../Model/ObjectArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the account sharing settings from the response.
$include_shared = true; // bool | Specifies whether to include the account sharing settings in the response.
$invited_by_me = true; // bool | Specifies whether the user is invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The area of the account entries.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of the user types.
$count = 1234; // int | The number of items to retrieve in a request.
$start_index = 1234; // int | The starting index for the query results.
$filter_separator = some text; // string | Specifies the separator used in filter expressions.
$filter_value = some text; // string | The text filter applied to the accounts search query.

try {
    $result = $apiInstance->getAccountsEntriesWithFoldersShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getAccountsEntriesWithFoldersShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsEntriesWithRoomsShared()`

```php
getAccountsEntriesWithRoomsShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\ObjectArrayWrapper
```

Get account entries
Returns the account entries with their sharing settings in a room with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-accounts-entries-with-rooms-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the account sharing settings from the response. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the account sharing settings in the response. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user is invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The area of the account entries. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of the user types. | [optional] |
| **count** | **int**| The number of items to retrieve in a request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |
| **filter_separator** | **string**| Specifies the separator used in filter expressions. | [optional] |
| **filter_value** | **string**| The text filter applied to the accounts search query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectArrayWrapper**](../Model/ObjectArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the account sharing settings from the response.
$include_shared = true; // bool | Specifies whether to include the account sharing settings in the response.
$invited_by_me = true; // bool | Specifies whether the user is invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The area of the account entries.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of the user types.
$count = 1234; // int | The number of items to retrieve in a request.
$start_index = 1234; // int | The starting index for the query results.
$filter_separator = some text; // string | Specifies the separator used in filter expressions.
$filter_value = some text; // string | The text filter applied to the accounts search query.

try {
    $result = $apiInstance->getAccountsEntriesWithRoomsShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getAccountsEntriesWithRoomsShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearch()`

```php
getSearch($query, $filter_by, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Search users
Returns a list of users matching the search query.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-search/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search query. | |
| **filter_by** | **string**| Specifies a filter criteria for the user search query. | [optional] |
| **filter_value** | **string**| The value used for filtering users, allowing additional constraints for the query. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = some text; // string | The search query.
$filter_by = some text; // string | Specifies a filter criteria for the user search query.
$filter_value = some text; // string | The value used for filtering users, allowing additional constraints for the query.

try {
    $result = $apiInstance->getSearch($query, $filter_by, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleByFilter()`

```php
getSimpleByFilter($employee_status, $group_id, $activation_status, $employee_type, $employee_types, $is_administrator, $payments, $account_login_type, $quota_filter, $without_group, $exclude_group, $invited_by_me, $inviter_id, $area, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeArrayWrapper
```

Search users by extended filter
Returns a list of users matching the parameters specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-simple-by-filter/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **group_id** | **string**| The group ID. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **employee_type** | [**\OpenAPI\Client\Model\EmployeeType**](../Model/.md)| The user type. | [optional] |
| **employee_types** | [**int[]**](../Model/int.md)| The list of user types. | [optional] |
| **is_administrator** | **bool**| Specifies if the user is an administrator or not. | [optional] |
| **payments** | [**\OpenAPI\Client\Model\Payments**](../Model/.md)| The user payment status. | [optional] |
| **account_login_type** | [**\OpenAPI\Client\Model\AccountLoginType**](../Model/.md)| The account login type. | [optional] |
| **quota_filter** | [**\OpenAPI\Client\Model\QuotaFilter**](../Model/.md)| The quota filter (All - 0, Default - 1, Custom - 2). | [optional] |
| **without_group** | **bool**| Specifies whether the user should be a member of a group or not. | [optional] |
| **exclude_group** | **bool**| Specifies whether the user should be a member of the group with the specified ID. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user is invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The filter area. | [optional] |
| **count** | **int**| The maximum number of items to be retrieved in the response. | [optional] |
| **start_index** | **int**| The zero-based index of the first item to be retrieved in a filtered result set. | [optional] |
| **sort_by** | **string**| Specifies the property or field name by which the results should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_separator** | **string**| Represents the separator used to split filter criteria in query parameters. | [optional] |
| **filter_value** | **string**| The search text used to filter results based on user input. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeArrayWrapper**](../Model/EmployeeArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The group ID.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$employee_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType(); // \OpenAPI\Client\Model\EmployeeType | The user type.
$employee_types = array(56); // int[] | The list of user types.
$is_administrator = true; // bool | Specifies if the user is an administrator or not.
$payments = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Payments(); // \OpenAPI\Client\Model\Payments | The user payment status.
$account_login_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AccountLoginType(); // \OpenAPI\Client\Model\AccountLoginType | The account login type.
$quota_filter = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\QuotaFilter(); // \OpenAPI\Client\Model\QuotaFilter | The quota filter (All - 0, Default - 1, Custom - 2).
$without_group = true; // bool | Specifies whether the user should be a member of a group or not.
$exclude_group = true; // bool | Specifies whether the user should be a member of the group with the specified ID.
$invited_by_me = true; // bool | Specifies whether the user is invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The filter area.
$count = 1234; // int | The maximum number of items to be retrieved in the response.
$start_index = 1234; // int | The zero-based index of the first item to be retrieved in a filtered result set.
$sort_by = some text; // string | Specifies the property or field name by which the results should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_separator = some text; // string | Represents the separator used to split filter criteria in query parameters.
$filter_value = some text; // string | The search text used to filter results based on user input.

try {
    $result = $apiInstance->getSimpleByFilter($employee_status, $group_id, $activation_status, $employee_type, $employee_types, $is_administrator, $payments, $account_login_type, $quota_filter, $without_group, $exclude_group, $invited_by_me, $inviter_id, $area, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSimpleByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersWithFilesShared()`

```php
getUsersWithFilesShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Get users with file sharing settings
Returns the users with the sharing settings in a file with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-users-with-files-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the user sharing settings or not. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the user sharing settings or not. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user was invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The user area. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of user types. | [optional] |
| **count** | **int**| The maximum number of users to be retrieved in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first record to retrieve in a paged query. | [optional] |
| **filter_separator** | **string**| The character or string used to separate multiple filter values in a filtering query. | [optional] |
| **filter_value** | **string**| The filter text value used for searching or filtering user results. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the user sharing settings or not.
$include_shared = true; // bool | Specifies whether to include the user sharing settings or not.
$invited_by_me = true; // bool | Specifies whether the user was invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The user area.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of user types.
$count = 1234; // int | The maximum number of users to be retrieved in the request.
$start_index = 1234; // int | The zero-based index of the first record to retrieve in a paged query.
$filter_separator = some text; // string | The character or string used to separate multiple filter values in a filtering query.
$filter_value = some text; // string | The filter text value used for searching or filtering user results.

try {
    $result = $apiInstance->getUsersWithFilesShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getUsersWithFilesShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersWithFoldersShared()`

```php
getUsersWithFoldersShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Get users with folder sharing settings
Returns the users with the sharing settings in a folder with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-users-with-folders-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the user sharing settings or not. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the user sharing settings or not. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user was invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The user area. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of user types. | [optional] |
| **count** | **int**| The maximum number of users to be retrieved in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first record to retrieve in a paged query. | [optional] |
| **filter_separator** | **string**| The character or string used to separate multiple filter values in a filtering query. | [optional] |
| **filter_value** | **string**| The filter text value used for searching or filtering user results. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the user sharing settings or not.
$include_shared = true; // bool | Specifies whether to include the user sharing settings or not.
$invited_by_me = true; // bool | Specifies whether the user was invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The user area.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of user types.
$count = 1234; // int | The maximum number of users to be retrieved in the request.
$start_index = 1234; // int | The zero-based index of the first record to retrieve in a paged query.
$filter_separator = some text; // string | The character or string used to separate multiple filter values in a filtering query.
$filter_value = some text; // string | The filter text value used for searching or filtering user results.

try {
    $result = $apiInstance->getUsersWithFoldersShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getUsersWithFoldersShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersWithRoomShared()`

```php
getUsersWithRoomShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Get users with room sharing settings
Returns the users with the sharing settings in a room with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-users-with-room-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The user ID. | |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **exclude_shared** | **bool**| Specifies whether to exclude the user sharing settings or not. | [optional] |
| **include_shared** | **bool**| Specifies whether to include the user sharing settings or not. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user was invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The user area. | [optional] |
| **employee_types** | [**\OpenAPI\Client\Model\EmployeeType[]**](../Model/\OpenAPI\Client\Model\EmployeeType.md)| The list of user types. | [optional] |
| **count** | **int**| The maximum number of users to be retrieved in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first record to retrieve in a paged query. | [optional] |
| **filter_separator** | **string**| The character or string used to separate multiple filter values in a filtering query. | [optional] |
| **filter_value** | **string**| The filter text value used for searching or filtering user results. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The user ID.
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$exclude_shared = true; // bool | Specifies whether to exclude the user sharing settings or not.
$include_shared = true; // bool | Specifies whether to include the user sharing settings or not.
$invited_by_me = true; // bool | Specifies whether the user was invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The user area.
$employee_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType()); // \OpenAPI\Client\Model\EmployeeType[] | The list of user types.
$count = 1234; // int | The maximum number of users to be retrieved in the request.
$start_index = 1234; // int | The zero-based index of the first record to retrieve in a paged query.
$filter_separator = some text; // string | The character or string used to separate multiple filter values in a filtering query.
$filter_value = some text; // string | The filter text value used for searching or filtering user results.

try {
    $result = $apiInstance->getUsersWithRoomShared($id, $employee_status, $activation_status, $exclude_shared, $include_shared, $invited_by_me, $inviter_id, $area, $employee_types, $count, $start_index, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getUsersWithRoomShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUsersByExtendedFilter()`

```php
searchUsersByExtendedFilter($employee_status, $group_id, $activation_status, $employee_type, $employee_types, $is_administrator, $payments, $account_login_type, $quota_filter, $without_group, $exclude_group, $invited_by_me, $inviter_id, $area, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Search users with detailed information by extended filter
Returns a list of users with full information about them matching the parameters specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/search-users-by-extended-filter/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | [optional] |
| **group_id** | **string**| The group ID. | [optional] |
| **activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](../Model/.md)| The user activation status. | [optional] |
| **employee_type** | [**\OpenAPI\Client\Model\EmployeeType**](../Model/.md)| The user type. | [optional] |
| **employee_types** | [**int[]**](../Model/int.md)| The list of user types. | [optional] |
| **is_administrator** | **bool**| Specifies if the user is an administrator or not. | [optional] |
| **payments** | [**\OpenAPI\Client\Model\Payments**](../Model/.md)| The user payment status. | [optional] |
| **account_login_type** | [**\OpenAPI\Client\Model\AccountLoginType**](../Model/.md)| The account login type. | [optional] |
| **quota_filter** | [**\OpenAPI\Client\Model\QuotaFilter**](../Model/.md)| The quota filter (All - 0, Default - 1, Custom - 2). | [optional] |
| **without_group** | **bool**| Specifies whether the user should be a member of a group or not. | [optional] |
| **exclude_group** | **bool**| Specifies whether the user should be a member of the group with the specified ID. | [optional] |
| **invited_by_me** | **bool**| Specifies whether the user is invited by the current user or not. | [optional] |
| **inviter_id** | **string**| The inviter ID. | [optional] |
| **area** | [**\OpenAPI\Client\Model\Area**](../Model/.md)| The filter area. | [optional] |
| **count** | **int**| The maximum number of items to be retrieved in the response. | [optional] |
| **start_index** | **int**| The zero-based index of the first item to be retrieved in a filtered result set. | [optional] |
| **sort_by** | **string**| Specifies the property or field name by which the results should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_separator** | **string**| Represents the separator used to split filter criteria in query parameters. | [optional] |
| **filter_value** | **string**| The search text used to filter results based on user input. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The group ID.
$activation_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeActivationStatus(); // \OpenAPI\Client\Model\EmployeeActivationStatus | The user activation status.
$employee_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType(); // \OpenAPI\Client\Model\EmployeeType | The user type.
$employee_types = array(56); // int[] | The list of user types.
$is_administrator = true; // bool | Specifies if the user is an administrator or not.
$payments = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Payments(); // \OpenAPI\Client\Model\Payments | The user payment status.
$account_login_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AccountLoginType(); // \OpenAPI\Client\Model\AccountLoginType | The account login type.
$quota_filter = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\QuotaFilter(); // \OpenAPI\Client\Model\QuotaFilter | The quota filter (All - 0, Default - 1, Custom - 2).
$without_group = true; // bool | Specifies whether the user should be a member of a group or not.
$exclude_group = true; // bool | Specifies whether the user should be a member of the group with the specified ID.
$invited_by_me = true; // bool | Specifies whether the user is invited by the current user or not.
$inviter_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The inviter ID.
$area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Area(); // \OpenAPI\Client\Model\Area | The filter area.
$count = 1234; // int | The maximum number of items to be retrieved in the response.
$start_index = 1234; // int | The zero-based index of the first item to be retrieved in a filtered result set.
$sort_by = some text; // string | Specifies the property or field name by which the results should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_separator = some text; // string | Represents the separator used to split filter criteria in query parameters.
$filter_value = some text; // string | The search text used to filter results based on user input.

try {
    $result = $apiInstance->searchUsersByExtendedFilter($employee_status, $group_id, $activation_status, $employee_type, $employee_types, $is_administrator, $payments, $account_login_type, $quota_filter, $without_group, $exclude_group, $invited_by_me, $inviter_id, $area, $count, $start_index, $sort_by, $sort_order, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUsersByExtendedFilter: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUsersByQuery()`

```php
searchUsersByQuery($query): \OpenAPI\Client\Model\EmployeeArrayWrapper
```

Search users (using query parameters)
Returns a list of users matching the search query. This method uses the query parameters.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/search-users-by-query/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeArrayWrapper**](../Model/EmployeeArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = some text; // string | The search query.

try {
    $result = $apiInstance->searchUsersByQuery($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUsersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUsersByStatus()`

```php
searchUsersByStatus($status, $query, $filter_by, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Search users by status filter
Returns a list of users matching the status filter and search query.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/search-users-by-status/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Model\EmployeeStatus**](../Model/.md)| The user status. | |
| **query** | **string**| The advanced search query. | [optional] |
| **filter_by** | **string**| Specifies the criteria used to filter search results in advanced queries. | [optional] |
| **filter_value** | **string**| The value used to filter the search query. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeStatus(); // \OpenAPI\Client\Model\EmployeeStatus | The user status.
$query = some text; // string | The advanced search query.
$filter_by = some text; // string | Specifies the criteria used to filter search results in advanced queries.
$filter_value = some text; // string | The value used to filter the search query.

try {
    $result = $apiInstance->searchUsersByStatus($status, $query, $filter_by, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUsersByStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
