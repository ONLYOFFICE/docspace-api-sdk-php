# # ExternalDatabaseSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**database_type** | **string** | The engine of the external database. | [optional]
**database_type_enum** | [**\OpenAPI\Client\Model\ExternalDatabaseType**](ExternalDatabaseType.md) | The engine of an external database. | [optional]
**db_host** | **string** | The host name or the IP address of the database server. | [optional]
**db_port** | **int** | The port the database server listens on. | [optional]
**db_name** | **string** | The name of the database to connect to. | [optional]
**db_user** | **string** | The user name to connect with. | [optional]
**db_password** | **string** | The password to connect with. | [optional]
**db_ssl** | **bool** | Specifies whether the connection to the database is secured with SSL. | [optional]
**sqlite_file_path** | **string** | The path to the database file, used by the SQLite engine only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
