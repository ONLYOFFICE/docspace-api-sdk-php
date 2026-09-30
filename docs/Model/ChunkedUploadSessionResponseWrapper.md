# # ChunkedUploadSessionResponseWrapper

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Always true in a body that reaches the caller, because a call that does not succeed answers with an error  status and no body at all. It cannot be used to tell a refusal from a success. | [optional]
**data** | [**\OpenAPI\Client\Model\ChunkedUploadSessionResponse**](ChunkedUploadSessionResponse.md) | The reserved upload itself, in the same shape the newer session operations answer with directly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
