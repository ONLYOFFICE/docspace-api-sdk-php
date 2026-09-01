# # CustomerServiceUsageReportRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_name** | **string[]** | The service name list. A single string is also accepted for backward compatibility. | [optional]
**start_date** | **\DateTime** | The report start date. | [optional]
**end_date** | **\DateTime** | The report end date. | [optional]
**participant_name** | **string** | The participant name. | [optional]
**status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) | The operation status to filter by. | [optional]
**metadata** | **array<string,string>** | Metadata key-value pairs to filter by. | [optional]
**order_by** | **string** | The field to order by. | [optional]
**order_type** | [**\OpenAPI\Client\Model\OperationOrderType**](OperationOrderType.md) | Order direction: Ascending or Descending. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
