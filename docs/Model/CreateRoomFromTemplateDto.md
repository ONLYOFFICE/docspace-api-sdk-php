# # CreateRoomFromTemplateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | The template ID from which the room to be created. |
**title** | **string** | The room title. |
**logo** | [**\OpenAPI\Client\Model\LogoRequest**](LogoRequest.md) |  | [optional]
**copy_logo** | **bool** | Specifies whether to copy a logo or not. | [optional]
**tags** | **string[]** | The collection of tags. | [optional]
**color** | **string** | The color of the room to be created. | [optional]
**cover** | **string** | The cover of the room to be created. | [optional]
**quota** | **int** | The room quota. | [optional]
**indexing** | **bool** | Specifies whether to create a room with indexing. | [optional]
**deny_download** | **bool** | Specifies whether to deny downloads from the room. | [optional]
**lifetime** | [**\OpenAPI\Client\Model\RoomDataLifetimeDto**](RoomDataLifetimeDto.md) |  | [optional]
**watermark** | [**\OpenAPI\Client\Model\WatermarkRequestDto**](WatermarkRequestDto.md) |  | [optional]
**private** | **bool** | Specifies whether the room to be created is private or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
