# # SsoSettingsV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_modified** | **\DateTime** |  | [optional]
**enable_sso** | **bool** | Specifies if the SSO settings are enabled or not. | [optional]
**idp_settings** | [**\OpenAPI\Client\Model\SsoIdpSettings**](SsoIdpSettings.md) |  | [optional]
**idp_certificates** | [**\OpenAPI\Client\Model\SsoCertificate[]**](SsoCertificate.md) | The list of the IdP certificates. | [optional]
**idp_certificate_advanced** | [**\OpenAPI\Client\Model\SsoIdpCertificateAdvanced**](SsoIdpCertificateAdvanced.md) |  | [optional]
**sp_login_label** | **string** | The SP login label. | [optional]
**sp_certificates** | [**\OpenAPI\Client\Model\SsoCertificate[]**](SsoCertificate.md) | The list of the SP certificates. | [optional]
**sp_certificate_advanced** | [**\OpenAPI\Client\Model\SsoSpCertificateAdvanced**](SsoSpCertificateAdvanced.md) |  | [optional]
**field_mapping** | [**\OpenAPI\Client\Model\SsoFieldMapping**](SsoFieldMapping.md) |  | [optional]
**hide_auth_page** | **bool** | Specifies if the authentication page will be hidden or not. | [optional]
**users_type** | **int** | The user type. | [optional]
**disable_email_verification** | **bool** | Specifies if the email verification is disabled or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
