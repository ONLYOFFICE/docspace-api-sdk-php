# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ClientQueryingApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClient()**](OAuth20ClientQueryingApi.md#getClient) | **GET** /api/2.0/oauth2/clients/{clientId} | Get client details |
| [**getClientInfo()**](OAuth20ClientQueryingApi.md#getClientInfo) | **GET** /api/2.0/oauth2/clients/{clientId}/info | Get client info |
| [**getClients()**](OAuth20ClientQueryingApi.md#getClients) | **GET** /api/2.0/oauth2/clients | List clients |
| [**getClientsInfo()**](OAuth20ClientQueryingApi.md#getClientsInfo) | **GET** /api/2.0/oauth2/clients/info | List client info |
| [**getConsents()**](OAuth20ClientQueryingApi.md#getConsents) | **GET** /api/2.0/oauth2/clients/consents | List user consents |
| [**getPublicClientInfo()**](OAuth20ClientQueryingApi.md#getPublicClientInfo) | **GET** /api/2.0/oauth2/clients/{clientId}/public/info | Get public client info |


## `getClient()`

```php
getClient($client_id): \OpenAPI\Client\Model\ClientResponse
```

Get client details
Returns the whole stored record of one client: its name and description, its secret, scopes, redirect URIs, allowed origins, logout redirect URIs and audit fields. An administrator sees any client of the tenant, a plain user only the clients they created, and a guest none of them. Whatever the caller may not see is reported as 404 rather than 403, so absence and lack of access are deliberately indistinguishable, and an identifier that is not a valid client ID is reported the same way. The response is a single object, not a collection.

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

Get client info
Retrieves the detailed information for a client with the ID specified in the request. It returns the consent-facing subset of the client - name, description, logo, the website, terms and policy URLs, authentication methods and scopes - and deliberately omits the secret, the redirect URIs and the allowed origins, which is what makes it safe to render on a consent screen. An administrator sees any client of the tenant, a plain user only the clients they created, and a guest none of them. A client the caller may not see is reported as 404, exactly like an unknown one.

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
getClients($limit, $last_client_id, $last_created_on): \OpenAPI\Client\Model\PageableClientResponse
```

List clients
Returns one page of the tenant's clients, newest first, each in the same full form as the single-client read. An administrator sees every client of the tenant, a plain user only the clients they created. Paging is keyset-based rather than offset-based: limit sets the page size, and last_client_id and last_created_on are carried over from the previous page to ask for the next one. The limit defaults to 30 and has to lie between 1 and 50; a value outside that range, or a last_created_on that cannot be parsed as a date, is rejected with 400.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many entries to return, between 1 and 50. Defaults to 30 when omitted. | [optional] [default to 30] |
| **last_client_id** | **string**| ID of the last retrieved client | [optional] |
| **last_created_on** | **\DateTime**| Date of the last retrieved client | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableClientResponse**](../Model/PageableClientResponse.md)

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
$limit = 30; // int | How many entries to return, between 1 and 50. Defaults to 30 when omitted.
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
getClientsInfo($limit, $last_client_id, $last_created_on): \OpenAPI\Client\Model\PageableClientInfoResponse
```

List client info
Retrieves a paginated list of information for all clients, each in the same consent-facing form as the single-client info read. An administrator sees every client of the tenant, a plain user only the clients they created. Paging is keyset-based: limit sets the page size, and last_client_id and last_created_on are carried over from the previous page. Unlike the full client listing, limit has no default here - it has to be supplied on every call and has to lie between 1 and 50, and a missing or out-of-range value is rejected with 400.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-clients-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many entries to return, between 1 and 50. It has no default and has to be sent on every call. | |
| **last_client_id** | **string**| ID of the last retrieved client | [optional] |
| **last_created_on** | **\DateTime**| Date of the last retrieved client | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageableClientInfoResponse**](../Model/PageableClientInfoResponse.md)

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
$limit = 30; // int | How many entries to return, between 1 and 50. It has no default and has to be sent on every call.
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

List user consents
Retrieves a paginated list of user consents: the clients the calling user has authorized, each with the scopes granted, the moment the consent was last changed and the client's consent-facing details. It always reports the caller's own consents and nothing else - there is no role check on this endpoint, so guests may call it too, and no parameter widens it to another user. The consents are read from the authorization service over gRPC, so an authorization service that cannot be reached surfaces as 503. Paging is keyset-based on last_modified_on, and limit has no default: it has to be supplied on every call and has to lie between 1 and 50.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-consents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many entries to return, between 1 and 50. It has no default and has to be sent on every call. | |
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
$limit = 30; // int | How many entries to return, between 1 and 50. It has no default and has to be sent on every call.
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

Get public client info
Returns the same consent-facing client information as the signed read, but without requiring a portal signature. It is meant for a login or consent page that has to render the client before the user is known, so it resolves the client by ID alone: there is no authentication, no tenant scoping and no creator check, and any caller who knows a client ID can read that client's public details. It still exposes no secret, no redirect URIs and no allowed origins. Being unauthenticated it is rate-limited on a separate, tighter budget than the signed endpoints. An unknown client ID, and an identifier that is not a client ID at all, are both reported as 404.

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
