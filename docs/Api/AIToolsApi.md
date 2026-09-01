# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ToolsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiToolsAddCustomServer()**](AIToolsApi.md#aiToolsAddCustomServer) | **POST** /api/2.0/ai/tools/add-custom-server | Add custom server |
| [**aiToolsGetAllowAlways()**](AIToolsApi.md#aiToolsGetAllowAlways) | **GET** /api/2.0/ai/tools/get-allow-always | Get allow always |
| [**aiToolsGetCustomServer()**](AIToolsApi.md#aiToolsGetCustomServer) | **GET** /api/2.0/ai/tools/get-custom-server | Get custom server |
| [**aiToolsGetDisabled()**](AIToolsApi.md#aiToolsGetDisabled) | **GET** /api/2.0/ai/tools/get-disabled | Get disabled |
| [**aiToolsIsAllowAlways()**](AIToolsApi.md#aiToolsIsAllowAlways) | **GET** /api/2.0/ai/tools/is-allow-always | Is allow always |
| [**aiToolsIsToolDisabled()**](AIToolsApi.md#aiToolsIsToolDisabled) | **GET** /api/2.0/ai/tools/is-tool-disabled | Is tool disabled |
| [**aiToolsListCustomServers()**](AIToolsApi.md#aiToolsListCustomServers) | **GET** /api/2.0/ai/tools/list-custom-servers | List custom servers |
| [**aiToolsListSystemTools()**](AIToolsApi.md#aiToolsListSystemTools) | **GET** /api/2.0/ai/tools/list-system-tools | List system tools |
| [**aiToolsRemoveCustomServer()**](AIToolsApi.md#aiToolsRemoveCustomServer) | **DELETE** /api/2.0/ai/tools/remove-custom-server | Remove custom server |
| [**aiToolsReplaceAllCustomServers()**](AIToolsApi.md#aiToolsReplaceAllCustomServers) | **PUT** /api/2.0/ai/tools/replace-all-custom-servers | Replace all custom servers |
| [**aiToolsSetAllowAlways()**](AIToolsApi.md#aiToolsSetAllowAlways) | **PUT** /api/2.0/ai/tools/set-allow-always | Set allow always |
| [**aiToolsSetDisabled()**](AIToolsApi.md#aiToolsSetDisabled) | **PUT** /api/2.0/ai/tools/set-disabled | Set disabled |
| [**aiToolsUpdateCustomServer()**](AIToolsApi.md#aiToolsUpdateCustomServer) | **PUT** /api/2.0/ai/tools/update-custom-server | Update custom server |


## `aiToolsAddCustomServer()`

```php
aiToolsAddCustomServer($ai_tools_add_custom_server_request): \OpenAPI\Client\Model\AiToolsMutationResult
```

Add custom server
Registers a custom MCP server in the scope under the given name.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-add-custom-server/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_add_custom_server_request** | [**\OpenAPI\Client\Model\AiToolsAddCustomServerRequest**](../Model/AiToolsAddCustomServerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiToolsMutationResult**](../Model/AiToolsMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_add_custom_server_request = new \OpenAPI\Client\Model\AiToolsAddCustomServerRequest(); // \OpenAPI\Client\Model\AiToolsAddCustomServerRequest

try {
    $result = $apiInstance->aiToolsAddCustomServer($ai_tools_add_custom_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsAddCustomServer: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsGetAllowAlways()`

```php
aiToolsGetAllowAlways($entity_id): string[]
```

Get allow always
Lists the tools on the always-allow list of the scope.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-get-allow-always/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsGetAllowAlways($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsGetAllowAlways: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsGetCustomServer()`

```php
aiToolsGetCustomServer($name, $entity_id): object
```

Get custom server
Returns the configuration of one custom MCP server, or an empty result when it is not registered.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-get-custom-server/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The custom MCP server name. | |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**object**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The custom MCP server name.
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsGetCustomServer($name, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsGetCustomServer: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsGetDisabled()`

```php
aiToolsGetDisabled($entity_id): array<string,string[]>
```

Get disabled
Returns the switched-off tools of the scope, grouped by server type.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-get-disabled/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**array<string,string[]>**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsGetDisabled($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsGetDisabled: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsIsAllowAlways()`

```php
aiToolsIsAllowAlways($server_type, $tool_name, $entity_id): bool
```

Is allow always
Tells whether one tool is on the always-allow list.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-is-allow-always/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_type** | **string**| The MCP server type the tool belongs to. | |
| **tool_name** | **string**| The tool name. | |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**bool**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_type = 'server_type_example'; // string | The MCP server type the tool belongs to.
$tool_name = 'tool_name_example'; // string | The tool name.
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsIsAllowAlways($server_type, $tool_name, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsIsAllowAlways: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsIsToolDisabled()`

```php
aiToolsIsToolDisabled($server_type, $tool_name, $entity_id): bool
```

Is tool disabled
Tells whether one tool of a server type is switched off.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-is-tool-disabled/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_type** | **string**| The MCP server type the tool belongs to. | |
| **tool_name** | **string**| The tool name. | |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**bool**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_type = 'server_type_example'; // string | The MCP server type the tool belongs to.
$tool_name = 'tool_name_example'; // string | The tool name.
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsIsToolDisabled($server_type, $tool_name, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsIsToolDisabled: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsListCustomServers()`

```php
aiToolsListCustomServers($entity_id): array<string,object>
```

List custom servers
Lists the custom MCP servers registered in the scope, keyed by name.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-list-custom-servers/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**array<string,object>**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsListCustomServers($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsListCustomServers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsListSystemTools()`

```php
aiToolsListSystemTools($entity_id): array<string,\OpenAPI\Client\Model\AiTMCPItem[]>
```

List system tools
Lists the tools of the host-configured system MCP servers, grouped by server type. The servers are connected and listed server-side, so the client renders its permission cards from one request and never opens an MCP connection of its own.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-list-system-tools/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**array<string,\OpenAPI\Client\Model\AiTMCPItem[]>**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiToolsListSystemTools($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsListSystemTools: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsRemoveCustomServer()`

```php
aiToolsRemoveCustomServer($ai_tools_remove_custom_server_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Remove custom server
Removes a custom MCP server from the registry.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-remove-custom-server/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_remove_custom_server_request** | [**\OpenAPI\Client\Model\AiToolsRemoveCustomServerRequest**](../Model/AiToolsRemoveCustomServerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_remove_custom_server_request = new \OpenAPI\Client\Model\AiToolsRemoveCustomServerRequest(); // \OpenAPI\Client\Model\AiToolsRemoveCustomServerRequest

try {
    $result = $apiInstance->aiToolsRemoveCustomServer($ai_tools_remove_custom_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsRemoveCustomServer: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsReplaceAllCustomServers()`

```php
aiToolsReplaceAllCustomServers($ai_tools_replace_all_custom_servers_request): \OpenAPI\Client\Model\AiToolsBulkResult
```

Replace all custom servers
Replaces the whole custom MCP server registry of the scope with the supplied map.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-replace-all-custom-servers/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_replace_all_custom_servers_request** | [**\OpenAPI\Client\Model\AiToolsReplaceAllCustomServersRequest**](../Model/AiToolsReplaceAllCustomServersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiToolsBulkResult**](../Model/AiToolsBulkResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_replace_all_custom_servers_request = new \OpenAPI\Client\Model\AiToolsReplaceAllCustomServersRequest(); // \OpenAPI\Client\Model\AiToolsReplaceAllCustomServersRequest

try {
    $result = $apiInstance->aiToolsReplaceAllCustomServers($ai_tools_replace_all_custom_servers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsReplaceAllCustomServers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsSetAllowAlways()`

```php
aiToolsSetAllowAlways($ai_tools_set_allow_always_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set allow always
Adds a tool to the always-allow list, or removes it - the tools on that list run without an approval dialog.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-set-allow-always/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_set_allow_always_request** | [**\OpenAPI\Client\Model\AiToolsSetAllowAlwaysRequest**](../Model/AiToolsSetAllowAlwaysRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_set_allow_always_request = new \OpenAPI\Client\Model\AiToolsSetAllowAlwaysRequest(); // \OpenAPI\Client\Model\AiToolsSetAllowAlwaysRequest

try {
    $result = $apiInstance->aiToolsSetAllowAlways($ai_tools_set_allow_always_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsSetAllowAlways: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsSetDisabled()`

```php
aiToolsSetDisabled($ai_tools_set_disabled_request): \OpenAPI\Client\Model\AiSuccessResponse
```

Set disabled
Marks the listed tools of one server type as switched off, so the model is no longer offered them.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-set-disabled/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_set_disabled_request** | [**\OpenAPI\Client\Model\AiToolsSetDisabledRequest**](../Model/AiToolsSetDisabledRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiSuccessResponse**](../Model/AiSuccessResponse.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_set_disabled_request = new \OpenAPI\Client\Model\AiToolsSetDisabledRequest(); // \OpenAPI\Client\Model\AiToolsSetDisabledRequest

try {
    $result = $apiInstance->aiToolsSetDisabled($ai_tools_set_disabled_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsSetDisabled: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiToolsUpdateCustomServer()`

```php
aiToolsUpdateCustomServer($ai_tools_update_custom_server_request): \OpenAPI\Client\Model\AiToolsMutationResult
```

Update custom server
Updates the configuration of a registered custom MCP server.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-tools-update-custom-server/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_tools_update_custom_server_request** | [**\OpenAPI\Client\Model\AiToolsUpdateCustomServerRequest**](../Model/AiToolsUpdateCustomServerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiToolsMutationResult**](../Model/AiToolsMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_tools_update_custom_server_request = new \OpenAPI\Client\Model\AiToolsUpdateCustomServerRequest(); // \OpenAPI\Client\Model\AiToolsUpdateCustomServerRequest

try {
    $result = $apiInstance->aiToolsUpdateCustomServer($ai_tools_update_custom_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->aiToolsUpdateCustomServer: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
