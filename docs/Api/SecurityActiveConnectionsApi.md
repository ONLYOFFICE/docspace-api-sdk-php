# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.ActiveConnectionsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllActiveConnections()**](SecurityActiveConnectionsApi.md#getAllActiveConnections) | **GET** /api/2.0/security/activeconnections | Get active connections |
| [**logOutActiveConnection()**](SecurityActiveConnectionsApi.md#logOutActiveConnection) | **PUT** /api/2.0/security/activeconnections/logout/{loginEventId} | Log out from the connection |
| [**logOutAllActiveConnectionsChangePassword()**](SecurityActiveConnectionsApi.md#logOutAllActiveConnectionsChangePassword) | **PUT** /api/2.0/security/activeconnections/logoutallchangepassword | Log out and change password |
| [**logOutAllActiveConnectionsForUser()**](SecurityActiveConnectionsApi.md#logOutAllActiveConnectionsForUser) | **PUT** /api/2.0/security/activeconnections/logoutall/{userId} | Log out for the user by ID |
| [**logOutAllExceptThisConnection()**](SecurityActiveConnectionsApi.md#logOutAllExceptThisConnection) | **PUT** /api/2.0/security/activeconnections/logoutallexceptthis | Log out from all connections except the current one |


## `getAllActiveConnections()`

```php
getAllActiveConnections(): \OpenAPI\Client\Model\ActiveConnectionsWrapper
```

Get active connections
Returns all the active connections to the portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-all-active-connections/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ActiveConnectionsWrapper**](../Model/ActiveConnectionsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\ActiveConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllActiveConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveConnectionsApi->getAllActiveConnections: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logOutActiveConnection()`

```php
logOutActiveConnection($login_event_id): \OpenAPI\Client\Model\BooleanWrapper
```

Log out from the connection
Logs out from the connection with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/log-out-active-connection/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_event_id** | **int**| The ID of the specific login event. | |

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



$apiInstance = new OpenAPI\Client\Api\ActiveConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_event_id = 9846; // int | The ID of the specific login event.

try {
    $result = $apiInstance->logOutActiveConnection($login_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveConnectionsApi->logOutActiveConnection: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logOutAllActiveConnectionsChangePassword()`

```php
logOutAllActiveConnectionsChangePassword(): \OpenAPI\Client\Model\StringWrapper
```

Log out and change password
Logs out from all the active connections for the current user and changes their password.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/log-out-all-active-connections-change-password/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\ActiveConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->logOutAllActiveConnectionsChangePassword();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveConnectionsApi->logOutAllActiveConnectionsChangePassword: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logOutAllActiveConnectionsForUser()`

```php
logOutAllActiveConnectionsForUser($user_id)
```

Log out for the user by ID
Logs out from all the active connections for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/log-out-all-active-connections-for-user/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID extracted from the route parameters. | |

### Return type

void (empty response body)

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



$apiInstance = new OpenAPI\Client\Api\ActiveConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The user ID extracted from the route parameters.

try {
    $apiInstance->logOutAllActiveConnectionsForUser($user_id);
} catch (Exception $e) {
    echo 'Exception when calling ActiveConnectionsApi->logOutAllActiveConnectionsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logOutAllExceptThisConnection()`

```php
logOutAllExceptThisConnection(): \OpenAPI\Client\Model\StringWrapper
```

Log out from all connections except the current one
Logs out from all the active connections except the current connection.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/log-out-all-except-this-connection/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\ActiveConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->logOutAllExceptThisConnection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActiveConnectionsApi->logOutAllExceptThisConnection: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
