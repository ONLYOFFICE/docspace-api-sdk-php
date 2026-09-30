# # ExchangeToken200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The token to send as a Bearer credential when calling the portal on the user behalf. | [optional]
**token_type** | **string** | How the access token is to be presented. It is always Bearer. | [optional]
**expires_in** | **int** | How many seconds the access token stays valid, counted from the moment it was issued. | [optional]
**refresh_token** | **string** | The token that buys a new access token once the current one expires. It is present only when the client is registered for the refresh token grant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
