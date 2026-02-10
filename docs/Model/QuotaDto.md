# # QuotaDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quota ID. |
**title** | **string** | The quota title. |
**price** | [**\OpenAPI\Client\Model\PriceDto**](PriceDto.md) |  |
**non_profit** | **bool** | Specifies if the quota is nonprofit or not. |
**free** | **bool** | Specifies if the quota is free or not. |
**trial** | **bool** | Specifies if the quota is trial or not. |
**features** | [**\OpenAPI\Client\Model\TenantQuotaFeatureDto[]**](TenantQuotaFeatureDto.md) | The list of tenant quota features. |
**users_quota** | [**\OpenAPI\Client\Model\TenantEntityQuotaSettings**](TenantEntityQuotaSettings.md) |  | [optional]
**rooms_quota** | [**\OpenAPI\Client\Model\TenantEntityQuotaSettings**](TenantEntityQuotaSettings.md) |  | [optional]
**ai_agents_quota** | [**\OpenAPI\Client\Model\TenantEntityQuotaSettings**](TenantEntityQuotaSettings.md) |  | [optional]
**tenant_custom_quota** | [**\OpenAPI\Client\Model\TenantQuotaSettings**](TenantQuotaSettings.md) |  | [optional]
**due_date** | **\DateTime** | The due date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
