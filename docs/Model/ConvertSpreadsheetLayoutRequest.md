# # ConvertSpreadsheetLayoutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ignore_print_area** | **bool** | Whether the print area chosen in the spreadsheet is ignored; false converts only that area. | [optional]
**orientation** | **string** | The page orientation of the output PDF file: portrait or landscape. | [optional]
**fit_to_height** | **int** | The number of pages the converted area is fitted into in height; 0 does not fit it. | [optional]
**scale** | **int** | The scale of the output PDF file, in percent. | [optional]
**fit_to_width** | **int** | The number of pages the converted area is fitted into in width; 0 does not fit it. | [optional]
**headings** | **bool** | Whether the row and column headings are printed in the output PDF file. | [optional]
**grid_lines** | **bool** | Whether the grid lines are printed in the output PDF file. | [optional]
**margins** | [**\OpenAPI\Client\Model\ConvertSpreadsheetMarginsRequest**](ConvertSpreadsheetMarginsRequest.md) | The margins of the output PDF file. | [optional]
**page_size** | [**\OpenAPI\Client\Model\ConvertSpreadsheetPageSizeRequest**](ConvertSpreadsheetPageSizeRequest.md) | The page size of the output PDF file. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
