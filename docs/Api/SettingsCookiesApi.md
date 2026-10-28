# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.CookiesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCookieSettings()**](SettingsCookiesApi.md#getCookieSettings) | **GET** /api/2.0/settings/cookiesettings | Get the cookie lifetime settings |
| [**updateCookieSettings()**](SettingsCookiesApi.md#updateCookieSettings) | **PUT** /api/2.0/settings/cookiesettings | Update the cookie lifetime settings |


## `getCookieSettings()`

```php
getCookieSettings(): \OpenAPI\Client\Model\CookieSettingsWrapper
```

Get the cookie lifetime settings
Returns how long an authentication session of this portal stays valid: `lifeTime` in minutes together with the  `enabled` flag that says whether that limit is applied at all. The caller needs the portal-settings right of a  DocSpace administrator - the portal owner and a DocSpace administrator qualify, any other member is refused -  and the call is read-only. The pair describes the whole portal rather than the calling user, and it is never  empty: a portal nobody has configured answers `lifeTime` 1440, one day, with `enabled` false. Read the two  fields together, because the number alone does not say how long a session lasts - while `enabled` is false the  stored number is ignored and an issued session is honoured for a year, and `lifeTime` 0 with `enabled` true  means a session that never expires on its own. On an installation whose configuration hides the cookie section  the built-in default pair comes back instead of the stored one. `GET api/2.0/settings` carries the same flag  as `cookieSettingsEnabled` without the number; change the pair with `PUT api/2.0/settings/cookiesettings`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-cookie-settings/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CookieSettingsWrapper**](../Model/CookieSettingsWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\CookiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCookieSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CookiesApi->getCookieSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCookieSettings()`

```php
updateCookieSettings($cookie_settings_request_dto): \OpenAPI\Client\Model\StringWrapper
```

Update the cookie lifetime settings
Stores how long an authentication session of this portal stays valid: `lifeTime` in minutes together with the  `enabled` flag that switches the limit on. The caller needs the portal-settings right of a DocSpace  administrator - the portal owner and a DocSpace administrator qualify, any other member is refused - and on an  installation whose configuration hides the cookie section nothing is stored and the call is answered with 402.  A `lifeTime` above 9999 minutes is not rejected but clamped to 9999, while 0 or less clears the number  instead, which with `enabled` true leaves sessions that never expire on their own. Any positive `lifeTime`  raises the session version of the portal: every session issued before the call stops being accepted, and with  `enabled` true the connections behind them are dropped as well. The caller is signed in again inside the same  call and gets a fresh session cookie in the response, so a client that keeps sending the token it held before  this call is the one locked out. The change is recorded in the audit trail. What comes back is a localized  confirmation message; read the stored pair with `GET api/2.0/settings/cookiesettings`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-cookie-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cookie_settings_request_dto** | [**\OpenAPI\Client\Model\CookieSettingsRequestDto**](../Model/CookieSettingsRequestDto.md)|  | [optional] |

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


$apiInstance = new OpenAPI\Client\Api\CookiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cookie_settings_request_dto = new \OpenAPI\Client\Model\CookieSettingsRequestDto(); // \OpenAPI\Client\Model\CookieSettingsRequestDto

try {
    $result = $apiInstance->updateCookieSettings($cookie_settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CookiesApi->updateCookieSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
