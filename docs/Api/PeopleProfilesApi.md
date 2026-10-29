# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.ProfilesApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMember()**](PeopleProfilesApi.md#addMember) | **POST** /api/2.0/people | Add a user |
| [**checkUserExistsByEmail()**](PeopleProfilesApi.md#checkUserExistsByEmail) | **GET** /api/2.0/people/exists | Check whether an email is taken |
| [**deleteMember()**](PeopleProfilesApi.md#deleteMember) | **DELETE** /api/2.0/people/{userId} | Delete a user |
| [**deleteProfile()**](PeopleProfilesApi.md#deleteProfile) | **DELETE** /api/2.0/people/@self | Close my own profile |
| [**getAllProfiles()**](PeopleProfilesApi.md#getAllProfiles) | **GET** /api/2.0/people | Get the active profiles |
| [**getClaims()**](PeopleProfilesApi.md#getClaims) | **GET** /api/2.0/people/tokendiagnostics | Get user claims |
| [**getProfileByEmail()**](PeopleProfilesApi.md#getProfileByEmail) | **GET** /api/2.0/people/email | Get a profile by user email |
| [**getProfileByUserId()**](PeopleProfilesApi.md#getProfileByUserId) | **GET** /api/2.0/people/{userId} | Get a profile by user ID |
| [**getSelfProfile()**](PeopleProfilesApi.md#getSelfProfile) | **GET** /api/2.0/people/@self | Get my profile |
| [**inviteUsers()**](PeopleProfilesApi.md#inviteUsers) | **POST** /api/2.0/people/invite | Invite users |
| [**removeUsers()**](PeopleProfilesApi.md#removeUsers) | **PUT** /api/2.0/people/delete | Delete users |
| [**resendUserInvites()**](PeopleProfilesApi.md#resendUserInvites) | **PUT** /api/2.0/people/invite | Resend activation emails |
| [**updateMember()**](PeopleProfilesApi.md#updateMember) | **PUT** /api/2.0/people/{userId} | Update a user |
| [**updateMemberCulture()**](PeopleProfilesApi.md#updateMemberCulture) | **PUT** /api/2.0/people/{userId}/culture | Update a user culture |


## `addMember()`

```php
addMember($member_request_dto): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Add a user
Creates a portal profile, either by an administrator adding somebody directly or by a person accepting an  invitation link, which is why the operation accepts both an authenticated session and an invitation  confirmation token.  Set `fromInviteLink` to true and pass the invitation `key` for the second case: the resulting type then comes  from the link and the `type` in the request is ignored, and an invalid or expired link answers 403.  Without a link the caller needs the permission to add users of the requested type, cannot create a guest  through this operation at all, has to be a DocSpace admin to create a room admin and the portal owner to  create another DocSpace admin; either way the portal has to allow inviting members, or guests when the link  says so.  The password is optional: `passwordHash` is taken as it is, a plain `password` is checked against the portal  password policy and rejected with 400 when it is too weak, and when both are omitted a random password is  generated and the account is created without anybody knowing it.  When the portal has no free paid seat the account is still created, silently as a `User` instead of the  requested type, so read the `type` in the answer rather than assuming the request was honoured.  Creating a profile downloads the avatar named in `files` if one is given and  answers with the new profile including its ID.  To invite several people by email at once instead, use `POST api/2.0/people/invite`.  Raises the `user.created` webhook once the avatar named in `files`, if any, is saved: when that download fails, the profile exists but the webhook is not sent.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/add-member/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_request_dto** | [**\OpenAPI\Client\Model\MemberRequestDto**](../Model/MemberRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_request_dto = new \OpenAPI\Client\Model\MemberRequestDto(); // \OpenAPI\Client\Model\MemberRequestDto

try {
    $result = $apiInstance->addMember($member_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->addMember: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkUserExistsByEmail()`

```php
checkUserExistsByEmail($email, $encemail, $culture): \OpenAPI\Client\Model\UserExistsResponseWrapper
```

Check whether an email is taken
Reports whether an email address already belongs to a portal profile, and in what state that profile is.  It is meant for the invitation and sign-up screens, which is why it accepts a confirmation token as well as an  ordinary session, and why it is available on an unpaid portal.  Pass the address either in plain text as `email` or, when it arrived inside an invitation link, encrypted as  `encemail`; one of the two is required and a malformed or overlong address answers 400.  The call is read-only, and the answer carries `exists` plus the `status` of the profile - `Active`,  `Terminated` or `Pending` - which is left out entirely when nothing matches, so a pending invitation can be  told apart from a working account and from a free address.  It reveals only that an address is taken and not who owns it - read `GET api/2.0/people/email` for the  profile itself, which needs the right to see that account.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/check-user-exists-by-email/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The user email address. | [optional] |
| **encemail** | **string**| The user encrypted email address. | [optional] |
| **culture** | **string**| Culture | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserExistsResponseWrapper**](../Model/UserExistsResponseWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = john.doe@example.com; // string | The user email address.
$encemail = encrypted_email_string; // string | The user encrypted email address.
$culture = en-US; // string | Culture

try {
    $result = $apiInstance->checkUserExistsByEmail($email, $encemail, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->checkUserExistsByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMember()`

```php
deleteMember($user_id): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Delete a user
Deletes a portal profile and queues the erasure of the data behind it.  The account has to be disabled first - set the `Terminated` status through  `PUT api/2.0/people/status/{status}`, otherwise the operation answers 403 - and it must not be a system  account or one imported from LDAP.  The caller needs the permission to add and remove users, and has to be the portal owner to delete a DocSpace  administrator.  The profile disappears at once, together with its avatar, its group memberships, its file shares and its  OAuth clients, while the data it owned is erased by a queued job afterwards, which can be watched through  `GET api/2.0/people/remove/progress/{userId}`.  The removal is permanent and cannot be undone, so hand the rooms and the shared files over first through  `POST api/2.0/people/reassign/start` - an account whose reassignment has not finished cannot be deleted.  The call answers with the profile as it was just before it was removed.  To delete several accounts at once use `PUT api/2.0/people/delete`.  Raises the `user.deleted` webhook. Raises the `folder.created` webhook once the queued data deletion creates the folder in the caller's personal section that takes over the files and folders the account shared from its own; not when it shared none.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-member/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID.

try {
    $result = $apiInstance->deleteMember($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfile()`

```php
deleteProfile(): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Close my own profile
Closes the calling account at its owner's request: it does not erase the profile, it disables it, ends every  session it has and tells the portal administrators that the account asked to be removed.  It is the second step of the self-service removal - the first is `PUT api/2.0/people/self/delete`, which mails  the confirmation link - so the request has to carry the confirmation token from that link rather than an  ordinary session.  It always acts on the calling account and takes no parameters; the portal owner and an account imported from  LDAP cannot close themselves and get 403.  After the call the account has the `Terminated` status and can no longer sign in, but its rooms, files and  group memberships are untouched, which is why an administrator still has to erase it through  `DELETE api/2.0/people/{userId}` - that operation requires exactly this disabled state.  The step is reversible until then: re-enabling the account through `PUT api/2.0/people/status/{status}`  restores it.  The call answers with the profile in its new state.  Raises the `user.updated` webhook rather than `user.deleted`: the profile is only disabled.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-profile/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProfiles()`

```php
getAllProfiles($count, $start_index, $filter_by, $sort_by, $sort_order, $filter_separator, $filter_value): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Get the active profiles
Returns a page of the working accounts of the portal, with the full profile of each of them.  It reports only the accounts whose status is `Active`, so disabled accounts and open invitations are never  listed - use `GET api/2.0/people/status/{status}` for those, or `GET api/2.0/people/filter` to search across  every state.  The caller has to be a room admin, a DocSpace admin or a People module admin; a member or a guest gets 403.  The call is read-only, paged by `count` and `startIndex`, ordered by `sortBy` and `sortOrder`, and reports  the number of matches in the total count of the response.  Narrow it with `filterValue` on the name and the email, and with `filterBy` set to `group` to keep only the  members of the group whose ID is passed in `filterValue`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-all-profiles/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**| The size of the page. It defaults to 100, which is also the largest value the operation accepts. | [optional] |
| **start_index** | **int**| The number of matches to skip before the page starts. It defaults to 0, and the total number of matches is  reported in the total count of the response. | [optional] |
| **filter_by** | **string**| The only recognised value is `group`, which makes `filterValue` the ID of the group to keep the members of.  Any other value, and omitting the field, applies no group filter. | [optional] |
| **sort_by** | **string**| What to order the accounts by, compared without regard to case: `FirstName`, `LastName`, `DisplayName`,  `Type`, `Email`, `Department`, `UsedSpace`, `CreatedBy` or `RegistrationDate`. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| The direction of the ordering: `Ascending`, which is the default, or `Descending`. | [optional] |
| **filter_separator** | **string**| The character that splits `filterValue` into several terms, of which any one may match. Omit it to split  the value on spaces instead, in which case every term has to match. | [optional] |
| **filter_value** | **string**| The text to match against the name and the email of the account, case-insensitively. Omit it to apply no  text filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 25; // int | The size of the page. It defaults to 100, which is also the largest value the operation accepts.
$start_index = 0; // int | The number of matches to skip before the page starts. It defaults to 0, and the total number of matches is  reported in the total count of the response.
$filter_by = group; // string | The only recognised value is `group`, which makes `filterValue` the ID of the group to keep the members of.  Any other value, and omitting the field, applies no group filter.
$sort_by = DisplayName; // string | What to order the accounts by, compared without regard to case: `FirstName`, `LastName`, `DisplayName`,  `Type`, `Email`, `Department`, `UsedSpace`, `CreatedBy` or `RegistrationDate`.
$sort_order = Ascending; // \OpenAPI\Client\Model\SortOrder | The direction of the ordering: `Ascending`, which is the default, or `Descending`.
$filter_separator = ,; // string | The character that splits `filterValue` into several terms, of which any one may match. Omit it to split  the value on spaces instead, in which case every term has to match.
$filter_value = John; // string | The text to match against the name and the email of the account, case-insensitively. Omit it to apply no  text filter.

try {
    $result = $apiInstance->getAllProfiles($count, $start_index, $filter_by, $sort_by, $sort_order, $filter_separator, $filter_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getAllProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaims()`

```php
getClaims(): \OpenAPI\Client\Model\TokenDiagnosticsWrapper
```

Get user claims
Returns the identity the current request was authenticated with, as the portal sees it: the account name and  the full list of claims attached to the token or the cookie.  It is a diagnostics operation meant for working out why a call is rejected - which account a token really  belongs to, and which scopes and roles it carries - rather than a source of profile data.  It needs no permission of its own and reports on the caller only, so it cannot be used to inspect another  account.  The call is read-only, and every claim comes back as a single `type:value` string, in the order the  authentication produced them.  An account name of `Unknown Name` means the identity carries no name claim, not that the request is  unauthenticated.  For the profile behind the identity, read `GET api/2.0/people/@self`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-claims/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TokenDiagnosticsWrapper**](../Model/TokenDiagnosticsWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getClaims();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getClaims: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileByEmail()`

```php
getProfileByEmail($email, $encemail, $culture): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Get a profile by user email
Returns the full profile of the account that owns an email address.  Pass the address either in plain text as `email` or, when it arrived inside an invitation link, encrypted as  `encemail`; one of the two is required and a malformed or overlong address answers 400.  The caller has to be allowed to see that account - a guest, for instance, only sees the accounts it is  related to - and an address that belongs to nobody answers 404.  The call is read-only, and `culture` changes nothing about the profile: it only picks the language of the  error message when the lookup fails.  To find out whether an address is taken without the right to see its owner, use  `GET api/2.0/people/exists`, and to look an account up by its ID or user name use  `GET api/2.0/people/{userId}`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-profile-by-email/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The user email address. | [optional] |
| **encemail** | **string**| The user encrypted email address. | [optional] |
| **culture** | **string**| Culture | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = john.doe@example.com; // string | The user email address.
$encemail = encrypted_email_string; // string | The user encrypted email address.
$culture = en-US; // string | Culture

try {
    $result = $apiInstance->getProfileByEmail($email, $encemail, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfileByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileByUserId()`

```php
getProfileByUserId($user_id): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Get a profile by user ID
Returns the profile of one account, looked up by its user name first and by its ID if the name matches  nothing, so both forms work in the route.  The caller has to be allowed to see that account - a guest, for instance, only sees the accounts it is  related to - and a value that matches neither a name nor an ID answers 404.  A request authenticated with an invitation link is treated differently: it skips that visibility check and  gets a reduced profile with the identifying fields only, which is what an invitation page needs.  The call is read-only and is available on an unpaid portal.  To read the calling account use `GET api/2.0/people/@self`, and to look an account up by address use  `GET api/2.0/people/email`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-profile-by-user-id/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID.

try {
    $result = $apiInstance->getProfileByUserId($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfileByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelfProfile()`

```php
getSelfProfile(): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Get my profile
Returns the profile of the account the request is authenticated as, together with the session details only  this operation reports.  It takes no parameters, needs no permission and always describes the caller, so it is the operation to call  right after signing in to find out who the token belongs to and what that account may do.  The call is read-only and available on an unpaid portal.  Beyond the ordinary profile fields it fills in four that stay empty everywhere else: `theme` with the  interface theme the account chose, `loginEventId` with the identifier of the current session,  `hasPersonalFolder` with whether the account has a personal folder, and `authCookieLifetime` with the seconds  the session has left - the last one only when less than a day remains or the portal is configured to expose  it, so an absent value means neither, not an endless session.  To read somebody else use `GET api/2.0/people/{userId}`, which reports none of these four.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-self-profile/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getSelfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteUsers()`

```php
inviteUsers($invite_users_request_dto): \OpenAPI\Client\Model\EmployeeArrayWrapper
```

Invite users
Invites people to the portal by email, creating a pending profile for each address and mailing it an  invitation link.  The caller has to be a room admin or a DocSpace admin - a member or a guest is rejected - the portal has to  allow inviting members, and inviting a room admin additionally requires DocSpace admin rights while inviting  another DocSpace admin requires the portal owner; a `Guest` type is not accepted here at all.  An address that already belongs to a profile is not mailed again: the existing account is only related to the  caller, and its type is raised when the invitation asks for a higher one, while a disabled account rejects  the whole call with 400.  The whole call is rejected before anything is sent when the invitations would need more paid seats than the  tariff has left, and a malformed or punycode address is rejected with 400, so the list is validated as a  batch but applied one address at a time - a failure partway through leaves the earlier invitations sent.  The answer is not the result of this call: it lists every profile of the portal that is still pending and  that the caller may see, so previously invited people appear in it as well.  Repeated calls are throttled.  Use `PUT api/2.0/people/invite` to send the invitation email again, and `POST api/2.0/people` to create a  profile without mailing anybody.  Raises the `user.invited` webhook for every address that does not belong to a profile yet.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/invite-users/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_users_request_dto** | [**\OpenAPI\Client\Model\InviteUsersRequestDto**](../Model/InviteUsersRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeArrayWrapper**](../Model/EmployeeArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_users_request_dto = new \OpenAPI\Client\Model\InviteUsersRequestDto(); // \OpenAPI\Client\Model\InviteUsersRequestDto

try {
    $result = $apiInstance->inviteUsers($invite_users_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->inviteUsers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUsers()`

```php
removeUsers($update_members_request_dto): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Delete users
Deletes several portal profiles in one call and queues the erasure of the data behind each of them.  Every listed account has to be disabled already - set the `Terminated` status through  `PUT api/2.0/people/status/{status}` first, because a single account that is still active rejects the whole  call with 403 - and the caller needs the permission to add and remove users.  System and LDAP accounts are dropped from the list without an error, and so are the accounts the caller may  not delete: a room admin when the caller is not a DocSpace admin, and a DocSpace admin when the caller is not  the portal owner.  The answer lists every account that was asked for, including the ones that were skipped, so it is not proof  that an account was deleted - read `GET api/2.0/people/{userId}` for that, which then answers 404.  The removal is permanent and cannot be undone, and the data of each deleted account is  erased by a queued job that can be watched through  `GET api/2.0/people/remove/progress/{userId}`.  Hand the rooms and the shared files over first through `POST api/2.0/people/reassign/start` - an account with  an unfinished reassignment cannot be deleted.  Raises the `user.deleted` webhook for every account it deletes; an account the caller may not delete is skipped without one. Raises the `folder.created` webhook for every deleted account that shared files or folders from its personal section, once the queued data deletion creates the folder in the caller's personal section that takes them over.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/remove-users/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_members_request_dto** | [**\OpenAPI\Client\Model\UpdateMembersRequestDto**](../Model/UpdateMembersRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_members_request_dto = new \OpenAPI\Client\Model\UpdateMembersRequestDto(); // \OpenAPI\Client\Model\UpdateMembersRequestDto

try {
    $result = $apiInstance->removeUsers($update_members_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->removeUsers: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendUserInvites()`

```php
resendUserInvites($update_members_request_dto): \OpenAPI\Client\Model\EmployeeFullArrayWrapper
```

Resend activation emails
Sends the invitation or activation email again to the accounts that have not finished joining the portal.  Set `resendAll` to true to reach every pending account of the portal, in which case `userIds` is ignored and  the caller has to be a room admin or a DocSpace admin; with the default false only the listed accounts are  reached, and a member or a guest may then list nothing but their own ID.  Which email goes out depends on the state of each account: a pending invitation gets a fresh invitation link,  while an account that exists but has not confirmed its address gets activation instructions instead.  Accounts that are already active or that are disabled are skipped, and so are the pending accounts the caller  has no right to invite, without an error.  The answer lists only the targeted accounts the caller is allowed to see, so it can be shorter than the  request and is not a delivery report.  Repeated calls are throttled, and each call issues new links that make the previously sent ones useless.  To invite an address that has no profile yet, use `POST api/2.0/people/invite`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/resend-user-invites/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_members_request_dto** | [**\OpenAPI\Client\Model\UpdateMembersRequestDto**](../Model/UpdateMembersRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullArrayWrapper**](../Model/EmployeeFullArrayWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_members_request_dto = new \OpenAPI\Client\Model\UpdateMembersRequestDto(); // \OpenAPI\Client\Model\UpdateMembersRequestDto

try {
    $result = $apiInstance->resendUserInvites($update_members_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->resendUserInvites: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMember()`

```php
updateMember($user_id, $update_member_request_dto): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Update a user
Updates a portal profile, and which fields it accepts depends on whose profile it is - the two halves of this  operation do not overlap.  On the caller's own profile it applies `firstName`, `lastName`, `location`, `comment`, `spam`, `contacts`,  `department` and the avatar named in `files`, while `disable` and `isUser` are ignored; on somebody else's  profile only `disable` and `isUser` are applied and every descriptive field is ignored, so an administrator  cannot rename another account through this operation.  The caller needs the permission to edit that profile, cannot touch the portal owner, and has to be the portal  owner to touch another DocSpace administrator; on an account imported from LDAP or SSO the name and the  location are silently left alone even on one's own profile.  Omitted fields keep their current values, an unusable pair of names answers 400, and `disable` set to true  gives the account the `Terminated` status and ends every session it has, which is the state  `DELETE api/2.0/people/{userId}` then requires.  The `isUser` flag turns the account into a guest when true and back into a member when false, both of which  can answer 402 because either direction takes a seat; a request to make the portal owner, a DocSpace  administrator or a module administrator a guest is ignored without an error.  The answer holds the profile as it is afterwards, so read it  instead of assuming the request was applied.  For the language use `PUT api/2.0/people/{userId}/culture`, for the type  `PUT api/2.0/people/type/{type}`, and for the status of several accounts at once  `PUT api/2.0/people/status/{status}`.  Raises the `user.updated` webhook when the call changes the profile; on another member's profile only `disable` and `isUser` change anything.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-member/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. | |
| **update_member_request_dto** | [**\OpenAPI\Client\Model\UpdateMemberRequestDto**](../Model/UpdateMemberRequestDto.md)| The request parameters for updating the user information. | |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID.
$update_member_request_dto = new \OpenAPI\Client\Model\UpdateMemberRequestDto(); // \OpenAPI\Client\Model\UpdateMemberRequestDto | The request parameters for updating the user information.

try {
    $result = $apiInstance->updateMember($user_id, $update_member_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMemberCulture()`

```php
updateMemberCulture($user_id, $update_member_culture_request): \OpenAPI\Client\Model\EmployeeFullWrapper
```

Update a user culture
Changes the interface language of a profile, which decides the language of the portal for that account and of  the emails it receives.  The culture has to be one the portal has enabled, otherwise the operation answers 400; read the enabled list  from the portal settings rather than guessing a code.  A caller may only change their own language - the ID in the route has to be the calling account, and an  administrator gets 403 for anybody else - and the account must be allowed to edit its own profile.  The change takes effect immediately and answers with the profile carrying  the new `cultureName`.  Other profile fields are not touched here; use `PUT api/2.0/people/{userId}` for those.  Raises the `user.updated` webhook even when the culture does not change.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/update-member-culture/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. | |
| **update_member_culture_request** | [**\OpenAPI\Client\Model\UpdateMemberCultureRequest**](../Model/UpdateMemberCultureRequest.md)| The culture name parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeeFullWrapper**](../Model/EmployeeFullWrapper.md)

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


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID.
$update_member_culture_request = new \OpenAPI\Client\Model\UpdateMemberCultureRequest(); // \OpenAPI\Client\Model\UpdateMemberCultureRequest | The culture name parameters.

try {
    $result = $apiInstance->updateMemberCulture($user_id, $update_member_culture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateMemberCulture: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
