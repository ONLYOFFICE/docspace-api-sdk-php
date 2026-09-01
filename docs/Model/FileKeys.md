# # FileKeys

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The identifier of the user the file key was issued to. | [optional]
**public_key_id** | **string** | The identifier of the key pair the file key is encrypted for. | [optional]
**private_key_enc** | **string** | The file key, encrypted with the public key of the pair. | [optional]
**tenant_id** | **int** | The identifier of the portal the file belongs to. | [optional]
**file_id** | **int** | The identifier of the file the key unlocks. | [optional]
**create_on** | **\DateTime** | The date and time when the file key was issued. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
