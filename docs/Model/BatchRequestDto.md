# # BatchRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_single_operation** | **bool** | Specifies whether to return only the current operation | [optional]
**folder_ids** | **int[]** | The list of folder IDs to be copied/moved. | [optional]
**file_ids** | **int[]** | The list of file IDs to be copied/moved. | [optional]
**dest_folder_id** | **int** |  | [optional]
**conflict_resolve_type** | [**\OpenAPI\Client\Model\FileConflictResolveType**](FileConflictResolveType.md) |  | [optional]
**delete_after** | **bool** | Specifies whether to delete the source files/folders after they are moved or copied to the destination folder. | [optional]
**content** | **bool** | Specifies whether to copy or move the folder content or not. | [optional]
**to_fill_out** | **bool** | Specifies whether the file is copied for filling out | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
