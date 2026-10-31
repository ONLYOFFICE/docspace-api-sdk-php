# # AiAgentsGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | [**\OpenAPI\Client\Model\AiAgentsGet200ResponseAllOfResponse**](AiAgentsGet200ResponseAllOfResponse.md) |  | [optional]
**count** | **int** | How many items this response carries: the length of the page for a list, 1 for a single object | [optional]
**total** | **int** | How many items the whole list holds across all pages, for working out how many pages to request. Sent only by the operations that page their results, and left out of every other response | [optional]
**links** | [**\OpenAPI\Client\Model\GetPortalPrices200ResponseLinksInner[]**](GetPortalPrices200ResponseLinksInner.md) | List of links related to the response | [optional]
**status** | **int** | HTTP status code of the response | [optional]
**status_code** | **int** | HTTP status code of the response (duplicate of status) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
