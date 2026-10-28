# # RunBuilderScriptRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**script** | **string** | The document builder script. It names a portal file by its id where the document builder documentation  writes an address - `builder.OpenFile(1234)`; an address written out in the script is refused. |
**folder_id** | **int** | The id of the folder for the produced files that `outputs` does not list, as reported by a folder listing  such as `GET api/2.0/files/{folderId}`. | [optional]
**outputs** | [**array<string,\OpenAPIClientModelRunBuilderScriptOutputRequest>**](RunBuilderScriptOutputRequest.md) | Destinations of the produced files, keyed by the name the script saves each one under - the second argument of  `builder.SaveFile(docx, result.docx)`. | [optional]
**argument** | [**\OpenAPI\Client\Model\RunBuilderScriptRequestDtoArgument**](RunBuilderScriptRequestDtoArgument.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
