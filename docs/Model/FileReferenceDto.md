# # FileReferenceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_data** | [**\OpenAPI\Client\Model\FileReferenceDataDto**](FileReferenceDataDto.md) | How this document is named when another spreadsheet refers to it. Send it back as it stands to resolve the  reference again. | [optional]
**error** | **string** | Filled in when the reference resolved to nothing; the rest of the descriptor is then empty and must not be  handed to the editors. | [optional]
**path** | **string** | The title of the document the reference resolved to. | [optional]
**url** | **string** | Where the content is fetched from. It is addressed to the host the document service can reach, which on a  deployment with a private editor network is not the address a browser should follow. | [optional]
**file_type** | **string** | The format the content is in, without the leading dot. | [optional]
**key** | **string** | Identifies the exact revision to the editors: two clients that receive the same key read the same co-editing  session, and the key changes as soon as the document is saved. | [optional]
**link** | **string** | The address of the document in the portal web editor - the link to put in front of a person, unlike the  download address above. | [optional]
**token** | **string** | Signs this descriptor so that the editors can trust it. It stays empty on a portal that has no signature  secret configured for the document service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
