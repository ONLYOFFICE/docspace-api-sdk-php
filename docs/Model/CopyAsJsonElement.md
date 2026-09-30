# # CopyAsJsonElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dest_title** | **string** | The title of the copy, extension included. That extension decides the format: the same one as the source  copies the content as it is, a different one has it converted first. |
**dest_folder_id** | [**\OpenAPI\Client\Model\CopyAsJsonElementDestFolderId**](CopyAsJsonElementDestFolderId.md) |  |
**enable_external_ext** | **bool** | Whether the extension of the new title may be one the portal does not edit itself. | [optional]
**password** | **string** | The password that opens the source document, for a file that is protected by one. | [optional]
**to_form** | **bool** | Whether the copy is to become a PDF form rather than a plain document, which the conversion supports for the  text formats it can read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
