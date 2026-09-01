# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AIApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAiApproveToolCall()**](AIAIApi.md#aiAiApproveToolCall) | **POST** /api/2.0/ai/ai/approve-tool-call | Approve tool call |
| [**aiAiDenyToolCall()**](AIAIApi.md#aiAiDenyToolCall) | **POST** /api/2.0/ai/ai/deny-tool-call | Deny tool call |
| [**aiAiRegenerateStream()**](AIAIApi.md#aiAiRegenerateStream) | **POST** /api/2.0/ai/ai/regenerate-stream | Regenerate stream |
| [**aiAiSend()**](AIAIApi.md#aiAiSend) | **POST** /api/2.0/ai/ai/send | Send |
| [**aiAiSendCustom()**](AIAIApi.md#aiAiSendCustom) | **POST** /api/2.0/ai/ai/send-custom | Send custom |
| [**aiAiSendWithStream()**](AIAIApi.md#aiAiSendWithStream) | **POST** /api/2.0/ai/ai/send-with-stream | Send with stream |
| [**aiAiSendWithStreamOpenAI()**](AIAIApi.md#aiAiSendWithStreamOpenAI) | **POST** /api/2.0/ai/ai/send-with-stream-openai | Send with stream open ai |


## `aiAiApproveToolCall()`

```php
aiAiApproveToolCall($ai_ai_approve_tool_call_request): \OpenAPI\Client\Model\AiChatEvent
```

Approve tool call
Resumes a chat round paused on a tool call. The supplied result is persisted onto the assistant message that issued the call and the stream continues with the augmented history.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-approve-tool-call/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_approve_tool_call_request** | [**\OpenAPI\Client\Model\AiAiApproveToolCallRequest**](../Model/AiAiApproveToolCallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_approve_tool_call_request = new \OpenAPI\Client\Model\AiAiApproveToolCallRequest(); // \OpenAPI\Client\Model\AiAiApproveToolCallRequest

try {
    $result = $apiInstance->aiAiApproveToolCall($ai_ai_approve_tool_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiApproveToolCall: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiDenyToolCall()`

```php
aiAiDenyToolCall($ai_ai_tool_call_data): \OpenAPI\Client\Model\AiChatEvent
```

Deny tool call
Denies the pending tool call and resumes the chat immediately, with `User deny tool call` standing in for the tool result.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-deny-tool-call/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_tool_call_data** | [**\OpenAPI\Client\Model\AiAiToolCallData**](../Model/AiAiToolCallData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_tool_call_data = new \OpenAPI\Client\Model\AiAiToolCallData(); // \OpenAPI\Client\Model\AiAiToolCallData

try {
    $result = $apiInstance->aiAiDenyToolCall($ai_ai_tool_call_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiDenyToolCall: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiRegenerateStream()`

```php
aiAiRegenerateStream($ai_ai_regenerate_stream_request): \OpenAPI\Client\Model\AiChatEvent
```

Regenerate stream
Re-rolls the last assistant reply in an existing thread: every message after the last user message (the previous reply plus any tool-call hops) is dropped and a fresh reply is streamed against the unchanged prompt. The thread must already exist and no title is generated.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-regenerate-stream/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_regenerate_stream_request** | [**\OpenAPI\Client\Model\AiAiRegenerateStreamRequest**](../Model/AiAiRegenerateStreamRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_regenerate_stream_request = new \OpenAPI\Client\Model\AiAiRegenerateStreamRequest(); // \OpenAPI\Client\Model\AiAiRegenerateStreamRequest

try {
    $result = $apiInstance->aiAiRegenerateStream($ai_ai_regenerate_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiRegenerateStream: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiSend()`

```php
aiAiSend($ai_ai_send_request): \OpenAPI\Client\Model\AiThreadMessageLike
```

Send
Runs one AI action: the profile bound to `actionType` (falling back to the `Default` slot) is dispatched against a single-message history. Nothing is persisted - no thread, no title generation, no storage writes.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-send/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_send_request** | [**\OpenAPI\Client\Model\AiAiSendRequest**](../Model/AiAiSendRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_send_request = new \OpenAPI\Client\Model\AiAiSendRequest(); // \OpenAPI\Client\Model\AiAiSendRequest

try {
    $result = $apiInstance->aiAiSend($ai_ai_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiSend: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiSendCustom()`

```php
aiAiSendCustom($ai_ai_send_custom_request): \OpenAPI\Client\Model\AiThreadMessageLike
```

Send custom
Runs a free-form one-turn call against a caller-supplied system prompt. No thread, no history and no persistence. The profile is the explicit `profileId` when it resolves, otherwise the `Default` assignment slot.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-send-custom/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_send_custom_request** | [**\OpenAPI\Client\Model\AiAiSendCustomRequest**](../Model/AiAiSendCustomRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_send_custom_request = new \OpenAPI\Client\Model\AiAiSendCustomRequest(); // \OpenAPI\Client\Model\AiAiSendCustomRequest

try {
    $result = $apiInstance->aiAiSendCustom($ai_ai_send_custom_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiSendCustom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiSendWithStream()`

```php
aiAiSendWithStream($ai_ai_send_stream_body): \OpenAPI\Client\Model\AiChatEvent
```

Send with stream
Starts a chat round and streams it back as newline-delimited `ChatEvent` objects. The thread is opened or created, the user message and the reply are persisted, a new thread gets a generated title, and a tool call pauses the round until it is approved or denied.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-send-with-stream/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_send_stream_body** | [**\OpenAPI\Client\Model\AiAiSendStreamBody**](../Model/AiAiSendStreamBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_send_stream_body = new \OpenAPI\Client\Model\AiAiSendStreamBody(); // \OpenAPI\Client\Model\AiAiSendStreamBody

try {
    $result = $apiInstance->aiAiSendWithStream($ai_ai_send_stream_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiSendWithStream: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAiSendWithStreamOpenAI()`

```php
aiAiSendWithStreamOpenAI($ai_ai_send_stream_body): \OpenAPI\Client\Model\AiOpenAIStreamChunk
```

Send with stream open ai
The same chat round as `send-with-stream`, re-encoded as an OpenAI Chat Completions stream of `chat.completion.chunk` objects. Storage, title generation and tool-call pauses are identical - only the wire shape differs; a tool call ends the stream with `finish_reason: tool_calls`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-ai-send-with-stream-open-ai/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_ai_send_stream_body** | [**\OpenAPI\Client\Model\AiAiSendStreamBody**](../Model/AiAiSendStreamBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiOpenAIStreamChunk**](../Model/AiOpenAIStreamChunk.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_ai_send_stream_body = new \OpenAPI\Client\Model\AiAiSendStreamBody(); // \OpenAPI\Client\Model\AiAiSendStreamBody

try {
    $result = $apiInstance->aiAiSendWithStreamOpenAI($ai_ai_send_stream_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiAiSendWithStreamOpenAI: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/event-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
