# # UpdateMemberRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The user ID. | [optional]
**disable** | **bool** | Specifies whether to disable a user or not. | [optional]
**email** | **string** | The user email address. | [optional]
**is_user** | **bool** | Specifies if this is a guest or a user. | [optional]
**first_name** | **string** | The user first name. | [optional]
**last_name** | **string** | The user last name. | [optional]
**department** | **string[]** | The list of the user departments. | [optional]
**title** | **string** | The user title. | [optional]
**location** | **string** | The user location. | [optional]
**sex** | [**\OpenAPI\Client\Model\SexEnum**](SexEnum.md) |  | [optional]
**birthday** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**worksfrom** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) |  | [optional]
**comment** | **string** | The user comment. | [optional]
**contacts** | [**\OpenAPI\Client\Model\Contact[]**](Contact.md) | The list of the user contacts. | [optional]
**files** | **string** | The user avatar photo URL. | [optional]
**spam** | **bool** | Specifies if tips, updates and offers are allowed to be sent to the user or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
