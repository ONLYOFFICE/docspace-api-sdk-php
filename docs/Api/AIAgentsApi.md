# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AgentsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAgentsCreate()**](AIAgentsApi.md#aiAgentsCreate) | **POST** /api/2.0/ai/agents | Create an agent |
| [**aiAgentsDelete()**](AIAgentsApi.md#aiAgentsDelete) | **DELETE** /api/2.0/ai/agents/{id} | Delete an agent |
| [**aiAgentsGet()**](AIAgentsApi.md#aiAgentsGet) | **GET** /api/2.0/ai/agents/{id} | Get an agent |
| [**aiAgentsList()**](AIAgentsApi.md#aiAgentsList) | **GET** /api/2.0/ai/agents | List agents |
| [**aiAgentsNews()**](AIAgentsApi.md#aiAgentsNews) | **GET** /api/2.0/ai/agents/news | List agent news items |
| [**aiAgentsResetQuota()**](AIAgentsApi.md#aiAgentsResetQuota) | **PUT** /api/2.0/ai/agents/resetquota | Reset agents' quota |
| [**aiAgentsUpdate()**](AIAgentsApi.md#aiAgentsUpdate) | **PUT** /api/2.0/ai/agents/{id} | Update an agent |
| [**aiAgentsUpdateQuota()**](AIAgentsApi.md#aiAgentsUpdateQuota) | **PUT** /api/2.0/ai/agents/agentquota | Update agents' quota |


## `aiAgentsCreate()`

```php
aiAgentsCreate($ai_agents_create_request): \OpenAPI\Client\Model\AiFolderWrapper
```

Create an agent
Creates an AI agent room and binds a model to it, in that order. `profileId` is required, has to be a UUID, has to name an existing profile, and that profile has to support chat - an image-only model is refused here rather than failing on every later request. `prompt` is required and is stored on the room as its standing instruction with any markup stripped, so it cannot round-trip HTML into another user's reply. The two steps are not atomic: when the room is created but the model binding fails, the call reports an error and the room is left behind, so re-bind it with `PUT api/2.0/ai/agents/{id}` rather than creating a second one.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-create/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_create_request** | [**\OpenAPI\Client\Model\AiAgentsCreateRequest**](../Model/AiAgentsCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderWrapper**](../Model/AiFolderWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_agents_create_request = new \OpenAPI\Client\Model\AiAgentsCreateRequest(); // \OpenAPI\Client\Model\AiAgentsCreateRequest

try {
    $result = $apiInstance->aiAgentsCreate($ai_agents_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsDelete()`

```php
aiAgentsDelete($id, $ai_agents_delete_request): \OpenAPI\Client\Model\AiFileOperationWrapper
```

Delete an agent
Deletes an AI agent room. The ID has to be the room's integer identifier, and the body is forwarded to the DocSpace AI service unchanged, so it accepts the same options as deleting an ordinary room - `deleteAfter` among them. Deletion is asynchronous there: the answer is a file-operation payload to poll, not a completed result. The agent's model binding is deliberately left behind, because the upstream assignment API has no per-entry delete, so an orphaned assignment row survives the room.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-delete/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The agent identifier. | |
| **ai_agents_delete_request** | [**\OpenAPI\Client\Model\AiAgentsDeleteRequest**](../Model/AiAgentsDeleteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFileOperationWrapper**](../Model/AiFileOperationWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // string | The agent identifier.
$ai_agents_delete_request = new \OpenAPI\Client\Model\AiAgentsDeleteRequest(); // \OpenAPI\Client\Model\AiAgentsDeleteRequest

try {
    $result = $apiInstance->aiAgentsDelete($id, $ai_agents_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsGet()`

```php
aiAgentsGet($id): \OpenAPI\Client\Model\AiAgentsGet200Response
```

Get an agent
Returns one AI agent room, enriched with the `profileId` currently bound to it so an edit form can prefill its model selector. The ID is the room's integer identifier, and a non-integer value is refused rather than passed on to fail opaquely upstream. The binding lives in an assignment rather than on the room, so it is looked up separately: a missing or unreadable assignment simply leaves `profileId` out of the answer instead of failing the call. The standing instruction comes back on the room as `chatSettings.prompt`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-get/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The agent identifier. | |

### Return type

[**\OpenAPI\Client\Model\AiAgentsGet200Response**](../Model/AiAgentsGet200Response.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // string | The agent identifier.

try {
    $result = $apiInstance->aiAgentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsList()`

```php
aiAgentsList($subject_id, $subject_owner_id, $exclude_subject, $tags, $without_tags, $quota_filter, $filter_value, $sort_by, $sort_order, $start_index, $count): \OpenAPI\Client\Model\AiFolderContentWrapper
```

List agents
Lists the portal's AI agent rooms. The query is forwarded unchanged to the DocSpace AI service, so it takes the same paging, sorting and filtering parameters as an ordinary room listing, and the answer is that service's folder-content payload rather than a shape of this API's own. Array and object query values are dropped rather than guessed at, so send flat strings. The profile bound to each agent is not included here - read one agent with `GET api/2.0/ai/agents/{id}` for that.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-list/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_id** | **string**| Show only the agent rooms this user takes part in. | [optional] |
| **subject_owner_id** | **string**| Show only the agent rooms owned by this user. | [optional] |
| **exclude_subject** | **bool**| Invert the user filter: leave out what `subjectId` selects instead of keeping it. | [optional] |
| **tags** | **string**| Show only the agent rooms carrying these tags, comma-separated. | [optional] |
| **without_tags** | **bool**| Show only the agent rooms that carry no tags at all. | [optional] |
| **quota_filter** | **int**| Filter by quota kind: 0 for all, 1 for the default quota, 2 for a custom one. | [optional] |
| **filter_value** | **string**| Show only the agent rooms whose title matches this text. | [optional] |
| **sort_by** | **string**| Field to sort by, for example `DateAndTime`. | [optional] |
| **sort_order** | **string**| Sort direction, `ascending` or `descending`. | [optional] |
| **start_index** | **int**| Index of the first entry to return; 0 starts at the beginning. | [optional] |
| **count** | **int**| How many entries to return. The internal service applies its own default. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiFolderContentWrapper**](../Model/AiFolderContentWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 00000000-0000-0000-0000-000000000000; // string | Show only the agent rooms this user takes part in.
$subject_owner_id = 00000000-0000-0000-0000-000000000000; // string | Show only the agent rooms owned by this user.
$exclude_subject = false; // bool | Invert the user filter: leave out what `subjectId` selects instead of keeping it.
$tags = ai,assistant; // string | Show only the agent rooms carrying these tags, comma-separated.
$without_tags = false; // bool | Show only the agent rooms that carry no tags at all.
$quota_filter = 0; // int | Filter by quota kind: 0 for all, 1 for the default quota, 2 for a custom one.
$filter_value = assistant; // string | Show only the agent rooms whose title matches this text.
$sort_by = DateAndTime; // string | Field to sort by, for example `DateAndTime`.
$sort_order = descending; // string | Sort direction, `ascending` or `descending`.
$start_index = 0; // int | Index of the first entry to return; 0 starts at the beginning.
$count = 25; // int | How many entries to return. The internal service applies its own default.

try {
    $result = $apiInstance->aiAgentsList($subject_id, $subject_owner_id, $exclude_subject, $tags, $without_tags, $quota_filter, $filter_value, $sort_by, $sort_order, $start_index, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsList: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsNews()`

```php
aiAgentsNews(): \OpenAPI\Client\Model\AiNewItemsAgentNewItemsArrayWrapper
```

List agent news items
Lists the unread items across the caller's AI agent rooms, so a badge can be rendered without walking each room. It takes no parameters and is scoped to the caller by the DocSpace AI service. The answer is that service's new-items payload. This is a read-only operation and does not mark anything as seen.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-news/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AiNewItemsAgentNewItemsArrayWrapper**](../Model/AiNewItemsAgentNewItemsArrayWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->aiAgentsNews();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsNews: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsResetQuota()`

```php
aiAgentsResetQuota($ai_agents_reset_quota_request): \OpenAPI\Client\Model\AiFolderArrayWrapper
```

Reset agents' quota
Returns the listed AI agent rooms to the portal's default storage quota, forwarding `roomIds` to the DocSpace AI service unchanged. The answer is that service's payload, one updated room per entry. This is the counterpart of `PUT api/2.0/ai/agents/agentquota` and takes no quota value of its own. Rooms already on the default are unaffected.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-reset-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_reset_quota_request** | [**\OpenAPI\Client\Model\AiAgentsResetQuotaRequest**](../Model/AiAgentsResetQuotaRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderArrayWrapper**](../Model/AiFolderArrayWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_agents_reset_quota_request = new \OpenAPI\Client\Model\AiAgentsResetQuotaRequest(); // \OpenAPI\Client\Model\AiAgentsResetQuotaRequest

try {
    $result = $apiInstance->aiAgentsResetQuota($ai_agents_reset_quota_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsResetQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsUpdate()`

```php
aiAgentsUpdate($id, $ai_agents_update_request): \OpenAPI\Client\Model\AiFolderWrapper
```

Update an agent
Changes an AI agent room - its title, tags or standing instruction - and optionally rebinds its model. The ID has to be the room's integer identifier. `profileId` is not part of the room contract: it is taken out of the forwarded body and applied afterwards as the agent's assignment, and it has to be a UUID naming an existing chat-capable profile. An instruction sent as `chatSettings.prompt` has its markup stripped, as on create; note that when `chatSettings` is present the upstream service still requires the rest of that object to be valid, so send it whole.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-update/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The agent identifier. | |
| **ai_agents_update_request** | [**\OpenAPI\Client\Model\AiAgentsUpdateRequest**](../Model/AiAgentsUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderWrapper**](../Model/AiFolderWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // string | The agent identifier.
$ai_agents_update_request = new \OpenAPI\Client\Model\AiAgentsUpdateRequest(); // \OpenAPI\Client\Model\AiAgentsUpdateRequest

try {
    $result = $apiInstance->aiAgentsUpdate($id, $ai_agents_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAgentsUpdateQuota()`

```php
aiAgentsUpdateQuota($ai_agents_update_quota_request): \OpenAPI\Client\Model\AiFolderArrayWrapper
```

Update agents' quota
Sets the storage quota of the listed AI agent rooms in one call, forwarding `roomIds` and `quota` to the DocSpace AI service unchanged. The answer is that service's payload, one updated room per entry. A quota applies to the room's stored files, not to the model usage of its chats. Use `PUT api/2.0/ai/agents/resetquota` to return rooms to the portal default instead of naming a number.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-agents-update-quota/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_agents_update_quota_request** | [**\OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest**](../Model/AiAgentsUpdateQuotaRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiFolderArrayWrapper**](../Model/AiFolderArrayWrapper.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [bearerAuth](../../README.md#bearerAuth)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_agents_update_quota_request = new \OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest(); // \OpenAPI\Client\Model\AiAgentsUpdateQuotaRequest

try {
    $result = $apiInstance->aiAgentsUpdateQuota($ai_agents_update_quota_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->aiAgentsUpdateQuota: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
