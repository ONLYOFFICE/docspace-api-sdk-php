# # RoomLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link_id** | **string** | The room link ID. | [optional]
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) |  | [optional]
**expiration_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**internal** | **bool** | The link scope, whether it is internal or not. | [optional]
**title** | **string** | The link name. | [optional]
**link_type** | [**\OpenAPI\Client\Model\LinkType**](LinkType.md) |  | [optional]
**password** | **string** | The link password. | [optional]
**deny_download** | **bool** | Specifies if downloading the file from the link is disabled or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
