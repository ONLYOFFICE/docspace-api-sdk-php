# # CustomerOperationsReportRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_name** | **string** | The service name. | [optional]
**write_off_service_quota** | **bool** | Write-off of the quota for the service | [optional]
**start_date** | **\DateTime** | The report start date. | [optional]
**end_date** | **\DateTime** | The report end date. | [optional]
**participant_name** | **string** | The participant name. | [optional]
**credit** | **bool** | Specifies whether to include credit operations in the report. | [optional]
**debit** | **bool** | Specifies whether to include debit operations in the report. | [optional]
**types** | [**\OpenAPI\Client\Model\OperationType**](OperationType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**order_by** | **string** | The field to order by. | [optional]
**order_type** | [**\OpenAPI\Client\Model\OperationOrderType**](OperationOrderType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
