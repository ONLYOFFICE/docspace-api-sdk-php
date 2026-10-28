# # SetWalletTopUpSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether the payment method on file is charged automatically when the wallet balance runs low. | [optional]
**min_balance** | **int** | The balance below which a top-up is charged, in `currency`. | [optional]
**up_to_balance** | **int** | The balance a top-up brings the wallet up to, in `currency`. | [optional]
**currency** | **string** | The three-letter ISO 4217 code both amounts are expressed in; it has to be the currency of the wallet. | [optional]
**low_balance_threshold** | **int** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**low_balance_notified** | **bool** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]
**last_modified** | **\DateTime** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
