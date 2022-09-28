# MyDataMyConsent\OrganizationsApi

All URIs are relative to https://api.mydatamyconsent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OrganizationsConsentRequestsGet()**](OrganizationsApi.md#v1OrganizationsConsentRequestsGet) | **GET** /v1/organizations/consent-requests | Get all consent requests sent to Organizations. |
| [**v1OrganizationsConsentRequestsPost()**](OrganizationsApi.md#v1OrganizationsConsentRequestsPost) | **POST** /v1/organizations/consent-requests | Create consent request for an Organization. |
| [**v1OrganizationsConsentRequestsRequestIdCancelPut()**](OrganizationsApi.md#v1OrganizationsConsentRequestsRequestIdCancelPut) | **PUT** /v1/organizations/consent-requests/{request_id}/cancel | Cancel the  Organization data request by id. |
| [**v1OrganizationsConsentRequestsRequestIdGet()**](OrganizationsApi.md#v1OrganizationsConsentRequestsRequestIdGet) | **GET** /v1/organizations/consent-requests/{request_id} | Get Organization data request by id. |
| [**v1OrganizationsConsentTemplatesGet()**](OrganizationsApi.md#v1OrganizationsConsentTemplatesGet) | **GET** /v1/organizations/consent-templates | Get the paginated list of organization consent templates. |
| [**v1OrganizationsConsentTemplatesTemplateIdGet()**](OrganizationsApi.md#v1OrganizationsConsentTemplatesTemplateIdGet) | **GET** /v1/organizations/consent-templates/{template_id} | Get Organization consent template details by consent id. |
| [**v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet) | **GET** /v1/organizations/consents/{consent_id}/documents/{document_id}/download | Download Organization consent document by document id. |
| [**v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet) | **GET** /v1/organizations/consents/{consent_id}/documents/{document_id} | Get Organization consent document based on document id and consent id. |
| [**v1OrganizationsConsentsConsentIdDocumentsGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdDocumentsGet) | **GET** /v1/organizations/consents/{consent_id}/documents | Get Organization consent document by consent id. |
| [**v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts/{account_id} | Get organization consented financial account details. |
| [**v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts/{account_id}/transactions | Get organization consented financial account transactions. |
| [**v1OrganizationsConsentsConsentIdFinancialAccountsGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdFinancialAccountsGet) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts | Get all organization consented financial accounts. |
| [**v1OrganizationsConsentsConsentIdGet()**](OrganizationsApi.md#v1OrganizationsConsentsConsentIdGet) | **GET** /v1/organizations/consents/{consent_id} | Get Organization consent request details by consent id. |
| [**v1OrganizationsConsentsGet()**](OrganizationsApi.md#v1OrganizationsConsentsGet) | **GET** /v1/organizations/consents | Get the paginated list of Organization consents. |
| [**v1OrganizationsDocumentsIssuePost()**](OrganizationsApi.md#v1OrganizationsDocumentsIssuePost) | **POST** /v1/organizations/documents/issue | Issue a new document to an organization. |
| [**v1OrganizationsDocumentsIssueUploadIssueRequestIdPost()**](OrganizationsApi.md#v1OrganizationsDocumentsIssueUploadIssueRequestIdPost) | **POST** /v1/organizations/documents/issue/upload/{issue_request_id} | Upload a document for issuance request of Organization. |
| [**v1OrganizationsDocumentsIssuedDocumentIdGet()**](OrganizationsApi.md#v1OrganizationsDocumentsIssuedDocumentIdGet) | **GET** /v1/organizations/documents/issued/{document_id} | Get issued document. |
| [**v1OrganizationsDocumentsIssuedGet()**](OrganizationsApi.md#v1OrganizationsDocumentsIssuedGet) | **GET** /v1/organizations/documents/issued | Get paginated list of issued documents of given document type. |
| [**v1OrganizationsDocumentsTypesGet()**](OrganizationsApi.md#v1OrganizationsDocumentsTypesGet) | **GET** /v1/organizations/documents/types | Get paginated list of registered document types. |


## `v1OrganizationsConsentRequestsGet()`

```php
v1OrganizationsConsentRequestsGet($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfOrganizationConsentRequestDetailss
```

Get all consent requests sent to Organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
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
    $result = $apiInstance->v1OrganizationsConsentRequestsGet($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentRequestsGet: ', $e->getMessage(), PHP_EOL;
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

[**\MyDataMyConsent\Model\PaginatedListOfOrganizationConsentRequestDetailss**](../Model/PaginatedListOfOrganizationConsentRequestDetailss.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentRequestsPost()`

```php
v1OrganizationsConsentRequestsPost($create_consent_request): \MyDataMyConsent\Model\OrganizationConsentRequestDetails
```

Create consent request for an Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_consent_request = new \MyDataMyConsent\Model\CreateConsentRequest(); // \MyDataMyConsent\Model\CreateConsentRequest

try {
    $result = $apiInstance->v1OrganizationsConsentRequestsPost($create_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_consent_request** | [**\MyDataMyConsent\Model\CreateConsentRequest**](../Model/CreateConsentRequest.md)|  | |

### Return type

[**\MyDataMyConsent\Model\OrganizationConsentRequestDetails**](../Model/OrganizationConsentRequestDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentRequestsRequestIdCancelPut()`

```php
v1OrganizationsConsentRequestsRequestIdCancelPut($request_id): bool
```

Cancel the  Organization data request by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentRequestsRequestIdCancelPut($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentRequestsRequestIdCancelPut: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentRequestsRequestIdGet()`

```php
v1OrganizationsConsentRequestsRequestIdGet($request_id): \MyDataMyConsent\Model\ConsentRequest
```

Get Organization data request by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentRequestsRequestIdGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentRequestsRequestIdGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentTemplatesGet()`

```php
v1OrganizationsConsentTemplatesGet($page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfConsentRequestTemplates
```

Get the paginated list of organization consent templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1OrganizationsConsentTemplatesGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentTemplatesGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentTemplatesTemplateIdGet()`

```php
v1OrganizationsConsentTemplatesTemplateIdGet($template_id): \MyDataMyConsent\Model\OrganizationConsentRequestTemplateDetails
```

Get Organization consent template details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentTemplatesTemplateIdGet($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentTemplatesTemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\OrganizationConsentRequestTemplateDetails**](../Model/OrganizationConsentRequestTemplateDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet()`

```php
v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id): \SplFileObject
```

Download Organization consent document by document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet()`

```php
v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id): \MyDataMyConsent\Model\ConsentedDocument
```

Get Organization consent document based on document id and consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdDocumentsGet()`

```php
v1OrganizationsConsentsConsentIdDocumentsGet($consent_id): \MyDataMyConsent\Model\ConsentedDocument[]
```

Get Organization consent document by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdDocumentsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet()`

```php
v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet($consent_id, $account_id): \MyDataMyConsent\Model\FinancialAccount
```

Get organization consented financial account details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet()`

```php
v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfFinancialAccountTransactions
```

Get organization consented financial account transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
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
    $result = $apiInstance->v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdFinancialAccountsGet()`

```php
v1OrganizationsConsentsConsentIdFinancialAccountsGet($consent_id): \MyDataMyConsent\Model\FinancialAccount[]
```

Get all organization consented financial accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdFinancialAccountsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdFinancialAccountsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsConsentIdGet()`

```php
v1OrganizationsConsentsConsentIdGet($consent_id): \MyDataMyConsent\Model\ConsentDetails
```

Get Organization consent request details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsConsentsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsConsentIdGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsConsentsGet()`

```php
v1OrganizationsConsentsGet($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfConsents
```

Get the paginated list of Organization consents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
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
    $result = $apiInstance->v1OrganizationsConsentsGet($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsConsentsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsDocumentsIssuePost()`

```php
v1OrganizationsDocumentsIssuePost($document_issue_request): \MyDataMyConsent\Model\DocumentIssueRequestDetails
```

Issue a new document to an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_issue_request = new \MyDataMyConsent\Model\DocumentIssueRequest(); // \MyDataMyConsent\Model\DocumentIssueRequest

try {
    $result = $apiInstance->v1OrganizationsDocumentsIssuePost($document_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsDocumentsIssuePost: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsDocumentsIssueUploadIssueRequestIdPost()`

```php
v1OrganizationsDocumentsIssueUploadIssueRequestIdPost($issue_request_id, $file): \MyDataMyConsent\Model\UploadDocumentResponse
```

Upload a document for issuance request of Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_request_id = 'issue_request_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->v1OrganizationsDocumentsIssueUploadIssueRequestIdPost($issue_request_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsDocumentsIssueUploadIssueRequestIdPost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsDocumentsIssuedDocumentIdGet()`

```php
v1OrganizationsDocumentsIssuedDocumentIdGet($document_id): \MyDataMyConsent\Model\IssuedDocument
```

Get issued document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1OrganizationsDocumentsIssuedDocumentIdGet($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsDocumentsIssuedDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsDocumentsIssuedGet()`

```php
v1OrganizationsDocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfIssuedDocuments
```

Get paginated list of issued documents of given document type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
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
    $result = $apiInstance->v1OrganizationsDocumentsIssuedGet($document_type_id, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsDocumentsIssuedGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OrganizationsDocumentsTypesGet()`

```php
v1OrganizationsDocumentsTypesGet($page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfDocumentTypes
```

Get paginated list of registered document types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1OrganizationsDocumentsTypesGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsDocumentsTypesGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
