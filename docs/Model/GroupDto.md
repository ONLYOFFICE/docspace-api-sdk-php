# # GroupDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The group name. |
**parent** | **string** | The parent group ID. | [optional]
**category** | **string** | The group category ID. |
**id** | **string** | The group ID. |
**is_ldap** | **bool** | Specifies if the LDAP settings are enabled for the group or not. |
**is_system** | **bool** | Indicates whether the group is a system group. | [optional]
**manager** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) |  | [optional]
**members** | [**\OpenAPI\Client\Model\EmployeeFullDto[]**](EmployeeFullDto.md) | The list of group members. | [optional]
**shared** | **bool** | Specifies whether the group can be shared or not. | [optional]
**members_count** | **int** | The number of group members. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
