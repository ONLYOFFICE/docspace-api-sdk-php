# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ClientManagementApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeActivation()**](OAuth20ClientManagementApi.md#changeActivation) | **PATCH** /api/2.0/oauth2/clients/{clientId}/activation | Change client activation status |
| [**createClient()**](OAuth20ClientManagementApi.md#createClient) | **POST** /api/2.0/oauth2/clients | Create a new OAuth2 client |
| [**deleteClient()**](OAuth20ClientManagementApi.md#deleteClient) | **DELETE** /api/2.0/oauth2/clients/{clientId} | Delete an OAuth2 client |
| [**deleteTenantClients()**](OAuth20ClientManagementApi.md#deleteTenantClients) | **DELETE** /api/2.0/oauth2/clients/tenant | Delete all tenant OAuth2 clients |
| [**deleteUserClients()**](OAuth20ClientManagementApi.md#deleteUserClients) | **DELETE** /api/2.0/oauth2/clients | Delete all user OAuth2 clients |
| [**regenerateSecret()**](OAuth20ClientManagementApi.md#regenerateSecret) | **PATCH** /api/2.0/oauth2/clients/{clientId}/regenerate | Regenerate client secret |
| [**revokeUserClient()**](OAuth20ClientManagementApi.md#revokeUserClient) | **DELETE** /api/2.0/oauth2/clients/{clientId}/revoke | Revoke client consent |
| [**updateClient()**](OAuth20ClientManagementApi.md#updateClient) | **PUT** /api/2.0/oauth2/clients/{clientId} | Update an existing OAuth2 client |


## `changeActivation()`

```php
changeActivation($client_id, $change_client_activation_request)
```

Change client activation status
Enables or disables an existing client and answers 200 with an empty body. A disabled client can no longer obtain new tokens, but the tokens and consents it already holds stay valid until they expire on their own: disable a client to stop new authorizations, delete it to end the existing ones. An administrator may change any client of the tenant, a plain user only the clients they created. The body carries the single activation flag, and a client the caller may not see is reported as not found rather than as forbidden.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-activation/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to change activation for | |
| **change_client_activation_request** | [**\OpenAPI\Client\Model\ChangeClientActivationRequest**](../Model/ChangeClientActivationRequest.md)|  | |

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to change activation for
$change_client_activation_request = new \OpenAPI\Client\Model\ChangeClientActivationRequest(); // \OpenAPI\Client\Model\ChangeClientActivationRequest

try {
    $apiInstance->changeActivation($client_id, $change_client_activation_request);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->changeActivation: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClient()`

```php
createClient($create_client_request): \OpenAPI\Client\Model\ClientResponse
```

Create a new OAuth2 client
Registers a new OAuth2 client in the caller's tenant and returns it. The body must carry a name, a description, a logo and at least one redirect URI, allowed origin and scope, and every scope named must already exist in the tenant's scope catalogue. Administrators and users may both register clients; the caller is recorded as the creator, which is what later restricts a plain user to the clients they created. The response is the stored client with its generated client ID and secret, and it is the first place either value can be read. Some deployments cap how many clients one tenant may hold, and reaching that cap is reported as 400 together with the validation failures.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_client_request** | [**\OpenAPI\Client\Model\CreateClientRequest**](../Model/CreateClientRequest.md)|  | |

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_client_request = new \OpenAPI\Client\Model\CreateClientRequest(); // \OpenAPI\Client\Model\CreateClientRequest

try {
    $result = $apiInstance->createClient($create_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->createClient: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteClient()`

```php
deleteClient($client_id)
```

Delete an OAuth2 client
Deletes one client from the tenant permanently and answers 200 with an empty body. An administrator may delete any client of the tenant, a plain user only the clients they created, and a client the caller may not see is reported as not found rather than as forbidden. The authorizations and consents issued for the client are removed too, but that cleanup is driven by a message and completes on the authorization service after this call has already returned. A delete that removes no row answers 400. The operation cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to delete | |

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to delete

try {
    $apiInstance->deleteClient($client_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTenantClients()`

```php
deleteTenantClients()
```

Delete all tenant OAuth2 clients
Deletes every client registered in the current tenant and answers 200 with an empty body. Only an administrator may call it - for a plain user or a guest it is refused with 403 - and it removes the clients of all users of the tenant, not only those of the caller. The authorizations and consents of the deleted clients are cleaned up asynchronously on the authorization service, and the tenant's client cache is dropped as part of the call. Concurrent modification that survives the retries is reported as 400. The operation cannot be undone, and the response does not say how many clients were removed.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-tenant-clients/).

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteTenantClients();
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->deleteTenantClients: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserClients()`

```php
deleteUserClients()
```

Delete all user OAuth2 clients
Deletes every client the calling user created in the current tenant and answers 200 with an empty body. The caller's own identity always selects the set, so this never reaches clients created by somebody else, not even for an administrator. The authorizations and consents of the deleted clients are cleaned up asynchronously on the authorization service, and the tenant's client cache is dropped as part of the call. Concurrent modification that survives the retries is reported as 400. The operation cannot be undone, and the response does not say how many clients were removed.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-user-clients/).

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteUserClients();
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->deleteUserClients: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateSecret()`

```php
regenerateSecret($client_id): \OpenAPI\Client\Model\ClientSecretResponse
```

Regenerate client secret
Issues a new secret for the client and returns it. The previous secret stops working as soon as this call succeeds, there is no grace period and no way to recover it, so every deployed copy of the client has to be updated with the value returned here. An administrator may do this for any client of the tenant, a plain user only for the clients they created. Tokens already issued to the client keep working; only future client authentication is affected. The response carries the new secret and nothing else.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/regenerate-secret/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to regenerate secret for | |

### Return type

[**\OpenAPI\Client\Model\ClientSecretResponse**](../Model/ClientSecretResponse.md)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to regenerate secret for

try {
    $result = $apiInstance->regenerateSecret($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->regenerateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeUserClient()`

```php
revokeUserClient($client_id)
```

Revoke client consent
Revokes the calling user's own consent for one client and answers 200 with an empty body. It touches only the caller's grant: other users keep their consents and the client itself stays registered. Guests may call it as well as users and administrators, because it can never reach anyone else's data. The revocation is carried out by the authorization service over gRPC, so a service that reports nothing was revoked produces 400 and a service that cannot be reached produces 503. Once it succeeds the user has to authorize the client again before it can act on their behalf.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/revoke-user-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to revoke consent for | |

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to revoke consent for

try {
    $apiInstance->revokeUserClient($client_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->revokeUserClient: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClient()`

```php
updateClient($client_id, $update_client_request)
```

Update an existing OAuth2 client
Updates the mutable settings of an existing client and answers 200 with an empty body. Only the fields carried in the request body change; the client ID, the secret, the tenant and the creator cannot be changed this way. An administrator may update any client of the tenant, a plain user only the clients they created, and a client the caller may not see is reported as not found rather than as forbidden. The write runs under optimistic locking and is retried a few times, so a request that still loses the race is rejected with 400 instead of silently overwriting a concurrent change. Nothing is returned in the body - read the client back to see the stored result.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to update | |
| **update_client_request** | [**\OpenAPI\Client\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)|  | |

### Return type

void (empty response body)

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

$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | ID of the client to update
$update_client_request = new \OpenAPI\Client\Model\UpdateClientRequest(); // \OpenAPI\Client\Model\UpdateClientRequest

try {
    $apiInstance->updateClient($client_id, $update_client_request);
} catch (Exception $e) {
    echo 'Exception when calling ClientManagementApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
