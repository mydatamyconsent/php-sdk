# # DataConsentDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**organization_id** | **string** |  | [optional]
**requested_by_org_id** | **string** |  | [optional]
**transaction_id** | **string** |  | [optional]
**start_date_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**expiry_date_time** | [**\DateTime**](\DateTime.md) |  | [optional]
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
**created_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**approved_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]
**rejected_at_utc** | [**\DateTime**](\DateTime.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
