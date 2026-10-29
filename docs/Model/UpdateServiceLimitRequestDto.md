# # UpdateServiceLimitRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the service limit, as returned in `id` by the operation that created it or by the reads of limits. |
**amount_value** | **float** | The most money the AI services may cost per period, in their currency. Zero blocks the AI services completely. | [optional]
**quantity_value** | **int** | The largest quantity the AI services may consume per period, in their common unit. Zero blocks the AI services  completely. | [optional]
**enabled** | **bool** | Whether the limit is in force: false switches it off at once, true switches it back on. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
