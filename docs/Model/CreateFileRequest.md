# # CreateFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The title of the new file. The extension in it decides the format, and one of a known text, spreadsheet or  presentation format is rewritten to the DOCX, XLSX or PPTX of the portal unless `enableExternalExt` says  otherwise; a title with no extension gets DOCX added. |
**template_id** | [**\OpenAPI\Client\Model\CreateFileRequestTemplateId**](CreateFileRequestTemplateId.md) |  | [optional]
**enable_external_ext** | **bool** | Whether the extension of the title is kept as it is: `true` stores the title verbatim, `false` rewrites a  known foreign format to the format the portal edits itself. | [optional]
**form_id** | **int** | A ready form from the form gallery of the portal to copy instead of a template, named by the identifier the  gallery reports for it. It takes precedence over `templateId`; 0 means no form. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
