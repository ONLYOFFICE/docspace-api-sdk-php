# # OperationTokenUsageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_tokens** | **int** | All tokens of the request: prompt plus completion. | [optional]
**prompt_tokens** | **int** | Tokens sent to the model, cached ones included. | [optional]
**completion_tokens** | **int** | Tokens the model generated, reasoning ones included. | [optional]
**cached_tokens** | **int** | Part of the prompt tokens read from the provider cache. | [optional]
**cache_write_tokens** | **int** | Part of the prompt tokens written to the provider cache. | [optional]
**reasoning_tokens** | **int** | Part of the completion tokens the model spent on reasoning. | [optional]
**image_tokens** | **int** | Tokens spent on images. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
