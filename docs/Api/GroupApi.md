# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.GroupApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addGroup()**](GroupApi.md#addGroup) | **POST** /api/2.0/group | Add a new group |
| [**addMembersTo()**](GroupApi.md#addMembersTo) | **PUT** /api/2.0/group/{id}/members | Add group members |
| [**deleteGroup()**](GroupApi.md#deleteGroup) | **DELETE** /api/2.0/group/{id} | Delete a group |
| [**getGroup()**](GroupApi.md#getGroup) | **GET** /api/2.0/group/{id} | Get a group |
| [**getGroupByUserId()**](GroupApi.md#getGroupByUserId) | **GET** /api/2.0/group/user/{userId} | Get user groups |
| [**getGroups()**](GroupApi.md#getGroups) | **GET** /api/2.0/group | Get groups |
| [**moveMembersTo()**](GroupApi.md#moveMembersTo) | **PUT** /api/2.0/group/{fromId}/members/{toId} | Move group members |
| [**removeMembersFrom()**](GroupApi.md#removeMembersFrom) | **DELETE** /api/2.0/group/{id}/members | Remove group members |
| [**setGroupManager()**](GroupApi.md#setGroupManager) | **PUT** /api/2.0/group/{id}/manager | Set a group manager |
| [**setMembersTo()**](GroupApi.md#setMembersTo) | **POST** /api/2.0/group/{id}/members | Replace group members |
| [**updateGroup()**](GroupApi.md#updateGroup) | **PUT** /api/2.0/group/{id} | Update a group |


## `addGroup()`

```php
addGroup($group_request_dto): \OpenAPI\Client\Model\GroupWrapper
```

Add a new group
Creates a group with the given name and, optionally, a manager and a first set of members.  The caller needs the permissions to edit groups and to add and remove users.  The name is required and cannot be blank, and unlike the operations that add members later, this one checks  every listed account upfront and rejects the whole call with 400 if any of them is unusable - a guest, a  disabled account or an ID that matches nobody.  The call is not idempotent: names are not unique, so repeating it creates a second group with the same name.  The answer holds the new group with its members included.  Members can be changed afterwards through `PUT api/2.0/group/{id}` or the dedicated member operations.  Raises the `group.created` webhook once for the new group. The `user.*` payloads of its manager and members are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-group/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_request_dto** | [**\OpenAPI\Client\Model\GroupRequestDto**](../Model/GroupRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_request_dto = new \OpenAPI\Client\Model\GroupRequestDto(); // \OpenAPI\Client\Model\GroupRequestDto

try {
    $result = $apiInstance->addGroup($group_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addMembersTo()`

```php
addMembersTo($id, $members_request): \OpenAPI\Client\Model\GroupWrapper
```

Add group members
Adds the listed accounts to a group, keeping the members it already has.  The caller needs the permissions to edit groups and to add and remove users, and the ID has to belong to a  group that has not been deleted, otherwise the operation answers 404.  Accounts that cannot be group members - a guest, a disabled account or an ID that matches nobody - are  silently skipped instead of failing the call, so compare the members in the answer with what was sent to see  what was actually applied.  The call is idempotent for an account that is already a member, and it does not change who manages the group;  use `PUT api/2.0/group/{id}/manager` for that.  The answer is the group with its members after the addition.  To replace the whole list instead of extending it, use `POST api/2.0/group/{id}/members`.  Raises the `group.updated` webhook only when at least one listed account is actually added, not for an empty list or for accounts that are already members or cannot be members. The added members' `user.*` payloads are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-members-to/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404. | |
| **members_request** | [**\OpenAPI\Client\Model\MembersRequest**](../Model/MembersRequest.md)| The accounts to add, replace with, or remove. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404.
$members_request = new \OpenAPI\Client\Model\MembersRequest(); // \OpenAPI\Client\Model\MembersRequest | The accounts to add, replace with, or remove.

try {
    $result = $apiInstance->addMembersTo($id, $members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addMembersTo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($id)
```

Delete a group
Deletes a group and withdraws the access it had been granted to rooms, folders and files.  The caller needs the permissions to edit groups and to add and remove users, and the ID has to belong to a  group that has not been deleted, otherwise the operation answers 404.  The removal is permanent and cannot be undone, and it affects sharing: everything that was shared with the  group loses that share, so members who had access only through this group lose it too.  The accounts themselves are kept - only their membership disappears.  The call answers 204 with no body; a second call with the same ID answers  404 rather than succeeding again.  To empty a group without deleting it, move its members away with  `PUT api/2.0/group/{fromId}/members/{toId}` or remove them through `DELETE api/2.0/group/{id}/members`.  Raises the `group.deleted` webhook once for the deleted group. The `user.*` payloads of its former members are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-group/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group to delete, taken from the route. It has to be a group that has not been deleted already,  otherwise the operation answers 404. | |

### Return type

void (empty response body)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group to delete, taken from the route. It has to be a group that has not been deleted already,  otherwise the operation answers 404.

try {
    $apiInstance->deleteGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($id, $include_members): \OpenAPI\Client\Model\GroupWrapper
```

Get a group
Returns one group by its ID, with its name, its manager and - when asked for - the accounts that belong to  it.  The caller needs the permission to read groups, and the ID has to belong to a group that has not been  deleted, otherwise the operation answers 404.  The call is read-only, and the member list is left out unless `includeMembers` is set to true, so ask for it  only when the members are actually needed.  Use `GET api/2.0/group` to look a group up by name or to page through them all.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-group/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group to read, taken from the route. It has to be a group that has not been deleted, otherwise  the operation answers 404. | |
| **include_members** | **bool**| Whether to fill in the member list of the group. It defaults to true, so set it to false when only the name  and the manager are needed and the group may be large. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group to read, taken from the route. It has to be a group that has not been deleted, otherwise  the operation answers 404.
$include_members = true; // bool | Whether to fill in the member list of the group. It defaults to true, so set it to false when only the name  and the manager are needed and the group may be large.

try {
    $result = $apiInstance->getGroup($id, $include_members);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupByUserId()`

```php
getGroupByUserId($user_id): \OpenAPI\Client\Model\GroupSummaryArrayWrapper
```

Get user groups
Returns every group the account with the ID in the route belongs to, as a flat list of ID and name pairs.  The caller needs the permission to read groups.  The call is read-only, is not paged, and answers an empty list both for an account that belongs to no group  and for an ID that matches no account, so an empty answer does not prove the account exists.  The entries are summaries and carry neither the manager nor the members - read `GET api/2.0/group/{id}` for  the full picture of one of them.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-group-by-user-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The ID of the account whose groups are listed, taken from the route. An ID that matches no account yields an  empty list rather than 404. | |

### Return type

[**\OpenAPI\Client\Model\GroupSummaryArrayWrapper**](../Model/GroupSummaryArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the account whose groups are listed, taken from the route. An ID that matches no account yields an  empty list rather than 404.

try {
    $result = $apiInstance->getGroupByUserId($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($user_id, $manager, $count, $start_index, $sort_by, $sort_order, $filter_value): \OpenAPI\Client\Model\GroupArrayWrapper
```

Get groups
Returns the groups of the portal, one page at a time, with the summary information about each of them - the  ID, the name and the manager - but without the member list.  The caller needs the permission to read groups.  The call is read-only, and the number of groups that match the filters is reported in the total count of the  response, so a client can page through them with `count` and `startIndex`.  Narrow the result with `filterValue` on the group name, with `userId` to keep only the groups that account  belongs to, and with `manager` set to true to keep only the groups it manages; order it with `sortBy` and  `sortOrder`, and an unknown `sortBy` falls back to sorting by title.  The entries carry no members - read `GET api/2.0/group/{id}` with `includeMembers` for one group, or  `GET api/2.0/group/user/{userId}` to find the groups of a single account.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-groups/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Keeps only the groups the account with this ID takes part in. Omit it to search every group of the portal. | [optional] |
| **manager** | **bool**| Narrows `userId` down to the groups that account manages, instead of every group it belongs to. It has no  effect on its own and defaults to false. | [optional] |
| **count** | **int**| The size of the page. It defaults to 100, which is also the largest value the operation accepts. | [optional] |
| **start_index** | **int**| The number of matching groups to skip before the page starts. It defaults to 0, and the total number of  matches is reported in the total count of the response. | [optional] |
| **sort_by** | **string**| What to order the groups by: `Title`, `Manager` or `MembersCount`, compared without regard to case. Any other  value, and omitting the field, orders by title. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The direction of the ordering: `Ascending`, which is the default, or `Descending`. | [optional] |
| **filter_value** | **string**| The text to match against the group name. Omit it to get every group. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupArrayWrapper**](../Model/GroupArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | Keeps only the groups the account with this ID takes part in. Omit it to search every group of the portal.
$manager = false; // bool | Narrows `userId` down to the groups that account manages, instead of every group it belongs to. It has no  effect on its own and defaults to false.
$count = 25; // int | The size of the page. It defaults to 100, which is also the largest value the operation accepts.
$start_index = 0; // int | The number of matching groups to skip before the page starts. It defaults to 0, and the total number of  matches is reported in the total count of the response.
$sort_by = Title; // string | What to order the groups by: `Title`, `Manager` or `MembersCount`, compared without regard to case. Any other  value, and omitting the field, orders by title.
$sort_order = Ascending; // \OpenAPI\Client\Model\SortOrder | The direction of the ordering: `Ascending`, which is the default, or `Descending`.
$filter_value = Marketing; // string | The text to match against the group name. Omit it to get every group.

try {
    $result = $apiInstance->getGroups($user_id, $manager, $count, $start_index, $sort_by, $sort_order, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveMembersTo()`

```php
moveMembersTo($from_id, $to_id): \OpenAPI\Client\Model\GroupWrapper
```

Move group members
Moves every member of one group into another group, emptying the first one.  The caller needs the permissions to edit groups and to add and remove users, and both IDs have to belong to  groups that have not been deleted, otherwise the operation answers 404.  The source group is kept, only without members, so delete it separately through  `DELETE api/2.0/group/{id}` if it is no longer needed.  Members that cannot be group members any more are silently skipped rather than failing the call, and an  account that already belongs to the destination is simply left there.  The answer is the destination group with its members, not the source one.  To move a chosen few instead of everybody, use `PUT api/2.0/group/{id}/members` and  `DELETE api/2.0/group/{id}/members`.  Raises the `group.updated` webhook once for the source group when it had members, and once for the destination group when its members or manager actually change; not at all when both IDs name the same group. The moved members' `user.*` payloads are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/move-members-to/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_id** | **string**| The ID of the group the members are taken from. It is emptied but not deleted, and it has to be a group that  has not been deleted already. | |
| **to_id** | **string**| The ID of the group the members are moved into. It is the group the answer describes, and it has to be a  group that has not been deleted already. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group the members are taken from. It is emptied but not deleted, and it has to be a group that  has not been deleted already.
$to_id = 11111111-1111-1111-1111-111111111111; // string | The ID of the group the members are moved into. It is the group the answer describes, and it has to be a  group that has not been deleted already.

try {
    $result = $apiInstance->moveMembersTo($from_id, $to_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->moveMembersTo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMembersFrom()`

```php
removeMembersFrom($id, $members_request): \OpenAPI\Client\Model\GroupWrapper
```

Remove group members
Removes the listed accounts from a group, leaving the rest of its members in place.  The caller needs the permissions to edit groups and to add and remove users, and the ID has to belong to a  group that has not been deleted, otherwise the operation answers 404.  The accounts themselves are kept; only their membership in this group ends, together with the access they had  through it.  The call is idempotent and forgiving: an ID that is not a member, and one that matches no account at all, are  both skipped without an error, and an empty list simply changes nothing.  The answer is the group with the members that remain.  Emptying a group cannot be done through `POST api/2.0/group/{id}/members`, which needs at least one valid  account, so list every member here, or move them away with `PUT api/2.0/group/{fromId}/members/{toId}`.  Raises the `group.updated` webhook only when at least one listed account is actually a member and is removed, not for an empty list or a list of non-members. The removed members' `user.*` payloads are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/remove-members-from/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404. | |
| **members_request** | [**\OpenAPI\Client\Model\MembersRequest**](../Model/MembersRequest.md)| The accounts to add, replace with, or remove. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404.
$members_request = new \OpenAPI\Client\Model\MembersRequest(); // \OpenAPI\Client\Model\MembersRequest | The accounts to add, replace with, or remove.

try {
    $result = $apiInstance->removeMembersFrom($id, $members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->removeMembersFrom: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setGroupManager()`

```php
setGroupManager($id, $set_manager_request): \OpenAPI\Client\Model\GroupWrapper
```

Set a group manager
Makes an account the manager of a group, replacing whoever managed it before.  The caller needs the permissions to edit groups and to add and remove users.  Both the group and the account have to exist: the operation answers 404 when the ID in the route matches no  live group and also when `userId` matches no account, so the message of the error says which of the two was  not found.  The account is added to the group at the same time, so a manager does not have to be a member beforehand, and  the previous manager stays in the group as an ordinary member.  A group has one manager, which makes the call idempotent when it names the account that manages it already.  The answer is the group with its new manager.  To change the members rather than the manager, use `PUT api/2.0/group/{id}/members`.  Raises the `group.updated` webhook only when the manager or the members actually change, not when the account already manages the group or cannot be a group member. The `user.*` payloads of the new and the previous manager are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-group-manager/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group whose manager is set, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404. | |
| **set_manager_request** | [**\OpenAPI\Client\Model\SetManagerRequest**](../Model/SetManagerRequest.md)| The account to make the manager of the group. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group whose manager is set, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404.
$set_manager_request = new \OpenAPI\Client\Model\SetManagerRequest(); // \OpenAPI\Client\Model\SetManagerRequest | The account to make the manager of the group.

try {
    $result = $apiInstance->setGroupManager($id, $set_manager_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupManager: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setMembersTo()`

```php
setMembersTo($id, $members_request): \OpenAPI\Client\Model\GroupWrapper
```

Replace group members
Replaces the whole member list of a group with the accounts given in the request, removing everybody who is  not in that list.  The caller needs the permissions to edit groups and to add and remove users, and the ID has to belong to a  group that has not been deleted, otherwise the operation answers 404.  At least one of the listed accounts has to be usable as a group member, otherwise the call is rejected with  400 and the group is left untouched; the accounts that cannot be members - a guest, a disabled account or an  ID that matches nobody - are then silently skipped while the rest are applied.  The replacement is not atomic: the current members are removed first and the new ones added afterwards, so a  failure in between can leave the group empty.  The answer is the group with the members it ends up with, which is why it should be read instead of assuming  the request was applied verbatim.  To add or remove a few accounts without touching the others, use `PUT api/2.0/group/{id}/members` and  `DELETE api/2.0/group/{id}/members`.  Raises the `group.updated` webhook only when the members or the manager of the group actually change, not when the list names the current members again. The added and removed members' `user.*` payloads are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/set-members-to/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404. | |
| **members_request** | [**\OpenAPI\Client\Model\MembersRequest**](../Model/MembersRequest.md)| The accounts to add, replace with, or remove. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group whose members are changed, taken from the route. It has to be a group that has not been  deleted, otherwise the operation answers 404.
$members_request = new \OpenAPI\Client\Model\MembersRequest(); // \OpenAPI\Client\Model\MembersRequest | The accounts to add, replace with, or remove.

try {
    $result = $apiInstance->setMembersTo($id, $members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setMembersTo: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($id, $update_group_request): \OpenAPI\Client\Model\GroupWrapper
```

Update a group
Changes the name and the manager of a group and adds or removes members, in one call.  The caller needs the permissions to edit groups and to add and remove users, and the ID has to belong to a  group that has not been deleted, otherwise the operation answers 404.  Every field is optional and the ones that are left out are kept: omitting `groupName` keeps the current name,  and omitting `groupManager` keeps the current manager rather than clearing it.  Accounts in `membersToAdd` that cannot be group members - a guest, a disabled account or an ID that matches  nobody - are silently skipped instead of failing the call, so compare the members in the answer with what was  sent to see what was actually applied.  Members are added first and removed afterwards, an account listed in both lists therefore ends up removed,  and removing an account that is not a member changes nothing.  The answer holds the group as it is after the update.  Raises the `group.updated` webhook only when the name, the manager or the members actually change, not for a call that repeats the current values. The `user.*` payloads of the added and removed members and of the manager are not re-sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-group/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group to update, taken from the route. It has to be a group that has not been deleted,  otherwise the operation answers 404. | |
| **update_group_request** | [**\OpenAPI\Client\Model\UpdateGroupRequest**](../Model/UpdateGroupRequest.md)| The fields to change. Every field is optional and the ones that are left out keep their current values, so an  empty object changes nothing. | |

### Return type

[**\OpenAPI\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group to update, taken from the route. It has to be a group that has not been deleted,  otherwise the operation answers 404.
$update_group_request = new \OpenAPI\Client\Model\UpdateGroupRequest(); // \OpenAPI\Client\Model\UpdateGroupRequest | The fields to change. Every field is optional and the ones that are left out keep their current values, so an  empty object changes nothing.

try {
    $result = $apiInstance->updateGroup($id, $update_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
