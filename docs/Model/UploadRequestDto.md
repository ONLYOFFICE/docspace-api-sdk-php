# # UploadRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | **\SplFileObject** | The file to be uploaded. | [optional]
**content_type** | [**\OpenAPI\Client\Model\ContentType**](ContentType.md) |  | [optional]
**content_disposition** | [**\OpenAPI\Client\Model\ContentDisposition**](ContentDisposition.md) |  | [optional]
**files** | **\SplFileObject[]** | The list of files when specified as multipart/form-data. | [optional]
**create_new_if_exist** | **bool** | Specifies whether to create the new file if it already exists or not. | [optional]
**store_original_file_flag** | **bool** | Specifies whether to upload documents in the original formats as well or not. | [optional]
**keep_convert_status** | **bool** | Specifies whether to keep the file converting status or not. | [optional]
**stream** | **\SplFileObject** | The request input stream. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
