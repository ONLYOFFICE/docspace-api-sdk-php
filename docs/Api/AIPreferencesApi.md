# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.PreferencesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiPreferencesClearDeepMode()**](AIPreferencesApi.md#aiPreferencesClearDeepMode) | **DELETE** /api/2.0/ai/preferences/clear-deep-mode | Clear deep mode |
| [**aiPreferencesGetDeepMode()**](AIPreferencesApi.md#aiPreferencesGetDeepMode) | **GET** /api/2.0/ai/preferences/get-deep-mode | Get deep mode |
| [**aiPreferencesIsDeepModeSet()**](AIPreferencesApi.md#aiPreferencesIsDeepModeSet) | **GET** /api/2.0/ai/preferences/is-deep-mode-set | Is deep mode set |
| [**aiPreferencesSetDeepMode()**](AIPreferencesApi.md#aiPreferencesSetDeepMode) | **PUT** /api/2.0/ai/preferences/set-deep-mode | Set deep mode |


## `aiPreferencesClearDeepMode()`

```php
aiPreferencesClearDeepMode($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Clear deep mode

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-preferences-clear-deep-mode/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiPreferencesClearDeepMode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferencesApi->aiPreferencesClearDeepMode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPreferencesGetDeepMode()`

```php
aiPreferencesGetDeepMode($entity_id): bool
```

Get deep mode

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-preferences-get-deep-mode/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |

### Return type

**bool**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->aiPreferencesGetDeepMode($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferencesApi->aiPreferencesGetDeepMode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPreferencesIsDeepModeSet()`

```php
aiPreferencesIsDeepModeSet($entity_id): bool
```

Is deep mode set

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-preferences-is-deep-mode-set/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |

### Return type

**bool**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->aiPreferencesIsDeepModeSet($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferencesApi->aiPreferencesIsDeepModeSet: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPreferencesSetDeepMode()`

```php
aiPreferencesSetDeepMode($ai_preferences_set_deep_mode_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set deep mode

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-preferences-set-deep-mode/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_preferences_set_deep_mode_request** | [**\OpenAPI\Client\Model\AiPreferencesSetDeepModeRequest**](../Model/AiPreferencesSetDeepModeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_preferences_set_deep_mode_request = new \OpenAPI\Client\Model\AiPreferencesSetDeepModeRequest(); // \OpenAPI\Client\Model\AiPreferencesSetDeepModeRequest

try {
    $result = $apiInstance->aiPreferencesSetDeepMode($ai_preferences_set_deep_mode_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferencesApi->aiPreferencesSetDeepMode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
