# # AiThread

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_id** | **string** | Unique thread identifier (UUID). |
**title** | **string** | Optional thread title. Auto-generated from the first message if not set. | [optional]
**last_edit_date** | **float** | Timestamp (ms since epoch) of the last message in this thread. Used for sorting. | [optional]
**provider** | [**\OpenAPI\Client\Model\AiTProvider**](AiTProvider.md) | Provider configuration at the time of last message. Used for thread-level provider display. | [optional]
**model** | [**\OpenAPI\Client\Model\AiModel**](AiModel.md) | Model info at the time of last message. | [optional]
**profile_id** | **string** | ID of the profile used for this thread. Links to `Profile.id`. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
