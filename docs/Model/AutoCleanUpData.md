# # AutoCleanUpData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_auto_clean_up** | **bool** | Whether the trash of the account is cleared automatically. While it is false nothing is removed by the portal  and the interval below is kept but unused. | [optional]
**gap** | [**\OpenAPI\Client\Model\DateToAutoCleanUp**](DateToAutoCleanUp.md) | How long an item may stay in the trash before it is removed for good. It is reported even while clearing is  off, and it is what the moment in the `autoDelete` field of a trashed entry is computed from. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
