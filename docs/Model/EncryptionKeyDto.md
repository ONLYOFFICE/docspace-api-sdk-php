# # EncryptionKeyDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the key pair. | [optional]
**user_id** | **string** | The identifier of the user the key pair belongs to. | [optional]
**date** | **\DateTime** | The date and time when the key pair was created. | [optional]
**public_key** | **string** | The public key of the pair, used to encrypt the file keys. | [optional]
**private_key_enc** | **string** | The private key of the pair, encrypted with the user password. | [optional]
**crypto_engine_id** | **string** | The identifier of the crypto engine the key pair was issued for. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
