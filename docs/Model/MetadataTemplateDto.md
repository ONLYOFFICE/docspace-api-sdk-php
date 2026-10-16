# # MetadataTemplateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The template ID. | [optional]
**name** | **string** | The template name. | [optional]
**visible** | **bool** | Specifies if the template is visible in the UI pickers. | [optional]
**create_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) | The user who created the template. A user who has since left the portal comes back as the lost user placeholder. | [optional]
**create_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The template creation date. | [optional]
**modified_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) | The user who changed the template itself last: its name or its visibility. The creator until somebody changes  it; a change of a field is recorded on the field, not here. | [optional]
**modified_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The date when the template was modified last. | [optional]
**fields** | [**\OpenAPI\Client\Model\MetadataFieldDto[]**](MetadataFieldDto.md) | The template metadata fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
