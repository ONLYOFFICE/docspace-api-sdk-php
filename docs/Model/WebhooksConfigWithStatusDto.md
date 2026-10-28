# # WebhooksConfigWithStatusDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configs** | [**\OpenAPI\Client\Model\WebhooksConfigDto**](WebhooksConfigDto.md) | The subscription itself. Despite the plural name it is one subscription, not a list. | [optional]
**status** | **int** | The HTTP status code the target answered on the last attempt. `0` means nothing has been delivered yet,  which is not the same as a failure. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
