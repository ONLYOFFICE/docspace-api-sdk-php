# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.UserDataApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeletePersonalFolderProgress()**](PeopleUserDataApi.md#getDeletePersonalFolderProgress) | **GET** /api/2.0/people/delete/personal/progress | Get the progress of deleting the personal folder |
| [**getReassignProgress()**](PeopleUserDataApi.md#getReassignProgress) | **GET** /api/2.0/people/reassign/progress/{userid} | Get the reassignment progress |
| [**getRemoveProgress()**](PeopleUserDataApi.md#getRemoveProgress) | **GET** /api/2.0/people/remove/progress/{userid} | Get the deletion progress |
| [**necessaryReassign()**](PeopleUserDataApi.md#necessaryReassign) | **GET** /api/2.0/people/reassign/necessary | Check data for reassignment need |
| [**sendInstructionsToDelete()**](PeopleUserDataApi.md#sendInstructionsToDelete) | **PUT** /api/2.0/people/self/delete | Send the deletion instructions |
| [**startDeletePersonalFolder()**](PeopleUserDataApi.md#startDeletePersonalFolder) | **POST** /api/2.0/people/delete/personal/start | Delete the personal folder |
| [**startReassign()**](PeopleUserDataApi.md#startReassign) | **POST** /api/2.0/people/reassign/start | Start the data reassignment |
| [**startRemove()**](PeopleUserDataApi.md#startRemove) | **POST** /api/2.0/people/remove/start | Start the data deletion |
| [**terminateReassign()**](PeopleUserDataApi.md#terminateReassign) | **PUT** /api/2.0/people/reassign/terminate | Terminate the data reassignment |
| [**terminateRemove()**](PeopleUserDataApi.md#terminateRemove) | **PUT** /api/2.0/people/remove/terminate | Terminate the data deletion |


## `getDeletePersonalFolderProgress()`

```php
getDeletePersonalFolderProgress(): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Get the progress of deleting the personal folder
Returns the progress of deleting the personal folder.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-delete-personal-folder-progress/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeletePersonalFolderProgress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->getDeletePersonalFolderProgress: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReassignProgress()`

```php
getReassignProgress($userid): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Get the reassignment progress
Returns the progress of the started data reassignment for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-reassign-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userid** | **string**| The user ID. | |

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userid = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The user ID.

try {
    $result = $apiInstance->getReassignProgress($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->getReassignProgress: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRemoveProgress()`

```php
getRemoveProgress($userid): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Get the deletion progress
Returns the progress of the started data deletion for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-remove-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userid** | **string**| The user ID. | |

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userid = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The user ID.

try {
    $result = $apiInstance->getRemoveProgress($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->getRemoveProgress: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `necessaryReassign()`

```php
necessaryReassign($user_id, $type): \OpenAPI\Client\Model\BooleanWrapper
```

Check data for reassignment need
Checks whether the reassignment of rooms and shared files is required.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/necessary-reassign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. | [optional] |
| **type** | [**\OpenAPI\Client\Model\EmployeeType**](../Model/.md)| The expected user type. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = aae1e103-bca5-9fa1-ba8c-42058b4abf28; // string | The user ID.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EmployeeType(); // \OpenAPI\Client\Model\EmployeeType | The expected user type.

try {
    $result = $apiInstance->necessaryReassign($user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->necessaryReassign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInstructionsToDelete()`

```php
sendInstructionsToDelete(): \OpenAPI\Client\Model\StringWrapper
```

Send the deletion instructions
Sends the instructions for deleting a user profile.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-instructions-to-delete/).

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sendInstructionsToDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->sendInstructionsToDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startDeletePersonalFolder()`

```php
startDeletePersonalFolder(): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Delete the personal folder
Starts deleting the personal folder.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-delete-personal-folder/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->startDeletePersonalFolder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->startDeletePersonalFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startReassign()`

```php
startReassign($start_reassign_request_dto): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Start the data reassignment
Starts the data reassignment for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-reassign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_reassign_request_dto** | [**\OpenAPI\Client\Model\StartReassignRequestDto**](../Model/StartReassignRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_reassign_request_dto = new \OpenAPI\Client\Model\StartReassignRequestDto(); // \OpenAPI\Client\Model\StartReassignRequestDto

try {
    $result = $apiInstance->startReassign($start_reassign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->startReassign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startRemove()`

```php
startRemove($terminate_request_dto): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Start the data deletion
Starts the data deletion for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-remove/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminate_request_dto** | [**\OpenAPI\Client\Model\TerminateRequestDto**](../Model/TerminateRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminate_request_dto = new \OpenAPI\Client\Model\TerminateRequestDto(); // \OpenAPI\Client\Model\TerminateRequestDto

try {
    $result = $apiInstance->startRemove($terminate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->startRemove: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateReassign()`

```php
terminateReassign($terminate_request_dto): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Terminate the data reassignment
Terminates the data reassignment for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/terminate-reassign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminate_request_dto** | [**\OpenAPI\Client\Model\TerminateRequestDto**](../Model/TerminateRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskProgressResponseWrapper**](../Model/TaskProgressResponseWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminate_request_dto = new \OpenAPI\Client\Model\TerminateRequestDto(); // \OpenAPI\Client\Model\TerminateRequestDto

try {
    $result = $apiInstance->terminateReassign($terminate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->terminateReassign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateRemove()`

```php
terminateRemove($terminate_request_dto)
```

Terminate the data deletion
Terminates the data deletion for the user with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/terminate-remove/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminate_request_dto** | [**\OpenAPI\Client\Model\TerminateRequestDto**](../Model/TerminateRequestDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\UserDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminate_request_dto = new \OpenAPI\Client\Model\TerminateRequestDto(); // \OpenAPI\Client\Model\TerminateRequestDto

try {
    $apiInstance->terminateRemove($terminate_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserDataApi->terminateRemove: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
