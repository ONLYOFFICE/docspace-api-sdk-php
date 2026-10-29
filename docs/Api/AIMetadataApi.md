# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.MetadataApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiMetaFill()**](AIMetadataApi.md#aiMetaFill) | **POST** /api/2.0/ai/meta/fill | Fill metadata values |
| [**aiMetaGenerate()**](AIMetadataApi.md#aiMetaGenerate) | **POST** /api/2.0/ai/meta/generate | Generate metadata fields |


## `aiMetaFill()`

```php
aiMetaFill($ai_meta_fill_request): \OpenAPI\Client\Model\AiMetaFill200Response
```

Fill metadata values
Fills the metadata of one file from its text and writes the result. `kind` names the entry's table and `id` its integer identifier; only `file` is accepted for now, a folder or a room answers 400 until it is settled whether their metadata should describe the entry itself or its files; `prompt` is an optional note for the model on what to pay attention to, passed as a hint, never as an instruction; `overwrite` (default false) also replaces the fields that already carry a value, otherwise only the empty ones are filled and the rest are reported as `already_set`; `dryRun` (default true) resolves the values but writes nothing, so the caller shows them for confirmation and saves the accepted ones itself; only an explicit `dryRun: false` writes, and it is meant for a caller that has already collected the user's confirmation. The fields are the entry's own: every field of the visible templates it carries, assigned or inherited through a cascade - a hidden template is skipped as the UI and the search skip it - and its existing custom fields - no field is created here, use `POST api/2.0/ai/meta/generate` and the Files metadata API for that. The text is the file itself, converted to plain text under the caller's rights and cut to the same budgets as the generate route. The model bound to `GenerateMeta` (`Default` when that slot is empty) runs once, without tools, and is told to answer null for a value the text does not state. Each value is then checked the way the client's info panel checks a typed value - an integer for a number, a calendar date for a date, one of the field's own options for a choice - and the ones that pass are written with `PUT api/2.0/files/metadata/{kind}/{id}/values` and `.../customFields`, so the caller needs the rights those routes need; a write the portal refuses is reported per field as `write_failed`, and the call fails with the portal's status only when nothing was written at all. The answer carries `dryRun` as it was applied, the entry's metadata after the write (or as it stands, with `dryRun`), the values written or proposed, the fields left empty with the reason for each, and the documents that were read.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-meta-fill/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_meta_fill_request** | [**\OpenAPI\Client\Model\AiMetaFillRequest**](../Model/AiMetaFillRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiMetaFill200Response**](../Model/AiMetaFill200Response.md)

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

$apiInstance = new OpenAPI\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_meta_fill_request = new \OpenAPI\Client\Model\AiMetaFillRequest(); // \OpenAPI\Client\Model\AiMetaFillRequest

try {
    $result = $apiInstance->aiMetaFill($ai_meta_fill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->aiMetaFill: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiMetaGenerate()`

```php
aiMetaGenerate($ai_meta_generate_request): \OpenAPI\Client\Model\AiMetaGenerate200Response
```

Generate metadata fields
Reads one file as text and asks the model bound to the `GenerateMeta` action - the `Default` slot when that action has no profile of its own - which custom metadata fields describe it, and what their values are. `kind` names the entry's table and `id` its integer identifier, the same way as `POST api/2.0/ai/meta/fill`; only `file` is accepted for now, a folder or a room answers 400 until it is settled whether their metadata should describe the entry itself or its files; `prompt` is an optional note on the kind of fields the caller is interested in, which is passed to the model as a hint, never as an instruction. The text is the file itself, converted to plain text through the portal's own conversion (word-processing and presentation formats, pdf included, to txt; spreadsheets to csv), under the caller's rights, so a file the caller cannot read is skipped as `forbidden` rather than failing the call. Each document is cut at 40 000 characters and the whole set at 240 000, which `sources[].truncated` reports. The model runs once, without tools, and the answer is validated: field names are trimmed, deduplicated regardless of case and capped at 50, the portal's own limit for custom fields on one entry; each field carries the value the text supports as a string, or `null` when the text does not state one, since a custom field on the portal is text and cannot be saved empty. Nothing is written: the caller decides which fields to create and saves them through the Files metadata API.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/ai-meta-generate/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ai_meta_generate_request** | [**\OpenAPI\Client\Model\AiMetaGenerateRequest**](../Model/AiMetaGenerateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AiMetaGenerate200Response**](../Model/AiMetaGenerate200Response.md)

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

$apiInstance = new OpenAPI\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_meta_generate_request = new \OpenAPI\Client\Model\AiMetaGenerateRequest(); // \OpenAPI\Client\Model\AiMetaGenerateRequest

try {
    $result = $apiInstance->aiMetaGenerate($ai_meta_generate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->aiMetaGenerate: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
