# # FileLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link_id** | **string** | The external link ID. | [optional]
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) |  | [optional]
**expiration_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**title** | **string** | The link name. | [optional]
**internal** | **bool** | The link scope, whether it is internal or not. | [optional]
**primary** | **bool** | Specifies whether the file link is primary or not. | [optional]
**deny_download** | **bool** | Specifies whether to deny downloading the file or not. | [optional]
**password** | **string** | Password for access via link. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
