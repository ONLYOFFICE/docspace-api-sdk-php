# # ExternalSharingSettingsRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_share** | **bool** | Specifies whether external (public) link creation is allowed. | [optional]
**default_share_link_internal** | **bool** | Specifies the default sharing link type: true = DocSpace users only, false = Anyone with the link.  Relevant only when ExternalShare is true. | [optional]
**external_share_apply_to_documents** | **bool** | When external sharing is restricted, specifies whether to apply the restriction to the My Documents section.  Relevant only when ExternalShare is false. | [optional]
**external_share_apply_to_rooms** | **bool** | When external sharing is restricted, specifies whether to apply the restriction to the Rooms section.  Relevant only when ExternalShare is false. | [optional]
**block_existing_links_on_restrict** | **bool** | When external sharing is restricted, specifies whether to block existing public links immediately.  Relevant only when ExternalShare is false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
