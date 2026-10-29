# onlyoffice/docspace-api-sdk

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
    "onlyoffice/docspace-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/onlyoffice/docspace-api-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('asc_auth_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('asc_auth_key', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\AIAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_approve_tool_call_request = new \OpenAPI\Client\Model\AiApproveToolCallRequest(); // \OpenAPI\Client\Model\AiApproveToolCallRequest

try {
    $result = $apiInstance->aiApproveToolCall($ai_approve_tool_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAIApi->aiApproveToolCall: ', $e->getMessage(), PHP_EOL;
}

```

## Authorization

Authentication schemes defined for the API:
### cookieAuth

- **Type**: API key
- **API key parameter name**: asc_auth_key
- **Location**: Cookie



### bearerAuth

- **Type**: Bearer authentication


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




## Rate Limiting

All API responses may include the following rate limiting headers:

| Header | Description |
|--------|-------------|
| `X-RateLimit-Limit` | Sliding window rate limit: 1500 requests per minute per user/IP. |
| `X-RateLimit-Remaining` | Number of requests remaining in the current sliding window (1500 req/min). Concurrent limits also apply: 50 parallel GET requests, 15 parallel POST/PUT requests. |
| `X-RateLimit-Reset` | Unix timestamp (seconds) when the current sliding window rate limit resets. |
| `Retry-After` | Seconds to wait before retrying. Up to 60s for the sliding window (1500 req/min), up to 86400s for the daily POST/PUT limit (10000/day). |

## API Endpoints

All URIs are relative to *https://your-docspace.onlyoffice.com*

### API Endoints tables:

<details>
  <summary>AI</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AIApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aiapprovetoolcall"><strong>aiApproveToolCall</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/approve-tool-call</td>
        <td>Approve tool call</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aidenytoolcall"><strong>aiDenyToolCall</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/deny-tool-call</td>
        <td>Deny tool call</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#airegeneratestream"><strong>aiRegenerateStream</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/regenerate-stream</td>
        <td>Regenerate stream</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aisend"><strong>aiSend</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/send</td>
        <td>Run an AI action</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aisendcustom"><strong>aiSendCustom</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/send-custom</td>
        <td>Send custom</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aisendwithstream"><strong>aiSendWithStream</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/send-with-stream</td>
        <td>Send with stream</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAIApi.md#aisendwithstreamopenai"><strong>aiSendWithStreamOpenAI</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/ai/send-with-stream-openai</td>
        <td>Stream a chat in OpenAI format</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AgentsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentscreate"><strong>aiAgentsCreate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/agents</td>
        <td>Create an agent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsdelete"><strong>aiAgentsDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/agents/{id}</td>
        <td>Delete an agent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsget"><strong>aiAgentsGet</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/agents/{id}</td>
        <td>Get an agent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentslist"><strong>aiAgentsList</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/agents</td>
        <td>List agents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsnews"><strong>aiAgentsNews</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/agents/news</td>
        <td>List agent news items</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsresetquota"><strong>aiAgentsResetQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/agents/resetquota</td>
        <td>Reset agents' quota</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsupdate"><strong>aiAgentsUpdate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/agents/{id}</td>
        <td>Update an agent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAgentsApi.md#aiagentsupdatequota"><strong>aiAgentsUpdateQuota</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/agents/agentquota</td>
        <td>Update agents' quota</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AssignmentsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsassign"><strong>aiAssignmentsAssign</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/assignments/assign</td>
        <td>Bind a profile to an action</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsbulkassign"><strong>aiAssignmentsBulkAssign</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/assignments/bulk-assign</td>
        <td>Bulk assign</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentscascadeprofiledelete"><strong>aiAssignmentsCascadeProfileDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/assignments/cascade-profile-delete</td>
        <td>Cascade profile delete</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsgetallassignments"><strong>aiAssignmentsGetAllAssignments</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/assignments/get-all-assignments</td>
        <td>Get all assignments</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsgetassignment"><strong>aiAssignmentsGetAssignment</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/assignments/get-assignment</td>
        <td>Get assignment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsresolveforaction"><strong>aiAssignmentsResolveForAction</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/assignments/resolve-for-action</td>
        <td>Resolve for action</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentstryresolveforaction"><strong>aiAssignmentsTryResolveForAction</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/assignments/try-resolve-for-action</td>
        <td>Try resolve for action</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAssignmentsApi.md#aiassignmentsunassign"><strong>aiAssignmentsUnassign</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/assignments/unassign</td>
        <td>Clear an action's profile</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AttachmentsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentsdelete"><strong>aiAttachmentsDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/attachments/delete</td>
        <td>Delete one attachment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentsdeletemany"><strong>aiAttachmentsDeleteMany</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/attachments/delete-many</td>
        <td>Delete many</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentsget"><strong>aiAttachmentsGet</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/get</td>
        <td>Get one attachment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentsgetmany"><strong>aiAttachmentsGetMany</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/get-many</td>
        <td>Get many</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentsgetsuggestedquestions"><strong>aiAttachmentsGetSuggestedQuestions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/suggested-questions</td>
        <td>Get suggested questions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentslinktomessage"><strong>aiAttachmentsLinkToMessage</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/link-to-message</td>
        <td>Link to message</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentssavefile"><strong>aiAttachmentsSaveFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/save-file</td>
        <td>Save file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIAttachmentsApi.md#aiattachmentssavefilesmany"><strong>aiAttachmentsSaveFilesMany</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/attachments/save-files-many</td>
        <td>Save files many</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ContextApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIContextApi.md#aicontextgetcontextfolders"><strong>aiContextGetContextFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/context/get-context-folders</td>
        <td>Get context folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIContextApi.md#aicontextgetroomskill"><strong>aiContextGetRoomSkill</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/context/get-room-skill</td>
        <td>Get room skill</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIContextApi.md#aicontextgetroomskills"><strong>aiContextGetRoomSkills</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/context/get-room-skills</td>
        <td>Get room skills</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>EditorToolsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIEditorToolsApi.md#aieditortoolscall"><strong>aiEditorToolsCall</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/editor-tools/call</td>
        <td>Call an editor tool</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIEditorToolsApi.md#aieditortoolslist"><strong>aiEditorToolsList</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/editor-tools/list</td>
        <td>List editor tools</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ExportApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIExportApi.md#aiexporttexttodocx"><strong>aiExportTextToDocx</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/text-to-docx</td>
        <td>Start markdown export</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>MetadataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIMetadataApi.md#aimetafill"><strong>aiMetaFill</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/meta/fill</td>
        <td>Fill metadata values</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIMetadataApi.md#aimetagenerate"><strong>aiMetaGenerate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/meta/generate</td>
        <td>Generate metadata fields</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OpenAIPassthroughApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIOpenAIPassthroughApi.md#aiopenaichatcompletions"><strong>aiOpenaiChatCompletions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/openai/{profileId}/v1/chat/completions</td>
        <td>OpenAI chat completions passthrough</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIOpenAIPassthroughApi.md#aiopenaiimagesgenerations"><strong>aiOpenaiImagesGenerations</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/openai/{profileId}/v1/images/generations</td>
        <td>OpenAI image generation passthrough</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PreferencesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencescleardeepmode"><strong>aiPreferencesClearDeepMode</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/preferences/clear-deep-mode</td>
        <td>Clear deep mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencesgetdeepmode"><strong>aiPreferencesGetDeepMode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/preferences/get-deep-mode</td>
        <td>Get deep mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencesgetreasoninglevel"><strong>aiPreferencesGetReasoningLevel</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/preferences/get-reasoning-level</td>
        <td>Get reasoning level</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencesgettoolpermissionmode"><strong>aiPreferencesGetToolPermissionMode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/preferences/get-tool-permission-mode</td>
        <td>Get tool permission mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencesisdeepmodeset"><strong>aiPreferencesIsDeepModeSet</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/preferences/is-deep-mode-set</td>
        <td>Is deep mode set</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencessetdeepmode"><strong>aiPreferencesSetDeepMode</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/preferences/set-deep-mode</td>
        <td>Set deep mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencessetreasoninglevel"><strong>aiPreferencesSetReasoningLevel</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/preferences/set-reasoning-level</td>
        <td>Set reasoning level</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPreferencesApi.md#aipreferencessettoolpermissionmode"><strong>aiPreferencesSetToolPermissionMode</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/preferences/set-tool-permission-mode</td>
        <td>Set tool permission mode</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ProfilesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofilescreate"><strong>aiProfilesCreate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/profiles/create</td>
        <td>Create a provider profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofilesdelete"><strong>aiProfilesDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/profiles/delete</td>
        <td>Delete a provider profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofilesgetbyid"><strong>aiProfilesGetById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/profiles/get-by-id</td>
        <td>Get a provider profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofileslist"><strong>aiProfilesList</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/profiles/list</td>
        <td>List provider profiles</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofileslistmodels"><strong>aiProfilesListModels</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/profiles/list-models</td>
        <td>List models</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofileslistprovidermodels"><strong>aiProfilesListProviderModels</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/profiles/list-provider-models</td>
        <td>List provider models</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofilestestconnection"><strong>aiProfilesTestConnection</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/profiles/test-connection</td>
        <td>Test a profile's provider</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIProfilesApi.md#aiprofilesupdate"><strong>aiProfilesUpdate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/profiles/update</td>
        <td>Update a provider profile</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PromptsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptscreate"><strong>aiPromptsCreate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/prompts/create</td>
        <td>Save a prompt</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptscreatefolder"><strong>aiPromptsCreateFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/prompts/create-folder</td>
        <td>Create folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsdelete"><strong>aiPromptsDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/prompts/delete</td>
        <td>Delete a saved prompt</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsdeletefolder"><strong>aiPromptsDeleteFolder</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/prompts/delete-folder</td>
        <td>Delete folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsexport"><strong>aiPromptsExport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/prompts/export</td>
        <td>Export the prompt library</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsgetbyid"><strong>aiPromptsGetById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/prompts/get-by-id</td>
        <td>Get a saved prompt</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsgetfolderbyid"><strong>aiPromptsGetFolderById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/prompts/get-folder-by-id</td>
        <td>Get a prompt folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsimportbundle"><strong>aiPromptsImportBundle</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/prompts/import-bundle</td>
        <td>Import bundle</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptslist"><strong>aiPromptsList</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/prompts/list</td>
        <td>List saved prompts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptslistfolders"><strong>aiPromptsListFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/prompts/list-folders</td>
        <td>List folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsmove"><strong>aiPromptsMove</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/prompts/move</td>
        <td>Move a prompt to a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsrenamefolder"><strong>aiPromptsRenameFolder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/prompts/rename-folder</td>
        <td>Rename folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIPromptsApi.md#aipromptsupdate"><strong>aiPromptsUpdate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/prompts/update</td>
        <td>Update a saved prompt</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingsget"><strong>aiSettingsGet</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/config</td>
        <td>Get AI settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingsgettoolmode"><strong>aiSettingsGetToolMode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/config/tool-mode</td>
        <td>Get the tool permission mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingsgetuser"><strong>aiSettingsGetUser</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/config/user</td>
        <td>Get user AI settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingsgetvectorization"><strong>aiSettingsGetVectorization</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/config/vectorization</td>
        <td>Get vectorization settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingssettoolmode"><strong>aiSettingsSetToolMode</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/config/tool-mode</td>
        <td>Set the tool permission mode</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingssetuser"><strong>aiSettingsSetUser</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/config/user</td>
        <td>Update user AI settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAISettingsApi.md#aisettingssetvectorization"><strong>aiSettingsSetVectorization</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/config/vectorization</td>
        <td>Update vectorization settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ThreadsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsappendusermessage"><strong>aiThreadsAppendUserMessage</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/threads/append-user-message</td>
        <td>Append user message</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsclearmessages"><strong>aiThreadsClearMessages</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/threads/clear-messages</td>
        <td>Clear messages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadscreate"><strong>aiThreadsCreate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/threads/create</td>
        <td>Create a chat thread</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsdelete"><strong>aiThreadsDelete</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/threads/delete</td>
        <td>Delete a chat thread</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsdeletemessage"><strong>aiThreadsDeleteMessage</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/threads/delete-message</td>
        <td>Delete message</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsgetbyid"><strong>aiThreadsGetById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/threads/get-by-id</td>
        <td>Get a chat thread</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsgetmessagebyid"><strong>aiThreadsGetMessageById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/threads/get-message-by-id</td>
        <td>Get one chat message</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadslist"><strong>aiThreadsList</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/threads/list</td>
        <td>List chat threads</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsopenorcreate"><strong>aiThreadsOpenOrCreate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/threads/open-or-create</td>
        <td>Open or create</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsreadmessages"><strong>aiThreadsReadMessages</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/threads/read-messages</td>
        <td>Read messages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsregeneratetitle"><strong>aiThreadsRegenerateTitle</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/threads/regenerate-title</td>
        <td>Regenerate title</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsrename"><strong>aiThreadsRename</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/threads/rename</td>
        <td>Rename a chat thread</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadstouch"><strong>aiThreadsTouch</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/threads/touch</td>
        <td>Bump a thread's activity</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIThreadsApi.md#aithreadsupdatemessage"><strong>aiThreadsUpdateMessage</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/threads/update-message</td>
        <td>Update message</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ToolsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsaddcustomserver"><strong>aiToolsAddCustomServer</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/tools/add-custom-server</td>
        <td>Add custom server</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsgetallowalways"><strong>aiToolsGetAllowAlways</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/get-allow-always</td>
        <td>Get allow always</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsgetcustomserver"><strong>aiToolsGetCustomServer</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/get-custom-server</td>
        <td>Get custom server</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsgetdisabled"><strong>aiToolsGetDisabled</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/get-disabled</td>
        <td>Get disabled</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsisallowalways"><strong>aiToolsIsAllowAlways</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/is-allow-always</td>
        <td>Is allow always</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsistooldisabled"><strong>aiToolsIsToolDisabled</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/is-tool-disabled</td>
        <td>Is tool disabled</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolslistcustomservers"><strong>aiToolsListCustomServers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/list-custom-servers</td>
        <td>List custom servers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolslistsystemtools"><strong>aiToolsListSystemTools</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/tools/list-system-tools</td>
        <td>List system tools</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsremovecustomserver"><strong>aiToolsRemoveCustomServer</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/tools/remove-custom-server</td>
        <td>Remove custom server</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsreplaceallcustomservers"><strong>aiToolsReplaceAllCustomServers</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/tools/replace-all-custom-servers</td>
        <td>Replace all custom servers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolssetallowalways"><strong>aiToolsSetAllowAlways</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/tools/set-allow-always</td>
        <td>Set allow always</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolssetdisabled"><strong>aiToolsSetDisabled</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/tools/set-disabled</td>
        <td>Set disabled</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIToolsApi.md#aitoolsupdatecustomserver"><strong>aiToolsUpdateCustomServer</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/tools/update-custom-server</td>
        <td>Update custom server</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>VectorizationApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIVectorizationApi.md#aivectorizationstarttask"><strong>aiVectorizationStartTask</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/vectorization/tasks</td>
        <td>Start a vectorization task</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>WebSearchApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchclear"><strong>aiWebSearchClear</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/ai/web-search/clear</td>
        <td>Clear the web-search configuration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchconfigure"><strong>aiWebSearchConfigure</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/web-search/configure</td>
        <td>Configure and verify web search</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchgetactiveconfig"><strong>aiWebSearchGetActiveConfig</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/web-search/get-active-config</td>
        <td>Get active config</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchisconfigured"><strong>aiWebSearchIsConfigured</strong></a></td>
        <td><strong>GET</strong> /api/2.0/ai/web-search/is-configured</td>
        <td>Is configured</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchpassthroughcontents"><strong>aiWebSearchPassthroughContents</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/websearch/v1/contents</td>
        <td>Web page contents passthrough</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchpassthroughsearch"><strong>aiWebSearchPassthroughSearch</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/websearch/v1/search</td>
        <td>Web search passthrough</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchsetactiveconfig"><strong>aiWebSearchSetActiveConfig</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/ai/web-search/set-active-config</td>
        <td>Set active config</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAIWebSearchApi.md#aiwebsearchtestconnection"><strong>aiWebSearchTestConnection</strong></a></td>
        <td><strong>POST</strong> /api/2.0/ai/web-search/test-connection</td>
        <td>Test a web-search provider</td>
      </tr>
    </tbody>
  </table>

</details>
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
        <td>Delete an API key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getallpermissions"><strong>getAllPermissions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys/permissions</td>
        <td>Get API key permissions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getapikey"><strong>getApiKey</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys/@self</td>
        <td>Get the current API key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiApiKeysApi.md#getapikeys"><strong>getApiKeys</strong></a></td>
        <td><strong>GET</strong> /api/2.0/keys</td>
        <td>Get the API keys</td>
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
  <summary>Apps</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>AppsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiAppsApi.md#get"><strong>get</strong></a></td>
        <td><strong>GET</strong> /api/2.0/apps/{id}</td>
        <td>Get an app</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAppsApi.md#getall"><strong>getAll</strong></a></td>
        <td><strong>GET</strong> /api/2.0/apps</td>
        <td>Get all apps</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAppsApi.md#getsettings"><strong>getSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/apps/{id}/settings</td>
        <td>Get app settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAppsApi.md#setenabled"><strong>setEnabled</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/apps/{id}/enabled</td>
        <td>Enable or disable an app</td>
      </tr>
      <tr>
        <td><a href="docs/ApiAppsApi.md#setsettings"><strong>setSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/apps/{id}/settings</td>
        <td>Save app settings</td>
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
        <td>Check a confirmation link</td>
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
        <td><a href="docs/ApiBackupApi.md#cancelbackup"><strong>cancelBackup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/backup/cancelbackup</td>
        <td>Cancel the running backup</td>
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
        <td><a href="docs/ApiBackupApi.md#getbackupscounts"><strong>getBackupsCounts</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getbackupscountbypaid</td>
        <td>Get free and paid backup counts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiBackupApi.md#getbackupsservicestate"><strong>getBackupsServiceState</strong></a></td>
        <td><strong>GET</strong> /api/2.0/backup/getservicestate</td>
        <td>Check whether backups are enabled</td>
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
  <summary>Docs</summary>

  <table>
    <tbody>
      <tr>
        <th>Method</th>
        <th>HTTP request</th>
        <th>Description</th>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center;"><strong>DocsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiDocsApi.md#convertfile"><strong>convertFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/docs/converter</td>
        <td>Convert a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiDocsApi.md#runbuilderscript"><strong>runBuilderScript</strong></a></td>
        <td><strong>POST</strong> /api/2.0/docs/builder</td>
        <td>Run a document builder script</td>
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
        <td>Add a file to Recent</td>
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
        <td>Open a form draft for filling</td>
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
        <td>Create a file in My documents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createfileprimaryexternallink"><strong>createFilePrimaryExternalLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{id}/link</td>
        <td>Create the file primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createhtmlfile"><strong>createHtmlFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/html</td>
        <td>Create an HTML file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createhtmlfileinmydocuments"><strong>createHtmlFileInMyDocuments</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/html</td>
        <td>Create an HTML file in My documents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createtextfile"><strong>createTextFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/text</td>
        <td>Create a text file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createtextfileinmydocuments"><strong>createTextFileInMyDocuments</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/text</td>
        <td>Create a text file in My documents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#createthumbnails"><strong>createThumbnails</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thumbnails</td>
        <td>Queue file thumbnails</td>
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
        <td><a href="docs/ApiFilesFilesApi.md#generatexlsx"><strong>generateXlsx</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/xlsx</td>
        <td>Generate a form answers report</td>
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
        <td><a href="docs/ApiFilesFilesApi.md#getencryptioninfo"><strong>getEncryptionInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{fileId}/access</td>
        <td>Get file encryption information</td>
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
        <td>Get the file primary external link</td>
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
        <td><a href="docs/ApiFilesFilesApi.md#getformsubmissions"><strong>getFormSubmissions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/submissions</td>
        <td>Get form submission results</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getpresignedfileuri"><strong>getPresignedFileUri</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/presigned</td>
        <td>Get a signed download address</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getpresigneduri"><strong>getPresignedUri</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/presigneduri</td>
        <td>Get file download link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getprotectedfileusers"><strong>getProtectedFileUsers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/protectusers</td>
        <td>Get users for document protection</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getreferencedata"><strong>getReferenceData</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/referencedata</td>
        <td>Resolve a spreadsheet reference</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#getxlsx"><strong>getXlsx</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/xlsx</td>
        <td>Get form report generation status</td>
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
        <td>Get the editor configuration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#restorefileversion"><strong>restoreFileVersion</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/restoreversion</td>
        <td>Restore a file version</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#saveeditingfilefromform"><strong>saveEditingFileFromForm</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/saveediting</td>
        <td>Save edited file content</td>
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
        <td><a href="docs/ApiFilesFilesApi.md#setencryptioninfo"><strong>setEncryptionInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/{fileId}/access</td>
        <td>Set file encryption information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#setfileexternallink"><strong>setFileExternalLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{id}/links</td>
        <td>Set a file external link</td>
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
        <td>Open an editing session</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#startfillingfile"><strong>startFillingFile</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/startfilling</td>
        <td>Start filling a form</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#togglefilefavorite"><strong>toggleFileFavorite</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/favorites/{fileId}</td>
        <td>Set the file favorite status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFilesApi.md#trackeditfile"><strong>trackEditFile</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/trackeditfile</td>
        <td>Track an editing session</td>
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
        <td>Check for upload conflicts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createfolder"><strong>createFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Create a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createfolderprimaryexternallink"><strong>createFolderPrimaryExternalLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{id}/link</td>
        <td>Create the folder primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#createreportfolderhistory"><strong>createReportFolderHistory</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{folderId}/log/report</td>
        <td>Start the folder history report generation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#deletefolder"><strong>deleteFolder</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Delete a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#generatexlsxbyfolder"><strong>generateXlsxByFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/folder/{folderId}/xlsx</td>
        <td>Generate XLSX report by folder</td>
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
        <td>Get folder external links</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderpath"><strong>getFolderPath</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/path</td>
        <td>Get the folder path</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolderprimaryexternallink"><strong>getFolderPrimaryExternalLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{id}/link</td>
        <td>Get the folder primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getfolders"><strong>getFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/{folderId}/subfolders</td>
        <td>Get subfolders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getformsfolder"><strong>getFormsFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/@forms</td>
        <td>Get the Forms section</td>
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
        <td><a href="docs/ApiFilesFoldersApi.md#getrecentfolder"><strong>getRecentFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/recent</td>
        <td>Get the Recent section</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#getreportfolderhistory"><strong>getReportFolderHistory</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/log/report</td>
        <td>Get the folder history report generation status</td>
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
        <td>Insert a file into My documents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#renamefolder"><strong>renameFolder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{folderId}</td>
        <td>Rename a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#searchfolder"><strong>searchFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/search</td>
        <td>Search a folder by metadata</td>
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
        <td><a href="docs/ApiFilesFoldersApi.md#terminatereportfolderhistory"><strong>terminateReportFolderHistory</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/folder/{folderId}/log/report</td>
        <td>Terminate the folder history report generation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#uploadfile"><strong>uploadFile</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/upload</td>
        <td>Upload a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesFoldersApi.md#uploadfiletomy"><strong>uploadFileToMy</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/@my/upload</td>
        <td>Upload a file to My documents</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>MetadataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#assignfiletemplates"><strong>assignFileTemplates</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/file/{fileId}/templates</td>
        <td>Assign templates to a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#assignfoldertemplates"><strong>assignFolderTemplates</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/folder/{folderId}/templates</td>
        <td>Assign templates to a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#createfield"><strong>createField</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/metadata/templates/{templateId}/fields</td>
        <td>Add a metadata field</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#createtemplate"><strong>createTemplate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/metadata/templates</td>
        <td>Create a metadata template</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#deletefield"><strong>deleteField</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/metadata/templates/{templateId}/fields/{fieldId}</td>
        <td>Delete a metadata field</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#deletetemplate"><strong>deleteTemplate</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/metadata/templates/{templateId}</td>
        <td>Delete a metadata template</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#getcascadeprogress"><strong>getCascadeProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/metadata/folder/{folderId}/templates/progress</td>
        <td>Get cascade progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#getfilemetadata"><strong>getFileMetadata</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/metadata/file/{fileId}</td>
        <td>Get file metadata</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#getfoldermetadata"><strong>getFolderMetadata</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/metadata/folder/{folderId}</td>
        <td>Get folder metadata</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#gettemplate"><strong>getTemplate</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/metadata/templates/{templateId}</td>
        <td>Get a metadata template</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#gettemplates"><strong>getTemplates</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/metadata/templates</td>
        <td>Get metadata templates</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#setfilecustomfields"><strong>setFileCustomFields</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/file/{fileId}/customfields</td>
        <td>Set file custom fields</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#setfilevalues"><strong>setFileValues</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/file/{fileId}/values</td>
        <td>Set file metadata values</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#setfoldercustomfields"><strong>setFolderCustomFields</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/folder/{folderId}/customfields</td>
        <td>Set folder custom fields</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#setfoldervalues"><strong>setFolderValues</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/folder/{folderId}/values</td>
        <td>Set folder metadata values</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#unassignfiletemplate"><strong>unassignFileTemplate</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/metadata/file/{fileId}/templates/{templateId}</td>
        <td>Unassign a template from a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#unassignfoldertemplate"><strong>unassignFolderTemplate</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/metadata/folder/{folderId}/templates/{templateId}</td>
        <td>Unassign a template from a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#updatefield"><strong>updateField</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/templates/{templateId}/fields/{fieldId}</td>
        <td>Update a metadata field</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#updatefoldertemplate"><strong>updateFolderTemplate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/folder/{folderId}/templates/{templateId}</td>
        <td>Update a template assignment on a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesMetadataApi.md#updatetemplate"><strong>updateTemplate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/metadata/templates/{templateId}</td>
        <td>Update a metadata template</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OperationsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#abortuploadsession"><strong>abortUploadSession</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/{folderId}/session/{sessionId}</td>
        <td>Abort an upload session</td>
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
        <td>Check move or copy conflicts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#checkmoveorcopydestfolder"><strong>checkMoveOrCopyDestFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops/checkdestfolder</td>
        <td>Check the destination folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#copybatchitems"><strong>copyBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/copy</td>
        <td>Copy files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#createuploadsession"><strong>createUploadSession</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/upload/create_session</td>
        <td>Chunked upload</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#createuploadsessioninfolder"><strong>createUploadSessionInFolder</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/session</td>
        <td>Create an upload session</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#deletebatchitems"><strong>deleteBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/delete</td>
        <td>Delete files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#deletefavoritesfrombody"><strong>deleteFavoritesFromBody</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/favorites</td>
        <td>Delete favorite files and folders</td>
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
        <td><a href="docs/ApiFilesOperationsApi.md#finalizesession"><strong>finalizeSession</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/{folderId}/session/{sessionId}/finalize</td>
        <td>Finalize an upload session</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#getoperationstatuses"><strong>getOperationStatuses</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops</td>
        <td>Get active file operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#getoperationstatusesbytype"><strong>getOperationStatusesByType</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/fileops/{operationType}</td>
        <td>Get file operations by type</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#markasread"><strong>markAsRead</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/markasread</td>
        <td>Mark files and folders as read</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#movebatchitems"><strong>moveBatchItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/move</td>
        <td>Move files and folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#startfileconversion"><strong>startFileConversion</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/checkconversion</td>
        <td>Start file conversion</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#terminatetasks"><strong>terminateTasks</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/fileops/terminate/{id}</td>
        <td>Cancel file operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#updatefilecomment"><strong>updateFileComment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{fileId}/comment</td>
        <td>Update a comment</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#uploadasyncsession"><strong>uploadAsyncSession</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/session/{sessionId}/upload</td>
        <td>Upload a numbered chunk</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesOperationsApi.md#uploadsession"><strong>uploadSession</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/{folderId}/session/{sessionId}</td>
        <td>Upload the next chunk</td>
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
        <td>Ask for delete confirmation</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changedownloadzip"><strong>changeDownloadZip</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/downloadtargz</td>
        <td>Change the download archive format</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#changeexternalsharingsettings"><strong>changeExternalSharingSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/externalsharingsettings</td>
        <td>Configure external sharing</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#checkdocserviceurl"><strong>checkDocServiceUrl</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/docservice</td>
        <td>Set the document service address</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#displayfileextension"><strong>displayFileExtension</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/displayfileextension</td>
        <td>Display a file extension</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#displayrecent"><strong>displayRecent</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/displayrecent</td>
        <td>Show the Recent section</td>
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
        <td><a href="docs/ApiFilesSettingsApi.md#getdefaulttemplates"><strong>getDefaultTemplates</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/settings/defaulttemplate</td>
        <td>Get the default template setting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getdocserviceurl"><strong>getDocServiceUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/docservice</td>
        <td>Get the document service address</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#getfilesmodule"><strong>getFilesModule</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/info</td>
        <td>Get the Documents module information</td>
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
        <td><a href="docs/ApiFilesSettingsApi.md#keepnewfilename"><strong>keepNewFileName</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/keepnewfilename</td>
        <td>Keep the default file name</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#resetdefaulttemplate"><strong>resetDefaultTemplate</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/settings/defaulttemplate</td>
        <td>Reset the default template setting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#setdefaulttemplate"><strong>setDefaultTemplate</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/defaulttemplate</td>
        <td>Change the default template setting</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#setopeneditorinsametab"><strong>setOpenEditorInSameTab</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/openeditorinsametab</td>
        <td>Open document in the same browser tab</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#setorganizeroomsgrouping"><strong>setOrganizeRoomsGrouping</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/settings/organizegrouping</td>
        <td>Organize rooms grouping</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSettingsApi.md#showquickactions"><strong>showQuickActions</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/showquickactions</td>
        <td>Display quick actions</td>
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
        <td><a href="docs/ApiFilesSettingsApi.md#uploaddefaulttemplate"><strong>uploadDefaultTemplate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/settings/defaulttemplate</td>
        <td>Upload a file as the default template setting</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>SharingApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#applyexternalsharepassword"><strong>applyExternalSharePassword</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/share/{key}/password</td>
        <td>Unlock a password-protected link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#changefileowner"><strong>changeFileOwner</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/owner</td>
        <td>Change the room or file owner</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getencryptionaccess"><strong>getEncryptionAccess</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/publickeys</td>
        <td>Get file encryption keys</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getexternalsharedata"><strong>getExternalShareData</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/share/{key}</td>
        <td>Resolve an external share link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getfilesecurityinfo"><strong>getFileSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{id}/share</td>
        <td>Get file sharing rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getfoldersecurityinfo"><strong>getFolderSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{id}/share</td>
        <td>Get folder sharing rights</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getgroupsmemberswithfilesecurity"><strong>getGroupsMembersWithFileSecurity</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/group/{groupId}/share</td>
        <td>Get file access of group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getgroupsmemberswithfoldersecurity"><strong>getGroupsMembersWithFolderSecurity</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/folder/{folderId}/group/{groupId}/share</td>
        <td>Get folder access of group members</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getsecurityinfo"><strong>getSecurityInfo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/share</td>
        <td>Get sharing rights in batch</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#getsharedusers"><strong>getSharedUsers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/file/{fileId}/sharedusers</td>
        <td>Get users to mention in a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#removesecurityinfo"><strong>removeSecurityInfo</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/share</td>
        <td>Remove sharing rights in batch</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#sendeditornotify"><strong>sendEditorNotify</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/file/{fileId}/sendeditornotify</td>
        <td>Notify mentioned users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setfilesecurityinfo"><strong>setFileSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/file/{id}/share</td>
        <td>Share a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setfoldersecurityinfo"><strong>setFolderSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/folder/{id}/share</td>
        <td>Share a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesSharingApi.md#setsecurityinfo"><strong>setSecurityInfo</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/share</td>
        <td>Set sharing rights in batch</td>
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
        <td>Get all third-party providers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getbackupthirdpartyaccount"><strong>getBackupThirdPartyAccount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/backup</td>
        <td>Get the third-party backup folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getcapabilities"><strong>getCapabilities</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/capabilities</td>
        <td>Get third-party provider capabilities</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getcommonthirdpartyfolders"><strong>getCommonThirdPartyFolders</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty/common</td>
        <td>Get common third-party folders</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#getthirdpartyaccounts"><strong>getThirdPartyAccounts</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/thirdparty</td>
        <td>Get the third-party accounts</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#savethirdparty"><strong>saveThirdParty</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thirdparty</td>
        <td>Connect a third-party account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiFilesThirdPartyIntegrationApi.md#savethirdpartybackup"><strong>saveThirdPartyBackup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/thirdparty/backup</td>
        <td>Connect the third-party backup storage</td>
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
        <td><strong>GET</strong> /api/2.0/group/user/{userId}</td>
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
        <td>Search groups for a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupSearchApi.md#getgroupswithfoldersshared"><strong>getGroupsWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/folder/{id}</td>
        <td>Search groups for a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiGroupSearchApi.md#getgroupswithroomsshared"><strong>getGroupsWithRoomsShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/group/room/{id}</td>
        <td>Search groups for a room</td>
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
        <td>Get available migrators</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#startmigration"><strong>startMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/migrate</td>
        <td>Start migration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiMigrationApi.md#uploadandinitializemigration"><strong>uploadAndInitializeMigration</strong></a></td>
        <td><strong>POST</strong> /api/2.0/migration/init/{migratorName}</td>
        <td>Parse migration archive</td>
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
        <td>Start the authorization flow</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20AuthorizationApi.md#exchangetoken"><strong>exchangeToken</strong></a></td>
        <td><strong>POST</strong> /oauth2/token</td>
        <td>Exchange the authorization code</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20AuthorizationApi.md#submitconsent"><strong>submitConsent</strong></a></td>
        <td><strong>POST</strong> /oauth2/authorize</td>
        <td>Submit the consent decision</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ClientManagementApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#changeactivation"><strong>changeActivation</strong></a></td>
        <td><strong>PATCH</strong> /api/2.0/oauth2/clients/{clientId}/activation</td>
        <td>Change client activation status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#createclient"><strong>createClient</strong></a></td>
        <td><strong>POST</strong> /api/2.0/oauth2/clients</td>
        <td>Create a new OAuth2 client</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#deleteclient"><strong>deleteClient</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/oauth2/clients/{clientId}</td>
        <td>Delete an OAuth2 client</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#deletetenantclients"><strong>deleteTenantClients</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/oauth2/clients/tenant</td>
        <td>Delete all tenant OAuth2 clients</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#deleteuserclients"><strong>deleteUserClients</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/oauth2/clients</td>
        <td>Delete all user OAuth2 clients</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#regeneratesecret"><strong>regenerateSecret</strong></a></td>
        <td><strong>PATCH</strong> /api/2.0/oauth2/clients/{clientId}/regenerate</td>
        <td>Regenerate client secret</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#revokeuserclient"><strong>revokeUserClient</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/oauth2/clients/{clientId}/revoke</td>
        <td>Revoke client consent</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientManagementApi.md#updateclient"><strong>updateClient</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/oauth2/clients/{clientId}</td>
        <td>Update an existing OAuth2 client</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ClientQueryingApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclient"><strong>getClient</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients/{clientId}</td>
        <td>Get client details</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclientinfo"><strong>getClientInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients/{clientId}/info</td>
        <td>Get client info</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclients"><strong>getClients</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients</td>
        <td>List clients</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getclientsinfo"><strong>getClientsInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients/info</td>
        <td>List client info</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getconsents"><strong>getConsents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients/consents</td>
        <td>List user consents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ClientQueryingApi.md#getpublicclientinfo"><strong>getPublicClientInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/clients/{clientId}/public/info</td>
        <td>Get public client info</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>DiscoveryApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20DiscoveryApi.md#handleoptions"><strong>handleOptions</strong></a></td>
        <td><strong>OPTIONS</strong> /.well-known/oauth-authorization-server</td>
        <td>Probe the discovery endpoint</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ScopeManagementApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiOAuth20ScopeManagementApi.md#getscopes"><strong>getScopes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/oauth2/scopes</td>
        <td>List available OAuth2 scopes</td>
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
        <td colspan="3" style="text-align: center;"><strong>EmailApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleEmailApi.md#changeuseremail"><strong>changeUserEmail</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userId}/email</td>
        <td>Change a user email</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleEmailApi.md#sendemailchangeinstructions"><strong>sendEmailChangeInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/email</td>
        <td>Send instructions to change email</td>
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
        <td>Remove guest relations</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PasswordApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePasswordApi.md#changeuserpassword"><strong>changeUserPassword</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userId}/password</td>
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
        <td><strong>POST</strong> /api/2.0/people/{userId}/photo/thumbnails</td>
        <td>Create photo thumbnails</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#deletememberphoto"><strong>deleteMemberPhoto</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/{userId}/photo</td>
        <td>Delete a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#getmemberphoto"><strong>getMemberPhoto</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/{userId}/photo</td>
        <td>Get a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#updatememberphoto"><strong>updateMemberPhoto</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userId}/photo</td>
        <td>Update a user photo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeoplePhotosApi.md#uploadmemberphoto"><strong>uploadMemberPhoto</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/{userId}/photo</td>
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
        <td><a href="docs/ApiPeopleProfilesApi.md#checkuserexistsbyemail"><strong>checkUserExistsByEmail</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/exists</td>
        <td>Check whether an email is taken</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#deletemember"><strong>deleteMember</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/{userId}</td>
        <td>Delete a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#deleteprofile"><strong>deleteProfile</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/@self</td>
        <td>Close my own profile</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#getallprofiles"><strong>getAllProfiles</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people</td>
        <td>Get the active profiles</td>
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
        <td><strong>GET</strong> /api/2.0/people/{userId}</td>
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
        <td><a href="docs/ApiPeopleProfilesApi.md#updatemember"><strong>updateMember</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userId}</td>
        <td>Update a user</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleProfilesApi.md#updatememberculture"><strong>updateMemberCulture</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/{userId}/culture</td>
        <td>Update a user culture</td>
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
        <td>Search accounts for a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getaccountsentrieswithfoldersshared"><strong>getAccountsEntriesWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/accounts/folder/{id}/search</td>
        <td>Search accounts for a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getaccountsentrieswithroomsshared"><strong>getAccountsEntriesWithRoomsShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/accounts/room/{id}/search</td>
        <td>Search accounts for a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getsearch"><strong>getSearch</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/@search/{query}</td>
        <td>Search users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getsimplebyfilter"><strong>getSimpleByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/simple/filter</td>
        <td>Filter users in brief</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithfilesshared"><strong>getUsersWithFilesShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/file/{id}</td>
        <td>Search users for a file</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithfoldersshared"><strong>getUsersWithFoldersShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/folder/{id}</td>
        <td>Search users for a folder</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#getuserswithroomshared"><strong>getUsersWithRoomShared</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/room/{id}</td>
        <td>Search users for a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#searchusersbyextendedfilter"><strong>searchUsersByExtendedFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/filter</td>
        <td>Filter users in detail</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleSearchApi.md#searchusersbyquery"><strong>searchUsersByQuery</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/search</td>
        <td>Search users by query</td>
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
        <td>Get third-party providers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#linkthirdpartyaccount"><strong>linkThirdPartyAccount</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/people/thirdparty/linkaccount</td>
        <td>Link a third-party account</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#signupthirdpartyaccount"><strong>signupThirdPartyAccount</strong></a></td>
        <td><strong>POST</strong> /api/2.0/people/thirdparty/signup</td>
        <td>Sign up with a provider</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleThirdPartyAccountsApi.md#unlinkthirdpartyaccount"><strong>unlinkThirdPartyAccount</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/people/thirdparty/unlinkaccount</td>
        <td>Unlink a third-party account</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UserDataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getdeletepersonalfolderprogress"><strong>getDeletePersonalFolderProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/delete/personal/progress</td>
        <td>Get the personal folder deletion progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getreassignprogress"><strong>getReassignProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/reassign/progress/{userId}</td>
        <td>Get the reassignment progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserDataApi.md#getremoveprogress"><strong>getRemoveProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/people/remove/progress/{userId}</td>
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
        <td><strong>PUT</strong> /api/2.0/people/activationstatus/{activationStatus}</td>
        <td>Set my activation status</td>
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
        <td><strong>GET</strong> /api/2.0/people/type/progress/{userId}</td>
        <td>Get the user type change progress</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPeopleUserTypeApi.md#startusertypeupdate"><strong>startUserTypeUpdate</strong></a></td>
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
        <td><strong>GET</strong> /api/2.0/people/guests/{userId}/share</td>
        <td>Get a guest sharing link</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>ModuleEventsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalModuleEventsApi.md#sendmoduleevent"><strong>sendModuleEvent</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/moduleevents</td>
        <td>Send a module event</td>
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
        <td>Switch a wallet service</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#createcustomermonthlyusagereport"><strong>createCustomerMonthlyUsageReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/customer/usage/monthly/report</td>
        <td>Start the monthly usage report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#createcustomeroperationsreport"><strong>createCustomerOperationsReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Start the operations report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#createcustomerserviceusagereport"><strong>createCustomerServiceUsageReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/customer/usage/report</td>
        <td>Start the service usage report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#createservicelimit"><strong>createServiceLimit</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/servicelimit</td>
        <td>Create a service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#deleteservicelimit"><strong>deleteServiceLimit</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/payment/servicelimit/{id}</td>
        <td>Delete a service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#disableparticipantservicelimits"><strong>disableParticipantServiceLimits</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/servicelimit/participants/disable</td>
        <td>Disable the user service limits</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getaccountingserviceprices"><strong>getAccountingServicePrices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/accounting/prices/{serviceName}</td>
        <td>Get the service prices from the accounting service</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getactiveservices"><strong>getActiveServices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/activeservices</td>
        <td>Get the active wallet services</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getaiprices"><strong>getAiPrices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/ai-prices</td>
        <td>Get AI model prices</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcheckoutsetupurl"><strong>getCheckoutSetupUrl</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/checkoutsetupurl</td>
        <td>Get the checkout setup page URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerbalance"><strong>getCustomerBalance</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/balance</td>
        <td>Get the customer balance</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerdeposits"><strong>getCustomerDeposits</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/deposits</td>
        <td>Get the wallet top-ups</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerinfo"><strong>getCustomerInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customerinfo</td>
        <td>Get the customer information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomermonthlyusage"><strong>getCustomerMonthlyUsage</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/usage/monthly</td>
        <td>Get the customer monthly usage</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomermonthlyusagereport"><strong>getCustomerMonthlyUsageReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/usage/monthly/report</td>
        <td>Get the monthly usage report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomeroperations"><strong>getCustomerOperations</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/operations</td>
        <td>Get the wallet operations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomeroperationsreport"><strong>getCustomerOperationsReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Get the operations report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerserviceusage"><strong>getCustomerServiceUsage</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/usage</td>
        <td>Get the customer service usage</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getcustomerserviceusagereport"><strong>getCustomerServiceUsageReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/usage/report</td>
        <td>Get the service usage report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getdepositinvoice"><strong>getDepositInvoice</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/customer/deposits/{id}/invoice</td>
        <td>Get the top-up invoice</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getglobalservicelimit"><strong>getGlobalServiceLimit</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicelimit/global</td>
        <td>Get the global service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getparticipantservicelimits"><strong>getParticipantServiceLimits</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicelimit/participants</td>
        <td>Get the user service limits</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentaccount"><strong>getPaymentAccount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/account</td>
        <td>Get the billing account page</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentcurrencies"><strong>getPaymentCurrencies</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/currencies</td>
        <td>Get the billing currencies</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymentquotas"><strong>getPaymentQuotas</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/quotas</td>
        <td>Get the purchasable quotas</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getpaymenturl"><strong>getPaymentUrl</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/url</td>
        <td>Get the payment page URL</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getportalprices"><strong>getPortalPrices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/prices</td>
        <td>Get the product prices</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getquotapaymentinformation"><strong>getQuotaPaymentInformation</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/quota</td>
        <td>Get the current plan and limits</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getrestrictedaimodels"><strong>getRestrictedAiModels</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/ai-model/restrictions</td>
        <td>Get restricted AI models</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getservicelimit"><strong>getServiceLimit</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicelimit/{id}</td>
        <td>Get a service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getsubscriptionbalanceinfo"><strong>getSubscriptionBalanceInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/subscription/balance</td>
        <td>Get the subscription balance information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#gettenantwalletservicesettings"><strong>getTenantWalletServiceSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicessettings</td>
        <td>Get the wallet service settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#gettenantwalletsettings"><strong>getTenantWalletSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/topupsettings</td>
        <td>Get the auto top-up settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#gettotalservicelimit"><strong>getTotalServiceLimit</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/servicelimit/total</td>
        <td>Get the portal service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getwalletservice"><strong>getWalletService</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/walletservice</td>
        <td>Get a wallet service</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#getwalletservices"><strong>getWalletServices</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/payment/walletservices</td>
        <td>Get wallet services</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#movesubscriptiontowallet"><strong>moveSubscriptionToWallet</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/subscription/movetowallet</td>
        <td>Move the subscription to the wallet</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#sendpaymentrequest"><strong>sendPaymentRequest</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/request</td>
        <td>Contact the sales team</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#setparticipantservicelimits"><strong>setParticipantServiceLimits</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/servicelimit/participants</td>
        <td>Set the user service limits</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#setrestrictedaimodels"><strong>setRestrictedAiModels</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/ai-model/restrictions</td>
        <td>Set restricted AI models</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#settenantwalletsettings"><strong>setTenantWalletSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/topupsettings</td>
        <td>Set the auto top-up settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#terminatecustomermonthlyusagereport"><strong>terminateCustomerMonthlyUsageReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/payment/customer/usage/monthly/report</td>
        <td>Terminate the monthly usage report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#terminatecustomeroperationsreport"><strong>terminateCustomerOperationsReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/payment/customer/operationsreport</td>
        <td>Terminate the operations report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#terminatecustomerserviceusagereport"><strong>terminateCustomerServiceUsageReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/payment/customer/usage/report</td>
        <td>Terminate the service usage report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#topupdeposit"><strong>topUpDeposit</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/payment/deposit</td>
        <td>Top up the wallet</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#updatepayment"><strong>updatePayment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/update</td>
        <td>Change the subscription quantity</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#updateservicelimit"><strong>updateServiceLimit</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/servicelimit</td>
        <td>Update a service limit</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalPaymentApi.md#updatewalletpayment"><strong>updateWalletPayment</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/payment/updatewallet</td>
        <td>Change a wallet service quantity</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>QuotaApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getportalquota"><strong>getPortalQuota</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/quota</td>
        <td>Get the portal quota</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalQuotaApi.md#getportaltariff"><strong>getPortalTariff</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/tariff</td>
        <td>Get the portal tariff</td>
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
        <td><a href="docs/ApiPortalQuotaApi.md#getupcomingpayments"><strong>getUpcomingPayments</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/tariff/upcoming</td>
        <td>Get upcoming payments</td>
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
        <td>Get portal information</td>
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
        <td><a href="docs/ApiPortalSettingsApi.md#unblockportal"><strong>unblockPortal</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/unblock</td>
        <td>Unblock a portal</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>UsersApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#createinvitationlink"><strong>createInvitationLink</strong></a></td>
        <td><strong>POST</strong> /api/2.0/portal/users/invitationlink</td>
        <td>Create an invitation link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#deleteinvitationlink"><strong>deleteInvitationLink</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/portal/users/invitationlink</td>
        <td>Delete an invitation link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getinvitationlink"><strong>getInvitationLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/users/invite/{employeeType}</td>
        <td>Get a legacy invitation link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getinvitationlinkbyemployeetype"><strong>getInvitationLinkByEmployeeType</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/users/invitationlink/{employeeType}</td>
        <td>Get an invitation link by role</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getportaluserscount"><strong>getPortalUsersCount</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/userscount</td>
        <td>Get a number of portal users</td>
      </tr>
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#getuserbyid"><strong>getUserById</strong></a></td>
        <td><strong>GET</strong> /api/2.0/portal/users/{userId}</td>
        <td>Get a portal user</td>
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
      <tr>
        <td><a href="docs/ApiPortalUsersApi.md#updateinvitationlink"><strong>updateInvitationLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/portal/users/invitationlink</td>
        <td>Update an invitation link</td>
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
        <td>Attach tags to a room</td>
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
        <td>Set the room logo</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomtag"><strong>createRoomTag</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/tags</td>
        <td>Create a room tag</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#createroomtemplate"><strong>createRoomTemplate</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/roomtemplate</td>
        <td>Create a room template</td>
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
        <td>Detach tags from a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getexternaldbsyncstatus"><strong>getExternalDbSyncStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/externaldbsync</td>
        <td>Get external DB sync status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getnewroomitems"><strong>getNewRoomItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/news</td>
        <td>Get new items in a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getpublicsettings"><strong>getPublicSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/roomtemplate/{id}/public</td>
        <td>Get room template public access</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomaifolder"><strong>getRoomAiFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/ai</td>
        <td>Get the .ai folder of a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomcovers"><strong>getRoomCovers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/covers</td>
        <td>Get room cover gallery</td>
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
        <td>Get available room tags</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomtemplatecreatingstatus"><strong>getRoomTemplateCreatingStatus</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/roomtemplate/status</td>
        <td>Get room template creation status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsfolder"><strong>getRoomsFolder</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms</td>
        <td>Get rooms</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsnewitems"><strong>getRoomsNewItems</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/news</td>
        <td>Get new items in all rooms</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#getroomsprimaryexternallink"><strong>getRoomsPrimaryExternalLink</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/rooms/{id}/link</td>
        <td>Get the room primary external link</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#hastaglinks"><strong>hasTagLinks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/tags/{tagName}/haslinks</td>
        <td>Check room tag usage</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#pinroom"><strong>pinRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/pin</td>
        <td>Pin a room</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#reorderroom"><strong>reorderRoom</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/rooms/{id}/reorder</td>
        <td>Reorder room contents</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#resendemailinvitations"><strong>resendEmailInvitations</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/resend</td>
        <td>Resend the room invitations</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#searchrooms"><strong>searchRooms</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/search</td>
        <td>Search the rooms by metadata</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#setpublicsettings"><strong>setPublicSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/roomtemplate/public</td>
        <td>Set room template public access</td>
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
        <td><a href="docs/ApiRoomsApi.md#startexternaldbsync"><strong>startExternalDbSync</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/rooms/{id}/externaldbsync</td>
        <td>Start external DB sync</td>
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
        <td><a href="docs/ApiRoomsApi.md#updateroomtag"><strong>updateRoomTag</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/tags</td>
        <td>Rename a room tag</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsApi.md#uploadroomlogo"><strong>uploadRoomLogo</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/logos</td>
        <td>Upload a room logo image</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>GroupsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#addroomgroup"><strong>addRoomGroup</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/group</td>
        <td>Add a new room group</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#changeroomgroupicon"><strong>changeRoomGroupIcon</strong></a></td>
        <td><strong>POST</strong> /api/2.0/files/group/{id}/icon</td>
        <td>Change room group icon</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#deleteroomgroup"><strong>deleteRoomGroup</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/files/group/{id}</td>
        <td>Delete a room group</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#getroomgroupinfo"><strong>getRoomGroupInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/group/{id}</td>
        <td>Get room group info</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#getroomgroups"><strong>getRoomGroups</strong></a></td>
        <td><strong>GET</strong> /api/2.0/files/group</td>
        <td>List room groups</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsGroupsApi.md#updateroomgroup"><strong>updateRoomGroup</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/files/group/{id}</td>
        <td>Update room group</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>PrivacyRoomApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsPrivacyRoomApi.md#deletekeys"><strong>deleteKeys</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/privacyroom/keys/{id}</td>
        <td>Delete an encryption key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsPrivacyRoomApi.md#getuserkeys"><strong>getUserKeys</strong></a></td>
        <td><strong>GET</strong> /api/2.0/privacyroom/keys</td>
        <td>Get own encryption keys</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsPrivacyRoomApi.md#getuserkeysforroom"><strong>getUserKeysForRoom</strong></a></td>
        <td><strong>GET</strong> /api/2.0/privacyroom/{roomId}/access</td>
        <td>Get private room access keys</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsPrivacyRoomApi.md#replacekey"><strong>replaceKey</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/privacyroom/keys</td>
        <td>Rotate an encryption key</td>
      </tr>
      <tr>
        <td><a href="docs/ApiRoomsPrivacyRoomApi.md#setkeys"><strong>setKeys</strong></a></td>
        <td><strong>POST</strong> /api/2.0/privacyroom/keys</td>
        <td>Create an encryption key</td>
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
        <td>Log out one connection</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallactiveconnectionschangepassword"><strong>logOutAllActiveConnectionsChangePassword</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutallchangepassword</td>
        <td>Log out and reset password</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallactiveconnectionsforuser"><strong>logOutAllActiveConnectionsForUser</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutall/{userId}</td>
        <td>Log out a user everywhere</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityActiveConnectionsApi.md#logoutallexceptthisconnection"><strong>logOutAllExceptThisConnection</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/security/activeconnections/logoutallexceptthis</td>
        <td>Log out other connections</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>AuditTrailDataApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#createaudittrailreport"><strong>createAuditTrailReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/events/report</td>
        <td>Start audit trail report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getauditeventsbyfilter"><strong>getAuditEventsByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/events/filter</td>
        <td>Get filtered audit events</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getauditsettings"><strong>getAuditSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/settings/lifetime</td>
        <td>Get audit lifetime settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getaudittrailmappers"><strong>getAuditTrailMappers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/mappers</td>
        <td>Get audit trail mappers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getaudittrailreport"><strong>getAuditTrailReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/events/report</td>
        <td>Get audit trail report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getaudittrailtypes"><strong>getAuditTrailTypes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/types</td>
        <td>Get audit trail types</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#getlastauditevents"><strong>getLastAuditEvents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/events/last</td>
        <td>Get recent audit events</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#setauditsettings"><strong>setAuditSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/settings/lifetime</td>
        <td>Set audit lifetime settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityAuditTrailDataApi.md#terminateaudittrailreport"><strong>terminateAuditTrailReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/security/audit/events/report</td>
        <td>Terminate audit trail report</td>
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
        <td>Register a push device</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityFirebaseApi.md#subscribedocumentspushnotification"><strong>subscribeDocumentsPushNotification</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/push/docsubscribe</td>
        <td>Set push subscription</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>LoginHistoryApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#createloginhistoryreport"><strong>createLoginHistoryReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/security/audit/login/report</td>
        <td>Start login history report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#getlastloginevents"><strong>getLastLoginEvents</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/login/last</td>
        <td>Get recent login events</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#getlogineventsbyfilter"><strong>getLoginEventsByFilter</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/login/filter</td>
        <td>Get filtered login events</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#getloginhistoryreport"><strong>getLoginHistoryReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/security/audit/login/report</td>
        <td>Get login history report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecurityLoginHistoryApi.md#terminateloginhistoryreport"><strong>terminateLoginHistoryReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/security/audit/login/report</td>
        <td>Terminate login history report</td>
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
        <td>Get SMTP test status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#getsmtpsettings"><strong>getSmtpSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Get SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#resetsmtpsettings"><strong>resetSmtpSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Reset SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#savesmtpsettings"><strong>saveSmtpSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/smtpsettings/smtp</td>
        <td>Save SMTP settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSecuritySMTPSettingsApi.md#testsmtpsettings"><strong>testSmtpSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/smtpsettings/smtp/test</td>
        <td>Test SMTP settings</td>
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
        <td><a href="docs/ApiSettingsAuthorizationApi.md#testexternaldatabaseconnection"><strong>testExternalDatabaseConnection</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/authservice/externaldb/test</td>
        <td>Test external database connection</td>
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
        <td>Get the portal hostname</td>
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
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#gettenantaiaccesssettings"><strong>getTenantAiAccessSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/ai-access</td>
        <td>Get the AI access settings</td>
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
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#savedefaultfolder"><strong>saveDefaultFolder</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/defaultfolder</td>
        <td>Set the default folder</td>
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
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#settenantaiaccesssettings"><strong>setTenantAiAccessSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/ai-access</td>
        <td>Set the AI access settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#updateemailactivationsettings"><strong>updateEmailActivationSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/emailactivation</td>
        <td>Update the email activation settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCommonSettingsApi.md#updateinvitationsettings"><strong>updateInvitationSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/invitationsettings</td>
        <td>Update the user invitation settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>CookiesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCookiesApi.md#getcookiesettings"><strong>getCookieSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/cookiesettings</td>
        <td>Get the cookie lifetime settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsCookiesApi.md#updatecookiesettings"><strong>updateCookieSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/cookiesettings</td>
        <td>Update the cookie lifetime settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>DocsCloudApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#calculatedevpack"><strong>calculateDevPack</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/docscloud/calculatedevpack</td>
        <td>Calculate the Docs Connect Dev Pack switch cost</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#createtenantquotareport"><strong>createTenantQuotaReport</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/docscloud/tenant/quota/report</td>
        <td>Start the Docs Connect quota report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenant"><strong>getTenant</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant</td>
        <td>Get the Docs Connect tenant</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenantconfig"><strong>getTenantConfig</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant/config</td>
        <td>Get the Docs Connect tenant configuration</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenantinfo"><strong>getTenantInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant/info</td>
        <td>Get the Docs Connect tenant information</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenantquota"><strong>getTenantQuota</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant/quota</td>
        <td>Get the Docs Connect tenant quota</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenantquotareport"><strong>getTenantQuotaReport</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant/quota/report</td>
        <td>Get the Docs Connect quota report status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#gettenantusage"><strong>getTenantUsage</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/docscloud/tenant/usage</td>
        <td>Get the Docs Connect tenant usage</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#startdocscloudtrial"><strong>startDocsCloudTrial</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/docscloud/trial</td>
        <td>Start the Docs Connect trial</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#switchtodevpack"><strong>switchToDevPack</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/docscloud/switchtodevpack</td>
        <td>Switch Docs Connect to Docs Connect Dev Pack</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#terminatetenantquotareport"><strong>terminateTenantQuotaReport</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/docscloud/tenant/quota/report</td>
        <td>Terminate the Docs Connect quota report</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsDocsCloudApi.md#updatetenantconfig"><strong>updateTenantConfig</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/docscloud/tenant/config</td>
        <td>Update the Docs Connect tenant configuration</td>
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
        <td>Start the storage encryption</td>
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
        <td>Get IP restrictions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#readiprestrictionssettings"><strong>readIpRestrictionsSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/iprestrictions/settings</td>
        <td>Get IP restriction settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#saveiprestrictions"><strong>saveIpRestrictions</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/iprestrictions</td>
        <td>Save IP restrictions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsIPRestrictionsApi.md#updateiprestrictionssettings"><strong>updateIpRestrictionsSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/iprestrictions/settings</td>
        <td>Update IP restriction settings</td>
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
        <td>Check if a license is required</td>
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
        <td>Get login settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLoginSettingsApi.md#setdefaultloginsettings"><strong>setDefaultLoginSettings</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/security/loginsettings</td>
        <td>Reset login settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsLoginSettingsApi.md#updateloginsettings"><strong>updateLoginSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/loginsettings</td>
        <td>Update login settings</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>MessagesApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#enableadminmessagesettings"><strong>enableAdminMessageSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/messagesettings</td>
        <td>Enable or disable administrator messages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#sendadminmail"><strong>sendAdminMail</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/sendadmmail</td>
        <td>Send a message to the administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsMessagesApi.md#sendjoininvitemail"><strong>sendJoinInviteMail</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/sendjoininvite</td>
        <td>Send an invitation email</td>
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
        <td>Get muted rooms</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#setnotificationsettings"><strong>setNotificationSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/notification</td>
        <td>Set notification status</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsNotificationsApi.md#setroomsnotificationstatus"><strong>setRoomsNotificationStatus</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/notification/rooms</td>
        <td>Mute or unmute a room</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>OwnerApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsOwnerApi.md#sendownerchangeinstructions"><strong>sendOwnerChangeInstructions</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/owner</td>
        <td>Start the portal owner change</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsOwnerApi.md#updateportalowner"><strong>updatePortalOwner</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/owner</td>
        <td>Confirm the portal owner change</td>
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
        <td>Check the default logo text</td>
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
        <td>Save the white label logo text</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savewhitelabelsettings"><strong>saveWhiteLabelSettings</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/whitelabel/logos/save</td>
        <td>Save the white label logos</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsRebrandingApi.md#savewhitelabelsettingsfromfiles"><strong>saveWhiteLabelSettingsFromFiles</strong></a></td>
        <td><strong>POST</strong> /api/2.0/settings/whitelabel/logos/savefromfiles</td>
        <td>Save the logos from files</td>
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
        <td>Get enabled modules</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getisproductadministrator"><strong>getIsProductAdministrator</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/administrator</td>
        <td>Check product administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getpasswordsettings"><strong>getPasswordSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/password</td>
        <td>Get password settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getproductadministrators"><strong>getProductAdministrators</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/administrator/{productId}</td>
        <td>Get product administrators</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getwebitemsecurityinfo"><strong>getWebItemSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security/{id}</td>
        <td>Check module availability</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#getwebitemsettingssecurityinfo"><strong>getWebItemSettingsSecurityInfo</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/security</td>
        <td>Get module access settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setaccesstowebitems"><strong>setAccessToWebItems</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/access</td>
        <td>Set access to modules in bulk</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setproductadministrator"><strong>setProductAdministrator</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/administrator</td>
        <td>Set product administrator</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#setwebitemsecurity"><strong>setWebItemSecurity</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security</td>
        <td>Set module access</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsSecurityApi.md#updatepasswordsettings"><strong>updatePasswordSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/security/password</td>
        <td>Update password settings</td>
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
        <td>Get the portal storages</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getamazons3regions"><strong>getAmazonS3Regions</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/s3/regions</td>
        <td>Get the Amazon S3 regions</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsStorageApi.md#getstorageprogress"><strong>getStorageProgress</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/storage/progress</td>
        <td>Get the storage migration progress</td>
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
        <td>Switch the portal storage</td>
      </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><strong>TFASettingsApi</strong></td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfaappcodes"><strong>getTfaAppCodes</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaappcodes</td>
        <td>Get the TFA backup codes</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfaconfirmdata"><strong>getTfaConfirmData</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp/confirm</td>
        <td>Get TFA confirmation data</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#gettfasettings"><strong>getTfaSettings</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp</td>
        <td>Get the TFA settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#tfaappgeneratesetupcode"><strong>tfaAppGenerateSetupCode</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/tfaapp/setup</td>
        <td>Generate the TFA setup code</td>
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
        <td>Regenerate the TFA backup codes</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#updatetfasettings"><strong>updateTfaSettings</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaapp</td>
        <td>Update the TFA settings</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsTFASettingsApi.md#updatetfasettingslink"><strong>updateTfaSettingsLink</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/tfaappwithlink</td>
        <td>Update TFA settings with a link</td>
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
        <td>Switch a webhook on or off</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#gettenantwebhooks"><strong>getTenantWebhooks</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhook</td>
        <td>Get the portal webhooks</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#getwebhooktriggers"><strong>getWebhookTriggers</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhook/triggers</td>
        <td>Get the webhook triggers</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#getwebhookslogs"><strong>getWebhooksLogs</strong></a></td>
        <td><strong>GET</strong> /api/2.0/settings/webhooks/log</td>
        <td>Get the webhook delivery log</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#removewebhook"><strong>removeWebhook</strong></a></td>
        <td><strong>DELETE</strong> /api/2.0/settings/webhook/{id}</td>
        <td>Remove a webhook</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#retrywebhook"><strong>retryWebhook</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook/{id}/retry</td>
        <td>Retry a webhook delivery</td>
      </tr>
      <tr>
        <td><a href="docs/ApiSettingsWebhooksApi.md#retrywebhooks"><strong>retryWebhooks</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webhook/retry</td>
        <td>Retry webhook deliveries</td>
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
        <td><a href="docs/ApiSettingsWebpluginsApi.md#refreshwebplugin"><strong>refreshWebPlugin</strong></a></td>
        <td><strong>PUT</strong> /api/2.0/settings/webplugins/{name}/refresh</td>
        <td>Refresh a web plugin</td>
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
        <td>Get provider consent URL</td>
      </tr>
    </tbody>
  </table>

</details>

## Documentation for Models

<details><summary>Models list</summary>

 - [OpenAPI\Client\Model.AccessRequestKeyDto](docs/ModelAccessRequestKeyDto.md)
 - [OpenAPI\Client\Model.AccountEntryArrayWrapper](docs/ModelAccountEntryArrayWrapper.md)
 - [OpenAPI\Client\Model.AccountEntryDto](docs/ModelAccountEntryDto.md)
 - [OpenAPI\Client\Model.AccountInfoArrayWrapper](docs/ModelAccountInfoArrayWrapper.md)
 - [OpenAPI\Client\Model.AccountInfoDto](docs/ModelAccountInfoDto.md)
 - [OpenAPI\Client\Model.AccountLoginType](docs/ModelAccountLoginType.md)
 - [OpenAPI\Client\Model.AccountSearchArea](docs/ModelAccountSearchArea.md)
 - [OpenAPI\Client\Model.AceShortArrayWrapper](docs/ModelAceShortArrayWrapper.md)
 - [OpenAPI\Client\Model.AceShortDto](docs/ModelAceShortDto.md)
 - [OpenAPI\Client\Model.ActionLinkActionRequest](docs/ModelActionLinkActionRequest.md)
 - [OpenAPI\Client\Model.ActionLinkRequest](docs/ModelActionLinkRequest.md)
 - [OpenAPI\Client\Model.ActionType](docs/ModelActionType.md)
 - [OpenAPI\Client\Model.ActiveConnectionsDto](docs/ModelActiveConnectionsDto.md)
 - [OpenAPI\Client\Model.ActiveConnectionsItemDto](docs/ModelActiveConnectionsItemDto.md)
 - [OpenAPI\Client\Model.ActiveConnectionsWrapper](docs/ModelActiveConnectionsWrapper.md)
 - [OpenAPI\Client\Model.ActiveServiceArrayWrapper](docs/ModelActiveServiceArrayWrapper.md)
 - [OpenAPI\Client\Model.ActiveServiceDto](docs/ModelActiveServiceDto.md)
 - [OpenAPI\Client\Model.AdditionalResourcesDto](docs/ModelAdditionalResourcesDto.md)
 - [OpenAPI\Client\Model.AdditionalResourcesWrapper](docs/ModelAdditionalResourcesWrapper.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettingsDto](docs/ModelAdditionalWhiteLabelSettingsDto.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettingsRequestDto](docs/ModelAdditionalWhiteLabelSettingsRequestDto.md)
 - [OpenAPI\Client\Model.AdditionalWhiteLabelSettingsWrapper](docs/ModelAdditionalWhiteLabelSettingsWrapper.md)
 - [OpenAPI\Client\Model.AdminMessageBaseSettingsRequestDto](docs/ModelAdminMessageBaseSettingsRequestDto.md)
 - [OpenAPI\Client\Model.AdminMessageSettingsRequestDto](docs/ModelAdminMessageSettingsRequestDto.md)
 - [OpenAPI\Client\Model.AiActionArgs](docs/ModelAiActionArgs.md)
 - [OpenAPI\Client\Model.AiActionArgsPrompt](docs/ModelAiActionArgsPrompt.md)
 - [OpenAPI\Client\Model.AiActionType](docs/ModelAiActionType.md)
 - [OpenAPI\Client\Model.AiAgentNewItemsDto](docs/ModelAiAgentNewItemsDto.md)
 - [OpenAPI\Client\Model.AiAgentsCreateRequest](docs/ModelAiAgentsCreateRequest.md)
 - [OpenAPI\Client\Model.AiAgentsDeleteRequest](docs/ModelAiAgentsDeleteRequest.md)
 - [OpenAPI\Client\Model.AiAgentsGet200Response](docs/ModelAiAgentsGet200Response.md)
 - [OpenAPI\Client\Model.AiAgentsGet200ResponseAllOfResponse](docs/ModelAiAgentsGet200ResponseAllOfResponse.md)
 - [OpenAPI\Client\Model.AiAgentsResetQuotaRequest](docs/ModelAiAgentsResetQuotaRequest.md)
 - [OpenAPI\Client\Model.AiAgentsUpdateQuotaRequest](docs/ModelAiAgentsUpdateQuotaRequest.md)
 - [OpenAPI\Client\Model.AiAgentsUpdateQuotaRequestRoomIdsInner](docs/ModelAiAgentsUpdateQuotaRequestRoomIdsInner.md)
 - [OpenAPI\Client\Model.AiAgentsUpdateRequest](docs/ModelAiAgentsUpdateRequest.md)
 - [OpenAPI\Client\Model.AiApiDateTime](docs/ModelAiApiDateTime.md)
 - [OpenAPI\Client\Model.AiApproveToolCallRequest](docs/ModelAiApproveToolCallRequest.md)
 - [OpenAPI\Client\Model.AiAssignmentMutationResult](docs/ModelAiAssignmentMutationResult.md)
 - [OpenAPI\Client\Model.AiAssignmentsAssignRequest](docs/ModelAiAssignmentsAssignRequest.md)
 - [OpenAPI\Client\Model.AiAssignmentsCascadeProfileDeleteRequest](docs/ModelAiAssignmentsCascadeProfileDeleteRequest.md)
 - [OpenAPI\Client\Model.AiAttachment](docs/ModelAiAttachment.md)
 - [OpenAPI\Client\Model.AiAttachmentFormKeysInner](docs/ModelAiAttachmentFormKeysInner.md)
 - [OpenAPI\Client\Model.AiAttachmentsLinkToMessageRequest](docs/ModelAiAttachmentsLinkToMessageRequest.md)
 - [OpenAPI\Client\Model.AiAttachmentsSaveFileRequest](docs/ModelAiAttachmentsSaveFileRequest.md)
 - [OpenAPI\Client\Model.AiAttachmentsSaveFileRequestInput](docs/ModelAiAttachmentsSaveFileRequestInput.md)
 - [OpenAPI\Client\Model.AiAttachmentsSaveFilesManyRequest](docs/ModelAiAttachmentsSaveFilesManyRequest.md)
 - [OpenAPI\Client\Model.AiBuiltinProviderType](docs/ModelAiBuiltinProviderType.md)
 - [OpenAPI\Client\Model.AiBulkAssignmentResult](docs/ModelAiBulkAssignmentResult.md)
 - [OpenAPI\Client\Model.AiBulkAssignmentResultErrorsInner](docs/ModelAiBulkAssignmentResultErrorsInner.md)
 - [OpenAPI\Client\Model.AiChatEvent](docs/ModelAiChatEvent.md)
 - [OpenAPI\Client\Model.AiChatPriceDto](docs/ModelAiChatPriceDto.md)
 - [OpenAPI\Client\Model.AiChatSettingsDto](docs/ModelAiChatSettingsDto.md)
 - [OpenAPI\Client\Model.AiChatToolPermissionMode](docs/ModelAiChatToolPermissionMode.md)
 - [OpenAPI\Client\Model.AiChatToolPrefsScope](docs/ModelAiChatToolPrefsScope.md)
 - [OpenAPI\Client\Model.AiConfigDto](docs/ModelAiConfigDto.md)
 - [OpenAPI\Client\Model.AiCreateProfileInput](docs/ModelAiCreateProfileInput.md)
 - [OpenAPI\Client\Model.AiCreatePromptInput](docs/ModelAiCreatePromptInput.md)
 - [OpenAPI\Client\Model.AiDistributedTaskStatus](docs/ModelAiDistributedTaskStatus.md)
 - [OpenAPI\Client\Model.AiEditorToolsCall200Response](docs/ModelAiEditorToolsCall200Response.md)
 - [OpenAPI\Client\Model.AiEditorToolsCallRequest](docs/ModelAiEditorToolsCallRequest.md)
 - [OpenAPI\Client\Model.AiEditorToolsList200Response](docs/ModelAiEditorToolsList200Response.md)
 - [OpenAPI\Client\Model.AiEditorToolsList200ResponseToolsInner](docs/ModelAiEditorToolsList200ResponseToolsInner.md)
 - [OpenAPI\Client\Model.AiEmbeddingPriceDto](docs/ModelAiEmbeddingPriceDto.md)
 - [OpenAPI\Client\Model.AiEmbeddingProviderType](docs/ModelAiEmbeddingProviderType.md)
 - [OpenAPI\Client\Model.AiEmployeeDto](docs/ModelAiEmployeeDto.md)
 - [OpenAPI\Client\Model.AiEntryMetadata](docs/ModelAiEntryMetadata.md)
 - [OpenAPI\Client\Model.AiEntryMetadataCustomFieldsInner](docs/ModelAiEntryMetadataCustomFieldsInner.md)
 - [OpenAPI\Client\Model.AiEntryMetadataField](docs/ModelAiEntryMetadataField.md)
 - [OpenAPI\Client\Model.AiEntryMetadataFieldOptionsInner](docs/ModelAiEntryMetadataFieldOptionsInner.md)
 - [OpenAPI\Client\Model.AiEntryMetadataTemplatesInner](docs/ModelAiEntryMetadataTemplatesInner.md)
 - [OpenAPI\Client\Model.AiEntryPricingDtoAiChatPriceDto](docs/ModelAiEntryPricingDtoAiChatPriceDto.md)
 - [OpenAPI\Client\Model.AiEntryPricingDtoAiEmbeddingPriceDto](docs/ModelAiEntryPricingDtoAiEmbeddingPriceDto.md)
 - [OpenAPI\Client\Model.AiEntryPricingDtoAiImagePriceDto](docs/ModelAiEntryPricingDtoAiImagePriceDto.md)
 - [OpenAPI\Client\Model.AiEntryPricingDtoDecimal](docs/ModelAiEntryPricingDtoDecimal.md)
 - [OpenAPI\Client\Model.AiErrorCode](docs/ModelAiErrorCode.md)
 - [OpenAPI\Client\Model.AiErrorData](docs/ModelAiErrorData.md)
 - [OpenAPI\Client\Model.AiErrorResponse](docs/ModelAiErrorResponse.md)
 - [OpenAPI\Client\Model.AiExportTextToDocx202Response](docs/ModelAiExportTextToDocx202Response.md)
 - [OpenAPI\Client\Model.AiExportTextToDocxRequest](docs/ModelAiExportTextToDocxRequest.md)
 - [OpenAPI\Client\Model.AiExportTextToDocxRequestFolderId](docs/ModelAiExportTextToDocxRequestFolderId.md)
 - [OpenAPI\Client\Model.AiFileEntryBaseDto](docs/ModelAiFileEntryBaseDto.md)
 - [OpenAPI\Client\Model.AiFileEntryDto](docs/ModelAiFileEntryDto.md)
 - [OpenAPI\Client\Model.AiFileEntryDtoAllOfAvailableShareRights](docs/ModelAiFileEntryDtoAllOfAvailableShareRights.md)
 - [OpenAPI\Client\Model.AiFileEntryDtoAllOfSecurity](docs/ModelAiFileEntryDtoAllOfSecurity.md)
 - [OpenAPI\Client\Model.AiFileEntryDtoAllOfShareSettings](docs/ModelAiFileEntryDtoAllOfShareSettings.md)
 - [OpenAPI\Client\Model.AiFileEntryType](docs/ModelAiFileEntryType.md)
 - [OpenAPI\Client\Model.AiFileOperationDto](docs/ModelAiFileOperationDto.md)
 - [OpenAPI\Client\Model.AiFileOperationType](docs/ModelAiFileOperationType.md)
 - [OpenAPI\Client\Model.AiFileOperationWrapper](docs/ModelAiFileOperationWrapper.md)
 - [OpenAPI\Client\Model.AiFileShare](docs/ModelAiFileShare.md)
 - [OpenAPI\Client\Model.AiFolderArrayWrapper](docs/ModelAiFolderArrayWrapper.md)
 - [OpenAPI\Client\Model.AiFolderContentDto](docs/ModelAiFolderContentDto.md)
 - [OpenAPI\Client\Model.AiFolderContentWrapper](docs/ModelAiFolderContentWrapper.md)
 - [OpenAPI\Client\Model.AiFolderDto](docs/ModelAiFolderDto.md)
 - [OpenAPI\Client\Model.AiFolderMutationResult](docs/ModelAiFolderMutationResult.md)
 - [OpenAPI\Client\Model.AiFolderType](docs/ModelAiFolderType.md)
 - [OpenAPI\Client\Model.AiFolderWrapper](docs/ModelAiFolderWrapper.md)
 - [OpenAPI\Client\Model.AiImagePriceDto](docs/ModelAiImagePriceDto.md)
 - [OpenAPI\Client\Model.AiImportError](docs/ModelAiImportError.md)
 - [OpenAPI\Client\Model.AiImportMode](docs/ModelAiImportMode.md)
 - [OpenAPI\Client\Model.AiImportResult](docs/ModelAiImportResult.md)
 - [OpenAPI\Client\Model.AiImportResultImported](docs/ModelAiImportResultImported.md)
 - [OpenAPI\Client\Model.AiLogoCoverDto](docs/ModelAiLogoCoverDto.md)
 - [OpenAPI\Client\Model.AiLogoDto](docs/ModelAiLogoDto.md)
 - [OpenAPI\Client\Model.AiMCPItem](docs/ModelAiMCPItem.md)
 - [OpenAPI\Client\Model.AiMetaFill200Response](docs/ModelAiMetaFill200Response.md)
 - [OpenAPI\Client\Model.AiMetaFill200ResponseFilledInner](docs/ModelAiMetaFill200ResponseFilledInner.md)
 - [OpenAPI\Client\Model.AiMetaFill200ResponseFilledInnerValue](docs/ModelAiMetaFill200ResponseFilledInnerValue.md)
 - [OpenAPI\Client\Model.AiMetaFill200ResponseSourcesInner](docs/ModelAiMetaFill200ResponseSourcesInner.md)
 - [OpenAPI\Client\Model.AiMetaFill200ResponseUnresolvedInner](docs/ModelAiMetaFill200ResponseUnresolvedInner.md)
 - [OpenAPI\Client\Model.AiMetaFillRequest](docs/ModelAiMetaFillRequest.md)
 - [OpenAPI\Client\Model.AiMetaGenerate200Response](docs/ModelAiMetaGenerate200Response.md)
 - [OpenAPI\Client\Model.AiMetaGenerate200ResponseFieldsInner](docs/ModelAiMetaGenerate200ResponseFieldsInner.md)
 - [OpenAPI\Client\Model.AiMetaGenerate200ResponseSkippedInner](docs/ModelAiMetaGenerate200ResponseSkippedInner.md)
 - [OpenAPI\Client\Model.AiMetaGenerate200ResponseSourcesInner](docs/ModelAiMetaGenerate200ResponseSourcesInner.md)
 - [OpenAPI\Client\Model.AiMetaGenerate402Response](docs/ModelAiMetaGenerate402Response.md)
 - [OpenAPI\Client\Model.AiMetaGenerateRequest](docs/ModelAiMetaGenerateRequest.md)
 - [OpenAPI\Client\Model.AiMetaGenerateRequestId](docs/ModelAiMetaGenerateRequestId.md)
 - [OpenAPI\Client\Model.AiMetadataMatchDto](docs/ModelAiMetadataMatchDto.md)
 - [OpenAPI\Client\Model.AiMetadataValue](docs/ModelAiMetadataValue.md)
 - [OpenAPI\Client\Model.AiModel](docs/ModelAiModel.md)
 - [OpenAPI\Client\Model.AiNewItemsAgentNewItemsArrayWrapper](docs/ModelAiNewItemsAgentNewItemsArrayWrapper.md)
 - [OpenAPI\Client\Model.AiNewItemsDtoAgentNewItemsDto](docs/ModelAiNewItemsDtoAgentNewItemsDto.md)
 - [OpenAPI\Client\Model.AiOpenAIChatCompletionChunk](docs/ModelAiOpenAIChatCompletionChunk.md)
 - [OpenAPI\Client\Model.AiOpenAIChoiceDelta](docs/ModelAiOpenAIChoiceDelta.md)
 - [OpenAPI\Client\Model.AiOpenAIChunkChoice](docs/ModelAiOpenAIChunkChoice.md)
 - [OpenAPI\Client\Model.AiOpenAIFinishReason](docs/ModelAiOpenAIFinishReason.md)
 - [OpenAPI\Client\Model.AiOpenAIStreamChunk](docs/ModelAiOpenAIStreamChunk.md)
 - [OpenAPI\Client\Model.AiOpenAIStreamError](docs/ModelAiOpenAIStreamError.md)
 - [OpenAPI\Client\Model.AiOpenAIStreamErrorError](docs/ModelAiOpenAIStreamErrorError.md)
 - [OpenAPI\Client\Model.AiOpenAIToolCallDelta](docs/ModelAiOpenAIToolCallDelta.md)
 - [OpenAPI\Client\Model.AiOpenAIToolCallDeltaFunction](docs/ModelAiOpenAIToolCallDeltaFunction.md)
 - [OpenAPI\Client\Model.AiOpenOrCreateResult](docs/ModelAiOpenOrCreateResult.md)
 - [OpenAPI\Client\Model.AiOpenaiChatCompletions403Response](docs/ModelAiOpenaiChatCompletions403Response.md)
 - [OpenAPI\Client\Model.AiOpenaiChatCompletions403ResponseError](docs/ModelAiOpenaiChatCompletions403ResponseError.md)
 - [OpenAPI\Client\Model.AiOpenaiImagesGenerations403Response](docs/ModelAiOpenaiImagesGenerations403Response.md)
 - [OpenAPI\Client\Model.AiOpenaiImagesGenerations403ResponseError](docs/ModelAiOpenaiImagesGenerations403ResponseError.md)
 - [OpenAPI\Client\Model.AiPreferencesSetDeepModeRequest](docs/ModelAiPreferencesSetDeepModeRequest.md)
 - [OpenAPI\Client\Model.AiPreferencesSetReasoningLevelRequest](docs/ModelAiPreferencesSetReasoningLevelRequest.md)
 - [OpenAPI\Client\Model.AiPreferencesSetToolPermissionModeRequest](docs/ModelAiPreferencesSetToolPermissionModeRequest.md)
 - [OpenAPI\Client\Model.AiPriceCurrencyDto](docs/ModelAiPriceCurrencyDto.md)
 - [OpenAPI\Client\Model.AiPricesDto](docs/ModelAiPricesDto.md)
 - [OpenAPI\Client\Model.AiPricesWrapper](docs/ModelAiPricesWrapper.md)
 - [OpenAPI\Client\Model.AiProfile](docs/ModelAiProfile.md)
 - [OpenAPI\Client\Model.AiProfileMutationResult](docs/ModelAiProfileMutationResult.md)
 - [OpenAPI\Client\Model.AiProfilesCreate400Response](docs/ModelAiProfilesCreate400Response.md)
 - [OpenAPI\Client\Model.AiProfilesGetById200Response](docs/ModelAiProfilesGetById200Response.md)
 - [OpenAPI\Client\Model.AiProfilesListProviderModels400Response](docs/ModelAiProfilesListProviderModels400Response.md)
 - [OpenAPI\Client\Model.AiProfilesListProviderModels400ResponseAnyOf](docs/ModelAiProfilesListProviderModels400ResponseAnyOf.md)
 - [OpenAPI\Client\Model.AiProfilesListProviderModelsRequest](docs/ModelAiProfilesListProviderModelsRequest.md)
 - [OpenAPI\Client\Model.AiProfilesTestConnection200Response](docs/ModelAiProfilesTestConnection200Response.md)
 - [OpenAPI\Client\Model.AiProfilesTestConnection200ResponseAnyOf](docs/ModelAiProfilesTestConnection200ResponseAnyOf.md)
 - [OpenAPI\Client\Model.AiPrompt](docs/ModelAiPrompt.md)
 - [OpenAPI\Client\Model.AiPromptBundle](docs/ModelAiPromptBundle.md)
 - [OpenAPI\Client\Model.AiPromptFolder](docs/ModelAiPromptFolder.md)
 - [OpenAPI\Client\Model.AiPromptMutationResult](docs/ModelAiPromptMutationResult.md)
 - [OpenAPI\Client\Model.AiPromptsImportBundleRequest](docs/ModelAiPromptsImportBundleRequest.md)
 - [OpenAPI\Client\Model.AiPromptsImportBundleRequestOptions](docs/ModelAiPromptsImportBundleRequestOptions.md)
 - [OpenAPI\Client\Model.AiPromptsMoveRequest](docs/ModelAiPromptsMoveRequest.md)
 - [OpenAPI\Client\Model.AiPromptsRenameFolderRequest](docs/ModelAiPromptsRenameFolderRequest.md)
 - [OpenAPI\Client\Model.AiPromptsUpdateRequest](docs/ModelAiPromptsUpdateRequest.md)
 - [OpenAPI\Client\Model.AiPromptsUpdateRequestUpdates](docs/ModelAiPromptsUpdateRequestUpdates.md)
 - [OpenAPI\Client\Model.AiProvider](docs/ModelAiProvider.md)
 - [OpenAPI\Client\Model.AiProviderType](docs/ModelAiProviderType.md)
 - [OpenAPI\Client\Model.AiReasoningDepth](docs/ModelAiReasoningDepth.md)
 - [OpenAPI\Client\Model.AiReasoningLevel](docs/ModelAiReasoningLevel.md)
 - [OpenAPI\Client\Model.AiReasoningSupport](docs/ModelAiReasoningSupport.md)
 - [OpenAPI\Client\Model.AiRegenerateStreamRequest](docs/ModelAiRegenerateStreamRequest.md)
 - [OpenAPI\Client\Model.AiResolvedAssignment](docs/ModelAiResolvedAssignment.md)
 - [OpenAPI\Client\Model.AiRoomDataLifetimeDto](docs/ModelAiRoomDataLifetimeDto.md)
 - [OpenAPI\Client\Model.AiRoomDataLifetimePeriod](docs/ModelAiRoomDataLifetimePeriod.md)
 - [OpenAPI\Client\Model.AiRoomType](docs/ModelAiRoomType.md)
 - [OpenAPI\Client\Model.AiSendCustomRequest](docs/ModelAiSendCustomRequest.md)
 - [OpenAPI\Client\Model.AiSendRequest](docs/ModelAiSendRequest.md)
 - [OpenAPI\Client\Model.AiSendStreamBody](docs/ModelAiSendStreamBody.md)
 - [OpenAPI\Client\Model.AiSettingsDto](docs/ModelAiSettingsDto.md)
 - [OpenAPI\Client\Model.AiSettingsWrapper](docs/ModelAiSettingsWrapper.md)
 - [OpenAPI\Client\Model.AiSuccessResponse](docs/ModelAiSuccessResponse.md)
 - [OpenAPI\Client\Model.AiThread](docs/ModelAiThread.md)
 - [OpenAPI\Client\Model.AiThreadMessageLike](docs/ModelAiThreadMessageLike.md)
 - [OpenAPI\Client\Model.AiThreadMessageLikeContent](docs/ModelAiThreadMessageLikeContent.md)
 - [OpenAPI\Client\Model.AiThreadMessageLikeContentAnyOfInner](docs/ModelAiThreadMessageLikeContentAnyOfInner.md)
 - [OpenAPI\Client\Model.AiThreadMessageLikeStatus](docs/ModelAiThreadMessageLikeStatus.md)
 - [OpenAPI\Client\Model.AiThreadsAppendUserMessage200Response](docs/ModelAiThreadsAppendUserMessage200Response.md)
 - [OpenAPI\Client\Model.AiThreadsAppendUserMessageRequest](docs/ModelAiThreadsAppendUserMessageRequest.md)
 - [OpenAPI\Client\Model.AiThreadsCreateRequest](docs/ModelAiThreadsCreateRequest.md)
 - [OpenAPI\Client\Model.AiThreadsOpenOrCreateRequest](docs/ModelAiThreadsOpenOrCreateRequest.md)
 - [OpenAPI\Client\Model.AiThreadsOpenOrCreateRequestEntityMeta](docs/ModelAiThreadsOpenOrCreateRequestEntityMeta.md)
 - [OpenAPI\Client\Model.AiThreadsRegenerateTitle200Response](docs/ModelAiThreadsRegenerateTitle200Response.md)
 - [OpenAPI\Client\Model.AiThreadsRegenerateTitleRequest](docs/ModelAiThreadsRegenerateTitleRequest.md)
 - [OpenAPI\Client\Model.AiThreadsRenameRequest](docs/ModelAiThreadsRenameRequest.md)
 - [OpenAPI\Client\Model.AiThreadsTouchRequest](docs/ModelAiThreadsTouchRequest.md)
 - [OpenAPI\Client\Model.AiThreadsUpdateMessageRequest](docs/ModelAiThreadsUpdateMessageRequest.md)
 - [OpenAPI\Client\Model.AiToolAnnotations](docs/ModelAiToolAnnotations.md)
 - [OpenAPI\Client\Model.AiToolCallData](docs/ModelAiToolCallData.md)
 - [OpenAPI\Client\Model.AiToolPermissionMode](docs/ModelAiToolPermissionMode.md)
 - [OpenAPI\Client\Model.AiToolsAddCustomServerRequest](docs/ModelAiToolsAddCustomServerRequest.md)
 - [OpenAPI\Client\Model.AiToolsBulkResult](docs/ModelAiToolsBulkResult.md)
 - [OpenAPI\Client\Model.AiToolsBulkResultErrorsInner](docs/ModelAiToolsBulkResultErrorsInner.md)
 - [OpenAPI\Client\Model.AiToolsListSystemTools200Response](docs/ModelAiToolsListSystemTools200Response.md)
 - [OpenAPI\Client\Model.AiToolsMutationResult](docs/ModelAiToolsMutationResult.md)
 - [OpenAPI\Client\Model.AiToolsRemoveCustomServerRequest](docs/ModelAiToolsRemoveCustomServerRequest.md)
 - [OpenAPI\Client\Model.AiToolsReplaceAllCustomServersRequest](docs/ModelAiToolsReplaceAllCustomServersRequest.md)
 - [OpenAPI\Client\Model.AiToolsSetAllowAlwaysRequest](docs/ModelAiToolsSetAllowAlwaysRequest.md)
 - [OpenAPI\Client\Model.AiToolsSetDisabledRequest](docs/ModelAiToolsSetDisabledRequest.md)
 - [OpenAPI\Client\Model.AiToolsUpdateCustomServerRequest](docs/ModelAiToolsUpdateCustomServerRequest.md)
 - [OpenAPI\Client\Model.AiUserSettingsDto](docs/ModelAiUserSettingsDto.md)
 - [OpenAPI\Client\Model.AiUserSettingsWrapper](docs/ModelAiUserSettingsWrapper.md)
 - [OpenAPI\Client\Model.AiVectorizationSettingsDto](docs/ModelAiVectorizationSettingsDto.md)
 - [OpenAPI\Client\Model.AiVectorizationSettingsWrapper](docs/ModelAiVectorizationSettingsWrapper.md)
 - [OpenAPI\Client\Model.AiVectorizationStartTask200Response](docs/ModelAiVectorizationStartTask200Response.md)
 - [OpenAPI\Client\Model.AiVectorizationStartTaskRequest](docs/ModelAiVectorizationStartTaskRequest.md)
 - [OpenAPI\Client\Model.AiWatermarkAdditions](docs/ModelAiWatermarkAdditions.md)
 - [OpenAPI\Client\Model.AiWatermarkDto](docs/ModelAiWatermarkDto.md)
 - [OpenAPI\Client\Model.AiWebSearchConfig](docs/ModelAiWebSearchConfig.md)
 - [OpenAPI\Client\Model.AiWebSearchConfigure400Response](docs/ModelAiWebSearchConfigure400Response.md)
 - [OpenAPI\Client\Model.AiWebSearchConfigureRequest](docs/ModelAiWebSearchConfigureRequest.md)
 - [OpenAPI\Client\Model.AiWebSearchMutationResult](docs/ModelAiWebSearchMutationResult.md)
 - [OpenAPI\Client\Model.AiWebSearchSetActiveConfigRequest](docs/ModelAiWebSearchSetActiveConfigRequest.md)
 - [OpenAPI\Client\Model.AmazonS3RegionArrayWrapper](docs/ModelAmazonS3RegionArrayWrapper.md)
 - [OpenAPI\Client\Model.AmazonS3RegionDto](docs/ModelAmazonS3RegionDto.md)
 - [OpenAPI\Client\Model.AnonymousConfigDto](docs/ModelAnonymousConfigDto.md)
 - [OpenAPI\Client\Model.ApiDateTime](docs/ModelApiDateTime.md)
 - [OpenAPI\Client\Model.ApiKeyResponseArrayWrapper](docs/ModelApiKeyResponseArrayWrapper.md)
 - [OpenAPI\Client\Model.ApiKeyResponseDto](docs/ModelApiKeyResponseDto.md)
 - [OpenAPI\Client\Model.ApiKeyResponseWrapper](docs/ModelApiKeyResponseWrapper.md)
 - [OpenAPI\Client\Model.AppArrayWrapper](docs/ModelAppArrayWrapper.md)
 - [OpenAPI\Client\Model.AppDto](docs/ModelAppDto.md)
 - [OpenAPI\Client\Model.AppWrapper](docs/ModelAppWrapper.md)
 - [OpenAPI\Client\Model.ApplyFilterOption](docs/ModelApplyFilterOption.md)
 - [OpenAPI\Client\Model.ArchiveRoomRequest](docs/ModelArchiveRoomRequest.md)
 - [OpenAPI\Client\Model.ArrayArrayWrapper](docs/ModelArrayArrayWrapper.md)
 - [OpenAPI\Client\Model.AssignMetadataTemplates](docs/ModelAssignMetadataTemplates.md)
 - [OpenAPI\Client\Model.AuditEventArrayWrapper](docs/ModelAuditEventArrayWrapper.md)
 - [OpenAPI\Client\Model.AuditEventDto](docs/ModelAuditEventDto.md)
 - [OpenAPI\Client\Model.AuditReportFormat](docs/ModelAuditReportFormat.md)
 - [OpenAPI\Client\Model.AuditTrailActionDto](docs/ModelAuditTrailActionDto.md)
 - [OpenAPI\Client\Model.AuditTrailModuleDto](docs/ModelAuditTrailModuleDto.md)
 - [OpenAPI\Client\Model.AuditTrailProductArrayWrapper](docs/ModelAuditTrailProductArrayWrapper.md)
 - [OpenAPI\Client\Model.AuditTrailProductDto](docs/ModelAuditTrailProductDto.md)
 - [OpenAPI\Client\Model.AuditTrailTypesDto](docs/ModelAuditTrailTypesDto.md)
 - [OpenAPI\Client\Model.AuditTrailTypesWrapper](docs/ModelAuditTrailTypesWrapper.md)
 - [OpenAPI\Client\Model.AuthKeyDto](docs/ModelAuthKeyDto.md)
 - [OpenAPI\Client\Model.AuthKeyRequest](docs/ModelAuthKeyRequest.md)
 - [OpenAPI\Client\Model.AuthRequestDto](docs/ModelAuthRequestDto.md)
 - [OpenAPI\Client\Model.AuthServiceArrayWrapper](docs/ModelAuthServiceArrayWrapper.md)
 - [OpenAPI\Client\Model.AuthServiceDto](docs/ModelAuthServiceDto.md)
 - [OpenAPI\Client\Model.AuthWithCodeRequestDto](docs/ModelAuthWithCodeRequestDto.md)
 - [OpenAPI\Client\Model.AuthenticationTokenDto](docs/ModelAuthenticationTokenDto.md)
 - [OpenAPI\Client\Model.AuthenticationTokenWrapper](docs/ModelAuthenticationTokenWrapper.md)
 - [OpenAPI\Client\Model.AutoCleanUpDataDto](docs/ModelAutoCleanUpDataDto.md)
 - [OpenAPI\Client\Model.AutoCleanUpDataWrapper](docs/ModelAutoCleanUpDataWrapper.md)
 - [OpenAPI\Client\Model.AutoCleanupRequestDto](docs/ModelAutoCleanupRequestDto.md)
 - [OpenAPI\Client\Model.BackupCronRequest](docs/ModelBackupCronRequest.md)
 - [OpenAPI\Client\Model.BackupHistoryRecordArrayWrapper](docs/ModelBackupHistoryRecordArrayWrapper.md)
 - [OpenAPI\Client\Model.BackupHistoryRecordDto](docs/ModelBackupHistoryRecordDto.md)
 - [OpenAPI\Client\Model.BackupPeriod](docs/ModelBackupPeriod.md)
 - [OpenAPI\Client\Model.BackupProgressDto](docs/ModelBackupProgressDto.md)
 - [OpenAPI\Client\Model.BackupProgressEnum](docs/ModelBackupProgressEnum.md)
 - [OpenAPI\Client\Model.BackupProgressWrapper](docs/ModelBackupProgressWrapper.md)
 - [OpenAPI\Client\Model.BackupServiceStateDto](docs/ModelBackupServiceStateDto.md)
 - [OpenAPI\Client\Model.BackupServiceStateWrapper](docs/ModelBackupServiceStateWrapper.md)
 - [OpenAPI\Client\Model.BackupStorageType](docs/ModelBackupStorageType.md)
 - [OpenAPI\Client\Model.BackupsCountResultDto](docs/ModelBackupsCountResultDto.md)
 - [OpenAPI\Client\Model.BackupsCountResultWrapper](docs/ModelBackupsCountResultWrapper.md)
 - [OpenAPI\Client\Model.BalanceDto](docs/ModelBalanceDto.md)
 - [OpenAPI\Client\Model.BalanceWrapper](docs/ModelBalanceWrapper.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDto](docs/ModelBaseBatchRequestDto.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDtoAllOfFileIds](docs/ModelBaseBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.BaseBatchRequestDtoAllOfFolderIds](docs/ModelBaseBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.BatchRequestDto](docs/ModelBatchRequestDto.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfDestFolderId](docs/ModelBatchRequestDtoAllOfDestFolderId.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfFileIds](docs/ModelBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.BatchRequestDtoAllOfFolderIds](docs/ModelBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.BatchTagsRequestDto](docs/ModelBatchTagsRequestDto.md)
 - [OpenAPI\Client\Model.BooleanWrapper](docs/ModelBooleanWrapper.md)
 - [OpenAPI\Client\Model.CapabilitiesDto](docs/ModelCapabilitiesDto.md)
 - [OpenAPI\Client\Model.CapabilitiesWrapper](docs/ModelCapabilitiesWrapper.md)
 - [OpenAPI\Client\Model.ChangeClientActivationRequest](docs/ModelChangeClientActivationRequest.md)
 - [OpenAPI\Client\Model.ChangeEmailRequest](docs/ModelChangeEmailRequest.md)
 - [OpenAPI\Client\Model.ChangeHistoryRequest](docs/ModelChangeHistoryRequest.md)
 - [OpenAPI\Client\Model.ChangeOwnerRequestDto](docs/ModelChangeOwnerRequestDto.md)
 - [OpenAPI\Client\Model.ChangePasswordRequest](docs/ModelChangePasswordRequest.md)
 - [OpenAPI\Client\Model.ChangeWalletServiceStateRequestDto](docs/ModelChangeWalletServiceStateRequestDto.md)
 - [OpenAPI\Client\Model.ChatSettings](docs/ModelChatSettings.md)
 - [OpenAPI\Client\Model.ChatSettingsDto](docs/ModelChatSettingsDto.md)
 - [OpenAPI\Client\Model.CheckConfirmRequestDto](docs/ModelCheckConfirmRequestDto.md)
 - [OpenAPI\Client\Model.CheckConversionRequestDto](docs/ModelCheckConversionRequestDto.md)
 - [OpenAPI\Client\Model.CheckDestFolderDto](docs/ModelCheckDestFolderDto.md)
 - [OpenAPI\Client\Model.CheckDestFolderResult](docs/ModelCheckDestFolderResult.md)
 - [OpenAPI\Client\Model.CheckDestFolderWrapper](docs/ModelCheckDestFolderWrapper.md)
 - [OpenAPI\Client\Model.CheckDocServiceUrlRequestDto](docs/ModelCheckDocServiceUrlRequestDto.md)
 - [OpenAPI\Client\Model.CheckFillFormDraftRequest](docs/ModelCheckFillFormDraftRequest.md)
 - [OpenAPI\Client\Model.CheckMoveOrCopyBatchItemsDestFolderIdParameter](docs/ModelCheckMoveOrCopyBatchItemsDestFolderIdParameter.md)
 - [OpenAPI\Client\Model.CheckMoveOrCopyBatchItemsFolderIdsParameterInner](docs/ModelCheckMoveOrCopyBatchItemsFolderIdsParameterInner.md)
 - [OpenAPI\Client\Model.CheckUploadRequest](docs/ModelCheckUploadRequest.md)
 - [OpenAPI\Client\Model.ChunkedUploadSessionDto](docs/ModelChunkedUploadSessionDto.md)
 - [OpenAPI\Client\Model.ChunkedUploadSessionResultDto](docs/ModelChunkedUploadSessionResultDto.md)
 - [OpenAPI\Client\Model.ChunkedUploadSessionResultWrapper](docs/ModelChunkedUploadSessionResultWrapper.md)
 - [OpenAPI\Client\Model.ChunkedUploadSessionWrapper](docs/ModelChunkedUploadSessionWrapper.md)
 - [OpenAPI\Client\Model.ClientInfoResponse](docs/ModelClientInfoResponse.md)
 - [OpenAPI\Client\Model.ClientResponse](docs/ModelClientResponse.md)
 - [OpenAPI\Client\Model.ClientSecretResponse](docs/ModelClientSecretResponse.md)
 - [OpenAPI\Client\Model.CoEditingConfigDto](docs/ModelCoEditingConfigDto.md)
 - [OpenAPI\Client\Model.CoEditingConfigMode](docs/ModelCoEditingConfigMode.md)
 - [OpenAPI\Client\Model.ColorThemeColorsDto](docs/ModelColorThemeColorsDto.md)
 - [OpenAPI\Client\Model.ColorThemeColorsRequestDto](docs/ModelColorThemeColorsRequestDto.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsDto](docs/ModelCompanyWhiteLabelSettingsDto.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsRequestDto](docs/ModelCompanyWhiteLabelSettingsRequestDto.md)
 - [OpenAPI\Client\Model.CompanyWhiteLabelSettingsWrapper](docs/ModelCompanyWhiteLabelSettingsWrapper.md)
 - [OpenAPI\Client\Model.ConfigurationDto](docs/ModelConfigurationDto.md)
 - [OpenAPI\Client\Model.ConfigurationWrapper](docs/ModelConfigurationWrapper.md)
 - [OpenAPI\Client\Model.ConfirmData](docs/ModelConfirmData.md)
 - [OpenAPI\Client\Model.ConfirmDto](docs/ModelConfirmDto.md)
 - [OpenAPI\Client\Model.ConfirmType](docs/ModelConfirmType.md)
 - [OpenAPI\Client\Model.ConfirmWrapper](docs/ModelConfirmWrapper.md)
 - [OpenAPI\Client\Model.ConnectionTestResultDto](docs/ModelConnectionTestResultDto.md)
 - [OpenAPI\Client\Model.ConnectionTestResultWrapper](docs/ModelConnectionTestResultWrapper.md)
 - [OpenAPI\Client\Model.Contact](docs/ModelContact.md)
 - [OpenAPI\Client\Model.ConversationResultArrayWrapper](docs/ModelConversationResultArrayWrapper.md)
 - [OpenAPI\Client\Model.ConversationResultDto](docs/ModelConversationResultDto.md)
 - [OpenAPI\Client\Model.ConvertDocumentLayoutRequest](docs/ModelConvertDocumentLayoutRequest.md)
 - [OpenAPI\Client\Model.ConvertDocumentRendererRequest](docs/ModelConvertDocumentRendererRequest.md)
 - [OpenAPI\Client\Model.ConvertFileRequestDto](docs/ModelConvertFileRequestDto.md)
 - [OpenAPI\Client\Model.ConvertPdfRequest](docs/ModelConvertPdfRequest.md)
 - [OpenAPI\Client\Model.ConvertSpreadsheetLayoutRequest](docs/ModelConvertSpreadsheetLayoutRequest.md)
 - [OpenAPI\Client\Model.ConvertSpreadsheetMarginsRequest](docs/ModelConvertSpreadsheetMarginsRequest.md)
 - [OpenAPI\Client\Model.ConvertSpreadsheetPageSizeRequest](docs/ModelConvertSpreadsheetPageSizeRequest.md)
 - [OpenAPI\Client\Model.ConvertThumbnailRequest](docs/ModelConvertThumbnailRequest.md)
 - [OpenAPI\Client\Model.CookieSettingsDto](docs/ModelCookieSettingsDto.md)
 - [OpenAPI\Client\Model.CookieSettingsRequestDto](docs/ModelCookieSettingsRequestDto.md)
 - [OpenAPI\Client\Model.CookieSettingsWrapper](docs/ModelCookieSettingsWrapper.md)
 - [OpenAPI\Client\Model.CopyAsRequest](docs/ModelCopyAsRequest.md)
 - [OpenAPI\Client\Model.CopyAsRequestDestFolderId](docs/ModelCopyAsRequestDestFolderId.md)
 - [OpenAPI\Client\Model.CoverRequestDto](docs/ModelCoverRequestDto.md)
 - [OpenAPI\Client\Model.CoversResultArrayWrapper](docs/ModelCoversResultArrayWrapper.md)
 - [OpenAPI\Client\Model.CoversResultDto](docs/ModelCoversResultDto.md)
 - [OpenAPI\Client\Model.CreateApiKeyRequestDto](docs/ModelCreateApiKeyRequestDto.md)
 - [OpenAPI\Client\Model.CreateBackupScheduleRequestDto](docs/ModelCreateBackupScheduleRequestDto.md)
 - [OpenAPI\Client\Model.CreateClientRequest](docs/ModelCreateClientRequest.md)
 - [OpenAPI\Client\Model.CreateFileRequest](docs/ModelCreateFileRequest.md)
 - [OpenAPI\Client\Model.CreateFileRequestTemplateId](docs/ModelCreateFileRequestTemplateId.md)
 - [OpenAPI\Client\Model.CreateFolderRequest](docs/ModelCreateFolderRequest.md)
 - [OpenAPI\Client\Model.CreateMetadataTemplateRequestDto](docs/ModelCreateMetadataTemplateRequestDto.md)
 - [OpenAPI\Client\Model.CreateRoomFromTemplateDto](docs/ModelCreateRoomFromTemplateDto.md)
 - [OpenAPI\Client\Model.CreateRoomRequestDto](docs/ModelCreateRoomRequestDto.md)
 - [OpenAPI\Client\Model.CreateServiceLimitRequestDto](docs/ModelCreateServiceLimitRequestDto.md)
 - [OpenAPI\Client\Model.CreateTagRequestDto](docs/ModelCreateTagRequestDto.md)
 - [OpenAPI\Client\Model.CreateTextOrHtmlFileRequest](docs/ModelCreateTextOrHtmlFileRequest.md)
 - [OpenAPI\Client\Model.CreateThirdPartyRoomRequest](docs/ModelCreateThirdPartyRoomRequest.md)
 - [OpenAPI\Client\Model.CreateWebhooksConfigRequestDto](docs/ModelCreateWebhooksConfigRequestDto.md)
 - [OpenAPI\Client\Model.CronParamsDto](docs/ModelCronParamsDto.md)
 - [OpenAPI\Client\Model.CspDto](docs/ModelCspDto.md)
 - [OpenAPI\Client\Model.CspRequestDto](docs/ModelCspRequestDto.md)
 - [OpenAPI\Client\Model.CspWrapper](docs/ModelCspWrapper.md)
 - [OpenAPI\Client\Model.CurrenciesArrayWrapper](docs/ModelCurrenciesArrayWrapper.md)
 - [OpenAPI\Client\Model.CurrenciesDto](docs/ModelCurrenciesDto.md)
 - [OpenAPI\Client\Model.CurrentLicenseInfo](docs/ModelCurrentLicenseInfo.md)
 - [OpenAPI\Client\Model.CustomColorThemeDto](docs/ModelCustomColorThemeDto.md)
 - [OpenAPI\Client\Model.CustomColorThemeRequestDto](docs/ModelCustomColorThemeRequestDto.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsDto](docs/ModelCustomColorThemesSettingsDto.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsRequestDto](docs/ModelCustomColorThemesSettingsRequestDto.md)
 - [OpenAPI\Client\Model.CustomColorThemesSettingsWrapper](docs/ModelCustomColorThemesSettingsWrapper.md)
 - [OpenAPI\Client\Model.CustomFieldRequest](docs/ModelCustomFieldRequest.md)
 - [OpenAPI\Client\Model.CustomFieldValueArrayWrapper](docs/ModelCustomFieldValueArrayWrapper.md)
 - [OpenAPI\Client\Model.CustomFieldValueDto](docs/ModelCustomFieldValueDto.md)
 - [OpenAPI\Client\Model.CustomFilterRequest](docs/ModelCustomFilterRequest.md)
 - [OpenAPI\Client\Model.CustomerConfigDto](docs/ModelCustomerConfigDto.md)
 - [OpenAPI\Client\Model.CustomerInfoDto](docs/ModelCustomerInfoDto.md)
 - [OpenAPI\Client\Model.CustomerInfoWrapper](docs/ModelCustomerInfoWrapper.md)
 - [OpenAPI\Client\Model.CustomerMonthlyUsageArrayWrapper](docs/ModelCustomerMonthlyUsageArrayWrapper.md)
 - [OpenAPI\Client\Model.CustomerMonthlyUsageDto](docs/ModelCustomerMonthlyUsageDto.md)
 - [OpenAPI\Client\Model.CustomerMonthlyUsageReportRequestDto](docs/ModelCustomerMonthlyUsageReportRequestDto.md)
 - [OpenAPI\Client\Model.CustomerOperationsReportRequestDto](docs/ModelCustomerOperationsReportRequestDto.md)
 - [OpenAPI\Client\Model.CustomerServiceUsageDto](docs/ModelCustomerServiceUsageDto.md)
 - [OpenAPI\Client\Model.CustomerServiceUsageReportDto](docs/ModelCustomerServiceUsageReportDto.md)
 - [OpenAPI\Client\Model.CustomerServiceUsageReportRequestDto](docs/ModelCustomerServiceUsageReportRequestDto.md)
 - [OpenAPI\Client\Model.CustomerServiceUsageReportWrapper](docs/ModelCustomerServiceUsageReportWrapper.md)
 - [OpenAPI\Client\Model.CustomizationConfigDto](docs/ModelCustomizationConfigDto.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsDto](docs/ModelDarkThemeSettingsDto.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsRequestDto](docs/ModelDarkThemeSettingsRequestDto.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsType](docs/ModelDarkThemeSettingsType.md)
 - [OpenAPI\Client\Model.DarkThemeSettingsWrapper](docs/ModelDarkThemeSettingsWrapper.md)
 - [OpenAPI\Client\Model.DateToAutoCleanUp](docs/ModelDateToAutoCleanUp.md)
 - [OpenAPI\Client\Model.DeepLinkConfigurationRequestDto](docs/ModelDeepLinkConfigurationRequestDto.md)
 - [OpenAPI\Client\Model.DeepLinkDto](docs/ModelDeepLinkDto.md)
 - [OpenAPI\Client\Model.DeepLinkHandlingMode](docs/ModelDeepLinkHandlingMode.md)
 - [OpenAPI\Client\Model.DeepLinkSettingsRequestDto](docs/ModelDeepLinkSettingsRequestDto.md)
 - [OpenAPI\Client\Model.DefaultProductRequestDto](docs/ModelDefaultProductRequestDto.md)
 - [OpenAPI\Client\Model.DefaultTemplateItemDto](docs/ModelDefaultTemplateItemDto.md)
 - [OpenAPI\Client\Model.DefaultTemplateSettingsDto](docs/ModelDefaultTemplateSettingsDto.md)
 - [OpenAPI\Client\Model.DefaultTemplateSettingsRequestDto](docs/ModelDefaultTemplateSettingsRequestDto.md)
 - [OpenAPI\Client\Model.DefaultTemplateSettingsRequestDtoSelectedFile](docs/ModelDefaultTemplateSettingsRequestDtoSelectedFile.md)
 - [OpenAPI\Client\Model.DefaultTemplateSettingsResetRequestDto](docs/ModelDefaultTemplateSettingsResetRequestDto.md)
 - [OpenAPI\Client\Model.DefaultTemplateSettingsWrapper](docs/ModelDefaultTemplateSettingsWrapper.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDto](docs/ModelDeleteBatchRequestDto.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDtoAllOfFileIds](docs/ModelDeleteBatchRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DeleteBatchRequestDtoAllOfFolderIds](docs/ModelDeleteBatchRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.DeleteFileRequest](docs/ModelDeleteFileRequest.md)
 - [OpenAPI\Client\Model.DeleteFolderRequest](docs/ModelDeleteFolderRequest.md)
 - [OpenAPI\Client\Model.DeleteRoomRequest](docs/ModelDeleteRoomRequest.md)
 - [OpenAPI\Client\Model.DeleteVersionBatchRequestDto](docs/ModelDeleteVersionBatchRequestDto.md)
 - [OpenAPI\Client\Model.DepositDto](docs/ModelDepositDto.md)
 - [OpenAPI\Client\Model.DepositReportDto](docs/ModelDepositReportDto.md)
 - [OpenAPI\Client\Model.DepositReportWrapper](docs/ModelDepositReportWrapper.md)
 - [OpenAPI\Client\Model.DiscountCategoryDto](docs/ModelDiscountCategoryDto.md)
 - [OpenAPI\Client\Model.DisplayRequestDto](docs/ModelDisplayRequestDto.md)
 - [OpenAPI\Client\Model.DistributedTaskStatus](docs/ModelDistributedTaskStatus.md)
 - [OpenAPI\Client\Model.DnsSettingsRequestDto](docs/ModelDnsSettingsRequestDto.md)
 - [OpenAPI\Client\Model.DocServiceUrlDto](docs/ModelDocServiceUrlDto.md)
 - [OpenAPI\Client\Model.DocServiceUrlWrapper](docs/ModelDocServiceUrlWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudConfigDto](docs/ModelDocsCloudConfigDto.md)
 - [OpenAPI\Client\Model.DocsCloudConfigRequestDto](docs/ModelDocsCloudConfigRequestDto.md)
 - [OpenAPI\Client\Model.DocsCloudConfigWrapper](docs/ModelDocsCloudConfigWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudDevPackRequestDto](docs/ModelDocsCloudDevPackRequestDto.md)
 - [OpenAPI\Client\Model.DocsCloudIpFilterConfigDto](docs/ModelDocsCloudIpFilterConfigDto.md)
 - [OpenAPI\Client\Model.DocsCloudIpFilterConfigRequest](docs/ModelDocsCloudIpFilterConfigRequest.md)
 - [OpenAPI\Client\Model.DocsCloudIpFilterRuleDto](docs/ModelDocsCloudIpFilterRuleDto.md)
 - [OpenAPI\Client\Model.DocsCloudIpFilterRuleRequest](docs/ModelDocsCloudIpFilterRuleRequest.md)
 - [OpenAPI\Client\Model.DocsCloudLicenseInfoDto](docs/ModelDocsCloudLicenseInfoDto.md)
 - [OpenAPI\Client\Model.DocsCloudPaymentDto](docs/ModelDocsCloudPaymentDto.md)
 - [OpenAPI\Client\Model.DocsCloudQuotaDto](docs/ModelDocsCloudQuotaDto.md)
 - [OpenAPI\Client\Model.DocsCloudQuotaUserDto](docs/ModelDocsCloudQuotaUserDto.md)
 - [OpenAPI\Client\Model.DocsCloudQuotaWrapper](docs/ModelDocsCloudQuotaWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudSecurityConfigDto](docs/ModelDocsCloudSecurityConfigDto.md)
 - [OpenAPI\Client\Model.DocsCloudSecurityConfigRequest](docs/ModelDocsCloudSecurityConfigRequest.md)
 - [OpenAPI\Client\Model.DocsCloudServerConfigDto](docs/ModelDocsCloudServerConfigDto.md)
 - [OpenAPI\Client\Model.DocsCloudServerConfigRequest](docs/ModelDocsCloudServerConfigRequest.md)
 - [OpenAPI\Client\Model.DocsCloudServerInfoDto](docs/ModelDocsCloudServerInfoDto.md)
 - [OpenAPI\Client\Model.DocsCloudStatsDto](docs/ModelDocsCloudStatsDto.md)
 - [OpenAPI\Client\Model.DocsCloudTenantDto](docs/ModelDocsCloudTenantDto.md)
 - [OpenAPI\Client\Model.DocsCloudTenantInfoDto](docs/ModelDocsCloudTenantInfoDto.md)
 - [OpenAPI\Client\Model.DocsCloudTenantInfoWrapper](docs/ModelDocsCloudTenantInfoWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudTenantWrapper](docs/ModelDocsCloudTenantWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudUsageDto](docs/ModelDocsCloudUsageDto.md)
 - [OpenAPI\Client\Model.DocsCloudUsageWrapper](docs/ModelDocsCloudUsageWrapper.md)
 - [OpenAPI\Client\Model.DocsCloudUserStatsDto](docs/ModelDocsCloudUserStatsDto.md)
 - [OpenAPI\Client\Model.DocsCloudUsersLimitDto](docs/ModelDocsCloudUsersLimitDto.md)
 - [OpenAPI\Client\Model.DocsCloudWopiConfigDto](docs/ModelDocsCloudWopiConfigDto.md)
 - [OpenAPI\Client\Model.DocsCloudWopiConfigRequest](docs/ModelDocsCloudWopiConfigRequest.md)
 - [OpenAPI\Client\Model.DocumentBuilderTaskDto](docs/ModelDocumentBuilderTaskDto.md)
 - [OpenAPI\Client\Model.DocumentBuilderTaskWrapper](docs/ModelDocumentBuilderTaskWrapper.md)
 - [OpenAPI\Client\Model.DocumentConfigDto](docs/ModelDocumentConfigDto.md)
 - [OpenAPI\Client\Model.DocumentOptionsDto](docs/ModelDocumentOptionsDto.md)
 - [OpenAPI\Client\Model.DomainNameRulesDto](docs/ModelDomainNameRulesDto.md)
 - [OpenAPI\Client\Model.DoubleNullableWrapper](docs/ModelDoubleNullableWrapper.md)
 - [OpenAPI\Client\Model.DoubleWrapper](docs/ModelDoubleWrapper.md)
 - [OpenAPI\Client\Model.DownloadRequestDto](docs/ModelDownloadRequestDto.md)
 - [OpenAPI\Client\Model.DownloadRequestDtoAllOfFileIds](docs/ModelDownloadRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DownloadRequestDtoAllOfFolderIds](docs/ModelDownloadRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.DownloadRequestItemDto](docs/ModelDownloadRequestItemDto.md)
 - [OpenAPI\Client\Model.DownloadRequestItemDtoKey](docs/ModelDownloadRequestItemDtoKey.md)
 - [OpenAPI\Client\Model.DraftLocation](docs/ModelDraftLocation.md)
 - [OpenAPI\Client\Model.DuplicateRequestDto](docs/ModelDuplicateRequestDto.md)
 - [OpenAPI\Client\Model.DuplicateRequestDtoAllOfFileIds](docs/ModelDuplicateRequestDtoAllOfFileIds.md)
 - [OpenAPI\Client\Model.DuplicateRequestDtoAllOfFolderIds](docs/ModelDuplicateRequestDtoAllOfFolderIds.md)
 - [OpenAPI\Client\Model.EditHistoryArrayWrapper](docs/ModelEditHistoryArrayWrapper.md)
 - [OpenAPI\Client\Model.EditHistoryAuthorDto](docs/ModelEditHistoryAuthorDto.md)
 - [OpenAPI\Client\Model.EditHistoryChangesDto](docs/ModelEditHistoryChangesDto.md)
 - [OpenAPI\Client\Model.EditHistoryDataDto](docs/ModelEditHistoryDataDto.md)
 - [OpenAPI\Client\Model.EditHistoryDataWrapper](docs/ModelEditHistoryDataWrapper.md)
 - [OpenAPI\Client\Model.EditHistoryDto](docs/ModelEditHistoryDto.md)
 - [OpenAPI\Client\Model.EditHistoryUrlDto](docs/ModelEditHistoryUrlDto.md)
 - [OpenAPI\Client\Model.EditorConfigurationDto](docs/ModelEditorConfigurationDto.md)
 - [OpenAPI\Client\Model.EditorToolCallParametersDto](docs/ModelEditorToolCallParametersDto.md)
 - [OpenAPI\Client\Model.EditorToolCallStateDto](docs/ModelEditorToolCallStateDto.md)
 - [OpenAPI\Client\Model.EditorType](docs/ModelEditorType.md)
 - [OpenAPI\Client\Model.EmailActivationSettingsDto](docs/ModelEmailActivationSettingsDto.md)
 - [OpenAPI\Client\Model.EmailActivationSettingsRequestDto](docs/ModelEmailActivationSettingsRequestDto.md)
 - [OpenAPI\Client\Model.EmailActivationSettingsWrapper](docs/ModelEmailActivationSettingsWrapper.md)
 - [OpenAPI\Client\Model.EmailInvitationDto](docs/ModelEmailInvitationDto.md)
 - [OpenAPI\Client\Model.EmailMemberRequestDto](docs/ModelEmailMemberRequestDto.md)
 - [OpenAPI\Client\Model.EmbeddedConfigDto](docs/ModelEmbeddedConfigDto.md)
 - [OpenAPI\Client\Model.EmployeeActivationStatus](docs/ModelEmployeeActivationStatus.md)
 - [OpenAPI\Client\Model.EmployeeArrayWrapper](docs/ModelEmployeeArrayWrapper.md)
 - [OpenAPI\Client\Model.EmployeeDto](docs/ModelEmployeeDto.md)
 - [OpenAPI\Client\Model.EmployeeFullArrayWrapper](docs/ModelEmployeeFullArrayWrapper.md)
 - [OpenAPI\Client\Model.EmployeeFullDto](docs/ModelEmployeeFullDto.md)
 - [OpenAPI\Client\Model.EmployeeFullWrapper](docs/ModelEmployeeFullWrapper.md)
 - [OpenAPI\Client\Model.EmployeeStatus](docs/ModelEmployeeStatus.md)
 - [OpenAPI\Client\Model.EmployeeType](docs/ModelEmployeeType.md)
 - [OpenAPI\Client\Model.EmployeeWrapper](docs/ModelEmployeeWrapper.md)
 - [OpenAPI\Client\Model.EnabledModuleArrayWrapper](docs/ModelEnabledModuleArrayWrapper.md)
 - [OpenAPI\Client\Model.EnabledModuleDto](docs/ModelEnabledModuleDto.md)
 - [OpenAPI\Client\Model.EncryptionKeyArrayWrapper](docs/ModelEncryptionKeyArrayWrapper.md)
 - [OpenAPI\Client\Model.EncryptionKeyDto](docs/ModelEncryptionKeyDto.md)
 - [OpenAPI\Client\Model.EncryptionKeyRequestDto](docs/ModelEncryptionKeyRequestDto.md)
 - [OpenAPI\Client\Model.EncryptionSettingsDto](docs/ModelEncryptionSettingsDto.md)
 - [OpenAPI\Client\Model.EncryptionSettingsWrapper](docs/ModelEncryptionSettingsWrapper.md)
 - [OpenAPI\Client\Model.EncryptionStatus](docs/ModelEncryptionStatus.md)
 - [OpenAPI\Client\Model.EntityQuotaDto](docs/ModelEntityQuotaDto.md)
 - [OpenAPI\Client\Model.EntityQuotaSettingsDto](docs/ModelEntityQuotaSettingsDto.md)
 - [OpenAPI\Client\Model.EntityQuotaSettingsWrapper](docs/ModelEntityQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.EntryFieldDto](docs/ModelEntryFieldDto.md)
 - [OpenAPI\Client\Model.EntryMetadataDto](docs/ModelEntryMetadataDto.md)
 - [OpenAPI\Client\Model.EntryMetadataWrapper](docs/ModelEntryMetadataWrapper.md)
 - [OpenAPI\Client\Model.EntryTemplateDto](docs/ModelEntryTemplateDto.md)
 - [OpenAPI\Client\Model.EntryType](docs/ModelEntryType.md)
 - [OpenAPI\Client\Model.ErrorApiResponse](docs/ModelErrorApiResponse.md)
 - [OpenAPI\Client\Model.ErrorApiResponseError](docs/ModelErrorApiResponseError.md)
 - [OpenAPI\Client\Model.ExchangeToken200Response](docs/ModelExchangeToken200Response.md)
 - [OpenAPI\Client\Model.ExternalDatabaseConnectionRequestDto](docs/ModelExternalDatabaseConnectionRequestDto.md)
 - [OpenAPI\Client\Model.ExternalDatabaseType](docs/ModelExternalDatabaseType.md)
 - [OpenAPI\Client\Model.ExternalDbSyncFormResultDto](docs/ModelExternalDbSyncFormResultDto.md)
 - [OpenAPI\Client\Model.ExternalDbSyncTaskDto](docs/ModelExternalDbSyncTaskDto.md)
 - [OpenAPI\Client\Model.ExternalDbSyncTaskWrapper](docs/ModelExternalDbSyncTaskWrapper.md)
 - [OpenAPI\Client\Model.ExternalResourceDto](docs/ModelExternalResourceDto.md)
 - [OpenAPI\Client\Model.ExternalResourcesDto](docs/ModelExternalResourcesDto.md)
 - [OpenAPI\Client\Model.ExternalShareDto](docs/ModelExternalShareDto.md)
 - [OpenAPI\Client\Model.ExternalShareRequestParam](docs/ModelExternalShareRequestParam.md)
 - [OpenAPI\Client\Model.ExternalShareStatus](docs/ModelExternalShareStatus.md)
 - [OpenAPI\Client\Model.ExternalShareWrapper](docs/ModelExternalShareWrapper.md)
 - [OpenAPI\Client\Model.ExternalSharingSettingsDto](docs/ModelExternalSharingSettingsDto.md)
 - [OpenAPI\Client\Model.ExternalSharingSettingsRequestDto](docs/ModelExternalSharingSettingsRequestDto.md)
 - [OpenAPI\Client\Model.ExternalSharingSettingsWrapper](docs/ModelExternalSharingSettingsWrapper.md)
 - [OpenAPI\Client\Model.FeatureUsedDto](docs/ModelFeatureUsedDto.md)
 - [OpenAPI\Client\Model.FeedbackConfigDto](docs/ModelFeedbackConfigDto.md)
 - [OpenAPI\Client\Model.FieldError](docs/ModelFieldError.md)
 - [OpenAPI\Client\Model.FileArrayWrapper](docs/ModelFileArrayWrapper.md)
 - [OpenAPI\Client\Model.FileConflictResolveType](docs/ModelFileConflictResolveType.md)
 - [OpenAPI\Client\Model.FileDto](docs/ModelFileDto.md)
 - [OpenAPI\Client\Model.FileDtoAllOfViewAccessibility](docs/ModelFileDtoAllOfViewAccessibility.md)
 - [OpenAPI\Client\Model.FileEncryptionInfoDto](docs/ModelFileEncryptionInfoDto.md)
 - [OpenAPI\Client\Model.FileEncryptionInfoWrapper](docs/ModelFileEncryptionInfoWrapper.md)
 - [OpenAPI\Client\Model.FileEntryArrayWrapper](docs/ModelFileEntryArrayWrapper.md)
 - [OpenAPI\Client\Model.FileEntryBaseArrayWrapper](docs/ModelFileEntryBaseArrayWrapper.md)
 - [OpenAPI\Client\Model.FileEntryBaseDto](docs/ModelFileEntryBaseDto.md)
 - [OpenAPI\Client\Model.FileEntryBaseWrapper](docs/ModelFileEntryBaseWrapper.md)
 - [OpenAPI\Client\Model.FileEntryDto](docs/ModelFileEntryDto.md)
 - [OpenAPI\Client\Model.FileEntryType](docs/ModelFileEntryType.md)
 - [OpenAPI\Client\Model.FileKeysDto](docs/ModelFileKeysDto.md)
 - [OpenAPI\Client\Model.FileLinkDto](docs/ModelFileLinkDto.md)
 - [OpenAPI\Client\Model.FileLinkRequest](docs/ModelFileLinkRequest.md)
 - [OpenAPI\Client\Model.FileLinkWrapper](docs/ModelFileLinkWrapper.md)
 - [OpenAPI\Client\Model.FileOperationArrayWrapper](docs/ModelFileOperationArrayWrapper.md)
 - [OpenAPI\Client\Model.FileOperationDto](docs/ModelFileOperationDto.md)
 - [OpenAPI\Client\Model.FileOperationRequestBaseDto](docs/ModelFileOperationRequestBaseDto.md)
 - [OpenAPI\Client\Model.FileOperationType](docs/ModelFileOperationType.md)
 - [OpenAPI\Client\Model.FileOperationWrapper](docs/ModelFileOperationWrapper.md)
 - [OpenAPI\Client\Model.FileReferenceDataDto](docs/ModelFileReferenceDataDto.md)
 - [OpenAPI\Client\Model.FileReferenceDto](docs/ModelFileReferenceDto.md)
 - [OpenAPI\Client\Model.FileReferenceWrapper](docs/ModelFileReferenceWrapper.md)
 - [OpenAPI\Client\Model.FileShare](docs/ModelFileShare.md)
 - [OpenAPI\Client\Model.FileShareArrayWrapper](docs/ModelFileShareArrayWrapper.md)
 - [OpenAPI\Client\Model.FileShareDto](docs/ModelFileShareDto.md)
 - [OpenAPI\Client\Model.FileShareLink](docs/ModelFileShareLink.md)
 - [OpenAPI\Client\Model.FileShareParams](docs/ModelFileShareParams.md)
 - [OpenAPI\Client\Model.FileShareResponseArrayWrapper](docs/ModelFileShareResponseArrayWrapper.md)
 - [OpenAPI\Client\Model.FileShareWrapper](docs/ModelFileShareWrapper.md)
 - [OpenAPI\Client\Model.FileStatus](docs/ModelFileStatus.md)
 - [OpenAPI\Client\Model.FileType](docs/ModelFileType.md)
 - [OpenAPI\Client\Model.FileUploadResultDto](docs/ModelFileUploadResultDto.md)
 - [OpenAPI\Client\Model.FileUploadResultWrapper](docs/ModelFileUploadResultWrapper.md)
 - [OpenAPI\Client\Model.FileWrapper](docs/ModelFileWrapper.md)
 - [OpenAPI\Client\Model.FilesSettingsDto](docs/ModelFilesSettingsDto.md)
 - [OpenAPI\Client\Model.FilesSettingsDtoInternalFormats](docs/ModelFilesSettingsDtoInternalFormats.md)
 - [OpenAPI\Client\Model.FilesSettingsWrapper](docs/ModelFilesSettingsWrapper.md)
 - [OpenAPI\Client\Model.FilesStatisticsFolder](docs/ModelFilesStatisticsFolder.md)
 - [OpenAPI\Client\Model.FilesStatisticsResultDto](docs/ModelFilesStatisticsResultDto.md)
 - [OpenAPI\Client\Model.FilesStatisticsResultWrapper](docs/ModelFilesStatisticsResultWrapper.md)
 - [OpenAPI\Client\Model.FillingFormResultDto](docs/ModelFillingFormResultDto.md)
 - [OpenAPI\Client\Model.FillingFormResultWrapper](docs/ModelFillingFormResultWrapper.md)
 - [OpenAPI\Client\Model.FilterType](docs/ModelFilterType.md)
 - [OpenAPI\Client\Model.FinishDto](docs/ModelFinishDto.md)
 - [OpenAPI\Client\Model.FirebaseDeviceDto](docs/ModelFirebaseDeviceDto.md)
 - [OpenAPI\Client\Model.FirebaseDeviceWrapper](docs/ModelFirebaseDeviceWrapper.md)
 - [OpenAPI\Client\Model.FirebaseDto](docs/ModelFirebaseDto.md)
 - [OpenAPI\Client\Model.FirebaseRequestDto](docs/ModelFirebaseRequestDto.md)
 - [OpenAPI\Client\Model.FolderArrayWrapper](docs/ModelFolderArrayWrapper.md)
 - [OpenAPI\Client\Model.FolderContentArrayWrapper](docs/ModelFolderContentArrayWrapper.md)
 - [OpenAPI\Client\Model.FolderContentDto](docs/ModelFolderContentDto.md)
 - [OpenAPI\Client\Model.FolderContentWrapper](docs/ModelFolderContentWrapper.md)
 - [OpenAPI\Client\Model.FolderDto](docs/ModelFolderDto.md)
 - [OpenAPI\Client\Model.FolderLinkRequest](docs/ModelFolderLinkRequest.md)
 - [OpenAPI\Client\Model.FolderMetadataSearch](docs/ModelFolderMetadataSearch.md)
 - [OpenAPI\Client\Model.FolderType](docs/ModelFolderType.md)
 - [OpenAPI\Client\Model.FolderWrapper](docs/ModelFolderWrapper.md)
 - [OpenAPI\Client\Model.FormFillingManageAction](docs/ModelFormFillingManageAction.md)
 - [OpenAPI\Client\Model.FormFillingStatus](docs/ModelFormFillingStatus.md)
 - [OpenAPI\Client\Model.FormGalleryDto](docs/ModelFormGalleryDto.md)
 - [OpenAPI\Client\Model.FormMetadataDto](docs/ModelFormMetadataDto.md)
 - [OpenAPI\Client\Model.FormResultsDto](docs/ModelFormResultsDto.md)
 - [OpenAPI\Client\Model.FormRoleArrayWrapper](docs/ModelFormRoleArrayWrapper.md)
 - [OpenAPI\Client\Model.FormRoleDto](docs/ModelFormRoleDto.md)
 - [OpenAPI\Client\Model.FormRoleRequest](docs/ModelFormRoleRequest.md)
 - [OpenAPI\Client\Model.FormSubmissionsDto](docs/ModelFormSubmissionsDto.md)
 - [OpenAPI\Client\Model.FormSubmissionsWrapper](docs/ModelFormSubmissionsWrapper.md)
 - [OpenAPI\Client\Model.FormsItemArrayWrapper](docs/ModelFormsItemArrayWrapper.md)
 - [OpenAPI\Client\Model.FormsItemDataDto](docs/ModelFormsItemDataDto.md)
 - [OpenAPI\Client\Model.FormsItemDto](docs/ModelFormsItemDto.md)
 - [OpenAPI\Client\Model.GenerateDocxToolCallParametersDto](docs/ModelGenerateDocxToolCallParametersDto.md)
 - [OpenAPI\Client\Model.GenerateFormToolCallParametersDto](docs/ModelGenerateFormToolCallParametersDto.md)
 - [OpenAPI\Client\Model.GeneratePresentationToolCallParametersDto](docs/ModelGeneratePresentationToolCallParametersDto.md)
 - [OpenAPI\Client\Model.GetPortalPrices200Response](docs/ModelGetPortalPrices200Response.md)
 - [OpenAPI\Client\Model.GetPortalPrices200ResponseLinksInner](docs/ModelGetPortalPrices200ResponseLinksInner.md)
 - [OpenAPI\Client\Model.GetReferenceDataDto](docs/ModelGetReferenceDataDto.md)
 - [OpenAPI\Client\Model.GobackConfigDto](docs/ModelGobackConfigDto.md)
 - [OpenAPI\Client\Model.GreetingSettingsRequestDto](docs/ModelGreetingSettingsRequestDto.md)
 - [OpenAPI\Client\Model.GroupArrayWrapper](docs/ModelGroupArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupDto](docs/ModelGroupDto.md)
 - [OpenAPI\Client\Model.GroupMemberSecurityArrayWrapper](docs/ModelGroupMemberSecurityArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupMemberSecurityDto](docs/ModelGroupMemberSecurityDto.md)
 - [OpenAPI\Client\Model.GroupRequestDto](docs/ModelGroupRequestDto.md)
 - [OpenAPI\Client\Model.GroupSummaryArrayWrapper](docs/ModelGroupSummaryArrayWrapper.md)
 - [OpenAPI\Client\Model.GroupSummaryDto](docs/ModelGroupSummaryDto.md)
 - [OpenAPI\Client\Model.GroupWrapper](docs/ModelGroupWrapper.md)
 - [OpenAPI\Client\Model.HideConfirmConvertRequestDto](docs/ModelHideConfirmConvertRequestDto.md)
 - [OpenAPI\Client\Model.HistoryActionDto](docs/ModelHistoryActionDto.md)
 - [OpenAPI\Client\Model.HistoryArrayWrapper](docs/ModelHistoryArrayWrapper.md)
 - [OpenAPI\Client\Model.HistoryDataDto](docs/ModelHistoryDataDto.md)
 - [OpenAPI\Client\Model.HistoryDto](docs/ModelHistoryDto.md)
 - [OpenAPI\Client\Model.ICompressWrapper](docs/ModelICompressWrapper.md)
 - [OpenAPI\Client\Model.IconRequest](docs/ModelIconRequest.md)
 - [OpenAPI\Client\Model.ImageSizeDto](docs/ModelImageSizeDto.md)
 - [OpenAPI\Client\Model.ImportableApiEntity](docs/ModelImportableApiEntity.md)
 - [OpenAPI\Client\Model.InfoConfigDto](docs/ModelInfoConfigDto.md)
 - [OpenAPI\Client\Model.Int32Wrapper](docs/ModelInt32Wrapper.md)
 - [OpenAPI\Client\Model.Int64Wrapper](docs/ModelInt64Wrapper.md)
 - [OpenAPI\Client\Model.InvitationLinkCreateRequestDto](docs/ModelInvitationLinkCreateRequestDto.md)
 - [OpenAPI\Client\Model.InvitationLinkDeleteRequestDto](docs/ModelInvitationLinkDeleteRequestDto.md)
 - [OpenAPI\Client\Model.InvitationLinkDto](docs/ModelInvitationLinkDto.md)
 - [OpenAPI\Client\Model.InvitationLinkUpdateRequestDto](docs/ModelInvitationLinkUpdateRequestDto.md)
 - [OpenAPI\Client\Model.InvitationLinkWrapper](docs/ModelInvitationLinkWrapper.md)
 - [OpenAPI\Client\Model.InviteUsersRequestDto](docs/ModelInviteUsersRequestDto.md)
 - [OpenAPI\Client\Model.IpRestrictionArrayWrapper](docs/ModelIpRestrictionArrayWrapper.md)
 - [OpenAPI\Client\Model.IpRestrictionDto](docs/ModelIpRestrictionDto.md)
 - [OpenAPI\Client\Model.IpRestrictionEntryDto](docs/ModelIpRestrictionEntryDto.md)
 - [OpenAPI\Client\Model.IpRestrictionsDto](docs/ModelIpRestrictionsDto.md)
 - [OpenAPI\Client\Model.IpRestrictionsSettingsDto](docs/ModelIpRestrictionsSettingsDto.md)
 - [OpenAPI\Client\Model.IpRestrictionsSettingsWrapper](docs/ModelIpRestrictionsSettingsWrapper.md)
 - [OpenAPI\Client\Model.IpRestrictionsWrapper](docs/ModelIpRestrictionsWrapper.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosArrayWrapper](docs/ModelIsDefaultWhiteLabelLogosArrayWrapper.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosDto](docs/ModelIsDefaultWhiteLabelLogosDto.md)
 - [OpenAPI\Client\Model.IsDefaultWhiteLabelLogosWrapper](docs/ModelIsDefaultWhiteLabelLogosWrapper.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairBooleanString](docs/ModelItemKeyValuePairBooleanString.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairBooleanStringWrapper](docs/ModelItemKeyValuePairBooleanStringWrapper.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairObjectObject](docs/ModelItemKeyValuePairObjectObject.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringBoolean](docs/ModelItemKeyValuePairStringBoolean.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringLogoRequestDto](docs/ModelItemKeyValuePairStringLogoRequestDto.md)
 - [OpenAPI\Client\Model.ItemKeyValuePairStringString](docs/ModelItemKeyValuePairStringString.md)
 - [OpenAPI\Client\Model.JsonValueWrapper](docs/ModelJsonValueWrapper.md)
 - [OpenAPI\Client\Model.LicensorDetailsArrayWrapper](docs/ModelLicensorDetailsArrayWrapper.md)
 - [OpenAPI\Client\Model.LicensorDetailsDto](docs/ModelLicensorDetailsDto.md)
 - [OpenAPI\Client\Model.LicensorDetailsWrapper](docs/ModelLicensorDetailsWrapper.md)
 - [OpenAPI\Client\Model.LinkAccountRequestDto](docs/ModelLinkAccountRequestDto.md)
 - [OpenAPI\Client\Model.LinkType](docs/ModelLinkType.md)
 - [OpenAPI\Client\Model.LocationType](docs/ModelLocationType.md)
 - [OpenAPI\Client\Model.LockFileRequest](docs/ModelLockFileRequest.md)
 - [OpenAPI\Client\Model.LoginEventArrayWrapper](docs/ModelLoginEventArrayWrapper.md)
 - [OpenAPI\Client\Model.LoginEventDto](docs/ModelLoginEventDto.md)
 - [OpenAPI\Client\Model.LoginProvider](docs/ModelLoginProvider.md)
 - [OpenAPI\Client\Model.LoginSettingsDto](docs/ModelLoginSettingsDto.md)
 - [OpenAPI\Client\Model.LoginSettingsRequestDto](docs/ModelLoginSettingsRequestDto.md)
 - [OpenAPI\Client\Model.LoginSettingsWrapper](docs/ModelLoginSettingsWrapper.md)
 - [OpenAPI\Client\Model.LogoConfigDto](docs/ModelLogoConfigDto.md)
 - [OpenAPI\Client\Model.LogoCoverDto](docs/ModelLogoCoverDto.md)
 - [OpenAPI\Client\Model.LogoDto](docs/ModelLogoDto.md)
 - [OpenAPI\Client\Model.LogoRequest](docs/ModelLogoRequest.md)
 - [OpenAPI\Client\Model.LogoRequestDto](docs/ModelLogoRequestDto.md)
 - [OpenAPI\Client\Model.MailDomainSettingsRequestDto](docs/ModelMailDomainSettingsRequestDto.md)
 - [OpenAPI\Client\Model.ManageFormFillingDto](docs/ModelManageFormFillingDto.md)
 - [OpenAPI\Client\Model.MemberRequestDto](docs/ModelMemberRequestDto.md)
 - [OpenAPI\Client\Model.MembersRequest](docs/ModelMembersRequest.md)
 - [OpenAPI\Client\Model.MentionArrayWrapper](docs/ModelMentionArrayWrapper.md)
 - [OpenAPI\Client\Model.MentionDto](docs/ModelMentionDto.md)
 - [OpenAPI\Client\Model.MentionMessageRequest](docs/ModelMentionMessageRequest.md)
 - [OpenAPI\Client\Model.MessageAction](docs/ModelMessageAction.md)
 - [OpenAPI\Client\Model.MetadataConflictResolveType](docs/ModelMetadataConflictResolveType.md)
 - [OpenAPI\Client\Model.MetadataFieldDto](docs/ModelMetadataFieldDto.md)
 - [OpenAPI\Client\Model.MetadataFieldOptionDto](docs/ModelMetadataFieldOptionDto.md)
 - [OpenAPI\Client\Model.MetadataFieldOptionRequest](docs/ModelMetadataFieldOptionRequest.md)
 - [OpenAPI\Client\Model.MetadataFieldRequest](docs/ModelMetadataFieldRequest.md)
 - [OpenAPI\Client\Model.MetadataFieldType](docs/ModelMetadataFieldType.md)
 - [OpenAPI\Client\Model.MetadataFieldWrapper](docs/ModelMetadataFieldWrapper.md)
 - [OpenAPI\Client\Model.MetadataFilterConditionRequest](docs/ModelMetadataFilterConditionRequest.md)
 - [OpenAPI\Client\Model.MetadataMatchDto](docs/ModelMetadataMatchDto.md)
 - [OpenAPI\Client\Model.MetadataOperationDto](docs/ModelMetadataOperationDto.md)
 - [OpenAPI\Client\Model.MetadataOperationWrapper](docs/ModelMetadataOperationWrapper.md)
 - [OpenAPI\Client\Model.MetadataTemplateArrayWrapper](docs/ModelMetadataTemplateArrayWrapper.md)
 - [OpenAPI\Client\Model.MetadataTemplateDto](docs/ModelMetadataTemplateDto.md)
 - [OpenAPI\Client\Model.MetadataTemplateWrapper](docs/ModelMetadataTemplateWrapper.md)
 - [OpenAPI\Client\Model.MetadataValueDto](docs/ModelMetadataValueDto.md)
 - [OpenAPI\Client\Model.MetadataValueRequest](docs/ModelMetadataValueRequest.md)
 - [OpenAPI\Client\Model.MigratingApiFiles](docs/ModelMigratingApiFiles.md)
 - [OpenAPI\Client\Model.MigratingApiGroup](docs/ModelMigratingApiGroup.md)
 - [OpenAPI\Client\Model.MigratingApiUser](docs/ModelMigratingApiUser.md)
 - [OpenAPI\Client\Model.MigrationApiInfo](docs/ModelMigrationApiInfo.md)
 - [OpenAPI\Client\Model.MigrationStatusDto](docs/ModelMigrationStatusDto.md)
 - [OpenAPI\Client\Model.MigrationStatusWrapper](docs/ModelMigrationStatusWrapper.md)
 - [OpenAPI\Client\Model.MobilePhoneActivationStatus](docs/ModelMobilePhoneActivationStatus.md)
 - [OpenAPI\Client\Model.MobileRequestDto](docs/ModelMobileRequestDto.md)
 - [OpenAPI\Client\Model.Module](docs/ModelModule.md)
 - [OpenAPI\Client\Model.ModuleWrapper](docs/ModelModuleWrapper.md)
 - [OpenAPI\Client\Model.MultiSizeLogoCoverDto](docs/ModelMultiSizeLogoCoverDto.md)
 - [OpenAPI\Client\Model.NewItemsDtoFileEntryBaseDto](docs/ModelNewItemsDtoFileEntryBaseDto.md)
 - [OpenAPI\Client\Model.NewItemsDtoRoomNewItemsDto](docs/ModelNewItemsDtoRoomNewItemsDto.md)
 - [OpenAPI\Client\Model.NewItemsFileEntryBaseArrayWrapper](docs/ModelNewItemsFileEntryBaseArrayWrapper.md)
 - [OpenAPI\Client\Model.NewItemsRoomNewItemsArrayWrapper](docs/ModelNewItemsRoomNewItemsArrayWrapper.md)
 - [OpenAPI\Client\Model.NotificationChannelDto](docs/ModelNotificationChannelDto.md)
 - [OpenAPI\Client\Model.NotificationChannelStatusDto](docs/ModelNotificationChannelStatusDto.md)
 - [OpenAPI\Client\Model.NotificationChannelStatusWrapper](docs/ModelNotificationChannelStatusWrapper.md)
 - [OpenAPI\Client\Model.NotificationSettingsDto](docs/ModelNotificationSettingsDto.md)
 - [OpenAPI\Client\Model.NotificationSettingsRequestDto](docs/ModelNotificationSettingsRequestDto.md)
 - [OpenAPI\Client\Model.NotificationSettingsWrapper](docs/ModelNotificationSettingsWrapper.md)
 - [OpenAPI\Client\Model.NotificationType](docs/ModelNotificationType.md)
 - [OpenAPI\Client\Model.ObjectArrayWrapper](docs/ModelObjectArrayWrapper.md)
 - [OpenAPI\Client\Model.OperationDto](docs/ModelOperationDto.md)
 - [OpenAPI\Client\Model.OperationOrderType](docs/ModelOperationOrderType.md)
 - [OpenAPI\Client\Model.OperationStatus](docs/ModelOperationStatus.md)
 - [OpenAPI\Client\Model.OperationTokenUsageDto](docs/ModelOperationTokenUsageDto.md)
 - [OpenAPI\Client\Model.OperationType](docs/ModelOperationType.md)
 - [OpenAPI\Client\Model.OrderByDto](docs/ModelOrderByDto.md)
 - [OpenAPI\Client\Model.OrderRequestDto](docs/ModelOrderRequestDto.md)
 - [OpenAPI\Client\Model.OrdersItemRequestDto](docs/ModelOrdersItemRequestDto.md)
 - [OpenAPI\Client\Model.OrdersRequestDto](docs/ModelOrdersRequestDto.md)
 - [OpenAPI\Client\Model.OwnerChangeInstructionsDto](docs/ModelOwnerChangeInstructionsDto.md)
 - [OpenAPI\Client\Model.OwnerChangeInstructionsWrapper](docs/ModelOwnerChangeInstructionsWrapper.md)
 - [OpenAPI\Client\Model.OwnerIdSettingsRequestDto](docs/ModelOwnerIdSettingsRequestDto.md)
 - [OpenAPI\Client\Model.PageableClientInfoResponse](docs/ModelPageableClientInfoResponse.md)
 - [OpenAPI\Client\Model.PageableClientResponse](docs/ModelPageableClientResponse.md)
 - [OpenAPI\Client\Model.PageableModificationResponse](docs/ModelPageableModificationResponse.md)
 - [OpenAPI\Client\Model.PageableResponse](docs/ModelPageableResponse.md)
 - [OpenAPI\Client\Model.PasswordHashSettingsDto](docs/ModelPasswordHashSettingsDto.md)
 - [OpenAPI\Client\Model.PasswordSettingsDto](docs/ModelPasswordSettingsDto.md)
 - [OpenAPI\Client\Model.PasswordSettingsRequestDto](docs/ModelPasswordSettingsRequestDto.md)
 - [OpenAPI\Client\Model.PasswordSettingsWrapper](docs/ModelPasswordSettingsWrapper.md)
 - [OpenAPI\Client\Model.PaymentCalculationDto](docs/ModelPaymentCalculationDto.md)
 - [OpenAPI\Client\Model.PaymentCalculationWrapper](docs/ModelPaymentCalculationWrapper.md)
 - [OpenAPI\Client\Model.PaymentMethodStatus](docs/ModelPaymentMethodStatus.md)
 - [OpenAPI\Client\Model.PaymentSettingsDto](docs/ModelPaymentSettingsDto.md)
 - [OpenAPI\Client\Model.PaymentSettingsWrapper](docs/ModelPaymentSettingsWrapper.md)
 - [OpenAPI\Client\Model.PaymentUrlRequestDto](docs/ModelPaymentUrlRequestDto.md)
 - [OpenAPI\Client\Model.Payments](docs/ModelPayments.md)
 - [OpenAPI\Client\Model.PermissionsConfigDto](docs/ModelPermissionsConfigDto.md)
 - [OpenAPI\Client\Model.PluginsConfigDto](docs/ModelPluginsConfigDto.md)
 - [OpenAPI\Client\Model.PluginsDto](docs/ModelPluginsDto.md)
 - [OpenAPI\Client\Model.PortalUserDto](docs/ModelPortalUserDto.md)
 - [OpenAPI\Client\Model.PortalUserWrapper](docs/ModelPortalUserWrapper.md)
 - [OpenAPI\Client\Model.PriceDto](docs/ModelPriceDto.md)
 - [OpenAPI\Client\Model.PriceStatus](docs/ModelPriceStatus.md)
 - [OpenAPI\Client\Model.PriceTimeUnit](docs/ModelPriceTimeUnit.md)
 - [OpenAPI\Client\Model.ProblemDetail](docs/ModelProblemDetail.md)
 - [OpenAPI\Client\Model.ProductAdministratorDto](docs/ModelProductAdministratorDto.md)
 - [OpenAPI\Client\Model.ProductAdministratorWrapper](docs/ModelProductAdministratorWrapper.md)
 - [OpenAPI\Client\Model.ProductQuantityType](docs/ModelProductQuantityType.md)
 - [OpenAPI\Client\Model.ProductType](docs/ModelProductType.md)
 - [OpenAPI\Client\Model.ProviderArrayWrapper](docs/ModelProviderArrayWrapper.md)
 - [OpenAPI\Client\Model.ProviderDto](docs/ModelProviderDto.md)
 - [OpenAPI\Client\Model.ProviderFilter](docs/ModelProviderFilter.md)
 - [OpenAPI\Client\Model.QuantityRequestDto](docs/ModelQuantityRequestDto.md)
 - [OpenAPI\Client\Model.QuotaArrayWrapper](docs/ModelQuotaArrayWrapper.md)
 - [OpenAPI\Client\Model.QuotaDto](docs/ModelQuotaDto.md)
 - [OpenAPI\Client\Model.QuotaFilter](docs/ModelQuotaFilter.md)
 - [OpenAPI\Client\Model.QuotaScope](docs/ModelQuotaScope.md)
 - [OpenAPI\Client\Model.QuotaSettingsRequestDto](docs/ModelQuotaSettingsRequestDto.md)
 - [OpenAPI\Client\Model.QuotaSettingsRequestDtoDefaultQuota](docs/ModelQuotaSettingsRequestDtoDefaultQuota.md)
 - [OpenAPI\Client\Model.QuotaState](docs/ModelQuotaState.md)
 - [OpenAPI\Client\Model.QuotaWrapper](docs/ModelQuotaWrapper.md)
 - [OpenAPI\Client\Model.RecaptchaType](docs/ModelRecaptchaType.md)
 - [OpenAPI\Client\Model.RecentConfigDto](docs/ModelRecentConfigDto.md)
 - [OpenAPI\Client\Model.RegStatus](docs/ModelRegStatus.md)
 - [OpenAPI\Client\Model.ReportDto](docs/ModelReportDto.md)
 - [OpenAPI\Client\Model.ReportWrapper](docs/ModelReportWrapper.md)
 - [OpenAPI\Client\Model.RequestLocation](docs/ModelRequestLocation.md)
 - [OpenAPI\Client\Model.RestrictedAiModelsDto](docs/ModelRestrictedAiModelsDto.md)
 - [OpenAPI\Client\Model.RestrictedAiModelsWrapper](docs/ModelRestrictedAiModelsWrapper.md)
 - [OpenAPI\Client\Model.ReviewConfigDto](docs/ModelReviewConfigDto.md)
 - [OpenAPI\Client\Model.RoomDataLifetimeDto](docs/ModelRoomDataLifetimeDto.md)
 - [OpenAPI\Client\Model.RoomDataLifetimePeriod](docs/ModelRoomDataLifetimePeriod.md)
 - [OpenAPI\Client\Model.RoomFromTemplateStatusDto](docs/ModelRoomFromTemplateStatusDto.md)
 - [OpenAPI\Client\Model.RoomFromTemplateStatusWrapper](docs/ModelRoomFromTemplateStatusWrapper.md)
 - [OpenAPI\Client\Model.RoomGroupArrayWrapper](docs/ModelRoomGroupArrayWrapper.md)
 - [OpenAPI\Client\Model.RoomGroupDto](docs/ModelRoomGroupDto.md)
 - [OpenAPI\Client\Model.RoomGroupRequestDto](docs/ModelRoomGroupRequestDto.md)
 - [OpenAPI\Client\Model.RoomGroupWrapper](docs/ModelRoomGroupWrapper.md)
 - [OpenAPI\Client\Model.RoomInvitation](docs/ModelRoomInvitation.md)
 - [OpenAPI\Client\Model.RoomInvitationRequest](docs/ModelRoomInvitationRequest.md)
 - [OpenAPI\Client\Model.RoomLinkRequest](docs/ModelRoomLinkRequest.md)
 - [OpenAPI\Client\Model.RoomNewItemsDto](docs/ModelRoomNewItemsDto.md)
 - [OpenAPI\Client\Model.RoomPrivacyFilter](docs/ModelRoomPrivacyFilter.md)
 - [OpenAPI\Client\Model.RoomSecurityDto](docs/ModelRoomSecurityDto.md)
 - [OpenAPI\Client\Model.RoomSecurityError](docs/ModelRoomSecurityError.md)
 - [OpenAPI\Client\Model.RoomSecurityWrapper](docs/ModelRoomSecurityWrapper.md)
 - [OpenAPI\Client\Model.RoomTemplateDto](docs/ModelRoomTemplateDto.md)
 - [OpenAPI\Client\Model.RoomTemplateStatusDto](docs/ModelRoomTemplateStatusDto.md)
 - [OpenAPI\Client\Model.RoomTemplateStatusWrapper](docs/ModelRoomTemplateStatusWrapper.md)
 - [OpenAPI\Client\Model.RoomType](docs/ModelRoomType.md)
 - [OpenAPI\Client\Model.RoomsMetadataSearchRequestDto](docs/ModelRoomsMetadataSearchRequestDto.md)
 - [OpenAPI\Client\Model.RoomsNotificationSettingsDto](docs/ModelRoomsNotificationSettingsDto.md)
 - [OpenAPI\Client\Model.RoomsNotificationSettingsWrapper](docs/ModelRoomsNotificationSettingsWrapper.md)
 - [OpenAPI\Client\Model.RoomsNotificationsSettingsRequestDto](docs/ModelRoomsNotificationsSettingsRequestDto.md)
 - [OpenAPI\Client\Model.RunBuilderScriptOutputRequest](docs/ModelRunBuilderScriptOutputRequest.md)
 - [OpenAPI\Client\Model.RunBuilderScriptRequestDto](docs/ModelRunBuilderScriptRequestDto.md)
 - [OpenAPI\Client\Model.RunBuilderScriptRequestDtoArgument](docs/ModelRunBuilderScriptRequestDtoArgument.md)
 - [OpenAPI\Client\Model.SalesRequestDto](docs/ModelSalesRequestDto.md)
 - [OpenAPI\Client\Model.SaveAdditionalResourcesRequest](docs/ModelSaveAdditionalResourcesRequest.md)
 - [OpenAPI\Client\Model.SaveAsPdfRequest](docs/ModelSaveAsPdfRequest.md)
 - [OpenAPI\Client\Model.SaveAuthKeysRequestDto](docs/ModelSaveAuthKeysRequestDto.md)
 - [OpenAPI\Client\Model.SaveCompanyInfoRequest](docs/ModelSaveCompanyInfoRequest.md)
 - [OpenAPI\Client\Model.SaveFormRoleMappingDto](docs/ModelSaveFormRoleMappingDto.md)
 - [OpenAPI\Client\Model.ScheduleDto](docs/ModelScheduleDto.md)
 - [OpenAPI\Client\Model.ScheduleWrapper](docs/ModelScheduleWrapper.md)
 - [OpenAPI\Client\Model.ScopeResponse](docs/ModelScopeResponse.md)
 - [OpenAPI\Client\Model.SearchArea](docs/ModelSearchArea.md)
 - [OpenAPI\Client\Model.SecurityArrayWrapper](docs/ModelSecurityArrayWrapper.md)
 - [OpenAPI\Client\Model.SecurityDto](docs/ModelSecurityDto.md)
 - [OpenAPI\Client\Model.SecurityInfoRequestDto](docs/ModelSecurityInfoRequestDto.md)
 - [OpenAPI\Client\Model.SecurityInfoSimpleRequestDto](docs/ModelSecurityInfoSimpleRequestDto.md)
 - [OpenAPI\Client\Model.SecurityRequestDto](docs/ModelSecurityRequestDto.md)
 - [OpenAPI\Client\Model.SendModuleEventRequest](docs/ModelSendModuleEventRequest.md)
 - [OpenAPI\Client\Model.ServiceLimitDto](docs/ModelServiceLimitDto.md)
 - [OpenAPI\Client\Model.ServiceLimitOrderBy](docs/ModelServiceLimitOrderBy.md)
 - [OpenAPI\Client\Model.ServiceLimitPeriod](docs/ModelServiceLimitPeriod.md)
 - [OpenAPI\Client\Model.ServiceLimitReportDto](docs/ModelServiceLimitReportDto.md)
 - [OpenAPI\Client\Model.ServiceLimitReportWrapper](docs/ModelServiceLimitReportWrapper.md)
 - [OpenAPI\Client\Model.ServiceLimitScope](docs/ModelServiceLimitScope.md)
 - [OpenAPI\Client\Model.ServiceLimitUsageDto](docs/ModelServiceLimitUsageDto.md)
 - [OpenAPI\Client\Model.ServiceLimitWrapper](docs/ModelServiceLimitWrapper.md)
 - [OpenAPI\Client\Model.ServicePriceArrayWrapper](docs/ModelServicePriceArrayWrapper.md)
 - [OpenAPI\Client\Model.ServicePriceDto](docs/ModelServicePriceDto.md)
 - [OpenAPI\Client\Model.SessionRequest](docs/ModelSessionRequest.md)
 - [OpenAPI\Client\Model.SetAppEnabledRequest](docs/ModelSetAppEnabledRequest.md)
 - [OpenAPI\Client\Model.SetAppSettingsRequest](docs/ModelSetAppSettingsRequest.md)
 - [OpenAPI\Client\Model.SetAuditLifetimeSettingsRequest](docs/ModelSetAuditLifetimeSettingsRequest.md)
 - [OpenAPI\Client\Model.SetCustomFields](docs/ModelSetCustomFields.md)
 - [OpenAPI\Client\Model.SetManagerRequest](docs/ModelSetManagerRequest.md)
 - [OpenAPI\Client\Model.SetMetadataValues](docs/ModelSetMetadataValues.md)
 - [OpenAPI\Client\Model.SetParticipantServiceLimitsRequestDto](docs/ModelSetParticipantServiceLimitsRequestDto.md)
 - [OpenAPI\Client\Model.SetPublicDto](docs/ModelSetPublicDto.md)
 - [OpenAPI\Client\Model.SetRestrictedAiModelsRequestDto](docs/ModelSetRestrictedAiModelsRequestDto.md)
 - [OpenAPI\Client\Model.SetWalletTopUpSettingsRequest](docs/ModelSetWalletTopUpSettingsRequest.md)
 - [OpenAPI\Client\Model.SettingsDto](docs/ModelSettingsDto.md)
 - [OpenAPI\Client\Model.SettingsRequestDto](docs/ModelSettingsRequestDto.md)
 - [OpenAPI\Client\Model.SettingsWrapper](docs/ModelSettingsWrapper.md)
 - [OpenAPI\Client\Model.ShareFilterType](docs/ModelShareFilterType.md)
 - [OpenAPI\Client\Model.SignupAccountRequestDto](docs/ModelSignupAccountRequestDto.md)
 - [OpenAPI\Client\Model.SmtpOperationStatusDto](docs/ModelSmtpOperationStatusDto.md)
 - [OpenAPI\Client\Model.SmtpOperationStatusWrapper](docs/ModelSmtpOperationStatusWrapper.md)
 - [OpenAPI\Client\Model.SmtpSettingsDto](docs/ModelSmtpSettingsDto.md)
 - [OpenAPI\Client\Model.SmtpSettingsWrapper](docs/ModelSmtpSettingsWrapper.md)
 - [OpenAPI\Client\Model.SocketSettingsDto](docs/ModelSocketSettingsDto.md)
 - [OpenAPI\Client\Model.SocketSettingsWrapper](docs/ModelSocketSettingsWrapper.md)
 - [OpenAPI\Client\Model.SortOrder](docs/ModelSortOrder.md)
 - [OpenAPI\Client\Model.SortedByType](docs/ModelSortedByType.md)
 - [OpenAPI\Client\Model.SsoBindingTypeDto](docs/ModelSsoBindingTypeDto.md)
 - [OpenAPI\Client\Model.SsoCertificateDto](docs/ModelSsoCertificateDto.md)
 - [OpenAPI\Client\Model.SsoEncryptAlgorithmTypeDto](docs/ModelSsoEncryptAlgorithmTypeDto.md)
 - [OpenAPI\Client\Model.SsoFieldMappingDto](docs/ModelSsoFieldMappingDto.md)
 - [OpenAPI\Client\Model.SsoIdpCertificateActionTypeDto](docs/ModelSsoIdpCertificateActionTypeDto.md)
 - [OpenAPI\Client\Model.SsoIdpCertificateAdvancedDto](docs/ModelSsoIdpCertificateAdvancedDto.md)
 - [OpenAPI\Client\Model.SsoIdpSettingsDto](docs/ModelSsoIdpSettingsDto.md)
 - [OpenAPI\Client\Model.SsoNameIdFormatTypeDto](docs/ModelSsoNameIdFormatTypeDto.md)
 - [OpenAPI\Client\Model.SsoSettingsConstantsDto](docs/ModelSsoSettingsConstantsDto.md)
 - [OpenAPI\Client\Model.SsoSettingsConstantsWrapper](docs/ModelSsoSettingsConstantsWrapper.md)
 - [OpenAPI\Client\Model.SsoSettingsDto](docs/ModelSsoSettingsDto.md)
 - [OpenAPI\Client\Model.SsoSettingsRequestDto](docs/ModelSsoSettingsRequestDto.md)
 - [OpenAPI\Client\Model.SsoSettingsWrapper](docs/ModelSsoSettingsWrapper.md)
 - [OpenAPI\Client\Model.SsoSigningAlgorithmTypeDto](docs/ModelSsoSigningAlgorithmTypeDto.md)
 - [OpenAPI\Client\Model.SsoSpCertificateActionTypeDto](docs/ModelSsoSpCertificateActionTypeDto.md)
 - [OpenAPI\Client\Model.SsoSpCertificateAdvancedDto](docs/ModelSsoSpCertificateAdvancedDto.md)
 - [OpenAPI\Client\Model.StartBackupRequestDto](docs/ModelStartBackupRequestDto.md)
 - [OpenAPI\Client\Model.StartBackupRestoreRequestDto](docs/ModelStartBackupRestoreRequestDto.md)
 - [OpenAPI\Client\Model.StartEditRequest](docs/ModelStartEditRequest.md)
 - [OpenAPI\Client\Model.StartFillingForm](docs/ModelStartFillingForm.md)
 - [OpenAPI\Client\Model.StartFillingMode](docs/ModelStartFillingMode.md)
 - [OpenAPI\Client\Model.StartReassignRequestDto](docs/ModelStartReassignRequestDto.md)
 - [OpenAPI\Client\Model.StartUpdateUserTypeDto](docs/ModelStartUpdateUserTypeDto.md)
 - [OpenAPI\Client\Model.StorageArrayWrapper](docs/ModelStorageArrayWrapper.md)
 - [OpenAPI\Client\Model.StorageDto](docs/ModelStorageDto.md)
 - [OpenAPI\Client\Model.StorageEncryptionRequestDto](docs/ModelStorageEncryptionRequestDto.md)
 - [OpenAPI\Client\Model.StorageFilter](docs/ModelStorageFilter.md)
 - [OpenAPI\Client\Model.StorageRequestDto](docs/ModelStorageRequestDto.md)
 - [OpenAPI\Client\Model.StorageSettingsDto](docs/ModelStorageSettingsDto.md)
 - [OpenAPI\Client\Model.StorageSettingsWrapper](docs/ModelStorageSettingsWrapper.md)
 - [OpenAPI\Client\Model.StringArrayWrapper](docs/ModelStringArrayWrapper.md)
 - [OpenAPI\Client\Model.StringWrapper](docs/ModelStringWrapper.md)
 - [OpenAPI\Client\Model.StudioDefaultPageSettingsDto](docs/ModelStudioDefaultPageSettingsDto.md)
 - [OpenAPI\Client\Model.StudioDefaultPageSettingsWrapper](docs/ModelStudioDefaultPageSettingsWrapper.md)
 - [OpenAPI\Client\Model.SubAccountDto](docs/ModelSubAccountDto.md)
 - [OpenAPI\Client\Model.SubjectType](docs/ModelSubjectType.md)
 - [OpenAPI\Client\Model.SubmitFormDto](docs/ModelSubmitFormDto.md)
 - [OpenAPI\Client\Model.SubscriptionBalanceDto](docs/ModelSubscriptionBalanceDto.md)
 - [OpenAPI\Client\Model.SubscriptionBalanceWrapper](docs/ModelSubscriptionBalanceWrapper.md)
 - [OpenAPI\Client\Model.TariffDto](docs/ModelTariffDto.md)
 - [OpenAPI\Client\Model.TariffQuotaDto](docs/ModelTariffQuotaDto.md)
 - [OpenAPI\Client\Model.TariffState](docs/ModelTariffState.md)
 - [OpenAPI\Client\Model.TariffWrapper](docs/ModelTariffWrapper.md)
 - [OpenAPI\Client\Model.TaskProgressResponseDto](docs/ModelTaskProgressResponseDto.md)
 - [OpenAPI\Client\Model.TaskProgressResponseWrapper](docs/ModelTaskProgressResponseWrapper.md)
 - [OpenAPI\Client\Model.TelegramStatusDto](docs/ModelTelegramStatusDto.md)
 - [OpenAPI\Client\Model.TelegramStatusWrapper](docs/ModelTelegramStatusWrapper.md)
 - [OpenAPI\Client\Model.TemplatesConfigDto](docs/ModelTemplatesConfigDto.md)
 - [OpenAPI\Client\Model.TemplatesRequestDto](docs/ModelTemplatesRequestDto.md)
 - [OpenAPI\Client\Model.TenantAiAccessSettingsDto](docs/ModelTenantAiAccessSettingsDto.md)
 - [OpenAPI\Client\Model.TenantAiAccessSettingsRequestDto](docs/ModelTenantAiAccessSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantAiAccessSettingsWrapper](docs/ModelTenantAiAccessSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantAuditSettingsDto](docs/ModelTenantAuditSettingsDto.md)
 - [OpenAPI\Client\Model.TenantAuditSettingsRequestDto](docs/ModelTenantAuditSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantAuditSettingsWrapper](docs/ModelTenantAuditSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantBannerSettingsDto](docs/ModelTenantBannerSettingsDto.md)
 - [OpenAPI\Client\Model.TenantBannerSettingsRequestDto](docs/ModelTenantBannerSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantBannerSettingsWrapper](docs/ModelTenantBannerSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDeepLinkSettingsDto](docs/ModelTenantDeepLinkSettingsDto.md)
 - [OpenAPI\Client\Model.TenantDeepLinkSettingsWrapper](docs/ModelTenantDeepLinkSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettingsDto](docs/ModelTenantDevToolsAccessSettingsDto.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettingsRequestDto](docs/ModelTenantDevToolsAccessSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantDevToolsAccessSettingsWrapper](docs/ModelTenantDevToolsAccessSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantDto](docs/ModelTenantDto.md)
 - [OpenAPI\Client\Model.TenantIndustry](docs/ModelTenantIndustry.md)
 - [OpenAPI\Client\Model.TenantQuotaDto](docs/ModelTenantQuotaDto.md)
 - [OpenAPI\Client\Model.TenantQuotaFeatureDto](docs/ModelTenantQuotaFeatureDto.md)
 - [OpenAPI\Client\Model.TenantQuotaSettingsDto](docs/ModelTenantQuotaSettingsDto.md)
 - [OpenAPI\Client\Model.TenantQuotaSettingsRequestDto](docs/ModelTenantQuotaSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantQuotaSettingsWrapper](docs/ModelTenantQuotaSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantQuotaWrapper](docs/ModelTenantQuotaWrapper.md)
 - [OpenAPI\Client\Model.TenantStatus](docs/ModelTenantStatus.md)
 - [OpenAPI\Client\Model.TenantTrustedDomainsType](docs/ModelTenantTrustedDomainsType.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsDto](docs/ModelTenantUserInvitationSettingsDto.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsRequestDto](docs/ModelTenantUserInvitationSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantUserInvitationSettingsWrapper](docs/ModelTenantUserInvitationSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWalletService](docs/ModelTenantWalletService.md)
 - [OpenAPI\Client\Model.TenantWalletServiceSettingsDto](docs/ModelTenantWalletServiceSettingsDto.md)
 - [OpenAPI\Client\Model.TenantWalletServiceSettingsWrapper](docs/ModelTenantWalletServiceSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWalletSettingsDto](docs/ModelTenantWalletSettingsDto.md)
 - [OpenAPI\Client\Model.TenantWalletSettingsRequestDto](docs/ModelTenantWalletSettingsRequestDto.md)
 - [OpenAPI\Client\Model.TenantWalletSettingsWrapper](docs/ModelTenantWalletSettingsWrapper.md)
 - [OpenAPI\Client\Model.TenantWrapper](docs/ModelTenantWrapper.md)
 - [OpenAPI\Client\Model.TerminateRequestDto](docs/ModelTerminateRequestDto.md)
 - [OpenAPI\Client\Model.TfaAppCodeArrayWrapper](docs/ModelTfaAppCodeArrayWrapper.md)
 - [OpenAPI\Client\Model.TfaAppCodeDto](docs/ModelTfaAppCodeDto.md)
 - [OpenAPI\Client\Model.TfaConfirmDataDto](docs/ModelTfaConfirmDataDto.md)
 - [OpenAPI\Client\Model.TfaConfirmDataWrapper](docs/ModelTfaConfirmDataWrapper.md)
 - [OpenAPI\Client\Model.TfaRequestDto](docs/ModelTfaRequestDto.md)
 - [OpenAPI\Client\Model.TfaSettingsArrayWrapper](docs/ModelTfaSettingsArrayWrapper.md)
 - [OpenAPI\Client\Model.TfaSettingsDto](docs/ModelTfaSettingsDto.md)
 - [OpenAPI\Client\Model.TfaSetupCodeDto](docs/ModelTfaSetupCodeDto.md)
 - [OpenAPI\Client\Model.TfaSetupCodeWrapper](docs/ModelTfaSetupCodeWrapper.md)
 - [OpenAPI\Client\Model.TfaType](docs/ModelTfaType.md)
 - [OpenAPI\Client\Model.TfaValidateRequestDto](docs/ModelTfaValidateRequestDto.md)
 - [OpenAPI\Client\Model.ThirdPartyAccountArrayWrapper](docs/ModelThirdPartyAccountArrayWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyAccountDto](docs/ModelThirdPartyAccountDto.md)
 - [OpenAPI\Client\Model.ThirdPartyBackupRequestDto](docs/ModelThirdPartyBackupRequestDto.md)
 - [OpenAPI\Client\Model.ThirdPartyCheckConversionRequestDto](docs/ModelThirdPartyCheckConversionRequestDto.md)
 - [OpenAPI\Client\Model.ThirdPartyChunkedUploadSessionDto](docs/ModelThirdPartyChunkedUploadSessionDto.md)
 - [OpenAPI\Client\Model.ThirdPartyChunkedUploadSessionResultDto](docs/ModelThirdPartyChunkedUploadSessionResultDto.md)
 - [OpenAPI\Client\Model.ThirdPartyChunkedUploadSessionResultWrapper](docs/ModelThirdPartyChunkedUploadSessionResultWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyChunkedUploadSessionWrapper](docs/ModelThirdPartyChunkedUploadSessionWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyConfigurationDto](docs/ModelThirdPartyConfigurationDto.md)
 - [OpenAPI\Client\Model.ThirdPartyConfigurationWrapper](docs/ModelThirdPartyConfigurationWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyDraftLocation](docs/ModelThirdPartyDraftLocation.md)
 - [OpenAPI\Client\Model.ThirdPartyFileArrayWrapper](docs/ModelThirdPartyFileArrayWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyFileDto](docs/ModelThirdPartyFileDto.md)
 - [OpenAPI\Client\Model.ThirdPartyFileEntryDto](docs/ModelThirdPartyFileEntryDto.md)
 - [OpenAPI\Client\Model.ThirdPartyFileWrapper](docs/ModelThirdPartyFileWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyFolderArrayWrapper](docs/ModelThirdPartyFolderArrayWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyFolderContentDto](docs/ModelThirdPartyFolderContentDto.md)
 - [OpenAPI\Client\Model.ThirdPartyFolderContentWrapper](docs/ModelThirdPartyFolderContentWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyFolderDto](docs/ModelThirdPartyFolderDto.md)
 - [OpenAPI\Client\Model.ThirdPartyFolderWrapper](docs/ModelThirdPartyFolderWrapper.md)
 - [OpenAPI\Client\Model.ThirdPartyRequestDto](docs/ModelThirdPartyRequestDto.md)
 - [OpenAPI\Client\Model.ThirdPartySaveAsPdfRequest](docs/ModelThirdPartySaveAsPdfRequest.md)
 - [OpenAPI\Client\Model.ThirdPartyUploadSessionResponseDto](docs/ModelThirdPartyUploadSessionResponseDto.md)
 - [OpenAPI\Client\Model.ThirdPartyUploadSessionResponseWrapper](docs/ModelThirdPartyUploadSessionResponseWrapper.md)
 - [OpenAPI\Client\Model.Thumbnail](docs/ModelThumbnail.md)
 - [OpenAPI\Client\Model.ThumbnailsDataDto](docs/ModelThumbnailsDataDto.md)
 - [OpenAPI\Client\Model.ThumbnailsDataWrapper](docs/ModelThumbnailsDataWrapper.md)
 - [OpenAPI\Client\Model.ThumbnailsRequest](docs/ModelThumbnailsRequest.md)
 - [OpenAPI\Client\Model.TimeBoundDto](docs/ModelTimeBoundDto.md)
 - [OpenAPI\Client\Model.TimezoneArrayWrapper](docs/ModelTimezoneArrayWrapper.md)
 - [OpenAPI\Client\Model.TimezoneDto](docs/ModelTimezoneDto.md)
 - [OpenAPI\Client\Model.TokenDiagnosticsDto](docs/ModelTokenDiagnosticsDto.md)
 - [OpenAPI\Client\Model.TokenDiagnosticsWrapper](docs/ModelTokenDiagnosticsWrapper.md)
 - [OpenAPI\Client\Model.TopUpDepositRequestDto](docs/ModelTopUpDepositRequestDto.md)
 - [OpenAPI\Client\Model.TransactionInfoDto](docs/ModelTransactionInfoDto.md)
 - [OpenAPI\Client\Model.TurnOnAdminMessageSettingsRequestDto](docs/ModelTurnOnAdminMessageSettingsRequestDto.md)
 - [OpenAPI\Client\Model.UpcomingPaymentArrayWrapper](docs/ModelUpcomingPaymentArrayWrapper.md)
 - [OpenAPI\Client\Model.UpcomingPaymentDto](docs/ModelUpcomingPaymentDto.md)
 - [OpenAPI\Client\Model.UpdateApiKeyRequest](docs/ModelUpdateApiKeyRequest.md)
 - [OpenAPI\Client\Model.UpdateClientRequest](docs/ModelUpdateClientRequest.md)
 - [OpenAPI\Client\Model.UpdateCommentRequest](docs/ModelUpdateCommentRequest.md)
 - [OpenAPI\Client\Model.UpdateFileRequest](docs/ModelUpdateFileRequest.md)
 - [OpenAPI\Client\Model.UpdateFolderMetadataTemplateRequest](docs/ModelUpdateFolderMetadataTemplateRequest.md)
 - [OpenAPI\Client\Model.UpdateGroupRequest](docs/ModelUpdateGroupRequest.md)
 - [OpenAPI\Client\Model.UpdateMemberCultureRequest](docs/ModelUpdateMemberCultureRequest.md)
 - [OpenAPI\Client\Model.UpdateMemberRequestDto](docs/ModelUpdateMemberRequestDto.md)
 - [OpenAPI\Client\Model.UpdateMembersQuotaRequestDto](docs/ModelUpdateMembersQuotaRequestDto.md)
 - [OpenAPI\Client\Model.UpdateMembersQuotaRequestDtoQuota](docs/ModelUpdateMembersQuotaRequestDtoQuota.md)
 - [OpenAPI\Client\Model.UpdateMembersRequestDto](docs/ModelUpdateMembersRequestDto.md)
 - [OpenAPI\Client\Model.UpdateMetadataFieldRequest](docs/ModelUpdateMetadataFieldRequest.md)
 - [OpenAPI\Client\Model.UpdateMetadataTemplate](docs/ModelUpdateMetadataTemplate.md)
 - [OpenAPI\Client\Model.UpdatePhotoMemberRequest](docs/ModelUpdatePhotoMemberRequest.md)
 - [OpenAPI\Client\Model.UpdateRoomGroupRequest](docs/ModelUpdateRoomGroupRequest.md)
 - [OpenAPI\Client\Model.UpdateRoomRequest](docs/ModelUpdateRoomRequest.md)
 - [OpenAPI\Client\Model.UpdateRoomsQuotaRequestDto](docs/ModelUpdateRoomsQuotaRequestDto.md)
 - [OpenAPI\Client\Model.UpdateRoomsRoomIdsRequestDto](docs/ModelUpdateRoomsRoomIdsRequestDto.md)
 - [OpenAPI\Client\Model.UpdateServiceLimitRequestDto](docs/ModelUpdateServiceLimitRequestDto.md)
 - [OpenAPI\Client\Model.UpdateTagRequestDto](docs/ModelUpdateTagRequestDto.md)
 - [OpenAPI\Client\Model.UpdateWebhooksConfigRequestDto](docs/ModelUpdateWebhooksConfigRequestDto.md)
 - [OpenAPI\Client\Model.UploadResultDto](docs/ModelUploadResultDto.md)
 - [OpenAPI\Client\Model.UploadResultWrapper](docs/ModelUploadResultWrapper.md)
 - [OpenAPI\Client\Model.UploadSessionResponseDto](docs/ModelUploadSessionResponseDto.md)
 - [OpenAPI\Client\Model.UploadSessionResponseWrapper](docs/ModelUploadSessionResponseWrapper.md)
 - [OpenAPI\Client\Model.UsageSpaceStatItemArrayWrapper](docs/ModelUsageSpaceStatItemArrayWrapper.md)
 - [OpenAPI\Client\Model.UsageSpaceStatItemDto](docs/ModelUsageSpaceStatItemDto.md)
 - [OpenAPI\Client\Model.UserConfigDto](docs/ModelUserConfigDto.md)
 - [OpenAPI\Client\Model.UserExistsResponseDto](docs/ModelUserExistsResponseDto.md)
 - [OpenAPI\Client\Model.UserExistsResponseWrapper](docs/ModelUserExistsResponseWrapper.md)
 - [OpenAPI\Client\Model.UserInvitation](docs/ModelUserInvitation.md)
 - [OpenAPI\Client\Model.UserInvitationRequestDto](docs/ModelUserInvitationRequestDto.md)
 - [OpenAPI\Client\Model.UserServiceLimitDto](docs/ModelUserServiceLimitDto.md)
 - [OpenAPI\Client\Model.ValidationErrorResponse](docs/ModelValidationErrorResponse.md)
 - [OpenAPI\Client\Model.ValidationResult](docs/ModelValidationResult.md)
 - [OpenAPI\Client\Model.VectorizationStatus](docs/ModelVectorizationStatus.md)
 - [OpenAPI\Client\Model.WalletQuantityRequestDto](docs/ModelWalletQuantityRequestDto.md)
 - [OpenAPI\Client\Model.WalletServiceArrayWrapper](docs/ModelWalletServiceArrayWrapper.md)
 - [OpenAPI\Client\Model.WalletServiceDto](docs/ModelWalletServiceDto.md)
 - [OpenAPI\Client\Model.WalletServiceWrapper](docs/ModelWalletServiceWrapper.md)
 - [OpenAPI\Client\Model.WatermarkAdditions](docs/ModelWatermarkAdditions.md)
 - [OpenAPI\Client\Model.WatermarkDto](docs/ModelWatermarkDto.md)
 - [OpenAPI\Client\Model.WatermarkOnDrawDto](docs/ModelWatermarkOnDrawDto.md)
 - [OpenAPI\Client\Model.WatermarkParagraphDto](docs/ModelWatermarkParagraphDto.md)
 - [OpenAPI\Client\Model.WatermarkRequestDto](docs/ModelWatermarkRequestDto.md)
 - [OpenAPI\Client\Model.WatermarkTextRunDto](docs/ModelWatermarkTextRunDto.md)
 - [OpenAPI\Client\Model.WebItemSecurityRequestDto](docs/ModelWebItemSecurityRequestDto.md)
 - [OpenAPI\Client\Model.WebItemsSecurityRequestDto](docs/ModelWebItemsSecurityRequestDto.md)
 - [OpenAPI\Client\Model.WebPluginArrayWrapper](docs/ModelWebPluginArrayWrapper.md)
 - [OpenAPI\Client\Model.WebPluginDto](docs/ModelWebPluginDto.md)
 - [OpenAPI\Client\Model.WebPluginRequest](docs/ModelWebPluginRequest.md)
 - [OpenAPI\Client\Model.WebPluginWrapper](docs/ModelWebPluginWrapper.md)
 - [OpenAPI\Client\Model.WebhookGroupStatus](docs/ModelWebhookGroupStatus.md)
 - [OpenAPI\Client\Model.WebhookRetryRequestDto](docs/ModelWebhookRetryRequestDto.md)
 - [OpenAPI\Client\Model.WebhookTrigger](docs/ModelWebhookTrigger.md)
 - [OpenAPI\Client\Model.WebhookTriggerArrayWrapper](docs/ModelWebhookTriggerArrayWrapper.md)
 - [OpenAPI\Client\Model.WebhookTriggerDto](docs/ModelWebhookTriggerDto.md)
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
 - [OpenAPI\Client\Model.WhiteLabelItemSizeDto](docs/ModelWhiteLabelItemSizeDto.md)
 - [OpenAPI\Client\Model.WhiteLabelLogoType](docs/ModelWhiteLabelLogoType.md)
 - [OpenAPI\Client\Model.WhiteLabelRequestDto](docs/ModelWhiteLabelRequestDto.md)
 - [OpenAPI\Client\Model.WizardRequestDto](docs/ModelWizardRequestDto.md)
 - [OpenAPI\Client\Model.WizardSettingsDto](docs/ModelWizardSettingsDto.md)
 - [OpenAPI\Client\Model.WizardSettingsWrapper](docs/ModelWizardSettingsWrapper.md)
 - [OpenAPI\Client\Model.XlsxReportResponseDto](docs/ModelXlsxReportResponseDto.md)
 - [OpenAPI\Client\Model.XlsxReportResponseWrapper](docs/ModelXlsxReportResponseWrapper.md)

</details>

## Author

support@onlyoffice.com

