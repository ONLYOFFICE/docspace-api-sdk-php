# # SetParticipantServiceLimitsRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_ids** | **string[]** | The IDs of the portal users the limit is set for, as returned in `id` by the people operations. |
**amount_value** | **float** | The most money the AI services may cost each user per period, in their currency, which cannot be chosen. Zero  blocks the AI services completely. | [optional]
**quantity_value** | **int** | The largest quantity the AI services may consume per period for each user, in their common unit. Zero blocks the  AI services completely. | [optional]
**period** | [**\OpenAPI\Client\Model\ServiceLimitPeriod**](ServiceLimitPeriod.md) | The window the thresholds apply to, in UTC. A day, week or month is calendar-aligned rather than rolling - a  daily limit resets at midnight UTC, a weekly one on Monday - while a lifetime limit counts from its creation and  never resets. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
