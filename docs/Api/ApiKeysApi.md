# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ApiKeysApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKey()**](ApiKeysApi.md#createApiKey) | **POST** /api/2.0/keys | Create a user API key |
| [**deleteApiKey()**](ApiKeysApi.md#deleteApiKey) | **DELETE** /api/2.0/keys/{keyId} | Delete an API key |
| [**getAllPermissions()**](ApiKeysApi.md#getAllPermissions) | **GET** /api/2.0/keys/permissions | Get API key permissions |
| [**getApiKey()**](ApiKeysApi.md#getApiKey) | **GET** /api/2.0/keys/@self | Get the current API key |
| [**getApiKeys()**](ApiKeysApi.md#getApiKeys) | **GET** /api/2.0/keys | Get the API keys |
| [**updateApiKey()**](ApiKeysApi.md#updateApiKey) | **PUT** /api/2.0/keys/{keyId} | Update an API key |


## `createApiKey()`

```php
createApiKey($create_api_key_request_dto): \OpenAPI\Client\Model\ApiKeyResponseWrapper
```

Create a user API key
Creates an API key that authenticates requests as the calling account, and is the only operation that ever  returns the secret.  Any portal member except a guest may create one; when the portal limits developer tools to administrators,  only a DocSpace administrator may call it.  The call is not idempotent - every call issues a new key - and it is throttled, so a client that retries on a  timeout can end up with several keys.  The answer carries the full secret in `key`: it is shown here and never again, later reads expose only the  last four characters in `keyPostfix`, so store it now.  Pass the scopes the key may use in `permissions`, taking the values from  `GET api/2.0/keys/permissions`; pass `*` or omit the field to record a key without scope restrictions, and set  `expiresInDays` to make it expire, otherwise it stays valid until it is deleted.  An empty `permissions` array and an unknown scope are both rejected with 400.  Send the key in the `Authorization` header as `Bearer sk-...` to use it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-api-key/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request_dto** | [**\OpenAPI\Client\Model\CreateApiKeyRequestDto**](../Model/CreateApiKeyRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponseWrapper**](../Model/ApiKeyResponseWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request_dto = new \OpenAPI\Client\Model\CreateApiKeyRequestDto(); // \OpenAPI\Client\Model\CreateApiKeyRequestDto

try {
    $result = $apiInstance->createApiKey($create_api_key_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($key_id): \OpenAPI\Client\Model\BooleanWrapper
```

Delete an API key
Deletes the API key with the ID given in the route, so that it stops authenticating requests immediately.  The caller may delete a key they created themselves, and a DocSpace administrator may delete any key of the  portal.  The removal is permanent and cannot be undone: the secret was only ever readable at creation time, so a  deleted key cannot be restored and a new one has to be issued through `POST api/2.0/keys`.  To stop a key temporarily instead, set `isActive` to false through `PUT api/2.0/keys/{keyId}`.  The answer is a plain boolean reporting whether the key was removed.  An ID that matches no key of the portal, including a key that has already been deleted, is rejected with 404.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-api-key/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**| The ID of the key to delete, taken from the route. Read it from the `id` of an entry of  `GET api/2.0/keys` - it is not the secret and not the `keyPostfix`. | |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the key to delete, taken from the route. Read it from the `id` of an entry of  `GET api/2.0/keys` - it is not the secret and not the `keyPostfix`.

try {
    $result = $apiInstance->deleteApiKey($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPermissions()`

```php
getAllPermissions(): \OpenAPI\Client\Model\StringArrayWrapper
```

Get API key permissions
Returns every scope value the portal accepts in the `permissions` array of an API key.  Read it before `POST api/2.0/keys` or `PUT api/2.0/keys/{keyId}`, because any other value is rejected with  400.  Any portal member except a guest may call it, and the call is read-only.  The answer is a flat list sorted alphabetically, holding the per-area scopes such as `accounts:read`,  `files:write` and `rooms:write`, the portal-wide `*:read` and `*:write`, and `*` which stands for a key  without scope restrictions.  The list is fixed for the portal and identical for every caller, so it can be cached by the client.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-all-permissions/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringArrayWrapper**](../Model/StringArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKey()`

```php
getApiKey(): \OpenAPI\Client\Model\ApiKeyResponseWrapper
```

Get the current API key
Returns the API key that authenticated this very request, letting the holder of a key find out what it is  allowed to do without knowing its ID.  The key is identified by the `Authorization` header of the call itself, so the request has to be sent as  `Bearer sk-...`; a session authenticated in any other way, by a cookie or by a user token, has no key to  report and is rejected with 400.  The call is read-only and returns one entry, with the same fields as `GET api/2.0/keys` and without the  secret - read `permissions` for the granted scopes, `expiresAt` for the expiry and `isActive` for the state.  To look at a key other than the one in use, call `GET api/2.0/keys` instead.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-api-key/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponseWrapper**](../Model/ApiKeyResponseWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeys()`

```php
getApiKeys(): \OpenAPI\Client\Model\ApiKeyResponseArrayWrapper
```

Get the API keys
Returns the API keys the caller is allowed to see, which is not the same set for everybody: a DocSpace  administrator gets every key of the portal, while any other member gets only the keys they created  themselves.  Any portal member except a guest may call it, and the call is read-only.  The secrets are not returned - each entry identifies its key by `id` and by the last four characters in  `keyPostfix`, and a secret can only be read once, at the moment `POST api/2.0/keys` creates it.  Expired and deactivated keys stay in the list, so check `expiresAt` against the current time and read  `isActive` before treating an entry as usable.  An empty list means the caller has created no keys, not that the portal has none.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-api-keys/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponseArrayWrapper**](../Model/ApiKeyResponseArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKey()`

```php
updateApiKey($key_id, $update_api_key_request): \OpenAPI\Client\Model\BooleanWrapper
```

Update an API key
Renames an API key, replaces the scopes it may use, or activates and deactivates it, without changing the  secret.  The caller may update a key they created themselves, and a DocSpace administrator may update any key of the  portal.  Take the values for `permissions` from `GET api/2.0/keys/permissions`; an unknown scope or an empty array is  rejected with 400, as is a name that is empty or made of whitespace only, and the fields that are left out  keep their current values.  The answer is a plain boolean: true when the key was changed, and false when it was not - which is also what  an already expired key returns, because such a key is left untouched instead of being reported as an error.  Deactivating a key through `isActive` stops it from authenticating while keeping it in the list, so use it  when the key may be needed again and `DELETE api/2.0/keys/{keyId}` when it may not.  An ID that matches no key of the portal, including a key that has already been deleted, is rejected with 404.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-api-key/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**| The ID of the key to update, taken from the route. Read it from the `id` of an entry of  `GET api/2.0/keys` - it is not the secret and not the `keyPostfix`. | |
| **update_api_key_request** | [**\OpenAPI\Client\Model\UpdateApiKeyRequest**](../Model/UpdateApiKeyRequest.md)| The fields to change. Every field is optional and the ones that are left out keep their current values, so an  empty object changes nothing. | |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the key to update, taken from the route. Read it from the `id` of an entry of  `GET api/2.0/keys` - it is not the secret and not the `keyPostfix`.
$update_api_key_request = new \OpenAPI\Client\Model\UpdateApiKeyRequest(); // \OpenAPI\Client\Model\UpdateApiKeyRequest | The fields to change. Every field is optional and the ones that are left out keep their current values, so an  empty object changes nothing.

try {
    $result = $apiInstance->updateApiKey($key_id, $update_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
