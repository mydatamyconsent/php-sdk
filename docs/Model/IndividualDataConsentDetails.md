# # IndividualDataConsentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approver** | **string** | Name of consent approver individual. |
**id** | **string** | Data consent id. |
**template_id** | **string** | Consent template id. | [optional]
**title** | **string** | Consent title. |
**description** | **string** | Consent description. |
**purpose** | **string** | Consent purpose. | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  |
**transaction_id** | **string** | Transaction id. | [optional]
**approved_at_utc** | **\DateTime** | Consent approval datetime in UTC timezone. |
**data_access_expires_at_utc** | **\DateTime** | Data access expiration datetime in UTC timezone. |
**revoked_at_utc** | **\DateTime** | Consent revocation datetime in UTC timezone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
