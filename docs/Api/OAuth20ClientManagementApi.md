# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.ClientManagementApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeActivation()**](OAuth20ClientManagementApi.md#changeActivation) | **PATCH** /api/2.0/clients/{clientId}/activation | Change the client activation status |
| [**createClient()**](OAuth20ClientManagementApi.md#createClient) | **POST** /api/2.0/clients | Create a new OAuth2 client |
| [**deleteClient()**](OAuth20ClientManagementApi.md#deleteClient) | **DELETE** /api/2.0/clients/{clientId} | Delete an OAuth2 client |
| [**regenerateSecret()**](OAuth20ClientManagementApi.md#regenerateSecret) | **PATCH** /api/2.0/clients/{clientId}/regenerate | Regenerate the client secret |
| [**revokeUserClient()**](OAuth20ClientManagementApi.md#revokeUserClient) | **DELETE** /api/2.0/clients/{clientId}/revoke | Revoke client consent |
| [**updateClient()**](OAuth20ClientManagementApi.md#updateClient) | **PUT** /api/2.0/clients/{clientId} | Update an existing OAuth2 client |


## `changeActivation()`

```php
changeActivation($client_id, $change_client_activation_request): object
```

Change the client activation status
Activates or deactivates an OAuth2 client. When deactivated, the client cannot request new access tokens, but existing tokens will remain valid until they expire.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-activation/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |
| **change_client_activation_request** | [**\OpenAPI\Client\Model\ChangeClientActivationRequest**](../Model/ChangeClientActivationRequest.md)|  | |

### Return type

**object**

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


$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.
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

[asc_auth_key](../../README.md#asc_auth_key)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');


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
Permanently deletes an OAuth2 client and all associated data. All access and refresh tokens issued to this client will be invalidated. This operation cannot be undone.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |

### Return type

**object**

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


$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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

## `regenerateSecret()`

```php
regenerateSecret($client_id): \OpenAPI\Client\Model\ClientSecretResponse
```

Regenerate the client secret
Generates a new client secret for the specified OAuth2 client. The old secret will be immediately invalidated. This operation should be used with caution as it requires updating the secret in all client applications.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/regenerate-secret/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |

### Return type

[**\OpenAPI\Client\Model\ClientSecretResponse**](../Model/ClientSecretResponse.md)

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


$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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
| **client_id** | **string**| The client identifier. | |

### Return type

**object**

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


$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.

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
Updates the configuration of an existing OAuth2 client, allowing modifications to the client name, description, redirect URIs, and other settings. The client ID cannot be modified.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-client/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier. | |
| **update_client_request** | [**\OpenAPI\Client\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)|  | |

### Return type

**object**

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


$apiInstance = new OpenAPI\Client\Api\ClientManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier.
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
