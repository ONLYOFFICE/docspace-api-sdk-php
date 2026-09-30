# # PasswordSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_length** | **int** | The shortest password the portal accepts, 8 characters on a portal nobody has configured. Whatever the  policy says, a password longer than 30 characters is refused as well, and that ceiling is not reported  here. |
**upper_case** | **bool** | Whether at least one uppercase letter is demanded. While it is `false` an uppercase letter is still  allowed - the flag adds a requirement rather than permission. |
**digits** | **bool** | Whether at least one digit is demanded, read the same way as `upperCase`. |
**spec_symbols** | **bool** | Whether at least one special symbol is demanded, read the same way as `upperCase`. Which symbols count is  spelled out by `specSymbolsRegexStr`. |
**allowed_characters_regex_str** | **string** | The expression the whole password has to match, which is what defines the alphabet the portal accepts at  all. It comes from the installation's configuration rather than from the portal policy, so it is the same  for every portal of an installation and unaffected by the flags above. |
**digits_regex_str** | **string** | The look-ahead expression that tests the digit requirement, meant to be applied only while `digits` is  `true`. It is always filled in, so its presence is not itself a requirement. |
**upper_case_regex_str** | **string** | The look-ahead expression that tests the uppercase requirement, to be applied while `upperCase` is `true`. |
**spec_symbols_regex_str** | **string** | The look-ahead expression that tests the special-symbol requirement, to be applied while `specSymbols` is  `true`. It also enumerates the symbols the portal treats as special. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
