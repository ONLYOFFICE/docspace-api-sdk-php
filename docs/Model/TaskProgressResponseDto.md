# # TaskProgressResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the queued job. It identifies this run of the job and changes every time the job is started again. |
**error** | **string** | The message of the error that stopped the job. It is empty while the job is running and after a job that  succeeded, and it is the only place where the reason for a failure is reported. | [optional]
**percentage** | **int** | The share of the job that is already done, from 0 to 100. |
**is_completed** | **bool** | Specifies whether the job has stopped running. This is the field to poll: true means the job will not change  any more, whether it succeeded, failed or was cancelled, and `status` tells which of the three it is. |
**status** | [**\OpenAPI\Client\Model\DistributedTaskStatus**](DistributedTaskStatus.md) | The state of the job: `Created` while it waits in the queue, `Running` while it works, `Completed` once it has  finished on its own, `Canceled` after a terminate operation, and `Failted` when it stopped on an error, in  which case `error` carries the reason. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
