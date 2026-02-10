# # FolderLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link_id** | **string** | The folder link ID. | [optional]
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) |  | [optional]
**expiration_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**title** | **string** | The link name. | [optional]
**password** | **string** | The link password. | [optional]
**deny_download** | **bool** | Specifies if downloading the file from the link is disabled or not. | [optional]
**internal** | **bool** | The link scope, whether it is internal or not. | [optional]
**primary** | **bool** | Specifies whether the folder link is primary or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
