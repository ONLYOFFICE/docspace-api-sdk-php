# # AiEditorToolsCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the tool to run, as listed by the tools endpoint. A name that is unknown or excluded from the editor is rejected with 400. |
**arguments** | **array<string,mixed>** | Arguments for the tool, shaped by that tool's own input schema. Treated as empty when it is not an object. | [optional]
**entity_id** | **string** | Room the call is scoped to. Left out for a portal-wide call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
