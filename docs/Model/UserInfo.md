# # UserInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The user ID. | [optional]
**first_name** | **string** | The user first name. | [optional]
**last_name** | **string** | The user last name. | [optional]
**user_name** | **string** | The user username. | [optional]
**birth_date** | **\DateTime** | The user birthday. | [optional]
**sex** | **bool** | The user sex (male or female). | [optional]
**status** | [**\OpenAPI\Client\Model\EmployeeStatus**](EmployeeStatus.md) |  | [optional]
**activation_status** | [**\OpenAPI\Client\Model\EmployeeActivationStatus**](EmployeeActivationStatus.md) |  | [optional]
**terminated_date** | **\DateTime** | The date and time when the user account was terminated. | [optional]
**title** | **string** | The user title. | [optional]
**work_from_date** | **\DateTime** | The user registration date. | [optional]
**email** | **string** | The user email address. | [optional]
**contacts** | **string** | The list of user contacts in the string format. | [optional]
**contacts_list** | **string[]** | The list of user contacts. | [optional]
**location** | **string** | The user location. | [optional]
**notes** | **string** | The user notes. | [optional]
**removed** | **bool** | Specifies if the user account was removed or not. | [optional]
**last_modified** | **\DateTime** | The date and time when the user account was last modified. | [optional]
**tenant_id** | **int** | The tenant ID. | [optional]
**is_active** | **bool** | Specifies if the user is active or not. | [optional] [readonly]
**culture_name** | **string** | The user culture code. | [optional]
**mobile_phone** | **string** | The user mobile phone. | [optional]
**mobile_phone_activation_status** | [**\OpenAPI\Client\Model\MobilePhoneActivationStatus**](MobilePhoneActivationStatus.md) |  | [optional]
**sid** | **string** | The LDAP user identificator. | [optional]
**ldap_qouta** | **int** | The LDAP user quota attribute. | [optional]
**sso_name_id** | **string** | The SSO SAML user identificator. | [optional]
**sso_session_id** | **string** | The SSO SAML user session identificator. | [optional]
**create_date** | **\DateTime** | The date and time when the user account was created. | [optional]
**created_by** | **string** | The ID of the user who created the current user account. | [optional]
**spam** | **bool** | Specifies if tips, updates and offers are allowed to be sent to the user or not. | [optional]
**check_activation** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
