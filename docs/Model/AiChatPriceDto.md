# # AiChatPriceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prompt** | **float** | The cost of one million tokens sent to the model, which includes the conversation history resent with  every turn and not just the newest message. | [optional]
**completion** | **float** | The cost of one million tokens the model writes back. It is normally the dearer of the two directions. | [optional]
**prompt_cache_read** | **float** | The cost of one million prompt tokens served from the prompt cache. It is absent when the model does not  support prompt caching. | [optional]
**prompt_cache_write** | **float** | The cost of one million prompt tokens written to the prompt cache with the default lifetime. It is absent  when the model does not support prompt caching. | [optional]
**prompt_cache_write1_h** | **float** | The cost of one million prompt tokens written to the prompt cache with a one-hour lifetime. It is absent  when the model offers no such option. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
