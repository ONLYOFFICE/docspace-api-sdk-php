# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ClientManagementApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeActivation()**](OAuth20ClientManagementApi.md#changeActivation) | **PATCH** /api/2.0/clients/{clientId}/activation | Change client activation status |
| [**createClient()**](OAuth20ClientManagementApi.md#createClient) | **POST** /api/2.0/clients | Create a new OAuth2 client |
| [**deleteClient()**](OAuth20ClientManagementApi.md#deleteClient) | **DELETE** /api/2.0/clients/{clientId} | Delete an OAuth2 client |
| [**deleteTenantClients()**](OAuth20ClientManagementApi.md#deleteTenantClients) | **DELETE** /api/2.0/clients/tenant | Delete all tenant OAuth2 clients |
| [**deleteUserClients()**](OAuth20ClientManagementApi.md#deleteUserClients) | **DELETE** /api/2.0/clients | Delete all user OAuth2 clients |
| [**regenerateSecret()**](OAuth20ClientManagementApi.md#regenerateSecret) | **PATCH** /api/2.0/clients/{clientId}/regenerate | Regenerate client secret |
| [**revokeUserClient()**](OAuth20ClientManagementApi.md#revokeUserClient) | **DELETE** /api/2.0/clients/{clientId}/revoke | Revoke client consent |
| [**updateClient()**](OAuth20ClientManagementApi.md#updateClient) | **PUT** /api/2.0/clients/{clientId} | Update an existing OAuth2 client |


## `changeActivation()`

```php
changeActivation($client_id, $change_client_activation_request): object
```

Change client activation status
Activates or deactivates an OAuth2 client. When deactivated, the client cannot request new access tokens, but existing tokens will remain valid until they expire.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-activation/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to change activation for | |
| **change_client_activation_request** | [**\OpenAPI\Client\Model\ChangeClientActivationRequest**](../Model/ChangeClientActivationRequest.md)|  | |

### Return type

**object**

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
    $result = $apiInstance->changeActivation($client_id, $change_client_activation_request);
    print_r($result);
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
Creates a new OAuth2 client with the specified configuration. The client will be created with the provided scopes, redirect URIs, and other settings. Returns the created client details including the generated client ID.

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
deleteClient($client_id): object
```

Delete an OAuth2 client
Permanently deletes an OAuth2 client and all associated data. This will invalidate all access tokens and refresh tokens issued to this client. This operation cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to delete | |

### Return type

**object**

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
    $result = $apiInstance->deleteClient($client_id);
    print_r($result);
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
deleteTenantClients(): object
```

Delete all tenant OAuth2 clients
Permanently deletes tenant OAuth2 clients and all associated data. This will invalidate all access tokens and refresh tokens issued to this client. This operation cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-tenant-clients/).

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

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
    $result = $apiInstance->deleteTenantClients();
    print_r($result);
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
deleteUserClients(): object
```

Delete all user OAuth2 clients
Permanently deletes user OAuth2 clients and all associated data. This will invalidate all access tokens and refresh tokens issued to this client. This operation cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-user-clients/).

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

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
    $result = $apiInstance->deleteUserClients();
    print_r($result);
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
Generates a new client secret for the specified OAuth2 client. The old secret will be immediately invalidated. This operation should be used with caution as it requires updating the secret in all client applications.

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
revokeUserClient($client_id): object
```

Revoke client consent
Revokes all user consents for the specified OAuth2 client. This will invalidate all access tokens and refresh tokens issued to this client for the current user. The user will need to re-authorize the client to access their resources.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/revoke-user-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to revoke consent for | |

### Return type

**object**

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
    $result = $apiInstance->revokeUserClient($client_id);
    print_r($result);
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
updateClient($client_id, $update_client_request): object
```

Update an existing OAuth2 client
Updates the configuration of an existing OAuth2 client. Allows modification of client name, description, redirect URIs, and other settings. The client ID cannot be modified.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID of the client to update | |
| **update_client_request** | [**\OpenAPI\Client\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)|  | |

### Return type

**object**

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
    $result = $apiInstance->updateClient($client_id, $update_client_request);
    print_r($result);
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
