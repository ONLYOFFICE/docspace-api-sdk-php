# # CreateRoomRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The room name. |
**quota** | **int** | The room quota. | [optional]
**indexing** | **bool** | Specifies whether to create a room with indexing. | [optional]
**deny_download** | **bool** | Specifies whether to deny downloads from the room. | [optional]
**lifetime** | [**\OpenAPI\Client\Model\RoomDataLifetimeDto**](RoomDataLifetimeDto.md) |  | [optional]
**watermark** | [**\OpenAPI\Client\Model\WatermarkRequestDto**](WatermarkRequestDto.md) |  | [optional]
**logo** | [**\OpenAPI\Client\Model\LogoRequest**](LogoRequest.md) |  | [optional]
**tags** | **string[]** | The list of tags. | [optional]
**color** | **string** | The room color. | [optional]
**cover** | **string** | The room cover. | [optional]
**room_type** | [**\OpenAPI\Client\Model\RoomType**](RoomType.md) |  |
**private** | **bool** | Specifies whether the room to be created is private or not. | [optional]
**share** | [**\OpenAPI\Client\Model\FileShareParams[]**](FileShareParams.md) | The collection of sharing parameters. | [optional]
**chat_settings** | [**\OpenAPI\Client\Model\ChatSettings**](ChatSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
