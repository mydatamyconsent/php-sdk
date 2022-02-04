# MyDataMyConsent\DocumentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**issueDocument()**](DocumentsApi.md#issueDocument) | **POST** /v1/documents/issue | Issue a new document.
[**v1DocumentsIssuedDocumentIdGet()**](DocumentsApi.md#v1DocumentsIssuedDocumentIdGet) | **GET** /v1/documents/issued/{documentId} | Get issued document.
[**v1DocumentsIssuedGet()**](DocumentsApi.md#v1DocumentsIssuedGet) | **GET** /v1/documents/issued | Get issued documents.
[**v1DocumentsTypesGet()**](DocumentsApi.md#v1DocumentsTypesGet) | **GET** /v1/documents/types | Get registered document types.


## `issueDocument()`

```php
issueDocument($document_issue_request): bool
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
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest

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
 **document_issue_request** | [**\MyDataMyConsent\Model\DocumentIssueRequest**](../Model/DocumentIssueRequest.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DocumentsIssuedDocumentIdGet()`

```php
v1DocumentsIssuedDocumentIdGet($document_id)
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
    $apiInstance->v1DocumentsIssuedDocumentIdGet($document_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1DocumentsIssuedDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Document id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DocumentsIssuedGet()`

```php
v1DocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_size, $page_no)
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
    $apiInstance->v1DocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_size, $page_no);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1DocumentsIssuedGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DocumentsTypesGet()`

```php
v1DocumentsTypesGet($page_size, $page_no)
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
$page_size = 25; // int
$page_no = 1; // int

try {
    $apiInstance->v1DocumentsTypesGet($page_size, $page_no);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1DocumentsTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**|  | [optional] [default to 25]
 **page_no** | **int**|  | [optional] [default to 1]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
