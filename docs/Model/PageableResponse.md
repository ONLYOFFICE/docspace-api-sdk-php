# # PageableResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **mixed** |  | [optional]
**limit** | **int** | The page size that was applied to this request, between 1 and 50. | [optional]
**last_client_id** | **string** | The cursor to send back as last_client_id to ask for the next page, together with last_created_on. It is null when the page is empty. | [optional]
**last_created_on** | **\DateTime** | The cursor to send back as last_created_on to ask for the next page, together with last_client_id. It is null when the page is empty. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
