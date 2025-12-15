# OnlyOffice/DocSpaceApiSdk

The ONLYOFFICE DocSpace SDK for PHP is a library that provides tools for integrating and managing DocSpace features within your applications. It simplifies interaction with the DocSpace API by offering ready-to-use methods and models.

For more information, please visit [https://helpdesk.onlyoffice.com/hc/en-us](https://helpdesk.onlyoffice.com/hc/en-us).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ONLYOFFICE/docspace-api-sdk-php"
    }
  ],
  "require": {
    "OnlyOffice/DocSpaceApiSdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OnlyOffice/DocSpaceApiSdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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



$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request_dto = new \OpenAPI\Client\Model\CreateApiKeyRequestDto(); // \OpenAPI\Client\Model\CreateApiKeyRequestDto

try {
    $result = $apiInstance->createApiKey($create_api_key_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## Authorization

Authentication schemes defined for the API:
### asc_auth_key

- **Type**: API key
- **API key parameter name**: asc_auth_key
- **Location**: Cookie



### Basic

- **Type**: HTTP basic authentication


### Bearer

- **Type**: Bearer authentication (JWT)


### ApiKeyBearer

- **Type**: API key
- **API key parameter name**: ApiKeyBearer
- **Location**: HTTP header



### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: {{authBaseUrl}}/oauth2/authorize
- **Token Url**: {{authBaseUrl}}/oauth2/token
- **Scopes**: 
    - **read**: Read access to protected resources
    - **write**: Write access to protected resources


### OpenId

- **Type**: OpenId Connect
- **OpenId Connect URL**: {{authBaseUrl}}/.well-known/openid-configuration

### x-signature

- **Type**: API key
- **API key parameter name**: x-signature
- **Location**: Cookie



## API Endpoints

All URIs are relative to *https://your-docspace.onlyoffice.com*

### API Endoints tables:

<details>
  <summary>ApiKeys</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>ApiKeysApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#createapikey"><strong>createApiKey</strong></a></td>
        <td><strong>POST</strong> /api/2.0/keys</td>
        <td>Create a user API key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#deleteapikey"><strong>deleteApiKey</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/keys/{keyId}</td>
        <td>Delete a user API key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getallpermissions"><strong>getAllPermissions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys/permissions</td>
        <td>Get API key permissions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getapikey"><strong>getApiKey</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys/@self</td>
        <td>Get current user&#39;s API key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getapikeys"><strong>getApiKeys</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys</td>
        <td>Get current user&#39;s API keys</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#updateapikey"><strong>updateApiKey</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/keys/{keyId}</td>
        <td>Update an API key</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Authentication</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AuthenticationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#authenticateme"><strong>authenticateMe</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication</td>
        <td>Authenticate a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#authenticatemefrombodywithcode"><strong>authenticateMeFromBodyWithCode</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication/{code}</td>
        <td>Authenticate a user by code</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#checkconfirm"><strong>checkConfirm</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication/confirm</td>
        <td>Open confirmation email URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#getisauthentificated"><strong>getIsAuthentificated</strong></a></td>
        <td><strong>GET</strong> /api/2.0/authentication</td>
        <td>Check authentication</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#logout"><strong>logout</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication/logout</td>
        <td>Log out</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#savemobilephone"><strong>saveMobilePhone</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication/setphone</td>
        <td>Set a mobile phone</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAuthenticationApi.md#sendsmscode"><strong>sendSmsCode</strong></a></td>
        <td><strong>POST</strong> /api/2.0/authentication/sendsms</td>
        <td>Send SMS code</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Backup</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>BackupApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#createbackupschedule"><strong>createBackupSchedule</strong></a></td>
        <td><strong>POST</strong> /api/2.0/backup/createbackupschedule</td>
        <td>Create the backup schedule</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#deletebackup"><strong>deleteBackup</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/backup/deletebackup/{id}</td>
        <td>Delete the backup</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#deletebackuphistory"><strong>deleteBackupHistory</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/backup/deletebackuphistory</td>
        <td>Delete the backup history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#deletebackupschedule"><strong>deleteBackupSchedule</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/backup/deletebackupschedule</td>
        <td>Delete the backup schedule</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackuphistory"><strong>getBackupHistory</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getbackuphistory</td>
        <td>Get the backup history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackupprogress"><strong>getBackupProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getbackupprogress</td>
        <td>Get the backup progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackupschedule"><strong>getBackupSchedule</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getbackupschedule</td>
        <td>Get the backup schedule</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackupscount"><strong>getBackupsCount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getbackupscount</td>
        <td>Get the number of backups</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackupsservicestate"><strong>getBackupsServiceState</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getservicestate</td>
        <td>Get the backup service state</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getrestoreprogress"><strong>getRestoreProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getrestoreprogress</td>
        <td>Get the restoring progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#startbackup"><strong>startBackup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/backup/startbackup</td>
        <td>Start the backup</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#startbackuprestore"><strong>startBackupRestore</strong></a></td>
        <td><strong>POST</strong> /api/2.0/backup/startrestore</td>
        <td>Start the restoring process</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Capabilities</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>CapabilitiesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiCapabilitiesApi.md#getportalcapabilities"><strong>getPortalCapabilities</strong></a></td>
        <td><strong>GET</strong> /api/2.0/capabilities</td>
        <td>Get portal capabilities</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Files</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>FilesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#addfiletorecent"><strong>addFileToRecent</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/recent</td>
        <td>Add a file to the Recent section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#addtemplates"><strong>addTemplates</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/templates</td>
        <td>Add template files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#changeversionhistory"><strong>changeVersionHistory</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/history</td>
        <td>Change version history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#checkfillformdraft"><strong>checkFillFormDraft</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/masterform/{fileId}/checkfillformdraft</td>
        <td>Check the form draft filling</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#copyfileas"><strong>copyFileAs</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/copyas</td>
        <td>Copy a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createeditsession"><strong>createEditSession</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/edit_session</td>
        <td>Create the editing session</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createfile"><strong>createFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/file</td>
        <td>Create a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createfileinmydocuments"><strong>createFileInMyDocuments</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/file</td>
        <td>Create a file in the My documents section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createfileprimaryexternallink"><strong>createFilePrimaryExternalLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{id}/link</td>
        <td>Create primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createhtmlfile"><strong>createHtmlFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/html</td>
        <td>Create an HTML file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createhtmlfileinmydocuments"><strong>createHtmlFileInMyDocuments</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/html</td>
        <td>Create an HTML file in the My documents section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createtextfile"><strong>createTextFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/text</td>
        <td>Create a text file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createtextfileinmydocuments"><strong>createTextFileInMyDocuments</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/text</td>
        <td>Create a text file in the My documents section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createthumbnails"><strong>createThumbnails</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thumbnails</td>
        <td>Create file thumbnails</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#deletefile"><strong>deleteFile</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/file/{fileId}</td>
        <td>Delete a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#deleterecent"><strong>deleteRecent</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/recent</td>
        <td>Delete recent files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#deletetemplates"><strong>deleteTemplates</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/templates</td>
        <td>Delete template files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getallformroles"><strong>getAllFormRoles</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/formroles</td>
        <td>Get form roles</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#geteditdiffurl"><strong>getEditDiffUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/edit/diff</td>
        <td>Get changes URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getedithistory"><strong>getEditHistory</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/edit/history</td>
        <td>Get version history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfilehistory"><strong>getFileHistory</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/log</td>
        <td>Get file history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfileinfo"><strong>getFileInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}</td>
        <td>Get file information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfilelinks"><strong>getFileLinks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{id}/links</td>
        <td>Get file external links</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfileprimaryexternallink"><strong>getFilePrimaryExternalLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{id}/link</td>
        <td>Get primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfileversioninfo"><strong>getFileVersionInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/history</td>
        <td>Get file versions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getfillresult"><strong>getFillResult</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/fillresult</td>
        <td>Get form-filling result</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getpresignedfileuri"><strong>getPresignedFileUri</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/presigned</td>
        <td>Get file download link asynchronously</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getpresigneduri"><strong>getPresignedUri</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/presigneduri</td>
        <td>Get file download link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getprotectedfileusers"><strong>getProtectedFileUsers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/protectusers</td>
        <td>Get users access rights to the protected file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getreferencedata"><strong>getReferenceData</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/referencedata</td>
        <td>Get reference data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#isformpdf"><strong>isFormPDF</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/isformpdf</td>
        <td>Check the PDF file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#lockfile"><strong>lockFile</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/lock</td>
        <td>Lock a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#manageformfilling"><strong>manageFormFilling</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/manageformfilling</td>
        <td>Perform form filling action</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#openeditfile"><strong>openEditFile</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/openedit</td>
        <td>Open a file configuration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#restorefileversion"><strong>restoreFileVersion</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/restoreversion</td>
        <td>Restore a file version</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#saveeditingfilefromform"><strong>saveEditingFileFromForm</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/saveediting</td>
        <td>Save file edits</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#savefileaspdf"><strong>saveFileAsPdf</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{id}/saveaspdf</td>
        <td>Save a file as PDF</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#saveformrolemapping"><strong>saveFormRoleMapping</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/formrolemapping</td>
        <td>Save form role mapping</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#setcustomfiltertag"><strong>setCustomFilterTag</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/customfilter</td>
        <td>Set the Custom Filter editing mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#setfileexternallink"><strong>setFileExternalLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{id}/links</td>
        <td>Set an external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#setfileorder"><strong>setFileOrder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/{fileId}/order</td>
        <td>Set file order</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#setfilesorder"><strong>setFilesOrder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/order</td>
        <td>Set order of files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#starteditfile"><strong>startEditFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/startedit</td>
        <td>Start file editing</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#startfillingfile"><strong>startFillingFile</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/startfilling</td>
        <td>Start file filling</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#togglefilefavorite"><strong>toggleFileFavorite</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/favorites/{fileId}</td>
        <td>Change the file favorite status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#trackeditfile"><strong>trackEditFile</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/trackeditfile</td>
        <td>Track file editing</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#updatefile"><strong>updateFile</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}</td>
        <td>Update a file</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>FoldersApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#checkupload"><strong>checkUpload</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/upload/check</td>
        <td>Check file uploads</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createfolder"><strong>createFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Create a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createfolderprimaryexternallink"><strong>createFolderPrimaryExternalLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{id}/link</td>
        <td>Create primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createreportfolderhistory"><strong>createReportFolderHistory</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{folderId}/log/report</td>
        <td>Generates folder history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#deletefolder"><strong>deleteFolder</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Delete a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfavoritesfolder"><strong>getFavoritesFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@favorites</td>
        <td>Get the Favorites section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfilesusedspace"><strong>getFilesUsedSpace</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/filesusedspace</td>
        <td>Get used space of files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolder"><strong>getFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{folderId}/formfilter</td>
        <td>Get folder form filter</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderbyfolderid"><strong>getFolderByFolderId</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{folderId}</td>
        <td>Get a folder by ID</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderhistory"><strong>getFolderHistory</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/log</td>
        <td>Get folder history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderinfo"><strong>getFolderInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Get folder information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderlinks"><strong>getFolderLinks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{id}/links</td>
        <td>Get the folder links</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderpath"><strong>getFolderPath</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/path</td>
        <td>Get the folder path</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderprimaryexternallink"><strong>getFolderPrimaryExternalLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{id}/link</td>
        <td>Get primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderrecent"><strong>getFolderRecent</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/recent</td>
        <td>Get the Recent section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolders"><strong>getFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{folderId}/subfolders</td>
        <td>Get subfolders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getmyfolder"><strong>getMyFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@my</td>
        <td>Get the My documents section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getnewfolderitems"><strong>getNewFolderItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{folderId}/news</td>
        <td>Get new folder items</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getprivacyfolder"><strong>getPrivacyFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@privacy</td>
        <td>Get the Private Room section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getrecentfolder"><strong>getRecentFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@recent</td>
        <td>Get the Recent section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getrootfolders"><strong>getRootFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@root</td>
        <td>Get filtered sections</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#gettrashfolder"><strong>getTrashFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@trash</td>
        <td>Get the Trash section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#insertfile"><strong>insertFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/insert</td>
        <td>Insert a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#insertfiletomyfrombody"><strong>insertFileToMyFromBody</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/insert</td>
        <td>Insert a file to the My documents section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#renamefolder"><strong>renameFolder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Rename a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#setfolderorder"><strong>setFolderOrder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{folderId}/order</td>
        <td>Set folder order</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#setfolderprimaryexternallink"><strong>setFolderPrimaryExternalLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{id}/links</td>
        <td>Set the folder external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#uploadfile"><strong>uploadFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/upload</td>
        <td>Upload a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#uploadfiletomy"><strong>uploadFileToMy</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/upload</td>
        <td>Upload a file to the My documents section</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OperationsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#addfavorites"><strong>addFavorites</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/favorites</td>
        <td>Add favorite files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#bulkdownload"><strong>bulkDownload</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/bulkdownload</td>
        <td>Bulk download</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#checkconversionstatus"><strong>checkConversionStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/checkconversion</td>
        <td>Get conversion status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#checkmoveorcopybatchitems"><strong>checkMoveOrCopyBatchItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops/move</td>
        <td>Move or copy files to a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#checkmoveorcopydestfolder"><strong>checkMoveOrCopyDestFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops/checkdestfolder</td>
        <td>Check for moving or copying files to a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#copybatchitems"><strong>copyBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/copy</td>
        <td>Copy to the folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#createuploadsession"><strong>createUploadSession</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/upload/create_session</td>
        <td>Chunked upload</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#deletebatchitems"><strong>deleteBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/delete</td>
        <td>Delete files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#deletefavoritesfrombody"><strong>deleteFavoritesFromBody</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/favorites</td>
        <td>Delete favorite files and folders (using body parameters)</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#deletefileversions"><strong>deleteFileVersions</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/deleteversion</td>
        <td>Delete file versions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#duplicatebatchitems"><strong>duplicateBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/duplicate</td>
        <td>Duplicate files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#emptytrash"><strong>emptyTrash</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/emptytrash</td>
        <td>Empty the Trash folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#getoperationstatuses"><strong>getOperationStatuses</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops</td>
        <td>Get active file operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#getoperationstatusesbytype"><strong>getOperationStatusesByType</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops/{operationType}</td>
        <td>Get file operation statuses</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#markasread"><strong>markAsRead</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/markasread</td>
        <td>Mark as read</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#movebatchitems"><strong>moveBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/move</td>
        <td>Move or copy to a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#startfileconversion"><strong>startFileConversion</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/checkconversion</td>
        <td>Start file conversion</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#terminatetasks"><strong>terminateTasks</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/terminate/{id}</td>
        <td>Finish active operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#updatefilecomment"><strong>updateFileComment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/comment</td>
        <td>Update a comment</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>QuotaApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesQuotaApi.md#resetroomquota"><strong>resetRoomQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/resetquota</td>
        <td>Reset the room quota limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesQuotaApi.md#updateroomsquota"><strong>updateRoomsQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/roomquota</td>
        <td>Change the room quota limit</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changeaccesstothirdparty"><strong>changeAccessToThirdparty</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/thirdparty</td>
        <td>Change the third-party settings access</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changeautomaticallycleanup"><strong>changeAutomaticallyCleanUp</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/autocleanup</td>
        <td>Update the trash bin auto-clearing setting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changedefaultaccessrights"><strong>changeDefaultAccessRights</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/dafaultaccessrights</td>
        <td>Change the default access rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changedeleteconfirm"><strong>changeDeleteConfirm</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/changedeleteconfrim</td>
        <td>Confirm the file deletion</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changedownloadzipfrombody"><strong>changeDownloadZipFromBody</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/downloadtargz</td>
        <td>Change the archive format (using body parameters)</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#checkdocserviceurl"><strong>checkDocServiceUrl</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/docservice</td>
        <td>Check the document service URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#displayfileextension"><strong>displayFileExtension</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/displayfileextension</td>
        <td>Display a file extension</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#displayrecent"><strong>displayRecent</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/displayrecent</td>
        <td>Display the Recent folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#externalshare"><strong>externalShare</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/external</td>
        <td>Change the external sharing ability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#externalsharesocialmedia"><strong>externalShareSocialMedia</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/externalsocialmedia</td>
        <td>Change the external sharing ability on social networks</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#forcesave"><strong>forcesave</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/forcesave</td>
        <td>Change the forcesaving ability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getautomaticallycleanup"><strong>getAutomaticallyCleanUp</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/settings/autocleanup</td>
        <td>Get the trash bin auto-clearing setting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getdocserviceurl"><strong>getDocServiceUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/docservice</td>
        <td>Get the document service URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getfilesmodule"><strong>getFilesModule</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/info</td>
        <td>Get the Documents information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getfilessettings"><strong>getFilesSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/settings</td>
        <td>Get file settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#hideconfirmcanceloperation"><strong>hideConfirmCancelOperation</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/hideconfirmcanceloperation</td>
        <td>Hide confirmation dialog when canceling operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#hideconfirmconvert"><strong>hideConfirmConvert</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/hideconfirmconvert</td>
        <td>Hide the confirmation dialog when converting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#hideconfirmroomlifetime"><strong>hideConfirmRoomLifetime</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/hideconfirmroomlifetime</td>
        <td>Hide confirmation dialog when changing room lifetime settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#isavailableprivacyroomsettings"><strong>isAvailablePrivacyRoomSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@privacy/available</td>
        <td>Check the Private Room availability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#keepnewfilename"><strong>keepNewFileName</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/keepnewfilename</td>
        <td>Ask a new file name</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#setopeneditorinsametab"><strong>setOpenEditorInSameTab</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/openeditorinsametab</td>
        <td>Open document in the same browser tab</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#storeforcesave"><strong>storeForcesave</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/storeforcesave</td>
        <td>Change the ability to store the forcesaved files</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#storeoriginal"><strong>storeOriginal</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/storeoriginal</td>
        <td>Change the ability to upload original formats</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#updatefileifexist"><strong>updateFileIfExist</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/updateifexist</td>
        <td>Update a file version if it exists</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SharingApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#applyexternalsharepassword"><strong>applyExternalSharePassword</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/share/{key}/password</td>
        <td>Apply external data password</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#changefileowner"><strong>changeFileOwner</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/owner</td>
        <td>Change the file owner</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getexternalsharedata"><strong>getExternalShareData</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/share/{key}</td>
        <td>Get the external data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getfilesecurityinfo"><strong>getFileSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{id}/share</td>
        <td>Get the shared file information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getfoldersecurityinfo"><strong>getFolderSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{id}/share</td>
        <td>Get the shared folder information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getgroupsmemberswithfilesecurity"><strong>getGroupsMembersWithFileSecurity</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/group/{groupId}/share</td>
        <td>Get group members with security information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getgroupsmemberswithfoldersecurity"><strong>getGroupsMembersWithFolderSecurity</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/group/{groupId}/share</td>
        <td>Get group members with security information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getsecurityinfo"><strong>getSecurityInfo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/share</td>
        <td>Get the sharing rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getsharedusers"><strong>getSharedUsers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/sharedusers</td>
        <td>Get user access rights by file ID</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#removesecurityinfo"><strong>removeSecurityInfo</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/share</td>
        <td>Remove the sharing rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#sendeditornotify"><strong>sendEditorNotify</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/sendeditornotify</td>
        <td>Send the mention message</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setfilesecurityinfo"><strong>setFileSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/share</td>
        <td>Share a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setfoldersecurityinfo"><strong>setFolderSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{folderId}/share</td>
        <td>Share a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setsecurityinfo"><strong>setSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/share</td>
        <td>Set the sharing rights</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ThirdPartyIntegrationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#deletethirdparty"><strong>deleteThirdParty</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/thirdparty/{providerId}</td>
        <td>Remove a third-party account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getallproviders"><strong>getAllProviders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/providers</td>
        <td>Get all providers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getbackupthirdpartyaccount"><strong>getBackupThirdPartyAccount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/backup</td>
        <td>Get a third-party account backup</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getcapabilities"><strong>getCapabilities</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/capabilities</td>
        <td>Get providers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getcommonthirdpartyfolders"><strong>getCommonThirdPartyFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/common</td>
        <td>Get the common third-party services</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getthirdpartyaccounts"><strong>getThirdPartyAccounts</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty</td>
        <td>Get the third-party accounts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#savethirdparty"><strong>saveThirdParty</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thirdparty</td>
        <td>Save a third-party account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#savethirdpartybackup"><strong>saveThirdPartyBackup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thirdparty/backup</td>
        <td>Save a third-party account backup</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Group</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>GroupApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#addgroup"><strong>addGroup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/group</td>
        <td>Add a new group</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#addmembersto"><strong>addMembersTo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/group/{id}/members</td>
        <td>Add group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#deletegroup"><strong>deleteGroup</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/group/{id}</td>
        <td>Delete a group</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#getgroup"><strong>getGroup</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/{id}</td>
        <td>Get a group</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#getgroupbyuserid"><strong>getGroupByUserId</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/user/{userid}</td>
        <td>Get user groups</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#getgroups"><strong>getGroups</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group</td>
        <td>Get groups</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#movemembersto"><strong>moveMembersTo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/group/{fromId}/members/{toId}</td>
        <td>Move group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#removemembersfrom"><strong>removeMembersFrom</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/group/{id}/members</td>
        <td>Remove group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#setgroupmanager"><strong>setGroupManager</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/group/{id}/manager</td>
        <td>Set a group manager</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#setmembersto"><strong>setMembersTo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/group/{id}/members</td>
        <td>Replace group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupApi.md#updategroup"><strong>updateGroup</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/group/{id}</td>
        <td>Update a group</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SearchApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupSearchApi.md#getgroupswithfilesshared"><strong>getGroupsWithFilesShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/file/{id}</td>
        <td>Get groups with file sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupSearchApi.md#getgroupswithfoldersshared"><strong>getGroupsWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/folder/{id}</td>
        <td>Get groups with folder sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupSearchApi.md#getgroupswithroomsshared"><strong>getGroupsWithRoomsShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/room/{id}</td>
        <td>Get groups with room sharing settings</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Migration</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>MigrationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#cancelmigration"><strong>cancelMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/cancel</td>
        <td>Cancel migration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#clearmigration"><strong>clearMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/clear</td>
        <td>Clear migration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#finishmigration"><strong>finishMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/finish</td>
        <td>Finish migration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#getmigrationlogs"><strong>getMigrationLogs</strong></a></td>
        <td><strong>GET</strong> /api/2.0/migration/logs</td>
        <td>Get migration logs</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#getmigrationstatus"><strong>getMigrationStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/migration/status</td>
        <td>Get migration status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#listmigrations"><strong>listMigrations</strong></a></td>
        <td><strong>GET</strong> /api/2.0/migration/list</td>
        <td>Get migrations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#startmigration"><strong>startMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/migrate</td>
        <td>Start migration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#uploadandinitializemigration"><strong>uploadAndInitializeMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/init/{migratorName}</td>
        <td>Upload and initialize migration</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>OAuth20</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AuthorizationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20AuthorizationApi.md#authorizeoauth"><strong>authorizeOAuth</strong></a></td>
        <td><strong>GET</strong> /oauth2/authorize</td>
        <td>OAuth2 authorization endpoint</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20AuthorizationApi.md#exchangetoken"><strong>exchangeToken</strong></a></td>
        <td><strong>POST</strong> /oauth2/token</td>
        <td>OAuth2 token endpoint</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20AuthorizationApi.md#submitconsent"><strong>submitConsent</strong></a></td>
        <td><strong>POST</strong> /oauth2/authorize</td>
        <td>OAuth2 consent endpoint</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ClientManagementApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#changeactivation"><strong>changeActivation</strong></a></td>
        <td><strong>PATCH</strong> /api/2.0/clients/{clientId}/activation</td>
        <td>Change the client activation status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#createclient"><strong>createClient</strong></a></td>
        <td><strong>POST</strong> /api/2.0/clients</td>
        <td>Create a new OAuth2 client</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#deleteclient"><strong>deleteClient</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/clients/{clientId}</td>
        <td>Delete an OAuth2 client</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#regeneratesecret"><strong>regenerateSecret</strong></a></td>
        <td><strong>PATCH</strong> /api/2.0/clients/{clientId}/regenerate</td>
        <td>Regenerate the client secret</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#revokeuserclient"><strong>revokeUserClient</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/clients/{clientId}/revoke</td>
        <td>Revoke client consent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#updateclient"><strong>updateClient</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/clients/{clientId}</td>
        <td>Update an existing OAuth2 client</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ClientQueryingApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclient"><strong>getClient</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients/{clientId}</td>
        <td>Get client details</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclientinfo"><strong>getClientInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients/{clientId}/info</td>
        <td>Get detailed client information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclients"><strong>getClients</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients</td>
        <td>Get clients</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclientsinfo"><strong>getClientsInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients/info</td>
        <td>Get detailed information of clients</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getconsents"><strong>getConsents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients/consents</td>
        <td>Get user consents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getpublicclientinfo"><strong>getPublicClientInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/clients/{clientId}/public/info</td>
        <td>Get public client information</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ScopeManagementApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ScopeManagementApi.md#getscopes"><strong>getScopes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/scopes</td>
        <td>Get available OAuth2 scopes</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>People</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>GuestsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleGuestsApi.md#approveguestsharelink"><strong>approveGuestShareLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/guests/share/approve</td>
        <td>Approve a guest sharing link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleGuestsApi.md#deleteguests"><strong>deleteGuests</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/guests</td>
        <td>Delete guests</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PasswordApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePasswordApi.md#changeuserpassword"><strong>changeUserPassword</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userid}/password</td>
        <td>Change a user password</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePasswordApi.md#senduserpassword"><strong>sendUserPassword</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/password</td>
        <td>Remind a user password</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PhotosApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#creatememberphotothumbnails"><strong>createMemberPhotoThumbnails</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/{userid}/photo/thumbnails</td>
        <td>Create photo thumbnails</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#deletememberphoto"><strong>deleteMemberPhoto</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/{userid}/photo</td>
        <td>Delete a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#getmemberphoto"><strong>getMemberPhoto</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/{userid}/photo</td>
        <td>Get a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#updatememberphoto"><strong>updateMemberPhoto</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userid}/photo</td>
        <td>Update a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#uploadmemberphoto"><strong>uploadMemberPhoto</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/{userid}/photo</td>
        <td>Upload a user photo</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ProfilesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#addmember"><strong>addMember</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people</td>
        <td>Add a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#deletemember"><strong>deleteMember</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/{userid}</td>
        <td>Delete a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#deleteprofile"><strong>deleteProfile</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/@self</td>
        <td>Delete my profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getallprofiles"><strong>getAllProfiles</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people</td>
        <td>Get profiles</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getclaims"><strong>getClaims</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/tokendiagnostics</td>
        <td>Get user claims</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getprofilebyemail"><strong>getProfileByEmail</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/email</td>
        <td>Get a profile by user email</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getprofilebyuserid"><strong>getProfileByUserId</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/{userid}</td>
        <td>Get a profile by user ID</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getselfprofile"><strong>getSelfProfile</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/@self</td>
        <td>Get my profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#inviteusers"><strong>inviteUsers</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/invite</td>
        <td>Invite users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#removeusers"><strong>removeUsers</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/delete</td>
        <td>Delete users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#resenduserinvites"><strong>resendUserInvites</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/invite</td>
        <td>Resend activation emails</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#sendemailchangeinstructions"><strong>sendEmailChangeInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/email</td>
        <td>Send instructions to change email</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#updatemember"><strong>updateMember</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userid}</td>
        <td>Update a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#updatememberculture"><strong>updateMemberCulture</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userid}/culture</td>
        <td>Update a user culture code</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>QuotaApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleQuotaApi.md#resetusersquota"><strong>resetUsersQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/resetquota</td>
        <td>Reset a user quota limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleQuotaApi.md#updateuserquota"><strong>updateUserQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/userquota</td>
        <td>Change a user quota limit</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SearchApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getaccountsentrieswithfilesshared"><strong>getAccountsEntriesWithFilesShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/accounts/file/{id}/search</td>
        <td>Get account entries with file sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getaccountsentrieswithfoldersshared"><strong>getAccountsEntriesWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/accounts/folder/{id}/search</td>
        <td>Get account entries with folder sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getaccountsentrieswithroomsshared"><strong>getAccountsEntriesWithRoomsShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/accounts/room/{id}/search</td>
        <td>Get account entries</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getsearch"><strong>getSearch</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/@search/{query}</td>
        <td>Search users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getsimplebyfilter"><strong>getSimpleByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/simple/filter</td>
        <td>Search users by extended filter</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithfilesshared"><strong>getUsersWithFilesShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/file/{id}</td>
        <td>Get users with file sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithfoldersshared"><strong>getUsersWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/folder/{id}</td>
        <td>Get users with folder sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithroomshared"><strong>getUsersWithRoomShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/room/{id}</td>
        <td>Get users with room sharing settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#searchusersbyextendedfilter"><strong>searchUsersByExtendedFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/filter</td>
        <td>Search users with detailed information by extended filter</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#searchusersbyquery"><strong>searchUsersByQuery</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/search</td>
        <td>Search users (using query parameters)</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#searchusersbystatus"><strong>searchUsersByStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/status/{status}/search</td>
        <td>Search users by status filter</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ThemeApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThemeApi.md#changeportaltheme"><strong>changePortalTheme</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/theme</td>
        <td>Change the portal theme</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThemeApi.md#getportaltheme"><strong>getPortalTheme</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/theme</td>
        <td>Get the portal theme</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ThirdPartyAccountsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#getthirdpartyauthproviders"><strong>getThirdPartyAuthProviders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/thirdparty/providers</td>
        <td>Get third-party accounts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#linkthirdpartyaccount"><strong>linkThirdPartyAccount</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/thirdparty/linkaccount</td>
        <td>Link a third-pary account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#signupthirdpartyaccount"><strong>signupThirdPartyAccount</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/thirdparty/signup</td>
        <td>Create a third-pary account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#unlinkthirdpartyaccount"><strong>unlinkThirdPartyAccount</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/thirdparty/unlinkaccount</td>
        <td>Unlink a third-pary account</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UserDataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getdeletepersonalfolderprogress"><strong>getDeletePersonalFolderProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/delete/personal/progress</td>
        <td>Get the progress of deleting the personal folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getreassignprogress"><strong>getReassignProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/reassign/progress/{userid}</td>
        <td>Get the reassignment progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getremoveprogress"><strong>getRemoveProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/remove/progress/{userid}</td>
        <td>Get the deletion progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#necessaryreassign"><strong>necessaryReassign</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/reassign/necessary</td>
        <td>Check data for reassignment need</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#sendinstructionstodelete"><strong>sendInstructionsToDelete</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/self/delete</td>
        <td>Send the deletion instructions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#startdeletepersonalfolder"><strong>startDeletePersonalFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/delete/personal/start</td>
        <td>Delete the personal folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#startreassign"><strong>startReassign</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/reassign/start</td>
        <td>Start the data reassignment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#startremove"><strong>startRemove</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/remove/start</td>
        <td>Start the data deletion</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#terminatereassign"><strong>terminateReassign</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/reassign/terminate</td>
        <td>Terminate the data reassignment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#terminateremove"><strong>terminateRemove</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/remove/terminate</td>
        <td>Terminate the data deletion</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UserStatusApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserStatusApi.md#getbystatus"><strong>getByStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/status/{status}</td>
        <td>Get profiles by status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserStatusApi.md#updateuseractivationstatus"><strong>updateUserActivationStatus</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/activationstatus/{activationstatus}</td>
        <td>Set an activation status to the users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserStatusApi.md#updateuserstatus"><strong>updateUserStatus</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/status/{status}</td>
        <td>Change a user status</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UserTypeApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserTypeApi.md#getusertypeupdateprogress"><strong>getUserTypeUpdateProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/type/progress/{userid}</td>
        <td>Get the progress of updating user type</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserTypeApi.md#starusertypetupdate"><strong>starUserTypetUpdate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/type</td>
        <td>Start updating user type</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserTypeApi.md#terminateusertypeupdate"><strong>terminateUserTypeUpdate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/type/terminate</td>
        <td>Terminate updating user type</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserTypeApi.md#updateusertype"><strong>updateUserType</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/type/{type}</td>
        <td>Change a user type</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Portal</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>GuestsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalGuestsApi.md#getguestsharinglink"><strong>getGuestSharingLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/guests/{userid}/share</td>
        <td>Get a guest sharing link</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PaymentApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#calculatewalletpayment"><strong>calculateWalletPayment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/calculatewallet</td>
        <td>Calculate the wallet payment amount</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#changetenantwalletservicestate"><strong>changeTenantWalletServiceState</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/servicestate</td>
        <td>Change wallet service state</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#createcustomeroperationsreport"><strong>createCustomerOperationsReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Start the customer operations report generation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcheckoutsetupurl"><strong>getCheckoutSetupUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/chechoutsetupurl</td>
        <td>Get the checkout setup page URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerbalance"><strong>getCustomerBalance</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/balance</td>
        <td>Get the customer balance</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerinfo"><strong>getCustomerInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customerinfo</td>
        <td>Get the customer information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomeroperations"><strong>getCustomerOperations</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/operations</td>
        <td>Get the customer operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomeroperationsreport"><strong>getCustomerOperationsReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Get the status of the customer operations report generation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentaccount"><strong>getPaymentAccount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/account</td>
        <td>Get the payment account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentcurrencies"><strong>getPaymentCurrencies</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/currencies</td>
        <td>Get currencies</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentquotas"><strong>getPaymentQuotas</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/quotas</td>
        <td>Get quotas</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymenturl"><strong>getPaymentUrl</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/url</td>
        <td>Get the payment page URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getportalprices"><strong>getPortalPrices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/prices</td>
        <td>Get prices</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getquotapaymentinformation"><strong>getQuotaPaymentInformation</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/quota</td>
        <td>Get quota payment information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#gettenantwalletservicesettings"><strong>getTenantWalletServiceSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicessettings</td>
        <td>Get wallet services settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#gettenantwalletsettings"><strong>getTenantWalletSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/topupsettings</td>
        <td>Get wallet auto top-up settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getwalletservice"><strong>getWalletService</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/walletservice</td>
        <td>Get wallet service</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getwalletservices"><strong>getWalletServices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/walletservices</td>
        <td>Get wallet services</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#sendpaymentrequest"><strong>sendPaymentRequest</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/request</td>
        <td>Send a payment request</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#settenantwalletsettings"><strong>setTenantWalletSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/topupsettings</td>
        <td>Set wallet auto top-up settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#terminatecustomeroperationsreport"><strong>terminateCustomerOperationsReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Terminate the customer operations report generation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#topupdeposit"><strong>topUpDeposit</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/deposit</td>
        <td>Put money on deposit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#updatepayment"><strong>updatePayment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/update</td>
        <td>Update the payment quantity</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#updatewalletpayment"><strong>updateWalletPayment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/updatewallet</td>
        <td>Update the wallet payment quantity</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>QuotaApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getportalquota"><strong>getPortalQuota</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/quota</td>
        <td>Get a portal quota</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getportaltariff"><strong>getPortalTariff</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/tariff</td>
        <td>Get a portal tariff</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getportalusedspace"><strong>getPortalUsedSpace</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/usedspace</td>
        <td>Get the portal used space</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getrightquota"><strong>getRightQuota</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/quota/right</td>
        <td>Get the recommended quota</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#continueportal"><strong>continuePortal</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/continue</td>
        <td>Restore a portal</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#deleteportal"><strong>deletePortal</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/delete</td>
        <td>Delete a portal</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#getportalinformation"><strong>getPortalInformation</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal</td>
        <td>Get a portal</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#getportalpath"><strong>getPortalPath</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/path</td>
        <td>Get a path to the portal</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#senddeleteinstructions"><strong>sendDeleteInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/delete</td>
        <td>Send removal instructions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#sendsuspendinstructions"><strong>sendSuspendInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/suspend</td>
        <td>Send suspension instructions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalSettingsApi.md#suspendportal"><strong>suspendPortal</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/suspend</td>
        <td>Deactivate a portal</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UsersApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getinvitationlink"><strong>getInvitationLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/users/invite/{employeeType}</td>
        <td>Get an invitation link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getportaluserscount"><strong>getPortalUsersCount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/userscount</td>
        <td>Get a number of portal users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getuserbyid"><strong>getUserById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/users/{userID}</td>
        <td>Get a user by ID</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#markgiftmessageasread"><strong>markGiftMessageAsRead</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/present/mark</td>
        <td>Mark a gift message as read</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#sendcongratulations"><strong>sendCongratulations</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/sendcongratulations</td>
        <td>Send congratulations</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Rooms</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>RoomsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#addroomtags"><strong>addRoomTags</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/tags</td>
        <td>Add the room tags</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#archiveroom"><strong>archiveRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/archive</td>
        <td>Archive a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#changeroomcover"><strong>changeRoomCover</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/cover</td>
        <td>Change the room cover</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroom"><strong>createRoom</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms</td>
        <td>Create a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomfromtemplate"><strong>createRoomFromTemplate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/fromtemplate</td>
        <td>Create a room from the template</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomlogo"><strong>createRoomLogo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/logo</td>
        <td>Create a room logo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomtag"><strong>createRoomTag</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/tags</td>
        <td>Create a room tag</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomtemplate"><strong>createRoomTemplate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/roomtemplate</td>
        <td>Start creating room template</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomthirdparty"><strong>createRoomThirdParty</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/thirdparty/{id}</td>
        <td>Create a third-party room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#deletecustomtags"><strong>deleteCustomTags</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/tags</td>
        <td>Delete the custom room tags</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#deleteroom"><strong>deleteRoom</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/rooms/{id}</td>
        <td>Remove a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#deleteroomlogo"><strong>deleteRoomLogo</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/rooms/{id}/logo</td>
        <td>Remove a room logo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#deleteroomtags"><strong>deleteRoomTags</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/rooms/{id}/tags</td>
        <td>Remove the room tags</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getnewroomitems"><strong>getNewRoomItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/news</td>
        <td>Get the new room items</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getpublicsettings"><strong>getPublicSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/roomtemplate/{id}/public</td>
        <td>Get public settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomcovers"><strong>getRoomCovers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/covers</td>
        <td>Get covers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomcreatingstatus"><strong>getRoomCreatingStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/fromtemplate/status</td>
        <td>Get the room creation progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomindexexport"><strong>getRoomIndexExport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/indexexport</td>
        <td>Get the room index export</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroominfo"><strong>getRoomInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}</td>
        <td>Get room information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomlinks"><strong>getRoomLinks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/links</td>
        <td>Get the room links</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsecurityinfo"><strong>getRoomSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/share</td>
        <td>Get the room access rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomtagsinfo"><strong>getRoomTagsInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/tags</td>
        <td>Get the room tags</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomtemplatecreatingstatus"><strong>getRoomTemplateCreatingStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/roomtemplate/status</td>
        <td>Get status of room template creation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsfolder"><strong>getRoomsFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms</td>
        <td>Get rooms</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsnewitems"><strong>getRoomsNewItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/news</td>
        <td>Get the room new items</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsprimaryexternallink"><strong>getRoomsPrimaryExternalLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/link</td>
        <td>Get the room primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#pinroom"><strong>pinRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/pin</td>
        <td>Pin a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#reorderroom"><strong>reorderRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/reorder</td>
        <td>Reorder the room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#resendemailinvitations"><strong>resendEmailInvitations</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/resend</td>
        <td>Resend the room invitations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#setpublicsettings"><strong>setPublicSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/roomtemplate/public</td>
        <td>Set public settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#setroomlink"><strong>setRoomLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/links</td>
        <td>Set the room external or invitation link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#setroomsecurity"><strong>setRoomSecurity</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/share</td>
        <td>Set the room access rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#startroomindexexport"><strong>startRoomIndexExport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/indexexport</td>
        <td>Start the room index export</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#terminateroomindexexport"><strong>terminateRoomIndexExport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/rooms/indexexport</td>
        <td>Terminate the room index export</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#unarchiveroom"><strong>unarchiveRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/unarchive</td>
        <td>Unarchive a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#unpinroom"><strong>unpinRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/unpin</td>
        <td>Unpin a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#updateroom"><strong>updateRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}</td>
        <td>Update a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#uploadroomlogo"><strong>uploadRoomLogo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/logos</td>
        <td>Upload a room logo image</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Security</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AccessToDevToolsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAccessToDevToolsApi.md#settenantdevtoolsaccesssettings"><strong>setTenantDevToolsAccessSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/devtoolsaccess</td>
        <td>Set the Developer Tools access settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ActiveConnectionsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#getallactiveconnections"><strong>getAllActiveConnections</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/activeconnections</td>
        <td>Get active connections</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutactiveconnection"><strong>logOutActiveConnection</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logout/{loginEventId}</td>
        <td>Log out from the connection</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallactiveconnectionschangepassword"><strong>logOutAllActiveConnectionsChangePassword</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutallchangepassword</td>
        <td>Log out and change password</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallactiveconnectionsforuser"><strong>logOutAllActiveConnectionsForUser</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutall/{userId}</td>
        <td>Log out for the user by ID</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallexceptthisconnection"><strong>logOutAllExceptThisConnection</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutallexceptthis</td>
        <td>Log out from all connections except the current one</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AuditTrailDataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#createaudittrailreport"><strong>createAuditTrailReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/events/report</td>
        <td>Generate the audit trail report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getauditeventsbyfilter"><strong>getAuditEventsByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/events/filter</td>
        <td>Get filtered audit trail data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getauditsettings"><strong>getAuditSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/settings/lifetime</td>
        <td>Get the audit trail settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getaudittrailmappers"><strong>getAuditTrailMappers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/mappers</td>
        <td>Get audit trail mappers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getaudittrailtypes"><strong>getAuditTrailTypes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/types</td>
        <td>Get audit trail types</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getlastauditevents"><strong>getLastAuditEvents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/events/last</td>
        <td>Get audit trail data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#setauditsettings"><strong>setAuditSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/settings/lifetime</td>
        <td>Set the audit trail settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>BannersVisibilityApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityBannersVisibilityApi.md#settenantbannersettings"><strong>setTenantBannerSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/banner</td>
        <td>Set the banners visibility</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>CSPApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityCSPApi.md#configurecsp"><strong>configureCsp</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/csp</td>
        <td>Configure CSP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityCSPApi.md#getcspsettings"><strong>getCspSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/csp</td>
        <td>Get CSP settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>FirebaseApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityFirebaseApi.md#docregisterpusnnotificationdevice"><strong>docRegisterPusnNotificationDevice</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/push/docregisterdevice</td>
        <td>Save the Documents Firebase device token</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityFirebaseApi.md#subscribedocumentspushnotification"><strong>subscribeDocumentsPushNotification</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/push/docsubscribe</td>
        <td>Subscribe to Documents push notification</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>LoginHistoryApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#createloginhistoryreport"><strong>createLoginHistoryReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/login/report</td>
        <td>Generate the login history report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#getlastloginevents"><strong>getLastLoginEvents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/login/last</td>
        <td>Get login history</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#getlogineventsbyfilter"><strong>getLoginEventsByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/login/filter</td>
        <td>Get filtered login events</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OAuth2Api</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityOAuth2Api.md#generatejwttoken"><strong>generateJwtToken</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/oauth2/token</td>
        <td>Generate JWT token</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SMTPSettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#getsmtpoperationstatus"><strong>getSmtpOperationStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/smtpsettings/smtp/test/status</td>
        <td>Get the SMTP testing process status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#getsmtpsettings"><strong>getSmtpSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Get the SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#resetsmtpsettings"><strong>resetSmtpSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Reset the SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#savesmtpsettings"><strong>saveSmtpSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Save the SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#testsmtpsettings"><strong>testSmtpSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/smtpsettings/smtp/test</td>
        <td>Test the SMTP settings</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>Settings</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AccessToDevToolsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsAccessToDevToolsApi.md#gettenantaccessdevtoolssettings"><strong>getTenantAccessDevToolsSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/devtoolsaccess</td>
        <td>Get the Developer Tools access settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AuthorizationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsAuthorizationApi.md#getauthservices"><strong>getAuthServices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/authservice</td>
        <td>Get the authorization services</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsAuthorizationApi.md#saveauthkeys"><strong>saveAuthKeys</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/authservice</td>
        <td>Save the authorization keys</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>BannersVisibilityApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsBannersVisibilityApi.md#gettenantbannersettings"><strong>getTenantBannerSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/banner</td>
        <td>Get the banners visibility</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>CommonSettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#closeadminhelper"><strong>closeAdminHelper</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/closeadminhelper</td>
        <td>Close the admin helper</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#completewizard"><strong>completeWizard</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/wizard/complete</td>
        <td>Complete the Wizard settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#configuredeeplink"><strong>configureDeepLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/deeplink</td>
        <td>Configure the deep link settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#deleteportalcolortheme"><strong>deletePortalColorTheme</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/colortheme</td>
        <td>Delete a color theme</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getdeeplinksettings"><strong>getDeepLinkSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/deeplink</td>
        <td>Get the deep link settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getpaymentsettings"><strong>getPaymentSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/payment</td>
        <td>Get the payment settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getportalcolortheme"><strong>getPortalColorTheme</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/colortheme</td>
        <td>Get a color theme</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getportalhostname"><strong>getPortalHostname</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/machine</td>
        <td>Get hostname</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getportallogo"><strong>getPortalLogo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/logo</td>
        <td>Get a portal logo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getportalsettings"><strong>getPortalSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings</td>
        <td>Get the portal settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getsocketsettings"><strong>getSocketSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/socket</td>
        <td>Get the socket settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#getsupportedcultures"><strong>getSupportedCultures</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/cultures</td>
        <td>Get supported languages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#gettenantuserinvitationsettings"><strong>getTenantUserInvitationSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/invitationsettings</td>
        <td>Get the user invitation settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#gettimezones"><strong>getTimeZones</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/timezones</td>
        <td>Get time zones</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#savednssettings"><strong>saveDnsSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/dns</td>
        <td>Save the DNS settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#savemaildomainsettings"><strong>saveMailDomainSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/maildomainsettings</td>
        <td>Save the mail domain settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#saveportalcolortheme"><strong>savePortalColorTheme</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/colortheme</td>
        <td>Save a color theme</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#updateemailactivationsettings"><strong>updateEmailActivationSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/emailactivation</td>
        <td>Update the email activation settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#updateinvitationsettings"><strong>updateInvitationSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/invitationsettings</td>
        <td>Update user invitation settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>CookiesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCookiesApi.md#getcookiesettings"><strong>getCookieSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/cookiesettings</td>
        <td>Get cookies lifetime</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCookiesApi.md#updatecookiesettings"><strong>updateCookieSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/cookiesettings</td>
        <td>Update cookies lifetime</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>EncryptionApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsEncryptionApi.md#getstorageencryptionprogress"><strong>getStorageEncryptionProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/encryption/progress</td>
        <td>Get the storage encryption progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsEncryptionApi.md#getstorageencryptionsettings"><strong>getStorageEncryptionSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/encryption/settings</td>
        <td>Get the storage encryption settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsEncryptionApi.md#startstorageencryption"><strong>startStorageEncryption</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/encryption/start</td>
        <td>Start the storage encryption process</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>GreetingSettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsGreetingSettingsApi.md#getgreetingsettings"><strong>getGreetingSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/greetingsettings</td>
        <td>Get greeting settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsGreetingSettingsApi.md#getisdefaultgreetingsettings"><strong>getIsDefaultGreetingSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/greetingsettings/isdefault</td>
        <td>Check the default greeting settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsGreetingSettingsApi.md#restoregreetingsettings"><strong>restoreGreetingSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/greetingsettings/restore</td>
        <td>Restore the greeting settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsGreetingSettingsApi.md#savegreetingsettings"><strong>saveGreetingSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/greetingsettings</td>
        <td>Save the greeting settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>IPRestrictionsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#getiprestrictions"><strong>getIpRestrictions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/iprestrictions</td>
        <td>Get the IP portal restrictions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#readiprestrictionssettings"><strong>readIpRestrictionsSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/iprestrictions/settings</td>
        <td>Get the IP restriction settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#saveiprestrictions"><strong>saveIpRestrictions</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/iprestrictions</td>
        <td>Update the IP restrictions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#updateiprestrictionssettings"><strong>updateIpRestrictionsSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/iprestrictions/settings</td>
        <td>Update the IP restriction settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>LicenseApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLicenseApi.md#acceptlicense"><strong>acceptLicense</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/license/accept</td>
        <td>Activate a license</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLicenseApi.md#getislicenserequired"><strong>getIsLicenseRequired</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/license/required</td>
        <td>Request a license</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLicenseApi.md#refreshlicense"><strong>refreshLicense</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/license/refresh</td>
        <td>Refresh the license</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLicenseApi.md#uploadlicense"><strong>uploadLicense</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/license</td>
        <td>Upload a license</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>LoginSettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLoginSettingsApi.md#getloginsettings"><strong>getLoginSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/loginsettings</td>
        <td>Get the login settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLoginSettingsApi.md#setdefaultloginsettings"><strong>setDefaultLoginSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/security/loginsettings</td>
        <td>Reset the login settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLoginSettingsApi.md#updateloginsettings"><strong>updateLoginSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/loginsettings</td>
        <td>Update the login settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>MessagesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#enableadminmessagesettings"><strong>enableAdminMessageSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/messagesettings</td>
        <td>Enable the administrator message settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#sendadminmail"><strong>sendAdminMail</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/sendadmmail</td>
        <td>Send a message to the administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#sendjoininvitemail"><strong>sendJoinInviteMail</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/sendjoininvite</td>
        <td>Sends an invitation email</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>NotificationsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#getnotificationchannels"><strong>getNotificationChannels</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/notification/channels</td>
        <td>Get notification channels</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#getnotificationsettings"><strong>getNotificationSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/notification/{type}</td>
        <td>Check notification availability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#getroomsnotificationsettings"><strong>getRoomsNotificationSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/notification/rooms</td>
        <td>Get room notification settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#setnotificationsettings"><strong>setNotificationSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/notification</td>
        <td>Enable notifications</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#setroomsnotificationstatus"><strong>setRoomsNotificationStatus</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/notification/rooms</td>
        <td>Set room notification status</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OwnerApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsOwnerApi.md#sendownerchangeinstructions"><strong>sendOwnerChangeInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/owner</td>
        <td>Send the owner change instructions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsOwnerApi.md#updateportalowner"><strong>updatePortalOwner</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/owner</td>
        <td>Update the portal owner</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>QuotaApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsQuotaApi.md#getuserquotasettings"><strong>getUserQuotaSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/userquotasettings</td>
        <td>Get the user quota settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsQuotaApi.md#saveaiagentquotasettings"><strong>saveAiAgentQuotaSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/aiagentquotasettings</td>
        <td>Save the AI Agent quota settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsQuotaApi.md#saveroomquotasettings"><strong>saveRoomQuotaSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/roomquotasettings</td>
        <td>Save the room quota settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsQuotaApi.md#settenantquotasettings"><strong>setTenantQuotaSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tenantquotasettings</td>
        <td>Save the tenant quota settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>RebrandingApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#deleteadditionalwhitelabelsettings"><strong>deleteAdditionalWhiteLabelSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/rebranding/additional</td>
        <td>Delete the additional white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#deletecompanywhitelabelsettings"><strong>deleteCompanyWhiteLabelSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/rebranding/company</td>
        <td>Delete the company white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getadditionalwhitelabelsettings"><strong>getAdditionalWhiteLabelSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/rebranding/additional</td>
        <td>Get the additional white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getcompanywhitelabelsettings"><strong>getCompanyWhiteLabelSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/rebranding/company</td>
        <td>Get the company white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getenablewhitelabel"><strong>getEnableWhitelabel</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/enablewhitelabel</td>
        <td>Check the white label availability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getisdefaultwhitelabellogotext"><strong>getIsDefaultWhiteLabelLogoText</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/whitelabel/logotext/isdefault</td>
        <td>Check the default white label logo text</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getisdefaultwhitelabellogos"><strong>getIsDefaultWhiteLabelLogos</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/whitelabel/logos/isdefault</td>
        <td>Check the default white label logos</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getlicensordata"><strong>getLicensorData</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/companywhitelabel</td>
        <td>Get the licensor data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getwhitelabellogotext"><strong>getWhiteLabelLogoText</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/whitelabel/logotext</td>
        <td>Get the white label logo text</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#getwhitelabellogos"><strong>getWhiteLabelLogos</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/whitelabel/logos</td>
        <td>Get the white label logos</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#restorewhitelabellogotext"><strong>restoreWhiteLabelLogoText</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/whitelabel/logotext/restore</td>
        <td>Restore the white label logo text</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#restorewhitelabellogos"><strong>restoreWhiteLabelLogos</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/whitelabel/logos/restore</td>
        <td>Restore the white label logos</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#saveadditionalwhitelabelsettings"><strong>saveAdditionalWhiteLabelSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/rebranding/additional</td>
        <td>Save the additional white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savecompanywhitelabelsettings"><strong>saveCompanyWhiteLabelSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/rebranding/company</td>
        <td>Save the company white label settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savewhitelabellogotext"><strong>saveWhiteLabelLogoText</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/whitelabel/logotext/save</td>
        <td>Save the white label logo text settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savewhitelabelsettings"><strong>saveWhiteLabelSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/whitelabel/logos/save</td>
        <td>Save the white label logos</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savewhitelabelsettingsfromfiles"><strong>saveWhiteLabelSettingsFromFiles</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/whitelabel/logos/savefromfiles</td>
        <td>Save the white label logos from files</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SSOApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSSOApi.md#getdefaultssosettingsv2"><strong>getDefaultSsoSettingsV2</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/ssov2/default</td>
        <td>Get the default SSO settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSSOApi.md#getssosettingsv2"><strong>getSsoSettingsV2</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/ssov2</td>
        <td>Get the SSO settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSSOApi.md#getssosettingsv2constants"><strong>getSsoSettingsV2Constants</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/ssov2/constants</td>
        <td>Get the SSO settings constants</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSSOApi.md#resetssosettingsv2"><strong>resetSsoSettingsV2</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/ssov2</td>
        <td>Reset the SSO settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSSOApi.md#savessosettingsv2"><strong>saveSsoSettingsV2</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/ssov2</td>
        <td>Save the SSO settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SecurityApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getenabledmodules"><strong>getEnabledModules</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/modules</td>
        <td>Get the enabled modules</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getisproductadministrator"><strong>getIsProductAdministrator</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/administrator</td>
        <td>Check a product administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getpasswordsettings"><strong>getPasswordSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/password</td>
        <td>Get the password settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getproductadministrators"><strong>getProductAdministrators</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/administrator/{productid}</td>
        <td>Get the product administrators</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getwebitemsecurityinfo"><strong>getWebItemSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/{id}</td>
        <td>Get the module availability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getwebitemsettingssecurityinfo"><strong>getWebItemSettingsSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security</td>
        <td>Get the security settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setaccesstowebitems"><strong>setAccessToWebItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/access</td>
        <td>Set the security settings to modules</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setproductadministrator"><strong>setProductAdministrator</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/administrator</td>
        <td>Set a product administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setwebitemsecurity"><strong>setWebItemSecurity</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security</td>
        <td>Set the module security settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#updatepasswordsettings"><strong>updatePasswordSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/password</td>
        <td>Set the password settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>StatisticsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStatisticsApi.md#getspaceusagestatistics"><strong>getSpaceUsageStatistics</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/statistics/spaceusage/{id}</td>
        <td>Get the space usage statistics</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>StorageApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getallbackupstorages"><strong>getAllBackupStorages</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/backup</td>
        <td>Get the backup storages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getallcdnstorages"><strong>getAllCdnStorages</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/cdn</td>
        <td>Get the CDN storages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getallstorages"><strong>getAllStorages</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage</td>
        <td>Get storages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getamazons3regions"><strong>getAmazonS3Regions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/s3/regions</td>
        <td>Get Amazon regions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getstorageprogress"><strong>getStorageProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/progress</td>
        <td>Get the storage progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#resetcdntodefault"><strong>resetCdnToDefault</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/storage/cdn</td>
        <td>Reset the CDN storage settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#resetstoragetodefault"><strong>resetStorageToDefault</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/storage</td>
        <td>Reset the storage settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#updatecdnstorage"><strong>updateCdnStorage</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/storage/cdn</td>
        <td>Update the CDN storage</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#updatestorage"><strong>updateStorage</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/storage</td>
        <td>Update a storage</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>TFASettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfaappcodes"><strong>getTfaAppCodes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaappcodes</td>
        <td>Get the TFA codes</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfaconfirmurl"><strong>getTfaConfirmUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp/confirm</td>
        <td>Get confirmation email</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfasettings"><strong>getTfaSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp</td>
        <td>Get the TFA settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#tfaappgeneratesetupcode"><strong>tfaAppGenerateSetupCode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp/setup</td>
        <td>Generate setup code</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#tfavalidateauthcode"><strong>tfaValidateAuthCode</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/tfaapp/validate</td>
        <td>Validate the TFA code</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#unlinktfaapp"><strong>unlinkTfaApp</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaappnewapp</td>
        <td>Unlink the TFA application</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#updatetfaappcodes"><strong>updateTfaAppCodes</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaappnewcodes</td>
        <td>Update the TFA codes</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#updatetfasettings"><strong>updateTfaSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaapp</td>
        <td>Update the TFA settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#updatetfasettingslink"><strong>updateTfaSettingsLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaappwithlink</td>
        <td>Get a confirmation email for updating TFA settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>TelegramApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTelegramApi.md#checktelegram"><strong>checkTelegram</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/telegram/check</td>
        <td>Check the Telegram connection</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTelegramApi.md#linktelegram"><strong>linkTelegram</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/telegram/link</td>
        <td>Get the Telegram link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTelegramApi.md#unlinktelegram"><strong>unlinkTelegram</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/telegram/link</td>
        <td>Unlink Telegram</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>WebhooksApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#createwebhook"><strong>createWebhook</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/webhook</td>
        <td>Create a webhook</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#enablewebhook"><strong>enableWebhook</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook/enable</td>
        <td>Enable a webhook</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#gettenantwebhooks"><strong>getTenantWebhooks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhook</td>
        <td>Get webhooks</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#getwebhooktriggers"><strong>getWebhookTriggers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhook/triggers</td>
        <td>Get webhook triggers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#getwebhookslogs"><strong>getWebhooksLogs</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhooks/log</td>
        <td>Get webhook logs</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#removewebhook"><strong>removeWebhook</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/webhook/{id}</td>
        <td>Remove a webhook</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#retrywebhook"><strong>retryWebhook</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook/{id}/retry</td>
        <td>Retry a webhook</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#retrywebhooks"><strong>retryWebhooks</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook/retry</td>
        <td>Retry webhooks</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#updatewebhook"><strong>updateWebhook</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook</td>
        <td>Update a webhook</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>WebpluginsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebpluginsApi.md#addwebpluginfromfile"><strong>addWebPluginFromFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/webplugins</td>
        <td>Add a web plugin</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebpluginsApi.md#deletewebplugin"><strong>deleteWebPlugin</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/webplugins/{name}</td>
        <td>Delete a web plugin</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebpluginsApi.md#getwebplugin"><strong>getWebPlugin</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webplugins/{name}</td>
        <td>Get a web plugin by name</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebpluginsApi.md#getwebplugins"><strong>getWebPlugins</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webplugins</td>
        <td>Get web plugins</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebpluginsApi.md#updatewebplugin"><strong>updateWebPlugin</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webplugins/{name}</td>
        <td>Update a web plugin</td>
      </tr>
    </tbody>
  </table>

</details>
<details>
  <summary>ThirdParty</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>ThirdPartyApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiThirdPartyApi.md#getthirdpartycode"><strong>getThirdPartyCode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/thirdparty/{provider}</td>
        <td>Get the code request</td>
      </tr>
    </tbody>
  </table>

</details>

## Documentation for Models

<details><summary>Models list</summary>

 - [OpenAPI\Client\Model.AccountInfoArrayWrapper](docs/ModelAccountInfoArrayWrapper.md)
 - [OpenAPI\Client\Model.AccountInfoDto](docs/ModelAccountInfoDto.md)
 - [OpenAPI\Client\Model.AccountLoginType](docs/ModelAccountLoginType.md)
 - [OpenAPI\Client\Model.AceShortWrapper](docs/ModelAceShortWrapper.md)
 - [OpenAPI\Client\Model.AceShortWrapperArrayWrapper](docs/ModelAceShortWrapperArrayWrapper.md)
 - [OpenAPI\Client\Model.ActionConfig](docs/ModelActionConfig.md)
 - [OpenAPI\Client\Model.ActionLinkConfig](docs/ModelActionLinkConfig.md)
 - [OpenAPI\Client\Model.ActionType](docs/ModelActionType.md)
 - [OpenAPI\Client\Model.ActiveConnectionsDto](docs/ModelActiveConnectionsDto.md)
 - [OpenAPI\Client\Model.ActiveConnectionsItemDto](docs/ModelActiveConnectionsItemDto.md)
 - [OpenAPI\Client\Model.ActiveConnectionsWrapper](docs/ModelActiveConnectionsWrapper.md)
 - [OpenAPI\Client\Model.ActiveConnectionsWrapperLinksInner](docs/ModelActiveConnectionsWrapperLinksInner.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettings](docs/ModelAdditionalWhiteLabelSettings.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettingsDto](docs/ModelAdditionalWhiteLabelSettingsDto.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettingsWrapper](docs/ModelAdditionalWhiteLabelSettingsWrapper.md)
 - [OpenAPI\Client\Model.AdminMessageBaseSettingsRequestsDto](docs/ModelAdminMessageBaseSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.AdminMessageSettingsRequestsDto](docs/ModelAdminMessageSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.AnonymousConfigDto](docs/ModelAnonymousConfigDto.md)
 - [OpenAPI\Client\Model.ApiDateTime](docs/ModelApiDateTime.md)
 - [OpenAPI\Client\Model.ApiKeyResponseArrayWrapper](docs/ModelApiKeyResponseArrayWrapper.md)
 - [OpenAPI\Client\Model.ApiKeyResponseDto](docs/ModelApiKeyResponseDto.md)
 - [OpenAPI\Client\Model.ApiKeyResponseWrapper](docs/ModelApiKeyResponseWrapper.md)
 - [OpenAPI\Client\Model.ApplyFilterOption](docs/ModelApplyFilterOption.md)
 - [OpenAPI\Client\Model.ArchiveRoomRequest](docs/ModelArchiveRoomRequest.md)
 - [OpenAPI\Client\Model.Area](docs/ModelArea.md)
 - [OpenAPI\Client\Model.ArrayArrayWrapper](docs/ModelArrayArrayWrapper.md)
 - [OpenAPI\Client\Model.AuditEventArrayWrapper](docs/ModelAuditEventArrayWrapper.md)
 - [OpenAPI\Client\Model.AuditEventDto](docs/ModelAuditEventDto.md)
 - [OpenAPI\Client\Model.AuthData](docs/ModelAuthData.md)
 - [OpenAPI\Client\Model.AuthKey](docs/ModelAuthKey.md)
 - [OpenAPI\Client\Model.AuthRequestsDto](docs/ModelAuthRequestsDto.md)
 - [OpenAPI\Client\Model.AuthServiceRequestsArrayWrapper](docs/ModelAuthServiceRequestsArrayWrapper.md)
 - [OpenAPI\Client\Model.AuthServiceRequestsDto](docs/ModelAuthServiceRequestsDto.md)
 - [OpenAPI\Client\Model.AuthenticationTokenDto](docs/ModelAuthenticationTokenDto.md)
 - [OpenAPI\Client\Model.AuthenticationTokenWrapper](docs/ModelAuthenticationTokenWrapper.md)
 - [OpenAPI\Client\Model.AutoCleanUpData](docs/ModelAutoCleanUpData.md)
 - [OpenAPI\Client\Model.AutoCleanUpDataWrapper](docs/ModelAutoCleanUpDataWrapper.md)
 - [OpenAPI\Client\Model.AutoCleanupRequestDto](docs/ModelAutoCleanupRequestDto.md)
 - [OpenAPI\Client\Model.BackupDto](docs/ModelBackupDto.md)
 - [OpenAPI\Client\Model.BackupHistoryRecord](docs/ModelBackupHistoryRecord.md)
 - [OpenAPI\Client\Model.BackupHistoryRecordArrayWrapper](docs/ModelBackupHistoryRecordArrayWrapper.md)
 - [OpenAPI\Client\Model.BackupPeriod](docs/ModelBackupPeriod.md)
 - [OpenAPI\Client\Model.BackupProgress](docs/ModelBackupProgress.md)
 - [OpenAPI\Client\Model.BackupProgressEnum](docs/ModelBackupProgressEnum.md)
 - [OpenAPI\Client\Model.BackupProgressWrapper](docs/ModelBackupProgressWrapper.md)
 - [OpenAPI\Client\Model.BackupRestoreDto](docs/ModelBackupRestoreDto.md)
 - [OpenAPI\Client\Model.BackupScheduleDto](docs/ModelBackupScheduleDto.md)
 - [OpenAPI\Client\Model.BackupServiceStateDto](docs/ModelBackupServiceStateDto.md)
 - [OpenAPI\Client\Model.BackupServiceStateWrapper](docs/ModelBackupServiceStateWrapper.md)
 - [OpenAPI\Client\Model.BackupStorageType](docs/ModelBackupStorageType.md)
 - [OpenAPI\Client\Model.Balance](docs/ModelBalance.md)
 - [OpenAPI\Client\Model.BalanceWrapper](docs/ModelBalanceWrapper.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDto](docs/ModelBaseBatchRequestDto.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDtoAllOfFileIds](docs/ModelBaseBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDtoAllOfFolderIds](docs/ModelBaseBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.BaseStorageSettingsCdnStorageSettings](docs/ModelBaseStorageSettingsCdnStorageSettings.md)
 - [OpenAPI\Client\Model.BaseStorageSettingsStorageSettings](docs/ModelBaseStorageSettingsStorageSettings.md)
 - [OpenAPI\Client\Model.BatchRequestDto](docs/ModelBatchRequestDto.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfDestFolderId](docs/ModelBatchRequestDtoAllOfDestFolderId.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfFileIds](docs/ModelBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfFolderIds](docs/ModelBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.BatchTagsRequestDto](docs/ModelBatchTagsRequestDto.md)
 - [OpenAPI\Client\Model.BooleanWrapper](docs/ModelBooleanWrapper.md)
 - [OpenAPI\Client\Model.CapabilitiesDto](docs/ModelCapabilitiesDto.md)
 - [OpenAPI\Client\Model.CapabilitiesWrapper](docs/ModelCapabilitiesWrapper.md)
 - [OpenAPI\Client\Model.CdnStorageSettings](docs/ModelCdnStorageSettings.md)
 - [OpenAPI\Client\Model.CdnStorageSettingsWrapper](docs/ModelCdnStorageSettingsWrapper.md)
 - [OpenAPI\Client\Model.ChangeClientActivationRequest](docs/ModelChangeClientActivationRequest.md)
 - [OpenAPI\Client\Model.ChangeHistory](docs/ModelChangeHistory.md)
 - [OpenAPI\Client\Model.ChangeOwnerRequestDto](docs/ModelChangeOwnerRequestDto.md)
 - [OpenAPI\Client\Model.ChangeWalletServiceStateRequestDto](docs/ModelChangeWalletServiceStateRequestDto.md)
 - [OpenAPI\Client\Model.ChatSettings](docs/ModelChatSettings.md)
 - [OpenAPI\Client\Model.CheckConversionRequestDtoInteger](docs/ModelCheckConversionRequestDtoInteger.md)
 - [OpenAPI\Client\Model.CheckDestFolderDto](docs/ModelCheckDestFolderDto.md)
 - [OpenAPI\Client\Model.CheckDestFolderResult](docs/ModelCheckDestFolderResult.md)
 - [OpenAPI\Client\Model.CheckDestFolderWrapper](docs/ModelCheckDestFolderWrapper.md)
 - [OpenAPI\Client\Model.CheckDocServiceUrlRequestDto](docs/ModelCheckDocServiceUrlRequestDto.md)
 - [OpenAPI\Client\Model.CheckFillFormDraft](docs/ModelCheckFillFormDraft.md)
 - [OpenAPI\Client\Model.CheckUploadRequest](docs/ModelCheckUploadRequest.md)
 - [OpenAPI\Client\Model.ClientInfoResponse](docs/ModelClientInfoResponse.md)
 - [OpenAPI\Client\Model.ClientResponse](docs/ModelClientResponse.md)
 - [OpenAPI\Client\Model.ClientSecretResponse](docs/ModelClientSecretResponse.md)
 - [OpenAPI\Client\Model.CoEditingConfig](docs/ModelCoEditingConfig.md)
 - [OpenAPI\Client\Model.CoEditingConfigMode](docs/ModelCoEditingConfigMode.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettings](docs/ModelCompanyWhiteLabelSettings.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsArrayWrapper](docs/ModelCompanyWhiteLabelSettingsArrayWrapper.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsDto](docs/ModelCompanyWhiteLabelSettingsDto.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsWrapper](docs/ModelCompanyWhiteLabelSettingsWrapper.md)
 - [OpenAPI\Client\Model.ConfigurationDtoInteger](docs/ModelConfigurationDtoInteger.md)
 - [OpenAPI\Client\Model.ConfigurationIntegerWrapper](docs/ModelConfigurationIntegerWrapper.md)
 - [OpenAPI\Client\Model.ConfirmData](docs/ModelConfirmData.md)
 - [OpenAPI\Client\Model.ConfirmDto](docs/ModelConfirmDto.md)
 - [OpenAPI\Client\Model.ConfirmType](docs/ModelConfirmType.md)
 - [OpenAPI\Client\Model.ConfirmWrapper](docs/ModelConfirmWrapper.md)
 - [OpenAPI\Client\Model.Contact](docs/ModelContact.md)
 - [OpenAPI\Client\Model.ContentDisposition](docs/ModelContentDisposition.md)
 - [OpenAPI\Client\Model.ContentType](docs/ModelContentType.md)
 - [OpenAPI\Client\Model.ConversationResultArrayWrapper](docs/ModelConversationResultArrayWrapper.md)
 - [OpenAPI\Client\Model.ConversationResultDto](docs/ModelConversationResultDto.md)
 - [OpenAPI\Client\Model.CookieSettingsDto](docs/ModelCookieSettingsDto.md)
 - [OpenAPI\Client\Model.CookieSettingsRequestsDto](docs/ModelCookieSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.CookieSettingsWrapper](docs/ModelCookieSettingsWrapper.md)
 - [OpenAPI\Client\Model.CopyAsJsonElement](docs/ModelCopyAsJsonElement.md)
 - [OpenAPI\Client\Model.CopyAsJsonElementDestFolderId](docs/ModelCopyAsJsonElementDestFolderId.md)
 - [OpenAPI\Client\Model.CoverRequestDto](docs/ModelCoverRequestDto.md)
 - [OpenAPI\Client\Model.CoversResultArrayWrapper](docs/ModelCoversResultArrayWrapper.md)
 - [OpenAPI\Client\Model.CoversResultDto](docs/ModelCoversResultDto.md)
 - [OpenAPI\Client\Model.CreateApiKeyRequestDto](docs/ModelCreateApiKeyRequestDto.md)
 - [OpenAPI\Client\Model.CreateClientRequest](docs/ModelCreateClientRequest.md)
 - [OpenAPI\Client\Model.CreateFileJsonElement](docs/ModelCreateFileJsonElement.md)
 - [OpenAPI\Client\Model.CreateFileJsonElementTemplateId](docs/ModelCreateFileJsonElementTemplateId.md)
 - [OpenAPI\Client\Model.CreateFolder](docs/ModelCreateFolder.md)
 - [OpenAPI\Client\Model.CreateRoomFromTemplateDto](docs/ModelCreateRoomFromTemplateDto.md)
 - [OpenAPI\Client\Model.CreateRoomRequestDto](docs/ModelCreateRoomRequestDto.md)
 - [OpenAPI\Client\Model.CreateTagRequestDto](docs/ModelCreateTagRequestDto.md)
 - [OpenAPI\Client\Model.CreateTextOrHtmlFile](docs/ModelCreateTextOrHtmlFile.md)
 - [OpenAPI\Client\Model.CreateThirdPartyRoom](docs/ModelCreateThirdPartyRoom.md)
 - [OpenAPI\Client\Model.CreateWebhooksConfigRequestsDto](docs/ModelCreateWebhooksConfigRequestsDto.md)
 - [OpenAPI\Client\Model.Cron](docs/ModelCron.md)
 - [OpenAPI\Client\Model.CronParams](docs/ModelCronParams.md)
 - [OpenAPI\Client\Model.CspDto](docs/ModelCspDto.md)
 - [OpenAPI\Client\Model.CspRequestsDto](docs/ModelCspRequestsDto.md)
 - [OpenAPI\Client\Model.CspWrapper](docs/ModelCspWrapper.md)
 - [OpenAPI\Client\Model.Culture](docs/ModelCulture.md)
 - [OpenAPI\Client\Model.CultureSpecificExternalResource](docs/ModelCultureSpecificExternalResource.md)
 - [OpenAPI\Client\Model.CultureSpecificExternalResources](docs/ModelCultureSpecificExternalResources.md)
 - [OpenAPI\Client\Model.CurrenciesArrayWrapper](docs/ModelCurrenciesArrayWrapper.md)
 - [OpenAPI\Client\Model.CurrenciesDto](docs/ModelCurrenciesDto.md)
 - [OpenAPI\Client\Model.CurrentLicenseInfo](docs/ModelCurrentLicenseInfo.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsColorItem](docs/ModelCustomColorThemesSettingsColorItem.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsDto](docs/ModelCustomColorThemesSettingsDto.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsItem](docs/ModelCustomColorThemesSettingsItem.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsRequestsDto](docs/ModelCustomColorThemesSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsWrapper](docs/ModelCustomColorThemesSettingsWrapper.md)
 - [OpenAPI\Client\Model.CustomFilterParameters](docs/ModelCustomFilterParameters.md)
 - [OpenAPI\Client\Model.CustomerConfigDto](docs/ModelCustomerConfigDto.md)
 - [OpenAPI\Client\Model.CustomerInfoDto](docs/ModelCustomerInfoDto.md)
 - [OpenAPI\Client\Model.CustomerInfoWrapper](docs/ModelCustomerInfoWrapper.md)
 - [OpenAPI\Client\Model.CustomerOperationsReportRequestDto](docs/ModelCustomerOperationsReportRequestDto.md)
 - [OpenAPI\Client\Model.CustomizationConfigDto](docs/ModelCustomizationConfigDto.md)
 - [OpenAPI\Client\Model.DarkThemeSettings](docs/ModelDarkThemeSettings.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsRequestDto](docs/ModelDarkThemeSettingsRequestDto.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsType](docs/ModelDarkThemeSettingsType.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsWrapper](docs/ModelDarkThemeSettingsWrapper.md)
 - [OpenAPI\Client\Model.DateToAutoCleanUp](docs/ModelDateToAutoCleanUp.md)
 - [OpenAPI\Client\Model.DbTenant](docs/ModelDbTenant.md)
 - [OpenAPI\Client\Model.DbTenantPartner](docs/ModelDbTenantPartner.md)
 - [OpenAPI\Client\Model.DeepLinkConfigurationRequestsDto](docs/ModelDeepLinkConfigurationRequestsDto.md)
 - [OpenAPI\Client\Model.DeepLinkDto](docs/ModelDeepLinkDto.md)
 - [OpenAPI\Client\Model.DeepLinkHandlingMode](docs/ModelDeepLinkHandlingMode.md)
 - [OpenAPI\Client\Model.Delete](docs/ModelDelete.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDto](docs/ModelDeleteBatchRequestDto.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDtoAllOfFileIds](docs/ModelDeleteBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDtoAllOfFolderIds](docs/ModelDeleteBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.DeleteFolder](docs/ModelDeleteFolder.md)
 - [OpenAPI\Client\Model.DeleteRoomRequest](docs/ModelDeleteRoomRequest.md)
 - [OpenAPI\Client\Model.DeleteVersionBatchRequestDto](docs/ModelDeleteVersionBatchRequestDto.md)
 - [OpenAPI\Client\Model.DisplayRequestDto](docs/ModelDisplayRequestDto.md)
 - [OpenAPI\Client\Model.DistributedTaskStatus](docs/ModelDistributedTaskStatus.md)
 - [OpenAPI\Client\Model.DnsSettingsRequestsDto](docs/ModelDnsSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.DocServiceUrlDto](docs/ModelDocServiceUrlDto.md)
 - [OpenAPI\Client\Model.DocServiceUrlWrapper](docs/ModelDocServiceUrlWrapper.md)
 - [OpenAPI\Client\Model.DocumentBuilderTaskDto](docs/ModelDocumentBuilderTaskDto.md)
 - [OpenAPI\Client\Model.DocumentBuilderTaskWrapper](docs/ModelDocumentBuilderTaskWrapper.md)
 - [OpenAPI\Client\Model.DocumentConfigDto](docs/ModelDocumentConfigDto.md)
 - [OpenAPI\Client\Model.DoubleWrapper](docs/ModelDoubleWrapper.md)
 - [OpenAPI\Client\Model.DownloadRequestDto](docs/ModelDownloadRequestDto.md)
 - [OpenAPI\Client\Model.DownloadRequestDtoAllOfFileIds](docs/ModelDownloadRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DownloadRequestDtoAllOfFolderIds](docs/ModelDownloadRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.DownloadRequestItemDto](docs/ModelDownloadRequestItemDto.md)
 - [OpenAPI\Client\Model.DownloadRequestItemDtoKey](docs/ModelDownloadRequestItemDtoKey.md)
 - [OpenAPI\Client\Model.DraftLocationInteger](docs/ModelDraftLocationInteger.md)
 - [OpenAPI\Client\Model.DuplicateRequestDto](docs/ModelDuplicateRequestDto.md)
 - [OpenAPI\Client\Model.DuplicateRequestDtoAllOfFileIds](docs/ModelDuplicateRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DuplicateRequestDtoAllOfFolderIds](docs/ModelDuplicateRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.EditHistoryArrayWrapper](docs/ModelEditHistoryArrayWrapper.md)
 - [OpenAPI\Client\Model.EditHistoryAuthor](docs/ModelEditHistoryAuthor.md)
 - [OpenAPI\Client\Model.EditHistoryChangesWrapper](docs/ModelEditHistoryChangesWrapper.md)
 - [OpenAPI\Client\Model.EditHistoryDataDto](docs/ModelEditHistoryDataDto.md)
 - [OpenAPI\Client\Model.EditHistoryDataWrapper](docs/ModelEditHistoryDataWrapper.md)
 - [OpenAPI\Client\Model.EditHistoryDto](docs/ModelEditHistoryDto.md)
 - [OpenAPI\Client\Model.EditHistoryUrl](docs/ModelEditHistoryUrl.md)
 - [OpenAPI\Client\Model.EditorConfigurationDto](docs/ModelEditorConfigurationDto.md)
 - [OpenAPI\Client\Model.EditorType](docs/ModelEditorType.md)
 - [OpenAPI\Client\Model.EmailActivationSettings](docs/ModelEmailActivationSettings.md)
 - [OpenAPI\Client\Model.EmailActivationSettingsWrapper](docs/ModelEmailActivationSettingsWrapper.md)
 - [OpenAPI\Client\Model.EmailInvitationDto](docs/ModelEmailInvitationDto.md)
 - [OpenAPI\Client\Model.EmailMemberRequestDto](docs/ModelEmailMemberRequestDto.md)
 - [OpenAPI\Client\Model.EmailValidationKeyModel](docs/ModelEmailValidationKeyModel.md)
 - [OpenAPI\Client\Model.EmbeddedConfig](docs/ModelEmbeddedConfig.md)
 - [OpenAPI\Client\Model.EmployeeActivationStatus](docs/ModelEmployeeActivationStatus.md)
 - [OpenAPI\Client\Model.EmployeeArrayWrapper](docs/ModelEmployeeArrayWrapper.md)
 - [OpenAPI\Client\Model.EmployeeDto](docs/ModelEmployeeDto.md)
 - [OpenAPI\Client\Model.EmployeeFullArrayWrapper](docs/ModelEmployeeFullArrayWrapper.md)
 - [OpenAPI\Client\Model.EmployeeFullDto](docs/ModelEmployeeFullDto.md)
 - [OpenAPI\Client\Model.EmployeeFullWrapper](docs/ModelEmployeeFullWrapper.md)
 - [OpenAPI\Client\Model.EmployeeStatus](docs/ModelEmployeeStatus.md)
 - [OpenAPI\Client\Model.EmployeeType](docs/ModelEmployeeType.md)
 - [OpenAPI\Client\Model.EmployeeWrapper](docs/ModelEmployeeWrapper.md)
 - [OpenAPI\Client\Model.EncryprtionStatus](docs/ModelEncryprtionStatus.md)
 - [OpenAPI\Client\Model.EncryptionKeysConfig](docs/ModelEncryptionKeysConfig.md)
 - [OpenAPI\Client\Model.EncryptionSettings](docs/ModelEncryptionSettings.md)
 - [OpenAPI\Client\Model.EncryptionSettingsWrapper](docs/ModelEncryptionSettingsWrapper.md)
 - [OpenAPI\Client\Model.EntryType](docs/ModelEntryType.md)
 - [OpenAPI\Client\Model.ErrorResponse](docs/ModelErrorResponse.md)
 - [OpenAPI\Client\Model.ExchangeToken200Response](docs/ModelExchangeToken200Response.md)
 - [OpenAPI\Client\Model.ExternalShareDto](docs/ModelExternalShareDto.md)
 - [OpenAPI\Client\Model.ExternalShareRequestParam](docs/ModelExternalShareRequestParam.md)
 - [OpenAPI\Client\Model.ExternalShareWrapper](docs/ModelExternalShareWrapper.md)
 - [OpenAPI\Client\Model.FeatureUsedDto](docs/ModelFeatureUsedDto.md)
 - [OpenAPI\Client\Model.FeedbackConfig](docs/ModelFeedbackConfig.md)
 - [OpenAPI\Client\Model.FileConflictResolveType](docs/ModelFileConflictResolveType.md)
 - [OpenAPI\Client\Model.FileDtoInteger](docs/ModelFileDtoInteger.md)
 - [OpenAPI\Client\Model.FileDtoIntegerAllOfViewAccessibility](docs/ModelFileDtoIntegerAllOfViewAccessibility.md)
 - [OpenAPI\Client\Model.FileEntryBaseArrayWrapper](docs/ModelFileEntryBaseArrayWrapper.md)
 - [OpenAPI\Client\Model.FileEntryBaseDto](docs/ModelFileEntryBaseDto.md)
 - [OpenAPI\Client\Model.FileEntryBaseWrapper](docs/ModelFileEntryBaseWrapper.md)
 - [OpenAPI\Client\Model.FileEntryDtoInteger](docs/ModelFileEntryDtoInteger.md)
 - [OpenAPI\Client\Model.FileEntryDtoIntegerAllOfAvailableShareRights](docs/ModelFileEntryDtoIntegerAllOfAvailableShareRights.md)
 - [OpenAPI\Client\Model.FileEntryDtoIntegerAllOfSecurity](docs/ModelFileEntryDtoIntegerAllOfSecurity.md)
 - [OpenAPI\Client\Model.FileEntryDtoIntegerAllOfShareSettings](docs/ModelFileEntryDtoIntegerAllOfShareSettings.md)
 - [OpenAPI\Client\Model.FileEntryDtoString](docs/ModelFileEntryDtoString.md)
 - [OpenAPI\Client\Model.FileEntryIntegerArrayWrapper](docs/ModelFileEntryIntegerArrayWrapper.md)
 - [OpenAPI\Client\Model.FileEntryType](docs/ModelFileEntryType.md)
 - [OpenAPI\Client\Model.FileIntegerArrayWrapper](docs/ModelFileIntegerArrayWrapper.md)
 - [OpenAPI\Client\Model.FileIntegerWrapper](docs/ModelFileIntegerWrapper.md)
 - [OpenAPI\Client\Model.FileLink](docs/ModelFileLink.md)
 - [OpenAPI\Client\Model.FileLinkRequest](docs/ModelFileLinkRequest.md)
 - [OpenAPI\Client\Model.FileLinkWrapper](docs/ModelFileLinkWrapper.md)
 - [OpenAPI\Client\Model.FileOperationArrayWrapper](docs/ModelFileOperationArrayWrapper.md)
 - [OpenAPI\Client\Model.FileOperationDto](docs/ModelFileOperationDto.md)
 - [OpenAPI\Client\Model.FileOperationRequestBaseDto](docs/ModelFileOperationRequestBaseDto.md)
 - [OpenAPI\Client\Model.FileOperationType](docs/ModelFileOperationType.md)
 - [OpenAPI\Client\Model.FileOperationWrapper](docs/ModelFileOperationWrapper.md)
 - [OpenAPI\Client\Model.FileReference](docs/ModelFileReference.md)
 - [OpenAPI\Client\Model.FileReferenceData](docs/ModelFileReferenceData.md)
 - [OpenAPI\Client\Model.FileReferenceWrapper](docs/ModelFileReferenceWrapper.md)
 - [OpenAPI\Client\Model.FileShare](docs/ModelFileShare.md)
 - [OpenAPI\Client\Model.FileShareArrayWrapper](docs/ModelFileShareArrayWrapper.md)
 - [OpenAPI\Client\Model.FileShareDto](docs/ModelFileShareDto.md)
 - [OpenAPI\Client\Model.FileShareLink](docs/ModelFileShareLink.md)
 - [OpenAPI\Client\Model.FileShareParams](docs/ModelFileShareParams.md)
 - [OpenAPI\Client\Model.FileShareWrapper](docs/ModelFileShareWrapper.md)
 - [OpenAPI\Client\Model.FileStatus](docs/ModelFileStatus.md)
 - [OpenAPI\Client\Model.FileType](docs/ModelFileType.md)
 - [OpenAPI\Client\Model.FileUploadResultDto](docs/ModelFileUploadResultDto.md)
 - [OpenAPI\Client\Model.FileUploadResultWrapper](docs/ModelFileUploadResultWrapper.md)
 - [OpenAPI\Client\Model.FilesSettingsDto](docs/ModelFilesSettingsDto.md)
 - [OpenAPI\Client\Model.FilesSettingsDtoInternalFormats](docs/ModelFilesSettingsDtoInternalFormats.md)
 - [OpenAPI\Client\Model.FilesSettingsWrapper](docs/ModelFilesSettingsWrapper.md)
 - [OpenAPI\Client\Model.FilesStatisticsFolder](docs/ModelFilesStatisticsFolder.md)
 - [OpenAPI\Client\Model.FilesStatisticsResultDto](docs/ModelFilesStatisticsResultDto.md)
 - [OpenAPI\Client\Model.FilesStatisticsResultWrapper](docs/ModelFilesStatisticsResultWrapper.md)
 - [OpenAPI\Client\Model.FillingFormResultDtoInteger](docs/ModelFillingFormResultDtoInteger.md)
 - [OpenAPI\Client\Model.FillingFormResultIntegerWrapper](docs/ModelFillingFormResultIntegerWrapper.md)
 - [OpenAPI\Client\Model.FilterType](docs/ModelFilterType.md)
 - [OpenAPI\Client\Model.FinishDto](docs/ModelFinishDto.md)
 - [OpenAPI\Client\Model.FireBaseUser](docs/ModelFireBaseUser.md)
 - [OpenAPI\Client\Model.FireBaseUserWrapper](docs/ModelFireBaseUserWrapper.md)
 - [OpenAPI\Client\Model.FirebaseDto](docs/ModelFirebaseDto.md)
 - [OpenAPI\Client\Model.FirebaseRequestsDto](docs/ModelFirebaseRequestsDto.md)
 - [OpenAPI\Client\Model.FolderContentDtoInteger](docs/ModelFolderContentDtoInteger.md)
 - [OpenAPI\Client\Model.FolderContentIntegerArrayWrapper](docs/ModelFolderContentIntegerArrayWrapper.md)
 - [OpenAPI\Client\Model.FolderContentIntegerWrapper](docs/ModelFolderContentIntegerWrapper.md)
 - [OpenAPI\Client\Model.FolderDtoInteger](docs/ModelFolderDtoInteger.md)
 - [OpenAPI\Client\Model.FolderDtoString](docs/ModelFolderDtoString.md)
 - [OpenAPI\Client\Model.FolderIntegerArrayWrapper](docs/ModelFolderIntegerArrayWrapper.md)
 - [OpenAPI\Client\Model.FolderIntegerWrapper](docs/ModelFolderIntegerWrapper.md)
 - [OpenAPI\Client\Model.FolderLinkRequest](docs/ModelFolderLinkRequest.md)
 - [OpenAPI\Client\Model.FolderStringArrayWrapper](docs/ModelFolderStringArrayWrapper.md)
 - [OpenAPI\Client\Model.FolderStringWrapper](docs/ModelFolderStringWrapper.md)
 - [OpenAPI\Client\Model.FolderType](docs/ModelFolderType.md)
 - [OpenAPI\Client\Model.FormFillingManageAction](docs/ModelFormFillingManageAction.md)
 - [OpenAPI\Client\Model.FormFillingStatus](docs/ModelFormFillingStatus.md)
 - [OpenAPI\Client\Model.FormGalleryDto](docs/ModelFormGalleryDto.md)
 - [OpenAPI\Client\Model.FormRole](docs/ModelFormRole.md)
 - [OpenAPI\Client\Model.FormRoleArrayWrapper](docs/ModelFormRoleArrayWrapper.md)
 - [OpenAPI\Client\Model.FormRoleDto](docs/ModelFormRoleDto.md)
 - [OpenAPI\Client\Model.FormsItemArrayWrapper](docs/ModelFormsItemArrayWrapper.md)
 - [OpenAPI\Client\Model.FormsItemDto](docs/ModelFormsItemDto.md)
 - [OpenAPI\Client\Model.GetReferenceDataDtoInteger](docs/ModelGetReferenceDataDtoInteger.md)
 - [OpenAPI\Client\Model.GobackConfig](docs/ModelGobackConfig.md)
 - [OpenAPI\Client\Model.GreetingSettingsRequestsDto](docs/ModelGreetingSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.GroupArrayWrapper](docs/ModelGroupArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupDto](docs/ModelGroupDto.md)
 - [OpenAPI\Client\Model.GroupMemberSecurityRequestArrayWrapper](docs/ModelGroupMemberSecurityRequestArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupMemberSecurityRequestDto](docs/ModelGroupMemberSecurityRequestDto.md)
 - [OpenAPI\Client\Model.GroupRequestDto](docs/ModelGroupRequestDto.md)
 - [OpenAPI\Client\Model.GroupSummaryArrayWrapper](docs/ModelGroupSummaryArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupSummaryDto](docs/ModelGroupSummaryDto.md)
 - [OpenAPI\Client\Model.GroupWrapper](docs/ModelGroupWrapper.md)
 - [OpenAPI\Client\Model.HideConfirmConvertRequestDto](docs/ModelHideConfirmConvertRequestDto.md)
 - [OpenAPI\Client\Model.HistoryAction](docs/ModelHistoryAction.md)
 - [OpenAPI\Client\Model.HistoryArrayWrapper](docs/ModelHistoryArrayWrapper.md)
 - [OpenAPI\Client\Model.HistoryData](docs/ModelHistoryData.md)
 - [OpenAPI\Client\Model.HistoryDto](docs/ModelHistoryDto.md)
 - [OpenAPI\Client\Model.ICompressWrapper](docs/ModelICompressWrapper.md)
 - [OpenAPI\Client\Model.IMagickGeometry](docs/ModelIMagickGeometry.md)
 - [OpenAPI\Client\Model.IPRestriction](docs/ModelIPRestriction.md)
 - [OpenAPI\Client\Model.IPRestrictionArrayWrapper](docs/ModelIPRestrictionArrayWrapper.md)
 - [OpenAPI\Client\Model.IPRestrictionsSettings](docs/ModelIPRestrictionsSettings.md)
 - [OpenAPI\Client\Model.IPRestrictionsSettingsWrapper](docs/ModelIPRestrictionsSettingsWrapper.md)
 - [OpenAPI\Client\Model.ImportableApiEntity](docs/ModelImportableApiEntity.md)
 - [OpenAPI\Client\Model.InfoConfigDto](docs/ModelInfoConfigDto.md)
 - [OpenAPI\Client\Model.Int32Wrapper](docs/ModelInt32Wrapper.md)
 - [OpenAPI\Client\Model.Int64Wrapper](docs/ModelInt64Wrapper.md)
 - [OpenAPI\Client\Model.InviteUsersRequestDto](docs/ModelInviteUsersRequestDto.md)
 - [OpenAPI\Client\Model.IpRestrictionBase](docs/ModelIpRestrictionBase.md)
 - [OpenAPI\Client\Model.IpRestrictionsDto](docs/ModelIpRestrictionsDto.md)
 - [OpenAPI\Client\Model.IpRestrictionsWrapper](docs/ModelIpRestrictionsWrapper.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosArrayWrapper](docs/ModelIsDefaultWhiteLabelLogosArrayWrapper.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosDto](docs/ModelIsDefaultWhiteLabelLogosDto.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosWrapper](docs/ModelIsDefaultWhiteLabelLogosWrapper.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairObjectObject](docs/ModelItemKeyValuePairObjectObject.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringBoolean](docs/ModelItemKeyValuePairStringBoolean.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringLogoRequestsDto](docs/ModelItemKeyValuePairStringLogoRequestsDto.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringString](docs/ModelItemKeyValuePairStringString.md)
 - [OpenAPI\Client\Model.KeyValuePairBooleanString](docs/ModelKeyValuePairBooleanString.md)
 - [OpenAPI\Client\Model.KeyValuePairBooleanStringWrapper](docs/ModelKeyValuePairBooleanStringWrapper.md)
 - [OpenAPI\Client\Model.KeyValuePairStringStringValues](docs/ModelKeyValuePairStringStringValues.md)
 - [OpenAPI\Client\Model.LinkAccountRequestDto](docs/ModelLinkAccountRequestDto.md)
 - [OpenAPI\Client\Model.LinkType](docs/ModelLinkType.md)
 - [OpenAPI\Client\Model.Location](docs/ModelLocation.md)
 - [OpenAPI\Client\Model.LocationType](docs/ModelLocationType.md)
 - [OpenAPI\Client\Model.LockFileParameters](docs/ModelLockFileParameters.md)
 - [OpenAPI\Client\Model.LoginEventArrayWrapper](docs/ModelLoginEventArrayWrapper.md)
 - [OpenAPI\Client\Model.LoginEventDto](docs/ModelLoginEventDto.md)
 - [OpenAPI\Client\Model.LoginProvider](docs/ModelLoginProvider.md)
 - [OpenAPI\Client\Model.LoginSettingsDto](docs/ModelLoginSettingsDto.md)
 - [OpenAPI\Client\Model.LoginSettingsRequestDto](docs/ModelLoginSettingsRequestDto.md)
 - [OpenAPI\Client\Model.LoginSettingsWrapper](docs/ModelLoginSettingsWrapper.md)
 - [OpenAPI\Client\Model.Logo](docs/ModelLogo.md)
 - [OpenAPI\Client\Model.LogoConfigDto](docs/ModelLogoConfigDto.md)
 - [OpenAPI\Client\Model.LogoCover](docs/ModelLogoCover.md)
 - [OpenAPI\Client\Model.LogoRequest](docs/ModelLogoRequest.md)
 - [OpenAPI\Client\Model.LogoRequestsDto](docs/ModelLogoRequestsDto.md)
 - [OpenAPI\Client\Model.MailDomainSettingsRequestsDto](docs/ModelMailDomainSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.ManageFormFillingDtoInteger](docs/ModelManageFormFillingDtoInteger.md)
 - [OpenAPI\Client\Model.MemberBaseRequestDto](docs/ModelMemberBaseRequestDto.md)
 - [OpenAPI\Client\Model.MemberRequestDto](docs/ModelMemberRequestDto.md)
 - [OpenAPI\Client\Model.MembersRequest](docs/ModelMembersRequest.md)
 - [OpenAPI\Client\Model.MentionMessageWrapper](docs/ModelMentionMessageWrapper.md)
 - [OpenAPI\Client\Model.MentionWrapper](docs/ModelMentionWrapper.md)
 - [OpenAPI\Client\Model.MentionWrapperArrayWrapper](docs/ModelMentionWrapperArrayWrapper.md)
 - [OpenAPI\Client\Model.MessageAction](docs/ModelMessageAction.md)
 - [OpenAPI\Client\Model.MigratingApiFiles](docs/ModelMigratingApiFiles.md)
 - [OpenAPI\Client\Model.MigratingApiGroup](docs/ModelMigratingApiGroup.md)
 - [OpenAPI\Client\Model.MigratingApiUser](docs/ModelMigratingApiUser.md)
 - [OpenAPI\Client\Model.MigrationApiInfo](docs/ModelMigrationApiInfo.md)
 - [OpenAPI\Client\Model.MigrationStatusDto](docs/ModelMigrationStatusDto.md)
 - [OpenAPI\Client\Model.MigrationStatusWrapper](docs/ModelMigrationStatusWrapper.md)
 - [OpenAPI\Client\Model.MobilePhoneActivationStatus](docs/ModelMobilePhoneActivationStatus.md)
 - [OpenAPI\Client\Model.MobileRequestsDto](docs/ModelMobileRequestsDto.md)
 - [OpenAPI\Client\Model.Module](docs/ModelModule.md)
 - [OpenAPI\Client\Model.ModuleWrapper](docs/ModelModuleWrapper.md)
 - [OpenAPI\Client\Model.NewItemsDtoFileEntryBaseDto](docs/ModelNewItemsDtoFileEntryBaseDto.md)
 - [OpenAPI\Client\Model.NewItemsDtoRoomNewItemsDto](docs/ModelNewItemsDtoRoomNewItemsDto.md)
 - [OpenAPI\Client\Model.NewItemsFileEntryBaseArrayWrapper](docs/ModelNewItemsFileEntryBaseArrayWrapper.md)
 - [OpenAPI\Client\Model.NewItemsRoomNewItemsArrayWrapper](docs/ModelNewItemsRoomNewItemsArrayWrapper.md)
 - [OpenAPI\Client\Model.NoContentResult](docs/ModelNoContentResult.md)
 - [OpenAPI\Client\Model.NoContentResultWrapper](docs/ModelNoContentResultWrapper.md)
 - [OpenAPI\Client\Model.NotificationChannelDto](docs/ModelNotificationChannelDto.md)
 - [OpenAPI\Client\Model.NotificationChannelStatusDto](docs/ModelNotificationChannelStatusDto.md)
 - [OpenAPI\Client\Model.NotificationChannelStatusWrapper](docs/ModelNotificationChannelStatusWrapper.md)
 - [OpenAPI\Client\Model.NotificationSettingsDto](docs/ModelNotificationSettingsDto.md)
 - [OpenAPI\Client\Model.NotificationSettingsRequestsDto](docs/ModelNotificationSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.NotificationSettingsWrapper](docs/ModelNotificationSettingsWrapper.md)
 - [OpenAPI\Client\Model.NotificationType](docs/ModelNotificationType.md)
 - [OpenAPI\Client\Model.OAuth20Token](docs/ModelOAuth20Token.md)
 - [OpenAPI\Client\Model.ObjectArrayWrapper](docs/ModelObjectArrayWrapper.md)
 - [OpenAPI\Client\Model.ObjectWrapper](docs/ModelObjectWrapper.md)
 - [OpenAPI\Client\Model.OperationDto](docs/ModelOperationDto.md)
 - [OpenAPI\Client\Model.Options](docs/ModelOptions.md)
 - [OpenAPI\Client\Model.OrderBy](docs/ModelOrderBy.md)
 - [OpenAPI\Client\Model.OrderRequestDto](docs/ModelOrderRequestDto.md)
 - [OpenAPI\Client\Model.OrdersItemRequestDtoInteger](docs/ModelOrdersItemRequestDtoInteger.md)
 - [OpenAPI\Client\Model.OrdersRequestDtoInteger](docs/ModelOrdersRequestDtoInteger.md)
 - [OpenAPI\Client\Model.OwnerChangeInstructionsDto](docs/ModelOwnerChangeInstructionsDto.md)
 - [OpenAPI\Client\Model.OwnerChangeInstructionsWrapper](docs/ModelOwnerChangeInstructionsWrapper.md)
 - [OpenAPI\Client\Model.OwnerIdSettingsRequestDto](docs/ModelOwnerIdSettingsRequestDto.md)
 - [OpenAPI\Client\Model.PageableModificationResponse](docs/ModelPageableModificationResponse.md)
 - [OpenAPI\Client\Model.PageableResponse](docs/ModelPageableResponse.md)
 - [OpenAPI\Client\Model.PageableResponseClientInfoResponse](docs/ModelPageableResponseClientInfoResponse.md)
 - [OpenAPI\Client\Model.Paragraph](docs/ModelParagraph.md)
 - [OpenAPI\Client\Model.PasswordHasher](docs/ModelPasswordHasher.md)
 - [OpenAPI\Client\Model.PasswordSettingsDto](docs/ModelPasswordSettingsDto.md)
 - [OpenAPI\Client\Model.PasswordSettingsRequestsDto](docs/ModelPasswordSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.PasswordSettingsWrapper](docs/ModelPasswordSettingsWrapper.md)
 - [OpenAPI\Client\Model.PaymentCalculation](docs/ModelPaymentCalculation.md)
 - [OpenAPI\Client\Model.PaymentCalculationWrapper](docs/ModelPaymentCalculationWrapper.md)
 - [OpenAPI\Client\Model.PaymentMethodStatus](docs/ModelPaymentMethodStatus.md)
 - [OpenAPI\Client\Model.PaymentSettingsDto](docs/ModelPaymentSettingsDto.md)
 - [OpenAPI\Client\Model.PaymentSettingsWrapper](docs/ModelPaymentSettingsWrapper.md)
 - [OpenAPI\Client\Model.PaymentUrlRequestsDto](docs/ModelPaymentUrlRequestsDto.md)
 - [OpenAPI\Client\Model.Payments](docs/ModelPayments.md)
 - [OpenAPI\Client\Model.PermissionsConfig](docs/ModelPermissionsConfig.md)
 - [OpenAPI\Client\Model.PluginsConfig](docs/ModelPluginsConfig.md)
 - [OpenAPI\Client\Model.PluginsDto](docs/ModelPluginsDto.md)
 - [OpenAPI\Client\Model.PriceDto](docs/ModelPriceDto.md)
 - [OpenAPI\Client\Model.ProductAdministratorDto](docs/ModelProductAdministratorDto.md)
 - [OpenAPI\Client\Model.ProductAdministratorWrapper](docs/ModelProductAdministratorWrapper.md)
 - [OpenAPI\Client\Model.ProductQuantityType](docs/ModelProductQuantityType.md)
 - [OpenAPI\Client\Model.ProductType](docs/ModelProductType.md)
 - [OpenAPI\Client\Model.ProviderArrayWrapper](docs/ModelProviderArrayWrapper.md)
 - [OpenAPI\Client\Model.ProviderDto](docs/ModelProviderDto.md)
 - [OpenAPI\Client\Model.ProviderFilter](docs/ModelProviderFilter.md)
 - [OpenAPI\Client\Model.QuantityRequestDto](docs/ModelQuantityRequestDto.md)
 - [OpenAPI\Client\Model.Quota](docs/ModelQuota.md)
 - [OpenAPI\Client\Model.QuotaArrayWrapper](docs/ModelQuotaArrayWrapper.md)
 - [OpenAPI\Client\Model.QuotaDto](docs/ModelQuotaDto.md)
 - [OpenAPI\Client\Model.QuotaFilter](docs/ModelQuotaFilter.md)
 - [OpenAPI\Client\Model.QuotaSettingsRequestsDto](docs/ModelQuotaSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.QuotaSettingsRequestsDtoDefaultQuota](docs/ModelQuotaSettingsRequestsDtoDefaultQuota.md)
 - [OpenAPI\Client\Model.QuotaState](docs/ModelQuotaState.md)
 - [OpenAPI\Client\Model.QuotaWrapper](docs/ModelQuotaWrapper.md)
 - [OpenAPI\Client\Model.RecaptchaType](docs/ModelRecaptchaType.md)
 - [OpenAPI\Client\Model.RecentConfig](docs/ModelRecentConfig.md)
 - [OpenAPI\Client\Model.RegStatus](docs/ModelRegStatus.md)
 - [OpenAPI\Client\Model.ReportDto](docs/ModelReportDto.md)
 - [OpenAPI\Client\Model.ReportWrapper](docs/ModelReportWrapper.md)
 - [OpenAPI\Client\Model.ReviewConfig](docs/ModelReviewConfig.md)
 - [OpenAPI\Client\Model.RoomDataLifetimeDto](docs/ModelRoomDataLifetimeDto.md)
 - [OpenAPI\Client\Model.RoomDataLifetimePeriod](docs/ModelRoomDataLifetimePeriod.md)
 - [OpenAPI\Client\Model.RoomFromTemplateStatusDto](docs/ModelRoomFromTemplateStatusDto.md)
 - [OpenAPI\Client\Model.RoomFromTemplateStatusWrapper](docs/ModelRoomFromTemplateStatusWrapper.md)
 - [OpenAPI\Client\Model.RoomInvitation](docs/ModelRoomInvitation.md)
 - [OpenAPI\Client\Model.RoomInvitationRequest](docs/ModelRoomInvitationRequest.md)
 - [OpenAPI\Client\Model.RoomLinkRequest](docs/ModelRoomLinkRequest.md)
 - [OpenAPI\Client\Model.RoomNewItemsDto](docs/ModelRoomNewItemsDto.md)
 - [OpenAPI\Client\Model.RoomSecurityDto](docs/ModelRoomSecurityDto.md)
 - [OpenAPI\Client\Model.RoomSecurityError](docs/ModelRoomSecurityError.md)
 - [OpenAPI\Client\Model.RoomSecurityWrapper](docs/ModelRoomSecurityWrapper.md)
 - [OpenAPI\Client\Model.RoomTemplateDto](docs/ModelRoomTemplateDto.md)
 - [OpenAPI\Client\Model.RoomTemplateStatusDto](docs/ModelRoomTemplateStatusDto.md)
 - [OpenAPI\Client\Model.RoomTemplateStatusWrapper](docs/ModelRoomTemplateStatusWrapper.md)
 - [OpenAPI\Client\Model.RoomType](docs/ModelRoomType.md)
 - [OpenAPI\Client\Model.RoomsNotificationSettingsDto](docs/ModelRoomsNotificationSettingsDto.md)
 - [OpenAPI\Client\Model.RoomsNotificationSettingsWrapper](docs/ModelRoomsNotificationSettingsWrapper.md)
 - [OpenAPI\Client\Model.RoomsNotificationsSettingsRequestDto](docs/ModelRoomsNotificationsSettingsRequestDto.md)
 - [OpenAPI\Client\Model.Run](docs/ModelRun.md)
 - [OpenAPI\Client\Model.STRINGArrayWrapper](docs/ModelSTRINGArrayWrapper.md)
 - [OpenAPI\Client\Model.SalesRequestsDto](docs/ModelSalesRequestsDto.md)
 - [OpenAPI\Client\Model.SaveAsPdfInteger](docs/ModelSaveAsPdfInteger.md)
 - [OpenAPI\Client\Model.SaveFormRoleMappingDtoInteger](docs/ModelSaveFormRoleMappingDtoInteger.md)
 - [OpenAPI\Client\Model.ScheduleDto](docs/ModelScheduleDto.md)
 - [OpenAPI\Client\Model.ScheduleWrapper](docs/ModelScheduleWrapper.md)
 - [OpenAPI\Client\Model.ScopeResponse](docs/ModelScopeResponse.md)
 - [OpenAPI\Client\Model.SearchArea](docs/ModelSearchArea.md)
 - [OpenAPI\Client\Model.SecurityArrayWrapper](docs/ModelSecurityArrayWrapper.md)
 - [OpenAPI\Client\Model.SecurityDto](docs/ModelSecurityDto.md)
 - [OpenAPI\Client\Model.SecurityInfoRequestDto](docs/ModelSecurityInfoRequestDto.md)
 - [OpenAPI\Client\Model.SecurityInfoSimpleRequestDto](docs/ModelSecurityInfoSimpleRequestDto.md)
 - [OpenAPI\Client\Model.SecurityRequestsDto](docs/ModelSecurityRequestsDto.md)
 - [OpenAPI\Client\Model.SessionRequest](docs/ModelSessionRequest.md)
 - [OpenAPI\Client\Model.SetManagerRequest](docs/ModelSetManagerRequest.md)
 - [OpenAPI\Client\Model.SetPublicDto](docs/ModelSetPublicDto.md)
 - [OpenAPI\Client\Model.SettingsDto](docs/ModelSettingsDto.md)
 - [OpenAPI\Client\Model.SettingsRequestDto](docs/ModelSettingsRequestDto.md)
 - [OpenAPI\Client\Model.SettingsWrapper](docs/ModelSettingsWrapper.md)
 - [OpenAPI\Client\Model.SetupCode](docs/ModelSetupCode.md)
 - [OpenAPI\Client\Model.SetupCodeWrapper](docs/ModelSetupCodeWrapper.md)
 - [OpenAPI\Client\Model.SexEnum](docs/ModelSexEnum.md)
 - [OpenAPI\Client\Model.ShareFilterType](docs/ModelShareFilterType.md)
 - [OpenAPI\Client\Model.SignupAccountRequestDto](docs/ModelSignupAccountRequestDto.md)
 - [OpenAPI\Client\Model.Size](docs/ModelSize.md)
 - [OpenAPI\Client\Model.SmtpOperationStatusRequestsDto](docs/ModelSmtpOperationStatusRequestsDto.md)
 - [OpenAPI\Client\Model.SmtpOperationStatusRequestsWrapper](docs/ModelSmtpOperationStatusRequestsWrapper.md)
 - [OpenAPI\Client\Model.SmtpSettingsDto](docs/ModelSmtpSettingsDto.md)
 - [OpenAPI\Client\Model.SmtpSettingsWrapper](docs/ModelSmtpSettingsWrapper.md)
 - [OpenAPI\Client\Model.SortOrder](docs/ModelSortOrder.md)
 - [OpenAPI\Client\Model.SortedByType](docs/ModelSortedByType.md)
 - [OpenAPI\Client\Model.SsoCertificate](docs/ModelSsoCertificate.md)
 - [OpenAPI\Client\Model.SsoFieldMapping](docs/ModelSsoFieldMapping.md)
 - [OpenAPI\Client\Model.SsoIdpCertificateAdvanced](docs/ModelSsoIdpCertificateAdvanced.md)
 - [OpenAPI\Client\Model.SsoIdpSettings](docs/ModelSsoIdpSettings.md)
 - [OpenAPI\Client\Model.SsoSettingsRequestsDto](docs/ModelSsoSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.SsoSettingsV2](docs/ModelSsoSettingsV2.md)
 - [OpenAPI\Client\Model.SsoSettingsV2Wrapper](docs/ModelSsoSettingsV2Wrapper.md)
 - [OpenAPI\Client\Model.SsoSpCertificateAdvanced](docs/ModelSsoSpCertificateAdvanced.md)
 - [OpenAPI\Client\Model.StartEdit](docs/ModelStartEdit.md)
 - [OpenAPI\Client\Model.StartFillingForm](docs/ModelStartFillingForm.md)
 - [OpenAPI\Client\Model.StartFillingMode](docs/ModelStartFillingMode.md)
 - [OpenAPI\Client\Model.StartReassignRequestDto](docs/ModelStartReassignRequestDto.md)
 - [OpenAPI\Client\Model.StartUpdateUserTypeDto](docs/ModelStartUpdateUserTypeDto.md)
 - [OpenAPI\Client\Model.Status](docs/ModelStatus.md)
 - [OpenAPI\Client\Model.StatusCodeResult](docs/ModelStatusCodeResult.md)
 - [OpenAPI\Client\Model.StorageArrayWrapper](docs/ModelStorageArrayWrapper.md)
 - [OpenAPI\Client\Model.StorageDto](docs/ModelStorageDto.md)
 - [OpenAPI\Client\Model.StorageEncryptionRequestsDto](docs/ModelStorageEncryptionRequestsDto.md)
 - [OpenAPI\Client\Model.StorageFilter](docs/ModelStorageFilter.md)
 - [OpenAPI\Client\Model.StorageRequestsDto](docs/ModelStorageRequestsDto.md)
 - [OpenAPI\Client\Model.StorageSettings](docs/ModelStorageSettings.md)
 - [OpenAPI\Client\Model.StorageSettingsWrapper](docs/ModelStorageSettingsWrapper.md)
 - [OpenAPI\Client\Model.StringWrapper](docs/ModelStringWrapper.md)
 - [OpenAPI\Client\Model.SubAccount](docs/ModelSubAccount.md)
 - [OpenAPI\Client\Model.SubjectFilter](docs/ModelSubjectFilter.md)
 - [OpenAPI\Client\Model.SubjectType](docs/ModelSubjectType.md)
 - [OpenAPI\Client\Model.SubmitForm](docs/ModelSubmitForm.md)
 - [OpenAPI\Client\Model.Tariff](docs/ModelTariff.md)
 - [OpenAPI\Client\Model.TariffState](docs/ModelTariffState.md)
 - [OpenAPI\Client\Model.TariffWrapper](docs/ModelTariffWrapper.md)
 - [OpenAPI\Client\Model.TaskProgressResponseDto](docs/ModelTaskProgressResponseDto.md)
 - [OpenAPI\Client\Model.TaskProgressResponseWrapper](docs/ModelTaskProgressResponseWrapper.md)
 - [OpenAPI\Client\Model.TelegramStatusDto](docs/ModelTelegramStatusDto.md)
 - [OpenAPI\Client\Model.TelegramStatusWrapper](docs/ModelTelegramStatusWrapper.md)
 - [OpenAPI\Client\Model.TemplatesConfig](docs/ModelTemplatesConfig.md)
 - [OpenAPI\Client\Model.TemplatesRequestDto](docs/ModelTemplatesRequestDto.md)
 - [OpenAPI\Client\Model.TenantAiAgentQuotaSettings](docs/ModelTenantAiAgentQuotaSettings.md)
 - [OpenAPI\Client\Model.TenantAiAgentQuotaSettingsWrapper](docs/ModelTenantAiAgentQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantAuditSettings](docs/ModelTenantAuditSettings.md)
 - [OpenAPI\Client\Model.TenantAuditSettingsWrapper](docs/ModelTenantAuditSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantBannerSettings](docs/ModelTenantBannerSettings.md)
 - [OpenAPI\Client\Model.TenantBannerSettingsDto](docs/ModelTenantBannerSettingsDto.md)
 - [OpenAPI\Client\Model.TenantBannerSettingsWrapper](docs/ModelTenantBannerSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDeepLinkSettings](docs/ModelTenantDeepLinkSettings.md)
 - [OpenAPI\Client\Model.TenantDeepLinkSettingsWrapper](docs/ModelTenantDeepLinkSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettings](docs/ModelTenantDevToolsAccessSettings.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettingsDto](docs/ModelTenantDevToolsAccessSettingsDto.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettingsWrapper](docs/ModelTenantDevToolsAccessSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDomainValidator](docs/ModelTenantDomainValidator.md)
 - [OpenAPI\Client\Model.TenantDto](docs/ModelTenantDto.md)
 - [OpenAPI\Client\Model.TenantEntityQuotaSettings](docs/ModelTenantEntityQuotaSettings.md)
 - [OpenAPI\Client\Model.TenantIndustry](docs/ModelTenantIndustry.md)
 - [OpenAPI\Client\Model.TenantQuota](docs/ModelTenantQuota.md)
 - [OpenAPI\Client\Model.TenantQuotaFeatureDto](docs/ModelTenantQuotaFeatureDto.md)
 - [OpenAPI\Client\Model.TenantQuotaSettings](docs/ModelTenantQuotaSettings.md)
 - [OpenAPI\Client\Model.TenantQuotaSettingsRequestsDto](docs/ModelTenantQuotaSettingsRequestsDto.md)
 - [OpenAPI\Client\Model.TenantQuotaSettingsWrapper](docs/ModelTenantQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantQuotaWrapper](docs/ModelTenantQuotaWrapper.md)
 - [OpenAPI\Client\Model.TenantRoomQuotaSettings](docs/ModelTenantRoomQuotaSettings.md)
 - [OpenAPI\Client\Model.TenantRoomQuotaSettingsWrapper](docs/ModelTenantRoomQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantStatus](docs/ModelTenantStatus.md)
 - [OpenAPI\Client\Model.TenantTrustedDomainsType](docs/ModelTenantTrustedDomainsType.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsDto](docs/ModelTenantUserInvitationSettingsDto.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsRequestDto](docs/ModelTenantUserInvitationSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsWrapper](docs/ModelTenantUserInvitationSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantUserQuotaSettings](docs/ModelTenantUserQuotaSettings.md)
 - [OpenAPI\Client\Model.TenantUserQuotaSettingsWrapper](docs/ModelTenantUserQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWalletService](docs/ModelTenantWalletService.md)
 - [OpenAPI\Client\Model.TenantWalletServiceSettings](docs/ModelTenantWalletServiceSettings.md)
 - [OpenAPI\Client\Model.TenantWalletServiceSettingsWrapper](docs/ModelTenantWalletServiceSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWalletSettings](docs/ModelTenantWalletSettings.md)
 - [OpenAPI\Client\Model.TenantWalletSettingsWrapper](docs/ModelTenantWalletSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWrapper](docs/ModelTenantWrapper.md)
 - [OpenAPI\Client\Model.TerminateRequestDto](docs/ModelTerminateRequestDto.md)
 - [OpenAPI\Client\Model.TfaRequestsDto](docs/ModelTfaRequestsDto.md)
 - [OpenAPI\Client\Model.TfaRequestsDtoType](docs/ModelTfaRequestsDtoType.md)
 - [OpenAPI\Client\Model.TfaSettingsArrayWrapper](docs/ModelTfaSettingsArrayWrapper.md)
 - [OpenAPI\Client\Model.TfaSettingsDto](docs/ModelTfaSettingsDto.md)
 - [OpenAPI\Client\Model.TfaValidateRequestsDto](docs/ModelTfaValidateRequestsDto.md)
 - [OpenAPI\Client\Model.ThirdPartyBackupRequestDto](docs/ModelThirdPartyBackupRequestDto.md)
 - [OpenAPI\Client\Model.ThirdPartyParams](docs/ModelThirdPartyParams.md)
 - [OpenAPI\Client\Model.ThirdPartyParamsArrayWrapper](docs/ModelThirdPartyParamsArrayWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyRequestDto](docs/ModelThirdPartyRequestDto.md)
 - [OpenAPI\Client\Model.Thumbnail](docs/ModelThumbnail.md)
 - [OpenAPI\Client\Model.ThumbnailsDataDto](docs/ModelThumbnailsDataDto.md)
 - [OpenAPI\Client\Model.ThumbnailsDataWrapper](docs/ModelThumbnailsDataWrapper.md)
 - [OpenAPI\Client\Model.ThumbnailsRequest](docs/ModelThumbnailsRequest.md)
 - [OpenAPI\Client\Model.TimezonesRequestsArrayWrapper](docs/ModelTimezonesRequestsArrayWrapper.md)
 - [OpenAPI\Client\Model.TimezonesRequestsDto](docs/ModelTimezonesRequestsDto.md)
 - [OpenAPI\Client\Model.TopUpDepositRequestDto](docs/ModelTopUpDepositRequestDto.md)
 - [OpenAPI\Client\Model.TurnOnAdminMessageSettingsRequestDto](docs/ModelTurnOnAdminMessageSettingsRequestDto.md)
 - [OpenAPI\Client\Model.UnknownWrapper](docs/ModelUnknownWrapper.md)
 - [OpenAPI\Client\Model.UpdateApiKeyRequest](docs/ModelUpdateApiKeyRequest.md)
 - [OpenAPI\Client\Model.UpdateClientRequest](docs/ModelUpdateClientRequest.md)
 - [OpenAPI\Client\Model.UpdateComment](docs/ModelUpdateComment.md)
 - [OpenAPI\Client\Model.UpdateFile](docs/ModelUpdateFile.md)
 - [OpenAPI\Client\Model.UpdateGroupRequest](docs/ModelUpdateGroupRequest.md)
 - [OpenAPI\Client\Model.UpdateMemberRequestDto](docs/ModelUpdateMemberRequestDto.md)
 - [OpenAPI\Client\Model.UpdateMembersQuotaRequestDto](docs/ModelUpdateMembersQuotaRequestDto.md)
 - [OpenAPI\Client\Model.UpdateMembersQuotaRequestDtoQuota](docs/ModelUpdateMembersQuotaRequestDtoQuota.md)
 - [OpenAPI\Client\Model.UpdateMembersRequestDto](docs/ModelUpdateMembersRequestDto.md)
 - [OpenAPI\Client\Model.UpdatePhotoMemberRequest](docs/ModelUpdatePhotoMemberRequest.md)
 - [OpenAPI\Client\Model.UpdateRoomRequest](docs/ModelUpdateRoomRequest.md)
 - [OpenAPI\Client\Model.UpdateRoomsQuotaRequestDtoInteger](docs/ModelUpdateRoomsQuotaRequestDtoInteger.md)
 - [OpenAPI\Client\Model.UpdateRoomsRoomIdsRequestDtoInteger](docs/ModelUpdateRoomsRoomIdsRequestDtoInteger.md)
 - [OpenAPI\Client\Model.UpdateWebhooksConfigRequestsDto](docs/ModelUpdateWebhooksConfigRequestsDto.md)
 - [OpenAPI\Client\Model.UploadRequestDto](docs/ModelUploadRequestDto.md)
 - [OpenAPI\Client\Model.UploadResultDto](docs/ModelUploadResultDto.md)
 - [OpenAPI\Client\Model.UploadResultWrapper](docs/ModelUploadResultWrapper.md)
 - [OpenAPI\Client\Model.UsageSpaceStatItemArrayWrapper](docs/ModelUsageSpaceStatItemArrayWrapper.md)
 - [OpenAPI\Client\Model.UsageSpaceStatItemDto](docs/ModelUsageSpaceStatItemDto.md)
 - [OpenAPI\Client\Model.UserConfig](docs/ModelUserConfig.md)
 - [OpenAPI\Client\Model.UserInfo](docs/ModelUserInfo.md)
 - [OpenAPI\Client\Model.UserInfoWrapper](docs/ModelUserInfoWrapper.md)
 - [OpenAPI\Client\Model.UserInvitation](docs/ModelUserInvitation.md)
 - [OpenAPI\Client\Model.UserInvitationRequestDto](docs/ModelUserInvitationRequestDto.md)
 - [OpenAPI\Client\Model.ValidationResult](docs/ModelValidationResult.md)
 - [OpenAPI\Client\Model.VectorizationStatus](docs/ModelVectorizationStatus.md)
 - [OpenAPI\Client\Model.WalletQuantityRequestDto](docs/ModelWalletQuantityRequestDto.md)
 - [OpenAPI\Client\Model.WatermarkAdditions](docs/ModelWatermarkAdditions.md)
 - [OpenAPI\Client\Model.WatermarkDto](docs/ModelWatermarkDto.md)
 - [OpenAPI\Client\Model.WatermarkOnDraw](docs/ModelWatermarkOnDraw.md)
 - [OpenAPI\Client\Model.WatermarkRequestDto](docs/ModelWatermarkRequestDto.md)
 - [OpenAPI\Client\Model.WebItemSecurityRequestsDto](docs/ModelWebItemSecurityRequestsDto.md)
 - [OpenAPI\Client\Model.WebItemsSecurityRequestsDto](docs/ModelWebItemsSecurityRequestsDto.md)
 - [OpenAPI\Client\Model.WebPluginArrayWrapper](docs/ModelWebPluginArrayWrapper.md)
 - [OpenAPI\Client\Model.WebPluginDto](docs/ModelWebPluginDto.md)
 - [OpenAPI\Client\Model.WebPluginRequests](docs/ModelWebPluginRequests.md)
 - [OpenAPI\Client\Model.WebPluginWrapper](docs/ModelWebPluginWrapper.md)
 - [OpenAPI\Client\Model.WebhookGroupStatus](docs/ModelWebhookGroupStatus.md)
 - [OpenAPI\Client\Model.WebhookRetryRequestsDto](docs/ModelWebhookRetryRequestsDto.md)
 - [OpenAPI\Client\Model.WebhookTrigger](docs/ModelWebhookTrigger.md)
 - [OpenAPI\Client\Model.WebhooksConfigDto](docs/ModelWebhooksConfigDto.md)
 - [OpenAPI\Client\Model.WebhooksConfigWithStatusArrayWrapper](docs/ModelWebhooksConfigWithStatusArrayWrapper.md)
 - [OpenAPI\Client\Model.WebhooksConfigWithStatusDto](docs/ModelWebhooksConfigWithStatusDto.md)
 - [OpenAPI\Client\Model.WebhooksConfigWrapper](docs/ModelWebhooksConfigWrapper.md)
 - [OpenAPI\Client\Model.WebhooksLogArrayWrapper](docs/ModelWebhooksLogArrayWrapper.md)
 - [OpenAPI\Client\Model.WebhooksLogDto](docs/ModelWebhooksLogDto.md)
 - [OpenAPI\Client\Model.WebhooksLogWrapper](docs/ModelWebhooksLogWrapper.md)
 - [OpenAPI\Client\Model.WhiteLabelItemArrayWrapper](docs/ModelWhiteLabelItemArrayWrapper.md)
 - [OpenAPI\Client\Model.WhiteLabelItemDto](docs/ModelWhiteLabelItemDto.md)
 - [OpenAPI\Client\Model.WhiteLabelItemPathDto](docs/ModelWhiteLabelItemPathDto.md)
 - [OpenAPI\Client\Model.WhiteLabelLogoType](docs/ModelWhiteLabelLogoType.md)
 - [OpenAPI\Client\Model.WhiteLabelRequestsDto](docs/ModelWhiteLabelRequestsDto.md)
 - [OpenAPI\Client\Model.WizardRequestsDto](docs/ModelWizardRequestsDto.md)
 - [OpenAPI\Client\Model.WizardSettings](docs/ModelWizardSettings.md)
 - [OpenAPI\Client\Model.WizardSettingsWrapper](docs/ModelWizardSettingsWrapper.md)

</details>

## Author

support@onlyoffice.com

