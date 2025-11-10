# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.LicenseApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptLicense()**](SettingsLicenseApi.md#acceptLicense) | **POST** /api/2.0/settings/license/accept | Activate a license |
| [**getIsLicenseRequired()**](SettingsLicenseApi.md#getIsLicenseRequired) | **GET** /api/2.0/settings/license/required | Request a license |
| [**refreshLicense()**](SettingsLicenseApi.md#refreshLicense) | **GET** /api/2.0/settings/license/refresh | Refresh the license |
| [**uploadLicense()**](SettingsLicenseApi.md#uploadLicense) | **POST** /api/2.0/settings/license | Upload a license |


## `acceptLicense()`

```php
acceptLicense(): \OpenAPI\Client\Model\StringWrapper
```

Activate a license
Activates a license for the portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/accept-license/).

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



$apiInstance = new OpenAPI\Client\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->acceptLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->acceptLicense: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIsLicenseRequired()`

```php
getIsLicenseRequired(): \OpenAPI\Client\Model\BooleanWrapper
```

Request a license
Requests a portal license if necessary.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-is-license-required/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIsLicenseRequired();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getIsLicenseRequired: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshLicense()`

```php
refreshLicense(): \OpenAPI\Client\Model\BooleanWrapper
```

Refresh the license
Refreshes the portal license.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/refresh-license/).

### Parameters

This endpoint does not need any parameter.

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



$apiInstance = new OpenAPI\Client\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->refreshLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->refreshLicense: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadLicense()`

```php
uploadLicense($files): \OpenAPI\Client\Model\StringWrapper
```

Upload a license
Uploads a portal license specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/upload-license/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **files** | **\SplFileObject[]**| The list of license files to be uploaded. | |

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



$apiInstance = new OpenAPI\Client\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = array('/path/to/file.txt'); // \SplFileObject[] | The list of license files to be uploaded.

try {
    $result = $apiInstance->uploadLicense($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->uploadLicense: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
