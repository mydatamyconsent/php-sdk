# MyDataMyConsent\DataConsentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ConsentsIndividualsConsentIdAccountsAccountIdGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdAccountsAccountIdGet) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId} | Get individual consented financial account details based on account id.
[**v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions of an individual based on accountId.
[**v1ConsentsIndividualsConsentIdAccountsGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdAccountsGet) | **GET** /v1/consents/individuals/{consentId}/accounts | Get all individual financial accounts in a consent.
[**v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download a individuals consented document.
[**v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individuals consent document based on document id.
[**v1ConsentsIndividualsConsentIdDocumentsGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdDocumentsGet) | **GET** /v1/consents/individuals/{consentId}/documents | Get the individual documents based on ConsentId.
[**v1ConsentsIndividualsConsentIdGet()**](DataConsentsApi.md#v1ConsentsIndividualsConsentIdGet) | **GET** /v1/consents/individuals/{consentId} | Get individuals consent details by consent id.
[**v1ConsentsIndividualsGet()**](DataConsentsApi.md#v1ConsentsIndividualsGet) | **GET** /v1/consents/individuals | Get the list of Consents Sent to Individuals.
[**v1ConsentsOrganizationsConsentIdAccountsAccountIdGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdAccountsAccountIdGet) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId} | Get orgnization consented financial account details based on account id.
[**v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions of an organization based on accountId.
[**v1ConsentsOrganizationsConsentIdAccountsGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdAccountsGet) | **GET** /v1/consents/organizations/{consentId}/accounts | Get all organizational financial accounts in a consent.
[**v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download organizations consented document.
[**v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organizations consent document based on document id.
[**v1ConsentsOrganizationsConsentIdDocumentsGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdDocumentsGet) | **GET** /v1/consents/organizations/{consentId}/documents | Get the organizations documents based on ConsentId.
[**v1ConsentsOrganizationsConsentIdGet()**](DataConsentsApi.md#v1ConsentsOrganizationsConsentIdGet) | **GET** /v1/consents/organizations/{consentId} | Get organizations consent details by consent id.
[**v1ConsentsOrganizationsGet()**](DataConsentsApi.md#v1ConsentsOrganizationsGet) | **GET** /v1/consents/organizations | Get the list of data consents sent for organizations.


## `v1ConsentsIndividualsConsentIdAccountsAccountIdGet()`

```php
v1ConsentsIndividualsConsentIdAccountsAccountIdGet($consent_id, $account_id): \MyDataMyConsent\Model\FinancialAccount
```

Get individual consented financial account details based on account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdAccountsAccountIdGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\FinancialAccount**](../Model/FinancialAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet()`

```php
v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $page_no, $page_size, $from_date, $to_date): \MyDataMyConsent\Model\UserAccountFinancialTransactionsDtoPaginatedList
```

Get consented financial account transactions of an individual based on accountId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string
$filters = 'filters_example'; // string
$page_no = 56; // int
$page_size = 56; // int
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $page_no, $page_size, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |
 **filters** | **string**|  | [optional]
 **page_no** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **from_date** | **\DateTime**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

[**\MyDataMyConsent\Model\UserAccountFinancialTransactionsDtoPaginatedList**](../Model/UserAccountFinancialTransactionsDtoPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdAccountsGet()`

```php
v1ConsentsIndividualsConsentIdAccountsGet($consent_id): \MyDataMyConsent\Model\DataConsentFinancialsDto
```

Get all individual financial accounts in a consent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdAccountsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentFinancialsDto**](../Model/DataConsentFinancialsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet()`

```php
v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id): \MyDataMyConsent\Model\UserDocumentDownloadDto
```

Download a individuals consented document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | consentId.
$document_id = 'document_id_example'; // string | documentId.

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| consentId. |
 **document_id** | **string**| documentId. |

### Return type

[**\MyDataMyConsent\Model\UserDocumentDownloadDto**](../Model/UserDocumentDownloadDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet()`

```php
v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet($consent_id, $document_id): \MyDataMyConsent\Model\UserDocumentDetailsDto
```

Get individuals consent document based on document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string | Document Id.

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**| Document Id. |

### Return type

[**\MyDataMyConsent\Model\UserDocumentDetailsDto**](../Model/UserDocumentDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdDocumentsGet()`

```php
v1ConsentsIndividualsConsentIdDocumentsGet($consent_id): \MyDataMyConsent\Model\DataConsentDocumentsDto
```

Get the individual documents based on ConsentId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdDocumentsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentDocumentsDto**](../Model/DataConsentDocumentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsConsentIdGet()`

```php
v1ConsentsIndividualsConsentIdGet($consent_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```

Get individuals consent details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsIndividualsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentDetailsDto**](../Model/DataConsentDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsIndividualsGet()`

```php
v1ConsentsIndividualsGet($page_no, $page_size, $status, $start_date, $end_date): \MyDataMyConsent\Model\UserDataConsentInfoDtoPaginatedList
```

Get the list of Consents Sent to Individuals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int
$page_size = 56; // int
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1ConsentsIndividualsGet($page_no, $page_size, $status, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsIndividualsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\MyDataMyConsent\Model\UserDataConsentInfoDtoPaginatedList**](../Model/UserDataConsentInfoDtoPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdAccountsAccountIdGet()`

```php
v1ConsentsOrganizationsConsentIdAccountsAccountIdGet($consent_id, $account_id): \MyDataMyConsent\Model\OrganizationFinancialAccountDto
```

Get orgnization consented financial account details based on account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdAccountsAccountIdGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\OrganizationFinancialAccountDto**](../Model/OrganizationFinancialAccountDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet()`

```php
v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $page_no, $page_size, $from_date, $to_date): \MyDataMyConsent\Model\OrganizationFinancialTransactionsDtoPaginatedList
```

Get consented financial account transactions of an organization based on accountId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$account_id = 'account_id_example'; // string
$filters = 'filters_example'; // string
$page_no = 56; // int
$page_size = 56; // int
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $page_no, $page_size, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |
 **filters** | **string**|  | [optional]
 **page_no** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **from_date** | **\DateTime**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

[**\MyDataMyConsent\Model\OrganizationFinancialTransactionsDtoPaginatedList**](../Model/OrganizationFinancialTransactionsDtoPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdAccountsGet()`

```php
v1ConsentsOrganizationsConsentIdAccountsGet($consent_id): \MyDataMyConsent\Model\DataConsentFinancialsDto
```

Get all organizational financial accounts in a consent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdAccountsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentFinancialsDto**](../Model/DataConsentFinancialsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet()`

```php
v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id): \MyDataMyConsent\Model\OrganizationDocumentDownloadDto
```

Download organizations consented document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\OrganizationDocumentDownloadDto**](../Model/OrganizationDocumentDownloadDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet()`

```php
v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet($consent_id, $document_id): \MyDataMyConsent\Model\OrganizationDocumentDetailsDto
```

Get organizations consent document based on document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\OrganizationDocumentDetailsDto**](../Model/OrganizationDocumentDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdDocumentsGet()`

```php
v1ConsentsOrganizationsConsentIdDocumentsGet($consent_id): \MyDataMyConsent\Model\DataConsentDocumentsDto
```

Get the organizations documents based on ConsentId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdDocumentsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentDocumentsDto**](../Model/DataConsentDocumentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsConsentIdGet()`

```php
v1ConsentsOrganizationsConsentIdGet($consent_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```

Get organizations consent details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1ConsentsOrganizationsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentDetailsDto**](../Model/DataConsentDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsOrganizationsGet()`

```php
v1ConsentsOrganizationsGet($page_no, $page_size, $status, $start_date, $end_date): \MyDataMyConsent\Model\OrganizationDataConsentInfoDtoPaginatedList
```

Get the list of data consents sent for organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int
$page_size = 56; // int
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1ConsentsOrganizationsGet($page_no, $page_size, $status, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentInfoDtoPaginatedList**](../Model/OrganizationDataConsentInfoDtoPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
