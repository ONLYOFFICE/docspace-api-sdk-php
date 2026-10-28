# # AiEditorToolsList200ResponseToolsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Tool name, as it is passed back to the call endpoint. |
**description** | **string** | What the tool does, empty when the server declares nothing. |
**input_schema** | **array<string,mixed>** | JSON Schema of the tool arguments. |
**require_approval** | **bool** | Whether the editor has to ask the user before running the tool. Read-only operations arrive with this off. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
