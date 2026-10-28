# # AuditTrailActionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_action** | **string** | The action name to send as the `action` filter of `GET api/2.0/security/audit/events/filter`, and the value  that comes back as `actionId` on an event. | [optional]
**action_type** | **string** | The kind of change the action makes, accepted by the `actionType` filter of the same operation. | [optional]
**entity** | **string** | The kind of object the action applies to, accepted by the `entryType` filter. It is `None` for an action  that targets no object, such as a settings change, and an action with a second object type reports only the  first one here. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
