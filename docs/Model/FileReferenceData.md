# # FileReferenceData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_key** | **string** | The id of the document inside the portal named below. | [optional]
**instance_id** | **string** | The portal the document lives in. A reference whose value is not this portal cannot be resolved by the file  key and falls back to the path or the link. | [optional]
**room_id** | **string** | The room the document lies in. It is filled in only for a document opened in a virtual data room, and stays  empty everywhere else. | [optional]
**can_edit_room** | **bool** | Whether the caller may manage the room named above; it is only meaningful together with it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
