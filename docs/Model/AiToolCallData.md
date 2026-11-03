# # AiToolCallData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Thread the assistant message belongs to. |
**message_id** | **string** | Storage id of the assistant message holding the tool call. |
**idx** | **float** | Index of the tool-call content part inside `message.content`. |
**message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | A copy of the assistant message as it was when the tool call surfaced. Optional and ignored: the round resumes from the stored message. Leave it out - a long conversation's copy can push the body past the size limit. | [optional]
**action_args** | [**\OpenAPI\Client\Model\AiActionArgs**](AiActionArgs.md) | Per-request options of the round: extra tools, reasoning, a prompt override and the connected context. | [optional]
**entity_id** | **string** | Optional entity (room) scope for profile resolution. | [optional]
**context_entity_id** | **string** | The folder or room the user is in. Tools run against it and the model is told it is the user's location; falls back to `entityId` when omitted. | [optional]
**profile_id** | **string** | Session-level profile override for this request only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
