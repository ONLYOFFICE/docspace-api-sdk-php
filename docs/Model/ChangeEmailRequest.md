# # ChangeEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The new address in plain text, up to 255 characters. It is stored in lowercase, and one of this field and  `encEmail` is required. | [optional]
**enc_email** | **string** | The new address in the encrypted form the confirmation link carries. Pass the value from the link unchanged;  it is used only when `email` is empty. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
