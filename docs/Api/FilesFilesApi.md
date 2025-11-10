# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.FilesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFileToRecent()**](FilesFilesApi.md#addFileToRecent) | **POST** /api/2.0/files/file/{fileId}/recent |  |
| [**addTemplates()**](FilesFilesApi.md#addTemplates) | **POST** /api/2.0/files/templates |  |
| [**changeVersionHistory()**](FilesFilesApi.md#changeVersionHistory) | **PUT** /api/2.0/files/file/{fileId}/history |  |
| [**checkFillFormDraft()**](FilesFilesApi.md#checkFillFormDraft) | **POST** /api/2.0/files/masterform/{fileId}/checkfillformdraft |  |
| [**copyFileAs()**](FilesFilesApi.md#copyFileAs) | **POST** /api/2.0/files/file/{fileId}/copyas |  |
| [**createEditSession()**](FilesFilesApi.md#createEditSession) | **POST** /api/2.0/files/file/{fileId}/edit_session |  |
| [**createFile()**](FilesFilesApi.md#createFile) | **POST** /api/2.0/files/{folderId}/file |  |
| [**createFileInMyDocuments()**](FilesFilesApi.md#createFileInMyDocuments) | **POST** /api/2.0/files/@my/file |  |
| [**createFilePrimaryExternalLink()**](FilesFilesApi.md#createFilePrimaryExternalLink) | **POST** /api/2.0/files/file/{id}/link |  |
| [**createHtmlFile()**](FilesFilesApi.md#createHtmlFile) | **POST** /api/2.0/files/{folderId}/html |  |
| [**createHtmlFileInMyDocuments()**](FilesFilesApi.md#createHtmlFileInMyDocuments) | **POST** /api/2.0/files/@my/html |  |
| [**createTextFile()**](FilesFilesApi.md#createTextFile) | **POST** /api/2.0/files/{folderId}/text |  |
| [**createTextFileInMyDocuments()**](FilesFilesApi.md#createTextFileInMyDocuments) | **POST** /api/2.0/files/@my/text |  |
| [**createThumbnails()**](FilesFilesApi.md#createThumbnails) | **POST** /api/2.0/files/thumbnails |  |
| [**deleteFile()**](FilesFilesApi.md#deleteFile) | **DELETE** /api/2.0/files/file/{fileId} |  |
| [**deleteRecent()**](FilesFilesApi.md#deleteRecent) | **DELETE** /api/2.0/files/recent |  |
| [**deleteTemplates()**](FilesFilesApi.md#deleteTemplates) | **DELETE** /api/2.0/files/templates |  |
| [**getAllFormRoles()**](FilesFilesApi.md#getAllFormRoles) | **GET** /api/2.0/files/file/{fileId}/formroles |  |
| [**getEditDiffUrl()**](FilesFilesApi.md#getEditDiffUrl) | **GET** /api/2.0/files/file/{fileId}/edit/diff |  |
| [**getEditHistory()**](FilesFilesApi.md#getEditHistory) | **GET** /api/2.0/files/file/{fileId}/edit/history |  |
| [**getFileHistory()**](FilesFilesApi.md#getFileHistory) | **GET** /api/2.0/files/file/{fileId}/log |  |
| [**getFileInfo()**](FilesFilesApi.md#getFileInfo) | **GET** /api/2.0/files/file/{fileId} |  |
| [**getFileLinks()**](FilesFilesApi.md#getFileLinks) | **GET** /api/2.0/files/file/{id}/links |  |
| [**getFilePrimaryExternalLink()**](FilesFilesApi.md#getFilePrimaryExternalLink) | **GET** /api/2.0/files/file/{id}/link |  |
| [**getFileVersionInfo()**](FilesFilesApi.md#getFileVersionInfo) | **GET** /api/2.0/files/file/{fileId}/history |  |
| [**getFillResult()**](FilesFilesApi.md#getFillResult) | **GET** /api/2.0/files/file/fillresult |  |
| [**getPresignedFileUri()**](FilesFilesApi.md#getPresignedFileUri) | **GET** /api/2.0/files/file/{fileId}/presigned |  |
| [**getPresignedUri()**](FilesFilesApi.md#getPresignedUri) | **GET** /api/2.0/files/file/{fileId}/presigneduri |  |
| [**getProtectedFileUsers()**](FilesFilesApi.md#getProtectedFileUsers) | **GET** /api/2.0/files/file/{fileId}/protectusers |  |
| [**getReferenceData()**](FilesFilesApi.md#getReferenceData) | **POST** /api/2.0/files/file/referencedata |  |
| [**isFormPDF()**](FilesFilesApi.md#isFormPDF) | **GET** /api/2.0/files/file/{fileId}/isformpdf |  |
| [**lockFile()**](FilesFilesApi.md#lockFile) | **PUT** /api/2.0/files/file/{fileId}/lock |  |
| [**manageFormFilling()**](FilesFilesApi.md#manageFormFilling) | **PUT** /api/2.0/files/file/{fileId}/manageformfilling |  |
| [**openEditFile()**](FilesFilesApi.md#openEditFile) | **GET** /api/2.0/files/file/{fileId}/openedit |  |
| [**restoreFileVersion()**](FilesFilesApi.md#restoreFileVersion) | **GET** /api/2.0/files/file/{fileId}/restoreversion |  |
| [**saveEditingFileFromForm()**](FilesFilesApi.md#saveEditingFileFromForm) | **PUT** /api/2.0/files/file/{fileId}/saveediting |  |
| [**saveFileAsPdf()**](FilesFilesApi.md#saveFileAsPdf) | **POST** /api/2.0/files/file/{id}/saveaspdf |  |
| [**saveFormRoleMapping()**](FilesFilesApi.md#saveFormRoleMapping) | **POST** /api/2.0/files/file/{fileId}/formrolemapping |  |
| [**setCustomFilterTag()**](FilesFilesApi.md#setCustomFilterTag) | **PUT** /api/2.0/files/file/{fileId}/customfilter |  |
| [**setFileExternalLink()**](FilesFilesApi.md#setFileExternalLink) | **PUT** /api/2.0/files/file/{id}/links |  |
| [**setFileOrder()**](FilesFilesApi.md#setFileOrder) | **PUT** /api/2.0/files/{fileId}/order |  |
| [**setFilesOrder()**](FilesFilesApi.md#setFilesOrder) | **PUT** /api/2.0/files/order |  |
| [**startEditFile()**](FilesFilesApi.md#startEditFile) | **POST** /api/2.0/files/file/{fileId}/startedit |  |
| [**startFillingFile()**](FilesFilesApi.md#startFillingFile) | **PUT** /api/2.0/files/file/{fileId}/startfilling |  |
| [**toggleFileFavorite()**](FilesFilesApi.md#toggleFileFavorite) | **GET** /api/2.0/files/favorites/{fileId} |  |
| [**trackEditFile()**](FilesFilesApi.md#trackEditFile) | **GET** /api/2.0/files/file/{fileId}/trackeditfile |  |
| [**updateFile()**](FilesFilesApi.md#updateFile) | **PUT** /api/2.0/files/file/{fileId} |  |


## `addFileToRecent()`

```php
addFileToRecent($file_id): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-file-to-recent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->addFileToRecent($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->addFileToRecent: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTemplates()`

```php
addTemplates($templates_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-templates/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templates_request_dto** | [**\OpenAPI\Client\Model\TemplatesRequestDto**](../Model/TemplatesRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$templates_request_dto = new \OpenAPI\Client\Model\TemplatesRequestDto(); // \OpenAPI\Client\Model\TemplatesRequestDto

try {
    $result = $apiInstance->addTemplates($templates_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->addTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeVersionHistory()`

```php
changeVersionHistory($file_id, $change_history): \OpenAPI\Client\Model\FileIntegerArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-version-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file Id to change its version history. | |
| **change_history** | [**\OpenAPI\Client\Model\ChangeHistory**](../Model/ChangeHistory.md)| The parameters for changing version history. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerArrayWrapper**](../Model/FileIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file Id to change its version history.
$change_history = new \OpenAPI\Client\Model\ChangeHistory(); // \OpenAPI\Client\Model\ChangeHistory | The parameters for changing version history.

try {
    $result = $apiInstance->changeVersionHistory($file_id, $change_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->changeVersionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkFillFormDraft()`

```php
checkFillFormDraft($file_id, $check_fill_form_draft): \OpenAPI\Client\Model\StringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-fill-form-draft/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID of the form draft. | |
| **check_fill_form_draft** | [**\OpenAPI\Client\Model\CheckFillFormDraft**](../Model/CheckFillFormDraft.md)| The parameters for checking the form draft filling. | |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID of the form draft.
$check_fill_form_draft = new \OpenAPI\Client\Model\CheckFillFormDraft(); // \OpenAPI\Client\Model\CheckFillFormDraft | The parameters for checking the form draft filling.

try {
    $result = $apiInstance->checkFillFormDraft($file_id, $check_fill_form_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->checkFillFormDraft: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyFileAs()`

```php
copyFileAs($file_id, $copy_as_json_element): \OpenAPI\Client\Model\FileEntryBaseWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/copy-file-as/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to copy. | |
| **copy_as_json_element** | [**\OpenAPI\Client\Model\CopyAsJsonElement**](../Model/CopyAsJsonElement.md)| The parameters for copying a file. | |

### Return type

[**\OpenAPI\Client\Model\FileEntryBaseWrapper**](../Model/FileEntryBaseWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to copy.
$copy_as_json_element = new \OpenAPI\Client\Model\CopyAsJsonElement(); // \OpenAPI\Client\Model\CopyAsJsonElement | The parameters for copying a file.

try {
    $result = $apiInstance->copyFileAs($file_id, $copy_as_json_element);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->copyFileAs: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEditSession()`

```php
createEditSession($file_id, $file_size): \OpenAPI\Client\Model\ObjectWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-edit-session/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **file_size** | **int**| The file size in bytes. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$file_size = 1234; // int | The file size in bytes.

try {
    $result = $apiInstance->createEditSession($file_id, $file_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createEditSession: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFile()`

```php
createFile($folder_id, $create_file_json_element): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID for the file creation. | |
| **create_file_json_element** | [**\OpenAPI\Client\Model\CreateFileJsonElement**](../Model/CreateFileJsonElement.md)| The parameters for creating a file. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID for the file creation.
$create_file_json_element = new \OpenAPI\Client\Model\CreateFileJsonElement(); // \OpenAPI\Client\Model\CreateFileJsonElement | The parameters for creating a file.

try {
    $result = $apiInstance->createFile($folder_id, $create_file_json_element);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFileInMyDocuments()`

```php
createFileInMyDocuments($create_file_json_element): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-file-in-my-documents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_file_json_element** | [**\OpenAPI\Client\Model\CreateFileJsonElement**](../Model/CreateFileJsonElement.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_file_json_element = new \OpenAPI\Client\Model\CreateFileJsonElement(); // \OpenAPI\Client\Model\CreateFileJsonElement

try {
    $result = $apiInstance->createFileInMyDocuments($create_file_json_element);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileInMyDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFilePrimaryExternalLink()`

```php
createFilePrimaryExternalLink($id, $file_link_request): \OpenAPI\Client\Model\FileShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-file-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The file ID. | |
| **file_link_request** | [**\OpenAPI\Client\Model\FileLinkRequest**](../Model/FileLinkRequest.md)| The file external link parameters. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file ID.
$file_link_request = new \OpenAPI\Client\Model\FileLinkRequest(); // \OpenAPI\Client\Model\FileLinkRequest | The file external link parameters.

try {
    $result = $apiInstance->createFilePrimaryExternalLink($id, $file_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFilePrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHtmlFile()`

```php
createHtmlFile($folder_id, $create_text_or_html_file): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-html-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID to create the text or HTML file. | |
| **create_text_or_html_file** | [**\OpenAPI\Client\Model\CreateTextOrHtmlFile**](../Model/CreateTextOrHtmlFile.md)| The parameters for creating an HTML or text file. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID to create the text or HTML file.
$create_text_or_html_file = new \OpenAPI\Client\Model\CreateTextOrHtmlFile(); // \OpenAPI\Client\Model\CreateTextOrHtmlFile | The parameters for creating an HTML or text file.

try {
    $result = $apiInstance->createHtmlFile($folder_id, $create_text_or_html_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createHtmlFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHtmlFileInMyDocuments()`

```php
createHtmlFileInMyDocuments($create_text_or_html_file): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-html-file-in-my-documents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_text_or_html_file** | [**\OpenAPI\Client\Model\CreateTextOrHtmlFile**](../Model/CreateTextOrHtmlFile.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_text_or_html_file = new \OpenAPI\Client\Model\CreateTextOrHtmlFile(); // \OpenAPI\Client\Model\CreateTextOrHtmlFile

try {
    $result = $apiInstance->createHtmlFileInMyDocuments($create_text_or_html_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createHtmlFileInMyDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTextFile()`

```php
createTextFile($folder_id, $create_text_or_html_file): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-text-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**| The folder ID to create the text or HTML file. | |
| **create_text_or_html_file** | [**\OpenAPI\Client\Model\CreateTextOrHtmlFile**](../Model/CreateTextOrHtmlFile.md)| The parameters for creating an HTML or text file. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 9846; // int | The folder ID to create the text or HTML file.
$create_text_or_html_file = new \OpenAPI\Client\Model\CreateTextOrHtmlFile(); // \OpenAPI\Client\Model\CreateTextOrHtmlFile | The parameters for creating an HTML or text file.

try {
    $result = $apiInstance->createTextFile($folder_id, $create_text_or_html_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createTextFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTextFileInMyDocuments()`

```php
createTextFileInMyDocuments($create_text_or_html_file): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-text-file-in-my-documents/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_text_or_html_file** | [**\OpenAPI\Client\Model\CreateTextOrHtmlFile**](../Model/CreateTextOrHtmlFile.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_text_or_html_file = new \OpenAPI\Client\Model\CreateTextOrHtmlFile(); // \OpenAPI\Client\Model\CreateTextOrHtmlFile

try {
    $result = $apiInstance->createTextFileInMyDocuments($create_text_or_html_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createTextFileInMyDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createThumbnails()`

```php
createThumbnails($base_batch_request_dto): \OpenAPI\Client\Model\ObjectArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-thumbnails/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_batch_request_dto** | [**\OpenAPI\Client\Model\BaseBatchRequestDto**](../Model/BaseBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectArrayWrapper**](../Model/ObjectArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->createThumbnails($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createThumbnails: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($file_id, $delete): \OpenAPI\Client\Model\FileOperationArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to delete. | |
| **delete** | [**\OpenAPI\Client\Model\Delete**](../Model/Delete.md)| The parameters for deleting a file. | |

### Return type

[**\OpenAPI\Client\Model\FileOperationArrayWrapper**](../Model/FileOperationArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to delete.
$delete = new \OpenAPI\Client\Model\Delete(); // \OpenAPI\Client\Model\Delete | The parameters for deleting a file.

try {
    $result = $apiInstance->deleteFile($file_id, $delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRecent()`

```php
deleteRecent($base_batch_request_dto): \OpenAPI\Client\Model\NoContentResultWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-recent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_batch_request_dto** | [**\OpenAPI\Client\Model\BaseBatchRequestDto**](../Model/BaseBatchRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NoContentResultWrapper**](../Model/NoContentResultWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_batch_request_dto = new \OpenAPI\Client\Model\BaseBatchRequestDto(); // \OpenAPI\Client\Model\BaseBatchRequestDto

try {
    $result = $apiInstance->deleteRecent($base_batch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteRecent: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplates()`

```php
deleteTemplates($request_body): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-templates/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| The file IDs. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array(56); // int[] | The file IDs.

try {
    $result = $apiInstance->deleteTemplates($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFormRoles()`

```php
getAllFormRoles($file_id): \OpenAPI\Client\Model\FormRoleArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-all-form-roles/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FormRoleArrayWrapper**](../Model/FormRoleArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getAllFormRoles($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getAllFormRoles: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditDiffUrl()`

```php
getEditDiffUrl($file_id, $version): \OpenAPI\Client\Model\EditHistoryDataWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-edit-diff-url/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **version** | **int**| The file version. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EditHistoryDataWrapper**](../Model/EditHistoryDataWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$version = 1234; // int | The file version.

try {
    $result = $apiInstance->getEditDiffUrl($file_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getEditDiffUrl: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditHistory()`

```php
getEditHistory($file_id): \OpenAPI\Client\Model\EditHistoryArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-edit-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\EditHistoryArrayWrapper**](../Model/EditHistoryArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getEditHistory($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getEditHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileHistory()`

```php
getFileHistory($file_id, $from_date, $to_date, $count, $start_index): \OpenAPI\Client\Model\HistoryArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID of the history request. | |
| **from_date** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The start date of the history. | [optional] |
| **to_date** | [**\OpenAPI\Client\Model\ApiDateTime**](../Model/.md)| The end date of the history. | [optional] |
| **count** | **int**| The number of history entries to retrieve for the file log. | [optional] |
| **start_index** | **int**| The starting index for retrieving a subset of file history entries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HistoryArrayWrapper**](../Model/HistoryArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID of the history request.
$from_date = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The start date of the history.
$to_date = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApiDateTime(); // \OpenAPI\Client\Model\ApiDateTime | The end date of the history.
$count = 1234; // int | The number of history entries to retrieve for the file log.
$start_index = 1234; // int | The starting index for retrieving a subset of file history entries.

try {
    $result = $apiInstance->getFileHistory($file_id, $from_date, $to_date, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileInfo()`

```php
getFileInfo($file_id, $version): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **version** | **int**| The file version. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$version = 1234; // int | The file version.

try {
    $result = $apiInstance->getFileInfo($file_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileLinks()`

```php
getFileLinks($id, $count, $start_index): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-links/).

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



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file unique identifier.
$count = 1234; // int | The number of items to retrieve in the request.
$start_index = 1234; // int | The starting index for the query results.

try {
    $result = $apiInstance->getFileLinks($id, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileLinks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilePrimaryExternalLink()`

```php
getFilePrimaryExternalLink($id, $count, $start_index): \OpenAPI\Client\Model\FileShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The file unique identifier. | |
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



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file unique identifier.
$count = 1234; // int | The number of items to retrieve in the request.
$start_index = 1234; // int | The starting index for the query results.

try {
    $result = $apiInstance->getFilePrimaryExternalLink($id, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilePrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileVersionInfo()`

```php
getFileVersionInfo($file_id): \OpenAPI\Client\Model\FileIntegerArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-file-version-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerArrayWrapper**](../Model/FileIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getFileVersionInfo($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileVersionInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFillResult()`

```php
getFillResult($filling_session_id): \OpenAPI\Client\Model\FillingFormResultIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-fill-result/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filling_session_id** | **string**| The form-filling session ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FillingFormResultIntegerWrapper**](../Model/FillingFormResultIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filling_session_id = some text; // string | The form-filling session ID.

try {
    $result = $apiInstance->getFillResult($filling_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFillResult: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPresignedFileUri()`

```php
getPresignedFileUri($file_id): \OpenAPI\Client\Model\FileLinkWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-presigned-file-uri/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\FileLinkWrapper**](../Model/FileLinkWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getPresignedFileUri($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getPresignedFileUri: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPresignedUri()`

```php
getPresignedUri($file_id): \OpenAPI\Client\Model\StringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-presigned-uri/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getPresignedUri($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getPresignedUri: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProtectedFileUsers()`

```php
getProtectedFileUsers($file_id): \OpenAPI\Client\Model\MentionWrapperArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-protected-file-users/).

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



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->getProtectedFileUsers($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getProtectedFileUsers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceData()`

```php
getReferenceData($get_reference_data_dto_integer): \OpenAPI\Client\Model\FileReferenceWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-reference-data/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_reference_data_dto_integer** | [**\OpenAPI\Client\Model\GetReferenceDataDtoInteger**](../Model/GetReferenceDataDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileReferenceWrapper**](../Model/FileReferenceWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_reference_data_dto_integer = new \OpenAPI\Client\Model\GetReferenceDataDtoInteger(); // \OpenAPI\Client\Model\GetReferenceDataDtoInteger

try {
    $result = $apiInstance->getReferenceData($get_reference_data_dto_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getReferenceData: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isFormPDF()`

```php
isFormPDF($file_id): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/is-form-pdf/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.

try {
    $result = $apiInstance->isFormPDF($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->isFormPDF: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockFile()`

```php
lockFile($file_id, $lock_file_parameters): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/lock-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID for locking. | |
| **lock_file_parameters** | [**\OpenAPI\Client\Model\LockFileParameters**](../Model/LockFileParameters.md)| The parameters for locking a file. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID for locking.
$lock_file_parameters = new \OpenAPI\Client\Model\LockFileParameters(); // \OpenAPI\Client\Model\LockFileParameters | The parameters for locking a file.

try {
    $result = $apiInstance->lockFile($file_id, $lock_file_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->lockFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageFormFilling()`

```php
manageFormFilling($file_id, $manage_form_filling_dto_integer)
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/manage-form-filling/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **manage_form_filling_dto_integer** | [**\OpenAPI\Client\Model\ManageFormFillingDtoInteger**](../Model/ManageFormFillingDtoInteger.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string
$manage_form_filling_dto_integer = new \OpenAPI\Client\Model\ManageFormFillingDtoInteger(); // \OpenAPI\Client\Model\ManageFormFillingDtoInteger

try {
    $apiInstance->manageFormFilling($file_id, $manage_form_filling_dto_integer);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->manageFormFilling: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openEditFile()`

```php
openEditFile($file_id, $version, $view, $editor_type, $edit, $fill): \OpenAPI\Client\Model\ConfigurationIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/open-edit-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to open. | |
| **version** | **int**| The file version to open. | [optional] |
| **view** | **bool**| Specifies if the document will be opened for viewing only or not. | [optional] |
| **editor_type** | [**\OpenAPI\Client\Model\EditorType**](../Model/.md)| The editor type to open the file. | [optional] |
| **edit** | **bool**| Specifies if the document is opened in the editing mode or not. | [optional] |
| **fill** | **bool**| Specifies if the document is opened in the form-filling mode or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigurationIntegerWrapper**](../Model/ConfigurationIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to open.
$version = 1234; // int | The file version to open.
$view = true; // bool | Specifies if the document will be opened for viewing only or not.
$editor_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EditorType(); // \OpenAPI\Client\Model\EditorType | The editor type to open the file.
$edit = true; // bool | Specifies if the document is opened in the editing mode or not.
$fill = true; // bool | Specifies if the document is opened in the form-filling mode or not.

try {
    $result = $apiInstance->openEditFile($file_id, $version, $view, $editor_type, $edit, $fill);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->openEditFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreFileVersion()`

```php
restoreFileVersion($file_id, $version, $url): \OpenAPI\Client\Model\EditHistoryArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/restore-file-version/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID of the restore version. | |
| **version** | **int**| The file version of the restore. | [optional] |
| **url** | **string**| The file version URL of the restore. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EditHistoryArrayWrapper**](../Model/EditHistoryArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID of the restore version.
$version = 1234; // int | The file version of the restore.
$url = some text; // string | The file version URL of the restore.

try {
    $result = $apiInstance->restoreFileVersion($file_id, $version, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->restoreFileVersion: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveEditingFileFromForm()`

```php
saveEditingFileFromForm($file_id, $file_extension, $download_uri, $file, $forcesave): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-editing-file-from-form/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The editing file ID from the request. | |
| **file_extension** | **string**| The editing file extension from the request. | [optional] |
| **download_uri** | **string**| The URI to download the editing file. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| The request file stream. | [optional] |
| **forcesave** | **bool**| Specifies whether to force save the file or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The editing file ID from the request.
$file_extension = 'file_extension_example'; // string | The editing file extension from the request.
$download_uri = 'download_uri_example'; // string | The URI to download the editing file.
$file = '/path/to/file.txt'; // \SplFileObject | The request file stream.
$forcesave = True; // bool | Specifies whether to force save the file or not.

try {
    $result = $apiInstance->saveEditingFileFromForm($file_id, $file_extension, $download_uri, $file, $forcesave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->saveEditingFileFromForm: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveFileAsPdf()`

```php
saveFileAsPdf($id, $save_as_pdf_integer): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-file-as-pdf/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The file ID to save as PDF. | |
| **save_as_pdf_integer** | [**\OpenAPI\Client\Model\SaveAsPdfInteger**](../Model/SaveAsPdfInteger.md)| The parameters for saving the file as PDF. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file ID to save as PDF.
$save_as_pdf_integer = new \OpenAPI\Client\Model\SaveAsPdfInteger(); // \OpenAPI\Client\Model\SaveAsPdfInteger | The parameters for saving the file as PDF.

try {
    $result = $apiInstance->saveFileAsPdf($id, $save_as_pdf_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->saveFileAsPdf: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveFormRoleMapping()`

```php
saveFormRoleMapping($file_id, $save_form_role_mapping_dto_integer)
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-form-role-mapping/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **save_form_role_mapping_dto_integer** | [**\OpenAPI\Client\Model\SaveFormRoleMappingDtoInteger**](../Model/SaveFormRoleMappingDtoInteger.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string
$save_form_role_mapping_dto_integer = new \OpenAPI\Client\Model\SaveFormRoleMappingDtoInteger(); // \OpenAPI\Client\Model\SaveFormRoleMappingDtoInteger

try {
    $apiInstance->saveFormRoleMapping($file_id, $save_form_role_mapping_dto_integer);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->saveFormRoleMapping: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCustomFilterTag()`

```php
setCustomFilterTag($file_id, $custom_filter_parameters): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-custom-filter-tag/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **custom_filter_parameters** | [**\OpenAPI\Client\Model\CustomFilterParameters**](../Model/CustomFilterParameters.md)| The parameters for setting the Custom Filter editing mode. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$custom_filter_parameters = new \OpenAPI\Client\Model\CustomFilterParameters(); // \OpenAPI\Client\Model\CustomFilterParameters | The parameters for setting the Custom Filter editing mode.

try {
    $result = $apiInstance->setCustomFilterTag($file_id, $custom_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->setCustomFilterTag: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFileExternalLink()`

```php
setFileExternalLink($id, $file_link_request): \OpenAPI\Client\Model\FileShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-file-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The file ID. | |
| **file_link_request** | [**\OpenAPI\Client\Model\FileLinkRequest**](../Model/FileLinkRequest.md)| The file external link parameters. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The file ID.
$file_link_request = new \OpenAPI\Client\Model\FileLinkRequest(); // \OpenAPI\Client\Model\FileLinkRequest | The file external link parameters.

try {
    $result = $apiInstance->setFileExternalLink($id, $file_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->setFileExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFileOrder()`

```php
setFileOrder($file_id, $order_request_dto): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-file-order/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file unique identifier. | |
| **order_request_dto** | [**\OpenAPI\Client\Model\OrderRequestDto**](../Model/OrderRequestDto.md)| The file order information. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file unique identifier.
$order_request_dto = new \OpenAPI\Client\Model\OrderRequestDto(); // \OpenAPI\Client\Model\OrderRequestDto | The file order information.

try {
    $result = $apiInstance->setFileOrder($file_id, $order_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->setFileOrder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFilesOrder()`

```php
setFilesOrder($orders_request_dto_integer): \OpenAPI\Client\Model\FileEntryIntegerArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-files-order/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orders_request_dto_integer** | [**\OpenAPI\Client\Model\OrdersRequestDtoInteger**](../Model/OrdersRequestDtoInteger.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileEntryIntegerArrayWrapper**](../Model/FileEntryIntegerArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orders_request_dto_integer = new \OpenAPI\Client\Model\OrdersRequestDtoInteger(); // \OpenAPI\Client\Model\OrdersRequestDtoInteger

try {
    $result = $apiInstance->setFilesOrder($orders_request_dto_integer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->setFilesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startEditFile()`

```php
startEditFile($file_id, $start_edit): \OpenAPI\Client\Model\StringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-edit-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to start editing. | |
| **start_edit** | [**\OpenAPI\Client\Model\StartEdit**](../Model/StartEdit.md)| The file parameters to start editing. | |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to start editing.
$start_edit = new \OpenAPI\Client\Model\StartEdit(); // \OpenAPI\Client\Model\StartEdit | The file parameters to start editing.

try {
    $result = $apiInstance->startEditFile($file_id, $start_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->startEditFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startFillingFile()`

```php
startFillingFile($file_id): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-filling-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to start filling. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to start filling.

try {
    $result = $apiInstance->startFillingFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->startFillingFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleFileFavorite()`

```php
toggleFileFavorite($file_id, $favorite): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/toggle-file-favorite/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID. | |
| **favorite** | **bool**| Specifies if the file is marked as favorite or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID.
$favorite = true; // bool | Specifies if the file is marked as favorite or not.

try {
    $result = $apiInstance->toggleFileFavorite($file_id, $favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->toggleFileFavorite: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackEditFile()`

```php
trackEditFile($file_id, $tab_id, $doc_key_for_track, $is_finish): \OpenAPI\Client\Model\KeyValuePairBooleanStringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/track-edit-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to track editing changes. | |
| **tab_id** | **string**| The tab ID to track editing changes. | [optional] |
| **doc_key_for_track** | **string**| The document key for tracking changes. | [optional] |
| **is_finish** | **bool**| Specifies whether to finish file tracking or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\KeyValuePairBooleanStringWrapper**](../Model/KeyValuePairBooleanStringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to track editing changes.
$tab_id = 75a5f745-f697-4418-b38d-0fe0d277e258; // string | The tab ID to track editing changes.
$doc_key_for_track = some text; // string | The document key for tracking changes.
$is_finish = true; // bool | Specifies whether to finish file tracking or not.

try {
    $result = $apiInstance->trackEditFile($file_id, $tab_id, $doc_key_for_track, $is_finish);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->trackEditFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($file_id, $update_file): \OpenAPI\Client\Model\FileIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-file/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| The file ID to update. | |
| **update_file** | [**\OpenAPI\Client\Model\UpdateFile**](../Model/UpdateFile.md)| The parameters for updating a file. | |

### Return type

[**\OpenAPI\Client\Model\FileIntegerWrapper**](../Model/FileIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 9846; // int | The file ID to update.
$update_file = new \OpenAPI\Client\Model\UpdateFile(); // \OpenAPI\Client\Model\UpdateFile | The parameters for updating a file.

try {
    $result = $apiInstance->updateFile($file_id, $update_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
