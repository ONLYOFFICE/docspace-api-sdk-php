# # SendModuleEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room** | **string** | A room of the module in this portal: everyone subscribed to `plugin-{module}-{room}` receives the event. Latin  letters, digits and the characters `_ . : -`. | [optional]
**user** | **string** | The e-mail of the portal user who receives the event; with single sign-on it is the same e-mail the module's own  application knows the person by. Only that user's open sessions receive it. | [optional]
**event** | **string** | The event name. Browsers receive it as `plugin:{module}:{event}`. Latin letters, digits and the characters  `_ . : -`. | [optional]
**message** | **string** | Passed to the browser as it is, as `{ message }`. Meant as a signal to re-read, such as an unread count; use  JSON text for structured data and keep personal content out of it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
