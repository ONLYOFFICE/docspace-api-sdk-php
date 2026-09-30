# # PasswordSettingsRequestsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_length** | **int** | The shortest password the portal will accept. It has to sit between the floor the installation is configured  with, 8 characters unless it was changed, and the ceiling of 30; a value outside that is refused with 400. |
**upper_case** | **bool** | Whether a password must contain at least one uppercase letter. There is no partial update on this body, so  leaving the flag out stores it as `false` and drops the requirement. | [optional]
**digits** | **bool** | Whether a password must contain at least one digit. Leaving the flag out stores it as `false` and drops the  requirement. | [optional]
**spec_symbols** | **bool** | Whether a password must contain at least one special symbol. Leaving the flag out stores it as `false` and  drops the requirement. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
