# # ErrorApiResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | The response status flag. Always 1 on an error, as opposed to 0 on success. | [optional]
**status_code** | **int** | The HTTP status code of the response, repeated in the body. | [optional]
**error** | [**\OpenAPI\Client\Model\ErrorApiResponseError**](ErrorApiResponseError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
