# onlyoffice/docspace-api-sdk.OpenAPI\Client\Api.BackupApi

All URIs are relative to *https://your-docspace.onlyoffice.com*

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelBackup()**](BackupApi.md#cancelBackup) | **POST** /api/2.0/backup/cancelbackup | Cancel the running backup |
| [**createBackupSchedule()**](BackupApi.md#createBackupSchedule) | **POST** /api/2.0/backup/createbackupschedule | Create the backup schedule |
| [**deleteBackup()**](BackupApi.md#deleteBackup) | **DELETE** /api/2.0/backup/deletebackup/{id} | Delete the backup |
| [**deleteBackupHistory()**](BackupApi.md#deleteBackupHistory) | **DELETE** /api/2.0/backup/deletebackuphistory | Delete the backup history |
| [**deleteBackupSchedule()**](BackupApi.md#deleteBackupSchedule) | **DELETE** /api/2.0/backup/deletebackupschedule | Delete the backup schedule |
| [**getBackupHistory()**](BackupApi.md#getBackupHistory) | **GET** /api/2.0/backup/getbackuphistory | Get the backup history |
| [**getBackupProgress()**](BackupApi.md#getBackupProgress) | **GET** /api/2.0/backup/getbackupprogress | Get the backup progress |
| [**getBackupSchedule()**](BackupApi.md#getBackupSchedule) | **GET** /api/2.0/backup/getbackupschedule | Get the backup schedule |
| [**getBackupsCount()**](BackupApi.md#getBackupsCount) | **GET** /api/2.0/backup/getbackupscount | Get the number of backups |
| [**getBackupsCounts()**](BackupApi.md#getBackupsCounts) | **GET** /api/2.0/backup/getbackupscountbypaid | Get free and paid backup counts |
| [**getBackupsServiceState()**](BackupApi.md#getBackupsServiceState) | **GET** /api/2.0/backup/getservicestate | Check whether backups are enabled |
| [**getRestoreProgress()**](BackupApi.md#getRestoreProgress) | **GET** /api/2.0/backup/getrestoreprogress | Get the restoring progress |
| [**startBackup()**](BackupApi.md#startBackup) | **POST** /api/2.0/backup/startbackup | Start the backup |
| [**startBackupRestore()**](BackupApi.md#startBackupRestore) | **POST** /api/2.0/backup/startrestore | Start the restoring process |


## `cancelBackup()`

```php
cancelBackup(): \OpenAPI\Client\Model\BooleanWrapper
```

Cancel the running backup
Drops the backup job of the current portal from the queue, which cancels it if it is still running.  The caller needs the portal settings permission. It answers false, not an error, when there is nothing  to cancel, so the result says whether a job was actually dropped rather than whether the call  succeeded.  This affects backup jobs only: a restoring job cannot be cancelled through the API. The cancelled job  leaves the queue, so a following `GET api/2.0/backup/getbackupprogress` reports no job at all rather  than a job with the `Canceled` status.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/cancel-backup/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cancelBackup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->cancelBackup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBackupSchedule()`

```php
createBackupSchedule($create_backup_schedule_request_dto): \OpenAPI\Client\Model\BooleanWrapper
```

Create the backup schedule
Sets the backup schedule of the current portal. A portal keeps at most one schedule, so this replaces  the existing one rather than adding a second, and `dump` writes the schedule of the whole server  instead, which requires the space access permission and works on a standalone installation only.  Scheduled backups have to be allowed by the pricing plan of a portal that is not a standalone  installation.  `cronParams` is a period plus a time rather than a cron string: `hour` is the hour of the day from 0  to 23, and `day` has to be given for `EveryWeek`, where it is the day of the week from 1 to 7 with  Sunday as 1, and for `EveryMonth`, where it is the day of the month from 1 to 31. It is left out for  `EveryDay`, and because an omitted `day` is stored as 0, which neither period accepts, a weekly or  monthly schedule sent without it fails instead of falling back to a default.  `backupsStored` is the number of scheduled copies to keep, from 1 to 30, and it defaults to 1. Older  copies are removed by a background cleaner, and only the ones this schedule created: archives made by  `POST api/2.0/backup/startbackup` are not counted and not removed. A portal whose subscription stops  covering backups has its schedule deleted by the scheduler, not suspended, and its administrators are  notified that the scheduled backup failed.  The keys expected in `storageParams` are the same as for `POST api/2.0/backup/startbackup`, except  that they are sent as an array of key and value pairs here and returned as an object by  `GET api/2.0/backup/getbackupschedule`.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/create-backup-schedule/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_backup_schedule_request_dto** | [**\OpenAPI\Client\Model\CreateBackupScheduleRequestDto**](../Model/CreateBackupScheduleRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_backup_schedule_request_dto = new \OpenAPI\Client\Model\CreateBackupScheduleRequestDto(); // \OpenAPI\Client\Model\CreateBackupScheduleRequestDto

try {
    $result = $apiInstance->createBackupSchedule($create_backup_schedule_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->createBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackup()`

```php
deleteBackup($id): \OpenAPI\Client\Model\BooleanWrapper
```

Delete the backup
Deletes one backup: first its history record, then the archive in the storage the record points at.  The ID is the one listed by `GET api/2.0/backup/getbackuphistory`, which is also the `taskId` the  backup was started with.  Deleting a backup of the whole server rather than of one portal additionally requires the space  access permission. A record that belongs to another portal is left untouched and the call still  answers true, so the result confirms that the request was accepted rather than that anything was  deleted - check with `GET api/2.0/backup/getbackuphistory` if it matters.  The record is removed before the archive, so when the storage can no longer be reached the archive  stays behind with nothing pointing at it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-backup/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the backup to delete, taken from the route. It is the `id` of a record listed by  `GET api/2.0/backup/getbackuphistory`, which is also the `taskId` the backup was started with. | |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 11111111-1111-1111-1111-111111111111; // string | The ID of the backup to delete, taken from the route. It is the `id` of a record listed by  `GET api/2.0/backup/getbackuphistory`, which is also the `taskId` the backup was started with.

try {
    $result = $apiInstance->deleteBackup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->deleteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupHistory()`

```php
deleteBackupHistory($dump): \OpenAPI\Client\Model\BooleanWrapper
```

Delete the backup history
Deletes every backup of the current portal, both the history records and the archives themselves, and  leaves the backup schedule alone. `dump` clears the backups of the whole server instead and requires  the space access permission.  The records are walked one by one and a failure on any of them is swallowed, so the result is always  true even when some archives could not be deleted: it does not mean the history is now empty. Call  `GET api/2.0/backup/getbackuphistory` afterwards to see what is left.  Each record is removed before its archive, so an archive whose deletion fails stays in the storage  with nothing pointing at it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-backup-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data.

try {
    $result = $apiInstance->deleteBackupHistory($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->deleteBackupHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupSchedule()`

```php
deleteBackupSchedule($dump): \OpenAPI\Client\Model\BooleanWrapper
```

Delete the backup schedule
Deletes the backup schedule of the current portal, which stops the scheduled backups; `dump` deletes  the schedule of the whole server instead and requires the space access permission. The archives the  schedule has already produced are kept and stay listed by  `GET api/2.0/backup/getbackuphistory` - delete them through  `DELETE api/2.0/backup/deletebackup/{id}` if they are no longer wanted.  The result is always true, including when there was no schedule to delete, so it confirms that the  portal now has none rather than that anything was removed. The deletion is written to the audit trail  either way.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/delete-backup-schedule/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanWrapper**](../Model/BooleanWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data.

try {
    $result = $apiInstance->deleteBackupSchedule($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->deleteBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupHistory()`

```php
getBackupHistory($dump): \OpenAPI\Client\Model\BackupHistoryRecordArrayWrapper
```

Get the backup history
Lists the backups of the current portal whose archive is still present in the storage it was written  to. The records come back in no particular order, so sort them by `createdOn` if the newest one is  wanted. `dump` lists the backups of the whole server instead and requires the space access  permission.  Despite being a read operation, this prunes the history as it goes: a record whose archive is no  longer in its storage is deleted outright, so the list can shrink between two calls without anybody  deleting anything. A record whose storage can no longer be reached at all - a disconnected  third-party account, for instance - is neither returned nor deleted, so it stays invisible while  still occupying the history.  The `id` of a record is the same value as the `taskId` that  `POST api/2.0/backup/startbackup` returned for it, and it is what  `DELETE api/2.0/backup/deletebackup/{id}` and the `backupId` of  `POST api/2.0/backup/startrestore` expect.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backup-history/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupHistoryRecordArrayWrapper**](../Model/BackupHistoryRecordArrayWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data.

try {
    $result = $apiInstance->getBackupHistory($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupHistory: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupProgress()`

```php
getBackupProgress($dump): \OpenAPI\Client\Model\BackupProgressWrapper
```

Get the backup progress
Reports the state of the backup job of the current portal, and is the operation to poll after  `POST api/2.0/backup/startbackup`. The queue holds one job per portal, so no job ID is passed in;  `dump` asks for the state of the server-wide job instead and requires the space access permission.  When there is no such job - none was ever started, or the finished one has already been dropped from  the queue - the call still answers 200, but the body carries no `response` member at all, so a client  has to treat the payload as optional rather than expect an empty object.  While the job runs, `isCompleted` is false, `error` and `link` are empty strings and `progress` grows  from 0 to 100. Once it stops, `isCompleted` turns true and `status` says how it ended: a non-empty  `error` is the only report of a failure, `warning` is set when the archive was written but some files  could not be read or when the job was cancelled, and `link` becomes the download link to the stored  archive.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backup-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupProgressWrapper**](../Model/BackupProgressWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data.

try {
    $result = $apiInstance->getBackupProgress($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupProgress: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupSchedule()`

```php
getBackupSchedule($dump): \OpenAPI\Client\Model\ScheduleWrapper
```

Get the backup schedule
Returns the backup schedule of the current portal. A portal keeps at most one schedule, so no ID is  passed in, and when none is set the call still answers 200 with a body that carries no `response`  member at all. `dump` asks for the schedule of the whole server instead of the one of this portal and  requires the space access permission.  The answer cannot be sent back unchanged: `storageParams` is returned as an object keyed by parameter  name, while `POST api/2.0/backup/createbackupschedule` expects an array of key and value pairs. For  every storage type except `ThirdPartyConsumer` the `folderId` key of the answer is built from the  stored base path rather than read back from the saved parameters, and a schedule that keeps an  unlimited number of copies reports `backupsStored` as null instead of 0.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backup-schedule/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScheduleWrapper**](../Model/ScheduleWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Applies the operation to the whole server rather than to the current portal, which requires the space  access permission and works on a standalone installation only. Server-wide backups and schedules are  kept apart from the ones of a portal, so the two values address different data.

try {
    $result = $apiInstance->getBackupSchedule($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupsCount()`

```php
getBackupsCount($from, $to, $paid): \OpenAPI\Client\Model\Int32Wrapper
```

Get the number of backups
Counts the backups of the current portal that were created within a period, and `paid` chooses which  kind is counted: false, the default, counts the ones covered by the free monthly allowance, and true  counts the ones charged to the portal wallet.  The period defaults to the current calendar month - `from` becomes the first day of the month at  00:00 UTC and `to` becomes the moment of the call. Both bounds are UTC and inclusive, and a `from`  later than `to` is rejected. Called with no parameters at all, this returns exactly the figure the  free monthly allowance is measured against.  The count is over history records rather than over stored archives, so it includes backups that have  already been deleted; use `GET api/2.0/backup/getbackuphistory` to see what can still be restored.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backups-count/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start of the period, in UTC and inclusive. It defaults to the first day of the current calendar  month at 00:00 UTC, and it has to be no later than `to`. | [optional] |
| **to** | **\DateTime**| The end of the period, in UTC and inclusive. It defaults to the moment of the call. | [optional] |
| **paid** | **bool**| Counts the backups charged to the portal wallet when true, and the ones covered by the free monthly  allowance when false, which is the default. It is read only by  `GET api/2.0/backup/getbackupscount` and is ignored by  `GET api/2.0/backup/getbackupscountbypaid`, which always reports both. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Wrapper**](../Model/Int32Wrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2026-03-01T00:00:00Z; // \DateTime | The start of the period, in UTC and inclusive. It defaults to the first day of the current calendar  month at 00:00 UTC, and it has to be no later than `to`.
$to = 2026-03-31T23:59:59Z; // \DateTime | The end of the period, in UTC and inclusive. It defaults to the moment of the call.
$paid = false; // bool | Counts the backups charged to the portal wallet when true, and the ones covered by the free monthly  allowance when false, which is the default. It is read only by  `GET api/2.0/backup/getbackupscount` and is ignored by  `GET api/2.0/backup/getbackupscountbypaid`, which always reports both.

try {
    $result = $apiInstance->getBackupsCount($from, $to, $paid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupsCount: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupsCounts()`

```php
getBackupsCounts($from, $to, $paid): \OpenAPI\Client\Model\BackupsCountResultWrapper
```

Get free and paid backup counts
Counts the backups of the current portal created within a period and splits the result into the ones  covered by the free monthly allowance and the ones charged to the portal wallet, which saves calling  `GET api/2.0/backup/getbackupscount` twice.  The `paid` query parameter is accepted but not read here: the answer always carries both figures. The  period behaves as it does for `GET api/2.0/backup/getbackupscount` - it defaults to the current  calendar month, both bounds are UTC and inclusive, and a `from` later than `to` is rejected.  The counts are over history records rather than over stored archives, so they include backups that  have already been deleted.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backups-counts/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start of the period, in UTC and inclusive. It defaults to the first day of the current calendar  month at 00:00 UTC, and it has to be no later than `to`. | [optional] |
| **to** | **\DateTime**| The end of the period, in UTC and inclusive. It defaults to the moment of the call. | [optional] |
| **paid** | **bool**| Counts the backups charged to the portal wallet when true, and the ones covered by the free monthly  allowance when false, which is the default. It is read only by  `GET api/2.0/backup/getbackupscount` and is ignored by  `GET api/2.0/backup/getbackupscountbypaid`, which always reports both. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupsCountResultWrapper**](../Model/BackupsCountResultWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2026-03-01T00:00:00Z; // \DateTime | The start of the period, in UTC and inclusive. It defaults to the first day of the current calendar  month at 00:00 UTC, and it has to be no later than `to`.
$to = 2026-03-31T23:59:59Z; // \DateTime | The end of the period, in UTC and inclusive. It defaults to the moment of the call.
$paid = false; // bool | Counts the backups charged to the portal wallet when true, and the ones covered by the free monthly  allowance when false, which is the default. It is read only by  `GET api/2.0/backup/getbackupscount` and is ignored by  `GET api/2.0/backup/getbackupscountbypaid`, which always reports both.

try {
    $result = $apiInstance->getBackupsCounts($from, $to, $paid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupsCounts: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupsServiceState()`

```php
getBackupsServiceState(): \OpenAPI\Client\Model\BackupServiceStateWrapper
```

Check whether backups are enabled
Reports whether the paid backup service is switched on for the current portal. This is a wallet  setting of the portal, not the health of the backup service or of the worker that runs the jobs, so a  false answer does not mean backups are unavailable and a true one does not mean they are working.  While it is on, backups beyond the free monthly allowance are charged to the portal wallet. While it  is off and that allowance is used up, `POST api/2.0/backup/startbackup` and  `POST api/2.0/backup/createbackupschedule` answer 402.  Starting a backup once the allowance is used up switches the service on by itself, as soon as a  billing session opens for the portal, so this flag can change without anybody editing the portal  settings.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-backups-service-state/).

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BackupServiceStateWrapper**](../Model/BackupServiceStateWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBackupsServiceState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackupsServiceState: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestoreProgress()`

```php
getRestoreProgress($dump): \OpenAPI\Client\Model\BackupProgressWrapper
```

Get the restoring progress
Reports the state of the restoring job, and is the operation to poll after  `POST api/2.0/backup/startrestore`. It is the only operation of this service that needs no  authorization and the only one that stays reachable while the portal is being restored, which is  exactly the state a client polls it in - every other operation of the service answers 403 then.  `dump` is read as three states rather than as a flag: omit it to get whichever restoring job concerns  this portal, including a server-wide one, pass false to get the job of this portal only, and pass true  to get the server-wide job; on a portal that is not a standalone installation the value is forced to  false. When there is no matching job the call still answers 200, but the body carries no `response`  member at all.  `isCompleted` is the field to poll, a non-empty `error` is the only report of a failure, and neither  `link` nor `warning` is ever filled in for a restoring job.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/get-restore-progress/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dump** | **bool**| Which restoring job to look for, read as three states rather than as a flag: leave it out for  whichever job concerns this portal, including a server-wide one, send false for the job of this  portal alone, and send true for the server-wide job. On a portal that is not a standalone  installation the value is forced to false. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupProgressWrapper**](../Model/BackupProgressWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dump = false; // bool | Which restoring job to look for, read as three states rather than as a flag: leave it out for  whichever job concerns this portal, including a server-wide one, send false for the job of this  portal alone, and send true for the server-wide job. On a portal that is not a standalone  installation the value is forced to false.

try {
    $result = $apiInstance->getRestoreProgress($dump);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getRestoreProgress: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startBackup()`

```php
startBackup($start_backup_request_dto): \OpenAPI\Client\Model\BackupProgressWrapper
```

Start the backup
Queues a backup of the current portal and returns straight away: the archive itself is written by the  separate backup worker service, which picks the job up from an integration event, so the response  reports a progress of 0 and the `Created` status, and its `taskId` is the handle to poll with  `GET api/2.0/backup/getbackupprogress`. The caller needs the portal settings permission, and  `dump` - a backup of the whole server instead of this one portal - additionally requires the space  access permission and is rejected outside a standalone installation.  The keys expected in `storageParams` depend on `storageType`: `Documents` takes an integer `folderId`,  `ThridpartyDocuments` takes a provider-specific non-integer `folderId`, `Local` takes `filePath` and  works on a standalone installation only, `ThirdPartyConsumer` takes `module` together with the settings  of that consumer, and `DataStore` takes no keys at all; the `subdir` key is added by the operation  itself and must not be sent.  A portal that has already used up the free backups of the current calendar month is charged through the  paid backup service instead, and the call is rejected with 402 when that service is not available to it.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-backup/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_backup_request_dto** | [**\OpenAPI\Client\Model\StartBackupRequestDto**](../Model/StartBackupRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupProgressWrapper**](../Model/BackupProgressWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_backup_request_dto = new \OpenAPI\Client\Model\StartBackupRequestDto(); // \OpenAPI\Client\Model\StartBackupRequestDto

try {
    $result = $apiInstance->startBackup($start_backup_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->startBackup: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startBackupRestore()`

```php
startBackupRestore($start_backup_restore_request_dto): \OpenAPI\Client\Model\BackupProgressWrapper
```

Start the restoring process
Queues the restoring of the current portal from a backup and returns straight away: the work itself is  done by the separate backup worker service, which picks the job up from an integration event, so the  response reports a progress of 0 and the `Created` status, and the returned `taskId` is the handle to  poll with `GET api/2.0/backup/getrestoreprogress` - the one operation of this service that stays  reachable while the portal is being restored, because every other one answers 403 in that state.  The source is given either by `backupId`, which is the ID of a record from  `GET api/2.0/backup/getbackuphistory`, or, when `backupId` is not a GUID, by the `filePath` key of  `storageParams` together with the matching `storageType`; an all-zero GUID is parsed as a GUID and  therefore reaches neither branch.  The caller needs the portal settings permission, restoring has to be allowed by the pricing plan of a  portal that is not a standalone installation, and `dump` - restoring the whole server rather than this  one portal - additionally requires the space access permission.

For more information, see [api.onlyoffice.com](https://api.onlyoffice.com/docspace/api-backend/usage-api/start-backup-restore/).

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_backup_restore_request_dto** | [**\OpenAPI\Client\Model\StartBackupRestoreRequestDto**](../Model/StartBackupRestoreRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupProgressWrapper**](../Model/BackupProgressWrapper.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth2](../../README.md#OAuth2), [ApiKeyBearer](../../README.md#ApiKeyBearer), [asc_auth_key](../../README.md#asc_auth_key), [Bearer](../../README.md#Bearer), [OpenId](../../README.md#OpenId)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKeyBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKeyBearer', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKeyBearer', 'Bearer');

// Configure API key authorization: asc_auth_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_backup_restore_request_dto = new \OpenAPI\Client\Model\StartBackupRestoreRequestDto(); // \OpenAPI\Client\Model\StartBackupRestoreRequestDto

try {
    $result = $apiInstance->startBackupRestore($start_backup_restore_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->startBackupRestore: ', $e->getMessage(), PHP_EOL;
}
```

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
