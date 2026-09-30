# # FirebaseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | The web API key of the project. Every field of this object is an empty string on an installation that  configures no Firebase project, and an empty `projectId` is the cheapest thing to test for before  initialising an SDK. None of these values is a secret - they are meant to be embedded in a client. |
**auth_domain** | **string** | The host the Firebase SDK performs its own authentication against. |
**project_id** | **string** | The identifier of the Firebase project itself, which ties all the other fields together. |
**storage_bucket** | **string** | The Cloud Storage bucket of the project. The portal does not store portal files there; it is part of the  SDK configuration. |
**messaging_sender_id** | **string** | The sender ID that push messages of this project arrive under, which a client checks an incoming message  against. |
**app_id** | **string** | The identifier of the Firebase application registration this client is to use. |
**measurement_id** | **string** | The Google Analytics measurement ID of the project, empty when the project reports no analytics. |
**database_url** | **string** | The Realtime Database endpoint of the project, empty when the project has no such database. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
