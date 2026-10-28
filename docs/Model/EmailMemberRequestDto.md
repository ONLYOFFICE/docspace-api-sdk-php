# # EmailMemberRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The address to send the password recovery link to. It is required and validated even by  `POST api/2.0/people/guests/share/approve`, which then ignores its value and takes the account from the  confirmation token instead. |
**recaptcha_type** | [**\OpenAPI\Client\Model\RecaptchaType**](RecaptchaType.md) | Which CAPTCHA the `recaptchaResponse` comes from: `Default` for the web reCAPTCHA, `AndroidV2` or `iOSV2` for  the mobile ones, and `hCaptcha` when the portal is configured with hCaptcha. It matters only for an  unauthenticated request on a portal that has a CAPTCHA. | [optional]
**recaptcha_response** | **string** | The user's response to the CAPTCHA challenge. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
