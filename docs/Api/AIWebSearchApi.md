# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.WebSearchApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiWebSearchClear()**](AIWebSearchApi.md#aiWebSearchClear) | **DELETE** /api/2.0/ai/web-search/clear | Clear |
| [**aiWebSearchConfigure()**](AIWebSearchApi.md#aiWebSearchConfigure) | **PUT** /api/2.0/ai/web-search/configure | Configure |
| [**aiWebSearchGetActiveConfig()**](AIWebSearchApi.md#aiWebSearchGetActiveConfig) | **GET** /api/2.0/ai/web-search/get-active-config | Get active config |
| [**aiWebSearchIsConfigured()**](AIWebSearchApi.md#aiWebSearchIsConfigured) | **GET** /api/2.0/ai/web-search/is-configured | Is configured |
| [**aiWebSearchPassthroughContents()**](AIWebSearchApi.md#aiWebSearchPassthroughContents) | **POST** /api/2.0/ai/websearch/v1/contents | Web page contents proxied to the portal's active web-search provider |
| [**aiWebSearchPassthroughSearch()**](AIWebSearchApi.md#aiWebSearchPassthroughSearch) | **POST** /api/2.0/ai/websearch/v1/search | Web search proxied to the portal's active web-search provider |
| [**aiWebSearchSetActiveConfig()**](AIWebSearchApi.md#aiWebSearchSetActiveConfig) | **PUT** /api/2.0/ai/web-search/set-active-config | Set active config |
| [**aiWebSearchTestConnection()**](AIWebSearchApi.md#aiWebSearchTestConnection) | **POST** /api/2.0/ai/web-search/test-connection | Test connection |


## `aiWebSearchClear()`

```php
aiWebSearchClear($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Clear
Removes the web-search configuration of the scope. Does nothing when web search was not configured there.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-clear/).

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


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiWebSearchClear($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchClear: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchConfigure()`

```php
aiWebSearchConfigure($ai_web_search_configure_request): \OpenAPI\Client\Model\AiWebSearchMutationResult
```

Configure
Validates a web-search configuration against the live provider and stores it only when the provider answers, replacing the previous one in a single write.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-configure/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_configure_request** | [**\OpenAPI\Client\Model\AiWebSearchConfigureRequest**](../Model/AiWebSearchConfigureRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiWebSearchMutationResult**](../Model/AiWebSearchMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_web_search_configure_request = new \OpenAPI\Client\Model\AiWebSearchConfigureRequest(); // \OpenAPI\Client\Model\AiWebSearchConfigureRequest

try {
    $result = $apiInstance->aiWebSearchConfigure($ai_web_search_configure_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchConfigure: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchGetActiveConfig()`

```php
aiWebSearchGetActiveConfig($entity_id): \OpenAPI\Client\Model\AiWebSearchConfig
```

Get active config
Returns the web-search configuration active in the scope, or an empty result when web search is not configured.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-get-active-config/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiWebSearchConfig**](../Model/AiWebSearchConfig.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiWebSearchGetActiveConfig($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchGetActiveConfig: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchIsConfigured()`

```php
aiWebSearchIsConfigured($entity_id): bool
```

Is configured
Tells whether web search is configured in the scope.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-is-configured/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**bool**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiWebSearchIsConfigured($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchIsConfigured: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchPassthroughContents()`

```php
aiWebSearchPassthroughContents($request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

Web page contents proxied to the portal's active web-search provider
Fetches web page contents on behalf of the document editor's AI plugin, against the portal's active web-search provider, the same way as the search passthrough.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-passthrough-contents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiWebSearchPassthroughContents($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchPassthroughContents: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchPassthroughSearch()`

```php
aiWebSearchPassthroughSearch($request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

Web search proxied to the portal's active web-search provider
Runs a web search on behalf of the document editor's AI plugin. The plugin only holds a placeholder configuration; the portal's active provider and its key are resolved here and never reach the browser.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-passthrough-search/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiWebSearchPassthroughSearch($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchPassthroughSearch: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchSetActiveConfig()`

```php
aiWebSearchSetActiveConfig($ai_web_search_configure_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set active config
Stores a web-search configuration without contacting the provider first, for forms that validate locally.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-set-active-config/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_configure_request** | [**\OpenAPI\Client\Model\AiWebSearchConfigureRequest**](../Model/AiWebSearchConfigureRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_web_search_configure_request = new \OpenAPI\Client\Model\AiWebSearchConfigureRequest(); // \OpenAPI\Client\Model\AiWebSearchConfigureRequest

try {
    $result = $apiInstance->aiWebSearchSetActiveConfig($ai_web_search_configure_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchSetActiveConfig: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiWebSearchTestConnection()`

```php
aiWebSearchTestConnection($ai_web_search_config): \OpenAPI\Client\Model\AiProfilesTestConnection200Response
```

Test connection
Checks a web-search configuration against the live provider without storing it - for a Test button that must not commit on success.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-test-connection/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_config** | [**\OpenAPI\Client\Model\AiWebSearchConfig**](../Model/AiWebSearchConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiProfilesTestConnection200Response**](../Model/AiProfilesTestConnection200Response.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_web_search_config = new \OpenAPI\Client\Model\AiWebSearchConfig(); // \OpenAPI\Client\Model\AiWebSearchConfig

try {
    $result = $apiInstance->aiWebSearchTestConnection($ai_web_search_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebSearchApi->aiWebSearchTestConnection: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
