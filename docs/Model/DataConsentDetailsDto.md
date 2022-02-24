# # DataConsentDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**data_life** | [**\MyDataMyConsent\Model\Life**](Life.md) |  | [optional]
**requester_name** | **string** |  | [optional]
**requester_logo** | **string** |  | [optional]
**location** | **string** |  | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  | [optional]
**approved_at_utc** | **\DateTime** |  | [optional]
**rejected_at_utc** | **\DateTime** |  | [optional]
**expires_at_utc** | **\DateTime** |  | [optional]
**requested_at_utc** | **\DateTime** |  | [optional]
**identifiers** | [**\MyDataMyConsent\Model\JsonSchema**](JsonSchema.md) |  | [optional]
**documents** | **string** |  | [optional]
**financials** | **string** |  | [optional]
**health_records** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
