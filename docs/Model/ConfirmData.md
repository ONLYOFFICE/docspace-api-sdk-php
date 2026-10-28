# # ConfirmData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The address the confirmation link was issued for. It has to be the same address the key was signed with, and  a value that is not an email address fails the request with 400. | [optional]
**first** | **bool** | Whether the link is being followed for the first time, taken from the `first` parameter of the confirmation  URL. It is part of what the key was signed over, so passing a different value invalidates the key rather than  changing behaviour. | [optional]
**key** | **string** | The `key` parameter of the confirmation URL, copied verbatim. It is bound to the address and to the moment it  was issued, so it stops being accepted once the portal email key lifetime has passed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
