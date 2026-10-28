# # ScopeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The scope exactly as it is written in an authorization request, for example files:read or openid. | [optional]
**group** | **string** | The area of the portal the scope belongs to, which is what groups the scopes on the consent screen: files, rooms, contacts, profiles or openid. | [optional]
**type** | **string** | What the scope allows inside its group: read for read-only access, write for changes, and openid for the identity scope itself. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
