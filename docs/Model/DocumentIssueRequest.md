# # DocumentIssueRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type_id** | **string** | Document type id. |
**identifier** | **string** | Document identifier. |
**description** | **string** | Document description. |
**receiver** | [**\MyDataMyConsent\Model\DocumentIssueRequestReceiver**](DocumentIssueRequestReceiver.md) |  |
**payment_request** | [**\MyDataMyConsent\Model\DocumentIssueRequestPaymentRequest**](DocumentIssueRequestPaymentRequest.md) |  | [optional]
**issued_at_utc** | **\DateTime** | Datetime of issue in UTC timezone. |
**valid_from_utc** | **\DateTime** | Valid from datetime in UTC timezone. |
**expires_at_utc** | **\DateTime** | Datetime of expiry in UTC timezone. | [optional]
**metadata** | **array<string,string>** | Metadata. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
