# # ConvertFileRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **int** | The id of the portal file to convert, as reported by a folder listing such as `GET api/2.0/files/{folderId}`. |
**folder_id** | **int** | The id of the folder to save the converted file in, as reported by a folder listing such as  `GET api/2.0/files/{folderId}`. | [optional]
**code_page** | **int** | The encoding of a csv or txt source, as a code page number: 1251 for Cyrillic, 65001 for UTF-8, and so on.  Leaving it out lets the document service guess, which garbles non-latin text. | [optional]
**delimiter** | **int** | The character separating the values of a csv source: 0 - none, 1 - tab, 2 - semicolon, 3 - colon, 4 - comma,  5 - space. | [optional]
**document_layout** | [**\OpenAPI\Client\Model\ConvertDocumentLayoutRequest**](ConvertDocumentLayoutRequest.md) | The layout of forms printed as pdf documents or images. | [optional]
**document_renderer** | [**\OpenAPI\Client\Model\ConvertDocumentRendererRequest**](ConvertDocumentRendererRequest.md) | How the text of a pdf, xps or oxps source is read back. | [optional]
**outputtype** | **string** | The extension of the format to convert to, without the dot. The formats a source can become are listed under  `extsConvertible` in `GET api/2.0/files/settings`, keyed by the source extension, both with a leading dot there. |
**password** | **string** | The password of the source document, for a document that is protected with one. | [optional]
**region** | **string** | The culture code whose currency, date and time formats a spreadsheet converted to PDF is shown in. | [optional]
**thumbnail** | [**\OpenAPI\Client\Model\ConvertThumbnailRequest**](ConvertThumbnailRequest.md) | How a thumbnail is fitted, when the target format is an image. | [optional]
**spreadsheet_layout** | [**\OpenAPI\Client\Model\ConvertSpreadsheetLayoutRequest**](ConvertSpreadsheetLayoutRequest.md) | How a spreadsheet is laid out on the page, when it is converted to PDF. | [optional]
**pdf** | [**\OpenAPI\Client\Model\ConvertPdfRequest**](ConvertPdfRequest.md) | The PDF settings, used when the target format is PDF. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
