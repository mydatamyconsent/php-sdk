# MyDataMyConsent\DocumentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIssuedDocumentById()**](DocumentsApi.md#getIssuedDocumentById) | **GET** /v1/documents/issued/{documentId} | Get issued document.
[**getIssuedDocuments()**](DocumentsApi.md#getIssuedDocuments) | **GET** /v1/documents/issued | Get issued documents.
[**getRegisteredDocumentTypes()**](DocumentsApi.md#getRegisteredDocumentTypes) | **GET** /v1/documents/types | Get registered document types.
[**issueDocument()**](DocumentsApi.md#issueDocument) | **POST** /v1/documents/issue | Issue a new document.


## `getIssuedDocumentById()`

```php
getIssuedDocumentById($document_id): \MyDataMyConsent\Model\IssuedDocument
```

Get issued document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 'document_id_example'; // string | Document id.

try {
    $result = $apiInstance->getIssuedDocumentById($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getIssuedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Document id. |

### Return type

[**\MyDataMyConsent\Model\IssuedDocument**](../Model/IssuedDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssuedDocuments()`

```php
getIssuedDocuments($document_type_id, $from_date_time, $to_date_time, $page_size, $page_no): \MyDataMyConsent\Model\IssuedDocumentPaginatedList
```

Get issued documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_type_id = 'document_type_id_example'; // string
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_size = 25; // int
$page_no = 1; // int

try {
    $result = $apiInstance->getIssuedDocuments($document_type_id, $from_date_time, $to_date_time, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getIssuedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **string**|  | [optional]
 **from_date_time** | **\DateTime**|  | [optional]
 **to_date_time** | **\DateTime**|  | [optional]
 **page_size** | **int**|  | [optional] [default to 25]
 **page_no** | **int**|  | [optional] [default to 1]

### Return type

[**\MyDataMyConsent\Model\IssuedDocumentPaginatedList**](../Model/IssuedDocumentPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegisteredDocumentTypes()`

```php
getRegisteredDocumentTypes($page_no, $page_size): \MyDataMyConsent\Model\DocumentTypePaginatedList
```

Get registered document types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getRegisteredDocumentTypes($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getRegisteredDocumentTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\DocumentTypePaginatedList**](../Model/DocumentTypePaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueDocument()`

```php
issueDocument($document_issue_request): \MyDataMyConsent\Model\IssuedDocument
```

Issue a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest | Document issue request MyDataMyConsent.Models.Documents.DocumentIssueRequest.

try {
    $result = $apiInstance->issueDocument($document_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->issueDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_issue_request** | [**\MyDataMyConsent\Model\DocumentIssueRequest**](../Model/DocumentIssueRequest.md)| Document issue request MyDataMyConsent.Models.Documents.DocumentIssueRequest. |

### Return type

[**\MyDataMyConsent\Model\IssuedDocument**](../Model/IssuedDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
