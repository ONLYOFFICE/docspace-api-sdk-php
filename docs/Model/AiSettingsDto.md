# # AiSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vectorization_enabled** | **bool** | Indicates whether document vectorization is enabled. | [optional]
**vectorization_need_reset** | **bool** | Indicates whether the embedding provider API key needs to be reconfigured. | [optional]
**ai_ready** | **bool** | Indicates whether the AI subsystem is fully configured and operational. | [optional]
**embedding_model** | **string** | The name of the embedding model used for document vectorization. |
**system_ai_enabled** | **bool** | Indicates whether the system-level AI provider is enabled. | [optional]
**recommended_model_for_forms** | **string** | The identifier of the model recommended for form generation. | [optional]
**tool_permission_mode** | [**\OpenAPI\Client\Model\AiToolPermissionMode**](AiToolPermissionMode.md) | How tool calls made by the model are approved for the current user. The default applies while the user has stored nothing. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
