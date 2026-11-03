# # AiSendStreamBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Target thread; a new one is created (with an auto title) when omitted. | [optional]
**user_message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | The user turn to send. |
**action_args** | [**\OpenAPI\Client\Model\AiActionArgs**](AiActionArgs.md) | Per-request options of the round: extra tools, reasoning, a prompt override and the connected context. | [optional]
**entity_id** | **string** | Optional entity (room) scope for profile resolution. | [optional]
**context_entity_id** | **string** | The folder or room the user is in. Tools run against it and the model is told it is the user's location; falls back to `entityId` when omitted. | [optional]
**profile_id** | **string** | Session-level profile override for this request only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
