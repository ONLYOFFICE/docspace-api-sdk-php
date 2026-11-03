# # AiActionArgs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tools** | [**\OpenAPI\Client\Model\AiMCPItem[]**](AiMCPItem.md) | Extra tools offered to the model for this request. | [optional]
**is_reasoning** | **bool** | Legacy extended-thinking switch; stands for `medium`. `reasoningLevel` wins when both are set. | [optional]
**reasoning_level** | [**\OpenAPI\Client\Model\AiReasoningLevel**](AiReasoningLevel.md) | Depth of extended thinking for the round; providers clamp it to what the model accepts. | [optional]
**prompt** | [**\OpenAPI\Client\Model\AiActionArgsPrompt**](AiActionArgsPrompt.md) |  | [optional]
**tool_instructions** | **array<string,string>** | Usage notes of the MCP servers the caller holds the connection to, keyed by server type; folded into the system prompt as advisory text. | [optional]
**context_rooms** | [**\OpenAPI\Client\Model\AiContextRoomRef[]**](AiContextRoomRef.md) | Instructions rooms connected to the chat as context, each with the skills the round may use. | [optional]
**knowledge_rooms** | [**\OpenAPI\Client\Model\AiKnowledgeRoomRef[]**](AiKnowledgeRoomRef.md) | Knowledge rooms connected to the chat; the knowledge search tool of the round is limited to them. Each `id` has to be a DocSpace room id. | [optional]
**knowledge_room** | [**\OpenAPI\Client\Model\AiKnowledgeRoomRef**](AiKnowledgeRoomRef.md) | A single knowledge room, as an older client sends it. Read only when `knowledgeRooms` is absent; send `knowledgeRooms` instead. | [optional]
**folder_context** | [**\OpenAPI\Client\Model\AiFolderContextRef**](AiFolderContextRef.md) | The folder connected to the chat as the round's context. It becomes the location the model is told the user works in, and the entry the round is attributed to. | [optional]
**entity_id** | **string** | The entry the round is attributed to. A hint, resolved against the caller's own access. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
