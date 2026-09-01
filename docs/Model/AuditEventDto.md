# # AuditEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The audit event ID. | [optional]
**date** | **\DateTime** | The audit event date. | [optional]
**user** | **string** | The name of the user who triggered the audit event. | [optional]
**user_id** | **string** | The ID of the user who triggered the audit event. | [optional]
**action** | **string** | The audit event action. | [optional]
**action_id** | [**\OpenAPI\Client\Model\MessageAction**](MessageAction.md) | The specific action that occurred within the audit event. | [optional]
**ip** | **string** | The audit event IP. | [optional]
**country** | **string** | The audit event country. | [optional]
**city** | **string** | The audit event city. | [optional]
**browser** | **string** | The audit event browser. | [optional]
**platform** | **string** | The audit event platform. | [optional]
**page** | **string** | The audit event page. | [optional]
**action_type** | [**\OpenAPI\Client\Model\ActionType**](ActionType.md) | The type of action performed in the audit event (e.g., Create, Update, Delete). | [optional]
**product** | [**\OpenAPI\Client\Model\ProductType**](ProductType.md) | The type of product related to the audit event. | [optional]
**location** | [**\OpenAPI\Client\Model\LocationType**](LocationType.md) | The location where the audit event occurred. | [optional]
**target** | **string[]** | The list of target objects affected by the audit event (e.g., document ID, user account). | [optional]
**entries** | [**\OpenAPI\Client\Model\EntryType[]**](EntryType.md) | The list of audit entry types (e.g., Folder, User, File). | [optional]
**context** | **string** | The audit event context. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
