# # ServiceLimitUsageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period_start** | **\DateTime** | The start of the current period, in UTC. | [optional]
**period_end** | **\DateTime** | The end of the current period, in UTC: the moment the spending starts again from zero. Null for a lifetime  limit, which never resets. | [optional]
**amount_consumed** | **float** | The money charged in the current period, in the currency of the limit. | [optional]
**amount_available** | **float** | The money still available in the current period: the threshold less what was charged and what is reserved for  operations in progress, never below zero. Null when the limit has no money threshold. | [optional]
**quantity_consumed** | **int** | The quantity consumed in the current period, in the unit of the limit. | [optional]
**quantity_available** | **int** | The quantity still available in the current period, never below zero; null when the limit has no quantity  threshold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
