# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ProfilesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiProfilesCreate()**](AIProfilesApi.md#aiProfilesCreate) | **POST** /api/2.0/ai/profiles/create | Create |
| [**aiProfilesDelete()**](AIProfilesApi.md#aiProfilesDelete) | **DELETE** /api/2.0/ai/profiles/delete | Delete |
| [**aiProfilesGetById()**](AIProfilesApi.md#aiProfilesGetById) | **GET** /api/2.0/ai/profiles/get-by-id | Get by id |
| [**aiProfilesList()**](AIProfilesApi.md#aiProfilesList) | **GET** /api/2.0/ai/profiles/list | List |
| [**aiProfilesListModels()**](AIProfilesApi.md#aiProfilesListModels) | **GET** /api/2.0/ai/profiles/list-models | List models |
| [**aiProfilesListProviderModels()**](AIProfilesApi.md#aiProfilesListProviderModels) | **POST** /api/2.0/ai/profiles/list-provider-models | List provider models |
| [**aiProfilesTestConnection()**](AIProfilesApi.md#aiProfilesTestConnection) | **POST** /api/2.0/ai/profiles/test-connection | Test connection |
| [**aiProfilesUpdate()**](AIProfilesApi.md#aiProfilesUpdate) | **PUT** /api/2.0/ai/profiles/update | Update |


## `aiProfilesCreate()`

```php
aiProfilesCreate($ai_create_profile_input): \OpenAPI\Client\Model\AiProfileMutationResult
```

Create
Creates an AI provider profile. The name must be unique and the credentials are validated against the provider before the profile is stored; the portal's first profile also takes the `Default` assignment slot.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_create_profile_input** | [**\OpenAPI\Client\Model\AiCreateProfileInput**](../Model/AiCreateProfileInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiProfileMutationResult**](../Model/AiProfileMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_create_profile_input = new \OpenAPI\Client\Model\AiCreateProfileInput(); // \OpenAPI\Client\Model\AiCreateProfileInput

try {
    $result = $apiInstance->aiProfilesCreate($ai_create_profile_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesDelete()`

```php
aiProfilesDelete($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Delete
Deletes an AI provider profile and cleans up the assignments pointing at it - the `Default` slot moves to the first remaining profile, the other slots are unbound.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-delete/).

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiProfilesDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesGetById()`

```php
aiProfilesGetById($id): \OpenAPI\Client\Model\AiProfilesGetById200Response
```

Get by id
Returns one AI provider profile, or an empty result when the identifier is unknown.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-get-by-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The AI provider profile identifier. | |

### Return type

[**\OpenAPI\Client\Model\AiProfilesGetById200Response**](../Model/AiProfilesGetById200Response.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The AI provider profile identifier.

try {
    $result = $apiInstance->aiProfilesGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesGetById: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesList()`

```php
aiProfilesList(): \OpenAPI\Client\Model\AiProfile[]
```

List
Lists the portal's AI provider profiles.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-list/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiProfile[]**](../Model/AiProfile.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aiProfilesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesListModels()`

```php
aiProfilesListModels($profile_id): \OpenAPI\Client\Model\AiModel[]
```

List models
Lists the models the given profile's provider offers, as reported by the provider itself.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-list-models/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The AI provider profile identifier. | |

### Return type

[**\OpenAPI\Client\Model\AiModel[]**](../Model/AiModel.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The AI provider profile identifier.

try {
    $result = $apiInstance->aiProfilesListModels($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesListModels: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesListProviderModels()`

```php
aiProfilesListProviderModels($ai_profiles_list_provider_models_request): \OpenAPI\Client\Model\AiModel[]
```

List provider models
Lists the models a provider offers for the supplied endpoint and key, before any profile is created from them.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-list-provider-models/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_profiles_list_provider_models_request** | [**\OpenAPI\Client\Model\AiProfilesListProviderModelsRequest**](../Model/AiProfilesListProviderModelsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiModel[]**](../Model/AiModel.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_profiles_list_provider_models_request = new \OpenAPI\Client\Model\AiProfilesListProviderModelsRequest(); // \OpenAPI\Client\Model\AiProfilesListProviderModelsRequest

try {
    $result = $apiInstance->aiProfilesListProviderModels($ai_profiles_list_provider_models_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesListProviderModels: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesTestConnection()`

```php
aiProfilesTestConnection($body): \OpenAPI\Client\Model\AiProfilesTestConnection200Response
```

Test connection
Checks a stored profile's credentials against its provider and reports the provider's own error when the call fails. Nothing is written.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-test-connection/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AiProfilesTestConnection200Response**](../Model/AiProfilesTestConnection200Response.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiProfilesTestConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesTestConnection: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiProfilesUpdate()`

```php
aiProfilesUpdate($ai_profile): \OpenAPI\Client\Model\AiProfileMutationResult
```

Update
Updates an AI provider profile, re-checking name uniqueness and the provider credentials.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-profiles-update/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_profile** | [**\OpenAPI\Client\Model\AiProfile**](../Model/AiProfile.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiProfileMutationResult**](../Model/AiProfileMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_profile = new \OpenAPI\Client\Model\AiProfile(); // \OpenAPI\Client\Model\AiProfile

try {
    $result = $apiInstance->aiProfilesUpdate($ai_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->aiProfilesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
