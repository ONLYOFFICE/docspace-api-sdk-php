# # AiChatEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Emitted once per `sendWithStream` call, immediately after the user message has been persisted by storage and before the assistant stream starts. Carries the storage-assigned `id` and `createdAt`. The UI uses it to render the user bubble — no client-side optimistic placeholder is needed, which keeps the runtime tree free of phantom nodes from index-fallback ids. |
**message** | [**\OpenAPI\Client\Model\AiThreadMessageLike**](AiThreadMessageLike.md) | The message the event is about, in the state it has reached. | [optional]
**message_id** | **string** | The storage identifier of that message. | [optional]
**idx** | **float** | The zero-based position of the pending tool call within the message. | [optional]
**thread_id** | **string** | The thread the event belongs to. | [optional]
**auto_allow** | **bool** | The tool runs without asking the user, as the user's tool permission mode decides: under `ask` never - the always-allow list, `requireApproval` and the annotations are all ignored; under `auto` a tool on the always-allow list, one with `requireApproval: false`, or one annotated `readOnlyHint: true` or `destructiveHint: false`; under `allow` every tool. | [optional]
**server_executed** | **bool** | The tool is run by the service itself: the client must not run it, only ask for approval (unless `autoAllow`) and approve or deny the call - an approval needs no `result`. | [optional]
**title** | **string** | The generated thread title. | [optional]
**profile_id** | **string** | The profile that generated the title, when one was used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
