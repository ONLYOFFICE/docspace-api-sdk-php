# # TenantAuditSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**login_history_life_time** | **int** | How many days login events are kept, from 1 to 180; 180 when the portal never changed it. | [optional]
**audit_trail_life_time** | **int** | How many days audit trail events are kept, from 1 to 180; 180 when the portal never changed it. | [optional]
**last_modified** | **\DateTime** | When the pair was last stored; when it never was, the moment it was read instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
