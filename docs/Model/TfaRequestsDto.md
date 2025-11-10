# # TfaRequestsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\TfaRequestsDtoType**](TfaRequestsDtoType.md) |  | [optional]
**id** | **string** | The ID of the user for whom the TFA settings are being configured. | [optional]
**trusted_ips** | **string[]** | The list of IP addresses that bypass TFA verification. | [optional]
**mandatory_users** | **string[]** | The list of user IDs for whom TFA is mandatory. | [optional]
**mandatory_groups** | **string[]** | The list group IDs whose members must use TFA. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
