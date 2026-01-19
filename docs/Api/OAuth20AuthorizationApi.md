# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AuthorizationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeOAuth()**](OAuth20AuthorizationApi.md#authorizeOAuth) | **GET** /oauth2/authorize | OAuth2 authorization endpoint |
| [**exchangeToken()**](OAuth20AuthorizationApi.md#exchangeToken) | **POST** /oauth2/token | OAuth2 token endpoint |
| [**submitConsent()**](OAuth20AuthorizationApi.md#submitConsent) | **POST** /oauth2/authorize | OAuth2 consent endpoint |


## `authorizeOAuth()`

```php
authorizeOAuth($response_type, $client_id, $redirect_uri, $scope)
```

OAuth2 authorization endpoint
Initiates the OAuth2 authorization flow.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/authorize-oauth/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **response_type** | **string**| The OAuth 2.0 response type, must be &#39;code&#39; for authorization code flow. | |
| **client_id** | **string**| The client identifier issued to the client during registration. | |
| **redirect_uri** | **string**| The URL to redirect to after authorization is complete. | |
| **scope** | **string**| The space-separated list of requested scope permissions. | |

### Return type

void (empty response body)

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


$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$response_type = code; // string | The OAuth 2.0 response type, must be 'code' for authorization code flow.
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The client identifier issued to the client during registration.
$redirect_uri = https://example.com; // string | The URL to redirect to after authorization is complete.
$scope = files:read; // string | The space-separated list of requested scope permissions.

try {
    $apiInstance->authorizeOAuth($response_type, $client_id, $redirect_uri, $scope);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->authorizeOAuth: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeToken()`

```php
exchangeToken($grant_type, $code, $redirect_uri, $client_id, $client_secret): \OpenAPI\Client\Model\ExchangeToken200Response
```

OAuth2 token endpoint
Exchanges an authorization code specified in the request for the access token.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/exchange-token/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**| The OAuth2 grant type, must be &#39;authorization_code&#39; for the authorization code flow. | [optional] |
| **code** | **string**| A temporary authorization code that is sent to the client to be exchanged for a token. | [optional] |
| **redirect_uri** | **string**| The URL where the user will be redirected after successful or unsuccessful authentication. | [optional] |
| **client_id** | **string**| The client identifier issued to the client during registration. | [optional] |
| **client_secret** | **string**| The client secret issued to the client during registration. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExchangeToken200Response**](../Model/ExchangeToken200Response.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'grant_type_example'; // string | The OAuth2 grant type, must be 'authorization_code' for the authorization code flow.
$code = 'code_example'; // string | A temporary authorization code that is sent to the client to be exchanged for a token.
$redirect_uri = 'redirect_uri_example'; // string | The URL where the user will be redirected after successful or unsuccessful authentication.
$client_id = 'client_id_example'; // string | The client identifier issued to the client during registration.
$client_secret = 'client_secret_example'; // string | The client secret issued to the client during registration.

try {
    $result = $apiInstance->exchangeToken($grant_type, $code, $redirect_uri, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->exchangeToken: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitConsent()`

```php
submitConsent($client_id, $state, $scope)
```

OAuth2 consent endpoint
Sends a consent request with the specified parameters.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/submit-consent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client identifier issued to the client during registration. | [optional] |
| **state** | **string**| The random string used to solve the CSRF vulnerability problem. | [optional] |
| **scope** | **string**| The space-separated list of requested scope permissions. | [optional] |

### Return type

void (empty response body)

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


$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | The client identifier issued to the client during registration.
$state = 'state_example'; // string | The random string used to solve the CSRF vulnerability problem.
$scope = 'scope_example'; // string | The space-separated list of requested scope permissions.

try {
    $apiInstance->submitConsent($client_id, $state, $scope);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->submitConsent: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
