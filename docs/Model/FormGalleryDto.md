# # FormGalleryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | The path under `domain` that the gallery's own listing API is reached at. It is joined to `domain` by the  client; the portal only relays the values from its configuration. |
**domain** | **string** | The address of the gallery service, which is a service of the vendor rather than part of the portal. Every  field of this object is empty on an installation that configures no gallery, and a client should then not  offer the gallery at all. |
**ext** | **string** | The file extension to ask the gallery for, which decides which rendition of a template is downloaded when  several are published. |
**upload_path** | **string** | The path used for submitting a form of one's own to the gallery, the counterpart of `path` for the upload  side. The four `upload` fields are empty when the installation allows browsing but not submitting. |
**upload_domain** | **string** | The address the submission is sent to, which may differ from `domain`. |
**upload_ext** | **string** | The file extension a submitted form has to carry. |
**upload_dashboard** | **string** | The page a person is sent to in order to follow up on a submission, joined to `uploadDomain` the same way  as `uploadPath`. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
