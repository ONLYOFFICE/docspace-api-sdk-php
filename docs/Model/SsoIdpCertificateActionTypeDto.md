# # SsoIdpCertificateActionTypeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verification** | **string** | The certificate verifies the signatures on what the provider sends, and nothing else - the counterpart of  the service provider's signing action. | [optional] [readonly]
**decrypt** | **string** | The certificate is used to decrypt what the provider sends, but verifies no signature. | [optional] [readonly]
**verification_and_decrypt** | **string** | The certificate does both, which is what a single provider certificate has to be set to. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
