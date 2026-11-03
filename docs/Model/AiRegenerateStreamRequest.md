# # AiRegenerateStreamRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Target thread (must already exist). |
**message_id** | **string** | The user message to re-roll from: everything stored after it is deleted. When omitted, or no longer in the thread, the last user message is used. | [optional]
**keep_count** | **int** | How many messages from the start of the thread to keep, used when `messageId` does not resolve. The message at `keepCount - 1` has to be a user message; otherwise the value is ignored. | [optional]
**expected_length** | **int** | The thread length the caller saw when it computed `keepCount`. When it differs from the stored length, `keepCount` is discarded and the last user message is used instead. | [optional]
**action_args** | [**\OpenAPI\Client\Model\AiActionArgs**](AiActionArgs.md) | Per-request options of the round: extra tools, reasoning, a prompt override and the connected context. | [optional]
**entity_id** | **string** | Optional entity (room) scope for profile resolution. | [optional]
**context_entity_id** | **string** | The folder or room the user is in. Tools run against it and the model is told it is the user's location; falls back to `entityId` when omitted. | [optional]
**profile_id** | **string** | Session-level profile override for this request only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
