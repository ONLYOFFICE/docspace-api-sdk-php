# # CustomerServiceUsageReportRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_name** | **string[]** | The wallet services whose consumption is reported, named the way the billing catalogue names them -  `backup`, `ai-tools`, `ai-search`, `disk-storage`, `docscloud`. Take the values from the `serviceName` field  of `GET api/2.0/portal/payment/walletservices`; the match ignores case, a name this installation does not  sell fails the call with 404, and an omitted list reports every service. A bare string is accepted in place  of an array for backward compatibility. | [optional]
**start_date** | **\DateTime** | The beginning of the reported period, inclusive. Read in the portal time zone rather than in UTC, and  defaults to the portal creation date. | [optional]
**end_date** | **\DateTime** | The end of the reported period, inclusive. Read in the portal time zone rather than in UTC, and defaults to  the moment the call is made. | [optional]
**participant_name** | **string** | The participant whose consumption is reported - the account the accounting service records as the consumer.  Consumption caused by a portal user carries that user ID here; surrounding whitespace is trimmed, and an  omitted value reports every participant. | [optional]
**status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) | The outcome to keep. Consumption that is still being settled is reported as pending and may change later,  while the other outcomes are final; every outcome is reported when this is omitted. | [optional]
**metadata** | **array<string,string>** | The usage annotations a wallet service records alongside its consumption, as the key and value pairs that  must all match for a record to be reported. The keys are chosen by the service that writes them, so read  them off the `metadata` of the records returned by `GET api/2.0/portal/payment/customer/usage` rather than  guessing; an omitted map reports every record. | [optional]
**order_by** | **string** | The name of the field the per-service totals are sorted by, spelled as the accounting service names it, such  as `ServiceName` or `StartDate`. Surrounding whitespace is trimmed, and the accounting service applies its  own ordering when this is omitted. | [optional]
**order_type** | [**\OpenAPI\Client\Model\OperationOrderType**](OperationOrderType.md) | The direction the field named in `orderBy` is sorted in. Newest or largest first is what the accounting  service does by default, so leaving this out sorts the same way as asking for descending explicitly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
