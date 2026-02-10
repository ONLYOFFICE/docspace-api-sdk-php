# # ApiKeyResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The API key unique identifier. |
**name** | **string** | The API key name. |
**key** | **string** | The full API key value (only returned when creating a new key). |
**key_postfix** | **string** | The API key postfix (used for identification). | [optional]
**permissions** | **string[]** | The list of permissions granted to the API key. |
**last_used** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**create_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**create_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) |  | [optional]
**expires_at** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**is_active** | **bool** | Indicates whether the API key is active or not. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
