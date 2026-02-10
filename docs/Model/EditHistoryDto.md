# # EditHistoryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document ID. | [optional]
**key** | **string** | The document identifier used to unambiguously identify the document file. | [optional]
**version** | **int** | The document version number. | [optional]
**version_group** | **int** | The document version group. | [optional]
**user** | [**\OpenAPI\Client\Model\EditHistoryAuthor**](EditHistoryAuthor.md) |  | [optional]
**created** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**changes_history** | **string** | The file history changes in the string format. | [optional]
**changes** | [**\OpenAPI\Client\Model\EditHistoryChangesWrapper[]**](EditHistoryChangesWrapper.md) | The list of file history changes. | [optional]
**server_version** | **string** | The current server version number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
