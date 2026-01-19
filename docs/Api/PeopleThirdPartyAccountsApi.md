# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ThirdPartyAccountsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getThirdPartyAuthProviders()**](PeopleThirdPartyAccountsApi.md#getThirdPartyAuthProviders) | **GET** /api/2.0/people/thirdparty/providers | Get third-party accounts |
| [**linkThirdPartyAccount()**](PeopleThirdPartyAccountsApi.md#linkThirdPartyAccount) | **PUT** /api/2.0/people/thirdparty/linkaccount | Link a third-pary account |
| [**signupThirdPartyAccount()**](PeopleThirdPartyAccountsApi.md#signupThirdPartyAccount) | **POST** /api/2.0/people/thirdparty/signup | Create a third-pary account |
| [**unlinkThirdPartyAccount()**](PeopleThirdPartyAccountsApi.md#unlinkThirdPartyAccount) | **DELETE** /api/2.0/people/thirdparty/unlinkaccount | Unlink a third-pary account |


## `getThirdPartyAuthProviders()`

```php
getThirdPartyAuthProviders($invite_view, $settings_view, $client_callback, $from_only): \OpenAPI\Client\Model\AccountInfoArrayWrapper
```

Get third-party accounts
Returns a list of the available third-party accounts.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-third-party-auth-providers/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_view** | **bool**| Specifies whether to return providers that are available for invitation links, i.e. the user can login or register through these providers. | [optional] |
| **settings_view** | **bool**| Specifies whether to display the provider settings in a pop-up window (true) or redirect them to the desktop application (false). | [optional] |
| **client_callback** | **string**| The method that is called after authentication. | [optional] |
| **from_only** | **string**| The provider name if a response is required only from this provider. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountInfoArrayWrapper**](../Model/AccountInfoArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invite_view = true; // bool | Specifies whether to return providers that are available for invitation links, i.e. the user can login or register through these providers.
$settings_view = true; // bool | Specifies whether to display the provider settings in a pop-up window (true) or redirect them to the desktop application (false).
$client_callback = some text; // string | The method that is called after authentication.
$from_only = some text; // string | The provider name if a response is required only from this provider.

try {
    $result = $apiInstance->getThirdPartyAuthProviders($invite_view, $settings_view, $client_callback, $from_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccountsApi->getThirdPartyAuthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkThirdPartyAccount()`

```php
linkThirdPartyAccount($link_account_request_dto)
```

Link a third-pary account
Links a third-party account specified in the request to the user profile.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/link-third-party-account/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_account_request_dto** | [**\OpenAPI\Client\Model\LinkAccountRequestDto**](../Model/LinkAccountRequestDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_account_request_dto = new \OpenAPI\Client\Model\LinkAccountRequestDto(); // \OpenAPI\Client\Model\LinkAccountRequestDto

try {
    $apiInstance->linkThirdPartyAccount($link_account_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccountsApi->linkThirdPartyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signupThirdPartyAccount()`

```php
signupThirdPartyAccount($signup_account_request_dto): \OpenAPI\Client\Model\EmployeeWrapper
```

Create a third-pary account
Creates a third-party account with the parameters specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/signup-third-party-account/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signup_account_request_dto** | [**\OpenAPI\Client\Model\SignupAccountRequestDto**](../Model/SignupAccountRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeWrapper**](../Model/EmployeeWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signup_account_request_dto = new \OpenAPI\Client\Model\SignupAccountRequestDto(); // \OpenAPI\Client\Model\SignupAccountRequestDto

try {
    $result = $apiInstance->signupThirdPartyAccount($signup_account_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccountsApi->signupThirdPartyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkThirdPartyAccount()`

```php
unlinkThirdPartyAccount($provider)
```

Unlink a third-pary account
Unlinks a third-party account specified in the request from the user profile.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/unlink-third-party-account/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| The provider name. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = some text; // string | The provider name.

try {
    $apiInstance->unlinkThirdPartyAccount($provider);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccountsApi->unlinkThirdPartyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
