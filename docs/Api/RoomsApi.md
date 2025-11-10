# OnlyOffice\DocSpaceApiSdk.OpenAPI\Client\Api.RoomsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRoomTags()**](RoomsApi.md#addRoomTags) | **PUT** /api/2.0/files/rooms/{id}/tags |  |
| [**archiveRoom()**](RoomsApi.md#archiveRoom) | **PUT** /api/2.0/files/rooms/{id}/archive |  |
| [**changeRoomCover()**](RoomsApi.md#changeRoomCover) | **POST** /api/2.0/files/rooms/{id}/cover |  |
| [**createRoom()**](RoomsApi.md#createRoom) | **POST** /api/2.0/files/rooms |  |
| [**createRoomFromTemplate()**](RoomsApi.md#createRoomFromTemplate) | **POST** /api/2.0/files/rooms/fromtemplate |  |
| [**createRoomLogo()**](RoomsApi.md#createRoomLogo) | **POST** /api/2.0/files/rooms/{id}/logo |  |
| [**createRoomTag()**](RoomsApi.md#createRoomTag) | **POST** /api/2.0/files/tags |  |
| [**createRoomTemplate()**](RoomsApi.md#createRoomTemplate) | **POST** /api/2.0/files/roomtemplate |  |
| [**createRoomThirdParty()**](RoomsApi.md#createRoomThirdParty) | **POST** /api/2.0/files/rooms/thirdparty/{id} |  |
| [**deleteCustomTags()**](RoomsApi.md#deleteCustomTags) | **DELETE** /api/2.0/files/tags |  |
| [**deleteRoom()**](RoomsApi.md#deleteRoom) | **DELETE** /api/2.0/files/rooms/{id} |  |
| [**deleteRoomLogo()**](RoomsApi.md#deleteRoomLogo) | **DELETE** /api/2.0/files/rooms/{id}/logo |  |
| [**deleteRoomTags()**](RoomsApi.md#deleteRoomTags) | **DELETE** /api/2.0/files/rooms/{id}/tags |  |
| [**getNewRoomItems()**](RoomsApi.md#getNewRoomItems) | **GET** /api/2.0/files/rooms/{id}/news |  |
| [**getPublicSettings()**](RoomsApi.md#getPublicSettings) | **GET** /api/2.0/files/roomtemplate/{id}/public |  |
| [**getRoomCovers()**](RoomsApi.md#getRoomCovers) | **GET** /api/2.0/files/rooms/covers |  |
| [**getRoomCreatingStatus()**](RoomsApi.md#getRoomCreatingStatus) | **GET** /api/2.0/files/rooms/fromtemplate/status |  |
| [**getRoomIndexExport()**](RoomsApi.md#getRoomIndexExport) | **GET** /api/2.0/files/rooms/indexexport |  |
| [**getRoomInfo()**](RoomsApi.md#getRoomInfo) | **GET** /api/2.0/files/rooms/{id} |  |
| [**getRoomLinks()**](RoomsApi.md#getRoomLinks) | **GET** /api/2.0/files/rooms/{id}/links |  |
| [**getRoomSecurityInfo()**](RoomsApi.md#getRoomSecurityInfo) | **GET** /api/2.0/files/rooms/{id}/share |  |
| [**getRoomTagsInfo()**](RoomsApi.md#getRoomTagsInfo) | **GET** /api/2.0/files/tags |  |
| [**getRoomTemplateCreatingStatus()**](RoomsApi.md#getRoomTemplateCreatingStatus) | **GET** /api/2.0/files/roomtemplate/status |  |
| [**getRoomsFolder()**](RoomsApi.md#getRoomsFolder) | **GET** /api/2.0/files/rooms |  |
| [**getRoomsNewItems()**](RoomsApi.md#getRoomsNewItems) | **GET** /api/2.0/files/rooms/news |  |
| [**getRoomsPrimaryExternalLink()**](RoomsApi.md#getRoomsPrimaryExternalLink) | **GET** /api/2.0/files/rooms/{id}/link |  |
| [**pinRoom()**](RoomsApi.md#pinRoom) | **PUT** /api/2.0/files/rooms/{id}/pin |  |
| [**reorderRoom()**](RoomsApi.md#reorderRoom) | **PUT** /api/2.0/files/rooms/{id}/reorder |  |
| [**resendEmailInvitations()**](RoomsApi.md#resendEmailInvitations) | **POST** /api/2.0/files/rooms/{id}/resend |  |
| [**setPublicSettings()**](RoomsApi.md#setPublicSettings) | **PUT** /api/2.0/files/roomtemplate/public |  |
| [**setRoomLink()**](RoomsApi.md#setRoomLink) | **PUT** /api/2.0/files/rooms/{id}/links |  |
| [**setRoomSecurity()**](RoomsApi.md#setRoomSecurity) | **PUT** /api/2.0/files/rooms/{id}/share |  |
| [**startRoomIndexExport()**](RoomsApi.md#startRoomIndexExport) | **POST** /api/2.0/files/rooms/{id}/indexexport |  |
| [**terminateRoomIndexExport()**](RoomsApi.md#terminateRoomIndexExport) | **DELETE** /api/2.0/files/rooms/indexexport |  |
| [**unarchiveRoom()**](RoomsApi.md#unarchiveRoom) | **PUT** /api/2.0/files/rooms/{id}/unarchive |  |
| [**unpinRoom()**](RoomsApi.md#unpinRoom) | **PUT** /api/2.0/files/rooms/{id}/unpin |  |
| [**updateRoom()**](RoomsApi.md#updateRoom) | **PUT** /api/2.0/files/rooms/{id} |  |
| [**uploadRoomLogo()**](RoomsApi.md#uploadRoomLogo) | **POST** /api/2.0/files/logos |  |


## `addRoomTags()`

```php
addRoomTags($id, $batch_tags_request_dto): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-room-tags/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room Id. | |
| **batch_tags_request_dto** | [**\OpenAPI\Client\Model\BatchTagsRequestDto**](../Model/BatchTagsRequestDto.md)| The parameters for managing tags. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room Id.
$batch_tags_request_dto = new \OpenAPI\Client\Model\BatchTagsRequestDto(); // \OpenAPI\Client\Model\BatchTagsRequestDto | The parameters for managing tags.

try {
    $result = $apiInstance->addRoomTags($id, $batch_tags_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->addRoomTags: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveRoom()`

```php
archiveRoom($id, $archive_room_request): \OpenAPI\Client\Model\FileOperationWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/archive-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **archive_room_request** | [**\OpenAPI\Client\Model\ArchiveRoomRequest**](../Model/ArchiveRoomRequest.md)| The parameters for archiving a room. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationWrapper**](../Model/FileOperationWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$archive_room_request = new \OpenAPI\Client\Model\ArchiveRoomRequest(); // \OpenAPI\Client\Model\ArchiveRoomRequest | The parameters for archiving a room.

try {
    $result = $apiInstance->archiveRoom($id, $archive_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->archiveRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeRoomCover()`

```php
changeRoomCover($id, $cover_request_dto): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/change-room-cover/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **cover_request_dto** | [**\OpenAPI\Client\Model\CoverRequestDto**](../Model/CoverRequestDto.md)| The request parameters to change the room cover. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$cover_request_dto = new \OpenAPI\Client\Model\CoverRequestDto(); // \OpenAPI\Client\Model\CoverRequestDto | The request parameters to change the room cover.

try {
    $result = $apiInstance->changeRoomCover($id, $cover_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->changeRoomCover: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoom()`

```php
createRoom($create_room_request_dto): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_room_request_dto** | [**\OpenAPI\Client\Model\CreateRoomRequestDto**](../Model/CreateRoomRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_room_request_dto = new \OpenAPI\Client\Model\CreateRoomRequestDto(); // \OpenAPI\Client\Model\CreateRoomRequestDto

try {
    $result = $apiInstance->createRoom($create_room_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomFromTemplate()`

```php
createRoomFromTemplate($create_room_from_template_dto): \OpenAPI\Client\Model\RoomFromTemplateStatusWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room-from-template/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_room_from_template_dto** | [**\OpenAPI\Client\Model\CreateRoomFromTemplateDto**](../Model/CreateRoomFromTemplateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RoomFromTemplateStatusWrapper**](../Model/RoomFromTemplateStatusWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_room_from_template_dto = new \OpenAPI\Client\Model\CreateRoomFromTemplateDto(); // \OpenAPI\Client\Model\CreateRoomFromTemplateDto

try {
    $result = $apiInstance->createRoomFromTemplate($create_room_from_template_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoomFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomLogo()`

```php
createRoomLogo($id, $logo_request): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room-logo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **logo_request** | [**\OpenAPI\Client\Model\LogoRequest**](../Model/LogoRequest.md)| The logo request parameters. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$logo_request = new \OpenAPI\Client\Model\LogoRequest(); // \OpenAPI\Client\Model\LogoRequest | The logo request parameters.

try {
    $result = $apiInstance->createRoomLogo($id, $logo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoomLogo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomTag()`

```php
createRoomTag($create_tag_request_dto): \OpenAPI\Client\Model\ObjectWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room-tag/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tag_request_dto** | [**\OpenAPI\Client\Model\CreateTagRequestDto**](../Model/CreateTagRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectWrapper**](../Model/ObjectWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_tag_request_dto = new \OpenAPI\Client\Model\CreateTagRequestDto(); // \OpenAPI\Client\Model\CreateTagRequestDto

try {
    $result = $apiInstance->createRoomTag($create_tag_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoomTag: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomTemplate()`

```php
createRoomTemplate($room_template_dto): \OpenAPI\Client\Model\RoomTemplateStatusWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room-template/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_template_dto** | [**\OpenAPI\Client\Model\RoomTemplateDto**](../Model/RoomTemplateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RoomTemplateStatusWrapper**](../Model/RoomTemplateStatusWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_template_dto = new \OpenAPI\Client\Model\RoomTemplateDto(); // \OpenAPI\Client\Model\RoomTemplateDto

try {
    $result = $apiInstance->createRoomTemplate($room_template_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoomTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomThirdParty()`

```php
createRoomThirdParty($id, $create_third_party_room): \OpenAPI\Client\Model\FolderStringWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-room-third-party/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the folder in the third-party storage in which the contents of the room will be stored. | |
| **create_third_party_room** | [**\OpenAPI\Client\Model\CreateThirdPartyRoom**](../Model/CreateThirdPartyRoom.md)| The third-party room information. | |

### Return type

[**\OpenAPI\Client\Model\FolderStringWrapper**](../Model/FolderStringWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // string | The ID of the folder in the third-party storage in which the contents of the room will be stored.
$create_third_party_room = new \OpenAPI\Client\Model\CreateThirdPartyRoom(); // \OpenAPI\Client\Model\CreateThirdPartyRoom | The third-party room information.

try {
    $result = $apiInstance->createRoomThirdParty($id, $create_third_party_room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoomThirdParty: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomTags()`

```php
deleteCustomTags($batch_tags_request_dto)
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-custom-tags/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_tags_request_dto** | [**\OpenAPI\Client\Model\BatchTagsRequestDto**](../Model/BatchTagsRequestDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_tags_request_dto = new \OpenAPI\Client\Model\BatchTagsRequestDto(); // \OpenAPI\Client\Model\BatchTagsRequestDto

try {
    $apiInstance->deleteCustomTags($batch_tags_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteCustomTags: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoom()`

```php
deleteRoom($id, $delete_room_request): \OpenAPI\Client\Model\FileOperationWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **delete_room_request** | [**\OpenAPI\Client\Model\DeleteRoomRequest**](../Model/DeleteRoomRequest.md)| The parameters for deleting a room. | |

### Return type

[**\OpenAPI\Client\Model\FileOperationWrapper**](../Model/FileOperationWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$delete_room_request = new \OpenAPI\Client\Model\DeleteRoomRequest(); // \OpenAPI\Client\Model\DeleteRoomRequest | The parameters for deleting a room.

try {
    $result = $apiInstance->deleteRoom($id, $delete_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoomLogo()`

```php
deleteRoomLogo($id): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-room-logo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->deleteRoomLogo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoomLogo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoomTags()`

```php
deleteRoomTags($id, $batch_tags_request_dto): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-room-tags/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room Id. | |
| **batch_tags_request_dto** | [**\OpenAPI\Client\Model\BatchTagsRequestDto**](../Model/BatchTagsRequestDto.md)| The parameters for managing tags. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room Id.
$batch_tags_request_dto = new \OpenAPI\Client\Model\BatchTagsRequestDto(); // \OpenAPI\Client\Model\BatchTagsRequestDto | The parameters for managing tags.

try {
    $result = $apiInstance->deleteRoomTags($id, $batch_tags_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoomTags: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewRoomItems()`

```php
getNewRoomItems($id): \OpenAPI\Client\Model\NewItemsFileEntryBaseArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-new-room-items/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\NewItemsFileEntryBaseArrayWrapper**](../Model/NewItemsFileEntryBaseArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->getNewRoomItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getNewRoomItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicSettings()`

```php
getPublicSettings($id): \OpenAPI\Client\Model\BooleanWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-public-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room template ID. | |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room template ID.

try {
    $result = $apiInstance->getPublicSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getPublicSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomCovers()`

```php
getRoomCovers(): \OpenAPI\Client\Model\CoversResultArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-covers/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CoversResultArrayWrapper**](../Model/CoversResultArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoomCovers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomCovers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomCreatingStatus()`

```php
getRoomCreatingStatus(): \OpenAPI\Client\Model\RoomFromTemplateStatusWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-creating-status/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RoomFromTemplateStatusWrapper**](../Model/RoomFromTemplateStatusWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoomCreatingStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomCreatingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomIndexExport()`

```php
getRoomIndexExport(): \OpenAPI\Client\Model\DocumentBuilderTaskWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-index-export/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DocumentBuilderTaskWrapper**](../Model/DocumentBuilderTaskWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoomIndexExport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomIndexExport: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomInfo()`

```php
getRoomInfo($id): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->getRoomInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomLinks()`

```php
getRoomLinks($id, $type): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-links/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **type** | [**\OpenAPI\Client\Model\LinkType**](../Model/.md)| The link type. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LinkType(); // \OpenAPI\Client\Model\LinkType | The link type.

try {
    $result = $apiInstance->getRoomLinks($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomLinks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomSecurityInfo()`

```php
getRoomSecurityInfo($id, $filter_type, $count, $start_index, $filter_value): \OpenAPI\Client\Model\FileShareArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-security-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **filter_type** | [**\OpenAPI\Client\Model\ShareFilterType**](../Model/.md)| The filter type of the access rights. | [optional] |
| **count** | **int**| The number of items to be retrieved or processed. | [optional] |
| **start_index** | **int**| The starting index of the items to retrieve in a paginated request. | [optional] |
| **filter_value** | **string**| The text filter value used for filtering room security information. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileShareArrayWrapper**](../Model/FileShareArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$filter_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ShareFilterType(); // \OpenAPI\Client\Model\ShareFilterType | The filter type of the access rights.
$count = 1234; // int | The number of items to be retrieved or processed.
$start_index = 1234; // int | The starting index of the items to retrieve in a paginated request.
$filter_value = some text; // string | The text filter value used for filtering room security information.

try {
    $result = $apiInstance->getRoomSecurityInfo($id, $filter_type, $count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomSecurityInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomTagsInfo()`

```php
getRoomTagsInfo($count, $start_index, $filter_value): \OpenAPI\Client\Model\ObjectArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-tags-info/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**| Gets or sets the number of tag results to retrieve.  This property specifies the maximum amount of tag data to be included in the result set. | [optional] |
| **start_index** | **int**| Represents the starting index from which the tags&#39; information will be retrieved.  This property is used to define the offset for pagination when retrieving a list of tags. It determines  the point in the data set from which the retrieval begins. | [optional] |
| **filter_value** | **string**| Gets or sets the text value used for searching tags.  This property is typically used as a filter value when retrieving tag information. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectArrayWrapper**](../Model/ObjectArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 1234; // int | Gets or sets the number of tag results to retrieve.  This property specifies the maximum amount of tag data to be included in the result set.
$start_index = 1234; // int | Represents the starting index from which the tags' information will be retrieved.  This property is used to define the offset for pagination when retrieving a list of tags. It determines  the point in the data set from which the retrieval begins.
$filter_value = some text; // string | Gets or sets the text value used for searching tags.  This property is typically used as a filter value when retrieving tag information.

try {
    $result = $apiInstance->getRoomTagsInfo($count, $start_index, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomTagsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomTemplateCreatingStatus()`

```php
getRoomTemplateCreatingStatus(): \OpenAPI\Client\Model\RoomTemplateStatusWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-room-template-creating-status/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RoomTemplateStatusWrapper**](../Model/RoomTemplateStatusWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoomTemplateCreatingStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomTemplateCreatingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomsFolder()`

```php
getRoomsFolder($type, $subject_id, $search_area, $without_tags, $tags, $exclude_subject, $provider, $subject_filter, $quota_filter, $storage_filter, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\FolderContentIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-rooms-folder/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\OpenAPI\Client\Model\RoomType[]**](../Model/\OpenAPI\Client\Model\RoomType.md)| The filter by room type. | [optional] |
| **subject_id** | **string**| The filter by user ID. | [optional] |
| **search_area** | [**\OpenAPI\Client\Model\SearchArea**](../Model/.md)| The room search area (Active, Archive, Any, Recent by links). | [optional] |
| **without_tags** | **bool**| Specifies whether to search by tags or not. | [optional] |
| **tags** | **string**| The tags in the serialized format. | [optional] |
| **exclude_subject** | **bool**| Specifies whether to exclude search by user or group ID. | [optional] |
| **provider** | [**\OpenAPI\Client\Model\ProviderFilter**](../Model/.md)| The filter by provider name (None, Box, DropBox, GoogleDrive, kDrive, OneDrive, SharePoint, WebDav, Yandex, Storage). | [optional] |
| **subject_filter** | [**\OpenAPI\Client\Model\SubjectFilter**](../Model/.md)| The filter by user (Owner - 0, Member - 1). | [optional] |
| **quota_filter** | [**\OpenAPI\Client\Model\QuotaFilter**](../Model/.md)| The filter by quota (All - 0, Default - 1, Custom - 2). | [optional] |
| **storage_filter** | [**\OpenAPI\Client\Model\StorageFilter**](../Model/.md)| The filter by storage (None - 0, Internal - 1, ThirdParty - 2). | [optional] |
| **count** | **int**| Specifies the maximum number of items to retrieve. | [optional] |
| **start_index** | **int**| The index from which to start retrieving the room content. | [optional] |
| **sort_by** | **string**| Specifies the field by which the room content should be sorted. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The order in which the results are sorted. | [optional] |
| **filter_value** | **string**| The text filter value used to refine search or query operations. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderContentIntegerWrapper**](../Model/FolderContentIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RoomType()); // \OpenAPI\Client\Model\RoomType[] | The filter by room type.
$subject_id = some text; // string | The filter by user ID.
$search_area = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SearchArea(); // \OpenAPI\Client\Model\SearchArea | The room search area (Active, Archive, Any, Recent by links).
$without_tags = true; // bool | Specifies whether to search by tags or not.
$tags = some text; // string | The tags in the serialized format.
$exclude_subject = true; // bool | Specifies whether to exclude search by user or group ID.
$provider = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProviderFilter(); // \OpenAPI\Client\Model\ProviderFilter | The filter by provider name (None, Box, DropBox, GoogleDrive, kDrive, OneDrive, SharePoint, WebDav, Yandex, Storage).
$subject_filter = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubjectFilter(); // \OpenAPI\Client\Model\SubjectFilter | The filter by user (Owner - 0, Member - 1).
$quota_filter = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\QuotaFilter(); // \OpenAPI\Client\Model\QuotaFilter | The filter by quota (All - 0, Default - 1, Custom - 2).
$storage_filter = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\StorageFilter(); // \OpenAPI\Client\Model\StorageFilter | The filter by storage (None - 0, Internal - 1, ThirdParty - 2).
$count = 1234; // int | Specifies the maximum number of items to retrieve.
$start_index = 1234; // int | The index from which to start retrieving the room content.
$sort_by = some text; // string | Specifies the field by which the room content should be sorted.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | The order in which the results are sorted.
$filter_value = some text; // string | The text filter value used to refine search or query operations.

try {
    $result = $apiInstance->getRoomsFolder($type, $subject_id, $search_area, $without_tags, $tags, $exclude_subject, $provider, $subject_filter, $quota_filter, $storage_filter, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomsFolder: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomsNewItems()`

```php
getRoomsNewItems(): \OpenAPI\Client\Model\NewItemsRoomNewItemsArrayWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-rooms-new-items/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NewItemsRoomNewItemsArrayWrapper**](../Model/NewItemsRoomNewItemsArrayWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoomsNewItems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomsNewItems: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomsPrimaryExternalLink()`

```php
getRoomsPrimaryExternalLink($id): \OpenAPI\Client\Model\FileShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-rooms-primary-external-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->getRoomsPrimaryExternalLink($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomsPrimaryExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pinRoom()`

```php
pinRoom($id): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/pin-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->pinRoom($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->pinRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reorderRoom()`

```php
reorderRoom($id): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/reorder-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->reorderRoom($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->reorderRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendEmailInvitations()`

```php
resendEmailInvitations($id, $user_invitation)
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/resend-email-invitations/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **user_invitation** | [**\OpenAPI\Client\Model\UserInvitation**](../Model/UserInvitation.md)| The user invitation parameters. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$user_invitation = new \OpenAPI\Client\Model\UserInvitation(); // \OpenAPI\Client\Model\UserInvitation | The user invitation parameters.

try {
    $apiInstance->resendEmailInvitations($id, $user_invitation);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->resendEmailInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPublicSettings()`

```php
setPublicSettings($set_public_dto)
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-public-settings/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_public_dto** | [**\OpenAPI\Client\Model\SetPublicDto**](../Model/SetPublicDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_public_dto = new \OpenAPI\Client\Model\SetPublicDto(); // \OpenAPI\Client\Model\SetPublicDto

try {
    $apiInstance->setPublicSettings($set_public_dto);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->setPublicSettings: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRoomLink()`

```php
setRoomLink($id, $room_link_request): \OpenAPI\Client\Model\FileShareWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-room-link/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **room_link_request** | [**\OpenAPI\Client\Model\RoomLinkRequest**](../Model/RoomLinkRequest.md)| The room link parameters. | |

### Return type

[**\OpenAPI\Client\Model\FileShareWrapper**](../Model/FileShareWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$room_link_request = new \OpenAPI\Client\Model\RoomLinkRequest(); // \OpenAPI\Client\Model\RoomLinkRequest | The room link parameters.

try {
    $result = $apiInstance->setRoomLink($id, $room_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->setRoomLink: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRoomSecurity()`

```php
setRoomSecurity($id, $room_invitation_request): \OpenAPI\Client\Model\RoomSecurityWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-room-security/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **room_invitation_request** | [**\OpenAPI\Client\Model\RoomInvitationRequest**](../Model/RoomInvitationRequest.md)| The room invitation request. | |

### Return type

[**\OpenAPI\Client\Model\RoomSecurityWrapper**](../Model/RoomSecurityWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$room_invitation_request = new \OpenAPI\Client\Model\RoomInvitationRequest(); // \OpenAPI\Client\Model\RoomInvitationRequest | The room invitation request.

try {
    $result = $apiInstance->setRoomSecurity($id, $room_invitation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->setRoomSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startRoomIndexExport()`

```php
startRoomIndexExport($id): \OpenAPI\Client\Model\DocumentBuilderTaskWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-room-index-export/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\DocumentBuilderTaskWrapper**](../Model/DocumentBuilderTaskWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->startRoomIndexExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->startRoomIndexExport: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateRoomIndexExport()`

```php
terminateRoomIndexExport()
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/terminate-room-index-export/).

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->terminateRoomIndexExport();
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->terminateRoomIndexExport: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unarchiveRoom()`

```php
unarchiveRoom($id, $archive_room_request): \OpenAPI\Client\Model\FileOperationWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/unarchive-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **archive_room_request** | [**\OpenAPI\Client\Model\ArchiveRoomRequest**](../Model/ArchiveRoomRequest.md)| The parameters for archiving a room. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileOperationWrapper**](../Model/FileOperationWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$archive_room_request = new \OpenAPI\Client\Model\ArchiveRoomRequest(); // \OpenAPI\Client\Model\ArchiveRoomRequest | The parameters for archiving a room.

try {
    $result = $apiInstance->unarchiveRoom($id, $archive_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->unarchiveRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpinRoom()`

```php
unpinRoom($id): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/unpin-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.

try {
    $result = $apiInstance->unpinRoom($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->unpinRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoom()`

```php
updateRoom($id, $update_room_request): \OpenAPI\Client\Model\FolderIntegerWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-room/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The room ID. | |
| **update_room_request** | [**\OpenAPI\Client\Model\UpdateRoomRequest**](../Model/UpdateRoomRequest.md)| The request parameters for updating a room. | |

### Return type

[**\OpenAPI\Client\Model\FolderIntegerWrapper**](../Model/FolderIntegerWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9846; // int | The room ID.
$update_room_request = new \OpenAPI\Client\Model\UpdateRoomRequest(); // \OpenAPI\Client\Model\UpdateRoomRequest | The request parameters for updating a room.

try {
    $result = $apiInstance->updateRoom($id, $update_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadRoomLogo()`

```php
uploadRoomLogo($form_collection): \OpenAPI\Client\Model\UploadResultWrapper
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/upload-room-logo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_collection** | [**\OpenAPI\Client\Model\KeyValuePairStringStringValues[]**](../Model/\OpenAPI\Client\Model\KeyValuePairStringStringValues.md)| The image data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UploadResultWrapper**](../Model/UploadResultWrapper.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_collection = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\KeyValuePairStringStringValues()); // \OpenAPI\Client\Model\KeyValuePairStringStringValues[] | The image data.

try {
    $result = $apiInstance->uploadRoomLogo($form_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->uploadRoomLogo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
