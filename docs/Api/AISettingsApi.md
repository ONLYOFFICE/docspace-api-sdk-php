# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.SettingsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiSettingsGet()**](AISettingsApi.md#aiSettingsGet) | **GET** /api/2.0/ai/config | Get AI settings |
| [**aiSettingsGetUser()**](AISettingsApi.md#aiSettingsGetUser) | **GET** /api/2.0/ai/config/user | Get user AI settings |
| [**aiSettingsGetVectorization()**](AISettingsApi.md#aiSettingsGetVectorization) | **GET** /api/2.0/ai/config/vectorization | Get vectorization settings |
| [**aiSettingsSetUser()**](AISettingsApi.md#aiSettingsSetUser) | **PUT** /api/2.0/ai/config/user | Update user AI settings |
| [**aiSettingsSetVectorization()**](AISettingsApi.md#aiSettingsSetVectorization) | **PUT** /api/2.0/ai/config/vectorization | Update vectorization settings |


## `aiSettingsGet()`

```php
aiSettingsGet(): \OpenAPI\Client\Model\AiAiSettingsWrapper
```

Get AI settings

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiAiSettingsWrapper**](../Model/AiAiSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSettingsGetUser()`

```php
aiSettingsGetUser(): \OpenAPI\Client\Model\AiAiUserSettingsWrapper
```

Get user AI settings

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get-user/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiAiUserSettingsWrapper**](../Model/AiAiUserSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiSettingsGetUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsGetUser: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSettingsGetVectorization()`

```php
aiSettingsGetVectorization(): \OpenAPI\Client\Model\AiVectorizationSettingsWrapper
```

Get vectorization settings

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get-vectorization/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiVectorizationSettingsWrapper**](../Model/AiVectorizationSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiSettingsGetVectorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsGetVectorization: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSettingsSetUser()`

```php
aiSettingsSetUser($request_body): \OpenAPI\Client\Model\AiAiUserSettingsWrapper
```

Update user AI settings

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-set-user/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAiUserSettingsWrapper**](../Model/AiAiUserSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiSettingsSetUser($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsSetUser: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSettingsSetVectorization()`

```php
aiSettingsSetVectorization($request_body): \OpenAPI\Client\Model\AiVectorizationSettingsWrapper
```

Update vectorization settings

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-set-vectorization/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiVectorizationSettingsWrapper**](../Model/AiVectorizationSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiSettingsSetVectorization($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsSetVectorization: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
