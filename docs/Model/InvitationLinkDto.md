# # InvitationLinkDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the invitation link. | [optional]
**employee_type** | [**\OpenAPI\Client\Model\EmployeeType**](EmployeeType.md) |  |
**expiration** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**is_expired** | **bool** | Indicates whether the invitation link has expired. | [optional]
**max_use_count** | **int** | The maximum number of times the invitation link can be used. | [optional]
**current_use_count** | **int** | The current number of times the invitation link has been used. | [optional]
**url** | **string** | The URL of the invitation link. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
