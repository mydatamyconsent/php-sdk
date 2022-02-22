# MyDataMyConsent\DataConsentsApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadConsentedDocumentById()**](DataConsentsApi.md#downloadConsentedDocumentById) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download a individuals consented document.
[**downloadOrgConsentedDocumentById()**](DataConsentsApi.md#downloadOrgConsentedDocumentById) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download a organizations consented document.
[**getAllConsentedDocuments()**](DataConsentsApi.md#getAllConsentedDocuments) | **GET** /v1/consents/individuals/{consentId}/documents | Get the individual documents based on ConsentId.
[**getAllConsentedFinancialAccounts()**](DataConsentsApi.md#getAllConsentedFinancialAccounts) | **GET** /v1/consents/individuals/{consentId}/accounts | Get all individual consented financial accounts.
[**getAllOrganizationConsentedAccounts()**](DataConsentsApi.md#getAllOrganizationConsentedAccounts) | **GET** /v1/consents/organizations/{consentId}/accounts | Get all organizational consented financial accounts.
[**getAllOrganizationConsentedDocuments()**](DataConsentsApi.md#getAllOrganizationConsentedDocuments) | **GET** /v1/consents/organizations/{consentId}/documents | Get the organization documents based on ConsentId.
[**getConsentDetailsById()**](DataConsentsApi.md#getConsentDetailsById) | **GET** /v1/consents/individuals/{consentId} | Get all individuals consent details by consent id.
[**getConsentedAccountById()**](DataConsentsApi.md#getConsentedAccountById) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId} | Get individual consented financial account details based on account id.
[**getConsentedDocumentById()**](DataConsentsApi.md#getConsentedDocumentById) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individuals consent document based on document id.
[**getConsentedFinancialAccount()**](DataConsentsApi.md#getConsentedFinancialAccount) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId} | Get organization consented financial account details based on account id.
[**getConsentedFinancialAccountTransactions()**](DataConsentsApi.md#getConsentedFinancialAccountTransactions) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId}/transactions | Get individual consented financial account transactions of an individual based on accountId.
[**getConsents()**](DataConsentsApi.md#getConsents) | **GET** /v1/consents/individuals | Get the list of Consents Sent to Individuals.
[**getConsentsForOrganizations()**](DataConsentsApi.md#getConsentsForOrganizations) | **GET** /v1/consents/organizations | Get the list of data consents sent for organizations.
[**getOrgConsentedAccountTransactions()**](DataConsentsApi.md#getOrgConsentedAccountTransactions) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId}/transactions | Get organization consented financial account transactions of an individual based on accountId.
[**getOrganizationConsentDetailsById()**](DataConsentsApi.md#getOrganizationConsentDetailsById) | **GET** /v1/consents/organizations/{consentId} | Get all organization consent details by consent id.
[**getOrganizationConsentedDocumentById()**](DataConsentsApi.md#getOrganizationConsentedDocumentById) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organization consent document based on document id.


## `downloadConsentedDocumentById()`

```php
downloadConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\UserDocumentDownloadDto
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
$consent_id = 'consent_id_example'; // string | Consent id.
$document_id = 'document_id_example'; // string | Document id.

try {
    $result = $apiInstance->downloadConsentedDocumentById($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->downloadConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **document_id** | **string**| Document id. |

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

## `downloadOrgConsentedDocumentById()`

```php
downloadOrgConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\OrganizationDocumentDownloadDto
```

Download a organizations consented document.

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
$document_id = 'document_id_example'; // string | Document id.

try {
    $result = $apiInstance->downloadOrgConsentedDocumentById($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->downloadOrgConsentedDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |
 **document_id** | **string**| Document id. |

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

## `getAllConsentedDocuments()`

```php
getAllConsentedDocuments($consent_id): \MyDataMyConsent\Model\DataConsentDocumentsDto
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
$consent_id = 'consent_id_example'; // string | Consent id.

try {
    $result = $apiInstance->getAllConsentedDocuments($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getAllConsentedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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

## `getAllOrganizationConsentedAccounts()`

```php
getAllOrganizationConsentedAccounts($consent_id): \MyDataMyConsent\Model\DataConsentFinancialsDto
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
    $result = $apiInstance->getAllOrganizationConsentedAccounts($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getAllOrganizationConsentedAccounts: ', $e->getMessage(), PHP_EOL;
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

## `getAllOrganizationConsentedDocuments()`

```php
getAllOrganizationConsentedDocuments($consent_id): \MyDataMyConsent\Model\DataConsentDocumentsDto
```

Get the organization documents based on ConsentId.

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
    $result = $apiInstance->getAllOrganizationConsentedDocuments($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getAllOrganizationConsentedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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

## `getConsentDetailsById()`

```php
getConsentDetailsById($consent_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```

Get all individuals consent details by consent id.

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
    $result = $apiInstance->getConsentDetailsById($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentDetailsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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
getConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\UserDocumentDetailsDto
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
$consent_id = 'consent_id_example'; // string | Consent id.
$document_id = 'document_id_example'; // string | Document Id.

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
 **consent_id** | **string**| Consent id. |
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
getConsents($status, $from, $to, $page_no, $page_size): \MyDataMyConsent\Model\UserDataConsentInfoDtoPaginatedList
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
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time in utc timezone.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Til date time in utc timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getConsents($status, $from, $to, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus. | [optional]
 **from** | **\DateTime**| From date time in utc timezone. | [optional]
 **to** | **\DateTime**| Til date time in utc timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

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

## `getConsentsForOrganizations()`

```php
getConsentsForOrganizations($status, $from, $to, $page_no, $page_size): \MyDataMyConsent\Model\OrganizationDataConsentInfoDtoPaginatedList
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
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time in utc timezone.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Til date time in utc timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getConsentsForOrganizations($status, $from, $to, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getConsentsForOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus. | [optional]
 **from** | **\DateTime**| From date time in utc timezone. | [optional]
 **to** | **\DateTime**| Til date time in utc timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

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

## `getOrganizationConsentDetailsById()`

```php
getOrganizationConsentDetailsById($consent_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```

Get all organization consent details by consent id.

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
    $result = $apiInstance->getOrganizationConsentDetailsById($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->getOrganizationConsentDetailsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| Consent id. |

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

## `getOrganizationConsentedDocumentById()`

```php
getOrganizationConsentedDocumentById($consent_id, $document_id): \MyDataMyConsent\Model\OrganizationDocumentDetailsDto
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
$consent_id = 'consent_id_example'; // string | Consent id.
$document_id = 'document_id_example'; // string | Document Id.

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
 **consent_id** | **string**| Consent id. |
 **document_id** | **string**| Document Id. |

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
