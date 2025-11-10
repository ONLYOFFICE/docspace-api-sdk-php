# # CreateClientRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The client name. | [optional]
**description** | **string** | The client description. | [optional]
**logo** | **string** | The client logo in base64 format. | [optional]
**scopes** | **string[]** | The client scopes. | [optional]
**allow_pkce** | **bool** | Indicates whether PKCE is allowed for the client. | [optional]
**is_public** | **bool** | Indicates whether the client is accessible by third-party tenants. | [optional]
**website_url** | **string** | The URL to the client&#39;s website. | [optional]
**terms_url** | **string** | The URL to the client&#39;s terms of service. | [optional]
**policy_url** | **string** | The URL to the client&#39;s privacy policy. | [optional]
**redirect_uris** | **string[]** | The list of allowed redirect URIs. |
**allowed_origins** | **string[]** | The list of allowed CORS origins. |
**logout_redirect_uri** | **string** | The list of allowed logout redirect URIs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
