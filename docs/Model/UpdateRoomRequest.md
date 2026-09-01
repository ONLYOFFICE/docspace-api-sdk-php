# # UpdateRoomRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The room title. | [optional]
**quota** | **int** | The room quota. | [optional]
**indexing** | **bool** | Specifies whether to create a third-party room with indexing. | [optional]
**deny_download** | **bool** | Specifies whether to deny downloads from the third-party room. | [optional]
**lifetime** | [**\OpenAPI\Client\Model\RoomDataLifetimeDto**](RoomDataLifetimeDto.md) | The room data lifetime information. | [optional]
**watermark** | [**\OpenAPI\Client\Model\WatermarkRequestDto**](WatermarkRequestDto.md) | The watermark settings. | [optional]
**logo** | [**\OpenAPI\Client\Model\LogoRequest**](LogoRequest.md) | The room logo. | [optional]
**tags** | **string[]** | The list of tags. | [optional]
**color** | **string** | The room color, as a six-digit hexadecimal value without a leading '#'. | [optional]
**cover** | **string** | The room cover. | [optional]
**chat_settings** | [**\OpenAPI\Client\Model\ChatSettings**](ChatSettings.md) | The chat settings. | [optional]
**send_form_to_external_db** | **bool** | Specifies whether to send form data to external database. | [optional]
**save_form_as_xlsx** | **bool** | Specifies whether to save form data as XLSX file. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
