# # AiAgentsCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile id bound to the agent. |
**prompt** | **string** | Agent system prompt; stored as the room's `chatSettings.prompt`. |
**private** | **bool** | Whether the agent room is private. | [optional]
**share** | **object[]** | Initial share entries (`FileShareParams`). | [optional]
**attach_default_tools** | **bool** | Whether to attach the default DocSpace MCP tool server. | [optional]
**title** | **string** | Agent (room) title. | [optional]
**quota** | **float** | Room quota in bytes. | [optional]
**indexing** | **bool** | Whether room content is indexed for search. | [optional]
**deny_download** | **bool** | Whether downloading room content is denied. | [optional]
**lifetime** | **object** | Room data lifetime policy (`RoomDataLifetimeDto`). | [optional]
**watermark** | **object** | Watermark settings (`WatermarkRequestDto`). | [optional]
**logo** | **object** | Room logo (`LogoRequest`). | [optional]
**tags** | **string[]** | Room tags. | [optional]
**color** | **string** | Room accent color. | [optional]
**cover** | **string** | Room cover image id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
