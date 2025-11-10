# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.SecurityApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnabledModules()**](SettingsSecurityApi.md#getEnabledModules) | **GET** /api/2.0/settings/security/modules | Get the enabled modules |
| [**getIsProductAdministrator()**](SettingsSecurityApi.md#getIsProductAdministrator) | **GET** /api/2.0/settings/security/administrator | Check a product administrator |
| [**getPasswordSettings()**](SettingsSecurityApi.md#getPasswordSettings) | **GET** /api/2.0/settings/security/password | Get the password settings |
| [**getProductAdministrators()**](SettingsSecurityApi.md#getProductAdministrators) | **GET** /api/2.0/settings/security/administrator/{productid} | Get the product administrators |
| [**getWebItemSecurityInfo()**](SettingsSecurityApi.md#getWebItemSecurityInfo) | **GET** /api/2.0/settings/security/{id} | Get the module availability |
| [**getWebItemSettingsSecurityInfo()**](SettingsSecurityApi.md#getWebItemSettingsSecurityInfo) | **GET** /api/2.0/settings/security | Get the security settings |
| [**setAccessToWebItems()**](SettingsSecurityApi.md#setAccessToWebItems) | **PUT** /api/2.0/settings/security/access | Set the security settings to modules |
| [**setProductAdministrator()**](SettingsSecurityApi.md#setProductAdministrator) | **PUT** /api/2.0/settings/security/administrator | Set a product administrator |
| [**setWebItemSecurity()**](SettingsSecurityApi.md#setWebItemSecurity) | **PUT** /api/2.0/settings/security | Set the module security settings |
| [**updatePasswordSettings()**](SettingsSecurityApi.md#updatePasswordSettings) | **PUT** /api/2.0/settings/security/password | Set the password settings |


## `getEnabledModules()`

```php
getEnabledModules(): \OpenAPI\Client\Model\ObjectWrapper
```

Get the enabled modules
Returns a list of all the enabled modules.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-enabled-modules/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEnabledModules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getEnabledModules: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIsProductAdministrator()`

```php
getIsProductAdministrator($productid, $userid): \OpenAPI\Client\Model\ProductAdministratorWrapper
```

Check a product administrator
Checks if the selected user is an administrator of a product with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-is-product-administrator/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productid** | **string**| The ID of the product extracted from the query parameters. | |
| **userid** | **string**| The user ID extracted from the query parameters. | |

### Return type

[**\OpenAPI\Client\Model\ProductAdministratorWrapper**](../Model/ProductAdministratorWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productid = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The ID of the product extracted from the query parameters.
$userid = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The user ID extracted from the query parameters.

try {
    $result = $apiInstance->getIsProductAdministrator($productid, $userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getIsProductAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPasswordSettings()`

```php
getPasswordSettings(): \OpenAPI\Client\Model\PasswordSettingsWrapper
```

Get the password settings
Returns the portal password settings.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-password-settings/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PasswordSettingsWrapper**](../Model/PasswordSettingsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPasswordSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getPasswordSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductAdministrators()`

```php
getProductAdministrators($productid): \OpenAPI\Client\Model\EmployeeArrayWrapper
```

Get the product administrators
Returns a list of all the administrators of a product with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-product-administrators/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productid** | **string**| The ID of the product extracted from the route parameters. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeArrayWrapper**](../Model/EmployeeArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productid = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The ID of the product extracted from the route parameters.

try {
    $result = $apiInstance->getProductAdministrators($productid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getProductAdministrators: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebItemSecurityInfo()`

```php
getWebItemSecurityInfo($id): \OpenAPI\Client\Model\BooleanWrapper
```

Get the module availability
Returns the availability of the module with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-web-item-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID extracted from the route parameters. | |

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The ID extracted from the route parameters.

try {
    $result = $apiInstance->getWebItemSecurityInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getWebItemSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebItemSettingsSecurityInfo()`

```php
getWebItemSettingsSecurityInfo($ids): \OpenAPI\Client\Model\SecurityArrayWrapper
```

Get the security settings
Returns the security settings for the modules specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-web-item-settings-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| The list of module identifiers for which to retrieve the security settings. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityArrayWrapper**](../Model/SecurityArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = ["some text"]; // string[] | The list of module identifiers for which to retrieve the security settings.

try {
    $result = $apiInstance->getWebItemSettingsSecurityInfo($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getWebItemSettingsSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAccessToWebItems()`

```php
setAccessToWebItems($web_items_security_requests_dto): \OpenAPI\Client\Model\SecurityArrayWrapper
```

Set the security settings to modules
Sets the security settings to the modules with the IDs specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-access-to-web-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_items_security_requests_dto** | [**\OpenAPI\Client\Model\WebItemsSecurityRequestsDto**](../Model/WebItemsSecurityRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityArrayWrapper**](../Model/SecurityArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_items_security_requests_dto = new \OpenAPI\Client\Model\WebItemsSecurityRequestsDto(); // \OpenAPI\Client\Model\WebItemsSecurityRequestsDto

try {
    $result = $apiInstance->setAccessToWebItems($web_items_security_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->setAccessToWebItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setProductAdministrator()`

```php
setProductAdministrator($security_requests_dto): \OpenAPI\Client\Model\ProductAdministratorWrapper
```

Set a product administrator
Sets the selected user as an administrator of a product with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-product-administrator/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **security_requests_dto** | [**\OpenAPI\Client\Model\SecurityRequestsDto**](../Model/SecurityRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductAdministratorWrapper**](../Model/ProductAdministratorWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$security_requests_dto = new \OpenAPI\Client\Model\SecurityRequestsDto(); // \OpenAPI\Client\Model\SecurityRequestsDto

try {
    $result = $apiInstance->setProductAdministrator($security_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->setProductAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebItemSecurity()`

```php
setWebItemSecurity($web_item_security_requests_dto): \OpenAPI\Client\Model\SecurityArrayWrapper
```

Set the module security settings
Sets the security settings to the module with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-web-item-security/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_item_security_requests_dto** | [**\OpenAPI\Client\Model\WebItemSecurityRequestsDto**](../Model/WebItemSecurityRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityArrayWrapper**](../Model/SecurityArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_item_security_requests_dto = new \OpenAPI\Client\Model\WebItemSecurityRequestsDto(); // \OpenAPI\Client\Model\WebItemSecurityRequestsDto

try {
    $result = $apiInstance->setWebItemSecurity($web_item_security_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->setWebItemSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePasswordSettings()`

```php
updatePasswordSettings($password_settings_requests_dto): \OpenAPI\Client\Model\PasswordSettingsWrapper
```

Set the password settings
Sets the portal password settings.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-password-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_settings_requests_dto** | [**\OpenAPI\Client\Model\PasswordSettingsRequestsDto**](../Model/PasswordSettingsRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PasswordSettingsWrapper**](../Model/PasswordSettingsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_settings_requests_dto = new \OpenAPI\Client\Model\PasswordSettingsRequestsDto(); // \OpenAPI\Client\Model\PasswordSettingsRequestsDto

try {
    $result = $apiInstance->updatePasswordSettings($password_settings_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->updatePasswordSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
