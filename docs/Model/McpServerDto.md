# # McpServerDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the MCP server. | [optional]
**name** | **string** | Display name of the MCP server. | [optional]
**description** | **string** | Human-readable description of the server&#39;s purpose and capabilities. | [optional]
**endpoint** | **string** | Base URL of the MCP server endpoint. | [optional]
**server_type** | [**\OpenAPI\Client\Model\ServerType**](ServerType.md) |  | [optional]
**headers** | **array<string,string>** | HTTP headers sent with every request to the server (e.g., authentication tokens). | [optional]
**enabled** | **bool** | Indicates whether the server is currently enabled and available for room assignment. | [optional]
**icon** | [**\OpenAPI\Client\Model\Icon**](Icon.md) |  | [optional]
**need_reset** | **bool** | Indicates whether the server requires a configuration reset due to connectivity or credential issues. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
