# # RoomNewItemsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room** | [**\OpenAPI\Client\Model\FileEntryBaseDto**](FileEntryBaseDto.md) | The room the entries were found in, in its short form: only the identifier, the title, the room type and the  logo are filled in. | [optional]
**items** | [**\OpenAPI\Client\Model\FileEntryBaseDto[]**](FileEntryBaseDto.md) | The files of that room the caller has not opened yet, the most recently changed first. Reading them here does  not clear the badges; opening the room itself does. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
