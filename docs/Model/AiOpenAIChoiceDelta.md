# # AiOpenAIChoiceDelta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | Sent on the first chunk only, always `assistant`. | [optional]
**content** | **string** | The text this chunk appends. Null when the chunk carries no text. | [optional]
**tool_calls** | [**\OpenAPI\Client\Model\AiOpenAIToolCallDelta[]**](AiOpenAIToolCallDelta.md) | The tool calls the model requested, emitted in place of text. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
