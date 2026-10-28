# # FolderMetadataSearch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata_template_id** | **int** | The ID of the metadata template the entries must be assigned to. On its own it narrows the listing to the entries  carrying the template; together with the conditions it also pins the template the filtered fields belong to. | [optional]
**metadata_filters** | [**\OpenAPI\Client\Model\MetadataFilterConditionRequest[]**](MetadataFilterConditionRequest.md) | The metadata filter conditions, combined with AND. A custom field is addressed by its name instead of the field ID. | [optional]
**include_hidden_metadata** | **bool** | Whether the text search, and the metadataMatches it reports, also look at the values of the hidden metadata  templates (created with visible false for the metadata a service keeps for itself, which the web client never  shows). False, the default, leaves them out, so an entry is not found by such a value; true takes them in.  metadataTemplateId and metadataFilters are not concerned: a hidden template or field named there is searched  either way. | [optional]
**filter_value** | **string** | The text to search for in the titles and in the string metadata values of the entries, the custom fields and the  template fields alike; an entry found by its metadata says where in metadataMatches. | [optional]
**with_sub_folders** | **bool** | Specifies whether to search the whole subtree of the folder (the default) or its direct children only. | [optional]
**filter_type** | [**\OpenAPI\Client\Model\FilterType**](FilterType.md) | The filter type. | [optional]
**count** | **int** | The number of entries to return, from 1 to 100. | [optional]
**start_index** | **int** | The zero-based index of the first entry to return. | [optional]
**sort_by** | **string** | The field to sort by, a name of the SortedByType values. | [optional]
**sort_order** | [**\OpenAPI\Client\Model\SortOrder**](SortOrder.md) | The sort order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
