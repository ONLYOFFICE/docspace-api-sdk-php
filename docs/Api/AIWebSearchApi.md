# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.WebSearchApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiWebSearchClear()**](AIWebSearchApi.md#aiWebSearchClear) | **DELETE** /api/2.0/ai/web-search/clear | Clear the web-search configuration |
| [**aiWebSearchConfigure()**](AIWebSearchApi.md#aiWebSearchConfigure) | **PUT** /api/2.0/ai/web-search/configure | Configure and verify web search |
| [**aiWebSearchGetActiveConfig()**](AIWebSearchApi.md#aiWebSearchGetActiveConfig) | **GET** /api/2.0/ai/web-search/get-active-config | Get active config |
| [**aiWebSearchIsConfigured()**](AIWebSearchApi.md#aiWebSearchIsConfigured) | **GET** /api/2.0/ai/web-search/is-configured | Is configured |
| [**aiWebSearchPassthroughContents()**](AIWebSearchApi.md#aiWebSearchPassthroughContents) | **POST** /api/2.0/ai/websearch/v1/contents | Web page contents passthrough |
| [**aiWebSearchPassthroughSearch()**](AIWebSearchApi.md#aiWebSearchPassthroughSearch) | **POST** /api/2.0/ai/websearch/v1/search | Web search passthrough |
| [**aiWebSearchSetActiveConfig()**](AIWebSearchApi.md#aiWebSearchSetActiveConfig) | **PUT** /api/2.0/ai/web-search/set-active-config | Set active config |
| [**aiWebSearchTestConnection()**](AIWebSearchApi.md#aiWebSearchTestConnection) | **POST** /api/2.0/ai/web-search/test-connection | Test a web-search provider |


## `aiWebSearchClear()`

```php
aiWebSearchClear($ai_web_search_clear_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Clear the web-search configuration
Removes the portal's web-search configuration, after which web search is unavailable everywhere it was not configured separately. This is not scoped: it takes no `entityId` and any body sent with it is ignored, so it cannot be used to clear one room's configuration. Clearing an already-unconfigured portal is not an error and the call answers success either way. The stored provider key is destroyed with the configuration and has to be entered again.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-clear/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_clear_request** | **string**| Ignored. The operation always clears the portal-wide configuration, so send an empty body; a value here does not scope it to a room. | |

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_web_search_clear_request = 'ai_web_search_clear_request_example'; // string | Ignored. The operation always clears the portal-wide configuration, so send an empty body; a value here does not scope it to a room.

try {
    $result = $apiInstance->aiWebSearchClear($ai_web_search_clear_request);
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

Configure and verify web search
Validates a web-search configuration against the live provider and stores it only if the provider answers, which makes it the safe way to save a form in one step. `entityId` scopes the configuration to a room and has to name one the caller can open; omitting it configures the portal. A `baseUrl` pointing at a private network address is refused. Use `PUT api/2.0/ai/web-search/set-active-config` when the configuration should be stored without a provider round trip.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-configure/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_configure_request** | [**\OpenAPI\Client\Model\AiWebSearchConfigureRequest**](../Model/AiWebSearchConfigureRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiWebSearchMutationResult**](../Model/AiWebSearchMutationResult.md)

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
Returns the web-search configuration in force for a scope - the provider, its endpoint and its settings. `entityId` picks a room and has to name one the caller can open; omitting it reads the portal-wide configuration, and a room with none of its own falls back to that. An unconfigured scope answers an empty result rather than 404. The provider key is not part of the answer, so a client cannot read it back after storing it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-get-active-config/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiWebSearchConfig**](../Model/AiWebSearchConfig.md)

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1234; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

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
Tells whether web search is available in a scope, as a bare boolean, which is the cheap check for hiding or showing the feature. `entityId` picks a room and has to name one the caller can open. It reports the same state as `GET api/2.0/ai/web-search/get-active-config` without transferring the configuration itself. A true answer means a provider is stored, not that the provider is currently reachable - probe that with `POST api/2.0/ai/web-search/test-connection`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-is-configured/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**bool**

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1234; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

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
aiWebSearchPassthroughContents($ai_web_search_passthrough_contents_request): array<string,mixed>
```

Web page contents passthrough
Fetches the contents of web pages on behalf of the document editor's AI plugin, against the portal's active web-search provider, exactly as the search passthrough does — including the `entityId` / `entityKind` billing attribution. The portal-wide configuration is used and a portal without one answers 404. `urls` has to be a non-empty array of strings, or the call answers 400 naming the field. The provider's 4xx status, body and content type are relayed, so its 429 surfaces unchanged, while a 5xx is replaced by a fixed 502 with the detail kept in the server log. This is the follow-up to `POST api/2.0/ai/websearch/v1/search`, which returns the results whose contents this operation retrieves.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-passthrough-contents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_passthrough_contents_request** | [**array<string,mixed>**](../Model/mixed.md)| A page-contents request in the shape the portal's active web-search provider expects, forwarded to it once `urls` passes a type check. The endpoint and the key come from the stored configuration. | |

### Return type

**array<string,mixed>**

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_web_search_passthrough_contents_request = NULL; // array<string,mixed> | A page-contents request in the shape the portal's active web-search provider expects, forwarded to it once `urls` passes a type check. The endpoint and the key come from the stored configuration.

try {
    $result = $apiInstance->aiWebSearchPassthroughContents($ai_web_search_passthrough_contents_request);
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
aiWebSearchPassthroughSearch($ai_web_search_passthrough_search_request): array<string,mixed>
```

Web search passthrough
Runs a web search on behalf of the document editor's AI plugin, which holds only a placeholder configuration - the portal's active provider and its key are resolved here, so neither ever reaches the browser. The portal-wide configuration is used, and a portal without one answers 404. The `entityId` and `entityKind` query parameters name the document the search is billed to; with the ONLYOFFICE provider the entry is resolved under the caller's credentials and sent to the gateway as the request `metadata` (`source_id` / `source_type` / `source_title`), and an entry the caller cannot open sends none. `query` has to be a non-empty string and `numResults`, when sent, a positive integer; a body failing that answers 400 naming the field, before anything is sent on. The provider's own 4xx status, body and content type are relayed as they stand, so a provider that rate-limits answers 429; a 5xx from the provider or from the hop in front of it is not relayed, its detail stays in the server log and the call answers a fixed 502, which is also what an unreachable provider answers. Closing the connection aborts the upstream request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-passthrough-search/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_passthrough_search_request** | [**array<string,mixed>**](../Model/mixed.md)| A search request in the shape the portal's active web-search provider expects, forwarded to it once `query` and `numResults` pass a type check. The endpoint and the key come from the stored configuration and must not be sent here. | |

### Return type

**array<string,mixed>**

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_web_search_passthrough_search_request = NULL; // array<string,mixed> | A search request in the shape the portal's active web-search provider expects, forwarded to it once `query` and `numResults` pass a type check. The endpoint and the key come from the stored configuration and must not be sent here.

try {
    $result = $apiInstance->aiWebSearchPassthroughSearch($ai_web_search_passthrough_search_request);
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
aiWebSearchSetActiveConfig($ai_web_search_set_active_config_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set active config
Stores a web-search configuration without contacting the provider first, for a form that has already validated its input or for restoring a known-good configuration. `entityId` scopes it to a room and has to name one the caller can open. A `baseUrl` pointing at a private network address is still refused, because that check is local. Nothing guarantees the stored provider works: follow up with `POST api/2.0/ai/web-search/test-connection`, or use `PUT api/2.0/ai/web-search/configure` to have the store gated on a live probe.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-set-active-config/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_set_active_config_request** | [**\OpenAPI\Client\Model\AiWebSearchSetActiveConfigRequest**](../Model/AiWebSearchSetActiveConfigRequest.md)|  | |

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_web_search_set_active_config_request = new \OpenAPI\Client\Model\AiWebSearchSetActiveConfigRequest(); // \OpenAPI\Client\Model\AiWebSearchSetActiveConfigRequest

try {
    $result = $apiInstance->aiWebSearchSetActiveConfig($ai_web_search_set_active_config_request);
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

Test a web-search provider
Probes a web-search configuration against the live provider and reports the outcome, storing nothing - this is what a Test button calls so that a failure commits no state. The configuration is taken from the request rather than from storage, so credentials that were never saved can be checked. A `baseUrl` pointing at a private network address is refused before any request leaves the portal. The verdict is carried in the body rather than in the status, so a failed probe still answers 200 and the caller has to read the payload.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-web-search-test-connection/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_web_search_config** | [**\OpenAPI\Client\Model\AiWebSearchConfig**](../Model/AiWebSearchConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiProfilesTestConnection200Response**](../Model/AiProfilesTestConnection200Response.md)

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

$apiInstance = new OpenAPI\Client\Api\WebSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
