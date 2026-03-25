# # ChatSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider_id** | **int** | The AI provider ID. | [optional]
**model_id** | **string** | The AI model ID used for chat completions. | [optional]
**model_alias** | **string** | The AI model display alias. | [optional]
**prompt** | **string** | The system prompt for the chat. | [optional]
**multimodal** | [**\OpenAPI\Client\Model\ChatMultimodalSettingsDto**](ChatMultimodalSettingsDto.md) |  | [optional]
**thinking** | **bool** | Indicates whether the model supports extended thinking mode. | [optional]
**internal** | **bool** | Indicates whether this is an internal AI gateway provider. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
