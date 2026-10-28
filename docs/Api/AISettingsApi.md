# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.SettingsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiSettingsGet()**](AISettingsApi.md#aiSettingsGet) | **GET** /api/2.0/ai/config | Get AI settings |
| [**aiSettingsGetToolMode()**](AISettingsApi.md#aiSettingsGetToolMode) | **GET** /api/2.0/ai/config/tool-mode | Get the tool permission mode |
| [**aiSettingsGetUser()**](AISettingsApi.md#aiSettingsGetUser) | **GET** /api/2.0/ai/config/user | Get user AI settings |
| [**aiSettingsGetVectorization()**](AISettingsApi.md#aiSettingsGetVectorization) | **GET** /api/2.0/ai/config/vectorization | Get vectorization settings |
| [**aiSettingsSetToolMode()**](AISettingsApi.md#aiSettingsSetToolMode) | **PUT** /api/2.0/ai/config/tool-mode | Set the tool permission mode |
| [**aiSettingsSetUser()**](AISettingsApi.md#aiSettingsSetUser) | **PUT** /api/2.0/ai/config/user | Update user AI settings |
| [**aiSettingsSetVectorization()**](AISettingsApi.md#aiSettingsSetVectorization) | **PUT** /api/2.0/ai/config/vectorization | Update vectorization settings |


## `aiSettingsGet()`

```php
aiSettingsGet(): \OpenAPI\Client\Model\AiSettingsWrapper
```

Get AI settings
Reports the portal's AI configuration and whether AI is usable at all, which is the first call a client makes before offering any AI feature. It takes no parameters and is proxied unchanged to the DocSpace AI service, so the answer is that service's settings payload. Among other things it says whether the portal runs on the central AI gateway, which decides whether provider profiles can be edited here at all. This is a read-only operation.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiSettingsWrapper**](../Model/AiSettingsWrapper.md)

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

## `aiSettingsGetToolMode()`

```php
aiSettingsGetToolMode(): \OpenAPI\Client\Model\AiSuccessResponse
```

Get the tool permission mode
Returns the calling user's tool permission mode as the DocSpace AI service spells it - `{ mode }` with the service's `ToolPermissionMode` enum (`Ask`, `Auto`, `Allow`), proxied unchanged. The chat reads the same value in its own spelling through `GET api/2.0/ai/preferences/get-tool-permission-mode`. This is a read-only operation.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get-tool-mode/).

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->aiSettingsGetToolMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsGetToolMode: ', $e->getMessage(), PHP_EOL;
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
aiSettingsGetUser(): \OpenAPI\Client\Model\AiUserSettingsWrapper
```

Get user AI settings
Returns the AI settings of the calling user, as opposed to the portal-wide ones. It takes no parameters - the user is the authenticated caller, and there is no way to read somebody else's settings - and is proxied unchanged to the DocSpace AI service. Use `GET api/2.0/ai/config` for the portal-wide configuration. This is a read-only operation.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get-user/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiUserSettingsWrapper**](../Model/AiUserSettingsWrapper.md)

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
Returns the portal's vectorization settings - the embedding provider and the options used when portal content is indexed for retrieval. It takes no parameters and is proxied unchanged to the DocSpace AI service. Vectorization is a portal-wide setting, so there is no room-scoped form of it. Change it with `PUT api/2.0/ai/config/vectorization`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-get-vectorization/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiVectorizationSettingsWrapper**](../Model/AiVectorizationSettingsWrapper.md)

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

## `aiSettingsSetToolMode()`

```php
aiSettingsSetToolMode($ai_settings_set_tool_mode_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set the tool permission mode
Stores the calling user's tool permission mode and returns the stored result. The body (`{ mode }`) is proxied unchanged to the DocSpace AI service, which rejects a value outside its `ToolPermissionMode` enum. The mode applies to every chat of the user in the portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-set-tool-mode/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_settings_set_tool_mode_request** | [**array<string,mixed>**](../Model/mixed.md)| `{ mode }` with the AI service's `ToolPermissionMode` enum, proxied unchanged; the service rejects anything outside the enum. | |

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_settings_set_tool_mode_request = NULL; // array<string,mixed> | `{ mode }` with the AI service's `ToolPermissionMode` enum, proxied unchanged; the service rejects anything outside the enum.

try {
    $result = $apiInstance->aiSettingsSetToolMode($ai_settings_set_tool_mode_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->aiSettingsSetToolMode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSettingsSetUser()`

```php
aiSettingsSetUser($ai_settings_set_user_request): \OpenAPI\Client\Model\AiUserSettingsWrapper
```

Update user AI settings
Replaces the AI settings of the calling user and returns the stored result. `chatRecommendedModelVisible` is required and has to be a real boolean - a body the JSON parser cannot read, such as one sent as text/plain, used to arrive empty and answer 200 having stored nothing. The body is then proxied to the DocSpace AI service, which validates the rest, so a rejected value comes back with that service's verdict. Only the caller's own settings can be written. Portal-wide configuration is not touched by this operation.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-set-user/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_settings_set_user_request** | [**array<string,mixed>**](../Model/mixed.md)| The user's AI settings: `chatRecommendedModelVisible` as a boolean, required. Read the current one with `GET api/2.0/ai/config/user` and send it back changed. | |

### Return type

[**\OpenAPI\Client\Model\AiUserSettingsWrapper**](../Model/AiUserSettingsWrapper.md)

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_settings_set_user_request = NULL; // array<string,mixed> | The user's AI settings: `chatRecommendedModelVisible` as a boolean, required. Read the current one with `GET api/2.0/ai/config/user` and send it back changed.

try {
    $result = $apiInstance->aiSettingsSetUser($ai_settings_set_user_request);
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
aiSettingsSetVectorization($ai_settings_set_vectorization_request): \OpenAPI\Client\Model\AiVectorizationSettingsWrapper
```

Update vectorization settings
Replaces the portal's vectorization settings and returns the stored result. The body is proxied unchanged to the DocSpace AI service, which validates it, so a rejected value is reported with that service's own verdict rather than being checked here. Changing the embedding provider does not re-index anything already indexed - start that separately with `POST api/2.0/ai/vectorization/tasks`. This is a portal-wide setting and requires the permissions the AI service demands for it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-settings-set-vectorization/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_settings_set_vectorization_request** | [**array<string,mixed>**](../Model/mixed.md)| The portal's vectorization settings, proxied unchanged to the DocSpace AI service, which owns and validates the shape. Read the current one with `GET api/2.0/ai/config/vectorization` and send it back changed. | |

### Return type

[**\OpenAPI\Client\Model\AiVectorizationSettingsWrapper**](../Model/AiVectorizationSettingsWrapper.md)

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

$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_settings_set_vectorization_request = NULL; // array<string,mixed> | The portal's vectorization settings, proxied unchanged to the DocSpace AI service, which owns and validates the shape. Read the current one with `GET api/2.0/ai/config/vectorization` and send it back changed.

try {
    $result = $apiInstance->aiSettingsSetVectorization($ai_settings_set_vectorization_request);
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
