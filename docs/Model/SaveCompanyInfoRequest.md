# # SaveCompanyInfoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_name** | **string** | The company name. | [optional]
**site** | **string** | The company website, as an absolute URL. | [optional]
**email** | **string** | The contact email address. | [optional]
**address** | **string** | The postal address. | [optional]
**phone** | **string** | The contact phone number. | [optional]
**is_licensor** | **bool** | Accepted for compatibility with earlier clients and not read: saved details are never those of the licensor, so the server always stores `false`. | [optional]
**hide_about** | **bool** | Whether the About page is hidden. | [optional]
**last_modified** | **\DateTime** | Accepted for compatibility with earlier clients and not read: the server keeps its own value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
