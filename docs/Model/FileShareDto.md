# # FileShareDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | [**\OpenAPI\Client\Model\FileShare**](FileShare.md) | The level the subject holds on the entry. On a link entry it is the level the link hands to whoever opens it,  and in a batch answer `Varies` means the subject holds different levels on the listed entries. | [optional]
**shared_to** | **mixed** |  | [optional]
**shared_to_user** | [**\OpenAPI\Client\Model\EmployeeFullDto**](EmployeeFullDto.md) | The account the entry belongs to. It is filled in only when `subjectType` says an account, and is null for a  group entry and for a link. | [optional]
**shared_to_group** | [**\OpenAPI\Client\Model\GroupSummaryDto**](GroupSummaryDto.md) | The portal group the entry belongs to, which hands the level to everybody in it. It is filled in only for a  group entry, and is null otherwise. | [optional]
**shared_link** | [**\OpenAPI\Client\Model\FileShareLink**](FileShareLink.md) | The sharing link the entry stands for, together with everything set on it. It is filled in only for a link  entry, and is null for an account or a group. | [optional]
**is_locked** | **bool** | Whether this entry is the caller's own, which is why they cannot change its level. Link entries never report  it. |
**is_owner** | **bool** | Whether the subject created the entry the access is given on, and so cannot be removed from it. |
**can_edit_access** | **bool** | Whether the caller may change the level of this entry. It is false on the caller's own entry, on every link,  and whenever the caller may not hand out access at all. |
**can_edit_internal** | **bool** | Whether the caller may switch this link between being open to anybody and asking the visitor to sign in to the  portal first. |
**can_edit_deny_download** | **bool** | Whether the caller may forbid downloading through this link. Only a link of a virtual data room reports true,  and only while the room itself still allows downloads. |
**can_edit_expiration_date** | **bool** | Whether the caller may move the moment this link stops working. |
**can_revoke** | **bool** | Whether the caller may take this entry away altogether, which for a link means deleting the link. |
**subject_type** | [**\OpenAPI\Client\Model\SubjectType**](SubjectType.md) | What the entry was given to, which tells which of the three subject fields is filled in: an account, a group,  or one of the kinds of link. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
