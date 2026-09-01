# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ExportApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiExportTextToDocx()**](AIExportApi.md#aiExportTextToDocx) | **POST** /api/2.0/ai/text-to-docx | Start markdown → docx export |


## `aiExportTextToDocx()`

```php
aiExportTextToDocx($ai_export_text_to_docx_request): \OpenAPI\Client\Model\AiExportTextToDocx200Response
```

Start markdown → docx export

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-export-text-to-docx/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_export_text_to_docx_request** | [**\OpenAPI\Client\Model\AiExportTextToDocxRequest**](../Model/AiExportTextToDocxRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiExportTextToDocx200Response**](../Model/AiExportTextToDocx200Response.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
