# # MentionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\OpenAPI\Client\Model\PortalUserDto**](PortalUserDto.md) | The account itself, as the portal stores it. | [optional]
**email** | **string** | Where a mention notification for this user is delivered. | [optional]
**id** | **string** | The account id as text, the same value the account object carries; it is what identifies the user in a sharing  request built from this list. | [optional]
**image** | **string** | An absolute address of the medium-sized avatar. A generated default avatar is reported when the user never  uploaded one, so the field is never empty. | [optional]
**has_access** | **bool** | Not filled in by the operations that return this list: it always comes back false. Whether a user can already  open the document has to be read from the sharing settings of the file. | [optional]
**name** | **string** | The name to display, assembled the way the portal is configured to show names. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
