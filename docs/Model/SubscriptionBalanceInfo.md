# # SubscriptionBalanceInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_cost** | **float** | The total cost of the current billing period (the sum across all subscription items). | [optional]
**currency** | **string** | The three-character ISO 4217 currency symbol of the subscription. | [optional]
**period_start** | **\DateTime** | The start of the current billing period. | [optional]
**period_end** | **\DateTime** | The end of the current billing period. | [optional]
**period_used_until** | **\DateTime** | The boundary of the used part of the period (the moment of the request). | [optional]
**days_elapsed** | **int** | The number of days elapsed since the start of the period (inclusive). | [optional]
**remaining_balance** | **float** | The unused balance of the subscription, in the subscription currency. | [optional]
**remaining_balance_in_wallet_currency** | **float** | The unused balance of the subscription, converted to the wallet currency. | [optional]
**wallet_currency** | **string** | The three-character ISO 4217 currency symbol of the wallet. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
