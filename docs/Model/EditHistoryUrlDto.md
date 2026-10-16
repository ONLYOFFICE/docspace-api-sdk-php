# # EditHistoryUrlDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The document key of that revision. When the file has no earlier revision the portal generates a fresh key for  the template it falls back to, so the value is not always one an earlier revision ever had. | [optional]
**url** | **string** | The address that revision's content is served from. It is meant for the editing service and carries its own  key, which is valid for a limited time. | [optional]
**file_type** | **string** | The format of that revision, as an extension without the leading dot. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
