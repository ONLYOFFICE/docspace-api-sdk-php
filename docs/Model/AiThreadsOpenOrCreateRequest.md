# # AiThreadsOpenOrCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** |  | [optional]
**profile** | [**\OpenAPI\Client\Model\AiProfile**](AiProfile.md) | Profile the title generation runs on. |
**profile_id** | **string** |  |
**first_message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | First user message a fresh thread derives its title from. |
**entity_id** | **string** | Opaque scope token persisted on a freshly created thread. | [optional]
**entity_meta** | [**\OpenAPI\Client\Model\AiThreadsOpenOrCreateRequestEntityMeta**](AiThreadsOpenOrCreateRequestEntityMeta.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
