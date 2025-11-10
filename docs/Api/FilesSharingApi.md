# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.SharingApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyExternalSharePassword()**](FilesSharingApi.md#applyExternalSharePassword) | **POST** /api/2.0/files/share/{key}/password |  |
| [**changeFileOwner()**](FilesSharingApi.md#changeFileOwner) | **POST** /api/2.0/files/owner |  |
| [**getExternalShareData()**](FilesSharingApi.md#getExternalShareData) | **GET** /api/2.0/files/share/{key} |  |
| [**getFileSecurityInfo()**](FilesSharingApi.md#getFileSecurityInfo) | **GET** /api/2.0/files/file/{id}/share |  |
| [**getFolderSecurityInfo()**](FilesSharingApi.md#getFolderSecurityInfo) | **GET** /api/2.0/files/folder/{id}/share |  |
| [**getGroupsMembersWithFileSecurity()**](FilesSharingApi.md#getGroupsMembersWithFileSecurity) | **GET** /api/2.0/files/file/{fileId}/group/{groupId}/share |  |
| [**getGroupsMembersWithFolderSecurity()**](FilesSharingApi.md#getGroupsMembersWithFolderSecurity) | **GET** /api/2.0/files/folder/{folderId}/group/{groupId}/share |  |
| [**getSecurityInfo()**](FilesSharingApi.md#getSecurityInfo) | **POST** /api/2.0/files/share |  |
| [**getSharedUsers()**](FilesSharingApi.md#getSharedUsers) | **GET** /api/2.0/files/file/{fileId}/sharedusers |  |
| [**removeSecurityInfo()**](FilesSharingApi.md#removeSecurityInfo) | **DELETE** /api/2.0/files/share |  |
| [**sendEditorNotify()**](FilesSharingApi.md#sendEditorNotify) | **POST** /api/2.0/files/file/{fileId}/sendeditornotify |  |
| [**setFileSecurityInfo()**](FilesSharingApi.md#setFileSecurityInfo) | **PUT** /api/2.0/files/file/{fileId}/share |  |
| [**setFolderSecurityInfo()**](FilesSharingApi.md#setFolderSecurityInfo) | **PUT** /api/2.0/files/folder/{folderId}/share |  |
| [**setSecurityInfo()**](FilesSharingApi.md#setSecurityInfo) | **PUT** /api/2.0/files/share |  |


## `applyExternalSharePassword()`

```php
applyExternalSharePassword($key, $external_share_request_param): \OpenAPI\Client\Model\ExternalShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/apply-external-share-password/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The unique document identifier. | |
| **external_share_request_param** | [**\OpenAPI\Client\Model\ExternalShareRequestParam**](../Model/ExternalShareRequestParam.md)| The external data share request parameters. | |

### Return type

[**\OpenAPI\Client\Model\ExternalShareWrapper**](../Model/ExternalShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = some text; // string | The unique document identifier.
$external_share_request_param = new \OpenAPI\Client\Model\ExternalShareRequestParam(); // \OpenAPI\Client\Model\ExternalShareRequestParam | The external data share request parameters.

try {
    $result = $apiInstance->applyExternalSharePassword($key, $external_share_request_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->applyExternalSharePassword: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeFileOwner()`

```php
changeFileOwner($change_owner_request_dto): \OpenAPI\Client\Model\FileEntryBaseArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-file-owner/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_owner_request_dto** | [**\OpenAPI\Client\Model\ChangeOwnerRequestDto**](../Model/ChangeOwnerRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseArrayWrapper**](../Model/FileEntryBaseArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_owner_request_dto = new \OpenAPI\Client\Model\ChangeOwnerRequestDto(); // \OpenAPI\Client\Model\ChangeOwnerRequestDto

try {
    $result = $apiInstance->changeFileOwner($change_owner_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->changeFileOwner: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalShareData()`

```php
getExternalShareData($key, $file_id, $folder_id): \OpenAPI\Client\Model\ExternalShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-external-share-data/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The unique key of the external shared data. | |
| **file_id** | **string**| The unique document identifier. | [optional] |
| **folder_id** | **string**| The unique folder identifier. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExternalShareWrapper**](../Model/ExternalShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = some text; // string | The unique key of the external shared data.
$file_id = 9846; // string | The unique document identifier.
$folder_id = 9846; // string | The unique folder identifier.

try {
    $result = $apiInstance->getExternalShareData($key, $file_id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getExternalShareData: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileSecurityInfo()`

```php
getFileSecurityInfo($id, $count, $start_index): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The file unique identifier. | |
| **count** | **int**| The number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file unique identifier.
$count = 1234; // int | The number of items to retrieve in the request.
$start_index = 1234; // int | The starting index for the query results.

try {
    $result = $apiInstance->getFileSecurityInfo($id, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getFileSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderSecurityInfo()`

```php
getFolderSecurityInfo($id, $count, $start_index): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The folder unique identifier. | |
| **count** | **int**| The number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The folder unique identifier.
$count = 1234; // int | The number of items to retrieve in the request.
$start_index = 1234; // int | The starting index for the query results.

try {
    $result = $apiInstance->getFolderSecurityInfo($id, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getFolderSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembersWithFileSecurity()`

```php
getGroupsMembersWithFileSecurity($file_id, $group_id, $count, $start_index, $filter_value): \OpenAPI\Client\Model\GroupMemberSecurityRequestArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups-members-with-file-security/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **group_id** | **string**| The group ID. | |
| **count** | **int**| The number of items to be retrieved in the current query. | [optional] |
| **start_index** | **int**| The starting index for the query result set. | [optional] |
| **filter_value** | **string**| The filter value used for searching or querying group members based on text input. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupMemberSecurityRequestArrayWrapper**](../Model/GroupMemberSecurityRequestArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The group ID.
$count = 1234; // int | The number of items to be retrieved in the current query.
$start_index = 1234; // int | The starting index for the query result set.
$filter_value = some text; // string | The filter value used for searching or querying group members based on text input.

try {
    $result = $apiInstance->getGroupsMembersWithFileSecurity($file_id, $group_id, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getGroupsMembersWithFileSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembersWithFolderSecurity()`

```php
getGroupsMembersWithFolderSecurity($folder_id, $group_id, $count, $start_index, $filter_value): \OpenAPI\Client\Model\GroupMemberSecurityRequestArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups-members-with-folder-security/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID. | |
| **group_id** | **string**| The group ID. | |
| **count** | **int**| The number of items to be retrieved in the current query. | [optional] |
| **start_index** | **int**| The starting index for the query result set. | [optional] |
| **filter_value** | **string**| The filter value used for searching or querying group members based on text input. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupMemberSecurityRequestArrayWrapper**](../Model/GroupMemberSecurityRequestArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID.
$group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The group ID.
$count = 1234; // int | The number of items to be retrieved in the current query.
$start_index = 1234; // int | The starting index for the query result set.
$filter_value = some text; // string | The filter value used for searching or querying group members based on text input.

try {
    $result = $apiInstance->getGroupsMembersWithFolderSecurity($folder_id, $group_id, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getGroupsMembersWithFolderSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityInfo()`

```php
getSecurityInfo($base_batch_request_dto): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_batch_request_dto** | [**\OpenAPI\Client\Model\BaseBatchRequestDto**](../Model/BaseBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->getSecurityInfo($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedUsers()`

```php
getSharedUsers($file_id): \OpenAPI\Client\Model\MentionWrapperArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-shared-users/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\MentionWrapperArrayWrapper**](../Model/MentionWrapperArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getSharedUsers($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->getSharedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSecurityInfo()`

```php
removeSecurityInfo($base_batch_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/remove-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_batch_request_dto** | [**\OpenAPI\Client\Model\BaseBatchRequestDto**](../Model/BaseBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->removeSecurityInfo($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->removeSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEditorNotify()`

```php
sendEditorNotify($file_id, $mention_message_wrapper): \OpenAPI\Client\Model\AceShortWrapperArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/send-editor-notify/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID with the mention message. | |
| **mention_message_wrapper** | [**\OpenAPI\Client\Model\MentionMessageWrapper**](../Model/MentionMessageWrapper.md)| The mention message. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AceShortWrapperArrayWrapper**](../Model/AceShortWrapperArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID with the mention message.
$mention_message_wrapper = new \OpenAPI\Client\Model\MentionMessageWrapper(); // \OpenAPI\Client\Model\MentionMessageWrapper | The mention message.

try {
    $result = $apiInstance->sendEditorNotify($file_id, $mention_message_wrapper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sendEditorNotify: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFileSecurityInfo()`

```php
setFileSecurityInfo($file_id, $security_info_simple_request_dto): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-file-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **security_info_simple_request_dto** | [**\OpenAPI\Client\Model\SecurityInfoSimpleRequestDto**](../Model/SecurityInfoSimpleRequestDto.md)| The parameters of the security information simple request. | |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$security_info_simple_request_dto = new \OpenAPI\Client\Model\SecurityInfoSimpleRequestDto(); // \OpenAPI\Client\Model\SecurityInfoSimpleRequestDto | The parameters of the security information simple request.

try {
    $result = $apiInstance->setFileSecurityInfo($file_id, $security_info_simple_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->setFileSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFolderSecurityInfo()`

```php
setFolderSecurityInfo($folder_id, $security_info_simple_request_dto): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-folder-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID. | |
| **security_info_simple_request_dto** | [**\OpenAPI\Client\Model\SecurityInfoSimpleRequestDto**](../Model/SecurityInfoSimpleRequestDto.md)| The parameters of the security information simple request. | |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID.
$security_info_simple_request_dto = new \OpenAPI\Client\Model\SecurityInfoSimpleRequestDto(); // \OpenAPI\Client\Model\SecurityInfoSimpleRequestDto | The parameters of the security information simple request.

try {
    $result = $apiInstance->setFolderSecurityInfo($folder_id, $security_info_simple_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->setFolderSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setSecurityInfo()`

```php
setSecurityInfo($security_info_request_dto): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **security_info_request_dto** | [**\OpenAPI\Client\Model\SecurityInfoRequestDto**](../Model/SecurityInfoRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$security_info_request_dto = new \OpenAPI\Client\Model\SecurityInfoRequestDto(); // \OpenAPI\Client\Model\SecurityInfoRequestDto

try {
    $result = $apiInstance->setSecurityInfo($security_info_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->setSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
