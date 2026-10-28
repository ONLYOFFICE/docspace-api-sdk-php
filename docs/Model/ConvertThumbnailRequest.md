# # ConvertThumbnailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspect** | **int** | The mode to fit the image to the height and width specified:  0 - stretch file to fit height and width;  1 - keep the aspect for the image;  2 - convert the metric size of the page into pixels at 96 dpi. | [optional]
**first** | **bool** | Whether a thumbnail is made of the first page only; false makes one of every page. | [optional]
**height** | **int** | The thumbnail height in pixels; not used with aspect 2. | [optional]
**width** | **int** | The thumbnail width in pixels; not used with aspect 2. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
