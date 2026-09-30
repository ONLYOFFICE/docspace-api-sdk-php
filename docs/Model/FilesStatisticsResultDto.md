# # FilesStatisticsResultDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_documents_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space taken by the personal Files sections of all accounts of the portal added together. An item deleted  to the trash keeps taking space and is counted in `trashUsedSpace` until the trash is emptied. | [optional]
**trash_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space held by the items deleted to the trash from any section, which is given back only when the trash is  emptied or the items are erased for good. | [optional]
**archive_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space taken by the content of the archived rooms, the archived form filling rooms included. Restoring a  room moves its space back to `roomsUsedSpace` or `formsUsedSpace`. | [optional]
**rooms_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space taken by the content of the active rooms, except the form filling rooms, whose content is reported  in `formsUsedSpace`. Archiving a room moves its space to `archiveUsedSpace`. | [optional]
**ai_agents_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space taken by the content of the AI agents section, which exists only in a portal where the AI agents  feature is active; creating an AI room is not enough to bring the section into being. | [optional]
**forms_used_space** | [**\OpenAPI\Client\Model\FilesStatisticsFolder**](FilesStatisticsFolder.md) | The space taken by the content of the active form filling rooms, which is kept apart from `roomsUsedSpace`  even though those rooms are listed among the rooms. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
