# GroupSummaryPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the group; &#x60;GET api/2.0/group/{id}&#x60; returns the group with its members by it. | [optional]
**name** | **string** | The name of the group as it is shown in the portal. | [optional]
**manager** | **string** | The user name of the user who manages the group, not an ID. Absent when the group has no manager. | [optional]
**is_system** | **bool** | &#x60;true&#x60; for a built-in system group, whose members follow from the user types rather than from membership changes. Absent for every other group, never &#x60;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
