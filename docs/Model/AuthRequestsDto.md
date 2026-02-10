# # AuthRequestsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | The username or email used for authentication. | [optional]
**password** | **string** | The password in plain text for user authentication. | [optional]
**password_hash** | **string** | The hashed password for secure verification. | [optional]
**provider** | **string** | The type of authentication provider (e.g., internal, Google, Azure). | [optional]
**access_token** | **string** | The access token used for authentication with external providers. | [optional]
**serialized_profile** | **string** | The serialized user profile data, if applicable. | [optional]
**code** | **string** | The code for two-factor authentication. | [optional]
**code_o_auth** | **string** | The authorization code used for obtaining OAuth tokens. | [optional]
**session** | **bool** | Specifies whether the authentication is session-based. | [optional]
**confirm_data** | [**\OpenAPI\Client\Model\ConfirmData**](ConfirmData.md) |  | [optional]
**recaptcha_type** | [**\OpenAPI\Client\Model\RecaptchaType**](RecaptchaType.md) |  | [optional]
**recaptcha_response** | **string** | The user&#39;s response to the CAPTCHA challenge. | [optional]
**culture** | **string** | The culture code for localization during authentication. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
