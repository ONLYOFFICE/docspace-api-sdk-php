# # AiOpenAIChatCompletionChunk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The completion identifier, stable across every chunk of one response. |
**object** | **string** | Always `chat.completion.chunk`. |
**created** | **float** | When the completion started, in Unix seconds. |
**model** | **string** | The model that produced the completion - the resolved profile's model. |
**choices** | [**\OpenAPI\Client\Model\AiOpenAIChunkChoice[]**](AiOpenAIChunkChoice.md) | The choices carried by this chunk. This service emits exactly one. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
