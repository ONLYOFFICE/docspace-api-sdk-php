# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ThreadsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiThreadsAppendUserMessage()**](AIThreadsApi.md#aiThreadsAppendUserMessage) | **POST** /api/2.0/ai/threads/append-user-message | Append user message |
| [**aiThreadsClearMessages()**](AIThreadsApi.md#aiThreadsClearMessages) | **DELETE** /api/2.0/ai/threads/clear-messages | Clear messages |
| [**aiThreadsCreate()**](AIThreadsApi.md#aiThreadsCreate) | **POST** /api/2.0/ai/threads/create | Create |
| [**aiThreadsDelete()**](AIThreadsApi.md#aiThreadsDelete) | **DELETE** /api/2.0/ai/threads/delete | Delete |
| [**aiThreadsDeleteMessage()**](AIThreadsApi.md#aiThreadsDeleteMessage) | **DELETE** /api/2.0/ai/threads/delete-message | Delete message |
| [**aiThreadsGetById()**](AIThreadsApi.md#aiThreadsGetById) | **GET** /api/2.0/ai/threads/get-by-id | Get by id |
| [**aiThreadsGetMessageById()**](AIThreadsApi.md#aiThreadsGetMessageById) | **GET** /api/2.0/ai/threads/get-message-by-id | Get message by id |
| [**aiThreadsList()**](AIThreadsApi.md#aiThreadsList) | **GET** /api/2.0/ai/threads/list | List |
| [**aiThreadsOpenOrCreate()**](AIThreadsApi.md#aiThreadsOpenOrCreate) | **POST** /api/2.0/ai/threads/open-or-create | Open or create |
| [**aiThreadsReadMessages()**](AIThreadsApi.md#aiThreadsReadMessages) | **GET** /api/2.0/ai/threads/read-messages | Read messages |
| [**aiThreadsRegenerateTitle()**](AIThreadsApi.md#aiThreadsRegenerateTitle) | **POST** /api/2.0/ai/threads/regenerate-title | Regenerate title |
| [**aiThreadsRename()**](AIThreadsApi.md#aiThreadsRename) | **PUT** /api/2.0/ai/threads/rename | Rename |
| [**aiThreadsTouch()**](AIThreadsApi.md#aiThreadsTouch) | **POST** /api/2.0/ai/threads/touch | Touch |
| [**aiThreadsUpdateMessage()**](AIThreadsApi.md#aiThreadsUpdateMessage) | **PUT** /api/2.0/ai/threads/update-message | Update message |


## `aiThreadsAppendUserMessage()`

```php
aiThreadsAppendUserMessage($ai_threads_append_user_message_request): \OpenAPI\Client\Model\AiThreadMessageLike
```

Append user message

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-append-user-message/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_append_user_message_request** | [**\OpenAPI\Client\Model\AiThreadsAppendUserMessageRequest**](../Model/AiThreadsAppendUserMessageRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_append_user_message_request = new \OpenAPI\Client\Model\AiThreadsAppendUserMessageRequest(); // \OpenAPI\Client\Model\AiThreadsAppendUserMessageRequest

try {
    $result = $apiInstance->aiThreadsAppendUserMessage($ai_threads_append_user_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsAppendUserMessage: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsClearMessages()`

```php
aiThreadsClearMessages($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Clear messages

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-clear-messages/).

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


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiThreadsClearMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsClearMessages: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsCreate()`

```php
aiThreadsCreate($ai_threads_create_request): \OpenAPI\Client\Model\AiThread
```

Create

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_create_request** | [**\OpenAPI\Client\Model\AiThreadsCreateRequest**](../Model/AiThreadsCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiThread**](../Model/AiThread.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_create_request = new \OpenAPI\Client\Model\AiThreadsCreateRequest(); // \OpenAPI\Client\Model\AiThreadsCreateRequest

try {
    $result = $apiInstance->aiThreadsCreate($ai_threads_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsDelete()`

```php
aiThreadsDelete($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-delete/).

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


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiThreadsDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsDeleteMessage()`

```php
aiThreadsDeleteMessage($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete message

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-delete-message/).

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


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiThreadsDeleteMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsDeleteMessage: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsGetById()`

```php
aiThreadsGetById($thread_id): \OpenAPI\Client\Model\AiThread
```

Get by id

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-get-by-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **thread_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiThread**](../Model/AiThread.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->aiThreadsGetById($thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsGetById: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsGetMessageById()`

```php
aiThreadsGetMessageById($message_id): \OpenAPI\Client\Model\AiThreadMessageLike
```

Get message by id

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-get-message-by-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike**](../Model/AiThreadMessageLike.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->aiThreadsGetMessageById($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsGetMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsList()`

```php
aiThreadsList($entity_id, $count, $cursor, $query): \OpenAPI\Client\Model\AiThread[]
```

List

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-list/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |
| **count** | **string**|  | |
| **cursor** | **string**|  | |
| **query** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiThread[]**](../Model/AiThread.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string
$count = 'count_example'; // string
$cursor = 'cursor_example'; // string
$query = 'query_example'; // string

try {
    $result = $apiInstance->aiThreadsList($entity_id, $count, $cursor, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsOpenOrCreate()`

```php
aiThreadsOpenOrCreate($ai_threads_open_or_create_request): \OpenAPI\Client\Model\AiOpenOrCreateResult
```

Open or create

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-open-or-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_open_or_create_request** | [**\OpenAPI\Client\Model\AiThreadsOpenOrCreateRequest**](../Model/AiThreadsOpenOrCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiOpenOrCreateResult**](../Model/AiOpenOrCreateResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_open_or_create_request = new \OpenAPI\Client\Model\AiThreadsOpenOrCreateRequest(); // \OpenAPI\Client\Model\AiThreadsOpenOrCreateRequest

try {
    $result = $apiInstance->aiThreadsOpenOrCreate($ai_threads_open_or_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsOpenOrCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsReadMessages()`

```php
aiThreadsReadMessages($thread_id, $count, $cursor, $direction): \OpenAPI\Client\Model\AiThreadMessageLike[]
```

Read messages

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-read-messages/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **thread_id** | **string**|  | |
| **count** | **string**|  | |
| **cursor** | **string**|  | |
| **direction** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiThreadMessageLike[]**](../Model/AiThreadMessageLike.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thread_id = 'thread_id_example'; // string
$count = 'count_example'; // string
$cursor = 'cursor_example'; // string
$direction = 'direction_example'; // string

try {
    $result = $apiInstance->aiThreadsReadMessages($thread_id, $count, $cursor, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsReadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsRegenerateTitle()`

```php
aiThreadsRegenerateTitle($ai_threads_regenerate_title_request): string
```

Regenerate title

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-regenerate-title/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_regenerate_title_request** | [**\OpenAPI\Client\Model\AiThreadsRegenerateTitleRequest**](../Model/AiThreadsRegenerateTitleRequest.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_regenerate_title_request = new \OpenAPI\Client\Model\AiThreadsRegenerateTitleRequest(); // \OpenAPI\Client\Model\AiThreadsRegenerateTitleRequest

try {
    $result = $apiInstance->aiThreadsRegenerateTitle($ai_threads_regenerate_title_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsRegenerateTitle: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsRename()`

```php
aiThreadsRename($ai_threads_rename_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Rename

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-rename/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_rename_request** | [**\OpenAPI\Client\Model\AiThreadsRenameRequest**](../Model/AiThreadsRenameRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_rename_request = new \OpenAPI\Client\Model\AiThreadsRenameRequest(); // \OpenAPI\Client\Model\AiThreadsRenameRequest

try {
    $result = $apiInstance->aiThreadsRename($ai_threads_rename_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsRename: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsTouch()`

```php
aiThreadsTouch($ai_threads_touch_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Touch

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-touch/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_touch_request** | [**\OpenAPI\Client\Model\AiThreadsTouchRequest**](../Model/AiThreadsTouchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_touch_request = new \OpenAPI\Client\Model\AiThreadsTouchRequest(); // \OpenAPI\Client\Model\AiThreadsTouchRequest

try {
    $result = $apiInstance->aiThreadsTouch($ai_threads_touch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsTouch: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiThreadsUpdateMessage()`

```php
aiThreadsUpdateMessage($ai_threads_update_message_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Update message

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-threads-update-message/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_threads_update_message_request** | [**\OpenAPI\Client\Model\AiThreadsUpdateMessageRequest**](../Model/AiThreadsUpdateMessageRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_threads_update_message_request = new \OpenAPI\Client\Model\AiThreadsUpdateMessageRequest(); // \OpenAPI\Client\Model\AiThreadsUpdateMessageRequest

try {
    $result = $apiInstance->aiThreadsUpdateMessage($ai_threads_update_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThreadsApi->aiThreadsUpdateMessage: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
