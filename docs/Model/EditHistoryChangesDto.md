# # EditHistoryChangesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\OpenAPI\Client\Model\EditHistoryAuthorDto**](EditHistoryAuthorDto.md) | The account that made this change, as the editing service reported it; an account it could not name is  reported as a guest. | [optional]
**created** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | When this change was made, written with the offset of the portal's time zone rather than as plain UTC. | [optional]
**document_sha256** | **string** | The SHA-256 hash of the document as it stood after this change, where the editing service recorded one, so  that a client can check a stored copy against the change it claims to hold. Empty when the change record  carries no hash. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
