# # DataConsentDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**requester** | [**\MyDataMyConsent\Model\DataConsentRequesterDto**](DataConsentRequesterDto.md) |  | [optional]
**location** | **string** |  | [optional]
**personal_info_requested** | **bool** |  | [optional]
**documents** | **int** |  | [optional]
**financial_accounts** | **int** |  | [optional]
**transaction_id** | **string** |  | [optional]
**ip_address** | **string** |  | [optional]
**description** | **string** |  | [optional]
**purpose_code** | **string** |  | [optional]
**purpose_link** | **string** |  | [optional]
**agreement_id** | **string** |  | [optional]
**data_life_unit** | [**\MyDataMyConsent\Model\DataLifeUnit**](DataLifeUnit.md) |  | [optional]
**data_life_value** | **int** |  | [optional]
**data_fetch_frequency_unit** | [**\MyDataMyConsent\Model\DataFetchFrequencyUnit**](DataFetchFrequencyUnit.md) |  | [optional]
**data_fetch_frequency_unit_value** | **int** |  | [optional]
**data_fetch_type** | [**\MyDataMyConsent\Model\DataFetchType**](DataFetchType.md) |  | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  | [optional]
**approved_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**rejected_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**expires_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**requested_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**requested_financial_accounts** | [**\MyDataMyConsent\Model\DataConsentRequestedAccountDto[]**](DataConsentRequestedAccountDto.md) |  | [optional]
**requested_documents** | [**\MyDataMyConsent\Model\DataConsentRequestedDocumentDto[]**](DataConsentRequestedDocumentDto.md) |  | [optional]
**requested_health_data** | [**\MyDataMyConsent\Model\DataConsentRequestedDocument[]**](DataConsentRequestedDocument.md) |  | [optional]
**requested_identity_details** | [**\MyDataMyConsent\Model\JsonSchema**](JsonSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
