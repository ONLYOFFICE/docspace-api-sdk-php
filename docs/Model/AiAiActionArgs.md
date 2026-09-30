# # AiAiActionArgs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tools** | [**\OpenAPI\Client\Model\AiTMCPItem[]**](AiTMCPItem.md) | Extra tools offered to the model for this request. | [optional]
**is_reasoning** | **bool** | Legacy extended-thinking switch; stands for `medium`. `reasoningLevel` wins when both are set. | [optional]
**reasoning_level** | [**\OpenAPI\Client\Model\AiAiReasoningLevel**](AiAiReasoningLevel.md) | Depth of extended thinking for the round; providers clamp it to what the model accepts. | [optional]
**prompt** | [**\OpenAPI\Client\Model\AiAiActionArgsPrompt**](AiAiActionArgsPrompt.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
