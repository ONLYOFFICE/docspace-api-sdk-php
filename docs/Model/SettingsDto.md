# # SettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timezone** | **string** | The time zone. | [optional]
**trusted_domains** | **string[]** | The list of the trusted domains. | [optional]
**trusted_domains_type** | [**\OpenAPI\Client\Model\TenantTrustedDomainsType**](TenantTrustedDomainsType.md) |  | [optional]
**culture** | **string** | The language. |
**utc_offset** | **string** | The UTC offset in the TimeSpan format. | [optional]
**utc_hours_offset** | **float** | The UTC offset in hours. | [optional]
**greeting_settings** | **string** | The greeting settings. | [optional]
**owner_id** | **string** | The owner ID. | [optional]
**name_schema_id** | **string** | The team template ID. | [optional]
**enabled_join** | **bool** | Specifies if a user can join the portal or not. | [optional]
**enable_adm_mess** | **bool** | Specifies if a user can send a message to the administrator when accessing the DocSpace portal or not. | [optional]
**thirdparty_enable** | **bool** | Specifies if a user can connect third-party providers to the portal or not. | [optional]
**doc_space** | **bool** | Specifies if this portal is a DocSpace portal or not. | [optional]
**standalone** | **bool** | Indicates whether the system is running in standalone mode. | [optional]
**is_ami** | **bool** | Specifies if this portal is the AMI instance or not. | [optional]
**base_domain** | **string** | The base domain. |
**wizard_token** | **string** | The wizard token. | [optional]
**password_hash** | [**\OpenAPI\Client\Model\PasswordHasher**](PasswordHasher.md) |  | [optional]
**firebase** | [**\OpenAPI\Client\Model\FirebaseDto**](FirebaseDto.md) |  | [optional]
**version** | **string** | The portal version. | [optional]
**recaptcha_type** | [**\OpenAPI\Client\Model\RecaptchaType**](RecaptchaType.md) |  | [optional]
**recaptcha_public_key** | **string** | The ReCAPTCHA public key. | [optional]
**debug_info** | **bool** | Specifies if the debug information will be sent or not. | [optional]
**socket_url** | **string** | The socket URL. | [optional]
**tenant_status** | [**\OpenAPI\Client\Model\TenantStatus**](TenantStatus.md) |  | [optional]
**tenant_alias** | **string** | The tenant alias. | [optional]
**display_about** | **bool** | Specifies whether to display the About portal section. | [optional]
**domain_validator** | [**\OpenAPI\Client\Model\TenantDomainValidator**](TenantDomainValidator.md) |  | [optional]
**zendesk_key** | **string** | The Zendesk key. | [optional]
**tag_manager_id** | **string** | The tag manager ID. | [optional]
**cookie_settings_enabled** | **bool** | Specifies whether the cookie settings are enabled. |
**limited_access_space** | **bool** | Specifies whether the access to the space management is limited or not. | [optional]
**limited_access_dev_tools_for_users** | **bool** | Specifies whether the access to the Developer Tools is limited for users or not. | [optional]
**display_banners** | **bool** | Specifies whether to display the promotional banners. | [optional]
**user_name_regex** | **string** | The user name validation regex. | [optional]
**invitation_limit** | **int** | The maximum number of invitations to the portal. | [optional]
**plugins** | [**\OpenAPI\Client\Model\PluginsDto**](PluginsDto.md) |  | [optional]
**deep_link** | [**\OpenAPI\Client\Model\DeepLinkDto**](DeepLinkDto.md) |  |
**form_gallery** | [**\OpenAPI\Client\Model\FormGalleryDto**](FormGalleryDto.md) |  | [optional]
**max_image_upload_size** | **int** | The maximum image upload size. | [optional]
**logo_text** | **string** | The white label logo text. | [optional]
**external_resources** | [**\OpenAPI\Client\Model\CultureSpecificExternalResources**](CultureSpecificExternalResources.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
