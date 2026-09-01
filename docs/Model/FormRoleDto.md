# # FormRoleDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role_name** | **string** | The role name. |
**role_color** | **string** | The role color. | [optional]
**user** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) | The user of the role. | [optional]
**sequence** | **int** | The role sequence. |
**submitted** | **bool** | Specifies if the role is submitted. |
**stoped_by** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) | The user who stopped the role. | [optional]
**history** | **array<string,\DateTime>** | The role history. | [optional]
**role_status** | [**\OpenAPI\Client\Model\FormFillingStatus**](FormFillingStatus.md) | The role status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
