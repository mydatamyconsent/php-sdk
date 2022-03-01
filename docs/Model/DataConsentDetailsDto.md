# # DataConsentDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**data_life** | [**\MyDataMyConsent\Model\Life**](Life.md) |  | [optional]
**requested_by_org** | [**\MyDataMyConsent\Model\Requester**](Requester.md) |  | [optional]
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  | [optional]
**approved_at_utc** | **\DateTime** |  | [optional]
**rejected_at_utc** | **\DateTime** |  | [optional]
**expires_at_utc** | **\DateTime** |  | [optional]
**requested_at_utc** | **\DateTime** |  | [optional]
**identifiers** | **mixed** |  | [optional]
**documents** | [**\MyDataMyConsent\Model\DataConsentDocumentDetailsDto[]**](DataConsentDocumentDetailsDto.md) |  | [optional]
**financials** | **string** |  | [optional]
**health_records** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
