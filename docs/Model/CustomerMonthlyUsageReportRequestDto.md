# # CustomerMonthlyUsageReportRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **\DateTime** | The beginning of the reported period, inclusive. The months are cut in the portal time zone rather than in  UTC, so spending at the turn of a month falls where the portal sees it; defaults to the portal creation date. | [optional]
**end_date** | **\DateTime** | The end of the reported period, inclusive. Cut in the portal time zone in the same way as `startDate`, and  defaults to the moment the call is made. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
