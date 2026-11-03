# # AiSuggestedQuestionsResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | `ready` - the questions are there; `pending` - they are being generated and arrive over the socket, ask again later; `unavailable` - the attachment is not a form that can have any. |
**questions** | [**\OpenAPI\Client\Model\AiSuggestedQuestion[]**](AiSuggestedQuestion.md) | The questions; empty unless `status` is `ready`. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
