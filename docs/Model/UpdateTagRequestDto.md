# # UpdateTagRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**old_name** | **string** | The name of the tag to rename, matched against the catalog exactly as it is stored rather than searched for.  Read the stored spelling from `GET api/2.0/files/tags`. |
**new_name** | **string** | The name to store instead. It has to be free: names are unique across the portal, so a name another tag  already carries is refused, and merging two tags this way is not possible. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
