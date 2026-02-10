# # ClientResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The client name. | [optional]
**description** | **string** | The client description. | [optional]
**tenant** | **int** | The tenant ID associated with the client. | [optional]
**scopes** | **string[]** | The client scopes. | [optional]
**enabled** | **bool** | Specifies if the client is currently enabled or not. | [optional]
**client_id** | **string** | The client identifier issued to the client during registration. | [optional]
**client_secret** | **string** | The client secret issued to the client during registration. | [optional]
**website_url** | **string** | The URL to the client&#39;s website. | [optional]
**terms_url** | **string** | The URL to the client&#39;s terms of service. | [optional]
**policy_url** | **string** | The URL to the client&#39;s privacy policy. | [optional]
**logo** | **string** | The URL to the client&#39;s logo. | [optional]
**authentication_methods** | **string[]** | The authentication methods supported by the client. | [optional]
**redirect_uris** | **string[]** | The list of allowed redirect URIs. | [optional]
**allowed_origins** | **string[]** | The list of allowed CORS origins. | [optional]
**logout_redirect_uris** | **string[]** | The list of allowed logout redirect URIs. | [optional]
**created_on** | **\DateTime** | The date and time when the client was created. | [optional]
**created_by** | **string** | The user who created the client. | [optional]
**modified_on** | **\DateTime** | The date and time when the client was last modified. | [optional]
**modified_by** | **string** | The user who last modified the client. | [optional]
**is_public** | **bool** | Indicates whether the client is accessible by third-party tenants. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
