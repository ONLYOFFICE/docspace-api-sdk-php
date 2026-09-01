# # HistoryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier for the file history entry. |
**action** | [**\OpenAPI\Client\Model\HistoryAction**](HistoryAction.md) | The action performed on the file. |
**initiator** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) | The user parameters. |
**date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The API date and time parameters. |
**data** | [**\OpenAPI\Client\Model\HistoryData**](HistoryData.md) | The history data. |
**related** | [**\OpenAPI\Client\Model\HistoryDto[]**](HistoryDto.md) | The list of related history. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
