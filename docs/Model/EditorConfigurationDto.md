# # EditorConfigurationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_url** | **string** | The callback URL of the editor. | [optional]
**co_editing** | [**\OpenAPI\Client\Model\CoEditingConfig**](CoEditingConfig.md) | The co-editing configuration parameters. | [optional]
**create_url** | **string** | The creation URL of the editor. | [optional]
**customization** | [**\OpenAPI\Client\Model\CustomizationConfigDto**](CustomizationConfigDto.md) | The customization configuration. | [optional]
**embedded** | [**\OpenAPI\Client\Model\EmbeddedConfig**](EmbeddedConfig.md) | The configuration parameters for the embedded document type. | [optional]
**encryption_keys** | [**\OpenAPI\Client\Model\EncryptionKeyDto[]**](EncryptionKeyDto.md) | The encryption keys of the editor configuration. | [optional]
**lang** | **string** | The language of the editor configuration. |
**mode** | **string** | The mode of the editor configuration. |
**mode_write** | **bool** | Specifies if the mode is write of the editor configuration. | [optional]
**plugins** | [**\OpenAPI\Client\Model\PluginsConfig**](PluginsConfig.md) | The configuration settings to connect the special add-ons. | [optional]
**recent** | [**\OpenAPI\Client\Model\RecentConfig[]**](RecentConfig.md) | The recent configuration of the editor. | [optional]
**templates** | [**\OpenAPI\Client\Model\TemplatesConfig[]**](TemplatesConfig.md) | The templates of the editor configuration. | [optional]
**user** | [**\OpenAPI\Client\Model\UserConfig**](UserConfig.md) | The configuration parameters of the user currently viewing or editing the document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
