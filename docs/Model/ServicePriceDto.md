# # ServicePriceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The price unique identifier. | [optional]
**account_number** | **int** | The account number. | [optional]
**service_id** | **int** | The service ID. | [optional]
**time_unit** | [**\OpenAPI\Client\Model\PriceTimeUnit**](PriceTimeUnit.md) | The time unit the price is bound to. | [optional]
**cost_price** | **float** | The cost price. | [optional]
**extra_charge** | **float** | The extra charge added to the cost price. | [optional]
**service_price** | **float** | The resulting service price. | [optional]
**quota** | **float** | The quota the price is set for. | [optional]
**time_bound** | [**\OpenAPI\Client\Model\TimeBoundDto**](TimeBoundDto.md) | The period the price is effective in. | [optional]
**status** | [**\OpenAPI\Client\Model\PriceStatus**](PriceStatus.md) | The price status. | [optional]
**created** | **\DateTime** | The date and time when the price was created. | [optional]
**discount_category_id** | **int** | The discount category ID. | [optional]
**discount_category** | [**\OpenAPI\Client\Model\DiscountCategoryDto**](DiscountCategoryDto.md) | The discount category. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
