# # EmbeddedConfigDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**embed_url** | **string** | The page to put into the frame. It is empty when the opening carries no external share key, since a framed  viewer cannot authenticate a portal member. | [optional]
**save_url** | **string** | Where the download button of the framed viewer leads. | [optional] [readonly]
**share_link_param** | **string** | The query fragment carrying the external share key, ampersand included, out of which the addresses around it  are built. | [optional]
**share_url** | **string** | The address behind the share button of the framed viewer, the document opened full-screen for reading. It is  empty when the opening carries no external share key. | [optional]
**toolbar_docked** | **string** | Where the framed viewer puts its toolbar. The portal always asks for the top. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
