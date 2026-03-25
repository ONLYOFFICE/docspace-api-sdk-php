# # FileOperationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The file operation ID. |
**operation** | [**\OpenAPI\Client\Model\FileOperationType**](FileOperationType.md) |  |
**progress** | **int** | The file operation progress in percentage. |
**error** | **string** | The file operation error message. |
**processed** | **string** | The file operation processing status. |
**finished** | **bool** | Specifies if the file operation is finished or not. |
**url** | **string** | The file operation URL. | [optional]
**files** | [**\OpenAPI\Client\Model\FileEntryBaseDto[]**](FileEntryBaseDto.md) | The list of files of the file operation. | [optional]
**folders** | [**\OpenAPI\Client\Model\FileEntryBaseDto[]**](FileEntryBaseDto.md) | The list of folders of the file operation. | [optional]
**status** | [**\OpenAPI\Client\Model\DistributedTaskStatus**](DistributedTaskStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
