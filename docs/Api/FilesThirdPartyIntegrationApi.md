# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.ThirdPartyIntegrationApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteThirdParty()**](FilesThirdPartyIntegrationApi.md#deleteThirdParty) | **DELETE** /api/2.0/files/thirdparty/{providerId} |  |
| [**getAllProviders()**](FilesThirdPartyIntegrationApi.md#getAllProviders) | **GET** /api/2.0/files/thirdparty/providers |  |
| [**getBackupThirdPartyAccount()**](FilesThirdPartyIntegrationApi.md#getBackupThirdPartyAccount) | **GET** /api/2.0/files/thirdparty/backup |  |
| [**getCapabilities()**](FilesThirdPartyIntegrationApi.md#getCapabilities) | **GET** /api/2.0/files/thirdparty/capabilities |  |
| [**getCommonThirdPartyFolders()**](FilesThirdPartyIntegrationApi.md#getCommonThirdPartyFolders) | **GET** /api/2.0/files/thirdparty/common |  |
| [**getThirdPartyAccounts()**](FilesThirdPartyIntegrationApi.md#getThirdPartyAccounts) | **GET** /api/2.0/files/thirdparty |  |
| [**saveThirdParty()**](FilesThirdPartyIntegrationApi.md#saveThirdParty) | **POST** /api/2.0/files/thirdparty |  |
| [**saveThirdPartyBackup()**](FilesThirdPartyIntegrationApi.md#saveThirdPartyBackup) | **POST** /api/2.0/files/thirdparty/backup |  |


## `deleteThirdParty()`

```php
deleteThirdParty($provider_id): \OpenAPI\Client\Model\StringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-third-party/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **int**| The provider ID. | |

### Return type

[**\OpenAPI\Client\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider_id = 1234; // int | The provider ID.

try {
    $result = $apiInstance->deleteThirdParty($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->deleteThirdParty: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProviders()`

```php
getAllProviders(): \OpenAPI\Client\Model\ProviderArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-all-providers/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProviderArrayWrapper**](../Model/ProviderArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->getAllProviders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupThirdPartyAccount()`

```php
getBackupThirdPartyAccount(): \OpenAPI\Client\Model\FolderStringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backup-third-party-account/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FolderStringWrapper**](../Model/FolderStringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBackupThirdPartyAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->getBackupThirdPartyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCapabilities()`

```php
getCapabilities(): \OpenAPI\Client\Model\ArrayArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-capabilities/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ArrayArrayWrapper**](../Model/ArrayArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCapabilities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->getCapabilities: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommonThirdPartyFolders()`

```php
getCommonThirdPartyFolders(): \OpenAPI\Client\Model\FolderStringArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-common-third-party-folders/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FolderStringArrayWrapper**](../Model/FolderStringArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCommonThirdPartyFolders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->getCommonThirdPartyFolders: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThirdPartyAccounts()`

```php
getThirdPartyAccounts(): \OpenAPI\Client\Model\ThirdPartyParamsArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-third-party-accounts/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ThirdPartyParamsArrayWrapper**](../Model/ThirdPartyParamsArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getThirdPartyAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->getThirdPartyAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveThirdParty()`

```php
saveThirdParty($third_party_request_dto): \OpenAPI\Client\Model\FolderStringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-third-party/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **third_party_request_dto** | [**\OpenAPI\Client\Model\ThirdPartyRequestDto**](../Model/ThirdPartyRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderStringWrapper**](../Model/FolderStringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$third_party_request_dto = new \OpenAPI\Client\Model\ThirdPartyRequestDto(); // \OpenAPI\Client\Model\ThirdPartyRequestDto

try {
    $result = $apiInstance->saveThirdParty($third_party_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->saveThirdParty: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveThirdPartyBackup()`

```php
saveThirdPartyBackup($third_party_backup_request_dto): \OpenAPI\Client\Model\FolderStringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/save-third-party-backup/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **third_party_backup_request_dto** | [**\OpenAPI\Client\Model\ThirdPartyBackupRequestDto**](../Model/ThirdPartyBackupRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderStringWrapper**](../Model/FolderStringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThirdPartyIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$third_party_backup_request_dto = new \OpenAPI\Client\Model\ThirdPartyBackupRequestDto(); // \OpenAPI\Client\Model\ThirdPartyBackupRequestDto

try {
    $result = $apiInstance->saveThirdPartyBackup($third_party_backup_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyIntegrationApi->saveThirdPartyBackup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
