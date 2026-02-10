# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AuditTrailDataApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuditTrailReport()**](SecurityAuditTrailDataApi.md#createAuditTrailReport) | **POST** /api/2.0/security/audit/events/report | Generate the audit trail report |
| [**getAuditEventsByFilter()**](SecurityAuditTrailDataApi.md#getAuditEventsByFilter) | **GET** /api/2.0/security/audit/events/filter | Get filtered audit trail data |
| [**getAuditSettings()**](SecurityAuditTrailDataApi.md#getAuditSettings) | **GET** /api/2.0/security/audit/settings/lifetime | Get the audit trail settings |
| [**getAuditTrailMappers()**](SecurityAuditTrailDataApi.md#getAuditTrailMappers) | **GET** /api/2.0/security/audit/mappers | Get audit trail mappers |
| [**getAuditTrailTypes()**](SecurityAuditTrailDataApi.md#getAuditTrailTypes) | **GET** /api/2.0/security/audit/types | Get audit trail types |
| [**getLastAuditEvents()**](SecurityAuditTrailDataApi.md#getLastAuditEvents) | **GET** /api/2.0/security/audit/events/last | Get audit trail data |
| [**setAuditSettings()**](SecurityAuditTrailDataApi.md#setAuditSettings) | **POST** /api/2.0/security/audit/settings/lifetime | Set the audit trail settings |


## `createAuditTrailReport()`

```php
createAuditTrailReport(): \OpenAPI\Client\Model\StringWrapper
```

Generate the audit trail report
Generates the audit trail report.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-audit-trail-report/).

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



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAuditTrailReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->createAuditTrailReport: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditEventsByFilter()`

```php
getAuditEventsByFilter($user_id, $module_type, $action_type, $action, $entry_type, $target, $from, $to, $count, $start_index): \OpenAPI\Client\Model\AuditEventArrayWrapper
```

Get filtered audit trail data
Returns a list of the audit events by the parameters specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-audit-events-by-filter/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the user who triggered the audit event. | [optional] |
| **module_type** | [**\OpenAPI\Client\Model\LocationType**](../Model/.md)| The location where the audit event occurred. | [optional] |
| **action_type** | [**\OpenAPI\Client\Model\ActionType**](../Model/.md)| The type of action performed in the audit event (e.g., Create, Update, Delete). | [optional] |
| **action** | [**\OpenAPI\Client\Model\MessageAction**](../Model/.md)| The specific action that occurred within the audit event. | [optional] |
| **entry_type** | [**\OpenAPI\Client\Model\EntryType**](../Model/.md)| The type of audit entry (e.g., Folder, User, File). | [optional] |
| **target** | **string**| The target object affected by the audit event (e.g., document ID, user account). | [optional] |
| **from** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The starting date and time for filtering audit events. | [optional] |
| **to** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The ending date and time for filtering audit events. | [optional] |
| **count** | **int**| The maximum number of audit event records to retrieve. | [optional] |
| **start_index** | **int**| The index of the first audit event record to retrieve in a paged query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuditEventArrayWrapper**](../Model/AuditEventArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The ID of the user who triggered the audit event.
$module_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LocationType(); // \OpenAPI\Client\Model\LocationType | The location where the audit event occurred.
$action_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ActionType(); // \OpenAPI\Client\Model\ActionType | The type of action performed in the audit event (e.g., Create, Update, Delete).
$action = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MessageAction(); // \OpenAPI\Client\Model\MessageAction | The specific action that occurred within the audit event.
$entry_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EntryType(); // \OpenAPI\Client\Model\EntryType | The type of audit entry (e.g., Folder, User, File).
$target = some text; // string | The target object affected by the audit event (e.g., document ID, user account).
$from = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The starting date and time for filtering audit events.
$to = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The ending date and time for filtering audit events.
$count = 1234; // int | The maximum number of audit event records to retrieve.
$start_index = 1234; // int | The index of the first audit event record to retrieve in a paged query.

try {
    $result = $apiInstance->getAuditEventsByFilter($user_id, $module_type, $action_type, $action, $entry_type, $target, $from, $to, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->getAuditEventsByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditSettings()`

```php
getAuditSettings(): \OpenAPI\Client\Model\TenantAuditSettingsWrapper
```

Get the audit trail settings
Returns the audit trail settings.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-audit-settings/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TenantAuditSettingsWrapper**](../Model/TenantAuditSettingsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuditSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->getAuditSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditTrailMappers()`

```php
getAuditTrailMappers($product_type, $module_type): \OpenAPI\Client\Model\ObjectWrapper
```

Get audit trail mappers
Returns the mappers for the audit trail types.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-audit-trail-mappers/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_type** | [**\OpenAPI\Client\Model\ProductType**](../Model/.md)| The type of product related to the audit trail. | [optional] |
| **module_type** | [**\OpenAPI\Client\Model\LocationType**](../Model/.md)| The location associated with the audit trail. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProductType(); // \OpenAPI\Client\Model\ProductType | The type of product related to the audit trail.
$module_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LocationType(); // \OpenAPI\Client\Model\LocationType | The location associated with the audit trail.

try {
    $result = $apiInstance->getAuditTrailMappers($product_type, $module_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->getAuditTrailMappers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditTrailTypes()`

```php
getAuditTrailTypes(): \OpenAPI\Client\Model\ObjectWrapper
```

Get audit trail types
Returns all the available audit trail types.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-audit-trail-types/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAuditTrailTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->getAuditTrailTypes: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLastAuditEvents()`

```php
getLastAuditEvents(): \OpenAPI\Client\Model\AuditEventArrayWrapper
```

Get audit trail data
Returns a list of the latest changes (creation, modification, deletion, etc.) made by users to the entities on the portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-last-audit-events/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AuditEventArrayWrapper**](../Model/AuditEventArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLastAuditEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->getLastAuditEvents: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAuditSettings()`

```php
setAuditSettings($tenant_audit_settings_wrapper): \OpenAPI\Client\Model\TenantAuditSettingsWrapper
```

Set the audit trail settings
Sets the audit trail settings for the current portal.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-audit-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_audit_settings_wrapper** | [**\OpenAPI\Client\Model\TenantAuditSettingsWrapper**](../Model/TenantAuditSettingsWrapper.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantAuditSettingsWrapper**](../Model/TenantAuditSettingsWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AuditTrailDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_audit_settings_wrapper = new \OpenAPI\Client\Model\TenantAuditSettingsWrapper(); // \OpenAPI\Client\Model\TenantAuditSettingsWrapper

try {
    $result = $apiInstance->setAuditSettings($tenant_audit_settings_wrapper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailDataApi->setAuditSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
