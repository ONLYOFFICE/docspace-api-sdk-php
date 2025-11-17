# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.AuthenticationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticateMe()**](AuthenticationApi.md#authenticateMe) | **POST** /api/2.0/authentication | Authenticate a user |
| [**authenticateMeFromBodyWithCode()**](AuthenticationApi.md#authenticateMeFromBodyWithCode) | **POST** /api/2.0/authentication/{code} | Authenticate a user by code |
| [**checkConfirm()**](AuthenticationApi.md#checkConfirm) | **POST** /api/2.0/authentication/confirm | Open confirmation email URL |
| [**getIsAuthentificated()**](AuthenticationApi.md#getIsAuthentificated) | **GET** /api/2.0/authentication | Check authentication |
| [**logout()**](AuthenticationApi.md#logout) | **POST** /api/2.0/authentication/logout | Log out |
| [**saveMobilePhone()**](AuthenticationApi.md#saveMobilePhone) | **POST** /api/2.0/authentication/setphone | Set a mobile phone |
| [**sendSmsCode()**](AuthenticationApi.md#sendSmsCode) | **POST** /api/2.0/authentication/sendsms | Send SMS code |


## `authenticateMe()`

```php
authenticateMe($auth_requests_dto): \OpenAPI\Client\Model\AuthenticationTokenWrapper
```

Authenticate a user
Authenticates the current user by SMS, authenticator app, or without two-factor authentication.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/authenticate-me/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_requests_dto** | [**\OpenAPI\Client\Model\AuthRequestsDto**](../Model/AuthRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthenticationTokenWrapper**](../Model/AuthenticationTokenWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_requests_dto = new \OpenAPI\Client\Model\AuthRequestsDto(); // \OpenAPI\Client\Model\AuthRequestsDto

try {
    $result = $apiInstance->authenticateMe($auth_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticateMe: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateMeFromBodyWithCode()`

```php
authenticateMeFromBodyWithCode($code, $auth_requests_dto): \OpenAPI\Client\Model\AuthenticationTokenWrapper
```

Authenticate a user by code
Authenticates the current user by SMS or two-factor authentication code.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/authenticate-me-from-body-with-code/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **auth_requests_dto** | [**\OpenAPI\Client\Model\AuthRequestsDto**](../Model/AuthRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthenticationTokenWrapper**](../Model/AuthenticationTokenWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$auth_requests_dto = new \OpenAPI\Client\Model\AuthRequestsDto(); // \OpenAPI\Client\Model\AuthRequestsDto

try {
    $result = $apiInstance->authenticateMeFromBodyWithCode($code, $auth_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticateMeFromBodyWithCode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkConfirm()`

```php
checkConfirm($email_validation_key_model): \OpenAPI\Client\Model\ConfirmWrapper
```

Open confirmation email URL
Opens a confirmation email URL to validate a certain action (employee invitation, portal removal, phone activation, etc.).

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-confirm/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_validation_key_model** | [**\OpenAPI\Client\Model\EmailValidationKeyModel**](../Model/EmailValidationKeyModel.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfirmWrapper**](../Model/ConfirmWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_validation_key_model = new \OpenAPI\Client\Model\EmailValidationKeyModel(); // \OpenAPI\Client\Model\EmailValidationKeyModel

try {
    $result = $apiInstance->checkConfirm($email_validation_key_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->checkConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIsAuthentificated()`

```php
getIsAuthentificated(): \OpenAPI\Client\Model\BooleanWrapper
```

Check authentication
Checks if the current user is authenticated or not.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-is-authentificated/).

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



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIsAuthentificated();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getIsAuthentificated: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout(): \OpenAPI\Client\Model\StringWrapper
```

Log out
Logs out of the current user account.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/logout/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveMobilePhone()`

```php
saveMobilePhone($mobile_requests_dto): \OpenAPI\Client\Model\AuthenticationTokenWrapper
```

Set a mobile phone
Sets a mobile phone for the current user.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-mobile-phone/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mobile_requests_dto** | [**\OpenAPI\Client\Model\MobileRequestsDto**](../Model/MobileRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthenticationTokenWrapper**](../Model/AuthenticationTokenWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mobile_requests_dto = new \OpenAPI\Client\Model\MobileRequestsDto(); // \OpenAPI\Client\Model\MobileRequestsDto

try {
    $result = $apiInstance->saveMobilePhone($mobile_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->saveMobilePhone: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsCode()`

```php
sendSmsCode($auth_requests_dto): \OpenAPI\Client\Model\AuthenticationTokenWrapper
```

Send SMS code
Sends SMS with an authentication code.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-sms-code/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_requests_dto** | [**\OpenAPI\Client\Model\AuthRequestsDto**](../Model/AuthRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthenticationTokenWrapper**](../Model/AuthenticationTokenWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_requests_dto = new \OpenAPI\Client\Model\AuthRequestsDto(); // \OpenAPI\Client\Model\AuthRequestsDto

try {
    $result = $apiInstance->sendSmsCode($auth_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendSmsCode: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
