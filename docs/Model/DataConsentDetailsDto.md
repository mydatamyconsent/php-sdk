# # DataConsentDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  | [optional]
**approved_at_utc** | **\DateTime** |  | [optional]
**rejected_at_utc** | **\DateTime** |  | [optional]
**expires_at_utc** | **\DateTime** |  | [optional]
**requested_at_utc** | **\DateTime** |  | [optional]
**requester** | [**\MyDataMyConsent\Model\DataConsentRequesterDto**](DataConsentRequesterDto.md) |  | [optional]
**consent_details** | [**\MyDataMyConsent\Model\GetConsentTemplateDetailsDto**](GetConsentTemplateDetailsDto.md) |  | [optional]
**identifiers** | [**\MyDataMyConsent\Model\DataConsentIdentifier[]**](DataConsentIdentifier.md) |  | [optional]
**approved_documents** | [**\MyDataMyConsent\Model\DataConsentRequestedDocument[]**](DataConsentRequestedDocument.md) |  | [optional]
**approved_financials** | [**\MyDataMyConsent\Model\DataConsentRequestedFinancialAccount[]**](DataConsentRequestedFinancialAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
