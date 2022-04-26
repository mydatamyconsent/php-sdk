# # IndividualDataConsentRequestDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiver** | **string** | Name of request receiver individual. |
**id** | **string** | Consent request id |
**template_id** | **string** | Consent request template id | [optional]
**consent_id** | **string** | Data Consent id | [optional]
**title** | **string** | Consent request title. |
**description** | **string** | Consent request description. |
**purpose** | **string** | Consent request purpose. | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  |
**transaction_id** | **string** | Transaction id | [optional]
**created_at_utc** | **\DateTime** | Request creation datetime in UTC timezone |
**expires_at_utc** | **\DateTime** | Request expiration datetime in UTC timezone |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
