# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AuthorizationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeOAuth()**](OAuth20AuthorizationApi.md#authorizeOAuth) | **GET** /oauth2/authorize | Start the authorization flow |
| [**exchangeToken()**](OAuth20AuthorizationApi.md#exchangeToken) | **POST** /oauth2/token | Exchange the authorization code |
| [**submitConsent()**](OAuth20AuthorizationApi.md#submitConsent) | **POST** /oauth2/authorize | Submit the consent decision |


## `authorizeOAuth()`

```php
authorizeOAuth($response_type, $client_id, $redirect_uri, $scope)
```

Start the authorization flow
Starts the OAuth2 authorization code flow for the client named by client_id. The caller has to present the portal signature cookie, and a request without a valid one is not refused with 401 or 403 but redirected to the portal login page, carrying the client ID so the flow can resume after signing in. When the user has not yet consented to the requested scopes the browser is redirected to the consent page; once the consent exists the browser is redirected to the client's redirect URI with the authorization code and, when one was sent, the original state. A caller that cannot follow redirects may send the X-Disable-Redirect header, and then the response is 200 with an empty body and the target URL in the X-Redirect-URI header. The code returned here is exchanged for tokens at the token endpoint.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/authorize-oauth/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **response_type** | **string**| The OAuth 2.0 response type. Only code is supported: this server issues an authorization code, never a token, from this endpoint. | |
| **client_id** | **string**| The identifier the client was given when it was registered. It selects both the client shown on the consent screen and the set of redirect URIs the request is checked against. | |
| **redirect_uri** | **string**| Where to send the user once authorization is complete. It has to be one of the redirect URIs registered for the client, otherwise the request is refused. | |
| **scope** | **string**| The permissions being asked for, as a space-separated list. Every scope has to be one the client is registered for, and the consent screen lists exactly these. | |

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

$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$response_type = code; // string | The OAuth 2.0 response type. Only code is supported: this server issues an authorization code, never a token, from this endpoint.
$client_id = 6c7cf17b-1bd3-47d5-94c6-be2d3570e168; // string | The identifier the client was given when it was registered. It selects both the client shown on the consent screen and the set of redirect URIs the request is checked against.
$redirect_uri = https://example.com; // string | Where to send the user once authorization is complete. It has to be one of the redirect URIs registered for the client, otherwise the request is refused.
$scope = files:read; // string | The permissions being asked for, as a space-separated list. Every scope has to be one the client is registered for, and the consent screen lists exactly these.

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

Exchange the authorization code
Exchanges an authorization code for an access token. The request is form-encoded and has to carry the grant type, the code, the same redirect URI that was used to obtain the code, and the client credentials: the client authenticates itself here rather than through the portal signature cookie the authorization endpoint uses. The response carries the access token, its type and its lifetime in seconds, plus a refresh token when the client is configured for the refresh token grant. Client authentication that fails is answered with 401, while a malformed, unknown or expired code is answered with 400. The code is single use, so replaying it fails.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/exchange-token/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**| Which exchange is being performed: authorization_code to redeem a code, refresh_token to renew an access token. | [optional] |
| **code** | **string**| The authorization code returned by the authorization endpoint. It may be redeemed once. | [optional] |
| **redirect_uri** | **string**| The same redirect URI that was used to obtain the code. The exchange fails when it differs. | [optional] |
| **client_id** | **string**| The identifier of the client redeeming the code. | [optional] |
| **client_secret** | **string**| The secret of the client redeeming the code. It is omitted by a public client, which proves itself with a PKCE code verifier instead. | [optional] |

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
$grant_type = 'grant_type_example'; // string | Which exchange is being performed: authorization_code to redeem a code, refresh_token to renew an access token.
$code = 'code_example'; // string | The authorization code returned by the authorization endpoint. It may be redeemed once.
$redirect_uri = 'redirect_uri_example'; // string | The same redirect URI that was used to obtain the code. The exchange fails when it differs.
$client_id = 'client_id_example'; // string | The identifier of the client redeeming the code.
$client_secret = 'client_secret_example'; // string | The secret of the client redeeming the code. It is omitted by a public client, which proves itself with a PKCE code verifier instead.

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

Submit the consent decision
Submits the user's consent decision for the scopes an authorization request asked for. It is the form post the consent page makes, so it carries the client ID, the state and the agreed scopes as multipart form data, along with the same portal signature cookie the authorization request needed. On success the browser is redirected to the client's redirect URI with an authorization code, or, when the request carries the X-Disable-Redirect header, answered 200 with that URL in the X-Redirect-URI header. The consent is stored per user and client, so a later authorization request for the same scopes no longer stops at the consent page.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/submit-consent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| The client the consent is being given to. It has to be the same client the authorization request named. | [optional] |
| **state** | **string**| The opaque value carried through from the authorization request, returned unchanged on the redirect so the client can match the answer to its request. | [optional] |
| **scope** | **string**| The scopes the user agreed to, as a space-separated list. Anything the user declined is left out, so this may be narrower than what was requested. | [optional] |

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

$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | The client the consent is being given to. It has to be the same client the authorization request named.
$state = 'state_example'; // string | The opaque value carried through from the authorization request, returned unchanged on the redirect so the client can match the answer to its request.
$scope = 'scope_example'; // string | The scopes the user agreed to, as a space-separated list. Anything the user declined is left out, so this may be narrower than what was requested.

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
