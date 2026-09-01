# # AiAiSendStreamBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Target thread; a new one is created (with an auto title) when omitted. | [optional]
**user_message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | The user turn to send. |
**action_args** | [**\OpenAPI\Client\Model\AiAiActionArgs**](AiAiActionArgs.md) |  | [optional]
**entity_id** | **string** | Optional entity (room) scope for profile resolution. | [optional]
**profile_id** | **string** | Session-level profile override for this request only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
