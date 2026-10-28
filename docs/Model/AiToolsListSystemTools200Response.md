# # AiToolsListSystemTools200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groups** | **array<string,\OpenAPI\Client\Model\AiMCPItem[]>** | Tools by server name, covering both the host-configured system servers and the custom MCP servers registered for this scope. |
**errors** | **array<string,string>** | Why a registered custom server could not be reached, keyed by server name. A server that answered is absent from this map. |
**system** | **string[]** | Names of the host-configured system servers among the keys of `groups`; everything else there was registered as a custom server. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
