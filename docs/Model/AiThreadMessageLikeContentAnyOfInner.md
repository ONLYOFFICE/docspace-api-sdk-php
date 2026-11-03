# # AiThreadMessageLikeContentAnyOfInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Part kind: `text`, `reasoning`, `source`, `image`, `file`, `audio`, `data` or `tool-call`. |
**text** | **string** | The text of a `text` or `reasoning` part. | [optional]
**parent_id** | **string** | Id of the part this one belongs to, on `text`, `reasoning`, `source` and `tool-call` parts. On a `reasoning` part the chat library keeps the provider's thinking signature here. | [optional]
**source_type** | **string** | A `source` part's source kind; always `url`. | [optional]
**id** | **string** | A `source` part's id. | [optional]
**url** | **string** | A `source` part's URL. | [optional]
**title** | **string** | A `source` part's title. | [optional]
**image** | **string** | An `image` part's picture, as a URL (usually a `data:` URL). For an image the user attached, a JSON string `{ ref, title, kind: image }` naming the stored attachment instead. | [optional]
**mime_type** | **string** | A `file` part's media type. For a file the user attached, a JSON string `{ ref, title, kind: file, path, type }` naming the stored attachment instead - the chat library carries the reference here. | [optional]
**data** | **string** | A `file` part's content; empty when the part references an attachment. (A `data` part would carry its payload here too, as any JSON value; neither the chat library nor this service writes one.) | [optional]
**filename** | **string** | The file name of a `file` or `image` part. | [optional]
**name** | **string** | An `image` part's display name, or a `data` part's name. | [optional]
**audio** | [**\OpenAPI\Client\Model\AiThreadMessageLikeContentAnyOfInnerAudio**](AiThreadMessageLikeContentAnyOfInnerAudio.md) |  | [optional]
**tool_call_id** | **string** | A `tool-call` part's call id. | [optional]
**tool_name** | **string** | A `tool-call` part's tool name. | [optional]
**args** | **object** | A `tool-call` part's arguments. | [optional]
**args_text** | **string** | A `tool-call` part's arguments as the model streamed them, JSON text. | [optional]
**result** | **mixed** |  | [optional]
**is_error** | **bool** | Whether a `tool-call` part's result is an error. | [optional]
**artifact** | **mixed** |  | [optional]
**interrupt** | [**\OpenAPI\Client\Model\AiThreadMessageLikeContentAnyOfInnerInterrupt**](AiThreadMessageLikeContentAnyOfInnerInterrupt.md) |  | [optional]
**messages** | **object[]** | Messages of a sub-agent run inside a `tool-call` part. | [optional]
**metadata** | **object** | Provider-specific data of a `tool-call` part - for a Gemini call, `{ thoughtSignature }`, which has to be sent back with the call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
