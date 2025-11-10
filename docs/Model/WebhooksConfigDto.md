# # WebhooksConfigDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The webhook ID. |
**name** | **string** | The webhook name. | [optional]
**uri** | **string** | The webhook URI. | [optional]
**enabled** | **bool** | Specifies if the webhooks are enabled or not. | [optional]
**ssl** | **bool** | The webhook SSL verification (enabled or not). | [optional]
**triggers** | [**\OpenAPI\Client\Model\WebhookTrigger**](WebhookTrigger.md) |  | [optional]
**target_id** | **string** | The webhook target ID. | [optional]
**created_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**created_on** | **\DateTime** | The date and time when the webhook was created. | [optional]
**modified_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**modified_on** | **\DateTime** | The date and time when the webhook was modified. | [optional]
**last_failure_on** | **\DateTime** | The date and time of the webhook last failure. | [optional]
**last_failure_content** | **string** | The webhook last failure content. | [optional]
**last_success_on** | **\DateTime** | The date and time of the webhook last success. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
