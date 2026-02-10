# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.QuotaApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resetRoomQuota()**](FilesQuotaApi.md#resetRoomQuota) | **PUT** /api/2.0/files/rooms/resetquota | Reset the room quota limit |
| [**updateRoomsQuota()**](FilesQuotaApi.md#updateRoomsQuota) | **PUT** /api/2.0/files/rooms/roomquota | Change the room quota limit |


## `resetRoomQuota()`

```php
resetRoomQuota($update_rooms_room_ids_request_dto_integer): \OpenAPI\Client\Model\FolderIntegerArrayWrapper
```

Reset the room quota limit
Resets the quota limit for the rooms with the IDs specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/reset-room-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_room_ids_request_dto_integer** | [**\OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDtoInteger**](../Model/UpdateRoomsRoomIdsRequestDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerArrayWrapper**](../Model/FolderIntegerArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\QuotaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_rooms_room_ids_request_dto_integer = new \OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDtoInteger(); // \OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDtoInteger

try {
    $result = $apiInstance->resetRoomQuota($update_rooms_room_ids_request_dto_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotaApi->resetRoomQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoomsQuota()`

```php
updateRoomsQuota($update_rooms_quota_request_dto_integer): \OpenAPI\Client\Model\FolderIntegerArrayWrapper
```

Change the room quota limit
Changes the quota limit for the rooms with the IDs specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-rooms-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_quota_request_dto_integer** | [**\OpenAPI\Client\Model\UpdateRoomsQuotaRequestDtoInteger**](../Model/UpdateRoomsQuotaRequestDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerArrayWrapper**](../Model/FolderIntegerArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\QuotaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_rooms_quota_request_dto_integer = new \OpenAPI\Client\Model\UpdateRoomsQuotaRequestDtoInteger(); // \OpenAPI\Client\Model\UpdateRoomsQuotaRequestDtoInteger

try {
    $result = $apiInstance->updateRoomsQuota($update_rooms_quota_request_dto_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotaApi->updateRoomsQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
