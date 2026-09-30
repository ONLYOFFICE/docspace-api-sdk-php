# # RoomFromTemplateStatusDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_id** | **int** | The room the job is creating. It is meaningful once the room exists, which is guaranteed only after  `isCompleted` turns true and `error` stays empty; until then it carries no usable id. |
**progress** | **float** | How far the job has got. The value climbs while the contents of the template are being copied into the new  room and reaches its maximum at the very end. |
**error** | **string** | Why the job stopped. It is empty while the job runs and after a successful one, and a filled value means that  no room was created, so the request has to be repeated rather than waited out. |
**is_completed** | **bool** | Whether the job has ended. It is set both after a successful creation and after a failure, so it is the flag  to poll for, while `error` is what separates the two outcomes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
