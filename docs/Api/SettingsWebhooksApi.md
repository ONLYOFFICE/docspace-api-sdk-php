# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.WebhooksApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](SettingsWebhooksApi.md#createWebhook) | **POST** /api/2.0/settings/webhook | Create a webhook |
| [**enableWebhook()**](SettingsWebhooksApi.md#enableWebhook) | **PUT** /api/2.0/settings/webhook/enable | Switch a webhook on or off |
| [**getTenantWebhooks()**](SettingsWebhooksApi.md#getTenantWebhooks) | **GET** /api/2.0/settings/webhook | Get the portal webhooks |
| [**getWebhookTriggers()**](SettingsWebhooksApi.md#getWebhookTriggers) | **GET** /api/2.0/settings/webhook/triggers | Get the webhook triggers |
| [**getWebhooksLogs()**](SettingsWebhooksApi.md#getWebhooksLogs) | **GET** /api/2.0/settings/webhooks/log | Get the webhook delivery log |
| [**removeWebhook()**](SettingsWebhooksApi.md#removeWebhook) | **DELETE** /api/2.0/settings/webhook/{id} | Remove a webhook |
| [**retryWebhook()**](SettingsWebhooksApi.md#retryWebhook) | **PUT** /api/2.0/settings/webhook/{id}/retry | Retry a webhook delivery |
| [**retryWebhooks()**](SettingsWebhooksApi.md#retryWebhooks) | **PUT** /api/2.0/settings/webhook/retry | Retry webhook deliveries |
| [**updateWebhook()**](SettingsWebhooksApi.md#updateWebhook) | **PUT** /api/2.0/settings/webhook | Update a webhook |


## `createWebhook()`

```php
createWebhook($create_webhooks_config_request_dto): \OpenAPI\Client\Model\WebhooksConfigWrapper
```

Create a webhook
Creates a webhook subscription for the current portal: a target URL that the portal calls with a signed JSON  payload whenever one of the subscribed events happens. The target is checked before anything is stored: an  absolute `http` or `https` address outside the installation's own network that answers a HEAD request with a  success code, redirects not followed. `secretKey` is mandatory, has to satisfy the password rules of `GET  api/2.0/settings/security/password`, signs the payloads and never appears in a response. `triggers` is a bitmask  of the subscribed events, 0 standing for every event the creator's role may receive; a flag the caller's role may not use is rejected, so take  the allowed set from `GET api/2.0/settings/webhook/triggers`. `ssl` demands an `https` target with a valid  certificate, `false` leaves the certificate unchecked, and left out it is `true` for an `https` target and  `false` for an `http` one.  `targetId` limits the events to one entity, for user or group events a user or group the creator may see. A  subscription fires only while it is enabled, for events its creator may see and their current role may  subscribe to. Any role except `Guest` may create one, and each call adds another subscription.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-webhook/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_webhooks_config_request_dto** | [**\OpenAPI\Client\Model\CreateWebhooksConfigRequestDto**](../Model/CreateWebhooksConfigRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksConfigWrapper**](../Model/WebhooksConfigWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_webhooks_config_request_dto = new \OpenAPI\Client\Model\CreateWebhooksConfigRequestDto(); // \OpenAPI\Client\Model\CreateWebhooksConfigRequestDto

try {
    $result = $apiInstance->createWebhook($create_webhooks_config_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableWebhook()`

```php
enableWebhook($update_webhooks_config_request_dto): \OpenAPI\Client\Model\WebhooksConfigWrapper
```

Switch a webhook on or off
Switches one webhook subscription on or off, leaving the rest of its parameters as they are. Only `id` and  `enabled` are read from the body: `name` and `uri` must be present because the schema requires them, but their  values are ignored here, as are `secretKey`, `ssl`, `triggers` and `targetId` when sent - change any of them  with `PUT api/2.0/settings/webhook` instead. Switching a subscription on re-checks what is already stored: the  saved URL is probed with a HEAD request, the saved secret is checked against the current password rules, and the saved triggers against the current role of the  subscription's creator. The call is refused with 400 when any of these fails, so a subscription whose target has  gone away cannot be switched on until it is updated. Switching one off is not validated. While a subscription is  off its events are dropped rather than queued. A `DocSpaceAdmin` may switch any subscription in the portal,  anyone else only their own, and a `Guest` is refused. The response carries the subscription in its new state,  and repeating the call changes nothing further.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/enable-webhook/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_webhooks_config_request_dto** | [**\OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto**](../Model/UpdateWebhooksConfigRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksConfigWrapper**](../Model/WebhooksConfigWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_webhooks_config_request_dto = new \OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto(); // \OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto

try {
    $result = $apiInstance->enableWebhook($update_webhooks_config_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->enableWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantWebhooks()`

```php
getTenantWebhooks(): \OpenAPI\Client\Model\WebhooksConfigWithStatusArrayWrapper
```

Get the portal webhooks
Returns the webhook subscriptions of the current portal, each together with the outcome of its most recent  delivery. The portal owner and a `DocSpaceAdmin` see every subscription in the portal, while a `RoomAdmin` or  a `User` sees only the ones they created themselves, so the same call answers differently depending on who  asks. A `Guest` may not use webhooks at all and is refused, and so is any non-admin caller while the portal  keeps the developer tools restricted, which `GET api/2.0/settings/devtoolsaccess` reports. Every entry pairs  the stored configuration with `status`, the HTTP status code the target answered on the last attempt, where 0  means nothing has been delivered yet, while the secret key is not part of the response. The list is neither  paginated nor ordered, and an empty list simply means no subscription exists for the caller. Nothing is  written and the call is safe to repeat. Create a subscription with `POST api/2.0/settings/webhook`, and  inspect single deliveries with `GET api/2.0/settings/webhooks/log`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-tenant-webhooks/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhooksConfigWithStatusArrayWrapper**](../Model/WebhooksConfigWithStatusArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTenantWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getTenantWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookTriggers()`

```php
getWebhookTriggers(): \OpenAPI\Client\Model\WebhookTriggerArrayWrapper
```

Get the webhook triggers
Returns the catalogue of events a webhook subscription can listen to, in the order the portal presents them:  user events, then group, file, folder, room, form and agent ones. Each entry carries the event name as it  appears in a payload, such as `file.created`, the bit value to put into the `triggers` bitmask of a  subscription, and `available`, telling whether the caller's own role may subscribe to that event at all: a  `User` cannot subscribe to the creation of users, groups or rooms, for instance, while a `RoomAdmin` can. Add  the bit values of the wanted events together to build `triggers`; the entry named `*` has the value 0 and  stands for every event the subscription creator's current role may subscribe to, so it is used on its own  rather than added. Events unavailable to the caller are listed all the same, but passing one to `POST  api/2.0/settings/webhook` or `PUT api/2.0/settings/webhook` is rejected as an invalid request. This is fixed  reference data: the same for every portal, not paginated, changing only with the product version, and readable  by any authenticated caller, a `Guest` included. Nothing is written.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-webhook-triggers/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhookTriggerArrayWrapper**](../Model/WebhookTriggerArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhookTriggers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookTriggers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksLogs()`

```php
getWebhooksLogs($delivery_from, $delivery_to, $hook_uri, $config_id, $event_id, $group_status, $user_id, $trigger, $count, $start_index): \OpenAPI\Client\Model\WebhooksLogArrayWrapper
```

Get the webhook delivery log
Returns the delivery log of the portal webhooks, one record per delivery of an event, updated in place by its  automatic retries: the trigger, the request and response headers and bodies, the HTTP `status` of the latest  attempt, 0 while no answer has come back, and the `delivery` moment, empty until an attempt succeeds. `attempts`  counts the tries so far and `nextAttemptOn` is set while another one is due. A manual retry adds a record of its  own, with a new `id`, the same `eventId` and the member in `retriedBy`. Records come newest first, paged with  `startIndex` and `count`, at most 100 at a time, with the number of matches as `total`. Filters combine with  AND: `deliveryFrom` and `deliveryTo` bound the delivery moment, `hookUri` matches the subscription URL exactly,  `configId` picks one subscription, `groupStatus` keeps the status classes it names (0 means no filter), and  `trigger` one event type (0 means all). `eventId` keeps every record of one event; the `id` of a record a manual  retry returned keeps that record alone. `userId` filters by the creator of the subscription and is forced to the  caller for anyone but a `DocSpaceAdmin`. A `Guest` is refused. Nothing is written.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-webhooks-logs/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_from** | **\DateTime**| The earliest delivery moment a record may carry. Records of attempts still on their way have no delivery  moment yet and fall outside any bound set here. | [optional] |
| **delivery_to** | **\DateTime**| The latest delivery moment a record may carry. All the filters combine with AND, so it narrows whatever the  other ones already kept. | [optional] |
| **hook_uri** | **string**| The subscription target address, matched in full rather than as a prefix. Filtering by `configId` is the  reliable way to pick one subscription, since several may share an address. | [optional] |
| **config_id** | **int**| The subscription whose deliveries are kept, by the `id` that `GET api/2.0/settings/webhook` reports. | [optional] |
| **event_id** | **int**| One event, by the `eventId` of its delivery records, which is also the `event.id` the receiver got. | [optional] |
| **group_status** | [**\OpenAPI\Client\Model\WebhookGroupStatus**](../Model/.md)| The classes of answered status to keep, as a bitmask; 0 keeps every record whatever the target answered. | [optional] |
| **user_id** | **string**| The member whose subscriptions the records belong to, by portal user ID - who created the subscription, not  who caused the event. For a caller who is not a DocSpace administrator it is overwritten with the caller own  ID, so such a caller never sees another member deliveries whatever is sent here. | [optional] |
| **trigger** | [**\OpenAPI\Client\Model\WebhookTrigger**](../Model/.md)| The single event kind to keep; 0 keeps every kind. It names one trigger rather than a mask of several, unlike  the `triggers` a subscription is created with. | [optional] |
| **count** | **int**| How many records one page may hold. The maximum is also the default, so a client that wants shorter pages has  to ask for them; the number of records matching the filter comes back as `total` beside the page. | [optional] |
| **start_index** | **int**| How many matching records to skip before the page begins, counting from the newest. Advance it by `count` to  walk back through the log. | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksLogArrayWrapper**](../Model/WebhooksLogArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_from = 2024-01-15T10:30:00Z; // \DateTime | The earliest delivery moment a record may carry. Records of attempts still on their way have no delivery  moment yet and fall outside any bound set here.
$delivery_to = 2024-01-15T10:30:00Z; // \DateTime | The latest delivery moment a record may carry. All the filters combine with AND, so it narrows whatever the  other ones already kept.
$hook_uri = https://example.com/webhook; // string | The subscription target address, matched in full rather than as a prefix. Filtering by `configId` is the  reliable way to pick one subscription, since several may share an address.
$config_id = 1; // int | The subscription whose deliveries are kept, by the `id` that `GET api/2.0/settings/webhook` reports.
$event_id = 1; // int | One event, by the `eventId` of its delivery records, which is also the `event.id` the receiver got.
$group_status = NotSent; // \OpenAPI\Client\Model\WebhookGroupStatus | The classes of answered status to keep, as a bitmask; 0 keeps every record whatever the target answered.
$user_id = {}; // string | The member whose subscriptions the records belong to, by portal user ID - who created the subscription, not  who caused the event. For a caller who is not a DocSpace administrator it is overwritten with the caller own  ID, so such a caller never sees another member deliveries whatever is sent here.
$trigger = 0; // \OpenAPI\Client\Model\WebhookTrigger | The single event kind to keep; 0 keeps every kind. It names one trigger rather than a mask of several, unlike  the `triggers` a subscription is created with.
$count = 1; // int | How many records one page may hold. The maximum is also the default, so a client that wants shorter pages has  to ask for them; the number of records matching the filter comes back as `total` beside the page.
$start_index = 1; // int | How many matching records to skip before the page begins, counting from the newest. Advance it by `count` to  walk back through the log.

try {
    $result = $apiInstance->getWebhooksLogs($delivery_from, $delivery_to, $hook_uri, $config_id, $event_id, $group_status, $user_id, $trigger, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksLogs: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWebhook()`

```php
removeWebhook($id): \OpenAPI\Client\Model\WebhooksConfigWrapper
```

Remove a webhook
Removes one webhook subscription from the current portal for good, addressed by `id` in the path. Deliveries  stop with it: matching events are no longer queued, and there is no undo, so a subscription dropped by mistake  has to be created again with `POST api/2.0/settings/webhook`, which gives it a new identifier and needs a new  secret key. To pause deliveries without losing the configuration, switch the subscription off with  `PUT api/2.0/settings/webhook/enable` instead. A `DocSpaceAdmin` may remove any subscription in the portal,  anyone else only the ones they created, and a `Guest` may not use webhooks at all. The response repeats the  subscription as it was just before the removal, so the caller can record what disappeared, again without the  secret key. An identifier that no longer exists gives 404, which is what a second removal of the same  subscription answers as well, so a repeated call is harmless but reports the state truthfully rather than  pretending to succeed.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/remove-webhook/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The identifier of the object the operation acts on, as the listing operation of that kind of object reports  it. It has to match the shape the route declares - a GUID where the route is typed as one - since a value of  another shape does not match the route at all and is answered as not found. | |

### Return type

[**\OpenAPI\Client\Model\WebhooksConfigWrapper**](../Model/WebhooksConfigWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | The identifier of the object the operation acts on, as the listing operation of that kind of object reports  it. It has to match the shape the route declares - a GUID where the route is typed as one - since a value of  another shape does not match the route at all and is answered as not found.

try {
    $result = $apiInstance->removeWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->removeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryWebhook()`

```php
retryWebhook($id): \OpenAPI\Client\Model\WebhooksLogWrapper
```

Retry a webhook delivery
Sends one past webhook delivery again to its subscription. The `id` in the path is that of a delivery record  from `GET api/2.0/settings/webhooks/log`, not of a subscription. A `DocSpaceAdmin` may retry any delivery in the  portal, anyone else only deliveries of the subscriptions they created, and a `Guest` is refused. The work is  asynchronous: a new delivery record is queued and returned with its own `id`, the `eventId` of the retried one  and the caller in `retriedBy`; the retried record keeps its outcome, and automatic retries still due for the  event stop. The receiver gets the same `event.id` and `x-docspace-event-id` header in a body serialized and  signed anew. To learn the outcome, read the log with `eventId` set to the returned `id` until `nextAttemptOn` is  empty: `delivery` is then set on success and empty when the portal gave up after its automatic retries (on the  default schedule, six more tries over about 18 hours). An `id` of 0 gives 400 and an unknown one 404. 409 means  nothing was queued: a delivery of the event is being sent right now, the subscription is disabled, or the record  predates the current delivery format. Rate limited with 429.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/retry-webhook/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The identifier of the object the operation acts on, as the listing operation of that kind of object reports  it. It has to match the shape the route declares - a GUID where the route is typed as one - since a value of  another shape does not match the route at all and is answered as not found. | |

### Return type

[**\OpenAPI\Client\Model\WebhooksLogWrapper**](../Model/WebhooksLogWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | The identifier of the object the operation acts on, as the listing operation of that kind of object reports  it. It has to match the shape the route declares - a GUID where the route is typed as one - since a value of  another shape does not match the route at all and is answered as not found.

try {
    $result = $apiInstance->retryWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->retryWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryWebhooks()`

```php
retryWebhooks($webhook_retry_request_dto): \OpenAPI\Client\Model\WebhooksLogArrayWrapper
```

Retry webhook deliveries
Sends a batch of past webhook deliveries again. `ids` holds identifiers of delivery records from `GET  api/2.0/settings/webhooks/log`; for each one a new delivery record of the same event is queued, with its own  `id`, the retried record's `eventId` and the caller in `retriedBy`, and the response lists those new records.  Each event is retried once per call, so a second identifier of the same event is passed over. Records that do  not exist, records of another member's subscription when the caller is not a `DocSpaceAdmin`, and records  that cannot be queued now (an event being sent right now, a disabled subscription, a record older than the  current delivery format) are skipped in silence, so compare the response with `ids`; an empty `ids` queues  nothing. A `Guest` is refused. Each receiver gets the same `event.id` and `x-docspace-event-id` header in a  body serialized and signed anew. The work is asynchronous: read the log with `eventId` for each returned  identifier until `nextAttemptOn` is empty; a set `delivery` then means success, an empty one that the portal  gave up. At most 100 identifiers per call, rate limited with 429. `PUT api/2.0/settings/webhook/{id}/retry`  reports why a single record was not queued.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/retry-webhooks/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_retry_request_dto** | [**\OpenAPI\Client\Model\WebhookRetryRequestDto**](../Model/WebhookRetryRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksLogArrayWrapper**](../Model/WebhooksLogArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_retry_request_dto = new \OpenAPI\Client\Model\WebhookRetryRequestDto(); // \OpenAPI\Client\Model\WebhookRetryRequestDto

try {
    $result = $apiInstance->retryWebhooks($webhook_retry_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->retryWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($update_webhooks_config_request_dto): \OpenAPI\Client\Model\WebhooksConfigWrapper
```

Update a webhook
Replaces the stored parameters of one webhook subscription, addressed by `id` in the body rather than in the  path. Every field of the request overwrites the stored one, so a payload that leaves out `enabled`, `triggers`  or `targetId` resets them to off, the catch-all `0` and no target: read the current values with `GET  api/2.0/settings/webhook` first and send back whatever should stay. `secretKey` and `ssl` are the exceptions:  an empty `secretKey` keeps the existing secret, a new one having to satisfy the portal password rules, and a  left-out `ssl` keeps the stored setting, so pass it explicitly when moving the target between `http` and  `https`. A `DocSpaceAdmin`  may update any subscription in the portal, anyone else only their own, and a `Guest` is refused. Once the body  passes the schema checks (a missing `name` or `uri` gives 400 first), an unknown `id` gives 404 and another  member's subscription 403 before the target, the secret and the triggers are checked. The payload is then validated  as on creation, except that trigger flags are checked against the role of the subscription's creator rather than  the caller's. Sending the same payload twice leaves the same state. Use `PUT api/2.0/settings/webhook/enable` to  switch a subscription on or off without touching anything else.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-webhook/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_webhooks_config_request_dto** | [**\OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto**](../Model/UpdateWebhooksConfigRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksConfigWrapper**](../Model/WebhooksConfigWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_webhooks_config_request_dto = new \OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto(); // \OpenAPI\Client\Model\UpdateWebhooksConfigRequestDto

try {
    $result = $apiInstance->updateWebhook($update_webhooks_config_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
