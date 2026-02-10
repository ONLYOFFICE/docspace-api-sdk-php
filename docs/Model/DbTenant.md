# # DbTenant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The tenant ID. | [optional]
**name** | **string** | The tenant name. | [optional]
**alias** | **string** | The tenant alias. | [optional]
**mapped_domain** | **string** | Mapped domain | [optional]
**version** | **int** | The tenant version. | [optional]
**version_changed** | **\DateTime** | The Version_changed field. | [optional]
**version_changed** | **\DateTime** | The date and time when the version was changed. | [optional]
**language** | **string** | The tenant language. | [optional]
**time_zone** | **string** | The tenant time zone. | [optional]
**trusted_domains_raw** | **string** | The tenant trusted domains raw. | [optional]
**trusted_domains_enabled** | [**\OpenAPI\Client\Model\TenantTrustedDomainsType**](TenantTrustedDomainsType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\TenantStatus**](TenantStatus.md) |  | [optional]
**status_changed** | **\DateTime** | The date and time when the tenant status was changed. | [optional]
**status_changed_hack** | **\DateTime** | The hacked date and time when the tenant status was changed. | [optional]
**creation_date_time** | **\DateTime** | The tenant creation date. | [optional]
**owner_id** | **string** | The tenant owner ID. | [optional]
**payment_id** | **string** | The tenant payment ID. | [optional]
**industry** | [**\OpenAPI\Client\Model\TenantIndustry**](TenantIndustry.md) |  | [optional]
**last_modified** | **\DateTime** | The date and time when the tenant was last modified. | [optional]
**calls** | **bool** | Specifies if the calls are available for the current tenant or not. | [optional]
**partner** | [**\OpenAPI\Client\Model\DbTenantPartner**](DbTenantPartner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
