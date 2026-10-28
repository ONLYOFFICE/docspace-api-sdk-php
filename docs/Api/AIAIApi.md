# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AIApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiApproveToolCall()**](AIAIApi.md#aiApproveToolCall) | **POST** /api/2.0/ai/ai/approve-tool-call | Approve tool call |
| [**aiDenyToolCall()**](AIAIApi.md#aiDenyToolCall) | **POST** /api/2.0/ai/ai/deny-tool-call | Deny tool call |
| [**aiRegenerateStream()**](AIAIApi.md#aiRegenerateStream) | **POST** /api/2.0/ai/ai/regenerate-stream | Regenerate stream |
| [**aiSend()**](AIAIApi.md#aiSend) | **POST** /api/2.0/ai/ai/send | Run an AI action |
| [**aiSendCustom()**](AIAIApi.md#aiSendCustom) | **POST** /api/2.0/ai/ai/send-custom | Send custom |
| [**aiSendWithStream()**](AIAIApi.md#aiSendWithStream) | **POST** /api/2.0/ai/ai/send-with-stream | Send with stream |
| [**aiSendWithStreamOpenAI()**](AIAIApi.md#aiSendWithStreamOpenAI) | **POST** /api/2.0/ai/ai/send-with-stream-openai | Stream a chat in OpenAI format |


## `aiApproveToolCall()`

```php
aiApproveToolCall($ai_approve_tool_call_request): \OpenAPI\Client\Model\AiChatEvent
```

Approve tool call
Resumes a chat round that a tool call has paused, and streams the continuation as newline-delimited `ChatEvent` objects. The result supplied in the request is persisted onto the assistant message that issued the call, so the tool is not executed here - the caller runs it and reports the outcome. The round continues against the augmented history and may pause again on a further tool call. Call `POST api/2.0/ai/ai/deny-tool-call` instead to refuse the call and let the model answer without it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-approve-tool-call/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_approve_tool_call_request** | [**\OpenAPI\Client\Model\AiApproveToolCallRequest**](../Model/AiApproveToolCallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_approve_tool_call_request = new \OpenAPI\Client\Model\AiApproveToolCallRequest(); // \OpenAPI\Client\Model\AiApproveToolCallRequest

try {
    $result = $apiInstance->aiApproveToolCall($ai_approve_tool_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiApproveToolCall: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiDenyToolCall()`

```php
aiDenyToolCall($ai_tool_call_data): \OpenAPI\Client\Model\AiChatEvent
```

Deny tool call
Refuses the tool call a chat round is paused on and resumes it immediately, streaming the continuation as newline-delimited `ChatEvent` objects. The literal `User deny tool call` is persisted in place of the tool result, so the model sees an explicit refusal rather than a missing answer and may reply without the tool or ask for something else. Nothing is executed and no result is accepted from the caller. Use `POST api/2.0/ai/ai/approve-tool-call` to supply a result instead.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-deny-tool-call/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tool_call_data** | [**\OpenAPI\Client\Model\AiToolCallData**](../Model/AiToolCallData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_tool_call_data = new \OpenAPI\Client\Model\AiToolCallData(); // \OpenAPI\Client\Model\AiToolCallData

try {
    $result = $apiInstance->aiDenyToolCall($ai_tool_call_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiDenyToolCall: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiRegenerateStream()`

```php
aiRegenerateStream($ai_regenerate_stream_request): \OpenAPI\Client\Model\AiChatEvent
```

Regenerate stream
Re-rolls the last assistant reply of an existing thread: every message after the last user message - the previous reply and any tool-call hops - is dropped, and a fresh reply is streamed as newline-delimited `ChatEvent` objects against the unchanged prompt. The thread has to exist already, `threadId` is required, and no title is generated. The dropped messages are gone for good, so this is a destructive operation on the thread's tail rather than a retry that keeps both answers. Unlike `send-with-stream` the profile is not verified before the stream opens, so an unusable model surfaces as an error frame inside the 200 rather than as a 4xx.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-regenerate-stream/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_regenerate_stream_request** | [**\OpenAPI\Client\Model\AiRegenerateStreamRequest**](../Model/AiRegenerateStreamRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_regenerate_stream_request = new \OpenAPI\Client\Model\AiRegenerateStreamRequest(); // \OpenAPI\Client\Model\AiRegenerateStreamRequest

try {
    $result = $apiInstance->aiRegenerateStream($ai_regenerate_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiRegenerateStream: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSend()`

```php
aiSend($ai_send_request): \OpenAPI\Client\Model\AiThreadMessageLike
```

Run an AI action
Runs one AI action and returns the whole answer as a single JSON document. The model is the profile bound to `actionType`, falling back to the `Default` assignment slot, so this operation accepts no `profileId` of its own. `actionType` has to be a known action and `userMessage` has to carry text or an attachment, or the call answers 400 before anything runs. Nothing is persisted - no thread is opened, no message is stored and no title is generated - which makes it the one to use for a stand-alone completion rather than for a conversation. `entityId` and `contextEntityId` set the scope of the round, which decides the workspace context and the custom MCP servers it may reach. For a conversation that keeps its history, use `POST api/2.0/ai/ai/send-with-stream` instead.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-send/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_send_request** | [**\OpenAPI\Client\Model\AiSendRequest**](../Model/AiSendRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_send_request = new \OpenAPI\Client\Model\AiSendRequest(); // \OpenAPI\Client\Model\AiSendRequest

try {
    $result = $apiInstance->aiSend($ai_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiSend: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSendCustom()`

```php
aiSendCustom($ai_send_custom_request): \OpenAPI\Client\Model\AiThreadMessageLike
```

Send custom
Runs a free-form one-turn call against a system prompt supplied in the request, with no thread, no history and nothing persisted. The model is the explicit `profileId` when it resolves, otherwise the `Default` assignment slot. `systemPrompt` is required and `userMessage` has to carry text or an attachment, or the call answers 400 before anything runs. The shape of the answer depends on the body rather than on the route: with `isStream: true` it arrives as a newline-delimited stream of chat events, and without it as a single JSON document, so a client has to handle both; `isStream` has to be a real boolean when sent, a string is refused. Use `POST api/2.0/ai/ai/send` when the prompt should come from the portal's own action configuration instead of from the caller.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-send-custom/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_send_custom_request** | [**\OpenAPI\Client\Model\AiSendCustomRequest**](../Model/AiSendCustomRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_send_custom_request = new \OpenAPI\Client\Model\AiSendCustomRequest(); // \OpenAPI\Client\Model\AiSendCustomRequest

try {
    $result = $apiInstance->aiSendCustom($ai_send_custom_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiSendCustom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSendWithStream()`

```php
aiSendWithStream($ai_send_stream_body): \OpenAPI\Client\Model\AiChatEvent
```

Send with stream
Runs one chat round and streams it back as newline-delimited `ChatEvent` objects. Omitting `threadId` opens a new thread, which requires that `entityId` names a room the caller can open and that a profile resolves for it; the user message and the reply are persisted either way, and a new thread also gets a generated title. The model is settled in a fixed order - an agent's assignment in scope overrides everything, then the explicit `profileId`, then the one stored on the thread, then the `Chat` assignment - and the effective profile is checked before the stream opens, so an unknown one fails with 400 rather than as an error buried in a 200. A tool call pauses the round and ends the stream; resume it with `POST api/2.0/ai/ai/approve-tool-call` or `POST api/2.0/ai/ai/deny-tool-call`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-send-with-stream/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_send_stream_body** | [**\OpenAPI\Client\Model\AiSendStreamBody**](../Model/AiSendStreamBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiChatEvent**](../Model/AiChatEvent.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_send_stream_body = new \OpenAPI\Client\Model\AiSendStreamBody(); // \OpenAPI\Client\Model\AiSendStreamBody

try {
    $result = $apiInstance->aiSendWithStream($ai_send_stream_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiSendWithStream: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSendWithStreamOpenAI()`

```php
aiSendWithStreamOpenAI($ai_send_stream_body): \OpenAPI\Client\Model\AiOpenAIStreamChunk
```

Stream a chat in OpenAI format
The same chat round as `send-with-stream`, re-encoded as a server-sent-events stream of OpenAI `chat.completion.chunk` objects terminated by a `[DONE]` sentinel. Thread handling, persistence, title generation and the profile pre-flight are identical, and a tool call ends the stream with `finish_reason: tool_calls` instead of a pause event - resume it through the same approve and deny operations. Unlike `send-with-stream` it does not reject an empty user message and does not enforce the per-kind attachment cap, so validate both before calling. Choose this route only for a client that already speaks the OpenAI wire format; `POST api/2.0/ai/ai/send-with-stream` is the native one.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-send-with-stream-open-ai/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_send_stream_body** | [**\OpenAPI\Client\Model\AiSendStreamBody**](../Model/AiSendStreamBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiOpenAIStreamChunk**](../Model/AiOpenAIStreamChunk.md)

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

$apiInstance = new OpenAPI\Client\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_send_stream_body = new \OpenAPI\Client\Model\AiSendStreamBody(); // \OpenAPI\Client\Model\AiSendStreamBody

try {
    $result = $apiInstance->aiSendWithStreamOpenAI($ai_send_stream_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->aiSendWithStreamOpenAI: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/event-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
