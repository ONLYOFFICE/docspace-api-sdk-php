# # AiProviderDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | AI provider identifier. | [optional]
**title** | **string** | AI provider display title. |
**type** | [**\OpenAPI\Client\Model\ProviderType**](ProviderType.md) |  | [optional]
**url** | **string** | API endpoint URL for the AI provider. | [optional]
**created_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  |
**modified_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  |
**need_reset** | **bool** | Indicates whether the provider&#39;s API key needs to be reset. | [optional]
**is_default** | **bool** | Indicates whether this provider is the default provider for the tenant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
