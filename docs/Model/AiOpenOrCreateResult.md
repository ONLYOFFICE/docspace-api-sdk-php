# # AiOpenOrCreateResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | The thread that was opened, or the one just created. |
**title** | **string** | Empty string for existing threads — the engine doesn't re-fetch. |
**prior_messages** | [**\OpenAPI\Client\Model\AiThreadMessageLike[]**](AiThreadMessageLike.md) | The messages already in the thread - empty for a thread that was just created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
