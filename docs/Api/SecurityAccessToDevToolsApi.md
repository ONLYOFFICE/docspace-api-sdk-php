# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.AccessToDevToolsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**setTenantDevToolsAccessSettings()**](SecurityAccessToDevToolsApi.md#setTenantDevToolsAccessSettings) | **POST** /api/2.0/settings/devtoolsaccess | Set the Developer Tools access settings |


## `setTenantDevToolsAccessSettings()`

```php
setTenantDevToolsAccessSettings($tenant_dev_tools_access_settings_dto): \OpenAPI\Client\Model\TenantDevToolsAccessSettingsWrapper
```

Set the Developer Tools access settings
Sets the Developer Tools access settings for the portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-tenant-dev-tools-access-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_dev_tools_access_settings_dto** | [**\OpenAPI\Client\Model\TenantDevToolsAccessSettingsDto**](../Model/TenantDevToolsAccessSettingsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDevToolsAccessSettingsWrapper**](../Model/TenantDevToolsAccessSettingsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AccessToDevToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_dev_tools_access_settings_dto = new \OpenAPI\Client\Model\TenantDevToolsAccessSettingsDto(); // \OpenAPI\Client\Model\TenantDevToolsAccessSettingsDto

try {
    $result = $apiInstance->setTenantDevToolsAccessSettings($tenant_dev_tools_access_settings_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessToDevToolsApi->setTenantDevToolsAccessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
