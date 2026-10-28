# # InvitationLinkDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier to address the link by in `PUT api/2.0/portal/users/invitationlink` and  `DELETE api/2.0/portal/users/invitationlink`. It survives a change of deadline or use limit, so it is  worth storing rather than re-reading. | [optional]
**employee_type** | [**\OpenAPI\Client\Model\EmployeeType**](EmployeeType.md) | The role an account gets by joining through this link. A portal keeps at most one link per role, and the  role of an existing link cannot be changed - the link has to be deleted and created again. |
**expiration** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | When the link stops working, in the portal time zone. It is empty for a link that never expires, which is  what omitting the deadline on create or update leaves behind. | [optional]
**is_expired** | **bool** | Whether that deadline has already passed. A link without a deadline always reports `false`, and an expired  link is still returned rather than treated as gone - it can be revived by moving `expiration`. | [optional]
**max_use_count** | **int** | How many accounts may join through the link in total. It is empty for a link with no use limit, and an  update may not lower it below `currentUseCount`. | [optional]
**current_use_count** | **int** | How many accounts have already joined through the link. It only ever grows, and reaching `maxUseCount`  retires the link as surely as a passed deadline. | [optional]
**url** | **string** | The shortened address to hand to the people being invited. It is signed for the account that read it, so  two administrators are given two different URLs for one and the same link and both of them work; the `id`  above, not this string, is what identifies the link. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
