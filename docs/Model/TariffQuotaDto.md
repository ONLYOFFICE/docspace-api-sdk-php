# # TariffQuotaDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quota this entry stands for. `GET api/2.0/portal/payment/quotas` describes the quota behind the ID,  including what its `quantity` counts; a negative ID belongs to a built-in quota rather than a purchased  one. | [optional]
**quantity** | **int** | How much of the quota the portal holds, in whatever the quota itself is measured in - seats for a plan,  gigabytes for storage. It is `1` for a quota that is simply on or off. | [optional]
**wallet** | **bool** | Whether the quota is paid for out of the portal wallet as it is consumed, rather than being part of the  subscription charged per period. | [optional]
**additional** | **bool** | Whether this is an add-on bought on top of the plan rather than the plan itself. Exactly one entry of  `quotas` is the plan, and the rest are add-ons. | [optional]
**due_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | When this quota runs out, in the portal time zone. An add-on can end earlier or later than the  subscription; a quota with no deadline of its own reports the subscription's `dueDate` instead of an empty  value. | [optional]
**next_quantity** | **int** | The quantity the next period is going to be charged for, when a change has been scheduled. It is empty  while `quantity` simply carries over. | [optional]
**next_quota** | **int** | The quota this one is scheduled to be replaced by at the start of the next period, empty when no such  switch is planned. `GET api/2.0/portal/tariff/upcoming` already reports the charge for the replacement. | [optional]
**state** | [**\OpenAPI\Client\Model\QuotaState**](QuotaState.md) | Whether the quota is still running or its deadline has passed. It is empty for a quota that has no  deadline of its own, which means it lasts as long as the subscription does. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
