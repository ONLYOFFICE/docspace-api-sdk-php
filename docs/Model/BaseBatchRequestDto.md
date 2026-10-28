# # BaseBatchRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_single_operation** | **bool** | Which operations the answer carries: `true` returns the operation this call started and nothing else, `false`  returns every operation of the same kind that the caller has running or unread. When nothing was queued, which  happens for an empty selection, `true` falls back to the full list. | [optional]
**folder_ids** | [**\OpenAPI\Client\Model\BaseBatchRequestDtoAllOfFolderIds[]**](BaseBatchRequestDtoAllOfFolderIds.md) | The folders to act on, by id, as reported by a folder listing such as `GET api/2.0/files/{folderId}`. A number  addresses a folder stored in the portal itself, a string addresses a folder on a connected third-party  account, and both kinds may be sent in one list. | [optional]
**file_ids** | [**\OpenAPI\Client\Model\BaseBatchRequestDtoAllOfFileIds[]**](BaseBatchRequestDtoAllOfFileIds.md) | The files to act on, by id, as reported by a folder listing such as `GET api/2.0/files/{folderId}`. A number  addresses a file stored in the portal itself, a string addresses a file on a connected third-party account,  and both kinds may be sent in one list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
