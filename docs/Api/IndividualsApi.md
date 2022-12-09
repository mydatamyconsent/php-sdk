# MyDataMyConsent\IndividualsApi

All URIs are relative to https://api.mydatamyconsent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**issuerIssuedoc1XmlPost()**](IndividualsApi.md#issuerIssuedoc1XmlPost) | **POST** /issuer/issuedoc/1/xml | Digilocker compatible endpoint to issue document. |
| [**v1IndividualsConsentRequestsGet()**](IndividualsApi.md#v1IndividualsConsentRequestsGet) | **GET** /v1/individuals/consent-requests | Get all consent requests sent to Individuals. |
| [**v1IndividualsConsentRequestsPost()**](IndividualsApi.md#v1IndividualsConsentRequestsPost) | **POST** /v1/individuals/consent-requests | Create individual consent request. |
| [**v1IndividualsConsentRequestsRequestIdCancelPut()**](IndividualsApi.md#v1IndividualsConsentRequestsRequestIdCancelPut) | **PUT** /v1/individuals/consent-requests/{request_id}/cancel | Cancel the Individual data request by id. |
| [**v1IndividualsConsentRequestsRequestIdGet()**](IndividualsApi.md#v1IndividualsConsentRequestsRequestIdGet) | **GET** /v1/individuals/consent-requests/{request_id} | Get Individual data consent request by id. |
| [**v1IndividualsConsentTemplatesGet()**](IndividualsApi.md#v1IndividualsConsentTemplatesGet) | **GET** /v1/individuals/consent-templates | Get the paginated list of individual consent templates. |
| [**v1IndividualsConsentTemplatesTemplateIdGet()**](IndividualsApi.md#v1IndividualsConsentTemplatesTemplateIdGet) | **GET** /v1/individuals/consent-templates/{template_id} | Get Individual consent template details by consent id. |
| [**v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id}/download | Download Individual consented document by document id. |
| [**v1IndividualsConsentsConsentIdDocumentsDocumentIdGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdDocumentsDocumentIdGet) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id} | Get Individual consented document by document id. |
| [**v1IndividualsConsentsConsentIdDocumentsGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdDocumentsGet) | **GET** /v1/individuals/consents/{consent_id}/documents | Get Individual consented document by consent id. |
| [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id} | Get individual consented financial account details. |
| [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id}/transactions | Get individual consented financial account transactions. |
| [**v1IndividualsConsentsConsentIdFinancialAccountsGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdFinancialAccountsGet) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts | Get all individual consented financial accounts. |
| [**v1IndividualsConsentsConsentIdGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdGet) | **GET** /v1/individuals/consents/{consent_id} | Get Individuals consent details by consent id. |
| [**v1IndividualsConsentsConsentIdHealthFhirBundleGet()**](IndividualsApi.md#v1IndividualsConsentsConsentIdHealthFhirBundleGet) | **GET** /v1/individuals/consents/{consent_id}/health/fhir/bundle | Get Individual consented Health Records by consent id. |
| [**v1IndividualsConsentsGet()**](IndividualsApi.md#v1IndividualsConsentsGet) | **GET** /v1/individuals/consents | Get the paginated list of Individual consents. |
| [**v1IndividualsDocumentsIssueIssueRequestIdUploadPost()**](IndividualsApi.md#v1IndividualsDocumentsIssueIssueRequestIdUploadPost) | **POST** /v1/individuals/documents/issue/{issue_request_id}/upload | Upload a document for issuance request of individual. |
| [**v1IndividualsDocumentsIssuePost()**](IndividualsApi.md#v1IndividualsDocumentsIssuePost) | **POST** /v1/individuals/documents/issue | Issue a new document to an individual user. |
| [**v1IndividualsDocumentsIssuedDocumentIdGet()**](IndividualsApi.md#v1IndividualsDocumentsIssuedDocumentIdGet) | **GET** /v1/individuals/documents/issued/{document_id} | Get issued document. |
| [**v1IndividualsDocumentsIssuedGet()**](IndividualsApi.md#v1IndividualsDocumentsIssuedGet) | **GET** /v1/individuals/documents/issued | Get paginated list of issued documents of given document type. |
| [**v1IndividualsDocumentsTypesGet()**](IndividualsApi.md#v1IndividualsDocumentsTypesGet) | **GET** /v1/individuals/documents/types | Get paginated list of registered document types. |


## `issuerIssuedoc1XmlPost()`

```php
issuerIssuedoc1XmlPost($push_uri_request): \MyDataMyConsent\Model\PushUriResponse
```

Digilocker compatible endpoint to issue document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_uri_request = new \MyDataMyConsent\Model\PushUriRequest(); // \MyDataMyConsent\Model\PushUriRequest

try {
    $result = $apiInstance->issuerIssuedoc1XmlPost($push_uri_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->issuerIssuedoc1XmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **push_uri_request** | [**\MyDataMyConsent\Model\PushUriRequest**](../Model/PushUriRequest.md)|  | |

### Return type

[**\MyDataMyConsent\Model\PushUriResponse**](../Model/PushUriResponse.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentRequestsGet()`

```php
v1IndividualsConsentRequestsGet($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfIndividualConsentRequestDetailss
```

Get all consent requests sent to Individuals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \MyDataMyConsent\Model\DataConsentStatus(); // DataConsentStatus
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsConsentRequestsGet($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentRequestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**DataConsentStatus**](../Model/.md)|  | [optional] |
| **from_date_time** | **\DateTime**|  | [optional] |
| **to_date_time** | **\DateTime**|  | [optional] |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfIndividualConsentRequestDetailss**](../Model/PaginatedListOfIndividualConsentRequestDetailss.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentRequestsPost()`

```php
v1IndividualsConsentRequestsPost($create_consent_request): \MyDataMyConsent\Model\IndividualConsentRequestDetails
```

Create individual consent request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_consent_request = new \MyDataMyConsent\Model\CreateConsentRequest(); // \MyDataMyConsent\Model\CreateConsentRequest

try {
    $result = $apiInstance->v1IndividualsConsentRequestsPost($create_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_consent_request** | [**\MyDataMyConsent\Model\CreateConsentRequest**](../Model/CreateConsentRequest.md)|  | |

### Return type

[**\MyDataMyConsent\Model\IndividualConsentRequestDetails**](../Model/IndividualConsentRequestDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentRequestsRequestIdCancelPut()`

```php
v1IndividualsConsentRequestsRequestIdCancelPut($request_id): bool
```

Cancel the Individual data request by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentRequestsRequestIdCancelPut($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentRequestsRequestIdCancelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**|  | |

### Return type

**bool**

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentRequestsRequestIdGet()`

```php
v1IndividualsConsentRequestsRequestIdGet($request_id): \MyDataMyConsent\Model\ConsentRequest
```

Get Individual data consent request by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentRequestsRequestIdGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentRequestsRequestIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\ConsentRequest**](../Model/ConsentRequest.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentTemplatesGet()`

```php
v1IndividualsConsentTemplatesGet($page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfConsentRequestTemplates
```

Get the paginated list of individual consent templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsConsentTemplatesGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfConsentRequestTemplates**](../Model/PaginatedListOfConsentRequestTemplates.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentTemplatesTemplateIdGet()`

```php
v1IndividualsConsentTemplatesTemplateIdGet($template_id): \MyDataMyConsent\Model\IndividualConsentRequestTemplateDetails
```

Get Individual consent template details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentTemplatesTemplateIdGet($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentTemplatesTemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\IndividualConsentRequestTemplateDetails**](../Model/IndividualConsentRequestTemplateDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet()`

```php
v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id): \SplFileObject
```

Download Individual consented document by document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |
| **document_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdDocumentsDocumentIdGet()`

```php
v1IndividualsConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id): \MyDataMyConsent\Model\ConsentedDocument
```

Get Individual consented document by document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |
| **document_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\ConsentedDocument**](../Model/ConsentedDocument.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdDocumentsGet()`

```php
v1IndividualsConsentsConsentIdDocumentsGet($consent_id): \MyDataMyConsent\Model\ConsentedDocument[]
```

Get Individual consented document by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdDocumentsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\ConsentedDocument[]**](../Model/ConsentedDocument.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet()`

```php
v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet($consent_id, $account_id): \MyDataMyConsent\Model\FinancialAccount
```

Get individual consented financial account details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\FinancialAccount**](../Model/FinancialAccount.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet()`

```php
v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfFinancialAccountTransactions
```

Get individual consented financial account transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string
$filters = 'filters_example'; // string
$from_date_time = 'from_date_time_example'; // string
$to_date_time = 'to_date_time_example'; // string
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |
| **account_id** | **string**|  | |
| **filters** | **string**|  | [optional] |
| **from_date_time** | **string**|  | [optional] |
| **to_date_time** | **string**|  | [optional] |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfFinancialAccountTransactions**](../Model/PaginatedListOfFinancialAccountTransactions.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdFinancialAccountsGet()`

```php
v1IndividualsConsentsConsentIdFinancialAccountsGet($consent_id): \MyDataMyConsent\Model\FinancialAccount[]
```

Get all individual consented financial accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdFinancialAccountsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdFinancialAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\FinancialAccount[]**](../Model/FinancialAccount.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdGet()`

```php
v1IndividualsConsentsConsentIdGet($consent_id): \MyDataMyConsent\Model\ConsentDetails
```

Get Individuals consent details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\ConsentDetails**](../Model/ConsentDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsConsentIdHealthFhirBundleGet()`

```php
v1IndividualsConsentsConsentIdHealthFhirBundleGet($consent_id): mixed
```

Get Individual consented Health Records by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsConsentsConsentIdHealthFhirBundleGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsConsentIdHealthFhirBundleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsConsentsGet()`

```php
v1IndividualsConsentsGet($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfConsents
```

Get the paginated list of Individual consents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \MyDataMyConsent\Model\DataConsentStatus(); // DataConsentStatus
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsConsentsGet($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsConsentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**DataConsentStatus**](../Model/.md)|  | [optional] |
| **from_date_time** | **\DateTime**|  | [optional] |
| **to_date_time** | **\DateTime**|  | [optional] |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfConsents**](../Model/PaginatedListOfConsents.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsDocumentsIssueIssueRequestIdUploadPost()`

```php
v1IndividualsDocumentsIssueIssueRequestIdUploadPost($issue_request_id, $file): \MyDataMyConsent\Model\UploadDocumentResponse
```

Upload a document for issuance request of individual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_request_id = 'issue_request_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->v1IndividualsDocumentsIssueIssueRequestIdUploadPost($issue_request_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsDocumentsIssueIssueRequestIdUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_request_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\MyDataMyConsent\Model\UploadDocumentResponse**](../Model/UploadDocumentResponse.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsDocumentsIssuePost()`

```php
v1IndividualsDocumentsIssuePost($document_issue_request): \MyDataMyConsent\Model\DocumentIssueRequestDetails
```

Issue a new document to an individual user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest

try {
    $result = $apiInstance->v1IndividualsDocumentsIssuePost($document_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsDocumentsIssuePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_issue_request** | [**\MyDataMyConsent\Model\DocumentIssueRequest**](../Model/DocumentIssueRequest.md)|  | |

### Return type

[**\MyDataMyConsent\Model\DocumentIssueRequestDetails**](../Model/DocumentIssueRequestDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsDocumentsIssuedDocumentIdGet()`

```php
v1IndividualsDocumentsIssuedDocumentIdGet($document_id): \MyDataMyConsent\Model\IssuedDocument
```

Get issued document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1IndividualsDocumentsIssuedDocumentIdGet($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsDocumentsIssuedDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\IssuedDocument**](../Model/IssuedDocument.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsDocumentsIssuedGet()`

```php
v1IndividualsDocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfIssuedDocuments
```

Get paginated list of issued documents of given document type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 'document_type_id_example'; // string
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsDocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsDocumentsIssuedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_type_id** | **string**|  | |
| **from_date_time** | **\DateTime**|  | [optional] |
| **to_date_time** | **\DateTime**|  | [optional] |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfIssuedDocuments**](../Model/PaginatedListOfIssuedDocuments.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IndividualsDocumentsTypesGet()`

```php
v1IndividualsDocumentsTypesGet($page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfDocumentTypes
```

Get paginated list of registered document types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\IndividualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1IndividualsDocumentsTypesGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualsApi->v1IndividualsDocumentsTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfDocumentTypes**](../Model/PaginatedListOfDocumentTypes.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
