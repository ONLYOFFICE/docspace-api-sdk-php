# # FileShareLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the shared link. | [optional]
**title** | **string** | The title of the shared content. | [optional]
**share_link** | **string** | The URL for accessing the shared content. | [optional]
**expiration_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**link_type** | [**\OpenAPI\Client\Model\LinkType**](LinkType.md) |  | [optional]
**password** | **string** | The password protection for accessing the shared content. | [optional]
**deny_download** | **bool** | Indicates whether downloading of the shared content is prohibited. | [optional]
**is_expired** | **bool** | Indicates whether the shared link has expired. | [optional]
**primary** | **bool** | Indicates whether this is the primary shared link. | [optional]
**internal** | **bool** | Indicates whether the link is for the internal sharing only. | [optional]
**request_token** | **string** | The token for validating access requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
