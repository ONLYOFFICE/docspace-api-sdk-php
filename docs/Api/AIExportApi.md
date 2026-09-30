# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ExportApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiExportTextToDocx()**](AIExportApi.md#aiExportTextToDocx) | **POST** /api/2.0/ai/text-to-docx | Start markdown export |


## `aiExportTextToDocx()`

```php
aiExportTextToDocx($ai_export_text_to_docx_request): \OpenAPI\Client\Model\AiExportTextToDocx202Response
```

Start markdown export
Queues a markdown export and answers 202 as soon as the job is accepted, without waiting for it. `title`, `content` and `folderId` are all required, and a `content` of only whitespace counts as missing even though it is not empty. `format` is optional and selects the output - `Docx` (the default), `Pdf`, or `Md`, which stores the markdown verbatim instead of converting it. The conversion runs in the AI worker, which saves the .docx into the target folder - an agent room resolves to its own result-storage subfolder - so there is nothing to poll here: completion arrives as the ordinary folder-modified socket event. This route accepts a body of up to 15 MB rather than the 100 KB the rest of the API allows, because a whole thread transcript is sent in one request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-export-text-to-docx/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_export_text_to_docx_request** | [**\OpenAPI\Client\Model\AiExportTextToDocxRequest**](../Model/AiExportTextToDocxRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiExportTextToDocx202Response**](../Model/AiExportTextToDocx202Response.md)

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

$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_export_text_to_docx_request = new \OpenAPI\Client\Model\AiExportTextToDocxRequest(); // \OpenAPI\Client\Model\AiExportTextToDocxRequest

try {
    $result = $apiInstance->aiExportTextToDocx($ai_export_text_to_docx_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->aiExportTextToDocx: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
