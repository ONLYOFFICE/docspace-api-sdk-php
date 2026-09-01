# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.VectorizationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiVectorizationStartTask()**](AIVectorizationApi.md#aiVectorizationStartTask) | **POST** /api/2.0/ai/vectorization/tasks | Start a vectorization task |


## `aiVectorizationStartTask()`

```php
aiVectorizationStartTask($request_body): \OpenAPI\Client\Model\AiSuccessResponse
```

Start a vectorization task

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-vectorization-start-task/).

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


$apiInstance = new OpenAPI\Client\Api\VectorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->aiVectorizationStartTask($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorizationApi->aiVectorizationStartTask: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
