# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.EmailApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeUserEmail()**](PeopleEmailApi.md#changeUserEmail) | **PUT** /api/2.0/people/{userId}/email | Change a user email |
| [**sendEmailChangeInstructions()**](PeopleEmailApi.md#sendEmailChangeInstructions) | **POST** /api/2.0/people/email | Send instructions to change email |


## `changeUserEmail()`

```php
changeUserEmail($user_id, $change_email_request): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Change a user email
Sets a new email address on an account, which is the step that completes an email change.  The request has to carry the confirmation token from the emailed link rather than an ordinary session, and an  expired or already used token is answered with 401.  The account has to exist and be `Active`, and only the portal owner may change the owner's own address.  Pass the address either in plain text as `email` or, as it arrives inside the confirmation link, encrypted as  `encEmail`; an empty or malformed address answers 400.  An address equal to the current one is accepted and changes nothing, while a new one is stored in lowercase  and marks the account `Activated`, because following the link proves the address works.  The answer is the profile with its new address.  The change is requested through `POST api/2.0/people/email`, which is what sends the link.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-user-email/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the account whose address is set, taken from the route. It has to match the account the  confirmation token was issued for, and the account has to be active. | |
| **change_email_request** | [**\OpenAPI\Client\Model\ChangeEmailRequest**](../Model/ChangeEmailRequest.md)| The new address, in plain text or in the encrypted form the confirmation link carries. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the account whose address is set, taken from the route. It has to match the account the  confirmation token was issued for, and the account has to be active.
$change_email_request = new \OpenAPI\Client\Model\ChangeEmailRequest(); // \OpenAPI\Client\Model\ChangeEmailRequest | The new address, in plain text or in the encrypted form the confirmation link carries.

try {
    $result = $apiInstance->changeUserEmail($user_id, $change_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->changeUserEmail: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailChangeInstructions()`

```php
sendEmailChangeInstructions($update_member_request_dto): \OpenAPI\Client\Model\StringWrapper
```

Send instructions to change email
Starts changing the email address of an account, and what it actually does depends on who calls it.  A caller acting on their own account only gets a confirmation letter sent to the new address, and the address  stays unchanged until that link is followed, which lands on `PUT api/2.0/people/{userId}/email`.  A DocSpace administrator acting on somebody else changes the address immediately instead: the account is  marked as not activated, every session of it is ended, and activation instructions are sent to the new  address - and passing the address the account already has is then rejected with 400.  A caller who is not an administrator may only address their own account, nobody but the owner may change the  owner's address, and only the owner may change the address of another DocSpace administrator.  The target has to be an account that is neither disabled nor a pending invitation, otherwise the operation  answers 404, and an address that already belongs to somebody answers 400.  The answer is a ready-to-display message naming the address the letter was sent to.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-email-change-instructions/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_member_request_dto** | [**\OpenAPI\Client\Model\UpdateMemberRequestDto**](../Model/UpdateMemberRequestDto.md)|  | [optional] |

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


$apiInstance = new OpenAPI\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_member_request_dto = new \OpenAPI\Client\Model\UpdateMemberRequestDto(); // \OpenAPI\Client\Model\UpdateMemberRequestDto

try {
    $result = $apiInstance->sendEmailChangeInstructions($update_member_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailChangeInstructions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
