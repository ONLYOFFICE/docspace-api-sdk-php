# # SsoSpCertificateActionTypeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signing** | **string** | The key pair signs the requests the portal sends and nothing else. | [optional] [readonly]
**encrypt** | **string** | The key pair encrypts what the portal sends and decrypts what comes back, but signs nothing. | [optional] [readonly]
**signing_and_encrypt** | **string** | The key pair does both, which is what one pair configured on its own has to be set to. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
