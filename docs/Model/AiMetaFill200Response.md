# # AiMetaFill200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | Whether the values were only proposed (`true`) or written as well. |
**metadata** | [**\OpenAPI\Client\Model\AiEntryMetadata**](AiEntryMetadata.md) | The entry's metadata after the write (or as it stands, with `dryRun`), as `GET api/2.0/files/metadata/{kind}/{id}` returns it. |
**filled** | [**\OpenAPI\Client\Model\AiMetaFill200ResponseFilledInner[]**](AiMetaFill200ResponseFilledInner.md) | The values written, or proposed with `dryRun`: a typed value for a template field, a string for a custom field. |
**unresolved** | [**\OpenAPI\Client\Model\AiMetaFill200ResponseUnresolvedInner[]**](AiMetaFill200ResponseUnresolvedInner.md) | The fields left as they were, with the reason for each. |
**sources** | [**\OpenAPI\Client\Model\AiMetaFill200ResponseSourcesInner[]**](AiMetaFill200ResponseSourcesInner.md) | The documents the values were read from. |
**skipped** | [**\OpenAPI\Client\Model\AiMetaGenerate200ResponseSkippedInner[]**](AiMetaGenerate200ResponseSkippedInner.md) | The entries that were left out, with the reason for each. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
