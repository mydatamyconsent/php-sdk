# # IndividualConsentRequestTemplateDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Consent request template id. |
**title** | **string** | Consent request template title. |
**description** | **string** | Consent request template description. |
**purpose** | **string** | Consent request template purpose. | [optional]
**short_id** | **string** | Consent request template short Id. |
**status** | [**ConsentRequestTemplateStatus**](ConsentRequestTemplateStatus.md) |  |
**data_life** | [**\MyDataMyConsent\Model\IndividualConsentRequestTemplateDetailsDataLife**](IndividualConsentRequestTemplateDetailsDataLife.md) |  | [optional]
**request_life** | [**\MyDataMyConsent\Model\IndividualConsentRequestTemplateDetailsRequestLife**](IndividualConsentRequestTemplateDetailsRequestLife.md) |  | [optional]
**data_frequency** | [**\MyDataMyConsent\Model\IndividualConsentRequestTemplateDetailsDataFrequency**](IndividualConsentRequestTemplateDetailsDataFrequency.md) |  | [optional]
**identifiers** | [**\MyDataMyConsent\Model\IdentityField[]**](IdentityField.md) | Consent request template identity fields. | [optional]
**documents** | [**\MyDataMyConsent\Model\DocumentField[]**](DocumentField.md) | Consent request template document fields. | [optional]
**medical_records** | [**\MyDataMyConsent\Model\MedicalRecordField[]**](MedicalRecordField.md) | Consent request template medical record fields. | [optional]
**financial_accounts** | [**\MyDataMyConsent\Model\FinancialAccountField[]**](FinancialAccountField.md) | Consent request template financial account fields. | [optional]
**created_by** | **string** | Consent request template created by user. |
**created_at_utc** | **\DateTime** | Consent request template created datetime in UTC timezone. |
**approved_at_utc** | **\DateTime** | Consent request template approval datetime in UTC timezone. | [optional]
**published_at_utc** | **\DateTime** | Consent request template published datetime in UTC timezone. | [optional]
**rejected_at_utc** | **\DateTime** | Consent request template rejection datetime in UTC timezone. | [optional]
**rejection_reason** | **string** | Consent request template rejection reason. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
