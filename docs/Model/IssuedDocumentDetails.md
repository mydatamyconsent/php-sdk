# # IssuedDocumentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document Id. |
**identifier** | **string** | Document Identifier. |
**document_type** | **string** | Document type name. |
**issued_to** | **string** | User name. |
**issued_at_utc** | **\DateTime** | Issued datetime in UTC timezone. |
**expires_at_utc** | **\DateTime** | Expires datetime in UTC timezone. | [optional]
**accepted_at_utc** | **\DateTime** | Accepted datetime in UTC timezone. | [optional]
**receiver** | [**\MyDataMyConsent\Model\DocumentReceiver**](DocumentReceiver.md) |  |
**metadata** | **array<string,string>** | Metadata. | [optional]
**digital_signatures** | [**\MyDataMyConsent\Model\DocumentDigitalSignature[]**](DocumentDigitalSignature.md) | Digital signatures. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
