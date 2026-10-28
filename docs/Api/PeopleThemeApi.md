# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ThemeApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePortalTheme()**](PeopleThemeApi.md#changePortalTheme) | **PUT** /api/2.0/people/theme | Change the portal theme |
| [**getPortalTheme()**](PeopleThemeApi.md#getPortalTheme) | **GET** /api/2.0/people/theme | Get the portal theme |


## `changePortalTheme()`

```php
changePortalTheme($dark_theme_settings_request_dto): \OpenAPI\Client\Model\DarkThemeSettingsWrapper
```

Change the portal theme
Sets the interface theme of the calling account to `Base` for the light theme, `Dark` for the dark one, or  `System` to follow whatever the operating system asks for.  The setting belongs to the account and not to the portal, despite the name of the route, so it changes  nothing for anybody else and cannot be set on another account.  It needs no permission, takes effect at once and is idempotent - sending the theme that is already in use  changes nothing.  The answer echoes the theme that was stored, which is the value the request asked for.  The same value is reported as `theme` by `GET api/2.0/people/@self`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-portal-theme/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dark_theme_settings_request_dto** | [**\OpenAPI\Client\Model\DarkThemeSettingsRequestDto**](../Model/DarkThemeSettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DarkThemeSettingsWrapper**](../Model/DarkThemeSettingsWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dark_theme_settings_request_dto = new \OpenAPI\Client\Model\DarkThemeSettingsRequestDto(); // \OpenAPI\Client\Model\DarkThemeSettingsRequestDto

try {
    $result = $apiInstance->changePortalTheme($dark_theme_settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->changePortalTheme: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortalTheme()`

```php
getPortalTheme(): \OpenAPI\Client\Model\DarkThemeSettingsWrapper
```

Get the portal theme
Returns the interface theme the calling account has chosen: `Base` for the light theme, `Dark` for the dark  one, or `System` to follow whatever the operating system asks for.  The setting belongs to the account and not to the portal, despite the name of the route, so it describes the  caller alone and cannot be read for anybody else.  It needs no permission and is read-only.  A caller that has never chosen a theme gets the portal default rather than an empty answer.  The same value is also reported as `theme` by `GET api/2.0/people/@self`, so a client that reads the profile  on start-up does not need this operation as well.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-portal-theme/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DarkThemeSettingsWrapper**](../Model/DarkThemeSettingsWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPortalTheme();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->getPortalTheme: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
