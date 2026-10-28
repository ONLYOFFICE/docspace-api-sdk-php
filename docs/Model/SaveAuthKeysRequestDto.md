# # SaveAuthKeysRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The internal key of the provider, such as `google` or `box`. Take it from the `name` of  `GET api/2.0/settings/authservice`. | [optional]
**title** | **string** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**description** | **string** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**instruction** | **string** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**can_set** | **bool** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**paid** | **bool** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**props** | [**\OpenAPI\Client\Model\AuthKeyRequest[]**](AuthKeyRequest.md) | The keys of the provider with their new values, by the key names `GET api/2.0/settings/authservice` lists in  `props`. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
