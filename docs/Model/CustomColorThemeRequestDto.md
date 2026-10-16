# # CustomColorThemeRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the custom theme to replace, or an id no stored theme has to add a new one. | [optional]
**name** | **string** | Accepted for compatibility with earlier clients and not read: a custom theme is always stored without a name. | [optional]
**main** | [**\OpenAPI\Client\Model\ColorThemeColorsRequestDto**](ColorThemeColorsRequestDto.md) | The accent and button colours of the interface. Left out, a stored theme keeps its own. | [optional]
**text** | [**\OpenAPI\Client\Model\ColorThemeColorsRequestDto**](ColorThemeColorsRequestDto.md) | The colours of the text shown on the accent and on the buttons. Left out, a stored theme keeps its own. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
