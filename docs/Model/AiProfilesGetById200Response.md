# # AiProfilesGetById200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique profile identifier (UUID). |
**name** | **string** | User-defined profile display name. |
**provider_type** | [**\OpenAPI\Client\Model\AiProviderType**](AiProviderType.md) | The provider type of the profile. `external` sends every request through a transport the embedding application supplies while parsing the answers with the provider named in `basedOn`. |
**based_on** | [**\OpenAPI\Client\Model\AiBuiltinProviderType**](AiBuiltinProviderType.md) | Selects the response-format parser used by the `external` provider. Ignored for any other `providerType`.  Supported values are `openai`, `anthropic`, `mistral` and `openrouter`. Remaining values (`genai`, `stabilityai`, …) are accepted by the type but not yet implemented; passing one raises an error at request time. | [optional]
**base_url** | **string** | Base URL of the provider API. |
**model_id** | **string** | Selected model ID within this provider. |
**reasoning** | **bool** | Whether extended thinking is enabled for this profile's model. | [optional]
**reasoning_support** | [**\OpenAPI\Client\Model\AiReasoningSupport**](AiReasoningSupport.md) | What the model can do with extended thinking, as the provider's catalogue reported it when the profile was saved; the effort choices in the chat follow it. When absent, the abilities are taken from the model ID. | [optional]
**capabilities** | **float** | Bitmask of capabilities supported by the selected model. | [optional]
**can_use_tool** | **bool** | Result of the live tool-capability probe performed at create time and on changes to `modelId` / `providerType` / `baseUrl`. `undefined` means the probe has never run for this profile (legacy record). | [optional]
**use_responses_api** | **bool** | Result of the live Responses-API probe (parallel to `canUseTool`). `true` means the model speaks `/v1/responses` and the OpenAI provider must route through `client.responses.create` — required for gpt-5+ reasoning models that reject `reasoning_effort` together with `tools` on `/v1/chat/completions`. Probed at create time and whenever `modelId` / `providerType` / `baseUrl` change. `undefined` means the probe never ran (legacy record) — readers treat that as `false`. | [optional]
**is_cloud_provider** | **bool** | Whether this profile uses a cloud-hosted provider (e.g. ONLYOFFICE DocSpace). | [optional]
**use_proxy** | **bool** | Whether the chat client sends this profile's provider requests through the portal's proxy instead of directly. Has no effect when no proxy is configured. | [optional]
**created_at** | **float** | Creation timestamp (ms since epoch). Used to sort the AI models list newest-first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
