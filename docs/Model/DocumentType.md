# # DocumentType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document Type Identifier. |
**category_type** | [**\MyDataMyConsent\Model\DocumentCategoryType**](DocumentCategoryType.md) |  |
**sub_category_type** | [**\MyDataMyConsent\Model\DocumentSubCategoryType**](DocumentSubCategoryType.md) |  |
**name** | **string** | Document Type Name. eg: Driving License. |
**slug** | **string** | Document Type Unique Slug. eg: \\\&quot;in.gov.gj.transport.dl\\\&quot;. |
**description** | **string** | Document Type description. eg: Gujarat State Driving License. | [optional]
**logo_url** | **string** | Logo URL of document type. |
**search_service_name** | **string** | Document search repository service name. | [optional]
**repository_service_name** | **string** | Document repository service name. | [optional]
**supported_entity_type** | [**SupportedEntityType**](SupportedEntityType.md) |  |
**added_by** | **string** | Name of the document type creator. |
**payable_amount** | **float** | Payable amount if document is chargeable. eg: 10.25. |
**payable_amount_currency** | **string** | Payable amount currency. eg: INR, USD etc.,. |
**approved_at_utc** | **\DateTime** | DateTime of approval in UTC timezone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
