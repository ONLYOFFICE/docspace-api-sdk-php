# # MessageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the message. | [optional]
**role** | [**\OpenAPI\Client\Model\Role**](Role.md) |  | [optional]
**contents** | [**\OpenAPI\Client\Model\MessageContentDto[]**](MessageContentDto.md) | The ordered collection of content blocks that make up the message body (text, tool calls, or attachments). | [optional]
**created_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
