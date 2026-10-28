# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.DiscoveryApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**handleOptions()**](OAuth20DiscoveryApi.md#handleOptions) | **OPTIONS** /.well-known/oauth-authorization-server | Probe the discovery endpoint |


## `handleOptions()`

```php
handleOptions()
```

Probe the discovery endpoint
Answers the CORS preflight for the OAuth 2.0 Authorization Server metadata endpoint. The endpoint needs no authentication and reads nothing from the request: it always answers 200 with an empty body, and the CORS headers are added by the surrounding filter chain rather than by this handler. It changes no state, and it does not return the authorization server metadata document - issue a GET against the same path for that.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/handle-options/).

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


$apiInstance = new OpenAPI\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->handleOptions();
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->handleOptions: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
