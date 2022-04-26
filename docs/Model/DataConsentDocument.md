# # DataConsentDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document id. |
**name** | **string** | Document name. |
**category** | **string** | Document category. |
**identifier** | **string** | Document identifier. |
**field_title** | **string** | Document field title. |
**field_slug** | **string** | Document field slug. |
**issued_at_utc** | **\DateTime** | Document issued at datetime in UTC timezone. |
**expires_at_utc** | **\DateTime** | Document expires at datetime in UTC timezone. | [optional]
**issuer** | [**\MyDataMyConsent\Model\DataConsentDocumentIssuer**](DataConsentDocumentIssuer.md) |  |
**digital_signatures** | [**\MyDataMyConsent\Model\DocumentDigitalSignature[]**](DocumentDigitalSignature.md) | Digital signatures. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
