# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ClientQueryingApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClient()**](OAuth20ClientQueryingApi.md#getClient) | **GET** /api/2.0/clients/{clientId} | Get client details |
| [**getClientInfo()**](OAuth20ClientQueryingApi.md#getClientInfo) | **GET** /api/2.0/clients/{clientId}/info | Retrieves detailed information for a specific client |
| [**getClients()**](OAuth20ClientQueryingApi.md#getClients) | **GET** /api/2.0/clients | List clients |
| [**getClientsInfo()**](OAuth20ClientQueryingApi.md#getClientsInfo) | **GET** /api/2.0/clients/info | Retrieves a pageable list of client information |
| [**getConsents()**](OAuth20ClientQueryingApi.md#getConsents) | **GET** /api/2.0/clients/consents | Retrieves a pageable list of consents |
| [**getPublicClientInfo()**](OAuth20ClientQueryingApi.md#getPublicClientInfo) | **GET** /api/2.0/clients/{clientId}/public/info | Handles the GET request for public client information |


## `getClient()`

```php
getClient($client_id): \OpenAPI\Client\Model\ClientResponse
```

Get client details
Retrieves detailed information about a specific OAuth2 client including its name, description, redirect URIs, and scopes.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to retrieve | |

### Return type

[**\OpenAPI\Client\Model\ClientResponse**](../Model/ClientResponse.md)

### Authorization

[x-signature](../../README.md#x-signature)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-signature
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-signature', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to retrieve

try {
    $result = $apiInstance->getClient($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getClient: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientInfo()`

```php
getClientInfo($client_id): \OpenAPI\Client\Model\ClientInfoResponse
```

Retrieves detailed information for a specific client
Retrieves the detailed information for a client with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-client-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to retrieve | |

### Return type

[**\OpenAPI\Client\Model\ClientInfoResponse**](../Model/ClientInfoResponse.md)

### Authorization

[x-signature](../../README.md#x-signature)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-signature
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-signature', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to retrieve

try {
    $result = $apiInstance->getClientInfo($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getClientInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClients()`

```php
getClients($limit, $last_client_id, $last_created_on): \OpenAPI\Client\Model\PageableResponse
```

List clients
Retrieves a paginated list of OAuth2 clients. The results can be paginated using the limit parameter and last seen client ID/creation date.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Pagination limit | [default to 30] |
| **last_client_id** | **string**| ID of the last retrieved client | [optional] |
| **last_created_on** | **\DateTime**| Date of the last retrieved client | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableResponse**](../Model/PageableResponse.md)

### Authorization

[x-signature](../../README.md#x-signature)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-signature
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-signature', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Pagination limit
$last_client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the last retrieved client
$last_created_on = 2024-04-04T12:00:00Z; // \DateTime | Date of the last retrieved client

try {
    $result = $apiInstance->getClients($limit, $last_client_id, $last_created_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getClients: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientsInfo()`

```php
getClientsInfo($limit, $last_client_id, $last_created_on): \OpenAPI\Client\Model\PageableResponseClientInfoResponse
```

Retrieves a pageable list of client information
Retrieves a paginated list of information for all clients.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Pagination limit | |
| **last_client_id** | **string**| ID of the last retrieved client | [optional] |
| **last_created_on** | **\DateTime**| Date of the last retrieved client | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableResponseClientInfoResponse**](../Model/PageableResponseClientInfoResponse.md)

### Authorization

[x-signature](../../README.md#x-signature)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-signature
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-signature', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Pagination limit
$last_client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the last retrieved client
$last_created_on = 2024-04-04T12:00:00Z; // \DateTime | Date of the last retrieved client

try {
    $result = $apiInstance->getClientsInfo($limit, $last_client_id, $last_created_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getClientsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsents()`

```php
getConsents($limit, $last_modified_on): \OpenAPI\Client\Model\PageableModificationResponse
```

Retrieves a pageable list of consents
Retrieves a paginated list of user consents.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-consents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Pagination limit | |
| **last_modified_on** | **\DateTime**| Date of the last retrieved consent | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableModificationResponse**](../Model/PageableModificationResponse.md)

### Authorization

[x-signature](../../README.md#x-signature)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-signature
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-signature', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Pagination limit
$last_modified_on = 2024-04-04T12:00:00Z; // \DateTime | Date of the last retrieved consent

try {
    $result = $apiInstance->getConsents($limit, $last_modified_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getConsents: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicClientInfo()`

```php
getPublicClientInfo($client_id): \OpenAPI\Client\Model\ClientInfoResponse
```

Handles the GET request for public client information

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-public-client-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to retrieve | |

### Return type

[**\OpenAPI\Client\Model\ClientInfoResponse**](../Model/ClientInfoResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to retrieve

try {
    $result = $apiInstance->getPublicClientInfo($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientQueryingApi->getPublicClientInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
