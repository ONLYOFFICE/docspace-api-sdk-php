# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AttachmentsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAttachmentsDelete()**](AIAttachmentsApi.md#aiAttachmentsDelete) | **DELETE** /api/2.0/ai/attachments/delete | Delete one attachment |
| [**aiAttachmentsDeleteMany()**](AIAttachmentsApi.md#aiAttachmentsDeleteMany) | **DELETE** /api/2.0/ai/attachments/delete-many | Delete many |
| [**aiAttachmentsGet()**](AIAttachmentsApi.md#aiAttachmentsGet) | **POST** /api/2.0/ai/attachments/get | Get one attachment |
| [**aiAttachmentsGetMany()**](AIAttachmentsApi.md#aiAttachmentsGetMany) | **POST** /api/2.0/ai/attachments/get-many | Get many |
| [**aiAttachmentsGetSuggestedQuestions()**](AIAttachmentsApi.md#aiAttachmentsGetSuggestedQuestions) | **POST** /api/2.0/ai/attachments/suggested-questions | Get suggested questions |
| [**aiAttachmentsLinkToMessage()**](AIAttachmentsApi.md#aiAttachmentsLinkToMessage) | **POST** /api/2.0/ai/attachments/link-to-message | Link to message |
| [**aiAttachmentsSaveFile()**](AIAttachmentsApi.md#aiAttachmentsSaveFile) | **POST** /api/2.0/ai/attachments/save-file | Save file |
| [**aiAttachmentsSaveFilesMany()**](AIAttachmentsApi.md#aiAttachmentsSaveFilesMany) | **POST** /api/2.0/ai/attachments/save-files-many | Save files many |


## `aiAttachmentsDelete()`

```php
aiAttachmentsDelete($ai_attachments_delete_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete one attachment
Permanently deletes one attachment, whether it is still a draft or already bound to a message. The ID is not validated here, so a malformed one surfaces as an error relayed from storage rather than as a 400, and an ID that does not exist answers success without deleting anything. Deleting a bound attachment leaves the message in place without it. The deletion cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-delete/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_delete_request** | **string**| The ID of the attachment to delete, as a bare JSON string. | |

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_delete_request = 'ai_attachments_delete_request_example'; // string | The ID of the attachment to delete, as a bare JSON string.

try {
    $result = $apiInstance->aiAttachmentsDelete($ai_attachments_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsDeleteMany()`

```php
aiAttachmentsDeleteMany($ai_attachments_delete_many_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete many
Permanently deletes several attachments in one round trip. `ids` is optional and an absent value is treated as an empty list, so a malformed request quietly deletes nothing instead of failing. IDs that do not exist are skipped without being reported, so the answer confirms only that the call was accepted. The deletions cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-delete-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_delete_many_request** | [**string[]**](../Model/string.md)| The IDs of the attachments to delete, as a bare JSON array of strings. | |

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_delete_many_request = array('ai_attachments_delete_many_request_example'); // string[] | The IDs of the attachments to delete, as a bare JSON array of strings.

try {
    $result = $apiInstance->aiAttachmentsDeleteMany($ai_attachments_delete_many_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsDeleteMany: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsGet()`

```php
aiAttachmentsGet($ai_attachments_get_request): \OpenAPI\Client\Model\AiAttachment
```

Get one attachment
Returns one attachment by its ID, whether it is still a draft or already bound to a message. The ID is required and has to be a non-empty string. An ID that no longer exists is not reported as 404: the answer is a null body with status 200, so treat a missing payload as no such attachment. Use `POST api/2.0/ai/attachments/get-many` to read several at once.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-get/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_get_request** | **string**| The ID of the attachment to read, as a bare JSON string. | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment**](../Model/AiAttachment.md)

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_get_request = 'ai_attachments_get_request_example'; // string | The ID of the attachment to read, as a bare JSON string.

try {
    $result = $apiInstance->aiAttachmentsGet($ai_attachments_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsGetMany()`

```php
aiAttachmentsGetMany($ai_attachments_get_many_request): \OpenAPIClientModelAiAttachment[]
```

Get many
Returns several attachments in one call, aligned by position with the `ids` that were sent, so the answer can be zipped straight onto the request. An ID that no longer exists leaves its slot empty rather than shortening the list, which is how a caller tells which of them are gone. `ids` has to be present and non-empty - an empty batch is rejected rather than answered with an empty list. Nothing is changed by the call.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-get-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_get_many_request** | [**string[]**](../Model/string.md)| The IDs of the attachments to read, as a bare JSON array of strings. The answer is aligned with this array by position. | |

### Return type

[**\OpenAPIClientModelAiAttachment[]**](../Model/AiAttachment.md)

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_get_many_request = array('ai_attachments_get_many_request_example'); // string[] | The IDs of the attachments to read, as a bare JSON array of strings. The answer is aligned with this array by position.

try {
    $result = $apiInstance->aiAttachmentsGetMany($ai_attachments_get_many_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsGetMany: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsGetSuggestedQuestions()`

```php
aiAttachmentsGetSuggestedQuestions($ai_attachments_get_suggested_questions_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Get suggested questions

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-get-suggested-questions/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_get_suggested_questions_request** | [**array<string,mixed>**](../Model/mixed.md)|  | |

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_get_suggested_questions_request = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiAttachmentsGetSuggestedQuestions($ai_attachments_get_suggested_questions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsGetSuggestedQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsLinkToMessage()`

```php
aiAttachmentsLinkToMessage($ai_attachments_link_to_message_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Link to message
Binds draft attachments to the chat message that owns them, after that message has been persisted, so that deleting the message removes them too. All three of `ids`, `messageId` and `threadId` are required, and the references are verified rather than trusted: an unknown message answers 404, a message that belongs to a different thread answers 400, and attachments that no longer exist answer 404 naming each missing ID. That verification exists because the underlying binding call skips unknown IDs silently, which used to report success for a link that had not happened. Drafts stay unbound until this succeeds.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-link-to-message/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_link_to_message_request** | [**\OpenAPI\Client\Model\AiAttachmentsLinkToMessageRequest**](../Model/AiAttachmentsLinkToMessageRequest.md)|  | |

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_link_to_message_request = new \OpenAPI\Client\Model\AiAttachmentsLinkToMessageRequest(); // \OpenAPI\Client\Model\AiAttachmentsLinkToMessageRequest

try {
    $result = $apiInstance->aiAttachmentsLinkToMessage($ai_attachments_link_to_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsLinkToMessage: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsSaveFile()`

```php
aiAttachmentsSaveFile($ai_attachments_save_file_request): \OpenAPI\Client\Model\AiAttachment
```

Save file
Stores one file attachment as a draft and returns it, so its ID can be attached to a message later. `input` carries the host `path` - the DocSpace entry ID the AI backend resolves server-side - the text `content` already extracted from that file, the ONLYOFFICE numeric file `type`, and optionally a `title`; the text is what the model reads, so this operation does not open the file itself. Archives are refused outright, whatever their declared name says. Drafts are not bound to a conversation until `POST api/2.0/ai/attachments/link-to-message` is called, so an unlinked draft outlives the round that created it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-save-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_save_file_request** | [**\OpenAPI\Client\Model\AiAttachmentsSaveFileRequest**](../Model/AiAttachmentsSaveFileRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment**](../Model/AiAttachment.md)

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_save_file_request = new \OpenAPI\Client\Model\AiAttachmentsSaveFileRequest(); // \OpenAPI\Client\Model\AiAttachmentsSaveFileRequest

try {
    $result = $apiInstance->aiAttachmentsSaveFile($ai_attachments_save_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsSaveFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAttachmentsSaveFilesMany()`

```php
aiAttachmentsSaveFilesMany($ai_attachments_save_files_many_request): \OpenAPI\Client\Model\AiAttachment[]
```

Save files many
Stores several file attachments as drafts in one round trip and returns them in the order they were sent. Each entry is validated exactly as the single-file operation validates its `input`, and the first bad one rejects the whole batch with its index named in the message - nothing is stored. `inputs` has to be present and an array: an absent or null value is a malformed request rather than an empty batch, and only an explicit empty array means no files. Follow up with `POST api/2.0/ai/attachments/link-to-message` to bind the drafts to a message.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-save-files-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_save_files_many_request** | [**\OpenAPI\Client\Model\AiAttachmentsSaveFilesManyRequest**](../Model/AiAttachmentsSaveFilesManyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment[]**](../Model/AiAttachment.md)

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

$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_attachments_save_files_many_request = new \OpenAPI\Client\Model\AiAttachmentsSaveFilesManyRequest(); // \OpenAPI\Client\Model\AiAttachmentsSaveFilesManyRequest

try {
    $result = $apiInstance->aiAttachmentsSaveFilesMany($ai_attachments_save_files_many_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->aiAttachmentsSaveFilesMany: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
