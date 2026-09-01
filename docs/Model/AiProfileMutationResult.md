# # AiProfileMutationResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | True when the profile was persisted. |
**profile** | [**\OpenAPI\Client\Model\AiProfile**](AiProfile.md) | The persisted profile. Present on success. | [optional]
**error** | [**\OpenAPI\Client\Model\AiTErrorData**](AiTErrorData.md) | Why the profile was rejected - the name check or the provider credential check. Present on failure. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
