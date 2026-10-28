# # ChangeOwnerRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**folder_ids** | [**\OpenAPI\Client\Model\BatchRequestDtoAllOfFileIds[]**](BatchRequestDtoAllOfFileIds.md) | The rooms to hand over, identified as `GET api/2.0/files/rooms` returns them - a number for a room stored on  the portal and a string for one that lives on a connected third-party account. Only rooms belong here; a  folder inside a room is refused. | [optional]
**file_ids** | [**\OpenAPI\Client\Model\BatchRequestDtoAllOfFileIds[]**](BatchRequestDtoAllOfFileIds.md) | The files to hand over, identified as a listing operation returns them - a number for a file stored on the  portal and a string for one on a connected third-party account. Only a file kept in the portal's common  section is accepted. | [optional]
**user_id** | **string** | The account that becomes the owner of every listed entry. It has to be an active member allowed to manage  rooms, so a deactivated account, a guest or a plain member is rejected, and for a private room the account  must have set up its encryption keys beforehand. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
