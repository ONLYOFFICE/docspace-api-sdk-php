# # TenantWalletSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Specifies whether automatic top-up for the tenant wallet is enabled. | [optional]
**min_balance** | **int** | The minimum wallet balance at which automatic top-up will be triggered. Must be between 5 and 1000. | [optional]
**up_to_balance** | **int** | The maximum wallet balance at which automatic top-up will be triggered. Must be between 6 and 5000. | [optional]
**currency** | **string** | The three-character ISO 4217 currency symbol. | [optional]
**low_balance_threshold** | **int** | The wallet balance below which a low-balance notification is sent. Set internally, not user-configurable. | [optional]
**low_balance_notified** | **bool** | Specifies whether a low-balance notification has already been sent for the current dip below ASC.Core.Tenants.TenantWalletSettings.LowBalanceThreshold. | [optional]
**last_modified** | **\DateTime** | The date and time when the tenant wallet settings were last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
