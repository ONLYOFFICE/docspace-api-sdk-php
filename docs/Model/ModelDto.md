# # ModelDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider_id** | **int** | The unique identifier of the AI provider that offers this model. | [optional]
**provider_title** | **string** | The human-readable display name of the AI provider (e.g., OpenAI, Anthropic). |
**model_id** | **string** | The model identifier as recognized by the AI provider (e.g., gpt-4o, claude-sonnet-4-20250514). |
**price** | [**\OpenAPI\Client\Model\AiChatPrice**](AiChatPrice.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyInfo**](CurrencyInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
