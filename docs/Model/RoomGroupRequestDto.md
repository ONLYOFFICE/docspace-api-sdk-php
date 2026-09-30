# # RoomGroupRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name to show the group under. Surrounding spaces are trimmed before it is stored, a name that is blank  once trimmed is refused, and the name does not have to differ from the names of the caller's other groups. |
**icon** | **string** | The icon of the group, given as the identifier of one of the built-in covers listed by  `GET api/2.0/files/rooms/covers`. An uploaded image cannot be used, and any value that is not one of those  identifiers is refused. |
**rooms** | [**\OpenAPI\Client\Model\DuplicateRequestDtoAllOfFileIds[]**](DuplicateRequestDtoAllOfFileIds.md) | The rooms to gather in the group, each given as a number for a room stored in the portal or as a string for a  room on a connected third-party account. Every identifier has to name a room the caller can read; repeats are  collapsed, and an element of any other shape - a decimal number, a number sent as a string, null - is refused. |
**search_area** | [**\OpenAPI\Client\Model\SearchArea**](SearchArea.md) | The section the group belongs to: Active for Rooms and Forms for Forms. Active when omitted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
