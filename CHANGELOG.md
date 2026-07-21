# Change Log

## 3.7.0

### Added

- Added new API methods and enhanced existing models with additional properties
- Added `Rooms` / `Groups` tag
- Added new models: AI user settings (`AiUserSettingsDto`, `AiUserSettingsWrapper`, `SetAiUserSettingsRequestDto`), AI credit balance (`CreditAiBalanceRequestDto`) and AI-generated files (`GeneratedFileDto`, `GeneratedFileWrapper`)
- Added external database sync models (`ExternalDbSyncTaskDto`, `ExternalDbSyncTaskWrapper`, `ExternalDbSyncFormResultDto`)
- Added external sharing settings models (`ExternalSharingSettingsDto`, `ExternalSharingSettingsRequestDto`, `ExternalSharingSettingsWrapper`)
- Added two-factor authentication confirmation models (`TfaConfirmDataDto`, `TfaConfirmDataWrapper`)
- Added webhook trigger models (`WebhookTriggerDto`, `WebhookTriggerArrayWrapper`)
- Added user existence check models (`UserExistsResponseDto`, `UserExistsResponseWrapper`) and editor tool decision model (`EditorToolDecisionRequestBody`)

### Changed

- Updated SDK OpenAPI specification to v3.7.0
- Regenerated SDK with OpenAPI Generator 7.22.0 (previously 7.21.0)
- Updated example values, added email length validation, and adjusted method return types in API models and methods

### Fixed

- Fixed `&` / `'` HTML entity escaping issues in documentation

## 3.6.0

- Initial release
- SDK regenerated from OpenAPI specification v3.6.0
