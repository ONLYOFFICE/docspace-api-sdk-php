# # AiMetaFillRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | The entry's table. Only `file` for now: a folder or a room answers 400. |
**id** | [**\OpenAPI\Client\Model\AiMetaGenerateRequestId**](AiMetaGenerateRequestId.md) |  |
**prompt** | **string** | What to pay attention to; a hint for the model. | [optional]
**overwrite** | **bool** | Also replace the fields that already carry a value. Default false. | [optional]
**dry_run** | **bool** | Resolve the values but write nothing; the caller writes what the user confirms. Default true: a write needs an explicit false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
