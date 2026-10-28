# # InvitationLinkCreateRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_type** | [**\OpenAPI\Client\Model\EmployeeType**](EmployeeType.md) | The role whoever follows the link joins with. Only `DocSpaceAdmin`, `RoomAdmin` and `User` are accepted, and  the role cannot be changed afterwards - delete the link and create one for the other role instead. |
**expiration** | **\DateTime** | When the link stops letting anyone in, read in the portal time zone. It has to lie in the future; leaving it  out creates a link with no deadline at all. | [optional]
**max_use_count** | **int** | How many accounts may join through the link in total. Leaving it out creates a link with no use limit; the  uses spent so far are reported as `currentUseCount`. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
