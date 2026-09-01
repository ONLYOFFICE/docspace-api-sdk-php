# # ApiKeyResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The API key unique identifier. |
**name** | **string** | The API key name. |
**key** | **string** | The full API key value (only returned when creating a new key). |
**key_postfix** | **string** | The API key postfix (used for identification). | [optional]
**permissions** | **string[]** | The list of permissions granted to the API key. |
**last_used** | **\DateTime** | The date and time when the API key was last used. | [optional]
**create_on** | **\DateTime** | The date and time when the API key was created. | [optional]
**create_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) | The identifier of the user who created the API key. | [optional]
**expires_at** | **\DateTime** | The date and time when the API key expires. | [optional]
**is_active** | **bool** | Indicates whether the API key is active or not. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
