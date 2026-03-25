# # McpServerStatusDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the MCP server. | [optional]
**name** | **string** | Display name of the MCP server. |
**server_type** | [**\OpenAPI\Client\Model\ServerType**](ServerType.md) |  | [optional]
**connected** | **bool** | Indicates whether the current user has an active connection to this server. For direct-connection servers this is always true; for OAuth-based servers it reflects whether the user has completed authorization. | [optional]
**icon** | [**\OpenAPI\Client\Model\Icon**](Icon.md) |  | [optional]
**need_reset** | **bool** | Indicates whether the server requires a configuration reset due to connectivity or credential issues. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
