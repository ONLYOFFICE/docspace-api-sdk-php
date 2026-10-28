# # PaymentSettingsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_email** | **string** | The vendor mailbox to write to about buying, extending or changing the subscription, picked for the portal  language. It is not the portal's own support address. |
**feedback_and_support_url** | **string** | Not populated: nothing fills this field in, so it always comes back empty. The help and support addresses  live in `externalResources` of `GET api/2.0/settings` instead. | [optional]
**buy_url** | **string** | The vendor page for buying or extending the subscription, chosen for the licence kind the installation was  built for and for the portal language. It is a page for a person to open, not an API to call. |
**standalone** | **bool** | Whether this is a server installation someone administers themselves rather than a portal in the cloud,  which decides whether payment means uploading a licence file or a subscription in the vendor's store. |
**current_license** | [**\OpenAPI\Client\Model\CurrentLicenseInfo**](CurrentLicenseInfo.md) | The subscription in force, reduced to the two facts a payment page needs. |
**max** | **int** | The largest quantity of a paid item - members, storage - that may be bought in one go, `999` unless the  installation configures another cap. It bounds a single purchase, not the total a portal may hold. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
