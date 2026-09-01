# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.DiscoveryApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**handleOptions()**](OAuth20DiscoveryApi.md#handleOptions) | **OPTIONS** /.well-known/oauth-authorization-server |  |


## `handleOptions()`

```php
handleOptions(): object
```



For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/handle-options/).

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->handleOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->handleOptions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
