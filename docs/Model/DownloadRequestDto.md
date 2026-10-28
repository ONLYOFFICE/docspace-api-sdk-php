# # DownloadRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_single_operation** | **bool** | Which operations the answer carries: `true` returns the operation this call started and nothing else, `false`  returns every operation of the same kind that the caller has running or unread. When nothing was queued, which  happens for an empty selection, `true` falls back to the full list. | [optional]
**folder_ids** | [**\OpenAPI\Client\Model\DownloadRequestDtoAllOfFolderIds[]**](DownloadRequestDtoAllOfFolderIds.md) | The folders to pack, by id; everything inside them that the caller may read goes into the archive. A number  addresses a folder stored in the portal itself, a string addresses a folder on a connected third-party  account, and both kinds may be sent in one list. | [optional]
**file_ids** | [**\OpenAPI\Client\Model\DownloadRequestDtoAllOfFileIds[]**](DownloadRequestDtoAllOfFileIds.md) | The files to pack as they are, by id, without conversion. A number addresses a file stored in the portal  itself, a string addresses a file on a connected third-party account, and both kinds may be sent in one list. | [optional]
**file_convert_ids** | [**\OpenAPI\Client\Model\DownloadRequestItemDto[]**](DownloadRequestItemDto.md) | The files to convert before they are packed, each named together with the format it is converted to. A file  listed here does not have to be repeated in `fileIds`. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
