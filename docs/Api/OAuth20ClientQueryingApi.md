# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ClientQueryingApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClient()**](OAuth20ClientQueryingApi.md#getClient) | **GET** /api/2.0/clients/{clientId} | Get client details |
| [**getClientInfo()**](OAuth20ClientQueryingApi.md#getClientInfo) | **GET** /api/2.0/clients/{clientId}/info | Get detailed client information |
| [**getClients()**](OAuth20ClientQueryingApi.md#getClients) | **GET** /api/2.0/clients | Get clients |
| [**getClientsInfo()**](OAuth20ClientQueryingApi.md#getClientsInfo) | **GET** /api/2.0/clients/info | Get detailed information of clients |
| [**getConsents()**](OAuth20ClientQueryingApi.md#getConsents) | **GET** /api/2.0/clients/consents | Get user consents |
| [**getPublicClientInfo()**](OAuth20ClientQueryingApi.md#getPublicClientInfo) | **GET** /api/2.0/clients/{clientId}/public/info | Get public client information |


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
| **client_id** | **string**| The client identifier. | |

### Return type

[**\OpenAPI\Client\Model\ClientResponse**](../Model/ClientResponse.md)

### Authorization

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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

Get detailed client information
Retrieves the detailed information for a client with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-client-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |

### Return type

[**\OpenAPI\Client\Model\ClientInfoResponse**](../Model/ClientInfoResponse.md)

### Authorization

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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

Get clients
Retrieves a paginated list of OAuth2 clients. The results can be paginated using the 'limit' parameter and the last seen client ID or creation date.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of results returned per page. | |
| **last_client_id** | **string**| The ID of the last retrieved client. | [optional] |
| **last_created_on** | **\DateTime**| The creation date of the last retrieved client. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableResponse**](../Model/PageableResponse.md)

### Authorization

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | The maximum number of results returned per page.
$last_client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The ID of the last retrieved client.
$last_created_on = 2024-04-04T12:00:00Z; // \DateTime | The creation date of the last retrieved client.

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

Get detailed information of clients
Retrieves a paginated list of information for all clients.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of results returned per page. | |
| **last_client_id** | **string**| The identifier of the last retrieved client. | [optional] |
| **last_created_on** | **\DateTime**| The creation date of the last retrieved client. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableResponseClientInfoResponse**](../Model/PageableResponseClientInfoResponse.md)

### Authorization

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | The maximum number of results returned per page.
$last_client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The identifier of the last retrieved client.
$last_created_on = 2024-04-04T12:00:00Z; // \DateTime | The creation date of the last retrieved client.

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

Get user consents
Retrieves a paginated list of user consents.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-consents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of results returned per page. | |
| **last_modified_on** | **\DateTime**| The date when the user consent was last modified. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableModificationResponse**](../Model/PageableModificationResponse.md)

### Authorization

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientQueryingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | The maximum number of results returned per page.
$last_modified_on = 2024-04-04T12:00:00Z; // \DateTime | The date when the user consent was last modified.

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

Get public client information
Returns the public information for a client with the ID secified din the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-public-client-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |

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
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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
