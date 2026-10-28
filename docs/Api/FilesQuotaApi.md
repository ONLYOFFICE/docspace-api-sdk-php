# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.QuotaApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resetRoomQuota()**](FilesQuotaApi.md#resetRoomQuota) | **PUT** /api/2.0/files/rooms/resetquota | Reset the room quota limit |
| [**updateRoomsQuota()**](FilesQuotaApi.md#updateRoomsQuota) | **PUT** /api/2.0/files/rooms/roomquota | Change the room quota limit |


## `resetRoomQuota()`

```php
resetRoomQuota($update_rooms_room_ids_request_dto): \OpenAPI\Client\Model\FolderArrayWrapper
```

Reset the room quota limit
Returns every listed room to the default room quota of the portal and streams the updated rooms back in the  order they were given. This is not the same as removing the limit: the room stops carrying its own value and  starts following the portal default, which a portal administrator can change at any time. The per-room quota  feature has to be on, the caller must be a manager of each listed room, and an archived room or a room in the  trash is refused. The list is not transactional, so rooms processed before a failing one keep the default and  the rest keep what they had. Only numeric room ids are processed, which means ids of rooms stored in a  connected third-party account are silently skipped. Use `PUT api/2.0/files/rooms/roomquota` to set an explicit  value, and a quota of -1 in `PUT api/2.0/files/rooms/{id}` to leave the room with no custom limit at all.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/reset-room-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_room_ids_request_dto** | [**\OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDto**](../Model/UpdateRoomsRoomIdsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderArrayWrapper**](../Model/FolderArrayWrapper.md)

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
$update_rooms_room_ids_request_dto = new \OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDto(); // \OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDto

try {
    $result = $apiInstance->resetRoomQuota($update_rooms_room_ids_request_dto);
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
updateRoomsQuota($update_rooms_quota_request_dto): \OpenAPI\Client\Model\FolderArrayWrapper
```

Change the room quota limit
Sets the same custom storage limit, in bytes, on every listed room and streams the updated rooms back in the  order they were given. The per-room quota feature has to be on for the portal, and the value must stay within  the portal own limit, otherwise the call is refused before anything is written. The caller must be a manager  of each listed room, and an archived room or a room in the trash is refused. The list is not transactional:  rooms processed before the offending one keep their new limit, so a failed call has to be checked room by  room. Only numeric room ids are processed, which means ids of rooms stored in a connected third-party account  are silently skipped. A room whose limit already equals the requested value is left untouched and still  returned. To go back to the portal default use `PUT api/2.0/files/rooms/resetquota`, and to drop the custom  limit entirely send a quota of -1 to `PUT api/2.0/files/rooms/{id}`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-rooms-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_quota_request_dto** | [**\OpenAPI\Client\Model\UpdateRoomsQuotaRequestDto**](../Model/UpdateRoomsQuotaRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderArrayWrapper**](../Model/FolderArrayWrapper.md)

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
$update_rooms_quota_request_dto = new \OpenAPI\Client\Model\UpdateRoomsQuotaRequestDto(); // \OpenAPI\Client\Model\UpdateRoomsQuotaRequestDto

try {
    $result = $apiInstance->updateRoomsQuota($update_rooms_quota_request_dto);
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
