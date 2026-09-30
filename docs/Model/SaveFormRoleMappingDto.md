# # SaveFormRoleMappingDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**form_id** | **int** | The PDF form the roles belong to. This is the value the operation reads, rather than the identifier in its  route, and the two are to be sent the same. |
**roles** | [**\OpenAPI\Client\Model\FormRole[]**](FormRole.md) | The roles with the account taking each of them and the sequence number that decides the turn: the same number  means the roles may be filled in parallel, different ones make a queue. The whole set is replaced on every  call, and an empty set resets the filling. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
