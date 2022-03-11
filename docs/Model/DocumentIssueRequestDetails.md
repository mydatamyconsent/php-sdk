# # DocumentIssueRequestDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document issue request Id. |
**document_type_id** | **string** | Document type Id. |
**type_name** | **string** | Document type name. |
**identifier** | **string** | Document identifier. |
**status** | [**\MyDataMyConsent\Model\DocumentIssueRequestStatus**](DocumentIssueRequestStatus.md) |  |
**description** | **string** | Document description. |
**receiver** | **mixed** | Document receiver details. |
**issued_at_utc** | **\DateTime** | Datetime of issue in UTC timezone. |
**valid_from_utc** | **\DateTime** | Valid from datetime in UTC timezone. |
**expires_at_utc** | **\DateTime** | Datetime of expiry in UTC timezone. | [optional]
**meta_data** | **mixed** | Metadata. | [optional]
**created_at_utc** | **\DateTime** | Creation datetime of issue request in UTC timezone. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
