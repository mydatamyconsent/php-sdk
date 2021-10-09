# # DataConsentRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_id** | **string** |  | [optional]
**transaction_id** | **string** |  | [optional]
**identifiers** | **array<string,string>** |  | [optional]
**start_date_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**expiry_date_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**description** | **string** |  | [optional]
**purpose_code** | **string** |  | [optional]
**purpose_link** | **string** |  | [optional]
**data_life_unit** | [**\MyDataMyConsent\Model\DataLifeUnit**](DataLifeUnit.md) |  | [optional]
**data_life_value** | **int** |  | [optional]
**data_fetch_frequency_unit** | [**\MyDataMyConsent\Model\DataFetchFrequencyUnit**](DataFetchFrequencyUnit.md) |  | [optional]
**data_fetch_frequency_unit_value** | **int** |  | [optional]
**data_fetch_type** | [**\MyDataMyConsent\Model\DataFetchType**](DataFetchType.md) |  | [optional]
**agreement_id** | **string** |  | [optional]
**identity_claims** | [**\MyDataMyConsent\Model\IdentityClaim[]**](IdentityClaim.md) |  | [optional]
**financial_accounts** | [**\MyDataMyConsent\Model\DataConsentRequestedFaDto[]**](DataConsentRequestedFaDto.md) |  | [optional]
**documents** | [**\MyDataMyConsent\Model\DataConsentRequestedDocumentDto[]**](DataConsentRequestedDocumentDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
