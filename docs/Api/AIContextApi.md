# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ContextApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiContextGetContextFolders()**](AIContextApi.md#aiContextGetContextFolders) | **GET** /api/2.0/ai/context/get-context-folders | Get context folders |
| [**aiContextGetRoomSkill()**](AIContextApi.md#aiContextGetRoomSkill) | **GET** /api/2.0/ai/context/get-room-skill | Get room skill |
| [**aiContextGetRoomSkills()**](AIContextApi.md#aiContextGetRoomSkills) | **GET** /api/2.0/ai/context/get-room-skills | Get room skills |


## `aiContextGetContextFolders()`

```php
aiContextGetContextFolders(): \OpenAPI\Client\Model\AiSuccessResponse
```

Get context folders

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-context-get-context-folders/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->aiContextGetContextFolders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->aiContextGetContextFolders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiContextGetRoomSkill()`

```php
aiContextGetRoomSkill($cloud, $room_id, $skill_id): \OpenAPI\Client\Model\AiSuccessResponse
```

Get room skill

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-context-get-room-skill/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud** | **string**|  | |
| **room_id** | **string**|  | |
| **skill_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud = 'cloud_example'; // string
$room_id = 'room_id_example'; // string
$skill_id = 'skill_id_example'; // string

try {
    $result = $apiInstance->aiContextGetRoomSkill($cloud, $room_id, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->aiContextGetRoomSkill: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiContextGetRoomSkills()`

```php
aiContextGetRoomSkills($cloud, $room_id): \OpenAPI\Client\Model\AiSuccessResponse
```

Get room skills

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-context-get-room-skills/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud** | **string**|  | |
| **room_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud = 'cloud_example'; // string
$room_id = 'room_id_example'; // string

try {
    $result = $apiInstance->aiContextGetRoomSkills($cloud, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->aiContextGetRoomSkills: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
