# # ExternalDbSyncTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The task ID. |
**error** | **string** | The error message if the synchronization failed. | [optional]
**percentage** | **int** | The progress percentage of the synchronization. |
**is_completed** | **bool** | Specifies whether the synchronization is completed or not. |
**status** | [**\OpenAPI\Client\Model\DistributedTaskStatus**](DistributedTaskStatus.md) | The status of the synchronization task. |
**forms** | [**\OpenAPI\Client\Model\ExternalDbSyncFormResultDto[]**](ExternalDbSyncFormResultDto.md) | The synchronization results for all original forms in the room. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
