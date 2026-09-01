# # ConfigurationDtoInteger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document** | [**\OpenAPI\Client\Model\DocumentConfigDto**](DocumentConfigDto.md) | The document configuration. |
**document_type** | **string** | The document type. |
**editor_config** | [**\OpenAPI\Client\Model\EditorConfigurationDto**](EditorConfigurationDto.md) | The editor configuration. |
**editor_type** | [**\OpenAPI\Client\Model\EditorType**](EditorType.md) | The editor type. |
**editor_url** | **string** | The editor URL. |
**token** | **string** | The token of the file configuration. | [optional]
**type** | **string** | The platform type. | [optional]
**file** | [**\OpenAPI\Client\Model\FileDtoInteger**](FileDtoInteger.md) | The file parameters. |
**error_message** | **string** | The error message. | [optional]
**start_filling** | **bool** | Specifies if the file filling has started or not. | [optional]
**filling_status** | **bool** | The file filling status. | [optional]
**start_filling_mode** | [**\OpenAPI\Client\Model\StartFillingMode**](StartFillingMode.md) | The start filling mode. | [optional]
**filling_session_id** | **string** | The file filling session ID. | [optional]
**quota_exceeded_scope** | [**\OpenAPI\Client\Model\QuotaScope**](QuotaScope.md) | Indicates which quota scope has been exceeded. | [optional]
**generation_tool_call_state** | [**\OpenAPI\Client\Model\EditorToolCallStateDto**](EditorToolCallStateDto.md) | The generation tool call state. Used to run the agent flow in the editor. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
