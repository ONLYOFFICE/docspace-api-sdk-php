# # OAuth20Token

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The token sent to the provider with every request made on behalf of the account. | [optional]
**refresh_token** | **string** | The token used to obtain a new access token when the current one expires. A provider that issues no refresh  token leaves it empty, and the account then has to be connected again to keep working. | [optional]
**expires_in** | **int** | How long the access token stays usable, in seconds counted from `timestamp`. Zero means the provider did not  say, and the token is then treated as expired. | [optional]
**client_id** | **string** | The OAuth 2.0 client ID of the application the token was issued to. | [optional]
**client_secret** | **string** | The client secret of the application the token was issued to, needed when the token is refreshed. | [optional]
**redirect_uri** | **string** | The redirect URL the authorization code behind this token was obtained with; providers require the same value  again when the token is refreshed. | [optional]
**timestamp** | **\DateTime** | When the token was issued, in UTC. This is the point `expires_in` is counted from. | [optional]
**is_expired** | **bool** | Whether the access token can no longer be used and has to be refreshed. It is also true when the provider did  not say how long the token lives. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
