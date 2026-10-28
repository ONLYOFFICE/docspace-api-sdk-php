# # UserConfigDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The account the changes are recorded under. Two sessions carrying the same value are taken by the editors for  the same person. | [optional]
**name** | **string** | The name shown next to the changes and in the list of participants. | [optional]
**image** | **string** | An absolute address of the avatar shown for this participant. | [optional]
**roles** | **string[]** | The filling roles this participant holds in the form being filled out. It is set only for a form in a virtual  data room, where the role decides which fields open for them. | [optional]
**customer_id** | **string** | Identifies the paying customer this participant belongs to, on deployments where the editors are licensed per  customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
