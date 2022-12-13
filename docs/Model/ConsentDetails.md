# # ConsentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Consent id. |
**request_id** | **string** | Consent request id. |
**template_id** | **string** | Consent request template id. | [optional]
**title** | **string** | Consent title. |
**description** | **string** | Consent description. |
**purpose** | **string** | Consent purpose. | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  |
**transaction_id** | **string** | Transaction id. | [optional]
**approved_at_utc** | **\DateTime** | Consent approval datetime in UTC timezone. |
**data_access_expires_at_utc** | **\DateTime** | Data access expiration datetime in UTC timezone. |
**revoked_at_utc** | **\DateTime** | Consent revocation datetime in UTC timezone. | [optional]
**collectables** | [**\MyDataMyConsent\Model\CollectibleTypes[]**](CollectibleTypes.md) | List of supported collectible types. |
**identifiers** | [**\MyDataMyConsent\Model\ConsentedIdentifier[]**](ConsentedIdentifier.md) | Consented identity details. | [optional]
**documents** | [**\MyDataMyConsent\Model\ConsentedDocument[]**](ConsentedDocument.md) | List of consented documents. | [optional]
**medical_records** | [**\MyDataMyConsent\Model\ConsentedMedicalRecord[]**](ConsentedMedicalRecord.md) | List of consented medical records. | [optional]
**financial_accounts** | [**\MyDataMyConsent\Model\ConsentedFinancialAccountField[]**](ConsentedFinancialAccountField.md) | List of consented financial accounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
