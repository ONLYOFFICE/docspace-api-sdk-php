# # AiSendCustomRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_stream** | **bool** | Stream the reply (ndjson) when true, else return a single message. |
**system_prompt** | **string** | Caller-supplied system prompt for this one-turn call. |
**user_message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) |  |
**action_args** | [**\OpenAPI\Client\Model\AiActionArgs**](AiActionArgs.md) | Per-request options of the round: extra tools, reasoning, a prompt override and the connected context. | [optional]
**profile_id** | **string** | Profile to run this call on. When omitted, or when no profile has this id, the `Default` assignment is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
