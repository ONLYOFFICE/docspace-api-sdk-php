# # AiFileEntryBaseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The file entry title. | [optional]
**access** | [**\OpenAPI\Client\Model\AiFileShare**](AiFileShare.md) | The access rights to the file entry. | [optional]
**shared_by** | [**\OpenAPI\Client\Model\AiEmployeeDto**](AiEmployeeDto.md) | Provides information about the employee who shared the file or folder. | [optional]
**owned_by** | [**\OpenAPI\Client\Model\AiEmployeeDto**](AiEmployeeDto.md) | The information about the employee who owns the file entry. | [optional]
**shared** | **bool** | Specifies if the file entry is shared via link or not. | [optional]
**shared_for_user** | **bool** | Specifies if the file entry is shared for user or not. | [optional]
**shared_external** | **bool** | Specifies if the file entry is shared via a public (non-internal) external link. | [optional]
**parent_shared** | **bool** | Indicates whether the parent entity is shared. | [optional]
**short_web_url** | **string** | The short Web URL. | [optional]
**created** | **\DateTime** | The creation date and time of the file entry. | [optional]
**created_by** | [**\OpenAPI\Client\Model\AiEmployeeDto**](AiEmployeeDto.md) | The file entry author. | [optional]
**updated** | **\DateTime** | The last date and time when the file entry was updated. | [optional]
**auto_delete** | **\DateTime** | The date and time when the file entry will be automatically deleted. | [optional]
**root_folder_type** | [**\OpenAPI\Client\Model\AiFolderType**](AiFolderType.md) | The root folder type of the file entry. | [optional]
**parent_room_type** | [**\OpenAPI\Client\Model\AiFolderType**](AiFolderType.md) | The parent room type of the file entry. | [optional]
**updated_by** | [**\OpenAPI\Client\Model\AiEmployeeDto**](AiEmployeeDto.md) | The user who updated the file entry. | [optional]
**provider_item** | **bool** | Specifies if the file entry provider is specified or not. | [optional]
**provider_key** | **string** | The provider key of the file entry. | [optional]
**provider_id** | **int** | The provider ID of the file entry. | [optional]
**order** | **string** | The order of the file entry. | [optional]
**is_favorite** | **bool** | Specifies if the file is a favorite or not. | [optional]
**file_entry_type** | [**\OpenAPI\Client\Model\AiFileEntryType**](AiFileEntryType.md) | The file entry type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
