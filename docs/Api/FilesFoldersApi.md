# OnlyOffice/DocSpaceApiSdk.OpenAPI\Client\Api.FoldersApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkUpload()**](FilesFoldersApi.md#checkUpload) | **POST** /api/2.0/files/{folderId}/upload/check | Check file uploads |
| [**createFolder()**](FilesFoldersApi.md#createFolder) | **POST** /api/2.0/files/folder/{folderId} | Create a folder |
| [**createFolderPrimaryExternalLink()**](FilesFoldersApi.md#createFolderPrimaryExternalLink) | **POST** /api/2.0/files/folder/{id}/link | Create primary external link |
| [**createReportFolderHistory()**](FilesFoldersApi.md#createReportFolderHistory) | **POST** /api/2.0/files/folder/{folderId}/log/report | Generates folder history |
| [**deleteFolder()**](FilesFoldersApi.md#deleteFolder) | **DELETE** /api/2.0/files/folder/{folderId} | Delete a folder |
| [**getFavoritesFolder()**](FilesFoldersApi.md#getFavoritesFolder) | **GET** /api/2.0/files/@favorites | Get the Favorites section |
| [**getFilesUsedSpace()**](FilesFoldersApi.md#getFilesUsedSpace) | **GET** /api/2.0/files/filesusedspace | Get used space of files |
| [**getFolder()**](FilesFoldersApi.md#getFolder) | **GET** /api/2.0/files/{folderId}/formfilter | Get folder form filter |
| [**getFolderByFolderId()**](FilesFoldersApi.md#getFolderByFolderId) | **GET** /api/2.0/files/{folderId} | Get a folder by ID |
| [**getFolderHistory()**](FilesFoldersApi.md#getFolderHistory) | **GET** /api/2.0/files/folder/{folderId}/log | Get folder history |
| [**getFolderInfo()**](FilesFoldersApi.md#getFolderInfo) | **GET** /api/2.0/files/folder/{folderId} | Get folder information |
| [**getFolderLinks()**](FilesFoldersApi.md#getFolderLinks) | **GET** /api/2.0/files/folder/{id}/links | Get the folder links |
| [**getFolderPath()**](FilesFoldersApi.md#getFolderPath) | **GET** /api/2.0/files/folder/{folderId}/path | Get the folder path |
| [**getFolderPrimaryExternalLink()**](FilesFoldersApi.md#getFolderPrimaryExternalLink) | **GET** /api/2.0/files/folder/{id}/link | Get primary external link |
| [**getFolderRecent()**](FilesFoldersApi.md#getFolderRecent) | **GET** /api/2.0/files/recent | Get the Recent section |
| [**getFolders()**](FilesFoldersApi.md#getFolders) | **GET** /api/2.0/files/{folderId}/subfolders | Get subfolders |
| [**getMyFolder()**](FilesFoldersApi.md#getMyFolder) | **GET** /api/2.0/files/@my | Get the My documents section |
| [**getNewFolderItems()**](FilesFoldersApi.md#getNewFolderItems) | **GET** /api/2.0/files/{folderId}/news | Get new folder items |
| [**getPrivacyFolder()**](FilesFoldersApi.md#getPrivacyFolder) | **GET** /api/2.0/files/@privacy | Get the Private Room section |
| [**getRecentFolder()**](FilesFoldersApi.md#getRecentFolder) | **GET** /api/2.0/files/@recent | Get the Recent section |
| [**getRootFolders()**](FilesFoldersApi.md#getRootFolders) | **GET** /api/2.0/files/@root | Get filtered sections |
| [**getTrashFolder()**](FilesFoldersApi.md#getTrashFolder) | **GET** /api/2.0/files/@trash | Get the Trash section |
| [**insertFile()**](FilesFoldersApi.md#insertFile) | **POST** /api/2.0/files/{folderId}/insert | Insert a file |
| [**insertFileToMyFromBody()**](FilesFoldersApi.md#insertFileToMyFromBody) | **POST** /api/2.0/files/@my/insert | Insert a file to the My documents section |
| [**renameFolder()**](FilesFoldersApi.md#renameFolder) | **PUT** /api/2.0/files/folder/{folderId} | Rename a folder |
| [**setFolderOrder()**](FilesFoldersApi.md#setFolderOrder) | **PUT** /api/2.0/files/folder/{folderId}/order | Set folder order |
| [**setFolderPrimaryExternalLink()**](FilesFoldersApi.md#setFolderPrimaryExternalLink) | **PUT** /api/2.0/files/folder/{id}/links | Set the folder external link |
| [**uploadFile()**](FilesFoldersApi.md#uploadFile) | **POST** /api/2.0/files/{folderId}/upload | Upload a file |
| [**uploadFileToMy()**](FilesFoldersApi.md#uploadFileToMy) | **POST** /api/2.0/files/@my/upload | Upload a file to the My documents section |


## `checkUpload()`

```php
checkUpload($folder_id, $check_upload_request): \OpenAPI\Client\Model\STRINGArrayWrapper
```

Check file uploads
Checks the file uploads to the folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-upload/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID. | |
| **check_upload_request** | [**\OpenAPI\Client\Model\CheckUploadRequest**](../Model/CheckUploadRequest.md)| The request parameters for checking file uploads. | |

### Return type

[**\OpenAPI\Client\Model\STRINGArrayWrapper**](../Model/STRINGArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID.
$check_upload_request = new \OpenAPI\Client\Model\CheckUploadRequest(); // \OpenAPI\Client\Model\CheckUploadRequest | The request parameters for checking file uploads.

try {
    $result = $apiInstance->checkUpload($folder_id, $check_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->checkUpload: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolder()`

```php
createFolder($folder_id, $create_folder): \OpenAPI\Client\Model\FolderIntegerWrapper
```

Create a folder
Creates a new folder with the title specified in the request. The parent folder ID can be also specified.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID for the folder creation. | |
| **create_folder** | [**\OpenAPI\Client\Model\CreateFolder**](../Model/CreateFolder.md)| The parameters for creating a folder. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID for the folder creation.
$create_folder = new \OpenAPI\Client\Model\CreateFolder(); // \OpenAPI\Client\Model\CreateFolder | The parameters for creating a folder.

try {
    $result = $apiInstance->createFolder($folder_id, $create_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolderPrimaryExternalLink()`

```php
createFolderPrimaryExternalLink($id, $folder_link_request): \OpenAPI\Client\Model\FileShareWrapper
```

Create primary external link
Creates a primary external link by the identifier specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-folder-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The folder ID. | |
| **folder_link_request** | [**\OpenAPI\Client\Model\FolderLinkRequest**](../Model/FolderLinkRequest.md)| The folder link parameters. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The folder ID.
$folder_link_request = new \OpenAPI\Client\Model\FolderLinkRequest(); // \OpenAPI\Client\Model\FolderLinkRequest | The folder link parameters.

try {
    $result = $apiInstance->createFolderPrimaryExternalLink($id, $folder_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolderPrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReportFolderHistory()`

```php
createReportFolderHistory($folder_id): \OpenAPI\Client\Model\StringWrapper
```

Generates folder history
Generates the activity history of a folder.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-report-folder-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**|  | |

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int

try {
    $result = $apiInstance->createReportFolderHistory($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createReportFolderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`

```php
deleteFolder($folder_id, $delete_folder): \OpenAPI\Client\Model\FileOperationArrayWrapper
```

Delete a folder
Deletes a folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID to delete. | |
| **delete_folder** | [**\OpenAPI\Client\Model\DeleteFolder**](../Model/DeleteFolder.md)| The parameters for deleting a folder. | |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID to delete.
$delete_folder = new \OpenAPI\Client\Model\DeleteFolder(); // \OpenAPI\Client\Model\DeleteFolder | The parameters for deleting a folder.

try {
    $result = $apiInstance->deleteFolder($folder_id, $delete_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesFolder()`

```php
getFavoritesFolder($user_id_or_group_id, $filter_type, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the Favorites section
Returns the detailed list of files and folders located in the Favorites section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-favorites-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first item to retrieve in a paginated list. | [optional] |
| **sort_by** | **string**| Specifies the field by which the folder content should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used as a filter or search criterion for folder content queries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$count = 1234; // int | The maximum number of items to retrieve in the request.
$start_index = 1234; // int | The zero-based index of the first item to retrieve in a paginated list.
$sort_by = some text; // string | Specifies the field by which the folder content should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used as a filter or search criterion for folder content queries.

try {
    $result = $apiInstance->getFavoritesFolder($user_id_or_group_id, $filter_type, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFavoritesFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesUsedSpace()`

```php
getFilesUsedSpace(): \OpenAPI\Client\Model\FilesStatisticsResultWrapper
```

Get used space of files
Returns the used space of files in the root folders.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-files-used-space/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FilesStatisticsResultWrapper**](../Model/FilesStatisticsResultWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFilesUsedSpace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFilesUsedSpace: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolder()`

```php
getFolder($folder_id): \OpenAPI\Client\Model\FormsItemArrayWrapper
```

Get folder form filter
Returns the form filter of a folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FormsItemArrayWrapper**](../Model/FormsItemArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder unique identifier.

try {
    $result = $apiInstance->getFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderByFolderId()`

```php
getFolderByFolderId($folder_id, $user_id_or_group_id, $shared_by, $filter_type, $room_id, $exclude_subject, $apply_filter_option, $extension, $search_area, $forms_item_key, $forms_item_type, $count, $start_index, $sort_by, $sort_order, $filter_value, $location): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get a folder by ID
Returns the detailed list of files and folders located in the folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-by-folder-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID. | |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **shared_by** | **string**| The identifier of the user who shared the folder or file. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **room_id** | **int**| The room ID. | [optional] |
| **exclude_subject** | **bool**| Specifies whether to exclude search by user or group ID. | [optional] |
| **apply_filter_option** | [**\OpenAPI\Client\Model\ApplyFilterOption**](../Model/.md)| Specifies whether to return only files, only folders, or all elements from the specified folder. | [optional] |
| **extension** | **string**| Specifies whether to search for the specific file extension. | [optional] |
| **search_area** | [**\OpenAPI\Client\Model\SearchArea**](../Model/.md)| The search area. | [optional] |
| **forms_item_key** | **string**| The forms item key. | [optional] |
| **forms_item_type** | **string**| The forms item type. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first item to retrieve in a paginated request. | [optional] |
| **sort_by** | **string**| The property used for sorting the folder request results. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text value used as a filter parameter for folder content queries. | [optional] |
| **location** | [**\OpenAPI\Client\Model\Location**](../Model/.md)| The location context of the request, specifying the area  where the operation is performed, such as a room, documents, or a link. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID.
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$shared_by = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The identifier of the user who shared the folder or file.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$room_id = 9846; // int | The room ID.
$exclude_subject = true; // bool | Specifies whether to exclude search by user or group ID.
$apply_filter_option = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApplyFilterOption(); // \OpenAPI\Client\Model\ApplyFilterOption | Specifies whether to return only files, only folders, or all elements from the specified folder.
$extension = .txt; // string | Specifies whether to search for the specific file extension.
$search_area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SearchArea(); // \OpenAPI\Client\Model\SearchArea | The search area.
$forms_item_key = some text; // string | The forms item key.
$forms_item_type = some text; // string | The forms item type.
$count = 1234; // int | The maximum number of items to retrieve in the request.
$start_index = 1234; // int | The zero-based index of the first item to retrieve in a paginated request.
$sort_by = some text; // string | The property used for sorting the folder request results.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text value used as a filter parameter for folder content queries.
$location = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Location(); // \OpenAPI\Client\Model\Location | The location context of the request, specifying the area  where the operation is performed, such as a room, documents, or a link.

try {
    $result = $apiInstance->getFolderByFolderId($folder_id, $user_id_or_group_id, $shared_by, $filter_type, $room_id, $exclude_subject, $apply_filter_option, $extension, $search_area, $forms_item_key, $forms_item_type, $count, $start_index, $sort_by, $sort_order, $filter_value, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderByFolderId: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderHistory()`

```php
getFolderHistory($folder_id, $from_date, $to_date, $count, $start_index): \OpenAPI\Client\Model\HistoryArrayWrapper
```

Get folder history
Returns the activity history of a folder with a specified identifier.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID of the history request. | |
| **from_date** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The start date of the history request. | [optional] |
| **to_date** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The end date of the history request. | [optional] |
| **count** | **int**| The number of records to retrieve for the folder history. | [optional] |
| **start_index** | **int**| The starting index from which the history records are retrieved in the request. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HistoryArrayWrapper**](../Model/HistoryArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID of the history request.
$from_date = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The start date of the history request.
$to_date = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The end date of the history request.
$count = 1234; // int | The number of records to retrieve for the folder history.
$start_index = 1234; // int | The starting index from which the history records are retrieved in the request.

try {
    $result = $apiInstance->getFolderHistory($folder_id, $from_date, $to_date, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderInfo()`

```php
getFolderInfo($folder_id): \OpenAPI\Client\Model\FolderIntegerWrapper
```

Get folder information
Returns the detailed information about a folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder unique identifier.

try {
    $result = $apiInstance->getFolderInfo($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderLinks()`

```php
getFolderLinks($id): \OpenAPI\Client\Model\FileShareArrayWrapper
```

Get the folder links
Returns the links of the folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-links/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The folder ID. | |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The folder ID.

try {
    $result = $apiInstance->getFolderLinks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderLinks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderPath()`

```php
getFolderPath($folder_id): \OpenAPI\Client\Model\FileEntryBaseArrayWrapper
```

Get the folder path
Returns a path to the folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-path/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseArrayWrapper**](../Model/FileEntryBaseArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder unique identifier.

try {
    $result = $apiInstance->getFolderPath($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderPath: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderPrimaryExternalLink()`

```php
getFolderPrimaryExternalLink($id, $count, $start_index): \OpenAPI\Client\Model\FileShareWrapper
```

Get primary external link
Returns the primary external link by the identifier specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The folder unique identifier. | |
| **count** | **int**| The number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The starting index for the query results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The folder unique identifier.
$count = 1234; // int | The number of items to retrieve in the request.
$start_index = 1234; // int | The starting index for the query results.

try {
    $result = $apiInstance->getFolderPrimaryExternalLink($id, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderPrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderRecent()`

```php
getFolderRecent($user_id_or_group_id, $filter_type, $exclude_subject, $apply_filter_option, $search_area, $extension, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the Recent section
Returns the detailed list of files located in the Recent section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folder-recent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **exclude_subject** | **bool**| Specifies whether to exclude search by user or group ID. | [optional] |
| **apply_filter_option** | [**\OpenAPI\Client\Model\ApplyFilterOption**](../Model/.md)| Specifies whether to return only files, only folders or all elements. | [optional] |
| **search_area** | [**\OpenAPI\Client\Model\SearchArea**](../Model/.md)| The search area. | [optional] |
| **extension** | [**string[]**](../Model/string.md)| Specifies whether to search for a specific file extension in the Recent folder. | [optional] |
| **count** | **int**| The maximum number of items to return. | [optional] |
| **start_index** | **int**| The starting position of the results to be returned in the query response. | [optional] |
| **sort_by** | **string**| Specifies the sorting criteria for the folder request. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used for filtering or searching folder contents. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$exclude_subject = true; // bool | Specifies whether to exclude search by user or group ID.
$apply_filter_option = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApplyFilterOption(); // \OpenAPI\Client\Model\ApplyFilterOption | Specifies whether to return only files, only folders or all elements.
$search_area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SearchArea(); // \OpenAPI\Client\Model\SearchArea | The search area.
$extension = .txt; // string[] | Specifies whether to search for a specific file extension in the Recent folder.
$count = 1234; // int | The maximum number of items to return.
$start_index = 1234; // int | The starting position of the results to be returned in the query response.
$sort_by = some text; // string | Specifies the sorting criteria for the folder request.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used for filtering or searching folder contents.

try {
    $result = $apiInstance->getFolderRecent($user_id_or_group_id, $filter_type, $exclude_subject, $apply_filter_option, $search_area, $extension, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderRecent: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolders()`

```php
getFolders($folder_id): \OpenAPI\Client\Model\FileEntryBaseArrayWrapper
```

Get subfolders
Returns a list of all the subfolders from a folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-folders/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseArrayWrapper**](../Model/FileEntryBaseArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder unique identifier.

try {
    $result = $apiInstance->getFolders($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyFolder()`

```php
getMyFolder($user_id_or_group_id, $filter_type, $apply_filter_option, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the My documents section
Returns the detailed list of files and folders located in the My documents section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-my-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **apply_filter_option** | [**\OpenAPI\Client\Model\ApplyFilterOption**](../Model/.md)| Specifies whether to return only files, only folders or all elements. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the response. | [optional] |
| **start_index** | **int**| The starting position of the items to be retrieved. | [optional] |
| **sort_by** | **string**| The property used to specify the sorting criteria for folder contents. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used for filtering or searching folder contents. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$apply_filter_option = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApplyFilterOption(); // \OpenAPI\Client\Model\ApplyFilterOption | Specifies whether to return only files, only folders or all elements.
$count = 1234; // int | The maximum number of items to retrieve in the response.
$start_index = 1234; // int | The starting position of the items to be retrieved.
$sort_by = some text; // string | The property used to specify the sorting criteria for folder contents.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used for filtering or searching folder contents.

try {
    $result = $apiInstance->getMyFolder($user_id_or_group_id, $filter_type, $apply_filter_option, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getMyFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewFolderItems()`

```php
getNewFolderItems($folder_id): \OpenAPI\Client\Model\FileEntryBaseArrayWrapper
```

Get new folder items
Returns a list of all the new items from a folder with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-new-folder-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseArrayWrapper**](../Model/FileEntryBaseArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder unique identifier.

try {
    $result = $apiInstance->getNewFolderItems($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getNewFolderItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrivacyFolder()`

```php
getPrivacyFolder($user_id_or_group_id, $filter_type, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the Private Room section
Returns the detailed list of files and folders located in the Private Room section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-privacy-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the request. | [optional] |
| **start_index** | **int**| The zero-based index of the first item to retrieve in a paginated list. | [optional] |
| **sort_by** | **string**| Specifies the field by which the folder content should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used as a filter or search criterion for folder content queries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$count = 1234; // int | The maximum number of items to retrieve in the request.
$start_index = 1234; // int | The zero-based index of the first item to retrieve in a paginated list.
$sort_by = some text; // string | Specifies the field by which the folder content should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used as a filter or search criterion for folder content queries.

try {
    $result = $apiInstance->getPrivacyFolder($user_id_or_group_id, $filter_type, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getPrivacyFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecentFolder()`

```php
getRecentFolder($user_id_or_group_id, $filter_type, $exclude_subject, $apply_filter_option, $search_area, $extension, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the Recent section
Returns the detailed list of files located in the Recent section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-recent-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **exclude_subject** | **bool**| Specifies whether to exclude search by user or group ID. | [optional] |
| **apply_filter_option** | [**\OpenAPI\Client\Model\ApplyFilterOption**](../Model/.md)| Specifies whether to return only files, only folders or all elements. | [optional] |
| **search_area** | [**\OpenAPI\Client\Model\SearchArea**](../Model/.md)| The search area. | [optional] |
| **extension** | [**string[]**](../Model/string.md)| Specifies whether to search for a specific file extension in the Recent folder. | [optional] |
| **count** | **int**| The maximum number of items to return. | [optional] |
| **start_index** | **int**| The starting position of the results to be returned in the query response. | [optional] |
| **sort_by** | **string**| Specifies the sorting criteria for the folder request. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used for filtering or searching folder contents. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$exclude_subject = true; // bool | Specifies whether to exclude search by user or group ID.
$apply_filter_option = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApplyFilterOption(); // \OpenAPI\Client\Model\ApplyFilterOption | Specifies whether to return only files, only folders or all elements.
$search_area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SearchArea(); // \OpenAPI\Client\Model\SearchArea | The search area.
$extension = .txt; // string[] | Specifies whether to search for a specific file extension in the Recent folder.
$count = 1234; // int | The maximum number of items to return.
$start_index = 1234; // int | The starting position of the results to be returned in the query response.
$sort_by = some text; // string | Specifies the sorting criteria for the folder request.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used for filtering or searching folder contents.

try {
    $result = $apiInstance->getRecentFolder($user_id_or_group_id, $filter_type, $exclude_subject, $apply_filter_option, $search_area, $extension, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getRecentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRootFolders()`

```php
getRootFolders($user_id_or_group_id, $filter_type, $without_trash, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerArrayWrapper
```

Get filtered sections
Returns all the sections matching the parameters specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-root-folders/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **without_trash** | **bool**| Specifies whether to return the Trash section or not. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the response. | [optional] |
| **start_index** | **int**| The starting position of the items to be retrieved. | [optional] |
| **sort_by** | **string**| Specifies the field by which the folder content should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used as a filter for searching or retrieving folder contents. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerArrayWrapper**](../Model/FolderContentIntegerArrayWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$without_trash = true; // bool | Specifies whether to return the Trash section or not.
$count = 1234; // int | The maximum number of items to retrieve in the response.
$start_index = 1234; // int | The starting position of the items to be retrieved.
$sort_by = some text; // string | Specifies the field by which the folder content should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used as a filter for searching or retrieving folder contents.

try {
    $result = $apiInstance->getRootFolders($user_id_or_group_id, $filter_type, $without_trash, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getRootFolders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrashFolder()`

```php
getTrashFolder($user_id_or_group_id, $filter_type, $apply_filter_option, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```

Get the Trash section
Returns the detailed list of files and folders located in the Trash section.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-trash-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id_or_group_id** | **string**| The user or group ID. | [optional] |
| **filter_type** | [**\OpenAPI\Client\Model\FilterType**](../Model/.md)| The filter type. | [optional] |
| **apply_filter_option** | [**\OpenAPI\Client\Model\ApplyFilterOption**](../Model/.md)| Specifies whether to return only files, only folders or all elements. | [optional] |
| **count** | **int**| The maximum number of items to retrieve in the response. | [optional] |
| **start_index** | **int**| The starting position of the items to be retrieved. | [optional] |
| **sort_by** | **string**| The property used to specify the sorting criteria for folder contents. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text used for filtering or searching folder contents. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_or_group_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The user or group ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FilterType(); // \OpenAPI\Client\Model\FilterType | The filter type.
$apply_filter_option = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApplyFilterOption(); // \OpenAPI\Client\Model\ApplyFilterOption | Specifies whether to return only files, only folders or all elements.
$count = 1234; // int | The maximum number of items to retrieve in the response.
$start_index = 1234; // int | The starting position of the items to be retrieved.
$sort_by = some text; // string | The property used to specify the sorting criteria for folder contents.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text used for filtering or searching folder contents.

try {
    $result = $apiInstance->getTrashFolder($user_id_or_group_id, $filter_type, $apply_filter_option, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getTrashFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertFile()`

```php
insertFile($folder_id, $insert_file_file, $insert_file_title, $insert_file_create_new_if_exist, $insert_file_keep_convert_status, $insert_file_stream_can_read, $insert_file_stream_can_write, $insert_file_stream_can_seek, $insert_file_stream_can_timeout, $insert_file_stream_length, $insert_file_stream_position, $insert_file_stream_read_timeout, $insert_file_stream_write_timeout): \OpenAPI\Client\Model\FileIntegerWrapper
```

Insert a file
Inserts a file specified in the request to the selected folder by single file uploading.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/insert-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID for inserting a file. | |
| **insert_file_file** | **\SplFileObject****\SplFileObject**| The file to be inserted. | [optional] |
| **insert_file_title** | **string**| The file title to be inserted. | [optional] |
| **insert_file_create_new_if_exist** | **bool**| Specifies whether to create a new file if it already exists or not. | [optional] |
| **insert_file_keep_convert_status** | **bool**| Specifies whether to keep the file converting status or not. | [optional] |
| **insert_file_stream_can_read** | **bool**|  | [optional] |
| **insert_file_stream_can_write** | **bool**|  | [optional] |
| **insert_file_stream_can_seek** | **bool**|  | [optional] |
| **insert_file_stream_can_timeout** | **bool**|  | [optional] |
| **insert_file_stream_length** | **int**|  | [optional] |
| **insert_file_stream_position** | **int**|  | [optional] |
| **insert_file_stream_read_timeout** | **int**|  | [optional] |
| **insert_file_stream_write_timeout** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID for inserting a file.
$insert_file_file = '/path/to/file.txt'; // \SplFileObject | The file to be inserted.
$insert_file_title = 'insert_file_title_example'; // string | The file title to be inserted.
$insert_file_create_new_if_exist = True; // bool | Specifies whether to create a new file if it already exists or not.
$insert_file_keep_convert_status = True; // bool | Specifies whether to keep the file converting status or not.
$insert_file_stream_can_read = True; // bool
$insert_file_stream_can_write = True; // bool
$insert_file_stream_can_seek = True; // bool
$insert_file_stream_can_timeout = True; // bool
$insert_file_stream_length = 56; // int
$insert_file_stream_position = 56; // int
$insert_file_stream_read_timeout = 56; // int
$insert_file_stream_write_timeout = 56; // int

try {
    $result = $apiInstance->insertFile($folder_id, $insert_file_file, $insert_file_title, $insert_file_create_new_if_exist, $insert_file_keep_convert_status, $insert_file_stream_can_read, $insert_file_stream_can_write, $insert_file_stream_can_seek, $insert_file_stream_can_timeout, $insert_file_stream_length, $insert_file_stream_position, $insert_file_stream_read_timeout, $insert_file_stream_write_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->insertFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertFileToMyFromBody()`

```php
insertFileToMyFromBody($file, $title, $create_new_if_exist, $keep_convert_status, $stream_can_read, $stream_can_write, $stream_can_seek, $stream_can_timeout, $stream_length, $stream_position, $stream_read_timeout, $stream_write_timeout): \OpenAPI\Client\Model\FileIntegerWrapper
```

Insert a file to the My documents section
Inserts a file specified in the request to the My documents section by single file uploading.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/insert-file-to-my-from-body/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The file to be inserted. | [optional] |
| **title** | **string**| The file title to be inserted. | [optional] |
| **create_new_if_exist** | **bool**| Specifies whether to create a new file if it already exists or not. | [optional] |
| **keep_convert_status** | **bool**| Specifies whether to keep the file converting status or not. | [optional] |
| **stream_can_read** | **bool**|  | [optional] |
| **stream_can_write** | **bool**|  | [optional] |
| **stream_can_seek** | **bool**|  | [optional] |
| **stream_can_timeout** | **bool**|  | [optional] |
| **stream_length** | **int**|  | [optional] |
| **stream_position** | **int**|  | [optional] |
| **stream_read_timeout** | **int**|  | [optional] |
| **stream_write_timeout** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The file to be inserted.
$title = 'title_example'; // string | The file title to be inserted.
$create_new_if_exist = True; // bool | Specifies whether to create a new file if it already exists or not.
$keep_convert_status = True; // bool | Specifies whether to keep the file converting status or not.
$stream_can_read = True; // bool
$stream_can_write = True; // bool
$stream_can_seek = True; // bool
$stream_can_timeout = True; // bool
$stream_length = 56; // int
$stream_position = 56; // int
$stream_read_timeout = 56; // int
$stream_write_timeout = 56; // int

try {
    $result = $apiInstance->insertFileToMyFromBody($file, $title, $create_new_if_exist, $keep_convert_status, $stream_can_read, $stream_can_write, $stream_can_seek, $stream_can_timeout, $stream_length, $stream_position, $stream_read_timeout, $stream_write_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->insertFileToMyFromBody: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameFolder()`

```php
renameFolder($folder_id, $create_folder): \OpenAPI\Client\Model\FolderIntegerWrapper
```

Rename a folder
Renames the selected folder with a new title specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/rename-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID for the folder creation. | |
| **create_folder** | [**\OpenAPI\Client\Model\CreateFolder**](../Model/CreateFolder.md)| The parameters for creating a folder. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID for the folder creation.
$create_folder = new \OpenAPI\Client\Model\CreateFolder(); // \OpenAPI\Client\Model\CreateFolder | The parameters for creating a folder.

try {
    $result = $apiInstance->renameFolder($folder_id, $create_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->renameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFolderOrder()`

```php
setFolderOrder($folder_id, $order_request_dto): \OpenAPI\Client\Model\FolderIntegerWrapper
```

Set folder order
Sets the order of a folder with ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-folder-order/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder unique identifier. | |
| **order_request_dto** | [**\OpenAPI\Client\Model\OrderRequestDto**](../Model/OrderRequestDto.md)| The folder order information. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder unique identifier.
$order_request_dto = new \OpenAPI\Client\Model\OrderRequestDto(); // \OpenAPI\Client\Model\OrderRequestDto | The folder order information.

try {
    $result = $apiInstance->setFolderOrder($folder_id, $order_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->setFolderOrder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFolderPrimaryExternalLink()`

```php
setFolderPrimaryExternalLink($id, $folder_link_request): \OpenAPI\Client\Model\FileShareWrapper
```

Set the folder external link
Sets the folder external link with the ID specified in the request.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-folder-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The folder ID. | |
| **folder_link_request** | [**\OpenAPI\Client\Model\FolderLinkRequest**](../Model/FolderLinkRequest.md)| The folder link parameters. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 9846; // int | The folder ID.
$folder_link_request = new \OpenAPI\Client\Model\FolderLinkRequest(); // \OpenAPI\Client\Model\FolderLinkRequest | The folder link parameters.

try {
    $result = $apiInstance->setFolderPrimaryExternalLink($id, $folder_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->setFolderPrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($folder_id, $upload_request_dto): \OpenAPI\Client\Model\ObjectWrapper
```

Upload a file
Uploads a file specified in the request to the selected folder by single file uploading or standart multipart/form-data method.   **Note**:  You can upload files in two different ways:   <ol>  <li>Using single file upload. You should set the Content-Type and Content-Disposition headers to specify a file name and content type, and send the file to the request body.</li>  <li>Using standart multipart/form-data method.</li>  </ol>

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/upload-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID to upload a file. | |
| **upload_request_dto** | [**\OpenAPI\Client\Model\UploadRequestDto**](../Model/UploadRequestDto.md)| The request parameters for uploading a file. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 9846; // int | The folder ID to upload a file.
$upload_request_dto = new \OpenAPI\Client\Model\UploadRequestDto(); // \OpenAPI\Client\Model\UploadRequestDto | The request parameters for uploading a file.

try {
    $result = $apiInstance->uploadFile($folder_id, $upload_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFileToMy()`

```php
uploadFileToMy($in_dto): \OpenAPI\Client\Model\ObjectWrapper
```

Upload a file to the My documents section
Uploads a file specified in the request to the My documents section by single file uploading or standart multipart/form-data method.   **Note**:  You can upload files in two different ways:   <ol>  <li>Using single file upload. You should set the Content-Type and Content-Disposition headers to specify a file name and content type, and send the file to the request body.</li>  <li>Using standart multipart/form-data method.</li>  </ol>

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/upload-file-to-my/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **in_dto** | [**\OpenAPI\Client\Model\UploadRequestDto**](../Model/.md)| The request parameters for uploading a file. | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$in_dto = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\UploadRequestDto(); // \OpenAPI\Client\Model\UploadRequestDto | The request parameters for uploading a file.

try {
    $result = $apiInstance->uploadFileToMy($in_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->uploadFileToMy: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
