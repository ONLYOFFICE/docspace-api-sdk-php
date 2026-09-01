# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.EditorToolsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiEditorToolsCall()**](AIEditorToolsApi.md#aiEditorToolsCall) | **POST** /api/2.0/ai/editor-tools/call | Execute a DocSpace tool on behalf of the editor AI plugin |
| [**aiEditorToolsList()**](AIEditorToolsApi.md#aiEditorToolsList) | **GET** /api/2.0/ai/editor-tools/list | Sanitized DocSpace tool catalog for the editor AI plugin |


## `aiEditorToolsCall()`

```php
aiEditorToolsCall($request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

Execute a DocSpace tool on behalf of the editor AI plugin
Executes one DocSpace tool on behalf of the document editor's AI plugin, server-side and with the caller's forwarded credentials. Whatever the tool produced is returned for the plugin to relay to the model; a failure comes back as an error payload.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-editor-tools-call/).

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


$apiInstance = new OpenAPI\Client\Api\EditorToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiEditorToolsCall($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditorToolsApi->aiEditorToolsCall: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiEditorToolsList()`

```php
aiEditorToolsList(): \OpenAPI\Client\Model\AiSuccessResponse
```

Sanitized DocSpace tool catalog for the editor AI plugin
Returns the sanitized catalog of DocSpace tools available to the document editor's AI plugin - the same composed tool set the DocSpace chat sees, minus the web-search pair the editor already has through its own passthrough. Only the name, description, parameters and approval flag of each tool are exposed; transport details never reach the browser.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-editor-tools-list/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EditorToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiEditorToolsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditorToolsApi->aiEditorToolsList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
