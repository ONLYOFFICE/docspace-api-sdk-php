# # DeepLinkDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**android_package_name** | **string** | The package name to look for on Android, and to build a store link from when the application is missing.  All three fields are empty strings on an installation that ships no mobile application, which is the  signal to keep opening links in the browser. |
**url** | **string** | The address the client redirects a portal link through so that the application can claim it. It is the  installation's own deep-link host, not a link to any particular document. |
**ios_package_id** | **string** | The bundle identifier to look for on iOS, used the same way as `androidPackageName`. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
