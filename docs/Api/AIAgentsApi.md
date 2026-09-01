# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AgentsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAgentsCreate()**](AIAgentsApi.md#aiAgentsCreate) | **POST** /api/2.0/ai/agents | Create an agent |
| [**aiAgentsDelete()**](AIAgentsApi.md#aiAgentsDelete) | **DELETE** /api/2.0/ai/agents/{id} | Delete an agent |
| [**aiAgentsGet()**](AIAgentsApi.md#aiAgentsGet) | **GET** /api/2.0/ai/agents/{id} | Get an agent |
| [**aiAgentsList()**](AIAgentsApi.md#aiAgentsList) | **GET** /api/2.0/ai/agents | List agents |
| [**aiAgentsNews()**](AIAgentsApi.md#aiAgentsNews) | **GET** /api/2.0/ai/agents/news | List agent news items |
| [**aiAgentsResetQuota()**](AIAgentsApi.md#aiAgentsResetQuota) | **PUT** /api/2.0/ai/agents/resetquota | Reset agents' quota |
| [**aiAgentsUpdate()**](AIAgentsApi.md#aiAgentsUpdate) | **PUT** /api/2.0/ai/agents/{id} | Update an agent |
| [**aiAgentsUpdateQuota()**](AIAgentsApi.md#aiAgentsUpdateQuota) | **PUT** /api/2.0/ai/agents/agentquota | Update agents' quota |


## `aiAgentsCreate()`

```php
aiAgentsCreate($ai_agents_create_request): \OpenAPI\Client\Model\AiFolderIntegerWrapper
```

Create an agent

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_create_request** | [**\OpenAPI\Client\Model\AiAgentsCreateRequest**](../Model/AiAgentsCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderIntegerWrapper**](../Model/AiFolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_agents_create_request = new \OpenAPI\Client\Model\AiAgentsCreateRequest(); // \OpenAPI\Client\Model\AiAgentsCreateRequest

try {
    $result = $apiInstance->aiAgentsCreate($ai_agents_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsDelete()`

```php
aiAgentsDelete($id, $ai_agents_delete_request): \OpenAPI\Client\Model\AiFileOperationWrapper
```

Delete an agent

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-delete/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ai_agents_delete_request** | [**\OpenAPI\Client\Model\AiAgentsDeleteRequest**](../Model/AiAgentsDeleteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFileOperationWrapper**](../Model/AiFileOperationWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$ai_agents_delete_request = new \OpenAPI\Client\Model\AiAgentsDeleteRequest(); // \OpenAPI\Client\Model\AiAgentsDeleteRequest

try {
    $result = $apiInstance->aiAgentsDelete($id, $ai_agents_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsGet()`

```php
aiAgentsGet($id): \OpenAPI\Client\Model\AiFolderIntegerWrapper
```

Get an agent

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-get/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderIntegerWrapper**](../Model/AiFolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->aiAgentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsList()`

```php
aiAgentsList(): \OpenAPI\Client\Model\AiFolderContentIntegerWrapper
```

List agents

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-list/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiFolderContentIntegerWrapper**](../Model/AiFolderContentIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiAgentsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsNews()`

```php
aiAgentsNews(): \OpenAPI\Client\Model\AiNewItemsAgentNewItemsArrayWrapper
```

List agent news items

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-news/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiNewItemsAgentNewItemsArrayWrapper**](../Model/AiNewItemsAgentNewItemsArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiAgentsNews();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsNews: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsResetQuota()`

```php
aiAgentsResetQuota($ai_agents_reset_quota_request): \OpenAPI\Client\Model\AiFolderIntegerArrayWrapper
```

Reset agents' quota

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-reset-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_reset_quota_request** | [**\OpenAPI\Client\Model\AiAgentsResetQuotaRequest**](../Model/AiAgentsResetQuotaRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderIntegerArrayWrapper**](../Model/AiFolderIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_agents_reset_quota_request = new \OpenAPI\Client\Model\AiAgentsResetQuotaRequest(); // \OpenAPI\Client\Model\AiAgentsResetQuotaRequest

try {
    $result = $apiInstance->aiAgentsResetQuota($ai_agents_reset_quota_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsResetQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsUpdate()`

```php
aiAgentsUpdate($id, $ai_agents_update_request): \OpenAPI\Client\Model\AiFolderIntegerWrapper
```

Update an agent

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-update/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ai_agents_update_request** | [**\OpenAPI\Client\Model\AiAgentsUpdateRequest**](../Model/AiAgentsUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderIntegerWrapper**](../Model/AiFolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$ai_agents_update_request = new \OpenAPI\Client\Model\AiAgentsUpdateRequest(); // \OpenAPI\Client\Model\AiAgentsUpdateRequest

try {
    $result = $apiInstance->aiAgentsUpdate($id, $ai_agents_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsUpdateQuota()`

```php
aiAgentsUpdateQuota($ai_agents_update_quota_request): \OpenAPI\Client\Model\AiFolderIntegerArrayWrapper
```

Update agents' quota

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-update-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_update_quota_request** | [**\OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest**](../Model/AiAgentsUpdateQuotaRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderIntegerArrayWrapper**](../Model/AiFolderIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_agents_update_quota_request = new \OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest(); // \OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest

try {
    $result = $apiInstance->aiAgentsUpdateQuota($ai_agents_update_quota_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsUpdateQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
