# # BackupScheduleDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storage_type** | [**\OpenAPI\Client\Model\BackupStorageType**](BackupStorageType.md) |  | [optional]
**storage_params** | [**\OpenAPI\Client\Model\ItemKeyValuePairObjectObject[]**](ItemKeyValuePairObjectObject.md) | The backup storage parameters. | [optional]
**backups_stored** | **int** | The maximum number of the stored backup copies. | [optional]
**cron_params** | [**\OpenAPI\Client\Model\Cron**](Cron.md) |  | [optional]
**dump** | **bool** | Specifies if a dump will be created or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
