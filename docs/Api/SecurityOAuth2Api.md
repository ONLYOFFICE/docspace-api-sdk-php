# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.OAuth2Api

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateJwtToken()**](SecurityOAuth2Api.md#generateJwtToken) | **GET** /api/2.0/security/oauth2/token | Generate JWT token |


## `generateJwtToken()`

```php
generateJwtToken(): \OpenAPI\Client\Model\StringWrapper
```

Generate JWT token
Issues a short-lived JWT that identifies the calling user to the identity service, the component that stores  the OAuth2 applications of this installation and their consents. Any signed-in user may call it, nothing has  to be prepared first, and the token always describes the caller - it cannot be issued on behalf of somebody  else. The token is signed with the installation's own key and carries the user ID, name and e-mail, the portal  ID and address, whether the caller is an administrator or a guest, and whether the portal's developer tools  setting leaves OAuth2 applications open to ordinary users. It expires five minutes after it was issued and is  meant to be presented to the identity service in the `x-signature` header, not to this API: requests to the  portal are authorized with the token that `POST api/2.0/authentication` returns, and this JWT is not accepted  in its place. The call is read-only and gives the token back as a plain string; ask for a fresh one per  exchange instead of storing it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/generate-jwt-token/).

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


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generateJwtToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->generateJwtToken: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
