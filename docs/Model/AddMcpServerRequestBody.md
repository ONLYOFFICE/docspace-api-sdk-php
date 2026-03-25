# # AddMcpServerRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique display name for the server. Only letters, numbers, underscores, and hyphens are allowed. Maximum 128 characters. |
**description** | **string** | Human-readable description of the server&#39;s purpose and capabilities. Maximum 255 characters. |
**endpoint** | **string** | Base URL of the MCP server endpoint. Must be a valid, reachable URL. The system will verify connectivity during registration. |
**headers** | **array<string,string>** | Optional HTTP headers to include with every request to the MCP server (e.g., authentication tokens or API keys). | [optional]
**icon** | **string** | Optional Base64-encoded icon image for the server. Used as the visual identifier in the UI. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
