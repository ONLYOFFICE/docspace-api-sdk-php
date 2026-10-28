# # FormRoleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_id** | **int** | The ID of the room the form is in. It is stored with the role as sent, so pass the room the form lives in. | [optional]
**role_name** | **string** | The name of a role the form defines, such as the one the form author gave a group of fields. | [optional]
**role_color** | **string** | The color the editor marks the fields of this role with, as a hex code. | [optional]
**user_id** | **string** | The account that fills this role. It is notified once filling starts, unless it is the caller. | [optional]
**sequence** | **int** | Accepted for compatibility and ignored: the position of the role in the list sets the filling order. | [optional]
**submitted** | **bool** | Whether this role counts as already submitted. It is stored as sent; send false when filling starts. | [optional]
**opened_at** | **\DateTime** | Accepted for compatibility and ignored: the portal records when the role is opened. | [optional]
**submission_date** | **\DateTime** | Accepted for compatibility and ignored: the portal records when the role is submitted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
