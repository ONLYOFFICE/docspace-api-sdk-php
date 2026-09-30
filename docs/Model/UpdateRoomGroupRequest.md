# # UpdateRoomGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rooms_to_add** | [**\OpenAPI\Client\Model\DuplicateRequestDtoAllOfFileIds[]**](DuplicateRequestDtoAllOfFileIds.md) | The rooms to attach to the group, each given as a number for a room stored in the portal or as a string for a  room on a connected third-party account. Every identifier has to name a room the caller can read; repeats and  rooms the group already holds are collapsed rather than refused. | [optional]
**rooms_to_remove** | [**\OpenAPI\Client\Model\DuplicateRequestDtoAllOfFileIds[]**](DuplicateRequestDtoAllOfFileIds.md) | The rooms to detach from the group, in the same two forms. Detaching leaves the room and its content  untouched, and a room the group already holds can be detached even when the caller has lost access to it in  the meantime. | [optional]
**group_name** | **string** | The new name of the group, trimmed of surrounding spaces before it is stored. Leaving the member out keeps the  current name, and a name that is blank once trimmed is refused. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
