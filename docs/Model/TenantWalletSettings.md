# # TenantWalletSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Specifies whether automatic top-up for the tenant wallet is enabled. | [optional]
**min_balance** | **int** | The minimum wallet balance at which automatic top-up will be triggered. Must be between 5 and 1000. | [optional]
**up_to_balance** | **int** | The maximum wallet balance at which automatic top-up will be triggered. Must be between 6 and 5000. | [optional]
**currency** | **string** | The three-character ISO 4217 currency symbol. | [optional]
**last_modified** | **\DateTime** | The date and time when the tenant wallet settings were last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
