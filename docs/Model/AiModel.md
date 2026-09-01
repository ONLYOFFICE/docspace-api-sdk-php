# # AiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Model identifier as used by the provider API (e.g. `gpt-4o`, `claude-sonnet-4-20250514`). |
**name** | **string** | Human-readable model name for display in the UI. |
**provider** | [**\OpenAPI\Client\Model\AiProviderType**](AiProviderType.md) | Provider that offers this model. |
**reasoning** | **bool** | Whether this model supports extended thinking / chain-of-thought reasoning. | [optional]
**capabilities** | **float** | Bitmask of model capabilities (Chat, Image, Vision, Tools, etc.). Used to filter models per  {@link  ActionType  } . | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
