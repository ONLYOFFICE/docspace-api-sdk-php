# # AuthData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**login** | **string** | The account name at the storage service. | [optional]
**password** | **string** | The password of the account at the storage service. | [optional]
**raw_token** | **string** | The token of the account, kept as the raw JSON document the storage service issued it in. | [optional]
**url** | **string** | The address of the storage server the account lives on. | [optional]
**provider** | **string** | The storage service the credentials belong to, as the provider key the account was connected with. | [optional]
**token** | [**\OpenAPI\Client\Model\OAuth20Token**](OAuth20Token.md) | The same token as in `rawToken`, parsed into its OAuth 2.0 fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
