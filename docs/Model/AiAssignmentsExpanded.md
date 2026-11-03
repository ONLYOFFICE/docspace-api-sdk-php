# # AiAssignmentsExpanded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignments** | [**array<string,\OpenAPI\Client\Model\AiProfile>**](AiProfile.md) | The bound profiles keyed by action type, as `GET api/2.0/ai/profiles/list` describes them. A binding whose profile no longer exists is left out. |
**profiles_total** | **int** | How many profiles the portal has. |
**chat_profiles_total** | **int** | How many of those profiles can chat; a profile without declared capabilities counts as one that can. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
