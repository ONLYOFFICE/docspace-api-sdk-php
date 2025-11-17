# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.SearchApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGroupsWithFilesShared()**](GroupSearchApi.md#getGroupsWithFilesShared) | **GET** /api/2.0/group/file/{id} | Get groups with file sharing settings |
| [**getGroupsWithFoldersShared()**](GroupSearchApi.md#getGroupsWithFoldersShared) | **GET** /api/2.0/group/folder/{id} | Get groups with folder sharing settings |
| [**getGroupsWithRoomsShared()**](GroupSearchApi.md#getGroupsWithRoomsShared) | **GET** /api/2.0/group/room/{id} | Get groups with room sharing settings |


## `getGroupsWithFilesShared()`

```php
getGroupsWithFilesShared($id, $exclude_shared, $count, $start_index, $filter_value): \OpenAPI\Client\Model\GroupArrayWrapper
```

Get groups with file sharing settings
Returns groups with their sharing settings for a file with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups-with-files-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The group ID. | |
| **exclude_shared** | **bool**| Specifies whether to exclude the group sharing settings from the response. | [optional] |
| **count** | **int**| The number of groups to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index from which to begin retrieving groups with their sharing settings. | [optional] |
| **filter_value** | **string**| The text used as a filter for retrieving groups with their sharing settings. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupArrayWrapper**](../Model/GroupArrayWrapper.md)

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
$id = 9846; // int | The group ID.
$exclude_shared = true; // bool | Specifies whether to exclude the group sharing settings from the response.
$count = 1234; // int | The number of groups to retrieve in the request.
$start_index = 1234; // int | The starting index from which to begin retrieving groups with their sharing settings.
$filter_value = some text; // string | The text used as a filter for retrieving groups with their sharing settings.

try {
    $result = $apiInstance->getGroupsWithFilesShared($id, $exclude_shared, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getGroupsWithFilesShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsWithFoldersShared()`

```php
getGroupsWithFoldersShared($id, $exclude_shared, $count, $start_index, $filter_value): \OpenAPI\Client\Model\GroupArrayWrapper
```

Get groups with folder sharing settings
Returns groups with their sharing settings in a folder with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups-with-folders-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The group ID. | |
| **exclude_shared** | **bool**| Specifies whether to exclude the group sharing settings from the response. | [optional] |
| **count** | **int**| The number of groups to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index from which to begin retrieving groups with their sharing settings. | [optional] |
| **filter_value** | **string**| The text used as a filter for retrieving groups with their sharing settings. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupArrayWrapper**](../Model/GroupArrayWrapper.md)

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
$id = 9846; // int | The group ID.
$exclude_shared = true; // bool | Specifies whether to exclude the group sharing settings from the response.
$count = 1234; // int | The number of groups to retrieve in the request.
$start_index = 1234; // int | The starting index from which to begin retrieving groups with their sharing settings.
$filter_value = some text; // string | The text used as a filter for retrieving groups with their sharing settings.

try {
    $result = $apiInstance->getGroupsWithFoldersShared($id, $exclude_shared, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getGroupsWithFoldersShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsWithRoomsShared()`

```php
getGroupsWithRoomsShared($id, $exclude_shared, $count, $start_index, $filter_value): \OpenAPI\Client\Model\GroupArrayWrapper
```

Get groups with room sharing settings
Returns groups with their sharing settings in a room with the ID specified in request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups-with-rooms-shared/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The group ID. | |
| **exclude_shared** | **bool**| Specifies whether to exclude the group sharing settings from the response. | [optional] |
| **count** | **int**| The number of groups to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index from which to begin retrieving groups with their sharing settings. | [optional] |
| **filter_value** | **string**| The text used as a filter for retrieving groups with their sharing settings. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupArrayWrapper**](../Model/GroupArrayWrapper.md)

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
$id = 9846; // int | The group ID.
$exclude_shared = true; // bool | Specifies whether to exclude the group sharing settings from the response.
$count = 1234; // int | The number of groups to retrieve in the request.
$start_index = 1234; // int | The starting index from which to begin retrieving groups with their sharing settings.
$filter_value = some text; // string | The text used as a filter for retrieving groups with their sharing settings.

try {
    $result = $apiInstance->getGroupsWithRoomsShared($id, $exclude_shared, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getGroupsWithRoomsShared: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
