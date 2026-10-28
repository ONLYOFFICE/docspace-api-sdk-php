# # UpdateMembersRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_ids** | **string[]** | The accounts the operation applies to. System accounts are dropped from the list without an error, and the  remaining ones are processed in the order they are given. | [optional]
**resend_all** | **bool** | Reaches every pending account of the portal instead of the ones in `userIds`. It is read only by  `PUT api/2.0/people/invite` and is ignored by every other operation that binds this body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
