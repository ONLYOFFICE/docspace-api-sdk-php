# # UpdateMetadataFieldRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The new field name. | [optional]
**type** | [**\OpenAPI\Client\Model\MetadataFieldType**](MetadataFieldType.md) | The new field type. The type can be changed only while the field has no values. | [optional]
**options** | [**\OpenAPI\Client\Model\MetadataFieldOptionRequest[]**](MetadataFieldOptionRequest.md) | The new choice options of the field. The options in use cannot be removed. | [optional]
**order** | **int** | The new display position of the field inside the template: the fields are shown by it ascending. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
