# # ExternalDbSyncFormResultDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The file of the original form whose collected data was exported. It is the form itself, not one of the filled  copies, so the same id can be read with the file operations of the portal. | [optional]
**title** | **string** | The name of that form file at the moment of the export. It is empty when the form file no longer exists, which  is also the case in which the export of that entry fails. | [optional]
**success** | **bool** | Whether the data of this form reached the external database. One rejected form does not stop the others, so a  finished job can hold both successful and failed entries. | [optional]
**error** | **string** | Why this form was not exported. It is empty for a successful entry, and for a failed one it carries either the  message of the underlying failure or the generic export error of the portal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
