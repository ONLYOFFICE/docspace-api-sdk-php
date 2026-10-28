# # MigrationApiInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**migrator_name** | **string** | The migrator name. | [optional]
**operation** | **string** | The migration operation. | [optional]
**failed_archives** | **string[]** | The list of failed archives. | [optional]
**users** | [**\OpenAPI\Client\Model\MigratingApiUser[]**](MigratingApiUser.md) | The list of migrating users. | [optional]
**without_email_users** | [**\OpenAPI\Client\Model\MigratingApiUser[]**](MigratingApiUser.md) | The list of migrating users without email. | [optional]
**exist_users** | [**\OpenAPI\Client\Model\MigratingApiUser[]**](MigratingApiUser.md) | The list of existing migrating users. | [optional]
**groups** | [**\OpenAPI\Client\Model\MigratingApiGroup[]**](MigratingApiGroup.md) | The list of migrating groups. | [optional]
**import_personal_files** | **bool** | Specifies whether to import personal files or not. | [optional]
**import_shared_files** | **bool** | Specifies whether to import shared files or not. | [optional]
**import_shared_folders** | **bool** | Specifies whether to import shared folders or not. | [optional]
**import_common_files** | **bool** | Specifies whether to import common files or not. | [optional]
**import_project_files** | **bool** | Specifies whether to import project files or not. | [optional]
**import_groups** | **bool** | Specifies whether to import groups or not. | [optional]
**successed_users** | **int** | The number of successfully migrated users. | [optional]
**failed_users** | **int** | The number of unsuccessfully migrated users. | [optional]
**files** | **string[]** | The list of migrated files. | [optional]
**errors** | **string[]** | The list of migration errors. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
