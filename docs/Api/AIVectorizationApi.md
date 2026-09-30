# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.VectorizationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiVectorizationStartTask()**](AIVectorizationApi.md#aiVectorizationStartTask) | **POST** /api/2.0/ai/vectorization/tasks | Start a vectorization task |


## `aiVectorizationStartTask()`

```php
aiVectorizationStartTask($ai_vectorization_start_task_request): \OpenAPI\Client\Model\AiVectorizationStartTask200Response
```

Start a vectorization task
Queues the indexing of the portal files named in the body so their contents can be retrieved during a chat round. The body is proxied unchanged to the DocSpace AI service, which validates it and owns the job. Indexing is asynchronous and fire-and-forget: the answer acknowledges the request without carrying a job handle, so there is nothing to poll and progress is not reported here. The embedding provider used is the one in `GET api/2.0/ai/config/vectorization`, and changing that setting does not re-index anything already indexed - queue it again for that.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-vectorization-start-task/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_vectorization_start_task_request** | [**\OpenAPI\Client\Model\AiVectorizationStartTaskRequest**](../Model/AiVectorizationStartTaskRequest.md)| The files to index, proxied unchanged to the DocSpace AI service, which owns and validates the shape. | |

### Return type

[**\OpenAPI\Client\Model\AiVectorizationStartTask200Response**](../Model/AiVectorizationStartTask200Response.md)

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

$apiInstance = new OpenAPI\Client\Api\VectorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_vectorization_start_task_request = new \OpenAPI\Client\Model\AiVectorizationStartTaskRequest(); // \OpenAPI\Client\Model\AiVectorizationStartTaskRequest | The files to index, proxied unchanged to the DocSpace AI service, which owns and validates the shape.

try {
    $result = $apiInstance->aiVectorizationStartTask($ai_vectorization_start_task_request);
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
