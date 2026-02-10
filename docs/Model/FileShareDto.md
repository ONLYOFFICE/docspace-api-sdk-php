# # FileShareDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) |  | [optional]
**shared_to** | **mixed** | The user who has the access to the specified file. | [optional]
**shared_to_user** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) |  | [optional]
**shared_to_group** | [**\OpenAPI\Client\Model\GroupSummaryDto**](GroupSummaryDto.md) |  | [optional]
**shared_link** | [**\OpenAPI\Client\Model\FileShareLink**](FileShareLink.md) |  | [optional]
**is_locked** | **bool** | Specifies if the access right is locked or not. |
**is_owner** | **bool** | Specifies if the user is an owner of the specified file or not. |
**can_edit_access** | **bool** | Specifies if the user can edit the access to the specified file or not. |
**can_edit_internal** | **bool** | Indicates whether internal editing permissions are granted. |
**can_edit_deny_download** | **bool** | Determines whether the user has permission to modify the deny download setting for the file share. |
**can_edit_expiration_date** | **bool** | Indicates whether the expiration date of access permissions can be edited. |
**can_revoke** | **bool** | Specifies whether the file sharing access can be revoked by the current user. |
**subject_type** | [**\OpenAPI\Client\Model\SubjectType**](SubjectType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
