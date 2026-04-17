# # CreateProviderRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\ProviderType**](ProviderType.md) |  | [optional]
**title** | **string** | The display title for the AI provider. |
**url** | **string** | The API endpoint URL for the AI provider. Required for OpenAiCompatible type; optional for other types that have default URLs. | [optional]
**key** | **string** | The authentication API key for the AI provider. |
**model_settings** | [**\OpenAPI\Client\Model\ModelSettingsItemDto[]**](ModelSettingsItemDto.md) | Optional list of model settings to configure atomically with the provider creation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
