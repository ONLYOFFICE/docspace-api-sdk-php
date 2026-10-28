# # EntryFieldDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The field ID. | [optional]
**name** | **string** | The field name. | [optional]
**type** | [**\OpenAPI\Client\Model\MetadataFieldType**](MetadataFieldType.md) | The field type. | [optional]
**options** | [**\OpenAPI\Client\Model\MetadataFieldOptionDto[]**](MetadataFieldOptionDto.md) | The choice options of the field. | [optional]
**order** | **int** | The field display order inside the template. | [optional]
**value** | [**\OpenAPI\Client\Model\MetadataValueDto**](MetadataValueDto.md) | The value of the field on the entry, or `null` when the entry holds no value for it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
