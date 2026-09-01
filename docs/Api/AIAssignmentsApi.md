# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.AssignmentsApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAssignmentsAssign()**](AIAssignmentsApi.md#aiAssignmentsAssign) | **PUT** /api/2.0/ai/assignments/assign | Assign |
| [**aiAssignmentsBulkAssign()**](AIAssignmentsApi.md#aiAssignmentsBulkAssign) | **PUT** /api/2.0/ai/assignments/bulk-assign | Bulk assign |
| [**aiAssignmentsCascadeProfileDelete()**](AIAssignmentsApi.md#aiAssignmentsCascadeProfileDelete) | **DELETE** /api/2.0/ai/assignments/cascade-profile-delete | Cascade profile delete |
| [**aiAssignmentsGetAllAssignments()**](AIAssignmentsApi.md#aiAssignmentsGetAllAssignments) | **GET** /api/2.0/ai/assignments/get-all-assignments | Get all assignments |
| [**aiAssignmentsGetAssignment()**](AIAssignmentsApi.md#aiAssignmentsGetAssignment) | **GET** /api/2.0/ai/assignments/get-assignment | Get assignment |
| [**aiAssignmentsResolveForAction()**](AIAssignmentsApi.md#aiAssignmentsResolveForAction) | **GET** /api/2.0/ai/assignments/resolve-for-action | Resolve for action |
| [**aiAssignmentsTryResolveForAction()**](AIAssignmentsApi.md#aiAssignmentsTryResolveForAction) | **GET** /api/2.0/ai/assignments/try-resolve-for-action | Try resolve for action |
| [**aiAssignmentsUnassign()**](AIAssignmentsApi.md#aiAssignmentsUnassign) | **DELETE** /api/2.0/ai/assignments/unassign | Unassign |


## `aiAssignmentsAssign()`

```php
aiAssignmentsAssign($ai_assignments_assign_request): \OpenAPI\Client\Model\AiAssignmentMutationResult
```

Assign
Binds a profile to an AI action, creating the assignment or updating it in place. The profile's declared capabilities are validated against the action, except for the `Default` slot.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-assign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_assignments_assign_request** | [**\OpenAPI\Client\Model\AiAssignmentsAssignRequest**](../Model/AiAssignmentsAssignRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiAssignmentMutationResult**](../Model/AiAssignmentMutationResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ai_assignments_assign_request = new \OpenAPI\Client\Model\AiAssignmentsAssignRequest(); // \OpenAPI\Client\Model\AiAssignmentsAssignRequest

try {
    $result = $apiInstance->aiAssignmentsAssign($ai_assignments_assign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsAssign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsBulkAssign()`

```php
aiAssignmentsBulkAssign($request_body): \OpenAPI\Client\Model\AiBulkAssignmentResult
```

Bulk assign
Applies many action-to-profile bindings at once. Every entry is validated first and nothing is written if any of them fails, so the assignment set is never left half-written.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-bulk-assign/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiBulkAssignmentResult**](../Model/AiBulkAssignmentResult.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $result = $apiInstance->aiAssignmentsBulkAssign($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsBulkAssign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsCascadeProfileDelete()`

```php
aiAssignmentsCascadeProfileDelete($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Cascade profile delete
Cleans up the assignments pointing at a profile that is about to be deleted: the `Default` slot is promoted to the first remaining profile (or dropped when none is left), and every other slot holding that profile is unbound.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-cascade-profile-delete/).

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


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiAssignmentsCascadeProfileDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsCascadeProfileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsGetAllAssignments()`

```php
aiAssignmentsGetAllAssignments($entity_id): array<string,string>
```

Get all assignments
Returns the full action-to-profile assignment map of the scope.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-get-all-assignments/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

**array<string,string>**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiAssignmentsGetAllAssignments($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsGetAllAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsGetAssignment()`

```php
aiAssignmentsGetAssignment($action_type): string
```

Get assignment
Returns the profile bound to one AI action, without the `Default` fallback.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-get-assignment/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action_type** | **string**| The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision. | |

### Return type

**string**

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_type = 'action_type_example'; // string | The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision.

try {
    $result = $apiInstance->aiAssignmentsGetAssignment($action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsGetAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsResolveForAction()`

```php
aiAssignmentsResolveForAction($action_type, $entity_id): \OpenAPI\Client\Model\AiResolvedAssignment
```

Resolve for action
Resolves the profile bound to an AI action, falling back to the `Default` slot when the action itself has none. Fails when neither slot is set or the bound profile no longer exists - use `try-resolve-for-action` for an empty answer instead.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-resolve-for-action/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action_type** | **string**| The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision. | |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiResolvedAssignment**](../Model/AiResolvedAssignment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_type = 'action_type_example'; // string | The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision.
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiAssignmentsResolveForAction($action_type, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsResolveForAction: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsTryResolveForAction()`

```php
aiAssignmentsTryResolveForAction($action_type, $entity_id): \OpenAPI\Client\Model\AiResolvedAssignment
```

Try resolve for action
Resolves the profile bound to an AI action exactly like `resolve-for-action`, but answers with an empty result instead of failing when nothing is configured.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-try-resolve-for-action/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action_type** | **string**| The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision. | |
| **entity_id** | **string**| The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiResolvedAssignment**](../Model/AiResolvedAssignment.md)

### Authorization

No authorization required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_type = 'action_type_example'; // string | The AI action the request applies to - one of Default, Chat, Code, Summarization, Translation, TextAnalyze, ImageGeneration, OCR, Vision.
$entity_id = 'entity_id_example'; // string | The DocSpace entity the request is scoped to - the room, folder or agent workspace the chat is invoked from. Omit for the portal-wide scope.

try {
    $result = $apiInstance->aiAssignmentsTryResolveForAction($action_type, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsTryResolveForAction: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAssignmentsUnassign()`

```php
aiAssignmentsUnassign($body): \OpenAPI\Client\Model\AiSuccessResponse
```

Unassign
Removes the profile binding of an AI action. Does nothing when that slot is already empty.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-assignments-unassign/).

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


$apiInstance = new OpenAPI\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->aiAssignmentsUnassign($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->aiAssignmentsUnassign: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
