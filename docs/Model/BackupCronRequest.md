# # BackupCronRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | [**\OpenAPI\Client\Model\BackupPeriod**](BackupPeriod.md) | How often the backup runs: `EveryDay`, `EveryWeek` or `EveryMonth`. It defaults to `EveryDay`. | [optional]
**hour** | **int** | The hour of the day the backup starts at, from 0 to 23. Minutes cannot be chosen - it always starts  on the hour. | [optional]
**day** | **int** | The day the backup runs on: the day of the week from 1 to 7, Sunday being 1, for `EveryWeek`, and the  day of the month from 1 to 31 for `EveryMonth`. Leave it out for `EveryDay` only - a weekly or monthly  schedule sent without it is rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
