# # DeleteBatchRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_single_operation** | **bool** | Specifies whether to return only the current operation | [optional]
**folder_ids** | [**\OpenAPI\Client\Model\DeleteBatchRequestDtoAllOfFolderIds[]**](DeleteBatchRequestDtoAllOfFolderIds.md) | The list of folder IDs to be deleted. | [optional]
**file_ids** | [**\OpenAPI\Client\Model\DeleteBatchRequestDtoAllOfFileIds[]**](DeleteBatchRequestDtoAllOfFileIds.md) | The list of file IDs to be deleted. | [optional]
**delete_after** | **bool** | Specifies whether to delete a file after the editing session is finished or not | [optional]
**immediately** | **bool** | Specifies whether to move a file to the \\Trash\\ folder or delete it immediately. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
