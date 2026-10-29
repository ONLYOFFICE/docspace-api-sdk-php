# GroupPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the group the event is about; &#x60;GET api/2.0/group/{id}&#x60; returns the group with its members by it. | [optional]
**name** | **string** | The name of the group as it is shown in the portal, after a rename the new one. | [optional]
**parent** | **string** | The parent group ID; absent for a top-level group. | [optional]
**category** | **string** | The ID of the group category: the empty GUID for the groups members create, and one fixed category ID for the built-in system groups. | [optional]
**is_ldap** | **bool** | Whether the group is synchronized from an LDAP directory, where its name and members are managed; &#x60;false&#x60; for a group created in the portal. | [optional]
**is_system** | **bool** | &#x60;true&#x60; for a built-in system group, whose members follow from the user types rather than from membership changes. Absent for every other group, never &#x60;false&#x60;. | [optional]
**manager** | [**\OnlyOffice\DocSpace\Webhooks\Sdk\Model\UserSummaryPayload**](UserSummaryPayload.md) |  | [optional]
**members_count** | **int** | How many users belong to the group at the time of the event, disabled accounts not counted; 0 for a group without members. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
