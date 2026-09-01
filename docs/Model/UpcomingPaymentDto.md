# # UpcomingPaymentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quota ID. | [optional]
**name** | **string** | The quota name. | [optional]
**title** | **string** | The quota title. | [optional]
**unit_of_measure** | **string** | The quota unit of measure. | [optional]
**quantity** | **int** | The quantity that will be charged (the next quantity if set, otherwise the current quantity). | [optional]
**wallet** | **bool** | The quota applies to the wallet or not. | [optional]
**due_date** | [**\OpenAPI\Client\Model\ApiDateTime**](ApiDateTime.md) | The API date and time parameters. | [optional]
**amount** | **float** | The amount that will be charged (unit price multiplied by the quantity). | [optional]
**currency** | **string** | The three-character ISO 4217 currency symbol of the amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
