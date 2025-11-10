# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.SettingsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeAccessToThirdparty()**](FilesSettingsApi.md#changeAccessToThirdparty) | **PUT** /api/2.0/files/thirdparty |  |
| [**changeAutomaticallyCleanUp()**](FilesSettingsApi.md#changeAutomaticallyCleanUp) | **PUT** /api/2.0/files/settings/autocleanup |  |
| [**changeDefaultAccessRights()**](FilesSettingsApi.md#changeDefaultAccessRights) | **PUT** /api/2.0/files/settings/dafaultaccessrights |  |
| [**changeDeleteConfirm()**](FilesSettingsApi.md#changeDeleteConfirm) | **PUT** /api/2.0/files/changedeleteconfrim |  |
| [**changeDownloadZipFromBody()**](FilesSettingsApi.md#changeDownloadZipFromBody) | **PUT** /api/2.0/files/settings/downloadtargz |  |
| [**checkDocServiceUrl()**](FilesSettingsApi.md#checkDocServiceUrl) | **PUT** /api/2.0/files/docservice |  |
| [**displayFileExtension()**](FilesSettingsApi.md#displayFileExtension) | **PUT** /api/2.0/files/displayfileextension |  |
| [**displayRecent()**](FilesSettingsApi.md#displayRecent) | **PUT** /api/2.0/files/displayrecent |  |
| [**externalShare()**](FilesSettingsApi.md#externalShare) | **PUT** /api/2.0/files/settings/external |  |
| [**externalShareSocialMedia()**](FilesSettingsApi.md#externalShareSocialMedia) | **PUT** /api/2.0/files/settings/externalsocialmedia |  |
| [**forcesave()**](FilesSettingsApi.md#forcesave) | **PUT** /api/2.0/files/forcesave |  |
| [**getAutomaticallyCleanUp()**](FilesSettingsApi.md#getAutomaticallyCleanUp) | **GET** /api/2.0/files/settings/autocleanup |  |
| [**getDocServiceUrl()**](FilesSettingsApi.md#getDocServiceUrl) | **GET** /api/2.0/files/docservice |  |
| [**getFilesModule()**](FilesSettingsApi.md#getFilesModule) | **GET** /api/2.0/files/info |  |
| [**getFilesSettings()**](FilesSettingsApi.md#getFilesSettings) | **GET** /api/2.0/files/settings |  |
| [**hideConfirmCancelOperation()**](FilesSettingsApi.md#hideConfirmCancelOperation) | **PUT** /api/2.0/files/hideconfirmcanceloperation |  |
| [**hideConfirmConvert()**](FilesSettingsApi.md#hideConfirmConvert) | **PUT** /api/2.0/files/hideconfirmconvert |  |
| [**hideConfirmRoomLifetime()**](FilesSettingsApi.md#hideConfirmRoomLifetime) | **PUT** /api/2.0/files/hideconfirmroomlifetime |  |
| [**isAvailablePrivacyRoomSettings()**](FilesSettingsApi.md#isAvailablePrivacyRoomSettings) | **GET** /api/2.0/files/@privacy/available |  |
| [**keepNewFileName()**](FilesSettingsApi.md#keepNewFileName) | **PUT** /api/2.0/files/keepnewfilename |  |
| [**setOpenEditorInSameTab()**](FilesSettingsApi.md#setOpenEditorInSameTab) | **PUT** /api/2.0/files/settings/openeditorinsametab |  |
| [**storeForcesave()**](FilesSettingsApi.md#storeForcesave) | **PUT** /api/2.0/files/storeforcesave |  |
| [**storeOriginal()**](FilesSettingsApi.md#storeOriginal) | **PUT** /api/2.0/files/storeoriginal |  |
| [**updateFileIfExist()**](FilesSettingsApi.md#updateFileIfExist) | **PUT** /api/2.0/files/updateifexist |  |


## `changeAccessToThirdparty()`

```php
changeAccessToThirdparty($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-access-to-thirdparty/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->changeAccessToThirdparty($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->changeAccessToThirdparty: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeAutomaticallyCleanUp()`

```php
changeAutomaticallyCleanUp($auto_cleanup_request_dto): \OpenAPI\Client\Model\AutoCleanUpDataWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-automatically-clean-up/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_cleanup_request_dto** | [**\OpenAPI\Client\Model\AutoCleanupRequestDto**](../Model/AutoCleanupRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AutoCleanUpDataWrapper**](../Model/AutoCleanUpDataWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_cleanup_request_dto = new \OpenAPI\Client\Model\AutoCleanupRequestDto(); // \OpenAPI\Client\Model\AutoCleanupRequestDto

try {
    $result = $apiInstance->changeAutomaticallyCleanUp($auto_cleanup_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->changeAutomaticallyCleanUp: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeDefaultAccessRights()`

```php
changeDefaultAccessRights($request_body): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-default-access-rights/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Sharing rights (None, ReadWrite, Read, Restrict, Varies, Review, Comment, FillForms, CustomFilter, RoomAdmin, Editing, Collaborator). | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array(56); // int[] | Sharing rights (None, ReadWrite, Read, Restrict, Varies, Review, Comment, FillForms, CustomFilter, RoomAdmin, Editing, Collaborator).

try {
    $result = $apiInstance->changeDefaultAccessRights($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->changeDefaultAccessRights: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeDeleteConfirm()`

```php
changeDeleteConfirm($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-delete-confirm/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->changeDeleteConfirm($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->changeDeleteConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeDownloadZipFromBody()`

```php
changeDownloadZipFromBody($display_request_dto): \OpenAPI\Client\Model\ICompressWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-download-zip-from-body/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_request_dto** | [**\OpenAPI\Client\Model\DisplayRequestDto**](../Model/DisplayRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ICompressWrapper**](../Model/ICompressWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$display_request_dto = new \OpenAPI\Client\Model\DisplayRequestDto(); // \OpenAPI\Client\Model\DisplayRequestDto

try {
    $result = $apiInstance->changeDownloadZipFromBody($display_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->changeDownloadZipFromBody: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDocServiceUrl()`

```php
checkDocServiceUrl($check_doc_service_url_request_dto): \OpenAPI\Client\Model\DocServiceUrlWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-doc-service-url/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_doc_service_url_request_dto** | [**\OpenAPI\Client\Model\CheckDocServiceUrlRequestDto**](../Model/CheckDocServiceUrlRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DocServiceUrlWrapper**](../Model/DocServiceUrlWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_doc_service_url_request_dto = new \OpenAPI\Client\Model\CheckDocServiceUrlRequestDto(); // \OpenAPI\Client\Model\CheckDocServiceUrlRequestDto

try {
    $result = $apiInstance->checkDocServiceUrl($check_doc_service_url_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->checkDocServiceUrl: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `displayFileExtension()`

```php
displayFileExtension($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/display-file-extension/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->displayFileExtension($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->displayFileExtension: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `displayRecent()`

```php
displayRecent($display_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/display-recent/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_request_dto** | [**\OpenAPI\Client\Model\DisplayRequestDto**](../Model/DisplayRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$display_request_dto = new \OpenAPI\Client\Model\DisplayRequestDto(); // \OpenAPI\Client\Model\DisplayRequestDto

try {
    $result = $apiInstance->displayRecent($display_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->displayRecent: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalShare()`

```php
externalShare($display_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/external-share/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_request_dto** | [**\OpenAPI\Client\Model\DisplayRequestDto**](../Model/DisplayRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$display_request_dto = new \OpenAPI\Client\Model\DisplayRequestDto(); // \OpenAPI\Client\Model\DisplayRequestDto

try {
    $result = $apiInstance->externalShare($display_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->externalShare: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalShareSocialMedia()`

```php
externalShareSocialMedia($display_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/external-share-social-media/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_request_dto** | [**\OpenAPI\Client\Model\DisplayRequestDto**](../Model/DisplayRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$display_request_dto = new \OpenAPI\Client\Model\DisplayRequestDto(); // \OpenAPI\Client\Model\DisplayRequestDto

try {
    $result = $apiInstance->externalShareSocialMedia($display_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->externalShareSocialMedia: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forcesave()`

```php
forcesave(): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/forcesave/).

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



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->forcesave();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->forcesave: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticallyCleanUp()`

```php
getAutomaticallyCleanUp(): \OpenAPI\Client\Model\AutoCleanUpDataWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-automatically-clean-up/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AutoCleanUpDataWrapper**](../Model/AutoCleanUpDataWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAutomaticallyCleanUp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getAutomaticallyCleanUp: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocServiceUrl()`

```php
getDocServiceUrl($version): \OpenAPI\Client\Model\DocServiceUrlWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-doc-service-url/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **bool**| Specifies whether to return the editor version or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DocServiceUrlWrapper**](../Model/DocServiceUrlWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = true; // bool | Specifies whether to return the editor version or not.

try {
    $result = $apiInstance->getDocServiceUrl($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDocServiceUrl: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesModule()`

```php
getFilesModule(): \OpenAPI\Client\Model\ModuleWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-files-module/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ModuleWrapper**](../Model/ModuleWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFilesModule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getFilesModule: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesSettings()`

```php
getFilesSettings(): \OpenAPI\Client\Model\FilesSettingsWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-files-settings/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FilesSettingsWrapper**](../Model/FilesSettingsWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFilesSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getFilesSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideConfirmCancelOperation()`

```php
hideConfirmCancelOperation($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/hide-confirm-cancel-operation/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->hideConfirmCancelOperation($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->hideConfirmCancelOperation: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideConfirmConvert()`

```php
hideConfirmConvert($hide_confirm_convert_request_dto): \OpenAPI\Client\Model\ModuleWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/hide-confirm-convert/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hide_confirm_convert_request_dto** | [**\OpenAPI\Client\Model\HideConfirmConvertRequestDto**](../Model/HideConfirmConvertRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModuleWrapper**](../Model/ModuleWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hide_confirm_convert_request_dto = new \OpenAPI\Client\Model\HideConfirmConvertRequestDto(); // \OpenAPI\Client\Model\HideConfirmConvertRequestDto

try {
    $result = $apiInstance->hideConfirmConvert($hide_confirm_convert_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->hideConfirmConvert: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideConfirmRoomLifetime()`

```php
hideConfirmRoomLifetime($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/hide-confirm-room-lifetime/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->hideConfirmRoomLifetime($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->hideConfirmRoomLifetime: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isAvailablePrivacyRoomSettings()`

```php
isAvailablePrivacyRoomSettings(): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/is-available-privacy-room-settings/).

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



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->isAvailablePrivacyRoomSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->isAvailablePrivacyRoomSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keepNewFileName()`

```php
keepNewFileName($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/keep-new-file-name/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->keepNewFileName($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->keepNewFileName: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOpenEditorInSameTab()`

```php
setOpenEditorInSameTab($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-open-editor-in-same-tab/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->setOpenEditorInSameTab($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOpenEditorInSameTab: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeForcesave()`

```php
storeForcesave(): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/store-forcesave/).

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



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->storeForcesave();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->storeForcesave: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeOriginal()`

```php
storeOriginal($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/store-original/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->storeOriginal($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->storeOriginal: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileIfExist()`

```php
updateFileIfExist($settings_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-file-if-exist/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_request_dto** | [**\OpenAPI\Client\Model\SettingsRequestDto**](../Model/SettingsRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_request_dto = new \OpenAPI\Client\Model\SettingsRequestDto(); // \OpenAPI\Client\Model\SettingsRequestDto

try {
    $result = $apiInstance->updateFileIfExist($settings_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateFileIfExist: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
