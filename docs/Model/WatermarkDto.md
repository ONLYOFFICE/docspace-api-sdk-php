# # WatermarkDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additions** | [**\OpenAPI\Client\Model\WatermarkAdditions**](WatermarkAdditions.md) | Which details of the reader and of the room are stamped alongside the text. The values combine, so a number  that is not a member on its own is the sum of several of them, and 0 means that only the text is stamped. |
**text** | **string** | The fixed line drawn over the document, printed before the details selected alongside it. Empty when the room  stamps an image instead. | [optional]
**rotate** | **int** | How far the stamp is turned, in degrees, with negative values turning it anticlockwise and 0 drawing it  horizontally. |
**image_scale** | **int** | How large the image is drawn, as a percentage of its own size. It is 0 for a text watermark, where nothing is  scaled. |
**image_url** | **string** | The address the stamped picture is served from, inside the storage of the room. Empty for a text watermark. | [optional]
**image_height** | **float** | The height the picture is drawn with, in pixels, kept together with the width so that the proportions survive.  It is 0 for a text watermark. |
**image_width** | **float** | The width the picture is drawn with, in pixels, kept together with the height so that the proportions survive.  It is 0 for a text watermark. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
