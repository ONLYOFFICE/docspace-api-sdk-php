# # AiThreadMessageLike

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Storage-assigned message id (absent on inbound drafts). | [optional]
**role** | **string** | Message author role. |
**content** | [**\OpenAPI\Client\Model\AiThreadMessageLikeContent**](AiThreadMessageLikeContent.md) |  |
**created_at** | **string** | Creation timestamp, ISO-8601 on the wire. | [optional]
**status** | [**\OpenAPI\Client\Model\AiThreadMessageLikeStatus**](AiThreadMessageLikeStatus.md) |  | [optional]
**metadata** | **object** | Arbitrary per-message metadata. | [optional]
**attachments** | **object[]** | Attachments linked to the message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
