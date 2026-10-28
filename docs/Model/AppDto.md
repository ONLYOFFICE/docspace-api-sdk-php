# # AppDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The application's stable key, declared in the installation configuration - `ai-rooms`, `docs-cloud` and  the like. It is what every other operation of this group addresses an application by, and a client maps it  to a title and an icon of its own; the portal ships no display name for it. | [optional]
**enabled** | **bool** | Whether the application is switched on for this portal. It is the portal's own flag where one has been  saved, and the default the installation configuration gives the application otherwise. | [optional]
**settings** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
