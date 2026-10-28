# # EntryTemplateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The template ID. | [optional]
**name** | **string** | The template name. | [optional]
**visible** | **bool** | Specifies if the template is visible in the UI pickers. | [optional]
**cascade** | **bool** | Whether the template cascades from this entry to the folders and files below it. Only a folder or a room can  cascade; on a file the value is always false. | [optional]
**conflict_resolve_type** | [**\OpenAPI\Client\Model\MetadataConflictResolveType**](MetadataConflictResolveType.md) | How the cascade of this entry treats a value an entry below already holds. Null while the template does not  cascade from this entry. | [optional]
**fields** | [**\OpenAPI\Client\Model\EntryFieldDto[]**](EntryFieldDto.md) | The template fields with their values on the entry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
