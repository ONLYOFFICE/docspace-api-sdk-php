# # UpdateRoomsQuotaRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_ids** | [**\OpenAPI\Client\Model\DuplicateRequestDtoAllOfFileIds[]**](DuplicateRequestDtoAllOfFileIds.md) | The rooms to change, named by the identifiers that `GET api/2.0/files/rooms` reports. Only whole numbers are  processed, so identifiers of rooms kept in a connected third-party account are skipped without an error. | [optional]
**quota** | **int** | The storage each of the listed rooms may take, in bytes. It has to stay inside the portal own limit, and the  per-room quota feature has to be on, otherwise nothing is changed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
