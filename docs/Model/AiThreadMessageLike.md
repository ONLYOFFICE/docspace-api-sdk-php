# # AiThreadMessageLike

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Storage-assigned message id (absent on inbound drafts). | [optional]
**role** | **string** | Message author role. |
**content** | [**\OpenAPI\Client\Model\AiThreadMessageLikeContent**](AiThreadMessageLikeContent.md) |  |
**created_at** | **string** | Creation timestamp, ISO-8601 on the wire. | [optional]
**status** | [**\OpenAPI\Client\Model\AiThreadMessageLikeStatus**](AiThreadMessageLikeStatus.md) |  | [optional]
**metadata** | **object** | Per-message metadata. The chat library writes `custom` (with the round's `contextEntityId`) and `steps` (token usage per provider request); `unstable_state`, `unstable_annotations`, `unstable_data` and `submittedFeedback` may appear as well. Read it as an open map. | [optional]
**attachments** | **object[]** | Attachments linked to the message (`id`, `type`, `name`, `contentType`, `status`, `content`). Read them as open objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
