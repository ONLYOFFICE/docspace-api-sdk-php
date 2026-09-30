# # PriceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | The amount for one billing period, per unit for a quota sold by the unit. It is empty for a quota that is  not sold for money - the free, trial and non-profit ones - and for a quota this installation has no price  list entry for. | [optional]
**currency_symbol** | **string** | The symbol to print in front of `value`, such as `$`. It is chosen for the currency, not for the portal  language, so it is not a localised format. | [optional]
**iso_currency_symbol** | **string** | The currency as a three-letter ISO 4217 code, which is the value to compare on when `currencySymbol` is  ambiguous between currencies that share a sign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
