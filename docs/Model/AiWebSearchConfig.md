# # AiWebSearchConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider** | **string** | Provider identifier (e.g. `exa`). |
**key** | **string** | API key for the provider. Optional for self-hosted or keyless setups. | [optional]
**base_url** | **string** | Optional override for the provider's base URL. | [optional]
**is_cloud_provider** | **bool** | Whether this provider is cloud-hosted (vs. self-hosted). | [optional]
**headers** | **array<string,string>** | Extra HTTP headers sent with each request to the ONLYOFFICE / cloud backend (e.g. `X-Tenant`). Merged after the derived `Authorization` header, so a custom header of the same name wins. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
