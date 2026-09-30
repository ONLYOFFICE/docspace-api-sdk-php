# # RoomInvitationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invitations** | [**\OpenAPI\Client\Model\RoomInvitation[]**](RoomInvitation.md) | Who is added, changed or removed, one entry per subject. The same subject named twice keeps the level of the  last entry, and an empty list is accepted and changes nothing. | [optional]
**notify** | **bool** | Whether the subjects that gained access are told about it by email. With it off the change is silent, which is  the usual choice when membership is synchronised from another system. | [optional]
**message** | **string** | The line added to the invitation email. It is used only while the notification is on, and it reaches nobody  whose access was removed. | [optional]
**culture** | **string** | The language of the invitation email, as a portal culture name such as en-US. Leaving it out sends each  message in the language of its recipient. | [optional]
**force** | **bool** | Whether a member who still holds a role in an unfinished form is removed anyway. With it off such a removal is  refused and reported through the error of the answer, so the form can be reassigned first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
