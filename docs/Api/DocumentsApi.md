# MyDataMyConsent\DocumentsApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIssuedDocumentById()**](DocumentsApi.md#getIssuedDocumentById) | **GET** /v1/documents/issued/{documentId} | Get issued document.
[**getIssuedDocuments()**](DocumentsApi.md#getIssuedDocuments) | **GET** /v1/documents/issued/{documentTypeId} | Get paginated list of issued documents of given document type.
[**getRegisteredDocumentTypes()**](DocumentsApi.md#getRegisteredDocumentTypes) | **GET** /v1/documents/types | Get paginated list of registered document types.
[**issueDocumentToIndividual()**](DocumentsApi.md#issueDocumentToIndividual) | **POST** /v1/documents/issue/individual | Issue a new document to an individual user.
[**issueDocumentToOrganization()**](DocumentsApi.md#issueDocumentToOrganization) | **POST** /v1/documents/issue/organization | Issue a new document to an organization.
[**uploadDocumentForIndividual()**](DocumentsApi.md#uploadDocumentForIndividual) | **POST** /v1/documents/issue/individual/upload/{issueRequestId} | Upload a document for issuance request of individual.
[**uploadDocumentForOrganization()**](DocumentsApi.md#uploadDocumentForOrganization) | **POST** /v1/documents/issue/organization/upload/{issueRequestId} | Upload a document for issuance request of organization.


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
getIssuedDocuments($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\IssuedDocumentPaginatedList
```

Get paginated list of issued documents of given document type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_type_id = 'document_type_id_example'; // string | Document type id.
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From DateTime in UTC timezone.
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To DateTime in UTC timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getIssuedDocuments($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getIssuedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **string**| Document type id. |
 **from_date_time** | **\DateTime**| From DateTime in UTC timezone. | [optional]
 **to_date_time** | **\DateTime**| To DateTime in UTC timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

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

Get paginated list of registered document types.

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

## `issueDocumentToIndividual()`

```php
issueDocumentToIndividual($document_issue_request): \MyDataMyConsent\Model\DocumentIssueRequestDetails
```

Issue a new document to an individual user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest | Document issue request payload

try {
    $result = $apiInstance->issueDocumentToIndividual($document_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->issueDocumentToIndividual: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_issue_request** | [**\MyDataMyConsent\Model\DocumentIssueRequest**](../Model/DocumentIssueRequest.md)| Document issue request payload |

### Return type

[**\MyDataMyConsent\Model\DocumentIssueRequestDetails**](../Model/DocumentIssueRequestDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueDocumentToOrganization()`

```php
issueDocumentToOrganization($document_issue_request): \MyDataMyConsent\Model\DocumentIssueRequestDetails
```

Issue a new document to an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest | Document issue request payload

try {
    $result = $apiInstance->issueDocumentToOrganization($document_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->issueDocumentToOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_issue_request** | [**\MyDataMyConsent\Model\DocumentIssueRequest**](../Model/DocumentIssueRequest.md)| Document issue request payload |

### Return type

[**\MyDataMyConsent\Model\DocumentIssueRequestDetails**](../Model/DocumentIssueRequestDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocumentForIndividual()`

```php
uploadDocumentForIndividual($issue_request_id, $form_file)
```

Upload a document for issuance request of individual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issue_request_id = 'issue_request_id_example'; // string | Document issue request id.
$form_file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadDocumentForIndividual($issue_request_id, $form_file);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->uploadDocumentForIndividual: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_request_id** | **string**| Document issue request id. |
 **form_file** | **\SplFileObject****\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocumentForOrganization()`

```php
uploadDocumentForOrganization($issue_request_id, $form_file)
```

Upload a document for issuance request of organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issue_request_id = 'issue_request_id_example'; // string | Document issue request id System.Guid.
$form_file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadDocumentForOrganization($issue_request_id, $form_file);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->uploadDocumentForOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_request_id** | **string**| Document issue request id System.Guid. |
 **form_file** | **\SplFileObject****\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
