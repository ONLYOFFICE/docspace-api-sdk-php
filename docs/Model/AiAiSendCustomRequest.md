# # AiAiSendCustomRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_stream** | **bool** | Stream the reply (ndjson) when true, else return a single message. |
**system_prompt** | **string** | Caller-supplied system prompt for this one-turn call. |
**user_message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) |  |
**action_args** | [**\OpenAPI\Client\Model\AiAiActionArgs**](AiAiActionArgs.md) | Per-request engine options: extra tools, reasoning, prompt override. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
