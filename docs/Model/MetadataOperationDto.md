# # MetadataOperationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The operation ID. | [optional]
**progress** | **float** | The operation progress percentage. | [optional]
**is_completed** | **bool** | Specifies if the operation is completed. | [optional]
**error** | **string** | The operation error message. | [optional]
**template_ids** | **int[]** | The IDs of the metadata templates the operation propagates to the subtree. Empty when there is no operation to  report, so the answer describes nothing in progress. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
