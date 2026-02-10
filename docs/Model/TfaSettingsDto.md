# # TfaSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the TFA configuration. |
**title** | **string** | The display name or description of the TFA configuration. |
**enabled** | **bool** | Indicates whether the TFA configuration is currently active. |
**avaliable** | **bool** | Indicates whether the TFA configuration can be used. |
**trusted_ips** | **string[]** | The list of IP addresses that are exempt from TFA requirements. | [optional]
**mandatory_users** | **string[]** | The list of user IDs that are required to use TFA. | [optional]
**mandatory_groups** | **string[]** | The list of group IDs whose members are required to use TFA. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
