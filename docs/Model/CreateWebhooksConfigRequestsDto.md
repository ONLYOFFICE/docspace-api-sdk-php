# # CreateWebhooksConfigRequestsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The human-readable name of the webhook configuration. |
**uri** | **string** | The destination URL where the webhook events will be sent. |
**secret_key** | **string** | The webhook secret key used to sign the webhook payloads for the security verification. | [optional]
**enabled** | **bool** | Specifies whether the webhook configuration is active or not. | [optional]
**ssl** | **bool** | Specifies whether the SSL certificate verification is required or not. | [optional]
**triggers** | [**\OpenAPI\Client\Model\WebhookTrigger**](WebhookTrigger.md) |  | [optional]
**target_id** | **string** | Target ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
