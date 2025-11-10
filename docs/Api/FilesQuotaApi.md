# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.QuotaApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resetRoomQuota()**](FilesQuotaApi.md#resetRoomQuota) | **PUT** /api/2.0/files/rooms/resetquota |  |
| [**updateRoomsQuota()**](FilesQuotaApi.md#updateRoomsQuota) | **PUT** /api/2.0/files/rooms/roomquota |  |


## `resetRoomQuota()`

```php
resetRoomQuota($update_rooms_room_ids_request_dto_integer): \OpenAPI\Client\Model\FolderIntegerArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/reset-room-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_room_ids_request_dto_integer** | [**\OpenAPI\Client\Model\UpdateRoomsRoomIdsRequestDtoInteger**](../Model/UpdateRoomsRoomIdsRequestDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerArrayWrapper**](../Model/FolderIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-rooms-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_rooms_quota_request_dto_integer** | [**\OpenAPI\Client\Model\UpdateRoomsQuotaRequestDtoInteger**](../Model/UpdateRoomsQuotaRequestDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerArrayWrapper**](../Model/FolderIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
