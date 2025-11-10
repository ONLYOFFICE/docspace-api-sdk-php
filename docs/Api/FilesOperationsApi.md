# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.OperationsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFavorites()**](FilesOperationsApi.md#addFavorites) | **POST** /api/2.0/files/favorites |  |
| [**bulkDownload()**](FilesOperationsApi.md#bulkDownload) | **PUT** /api/2.0/files/fileops/bulkdownload |  |
| [**checkConversionStatus()**](FilesOperationsApi.md#checkConversionStatus) | **GET** /api/2.0/files/file/{fileId}/checkconversion |  |
| [**checkMoveOrCopyBatchItems()**](FilesOperationsApi.md#checkMoveOrCopyBatchItems) | **GET** /api/2.0/files/fileops/move |  |
| [**checkMoveOrCopyDestFolder()**](FilesOperationsApi.md#checkMoveOrCopyDestFolder) | **GET** /api/2.0/files/fileops/checkdestfolder |  |
| [**copyBatchItems()**](FilesOperationsApi.md#copyBatchItems) | **PUT** /api/2.0/files/fileops/copy |  |
| [**createUploadSession()**](FilesOperationsApi.md#createUploadSession) | **POST** /api/2.0/files/{folderId}/upload/create_session |  |
| [**deleteBatchItems()**](FilesOperationsApi.md#deleteBatchItems) | **PUT** /api/2.0/files/fileops/delete |  |
| [**deleteFavoritesFromBody()**](FilesOperationsApi.md#deleteFavoritesFromBody) | **DELETE** /api/2.0/files/favorites |  |
| [**deleteFileVersions()**](FilesOperationsApi.md#deleteFileVersions) | **PUT** /api/2.0/files/fileops/deleteversion |  |
| [**duplicateBatchItems()**](FilesOperationsApi.md#duplicateBatchItems) | **PUT** /api/2.0/files/fileops/duplicate |  |
| [**emptyTrash()**](FilesOperationsApi.md#emptyTrash) | **PUT** /api/2.0/files/fileops/emptytrash |  |
| [**getOperationStatuses()**](FilesOperationsApi.md#getOperationStatuses) | **GET** /api/2.0/files/fileops |  |
| [**getOperationStatusesByType()**](FilesOperationsApi.md#getOperationStatusesByType) | **GET** /api/2.0/files/fileops/{operationType} |  |
| [**markAsRead()**](FilesOperationsApi.md#markAsRead) | **PUT** /api/2.0/files/fileops/markasread |  |
| [**moveBatchItems()**](FilesOperationsApi.md#moveBatchItems) | **PUT** /api/2.0/files/fileops/move |  |
| [**startFileConversion()**](FilesOperationsApi.md#startFileConversion) | **PUT** /api/2.0/files/file/{fileId}/checkconversion |  |
| [**terminateTasks()**](FilesOperationsApi.md#terminateTasks) | **PUT** /api/2.0/files/fileops/terminate/{id} |  |
| [**updateFileComment()**](FilesOperationsApi.md#updateFileComment) | **PUT** /api/2.0/files/file/{fileId}/comment |  |


## `addFavorites()`

```php
addFavorites($base_batch_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-favorites/).

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



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->addFavorites($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->addFavorites: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDownload()`

```php
bulkDownload($download_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/bulk-download/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **download_request_dto** | [**\OpenAPI\Client\Model\DownloadRequestDto**](../Model/DownloadRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$download_request_dto = new \OpenAPI\Client\Model\DownloadRequestDto(); // \OpenAPI\Client\Model\DownloadRequestDto

try {
    $result = $apiInstance->bulkDownload($download_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->bulkDownload: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkConversionStatus()`

```php
checkConversionStatus($file_id, $start): \OpenAPI\Client\Model\ConversationResultArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-conversion-status/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to check conversion status. | |
| **start** | **bool**| Specifies whether a conversion operation is started or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConversationResultArrayWrapper**](../Model/ConversationResultArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to check conversion status.
$start = true; // bool | Specifies whether a conversion operation is started or not.

try {
    $result = $apiInstance->checkConversionStatus($file_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->checkConversionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkMoveOrCopyBatchItems()`

```php
checkMoveOrCopyBatchItems($in_dto): \OpenAPI\Client\Model\FileEntryBaseArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-move-or-copy-batch-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **in_dto** | [**\OpenAPI\Client\Model\BatchRequestDto**](../Model/.md)| The request parameters for copying/moving files. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseArrayWrapper**](../Model/FileEntryBaseArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_dto = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BatchRequestDto(); // \OpenAPI\Client\Model\BatchRequestDto | The request parameters for copying/moving files.

try {
    $result = $apiInstance->checkMoveOrCopyBatchItems($in_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->checkMoveOrCopyBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkMoveOrCopyDestFolder()`

```php
checkMoveOrCopyDestFolder($in_dto): \OpenAPI\Client\Model\CheckDestFolderWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-move-or-copy-dest-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **in_dto** | [**\OpenAPI\Client\Model\BatchRequestDto**](../Model/.md)| The request parameters for copying/moving files. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckDestFolderWrapper**](../Model/CheckDestFolderWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_dto = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BatchRequestDto(); // \OpenAPI\Client\Model\BatchRequestDto | The request parameters for copying/moving files.

try {
    $result = $apiInstance->checkMoveOrCopyDestFolder($in_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->checkMoveOrCopyDestFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyBatchItems()`

```php
copyBatchItems($batch_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/copy-batch-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_request_dto** | [**\OpenAPI\Client\Model\BatchRequestDto**](../Model/BatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_request_dto = new \OpenAPI\Client\Model\BatchRequestDto(); // \OpenAPI\Client\Model\BatchRequestDto

try {
    $result = $apiInstance->copyBatchItems($batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->copyBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUploadSession()`

```php
createUploadSession($folder_id, $session_request): \OpenAPI\Client\Model\ObjectWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-upload-session/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The session folder ID. | |
| **session_request** | [**\OpenAPI\Client\Model\SessionRequest**](../Model/SessionRequest.md)| The session parameters. | |

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The session folder ID.
$session_request = new \OpenAPI\Client\Model\SessionRequest(); // \OpenAPI\Client\Model\SessionRequest | The session parameters.

try {
    $result = $apiInstance->createUploadSession($folder_id, $session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->createUploadSession: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBatchItems()`

```php
deleteBatchItems($delete_batch_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-batch-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_batch_request_dto** | [**\OpenAPI\Client\Model\DeleteBatchRequestDto**](../Model/DeleteBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_batch_request_dto = new \OpenAPI\Client\Model\DeleteBatchRequestDto(); // \OpenAPI\Client\Model\DeleteBatchRequestDto

try {
    $result = $apiInstance->deleteBatchItems($delete_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFavoritesFromBody()`

```php
deleteFavoritesFromBody($base_batch_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-favorites-from-body/).

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



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->deleteFavoritesFromBody($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteFavoritesFromBody: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileVersions()`

```php
deleteFileVersions($delete_version_batch_request_dto): \OpenAPI\Client\Model\FileOperationWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-file-versions/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_version_batch_request_dto** | [**\OpenAPI\Client\Model\DeleteVersionBatchRequestDto**](../Model/DeleteVersionBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationWrapper**](../Model/FileOperationWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_version_batch_request_dto = new \OpenAPI\Client\Model\DeleteVersionBatchRequestDto(); // \OpenAPI\Client\Model\DeleteVersionBatchRequestDto

try {
    $result = $apiInstance->deleteFileVersions($delete_version_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteFileVersions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateBatchItems()`

```php
duplicateBatchItems($duplicate_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/duplicate-batch-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **duplicate_request_dto** | [**\OpenAPI\Client\Model\DuplicateRequestDto**](../Model/DuplicateRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$duplicate_request_dto = new \OpenAPI\Client\Model\DuplicateRequestDto(); // \OpenAPI\Client\Model\DuplicateRequestDto

try {
    $result = $apiInstance->duplicateBatchItems($duplicate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->duplicateBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emptyTrash()`

```php
emptyTrash($single): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/empty-trash/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **single** | **bool**| Specifies whether to return only the current operation | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$single = true; // bool | Specifies whether to return only the current operation

try {
    $result = $apiInstance->emptyTrash($single);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->emptyTrash: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOperationStatuses()`

```php
getOperationStatuses($id): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-operation-statuses/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the file operation. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // string | The ID of the file operation.

try {
    $result = $apiInstance->getOperationStatuses($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getOperationStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOperationStatusesByType()`

```php
getOperationStatusesByType($operation_type, $id): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-operation-statuses-by-type/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_type** | [**\OpenAPI\Client\Model\FileOperationType**](../Model/.md)| Specifies the type of file operation to be retrieved. | |
| **id** | **string**| The ID of the file operation. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$operation_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FileOperationType(); // \OpenAPI\Client\Model\FileOperationType | Specifies the type of file operation to be retrieved.
$id = 9846; // string | The ID of the file operation.

try {
    $result = $apiInstance->getOperationStatusesByType($operation_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getOperationStatusesByType: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markAsRead()`

```php
markAsRead($base_batch_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/mark-as-read/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_batch_request_dto** | [**\OpenAPI\Client\Model\BaseBatchRequestDto**](../Model/BaseBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->markAsRead($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->markAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveBatchItems()`

```php
moveBatchItems($batch_request_dto): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/move-batch-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_request_dto** | [**\OpenAPI\Client\Model\BatchRequestDto**](../Model/BatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_request_dto = new \OpenAPI\Client\Model\BatchRequestDto(); // \OpenAPI\Client\Model\BatchRequestDto

try {
    $result = $apiInstance->moveBatchItems($batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->moveBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startFileConversion()`

```php
startFileConversion($file_id, $check_conversion_request_dto_integer): \OpenAPI\Client\Model\ConversationResultArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-file-conversion/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to start conversion proccess. | |
| **check_conversion_request_dto_integer** | [**\OpenAPI\Client\Model\CheckConversionRequestDtoInteger**](../Model/CheckConversionRequestDtoInteger.md)| The parameters for checking file conversion. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConversationResultArrayWrapper**](../Model/ConversationResultArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to start conversion proccess.
$check_conversion_request_dto_integer = new \OpenAPI\Client\Model\CheckConversionRequestDtoInteger(); // \OpenAPI\Client\Model\CheckConversionRequestDtoInteger | The parameters for checking file conversion.

try {
    $result = $apiInstance->startFileConversion($file_id, $check_conversion_request_dto_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->startFileConversion: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateTasks()`

```php
terminateTasks($id): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/terminate-tasks/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The operation unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // string | The operation unique identifier.

try {
    $result = $apiInstance->terminateTasks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->terminateTasks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileComment()`

```php
updateFileComment($file_id, $update_comment): \OpenAPI\Client\Model\StringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-file-comment/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID where the comment is located. | |
| **update_comment** | [**\OpenAPI\Client\Model\UpdateComment**](../Model/UpdateComment.md)| The parameters for updating a comment. | |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID where the comment is located.
$update_comment = new \OpenAPI\Client\Model\UpdateComment(); // \OpenAPI\Client\Model\UpdateComment | The parameters for updating a comment.

try {
    $result = $apiInstance->updateFileComment($file_id, $update_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->updateFileComment: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
