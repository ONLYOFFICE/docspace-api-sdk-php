# # UpdateRoomRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The room title. | [optional]
**quota** | **int** | The room quota. | [optional]
**indexing** | **bool** | Specifies whether to create a third-party room with indexing. | [optional]
**deny_download** | **bool** | Specifies whether to deny downloads from the third-party room. | [optional]
**lifetime** | [**\OpenAPI\Client\Model\RoomDataLifetimeDto**](RoomDataLifetimeDto.md) |  | [optional]
**watermark** | [**\OpenAPI\Client\Model\WatermarkRequestDto**](WatermarkRequestDto.md) |  | [optional]
**logo** | [**\OpenAPI\Client\Model\LogoRequest**](LogoRequest.md) |  | [optional]
**tags** | **string[]** | The list of tags. | [optional]
**color** | **string** | The room color. | [optional]
**cover** | **string** | The room cover. | [optional]
**chat_settings** | [**\OpenAPI\Client\Model\ChatSettings**](ChatSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
