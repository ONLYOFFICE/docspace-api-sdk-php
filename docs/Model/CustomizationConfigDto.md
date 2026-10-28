# # CustomizationConfigDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**about** | **bool** | Whether the About entry of the editor menu is shown. | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerConfigDto**](CustomerConfigDto.md) | The branding of the organization running the portal. It is filled in on a server installation only and is  empty in the cloud. | [optional]
**anonymous** | [**\OpenAPI\Client\Model\AnonymousConfigDto**](AnonymousConfigDto.md) | How an anonymous participant is treated in this session. | [optional]
**feedback** | [**\OpenAPI\Client\Model\FeedbackConfigDto**](FeedbackConfigDto.md) | The support link the editor offers behind its feedback button. | [optional]
**forcesave** | **bool** | Whether the editors write intermediate revisions while the document stays open. It is empty when the portal  leaves the decision to the editors themselves. | [optional]
**goback** | [**\OpenAPI\Client\Model\GobackConfigDto**](GobackConfigDto.md) | Where the editor returns the user to when they leave the document. It is empty when there is nowhere to go  back to, as in an embedded opening. | [optional]
**review** | [**\OpenAPI\Client\Model\ReviewConfigDto**](ReviewConfigDto.md) | How tracked changes are displayed when the document opens; it depends on whether this session may write. | [optional]
**logo** | [**\OpenAPI\Client\Model\LogoConfigDto**](LogoConfigDto.md) | The logo the editor shows, in the variants the current layout and file type need. | [optional]
**mention_share** | **bool** | Whether mentioning a user who cannot yet open the document offers to share it with them, instead of silently  notifying nobody. | [optional]
**submit_form** | [**\OpenAPI\Client\Model\SubmitFormDto**](SubmitFormDto.md) | The submit button of a form: whether it is shown and what it says. | [optional]
**start_filling_form** | [**\OpenAPI\Client\Model\StartFillingForm**](StartFillingForm.md) | The button that starts filling out the form. It is empty when this opening offers no such button. | [optional]
**ai** | [**\OpenAPI\Client\Model\AiConfigDto**](AiConfigDto.md) | The AI configuration settings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
