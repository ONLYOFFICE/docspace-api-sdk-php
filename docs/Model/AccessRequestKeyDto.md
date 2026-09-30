# # AccessRequestKeyDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The account that is to open the file with this key; it has to have read access to the file. | [optional]
**public_key_id** | **string** | The public key the file key was encrypted with, as reported for that account by  `GET api/2.0/files/file/{fileId}/publickeys`. | [optional]
**private_key_enc** | **string** | The key of the file itself, encrypted by the client with that public key, so that the plain key never reaches  the portal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
