# # ThirdPartyParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_data** | [**\OpenAPI\Client\Model\AuthData**](AuthData.md) | The stored credentials of the account. They are not filled in here: the portal does not give back credentials  once an account is saved. | [optional]
**corporate** | **bool** | Whether the account is attached to the legacy Common section, which is the case only for accounts inherited  from an older portal. | [optional]
**rooms_storage** | **bool** | Whether the account is attached to the Rooms section, room templates and the archive counted in. This is where  `POST api/2.0/files/thirdparty` puts every account it connects. | [optional]
**customer_title** | **string** | The name the account is shown under in the portal, as it was saved when the account was connected. | [optional]
**provider_id** | **int** | The account ID to send to `DELETE api/2.0/files/thirdparty/{providerId}`, or as `providerId` to  re-authenticate the account. | [optional]
**provider_key** | **string** | The storage service behind the account. `WebDav` stands for every WebDAV preset, so it does not tell which of  them was chosen when the account was connected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
