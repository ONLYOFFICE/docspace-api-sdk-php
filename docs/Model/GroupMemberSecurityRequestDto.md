# # GroupMemberSecurityRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) | The group member parameters. |
**group_access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) | The group access rights to the files. |
**user_access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) | The group member access rights to the files. | [optional]
**overridden** | **bool** | Specifies if the group access rights are overridden or not. |
**can_edit_access** | **bool** | Specifies if the group member can edit the group access rights or not. |
**owner** | **bool** | Specifies if the group member is a group owner or not. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
