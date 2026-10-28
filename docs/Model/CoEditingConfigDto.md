# # CoEditingConfigDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change** | **bool** | Whether the user may switch between the two co-editing modes from the editor interface, or is held to the one  the portal preset. | [optional]
**fast** | **bool** | Whether other participants see each change as it is typed. Left off, changes are exchanged only when a  participant saves, and the paragraph being edited is locked for the others meanwhile. | [optional]
**mode** | [**\OpenAPI\Client\Model\CoEditingConfigMode**](CoEditingConfigMode.md) | The mode the two settings above amount to, as the editors name it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
