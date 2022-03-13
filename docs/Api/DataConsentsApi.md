# MyDataMyConsent\DataConsentsApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadConsentedDocumentAnalysis()**](DataConsentsApi.md#downloadConsentedDocumentAnalysis) | **GET** /v1/consents/{consentId}/documents/{documentId}/analysis | Get analysis of a consented document.
[**downloadIndividualConsentedDocumentById()**](DataConsentsApi.md#downloadIndividualConsentedDocumentById) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download individual consented document by document id.
[**downloadOrganizationConsentedDocumentById()**](DataConsentsApi.md#downloadOrganizationConsentedDocumentById) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download organization consent document based on document id.
[**getAllConsentedFinancialAccounts()**](DataConsentsApi.md#getAllConsentedFinancialAccounts) | **GET** /v1/consents/individuals/{consentId}/financial-accounts | Get all individual consented financial accounts.
[**getConsentFinancialAccounts()**](DataConsentsApi.md#getConsentFinancialAccounts) | **GET** /v1/consents/organizations/{consentId}/financial-accounts | Get all organizational consented financial accounts.
[**getConsentedAccountById()**](DataConsentsApi.md#getConsentedAccountById) | **GET** /v1/consents/individuals/{consentId}/financial-accounts/{accountId} | Get individual consented financial account details based on account id.
[**getConsentedDocumentById()**](DataConsentsApi.md#getConsentedDocumentById) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individual consented document by document id.
[**getConsentedFinancialAccount()**](DataConsentsApi.md#getConsentedFinancialAccount) | **GET** /v1/consents/organizations/{consentId}/financial-accounts/{accountId} | Get organization consented financial account details based on account id.
[**getConsentedFinancialAccountInsights()**](DataConsentsApi.md#getConsentedFinancialAccountInsights) | **GET** /v1/consents/{consentId}/financial-accounts/{accountId}/insights | Get consented financial account insights.
[**getConsentedFinancialAccountTransactions()**](DataConsentsApi.md#getConsentedFinancialAccountTransactions) | **GET** /v1/consents/individuals/{consentId}/financial-accounts/{accountId}/transactions | Get individual consented financial account transactions of an individual based on accountId.
[**getConsents()**](DataConsentsApi.md#getConsents) | **GET** /v1/consents/individuals | Get the paginated list of individual data consents.
[**getIndividualConsentedDocuments()**](DataConsentsApi.md#getIndividualConsentedDocuments) | **GET** /v1/consents/individuals/{consentId}/documents | Get individual consented documents by consent id.
[**getIndividualDataConsentById()**](DataConsentsApi.md#getIndividualDataConsentById) | **GET** /v1/consents/individuals/{consentId} | Get individuals data consent details by consent id.
[**getOrgConsentedAccountTransactions()**](DataConsentsApi.md#getOrgConsentedAccountTransactions) | **GET** /v1/consents/organizations/{consentId}/financial-accounts/{accountId}/transactions | Get organization consented financial account transactions of an individual based on accountId.
[**getOrganizationConsentedDocumentById()**](DataConsentsApi.md#getOrganizationConsentedDocumentById) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organization consent document based on document id.
[**getOrganizationConsentedDocuments()**](DataConsentsApi.md#getOrganizationConsentedDocuments) | **GET** /v1/consents/organizations/{consentId}/documents | Get organization consented documents by consent id.
[**getOrganizationDataConsentById()**](DataConsentsApi.md#getOrganizationDataConsentById) | **GET** /v1/consents/organizations/{consentId} | Get organizations data consent details by consent id.
[**getOrganizationDataConsents()**](DataConsentsApi.md#getOrganizationDataConsents) | **GET** /v1/consents/organizations | Get the paginated list of organization data consents.


## `downloadConsentedDocumentAnalysis()`

```php
downloadConsentedDocumentAnalysis($consent_id, $document_id)
```

Get analysis of a consented document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Data consent id.
$document_id = 'document_id_example'; // string | Consented document Id.

try {
    $apiInstance->downloadConsentedDocumentAnalysis($consent_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->downloadConsentedDocumentAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Data consent id. |
 **document_id** | **string**| Consented document Id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadIndividualConsentedDocumentById()`

```php
downloadIndividualConsentedDocumentById($consent_id, $document_id)
```

Download individual consented document by document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Individual data consent id.
$document_id = 'document_id_example'; // string | Consented document id.

try {
    $apiInstance->downloadIndividualConsentedDocumentById($consent_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->downloadIndividualConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Individual data consent id. |
 **document_id** | **string**| Consented document id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadOrganizationConsentedDocumentById()`

```php
downloadOrganizationConsentedDocumentById($consent_id, $document_id)
```

Download organization consent document based on document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Organization data consent id.
$document_id = 'document_id_example'; // string | Organization consented document Id.

try {
    $apiInstance->downloadOrganizationConsentedDocumentById($consent_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->downloadOrganizationConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Organization data consent id. |
 **document_id** | **string**| Organization consented document Id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllConsentedFinancialAccounts()`

```php
getAllConsentedFinancialAccounts($consent_id): \MyDataMyConsent\Model\DataConsentFinancialsDto
```

Get all individual consented financial accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Consent id.

try {
    $result = $apiInstance->getAllConsentedFinancialAccounts($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getAllConsentedFinancialAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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

## `getConsentFinancialAccounts()`

```php
getConsentFinancialAccounts($consent_id): \MyDataMyConsent\Model\DataConsentFinancialsDto
```

Get all organizational consented financial accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Consent id.

try {
    $result = $apiInstance->getConsentFinancialAccounts($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentFinancialAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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

## `getConsentedAccountById()`

```php
getConsentedAccountById($consent_id, $account_id): \MyDataMyConsent\Model\FinancialAccount
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
$consent_id = 'consent_id_example'; // string | Consent id.
$account_id = 'account_id_example'; // string | Account id.

try {
    $result = $apiInstance->getConsentedAccountById($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentedAccountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **account_id** | **string**| Account id. |

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

## `getConsentedDocumentById()`

```php
getConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\IndividualDataConsentDocument
```

Get individual consented document by document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Individual data consent id.
$document_id = 'document_id_example'; // string | Consented document id.

try {
    $result = $apiInstance->getConsentedDocumentById($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Individual data consent id. |
 **document_id** | **string**| Consented document id. |

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentDocument**](../Model/IndividualDataConsentDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsentedFinancialAccount()`

```php
getConsentedFinancialAccount($consent_id, $account_id): \MyDataMyConsent\Model\OrganizationFinancialAccountDto
```

Get organization consented financial account details based on account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Consent id.
$account_id = 'account_id_example'; // string | Account id.

try {
    $result = $apiInstance->getConsentedFinancialAccount($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentedFinancialAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **account_id** | **string**| Account id. |

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

## `getConsentedFinancialAccountInsights()`

```php
getConsentedFinancialAccountInsights($consent_id, $account_id)
```

Get consented financial account insights.

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
    $apiInstance->getConsentedFinancialAccountInsights($consent_id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentedFinancialAccountInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsentedFinancialAccountTransactions()`

```php
getConsentedFinancialAccountTransactions($consent_id, $account_id, $filters, $from_date_time_utc, $to_date_time_utc, $page_no, $page_size): \MyDataMyConsent\Model\UserAccountFinancialTransactionsDtoPaginatedList
```

Get individual consented financial account transactions of an individual based on accountId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Consent id.
$account_id = 'account_id_example'; // string | Account id.
$filters = 'filters_example'; // string | Filters.
$from_date_time_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time in utc timezone.
$to_date_time_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Til date time in utc timezone.
$page_no = 10; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getConsentedFinancialAccountTransactions($consent_id, $account_id, $filters, $from_date_time_utc, $to_date_time_utc, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentedFinancialAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **account_id** | **string**| Account id. |
 **filters** | **string**| Filters. | [optional]
 **from_date_time_utc** | **\DateTime**| From date time in utc timezone. | [optional]
 **to_date_time_utc** | **\DateTime**| Til date time in utc timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 10]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

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

## `getConsents()`

```php
getConsents($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\IndividualDataConsentDetailsPaginatedList
```

Get the paginated list of individual data consents.

GetIndividualDataConsents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus.
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From datetime in UTC timezone.
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To datetime in UTC timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getConsents($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus. | [optional]
 **from_date_time** | **\DateTime**| From datetime in UTC timezone. | [optional]
 **to_date_time** | **\DateTime**| To datetime in UTC timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentDetailsPaginatedList**](../Model/IndividualDataConsentDetailsPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndividualConsentedDocuments()`

```php
getIndividualConsentedDocuments($consent_id): \MyDataMyConsent\Model\IndividualDataConsentDocument[]
```

Get individual consented documents by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Individual data consent id.

try {
    $result = $apiInstance->getIndividualConsentedDocuments($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getIndividualConsentedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Individual data consent id. |

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentDocument[]**](../Model/IndividualDataConsentDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndividualDataConsentById()`

```php
getIndividualDataConsentById($consent_id): OneOfDataConsentIndividualDataConsentOrganizationDataConsent
```

Get individuals data consent details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Individual data consent id.

try {
    $result = $apiInstance->getIndividualDataConsentById($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getIndividualDataConsentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Individual data consent id. |

### Return type

[**OneOfDataConsentIndividualDataConsentOrganizationDataConsent**](../Model/OneOfDataConsentIndividualDataConsentOrganizationDataConsent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgConsentedAccountTransactions()`

```php
getOrgConsentedAccountTransactions($consent_id, $account_id, $filters, $from_date_time_utc, $to_date_time_utc, $page_no, $page_size): \MyDataMyConsent\Model\OrganizationFinancialTransactionsDtoPaginatedList
```

Get organization consented financial account transactions of an individual based on accountId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Consent id.
$account_id = 'account_id_example'; // string | Account id.
$filters = 'filters_example'; // string | Filters.
$from_date_time_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time in utc timezone.
$to_date_time_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Til date time in utc timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getOrgConsentedAccountTransactions($consent_id, $account_id, $filters, $from_date_time_utc, $to_date_time_utc, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrgConsentedAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **account_id** | **string**| Account id. |
 **filters** | **string**| Filters. | [optional]
 **from_date_time_utc** | **\DateTime**| From date time in utc timezone. | [optional]
 **to_date_time_utc** | **\DateTime**| Til date time in utc timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

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

## `getOrganizationConsentedDocumentById()`

```php
getOrganizationConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\OrganizationDataConsentDocument
```

Get organization consent document based on document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Organization data consent id.
$document_id = 'document_id_example'; // string | Organization consented document Id.

try {
    $result = $apiInstance->getOrganizationConsentedDocumentById($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrganizationConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Organization data consent id. |
 **document_id** | **string**| Organization consented document Id. |

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentDocument**](../Model/OrganizationDataConsentDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConsentedDocuments()`

```php
getOrganizationConsentedDocuments($consent_id): \MyDataMyConsent\Model\OrganizationDataConsentDocument[]
```

Get organization consented documents by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Organization data consent id.

try {
    $result = $apiInstance->getOrganizationConsentedDocuments($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrganizationConsentedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Organization data consent id. |

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentDocument[]**](../Model/OrganizationDataConsentDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDataConsentById()`

```php
getOrganizationDataConsentById($consent_id): OneOfDataConsentIndividualDataConsentOrganizationDataConsent
```

Get organizations data consent details by consent id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_id = 'consent_id_example'; // string | Organization data consent id.

try {
    $result = $apiInstance->getOrganizationDataConsentById($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrganizationDataConsentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Organization data consent id. |

### Return type

[**OneOfDataConsentIndividualDataConsentOrganizationDataConsent**](../Model/OneOfDataConsentIndividualDataConsentOrganizationDataConsent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDataConsents()`

```php
getOrganizationDataConsents($status, $from_date_time, $to_date_time, $page_no, $page_size): \MyDataMyConsent\Model\OrganizationDataConsentDetailsPaginatedList
```

Get the paginated list of organization data consents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus.
$from_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From datetime in UTC timezone.
$to_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To datetime in UTC timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getOrganizationDataConsents($status, $from_date_time, $to_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrganizationDataConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus. | [optional]
 **from_date_time** | **\DateTime**| From datetime in UTC timezone. | [optional]
 **to_date_time** | **\DateTime**| To datetime in UTC timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentDetailsPaginatedList**](../Model/OrganizationDataConsentDetailsPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
