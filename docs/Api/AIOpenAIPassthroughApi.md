# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.OpenAIPassthroughApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiOpenaiChatCompletions()**](AIOpenAIPassthroughApi.md#aiOpenaiChatCompletions) | **POST** /api/2.0/ai/openai/{profileId}/v1/chat/completions | OpenAI-compatible chat completions proxied to the profile's provider |
| [**aiOpenaiImagesGenerations()**](AIOpenAIPassthroughApi.md#aiOpenaiImagesGenerations) | **POST** /api/2.0/ai/openai/{profileId}/v1/images/generations | OpenAI-compatible image generation proxied to the profile's provider |


## `aiOpenaiChatCompletions()`

```php
aiOpenaiChatCompletions($profile_id, $request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

OpenAI-compatible chat completions proxied to the profile's provider
OpenAI-compatible chat completions for the document editor's AI plugin. The profile is resolved server-side, its credentials are attached, and the body is forwarded to the provider verbatim - the payload is owned by the plugin's SDK on one end and the provider on the other. A client disconnect cancels the provider call.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-openai-chat-completions/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The AI provider profile identifier. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\OpenAIPassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The AI provider profile identifier.
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiOpenaiChatCompletions($profile_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIPassthroughApi->aiOpenaiChatCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiOpenaiImagesGenerations()`

```php
aiOpenaiImagesGenerations($profile_id, $request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

OpenAI-compatible image generation proxied to the profile's provider
OpenAI-compatible image generation for the document editor's AI plugin. As with the chat-completions passthrough, the profile's credentials are attached server-side and the body reaches the provider unchanged.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-openai-images-generations/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The AI provider profile identifier. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\OpenAIPassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The AI provider profile identifier.
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiOpenaiImagesGenerations($profile_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIPassthroughApi->aiOpenaiImagesGenerations: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
