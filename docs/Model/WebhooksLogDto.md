# # WebhooksLogDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The identifier of this attempt, which is what the `eventId` filter of  `GET api/2.0/settings/webhooks/log` picks one record by and what  `PUT api/2.0/settings/webhook/{id}/retry` re-sends. A retry produces a new record with a new identifier  and leaves this one as it is. |
**config_name** | **string** | The name of the subscription the attempt belongs to. It is the name as it stands now, so it follows a  later rename of the subscription rather than recording what it was called at the time. | [optional]
**trigger** | [**\OpenAPI\Client\Model\WebhookTrigger**](WebhookTrigger.md) | The event that caused the attempt, as a single bit rather than a mask - a delivery is always for one  event, even though a subscription covers several. | [optional]
**creation_time** | **\DateTime** | When the attempt was queued, as a UTC instant - unlike the dates of the subscription itself, which come  in the portal time zone. Records come back newest first by this moment. | [optional]
**method** | **string** | The HTTP method the delivery was sent with, which is `POST` for every webhook the portal sends. | [optional]
**route** | **string** | The address the delivery was sent to, which is the subscription's URL as it stood at the time - so an  older record can name an address the subscription no longer uses. | [optional]
**request_headers** | **string** | The headers the portal sent, serialised as one string, including the signature header a receiver verifies  the payload with. | [optional]
**request_payload** | **string** | The body the portal sent, which is the event payload as JSON text. It is stored as it was sent, so it  still describes the entity as it looked at the time of the event. | [optional]
**response_headers** | **string** | The headers the target answered with, serialised the same way as `requestHeaders`. It is empty while the  attempt is still on its way and on an attempt that never reached the target. | [optional]
**response_payload** | **string** | The body the target answered with, truncated for storage. Empty under the same conditions as  `responseHeaders`, and also for a target that answers with no body at all. | [optional]
**status** | **int** | The HTTP status code the target answered. It is `0` while the attempt is still on its way and on one that  never reached the target, so `0` is not a failure code - it is the absence of an answer. | [optional]
**delivery** | **\DateTime** | When the answer came back, as a UTC instant like `creationTime`. It is empty while the attempt is still on  its way, which together with `status` is how a pending record is told from a finished one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
