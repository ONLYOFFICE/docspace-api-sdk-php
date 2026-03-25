# # ScheduleDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storage_type** | [**\OpenAPI\Client\Model\BackupStorageType**](BackupStorageType.md) |  |
**storage_params** | **array<string,string>** | The backup storage parameters. |
**cron_params** | [**\OpenAPI\Client\Model\CronParams**](CronParams.md) |  |
**backups_stored** | **int** | The maximum number of the stored backup copies. | [optional]
**last_backup_time** | **\DateTime** | The date and time when the last backup was reated. |
**dump** | **bool** | Specifies if a dump will be created or not. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
