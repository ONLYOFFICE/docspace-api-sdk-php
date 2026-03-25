# # AiSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**web_search_enabled** | **bool** | Indicates whether web search is enabled for AI chat sessions. | [optional]
**web_search_need_reset** | **bool** | Indicates whether the web search API key needs to be reconfigured. | [optional]
**vectorization_enabled** | **bool** | Indicates whether document vectorization is enabled. | [optional]
**vectorization_need_reset** | **bool** | Indicates whether the embedding provider API key needs to be reconfigured. | [optional]
**ai_ready** | **bool** | Indicates whether the AI subsystem is fully configured and operational. | [optional]
**ai_ready_need_reset** | **bool** | Indicates whether the AI provider API key needs to be reconfigured. | [optional]
**portal_mcp_server_id** | **string** | The unique identifier of the portal-level MCP server, if configured. | [optional]
**embedding_model** | **string** | The name of the embedding model used for document vectorization. |
**model_aliases** | **array<string,string>** | Mapping of model identifiers to human-readable aliases. |
**knowledge_search_tool_name** | **string** | The tool name used by the AI assistant for knowledge base search. |
**web_search_tool_name** | **string** | The tool name used by the AI assistant for web search. |
**web_crawling_tool_name** | **string** | The tool name used by the AI assistant for web page crawling. |
**generate_docx_tool_name** | **string** | The tool name used by the AI to launch docx creation in the editor. |
**generate_form_tool_name** | **string** | The tool name used by the AI assistant to launch form creation in the editor. |
**generate_presentation_tool_name** | **string** | The tool name used by the AI assistant to launch presentation creation in the editor. |
**system_ai_enabled** | **bool** | Indicates whether the system-level AI provider is enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
