# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.UserDataApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeletePersonalFolderProgress()**](PeopleUserDataApi.md#getDeletePersonalFolderProgress) | **GET** /api/2.0/people/delete/personal/progress | Get the personal folder deletion progress |
| [**getReassignProgress()**](PeopleUserDataApi.md#getReassignProgress) | **GET** /api/2.0/people/reassign/progress/{userId} | Get the reassignment progress |
| [**getRemoveProgress()**](PeopleUserDataApi.md#getRemoveProgress) | **GET** /api/2.0/people/remove/progress/{userId} | Get the deletion progress |
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

Get the personal folder deletion progress
Returns the current state of the personal folder deletion queued for the authenticated account.  The job must have been queued by `POST api/2.0/people/delete/personal/start` first: when nothing is queued for  the caller the operation answers 200 with an empty body.  It takes no parameters and reports on the caller only, so an administrator cannot watch the folder deletion of  another user through it.  The call is read-only and is the polling operation of this flow - repeat it until `isCompleted` is true, and  read `error` for the message left by a failed job.  A queued personal folder deletion cannot be cancelled, so the only outcome to wait for is its completion.

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
getReassignProgress($user_id): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Get the reassignment progress
Returns the current state of the data reassignment queued for the user with the ID specified in the request.  A reassignment must have been queued by `POST api/2.0/people/reassign/start` first: when nothing is queued for  that user the operation answers 200 with an empty body.  The caller needs the permission to edit users, and only the portal owner may track a reassignment whose source  user is a DocSpace administrator.  The call is read-only and is the polling operation of the reassignment flow - repeat it until `isCompleted` is  true, reading `percentage` for the 0 to 100 progress and `error` for the message left by a failed job.  Use `PUT api/2.0/people/reassign/terminate` to cancel a job that is still running.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-reassign-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the user the operation applies to, taken from the route. For a progress operation it has to be the  same ID that was passed when the job was started. | |

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
$user_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the user the operation applies to, taken from the route. For a progress operation it has to be the  same ID that was passed when the job was started.

try {
    $result = $apiInstance->getReassignProgress($user_id);
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
getRemoveProgress($user_id): \OpenAPI\Client\Model\TaskProgressResponseWrapper
```

Get the deletion progress
Returns the current state of the data deletion queued for the user with the ID specified in the request.  A deletion must have been queued by `POST api/2.0/people/remove/start` first: when nothing is queued for that  user the operation answers 200 with an empty body.  The caller needs the permission to edit users.  The call is read-only and is the polling operation of the deletion flow - repeat it until `isCompleted` is  true, reading `percentage` for the 0 to 100 progress and `error` for the message left by a failed job.  Use `PUT api/2.0/people/remove/terminate` to cancel a job that is still running.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-remove-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the user the operation applies to, taken from the route. For a progress operation it has to be the  same ID that was passed when the job was started. | |

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
$user_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the user the operation applies to, taken from the route. For a progress operation it has to be the  same ID that was passed when the job was started.

try {
    $result = $apiInstance->getRemoveProgress($user_id);
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
Reports whether the rooms and the shared files of a user have to be reassigned before that user can be removed  or changed to the type passed in `type`.  Call it before `DELETE api/2.0/people/{userId}` or before a type change to find out whether  `POST api/2.0/people/reassign/start` has to run first.  The caller needs the permission to add and remove users of the requested type, and must be the portal owner  when the checked user is a DocSpace administrator.  The call is read-only and answers true when the user owns at least one room, or - when `type` is `Guest` -  when the user still has shared files.  A false answer means the user can be removed or converted without a reassignment.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/necessary-reassign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the user whose rooms and shared files are checked. | [optional] |
| **type** | [**\OpenAPI\Client\Model\EmployeeType**](../Model/.md)| The type the user is about to be changed to, which decides what counts as data that has to be reassigned:  `RoomAdmin`, `DocSpaceAdmin` and `User` are checked for owned rooms only, while `Guest` is also checked for  files that are still shared. The default is `All`, which checks owned rooms only. | [optional] |

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
$user_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the user whose rooms and shared files are checked.
$type = RoomAdmin; // \OpenAPI\Client\Model\EmployeeType | The type the user is about to be changed to, which decides what counts as data that has to be reassigned:  `RoomAdmin`, `DocSpaceAdmin` and `User` are checked for owned rooms only, while `Guest` is also checked for  files that are still shared. The default is `All`, which checks owned rooms only.

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
Emails the caller a confirmation link that lets them delete their own profile, and is the first step of the  self-service profile removal.  It acts on the authenticated account only and takes no parameters, so it cannot be used to remove somebody  else - an administrator removes another user through `DELETE api/2.0/people/{userId}`.  The caller has to be a regular portal account: the portal owner and an account imported from LDAP are  rejected, because neither can delete itself.  The call sends mail and does not change the profile; the deletion happens later, when the caller follows the  emailed link and the client calls `DELETE api/2.0/people/@self` with the confirmation token from it.  The answer is a ready-to-display message naming the address the link was sent to, and the address is wrapped  in bold HTML markup, so strip the markup before showing it outside a web page.  Repeated calls are throttled, and each one sends a new link.

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
Queues an asynchronous job that empties the personal folder of the authenticated account.  The operation takes no parameters and always acts on the caller, so it cannot be used to empty the folder of  another user.  Only an account whose type is `Guest` may call it; every other type is rejected, because only a guest has a  personal folder that can be emptied this way.  The job does not finish within this call: poll `GET api/2.0/people/delete/personal/progress` until  `isCompleted` is true.  The job deletes the files permanently and cannot be undone or cancelled - there is no terminate operation for  this flow, unlike the user data deletion.

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
Queues an asynchronous job that transfers the rooms and the shared files owned by one portal user to another.  The source user must already have the `Terminated` status - disable the account through  `PUT api/2.0/people/status/{status}` before calling this - and the destination user must be an active room  admin or DocSpace admin, so a guest, a system account or a disabled account is rejected.  The caller needs the permission to edit users, cannot reassign their own data, and must be the portal owner to  reassign the data of another DocSpace administrator or of a People module administrator.  The transfer does not finish within this call: poll `GET api/2.0/people/reassign/progress/{userId}` with the  source user ID until `isCompleted` is true, and cancel it through `PUT api/2.0/people/reassign/terminate`.  Pass `deleteProfile` as true to delete the source profile once the transfer succeeds, otherwise the emptied  profile is kept.  Use `GET api/2.0/people/reassign/necessary` first to find out whether the user owns anything that has to be  reassigned at all.

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
Queues an asynchronous job that erases the data of the user with the ID specified in the request.  The account must already have the `Terminated` status - disable it through  `PUT api/2.0/people/status/{status}` first - and it cannot be the portal owner or the caller.  The caller needs the permission to edit users, has to be a DocSpace admin to erase the data of a room admin,  and has to be the portal owner to erase the data of another DocSpace admin.  The erasure does not finish within this call: poll `GET api/2.0/people/remove/progress/{userId}` with the same  user ID until `isCompleted` is true, and cancel it through `PUT api/2.0/people/remove/terminate`.  This operation destroys the data and cannot be undone; to keep the rooms and the shared files of the account  instead, transfer them first through `POST api/2.0/people/reassign/start`.  An unknown ID and a rejected precondition both answer 400 and name the ID they rejected.

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
Cancels the data reassignment queued for the user with the ID specified in the request.  The caller needs the permission to edit users, and only the portal owner may cancel a reassignment whose  source user is a DocSpace administrator.  The operation is idempotent: when nothing is queued for that user it answers 200 with an empty body, and  repeating it on an already cancelled job changes nothing.  Cancelling removes the job from the queue and does not undo the transfers it has already made, and a cancelled  job cannot be resumed - start a new one through `POST api/2.0/people/reassign/start`.  The returned progress reports `status` as `Canceled` and `isCompleted` as true.

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
Cancels the data deletion queued for the user with the ID specified in the request.  The caller needs the permission to edit users.  The operation is idempotent and returns no body: it drops the job from the queue, and doing so when nothing is  queued, or when the job has already finished, changes nothing and still answers 200.  Cancelling does not restore the data the job has already erased, and a cancelled job cannot be resumed - start  a new one through `POST api/2.0/people/remove/start`.  To find out whether the job is still running, read  `GET api/2.0/people/remove/progress/{userId}` before and after this call.

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
