# # DraftLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**folder_id** | **int** | The folder holding the draft: the sub-folder that the room for filling keeps for drafts of this particular  form. | [optional]
**folder_title** | **string** | The title of that folder, which the portal takes from the form itself when the form is released for filling. | [optional]
**file_id** | **int** | The draft itself - the copy the caller fills in, not the original form, and the identifier to pass to the file  operations while filling. | [optional]
**file_title** | **string** | The title of the draft, which the portal builds from the name of the person filling it and the name of the  form. Null when the draft the record points at no longer exists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
