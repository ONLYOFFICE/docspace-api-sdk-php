# # MetadataValueRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_id** | **int** | The field ID. |
**string_value** | **string** | The string value. | [optional]
**number_value** | **int** | The number value: a whole number of at most 2^53-1 (9007199254740991) in magnitude, the largest integer a JSON  client reads exactly. A larger one is refused rather than stored and returned rounded. | [optional]
**date_value** | **\DateTime** | The date value. A value without a time zone offset is treated as UTC, the same way the metadata filters treat their date bounds. | [optional]
**option_ids** | **string[]** | The selected choice option IDs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
