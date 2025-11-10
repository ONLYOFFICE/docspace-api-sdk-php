# # Tariff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The tariff ID. | [optional]
**state** | [**\OpenAPI\Client\Model\TariffState**](TariffState.md) |  | [optional]
**due_date** | **\DateTime** | The tariff due date. |
**delay_due_date** | **\DateTime** | The tariff delay due date. | [optional]
**license_date** | **\DateTime** | The tariff license date. | [optional]
**customer_id** | **string** | The tariff customer ID. | [optional]
**quotas** | [**\OpenAPI\Client\Model\Quota[]**](Quota.md) | The list of tariff quotas. |
**overdue_quotas** | [**\OpenAPI\Client\Model\Quota[]**](Quota.md) | The list of overdue tariff quotas. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
