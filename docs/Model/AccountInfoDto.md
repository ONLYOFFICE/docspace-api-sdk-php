# # AccountInfoDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider** | **string** | The name of the identity provider, in lowercase, as every other operation of this group expects it: `google`,  `zoom`, `linkedin`, `facebook`, `twitter`, `microsoft`, `appleid`, `weixin` or `nextcloud`. |
**url** | **string** | The URL that starts the login with this provider. Open it as it is - it already carries the provider and the  popup or redirect mode the request asked for. |
**linked** | **bool** | Whether this provider is already linked to the calling profile. It is always false for an anonymous caller,  because there is no profile to compare against. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
