# # DataConsentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Data consent request id. |
**template_id** | **string** | Data consent template id. | [optional]
**consent_id** | **string** | Data consent id. | [optional]
**title** | **string** | Data consent title. |
**description** | **string** | Data consent description. |
**purpose** | **string** | Data consent purpose. | [optional]
**data_life** | [**\MyDataMyConsent\Model\Life**](Life.md) |  | [optional]
**collectables** | [**\MyDataMyConsent\Model\CollectibleTypes[]**](CollectibleTypes.md) | List of supported collectables. |
**receiver** | [**\MyDataMyConsent\Model\ConsentRequestReceiver**](ConsentRequestReceiver.md) |  |
**status** | [**\MyDataMyConsent\Model\DataConsentStatus**](DataConsentStatus.md) |  |
**created_at_utc** | **\DateTime** | Request creation datetime in UTC timezone. |
**expires_at_utc** | **\DateTime** | Request expiration datetime in UTC timezone. |
**approved_at_utc** | **\DateTime** | Request approval datetime in UTC timezone. | [optional]
**data_access_expires_at_utc** | **\DateTime** | Data access expiration datetime in UTC timezone. | [optional]
**rejected_at_utc** | **\DateTime** | Request rejection datetime in UTC timezone. | [optional]
**revoked_at_utc** | **\DateTime** | Request revocation datetime in UTC timezone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
