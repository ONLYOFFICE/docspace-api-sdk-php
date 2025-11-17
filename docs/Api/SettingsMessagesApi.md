# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.MessagesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**enableAdminMessageSettings()**](SettingsMessagesApi.md#enableAdminMessageSettings) | **POST** /api/2.0/settings/messagesettings | Enable the administrator message settings |
| [**sendAdminMail()**](SettingsMessagesApi.md#sendAdminMail) | **POST** /api/2.0/settings/sendadmmail | Send a message to the administrator |
| [**sendJoinInviteMail()**](SettingsMessagesApi.md#sendJoinInviteMail) | **POST** /api/2.0/settings/sendjoininvite | Sends an invitation email |


## `enableAdminMessageSettings()`

```php
enableAdminMessageSettings($turn_on_admin_message_settings_request_dto): \OpenAPI\Client\Model\StringWrapper
```

Enable the administrator message settings
Displays the contact form on the Sign In page, allowing users to send a message to the DocSpace administrator in case they encounter any issues while accessing DocSpace.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/enable-admin-message-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **turn_on_admin_message_settings_request_dto** | [**\OpenAPI\Client\Model\TurnOnAdminMessageSettingsRequestDto**](../Model/TurnOnAdminMessageSettingsRequestDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$turn_on_admin_message_settings_request_dto = new \OpenAPI\Client\Model\TurnOnAdminMessageSettingsRequestDto(); // \OpenAPI\Client\Model\TurnOnAdminMessageSettingsRequestDto

try {
    $result = $apiInstance->enableAdminMessageSettings($turn_on_admin_message_settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->enableAdminMessageSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAdminMail()`

```php
sendAdminMail($admin_message_settings_requests_dto): \OpenAPI\Client\Model\StringWrapper
```

Send a message to the administrator
Sends a message to the administrator email when unauthorized users encounter issues accessing DocSpace.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-admin-mail/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **admin_message_settings_requests_dto** | [**\OpenAPI\Client\Model\AdminMessageSettingsRequestsDto**](../Model/AdminMessageSettingsRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$admin_message_settings_requests_dto = new \OpenAPI\Client\Model\AdminMessageSettingsRequestsDto(); // \OpenAPI\Client\Model\AdminMessageSettingsRequestsDto

try {
    $result = $apiInstance->sendAdminMail($admin_message_settings_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendAdminMail: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendJoinInviteMail()`

```php
sendJoinInviteMail($admin_message_base_settings_requests_dto): \OpenAPI\Client\Model\StringWrapper
```

Sends an invitation email
Sends an invitation email with a link to the DocSpace.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-join-invite-mail/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **admin_message_base_settings_requests_dto** | [**\OpenAPI\Client\Model\AdminMessageBaseSettingsRequestsDto**](../Model/AdminMessageBaseSettingsRequestsDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$admin_message_base_settings_requests_dto = new \OpenAPI\Client\Model\AdminMessageBaseSettingsRequestsDto(); // \OpenAPI\Client\Model\AdminMessageBaseSettingsRequestsDto

try {
    $result = $apiInstance->sendJoinInviteMail($admin_message_base_settings_requests_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendJoinInviteMail: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
