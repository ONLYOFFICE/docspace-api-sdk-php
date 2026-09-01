# # AiImageModelPricing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the model, as the provider expects it on the wire. |
**alias** | **string** | The display name of the model. | [optional]
**owned_by** | **string** | The owner of the model, as reported by the provider. | [optional]
**provider** | **string** | The provider that serves the model. | [optional]
**link** | **string** | The link to the pricing page of the model. | [optional]
**price** | [**\OpenAPI\Client\Model\AiImagePrice**](AiImagePrice.md) | The price of an image model: per prompt token and per generated image. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
