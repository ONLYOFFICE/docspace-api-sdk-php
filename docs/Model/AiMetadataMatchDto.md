# # AiMetadataMatchDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | The ID of the metadata template the matching field belongs to. Null for a custom field, which belongs to no  template the API shows. | [optional]
**field_id** | **int** | The ID of the matching template field. Null for a custom field, which is addressed by its name alone. | [optional]
**field_name** | **string** | The name of the matching field: the template field or the custom field as it is shown in the entry metadata. | [optional]
**value** | **string** | The stored value that holds the searched text, as it was written, not only the matching part of it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
