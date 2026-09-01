# # AiAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Storage-assigned UUID. |
**kind** | **string** | file | image. |
**source** | **string** | Origin of the attachment. `user` — uploaded by the user in the composer (the default when unset, for backward compatibility). `tool` — produced by a tool call (e.g. `generate_image`). Lets the integrator's adapter route or apply policies (separate bucket, quotas, TTL, CDN) per source. | [optional]
**title** | **string** | Display label (filename or user-visible title). |
**content** | **string** | Extracted text for files. | [optional]
**base64** | **string** | Base64 data URL for images. | [optional]
**path** | **string** | Original host file path (for files). | [optional]
**type** | **float** | ONLYOFFICE file type code (for files). | [optional]
**message_id** | **string** | Owning message id once linked. Unset while the attachment is a draft. | [optional]
**thread_id** | **string** | Owning thread id once linked. Unset while the attachment is a draft. | [optional]
**entity_id** | **string** | Opaque scope token (entity / room) the attachment was created in. Drafts carry it so an entity switch keeps in-flight composer state isolated; once linked to a message the field is redundant with the thread's own entity binding. | [optional]
**created_at** | **float** | Storage-assigned creation timestamp. |
**can_analyze** | **bool** | Whether the attached form can be analyzed. | [optional]
**form_keys** | [**\OpenAPI\Client\Model\AiAttachmentFormKeysInner[]**](AiAttachmentFormKeysInner.md) | Keys of the fields inside the form. `key` is the field identifier, `text` its human-readable label. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
