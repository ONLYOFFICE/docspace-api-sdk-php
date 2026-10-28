# # ApiKeyResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the key. This is the value to pass to `PUT api/2.0/keys/{keyId}` and  `DELETE api/2.0/keys/{keyId}`. |
**name** | **string** | The label given to the key when it was created or last updated. |
**key** | **string** | The secret to send in the `Authorization` header as `Bearer sk-...`. It is filled in only by the answer of  `POST api/2.0/keys` and cannot be read again afterwards, so it has to be stored at that moment. |
**key_postfix** | **string** | The last four characters of the secret. It is the only part of the secret that later reads expose, and it is  meant for telling keys apart in a list. | [optional]
**permissions** | **string[]** | The scopes the key may use, as accepted by `GET api/2.0/keys/permissions`. An empty list means the key has no  scope restrictions. |
**last_used** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The UTC moment the key was last used to authenticate a request. It is empty for a key that has never been  used. | [optional]
**create_on** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The UTC moment the key was created. | [optional]
**create_by** | [**\OpenAPI\Client\Model\EmployeeDto**](EmployeeDto.md) | The portal member who created the key, and whose access the key acts with. | [optional]
**expires_at** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The UTC moment the key stops working. It is empty for a key created without `expiresInDays`, which never  expires. | [optional]
**is_active** | **bool** | Whether the key may authenticate requests. A key deactivated through `PUT api/2.0/keys/{keyId}` stays in the  list with this field set to false. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
