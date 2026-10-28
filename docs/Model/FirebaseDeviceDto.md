# # FirebaseDeviceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the registration. | [optional]
**user_id** | **string** | The account the device belongs to; always the caller. | [optional]
**tenant_id** | **int** | The portal the registration belongs to; always the current one. | [optional]
**firebase_device_token** | **string** | The Firebase token the device was issued, as it was sent at registration. | [optional]
**application** | **string** | The application the registration is for; `doc` for the Documents application. | [optional]
**is_subscribed** | **bool** | Whether the device is currently sent push notifications. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
