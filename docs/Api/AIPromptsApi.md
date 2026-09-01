# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.PromptsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiPromptsCreate()**](AIPromptsApi.md#aiPromptsCreate) | **POST** /api/2.0/ai/prompts/create | Create |
| [**aiPromptsCreateFolder()**](AIPromptsApi.md#aiPromptsCreateFolder) | **POST** /api/2.0/ai/prompts/create-folder | Create folder |
| [**aiPromptsDelete()**](AIPromptsApi.md#aiPromptsDelete) | **DELETE** /api/2.0/ai/prompts/delete | Delete |
| [**aiPromptsDeleteFolder()**](AIPromptsApi.md#aiPromptsDeleteFolder) | **DELETE** /api/2.0/ai/prompts/delete-folder | Delete folder |
| [**aiPromptsExport()**](AIPromptsApi.md#aiPromptsExport) | **GET** /api/2.0/ai/prompts/export | Export |
| [**aiPromptsGetById()**](AIPromptsApi.md#aiPromptsGetById) | **GET** /api/2.0/ai/prompts/get-by-id | Get by id |
| [**aiPromptsGetFolderById()**](AIPromptsApi.md#aiPromptsGetFolderById) | **GET** /api/2.0/ai/prompts/get-folder-by-id | Get folder by id |
| [**aiPromptsImportBundle()**](AIPromptsApi.md#aiPromptsImportBundle) | **POST** /api/2.0/ai/prompts/import-bundle | Import bundle |
| [**aiPromptsList()**](AIPromptsApi.md#aiPromptsList) | **GET** /api/2.0/ai/prompts/list | List |
| [**aiPromptsListFolders()**](AIPromptsApi.md#aiPromptsListFolders) | **GET** /api/2.0/ai/prompts/list-folders | List folders |
| [**aiPromptsMove()**](AIPromptsApi.md#aiPromptsMove) | **PUT** /api/2.0/ai/prompts/move | Move |
| [**aiPromptsRenameFolder()**](AIPromptsApi.md#aiPromptsRenameFolder) | **PUT** /api/2.0/ai/prompts/rename-folder | Rename folder |
| [**aiPromptsUpdate()**](AIPromptsApi.md#aiPromptsUpdate) | **PUT** /api/2.0/ai/prompts/update | Update |


## `aiPromptsCreate()`

```php
aiPromptsCreate($ai_create_prompt_input): \OpenAPI\Client\Model\AiPromptMutationResult
```

Create

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_create_prompt_input** | [**\OpenAPI\Client\Model\AiCreatePromptInput**](../Model/AiCreatePromptInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiPromptMutationResult**](../Model/AiPromptMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_create_prompt_input = new \OpenAPI\Client\Model\AiCreatePromptInput(); // \OpenAPI\Client\Model\AiCreatePromptInput

try {
    $result = $apiInstance->aiPromptsCreate($ai_create_prompt_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsCreateFolder()`

```php
aiPromptsCreateFolder($body): \OpenAPI\Client\Model\AiFolderMutationResult
```

Create folder

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-create-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderMutationResult**](../Model/AiFolderMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiPromptsCreateFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsDelete()`

```php
aiPromptsDelete($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-delete/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiPromptsDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsDeleteFolder()`

```php
aiPromptsDeleteFolder($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete folder

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-delete-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiPromptsDeleteFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsExport()`

```php
aiPromptsExport(): \OpenAPI\Client\Model\AiPromptBundle
```

Export

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-export/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiPromptBundle**](../Model/AiPromptBundle.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiPromptsExport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsExport: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsGetById()`

```php
aiPromptsGetById($id): \OpenAPI\Client\Model\AiPrompt
```

Get by id

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-get-by-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiPrompt**](../Model/AiPrompt.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->aiPromptsGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsGetById: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsGetFolderById()`

```php
aiPromptsGetFolderById($id): \OpenAPI\Client\Model\AiPromptFolder
```

Get folder by id

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-get-folder-by-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiPromptFolder**](../Model/AiPromptFolder.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->aiPromptsGetFolderById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsGetFolderById: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsImportBundle()`

```php
aiPromptsImportBundle($ai_prompts_import_bundle_request): \OpenAPI\Client\Model\AiImportResult
```

Import bundle

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-import-bundle/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_prompts_import_bundle_request** | [**\OpenAPI\Client\Model\AiPromptsImportBundleRequest**](../Model/AiPromptsImportBundleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiImportResult**](../Model/AiImportResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_prompts_import_bundle_request = new \OpenAPI\Client\Model\AiPromptsImportBundleRequest(); // \OpenAPI\Client\Model\AiPromptsImportBundleRequest

try {
    $result = $apiInstance->aiPromptsImportBundle($ai_prompts_import_bundle_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsImportBundle: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsList()`

```php
aiPromptsList($folder_id): \OpenAPI\Client\Model\AiPrompt[]
```

List

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-list/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiPrompt[]**](../Model/AiPrompt.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 'folder_id_example'; // string

try {
    $result = $apiInstance->aiPromptsList($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsListFolders()`

```php
aiPromptsListFolders(): \OpenAPI\Client\Model\AiPromptFolder[]
```

List folders

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-list-folders/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiPromptFolder[]**](../Model/AiPromptFolder.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiPromptsListFolders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsListFolders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsMove()`

```php
aiPromptsMove($ai_prompts_move_request): \OpenAPI\Client\Model\AiPromptMutationResult
```

Move

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-move/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_prompts_move_request** | [**\OpenAPI\Client\Model\AiPromptsMoveRequest**](../Model/AiPromptsMoveRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiPromptMutationResult**](../Model/AiPromptMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_prompts_move_request = new \OpenAPI\Client\Model\AiPromptsMoveRequest(); // \OpenAPI\Client\Model\AiPromptsMoveRequest

try {
    $result = $apiInstance->aiPromptsMove($ai_prompts_move_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsMove: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsRenameFolder()`

```php
aiPromptsRenameFolder($ai_prompts_rename_folder_request): \OpenAPI\Client\Model\AiFolderMutationResult
```

Rename folder

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-rename-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_prompts_rename_folder_request** | [**\OpenAPI\Client\Model\AiPromptsRenameFolderRequest**](../Model/AiPromptsRenameFolderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderMutationResult**](../Model/AiFolderMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_prompts_rename_folder_request = new \OpenAPI\Client\Model\AiPromptsRenameFolderRequest(); // \OpenAPI\Client\Model\AiPromptsRenameFolderRequest

try {
    $result = $apiInstance->aiPromptsRenameFolder($ai_prompts_rename_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsRenameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiPromptsUpdate()`

```php
aiPromptsUpdate($ai_prompts_update_request): \OpenAPI\Client\Model\AiPromptMutationResult
```

Update

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-prompts-update/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_prompts_update_request** | [**\OpenAPI\Client\Model\AiPromptsUpdateRequest**](../Model/AiPromptsUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiPromptMutationResult**](../Model/AiPromptMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_prompts_update_request = new \OpenAPI\Client\Model\AiPromptsUpdateRequest(); // \OpenAPI\Client\Model\AiPromptsUpdateRequest

try {
    $result = $apiInstance->aiPromptsUpdate($ai_prompts_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->aiPromptsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
