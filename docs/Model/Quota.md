# # Quota

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quota ID. | [optional]
**quantity** | **int** | The quota quantity. | [optional]
**wallet** | **bool** | The quota applies to the wallet or not | [optional]
**due_date** | **\DateTime** | The quota due date. | [optional]
**next_quantity** | **int** | The quota next quantity. | [optional]
**additional** | **bool** | Indicates whether the quota is primary or additional. | [optional]
**next_quota** | **int** | The quota ID to switch to at the next period. | [optional]
**state** | [**\OpenAPI\Client\Model\QuotaState**](QuotaState.md) | The quota state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
