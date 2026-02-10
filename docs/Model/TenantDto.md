# # TenantDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_id** | **string** | The affiliate ID. | [optional]
**tenant_alias** | **string** | The tenant alias. | [optional]
**calls** | **bool** | Specifies if the calls are available for this tenant or not. | [optional]
**campaign** | **string** | The tenant campaign. | [optional]
**creation_date_time** | **\DateTime** | The tenant creation date and time. | [optional] [readonly]
**hosted_region** | **string** | The hosted region. | [optional]
**tenant_id** | **int** | The tenant ID. | [optional] [readonly]
**industry** | [**\OpenAPI\Client\Model\TenantIndustry**](TenantIndustry.md) |  | [optional]
**language** | **string** | The tenant language. | [optional]
**last_modified** | **\DateTime** | The date and time when the tenant was last modified. | [optional]
**mapped_domain** | **string** | The tenant mapped domain. | [optional]
**name** | **string** | The tenant name. | [optional]
**owner_id** | **string** | The tenant owner ID. | [optional]
**payment_id** | **string** | The tenant payment ID. | [optional]
**spam** | **bool** | Specifies if the ONLYOFFICE newsletter is allowed or not. | [optional]
**status** | [**\OpenAPI\Client\Model\TenantStatus**](TenantStatus.md) |  | [optional]
**status_change_date** | **\DateTime** | The date and time when the tenant status was changed. | [optional] [readonly]
**time_zone** | **string** | The tenant time zone. | [optional]
**trusted_domains** | **string[]** | The list of tenant trusted domains. | [optional]
**trusted_domains_raw** | **string** | The tenant trusted domains in the string format. | [optional]
**trusted_domains_type** | [**\OpenAPI\Client\Model\TenantTrustedDomainsType**](TenantTrustedDomainsType.md) |  | [optional]
**version** | **int** | The tenant version | [optional]
**version_changed** | **\DateTime** | The date and time when the tenant version was changed. | [optional]
**region** | **string** | The tenant AWS region. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
