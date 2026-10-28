# # Module

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the module. It is the same in every portal and in every language, so use it rather than the  title to tell modules apart. | [optional]
**app_name** | **string** | The short system name of the module, the one that appears in its addresses and in the portal configuration.  Unlike the title it is not translated. | [optional]
**title** | **string** | The display name of the module, already translated for the calling account, so it changes with the language  and must not be compared against a fixed string. | [optional]
**link** | **string** | The address of the start page of the module, to be opened in a browser rather than called as an API. | [optional]
**icon_url** | **string** | The address of the small icon of the module, meant for a menu entry. | [optional]
**image_url** | **string** | The address of the large image of the module, meant for a tile or a start screen. | [optional]
**help_url** | **string** | The address of the help section of the module. It is empty when the portal publishes no help for it. | [optional]
**description** | **string** | The one-line description of the module shown next to its title, translated for the calling account. | [optional]
**is_primary** | **bool** | Whether the portal opens this module first when no other destination is given. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
