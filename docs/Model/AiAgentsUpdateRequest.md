# # AiAgentsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile id to rebind (optional). | [optional]
**chat_settings** | **object** | Chat settings (`ChatSettings`); requires a valid provider/model. | [optional]
**send_form_to_external_db** | **bool** | Whether form results are sent to an external DB. | [optional]
**save_form_as_xlsx** | **bool** | Whether forms are saved as XLSX. | [optional]
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
