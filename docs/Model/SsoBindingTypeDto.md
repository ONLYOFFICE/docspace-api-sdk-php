# # SsoBindingTypeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**saml20_http_post** | **string** | The SAML 2.0 HTTP POST binding, which carries the request in a self-submitting form. It is what the  built-in configuration uses and the one to pick when requests are signed, since it has no length limit. | [optional] [readonly]
**saml20_http_redirect** | **string** | The SAML 2.0 HTTP redirect binding, which carries the request in the query string and is therefore bound  by the length a URL may have. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
