# # FileEntryBaseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The file entry title. | [optional]
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) |  | [optional]
**shared_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**owned_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**shared** | **bool** | Specifies if the file entry is shared via link or not. | [optional]
**shared_for_user** | **bool** | Specifies if the file entry is shared for user or not. | [optional]
**parent_shared** | **bool** | Indicates whether the parent entity is shared. | [optional]
**short_web_url** | **string** | The short Web URL. | [optional]
**created** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**created_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**updated** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**auto_delete** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**root_folder_type** | [**\OpenAPI\Client\Model\FolderType**](FolderType.md) |  | [optional]
**parent_room_type** | [**\OpenAPI\Client\Model\FolderType**](FolderType.md) |  | [optional]
**updated_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**provider_item** | **bool** | Specifies if the file entry provider is specified or not. | [optional]
**provider_key** | **string** | The provider key of the file entry. | [optional]
**provider_id** | **int** | The provider ID of the file entry. | [optional]
**order** | **string** | The order of the file entry. | [optional]
**is_favorite** | **bool** | Specifies if the file is a favorite or not. | [optional]
**file_entry_type** | [**\OpenAPI\Client\Model\FileEntryType**](FileEntryType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
