# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AttachmentsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAttachmentsDelete()**](AIAttachmentsApi.md#aiAttachmentsDelete) | **DELETE** /api/2.0/ai/attachments/delete | Delete |
| [**aiAttachmentsDeleteMany()**](AIAttachmentsApi.md#aiAttachmentsDeleteMany) | **DELETE** /api/2.0/ai/attachments/delete-many | Delete many |
| [**aiAttachmentsGet()**](AIAttachmentsApi.md#aiAttachmentsGet) | **POST** /api/2.0/ai/attachments/get | Get |
| [**aiAttachmentsGetMany()**](AIAttachmentsApi.md#aiAttachmentsGetMany) | **POST** /api/2.0/ai/attachments/get-many | Get many |
| [**aiAttachmentsLinkToMessage()**](AIAttachmentsApi.md#aiAttachmentsLinkToMessage) | **POST** /api/2.0/ai/attachments/link-to-message | Link to message |
| [**aiAttachmentsSaveFile()**](AIAttachmentsApi.md#aiAttachmentsSaveFile) | **POST** /api/2.0/ai/attachments/save-file | Save file |
| [**aiAttachmentsSaveFilesMany()**](AIAttachmentsApi.md#aiAttachmentsSaveFilesMany) | **POST** /api/2.0/ai/attachments/save-files-many | Save files many |


## `aiAttachmentsDelete()`

```php
aiAttachmentsDelete($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-delete/).

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


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiAttachmentsDelete($body);
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
aiAttachmentsDeleteMany($request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete many

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-delete-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->aiAttachmentsDeleteMany($request_body);
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
aiAttachmentsGet($body): \OpenAPI\Client\Model\AiAttachment
```

Get

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-get/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment**](../Model/AiAttachment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiAttachmentsGet($body);
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
aiAttachmentsGetMany($request_body): \OpenAPIClientModelAiAttachment[]
```

Get many

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-get-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\OpenAPIClientModelAiAttachment[]**](../Model/AiAttachment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->aiAttachmentsGetMany($request_body);
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

## `aiAttachmentsLinkToMessage()`

```php
aiAttachmentsLinkToMessage($ai_attachments_link_to_message_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Link to message

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-link-to-message/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_link_to_message_request** | [**\OpenAPI\Client\Model\AiAttachmentsLinkToMessageRequest**](../Model/AiAttachmentsLinkToMessageRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-save-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_save_file_request** | [**\OpenAPI\Client\Model\AiAttachmentsSaveFileRequest**](../Model/AiAttachmentsSaveFileRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment**](../Model/AiAttachment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-attachments-save-files-many/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_attachments_save_files_many_request** | [**\OpenAPI\Client\Model\AiAttachmentsSaveFilesManyRequest**](../Model/AiAttachmentsSaveFilesManyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAttachment[]**](../Model/AiAttachment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
