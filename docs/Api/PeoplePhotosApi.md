# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.PhotosApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMemberPhotoThumbnails()**](PeoplePhotosApi.md#createMemberPhotoThumbnails) | **POST** /api/2.0/people/{userId}/photo/thumbnails | Create photo thumbnails |
| [**deleteMemberPhoto()**](PeoplePhotosApi.md#deleteMemberPhoto) | **DELETE** /api/2.0/people/{userId}/photo | Delete a user photo |
| [**getMemberPhoto()**](PeoplePhotosApi.md#getMemberPhoto) | **GET** /api/2.0/people/{userId}/photo | Get a user photo |
| [**updateMemberPhoto()**](PeoplePhotosApi.md#updateMemberPhoto) | **PUT** /api/2.0/people/{userId}/photo | Update a user photo |
| [**uploadMemberPhoto()**](PeoplePhotosApi.md#uploadMemberPhoto) | **POST** /api/2.0/people/{userId}/photo | Upload a user photo |


## `createMemberPhotoThumbnails()`

```php
createMemberPhotoThumbnails($user_id, $thumbnails_request): \OpenAPI\Client\Model\ThumbnailsDataWrapper
```

Create photo thumbnails
Crops the avatar of a profile to the rectangle given in the request and rebuilds all of its thumbnail sizes,  which is the second step of changing an avatar by hand.  It works in two modes: with `tmpFile` it takes the temporary image  `POST api/2.0/people/{userId}/photo` produced with `autosave` off, makes the cropped result the main photo and  then discards the temporary file, and without `tmpFile` it re-crops the photo the profile already has.  A caller may only do this to their own profile - the ID in the route has to be the calling account, and an  administrator gets 403 for anybody else - and the account must be allowed to edit its own profile.  The call replaces the stored photo, so the previous crop is lost, and it can be repeated with new coordinates  as often as needed.  Passing `width` and `height` as 0 together with `tmpFile` keeps the whole uploaded image instead of cropping  it.  The answer holds the URLs of every generated size, the same shape `GET api/2.0/people/{userId}/photo`  returns.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-member-photo-thumbnails/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The profile whose avatar is cropped, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner. | |
| **thumbnails_request** | [**\OpenAPI\Client\Model\ThumbnailsRequest**](../Model/ThumbnailsRequest.md)| The crop rectangle, and optionally the temporary image to crop. | |

### Return type

[**\OpenAPI\Client\Model\ThumbnailsDataWrapper**](../Model/ThumbnailsDataWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\PhotosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The profile whose avatar is cropped, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner.
$thumbnails_request = new \OpenAPI\Client\Model\ThumbnailsRequest(); // \OpenAPI\Client\Model\ThumbnailsRequest | The crop rectangle, and optionally the temporary image to crop.

try {
    $result = $apiInstance->createMemberPhotoThumbnails($user_id, $thumbnails_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotosApi->createMemberPhotoThumbnails: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMemberPhoto()`

```php
deleteMemberPhoto($user_id): \OpenAPI\Client\Model\ThumbnailsDataWrapper
```

Delete a user photo
Removes the avatar of a profile, so that the profile falls back to the default placeholder image.  A caller may only do this to their own profile - the ID in the route has to be the calling account, and an  administrator gets 403 for anybody else - and the account must be allowed to edit its own profile.  The removal is permanent and cannot be undone: the stored image and all of its sizes are deleted, and a new  avatar has to be uploaded through `POST api/2.0/people/{userId}/photo` to replace it.  The call is idempotent, so removing an avatar from a profile that has none succeeds as well.  The answer still holds the URLs of every size, now pointing at the default image.  Raises the `user.updated` webhook even when the profile had no avatar.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-member-photo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The profile whose avatar the operation addresses, taken from the route. Either the ID of the account or its  user name is accepted. Reading a photo works for any account the caller may see, while deleting one only  works for the calling account itself. | |

### Return type

[**\OpenAPI\Client\Model\ThumbnailsDataWrapper**](../Model/ThumbnailsDataWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\PhotosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The profile whose avatar the operation addresses, taken from the route. Either the ID of the account or its  user name is accepted. Reading a photo works for any account the caller may see, while deleting one only  works for the calling account itself.

try {
    $result = $apiInstance->deleteMemberPhoto($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotosApi->deleteMemberPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberPhoto()`

```php
getMemberPhoto($user_id): \OpenAPI\Client\Model\ThumbnailsDataWrapper
```

Get a user photo
Returns the URLs of the avatar of a profile in every size the portal keeps: the original, the retina and the  maximum variants, and the big, medium and small thumbnails.  Unlike the operations that change an avatar, this one may be called for another account, as long as the  caller is allowed to see that account - a guest, for instance, only sees the accounts it is related to.  The call is read-only and always answers with a full set of URLs: a profile that has no avatar of its own  gets the URLs of the default placeholder image rather than an empty answer.  The URLs are portal paths meant to be requested directly and may be replaced when the avatar changes, so they  should not be stored for a long time.  To change the avatar use `POST api/2.0/people/{userId}/photo` for an uploaded file,  `PUT api/2.0/people/{userId}/photo` for one taken from a URL, and  `DELETE api/2.0/people/{userId}/photo` to drop it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-member-photo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The profile whose avatar the operation addresses, taken from the route. Either the ID of the account or its  user name is accepted. Reading a photo works for any account the caller may see, while deleting one only  works for the calling account itself. | |

### Return type

[**\OpenAPI\Client\Model\ThumbnailsDataWrapper**](../Model/ThumbnailsDataWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\PhotosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The profile whose avatar the operation addresses, taken from the route. Either the ID of the account or its  user name is accepted. Reading a photo works for any account the caller may see, while deleting one only  works for the calling account itself.

try {
    $result = $apiInstance->getMemberPhoto($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotosApi->getMemberPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMemberPhoto()`

```php
updateMemberPhoto($user_id, $update_photo_member_request): \OpenAPI\Client\Model\ThumbnailsDataWrapper
```

Update a user photo
Sets the avatar of a profile from an image the portal downloads itself from the URL given in `files`, which is  the way to reuse a picture that is already published somewhere.  A caller may only do this to their own profile - the ID in the route has to be the calling account, and an  administrator gets 403 for anybody else - and the account must be allowed to edit its own profile.  The URL has to be absolute or relative to the portal, and it has to use HTTPS unless the request itself came  over HTTP; an address the portal refuses to fetch, and a download that does not succeed, both answer 403.  Passing the URL the profile already uses is a no-op, and an empty `files` is rejected with 400, so use  `DELETE api/2.0/people/{userId}/photo` to remove an avatar rather than sending an empty value.  The downloaded image replaces the stored avatar and all of its sizes at once and is subject to the portal limit on image size.  To send the bytes instead of a URL, upload the file through `POST api/2.0/people/{userId}/photo`.  Raises the `user.updated` webhook.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-member-photo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The profile whose avatar is replaced, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner. | |
| **update_photo_member_request** | [**\OpenAPI\Client\Model\UpdatePhotoMemberRequest**](../Model/UpdatePhotoMemberRequest.md)| The address of the image to use as the new avatar. | |

### Return type

[**\OpenAPI\Client\Model\ThumbnailsDataWrapper**](../Model/ThumbnailsDataWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\PhotosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The profile whose avatar is replaced, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner.
$update_photo_member_request = new \OpenAPI\Client\Model\UpdatePhotoMemberRequest(); // \OpenAPI\Client\Model\UpdatePhotoMemberRequest | The address of the image to use as the new avatar.

try {
    $result = $apiInstance->updateMemberPhoto($user_id, $update_photo_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotosApi->updateMemberPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMemberPhoto()`

```php
uploadMemberPhoto($user_id, $file, $autosave): \OpenAPI\Client\Model\FileUploadResultWrapper
```

Upload a user photo
Uploads an image as multipart form data and either makes it the avatar of a profile straight away or keeps it  as a temporary file to be cropped afterwards.  With `autosave` set to true the image becomes the avatar immediately, all of its sizes are built and their  URLs come back in `data`, each with a `hash` query parameter that changes whenever the avatar does, so a  client can cache them safely.  With `autosave` left false the image is only stored as a temporary file and `data` holds its name, which has  to be passed as `tmpFile` to `POST api/2.0/people/{userId}/photo/thumbnails` to choose the crop; nothing  changes on the profile until that second call succeeds.  A caller may only do this to their own profile, the ID in the route has to be the calling account, and the  image has to be a format the portal can read and stay within the portal limit on image size.  This operation reports every problem in the body instead of as a status code: it answers 200 with `success`  set to false and a human-readable `message`, and it does so for a missing file, an unreadable format, an  oversized image and a rejected permission alike, so a client has to check `success` and must not rely on the  status alone.  Raises the `user.updated` webhook only when `autosave` is true and the image is saved to the profile.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/upload-member-photo/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The profile whose avatar is uploaded, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner. | |
| **file** | **\SplFileObject****\SplFileObject**| The image itself, sent as a multipart form field. It has to be a raster format the portal can read and stay  within the portal limit on image size; sending no file makes the operation answer with `success` false rather  than an error status. | |
| **autosave** | **bool**| Set it to true to make the uploaded image the avatar right away. With the default false the image is only  stored as a temporary file whose name comes back in `data`, and it has to be passed to  `POST api/2.0/people/{userId}/photo/thumbnails` to take effect. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadResultWrapper**](../Model/FileUploadResultWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\PhotosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The profile whose avatar is uploaded, taken from the route. Either the ID of the account or its user name is  accepted, and it has to be the calling account, because a profile photo can only be changed by its owner.
$file = '/path/to/file.txt'; // \SplFileObject | The image itself, sent as a multipart form field. It has to be a raster format the portal can read and stay  within the portal limit on image size; sending no file makes the operation answer with `success` false rather  than an error status.
$autosave = True; // bool | Set it to true to make the uploaded image the avatar right away. With the default false the image is only  stored as a temporary file whose name comes back in `data`, and it has to be passed to  `POST api/2.0/people/{userId}/photo/thumbnails` to take effect.

try {
    $result = $apiInstance->uploadMemberPhoto($user_id, $file, $autosave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotosApi->uploadMemberPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
