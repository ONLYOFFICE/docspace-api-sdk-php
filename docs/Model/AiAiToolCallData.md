# # AiAiToolCallData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Thread the assistant message belongs to. |
**message_id** | **string** | Storage id of the assistant message holding the tool call. |
**idx** | **float** | Index of the tool-call content part inside `message.content`. |
**message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | Snapshot of the assistant message at the time the tool call surfaced. |
**action_args** | [**\OpenAPI\Client\Model\AiAiActionArgs**](AiAiActionArgs.md) |  | [optional]
**entity_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
