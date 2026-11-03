# # AiAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Storage-assigned UUID. |
**kind** | **string** | file | image. |
**source** | **string** | Where the attachment came from: `user` - attached by the user (also when unset); `tool` - produced by a tool call (for example `generate_image`). | [optional]
**title** | **string** | Display label (filename or user-visible title). |
**content** | **string** | Extracted text for files. | [optional]
**base64** | **string** | Base64 data URL for images. | [optional]
**path** | **string** | Original host file path (for files). | [optional]
**type** | **float** | ONLYOFFICE file type code (for files). | [optional]
**message_id** | **string** | Owning message id once linked. Unset while the attachment is a draft. | [optional]
**thread_id** | **string** | Owning thread id once linked. Unset while the attachment is a draft. | [optional]
**entity_id** | **string** | The room or folder the attachment was created in, as an opaque token; once the attachment is bound to a message it repeats the thread's own scope. | [optional]
**created_at** | **float** | Storage-assigned creation timestamp. |
**can_analyze** | **bool** | Whether the attached form can be analyzed. | [optional]
**form_keys** | [**\OpenAPI\Client\Model\AiAttachmentFormKeysInner[]**](AiAttachmentFormKeysInner.md) | Keys of the fields inside the form. `key` is the field identifier, `text` its human-readable label. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
