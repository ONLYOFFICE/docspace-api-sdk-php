# # ServiceLimitReportDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | [**\OpenAPI\Client\Model\ServiceLimitDto[]**](ServiceLimitDto.md) | The limits of this page, one per user; empty when no limit applies to any user or the page is past the end. | [optional]
**offset** | **int** | The number of limits skipped before this page. | [optional]
**limit** | **int** | The page size the page was read with. | [optional]
**total_page** | **int** | The number of pages the whole list takes at this page size. | [optional]
**current_page** | **int** | The number of this page, starting from 1. | [optional]
**total_quantity** | **int** | The number of users with a limit in force across all pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
