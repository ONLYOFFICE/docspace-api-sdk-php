# # CheckDestFolderDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result** | [**\OpenAPI\Client\Model\CheckDestFolderResult**](CheckDestFolderResult.md) | Whether the destination folder accepts all of the requested files, only some of them or none at all. | [optional]
**files** | [**\OpenAPI\Client\Model\FileEntryBaseDto[]**](FileEntryBaseDto.md) | The requested files the destination accepts, each with the information it was listed under. The files it  rejects are absent, so an empty list means that none of them is accepted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
