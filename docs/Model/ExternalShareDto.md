# # ExternalShareDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\OpenAPI\Client\Model\Status**](Status.md) |  |
**id** | **string** | The external data ID. |
**title** | **string** | The external data title. |
**type** | [**\OpenAPI\Client\Model\FileEntryType**](FileEntryType.md) |  | [optional]
**tenant_id** | **int** | The tenant ID. |
**entity_id** | **string** | The unique identifier of the shared entity. | [optional]
**entity_title** | **string** | The title of the shared entity. | [optional]
**entity_type** | [**\OpenAPI\Client\Model\FileEntryType**](FileEntryType.md) |  | [optional]
**is_room** | **bool** | Indicates whether the entity represents a room. | [optional]
**shared** | **bool** | Specifies whether to share the external data or not. |
**link_id** | **string** | The link ID of the external data. |
**is_authenticated** | **bool** | Specifies whether the user is authenticated or not. |
**is_room_member** | **bool** | The room ID of the external data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
