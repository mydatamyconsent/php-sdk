# MyDataMyConsent\DataConsentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ConsentsConsentIdAccountsAccountIdGet()**](DataConsentsApi.md#v1ConsentsConsentIdAccountsAccountIdGet) | **GET** /v1/consents/{consentId}/accounts/{accountId} | Get consented financial account details.
[**v1ConsentsConsentIdAccountsAccountIdInsightsGet()**](DataConsentsApi.md#v1ConsentsConsentIdAccountsAccountIdInsightsGet) | **GET** /v1/consents/{consentId}/accounts/{accountId}/insights | Get consented financial account insights.
[**v1ConsentsConsentIdAccountsAccountIdTransactionsGet()**](DataConsentsApi.md#v1ConsentsConsentIdAccountsAccountIdTransactionsGet) | **GET** /v1/consents/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions.
[**v1ConsentsConsentIdAccountsGet()**](DataConsentsApi.md#v1ConsentsConsentIdAccountsGet) | **GET** /v1/consents/{consentId}/accounts | Get all accounts in a consent.
[**v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet()**](DataConsentsApi.md#v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet) | **GET** /v1/consents/{consentId}/documents/{documentId}/analysis | Get analysis of a consented document.
[**v1ConsentsConsentIdDocumentsDocumentIdDownloadGet()**](DataConsentsApi.md#v1ConsentsConsentIdDocumentsDocumentIdDownloadGet) | **GET** /v1/consents/{consentId}/documents/{documentId}/download | Download a consented document.
[**v1ConsentsConsentIdDocumentsDocumentIdGet()**](DataConsentsApi.md#v1ConsentsConsentIdDocumentsDocumentIdGet) | **GET** /v1/consents/{consentId}/documents/{documentId} | Get consented document details.
[**v1ConsentsConsentIdDocumentsGet()**](DataConsentsApi.md#v1ConsentsConsentIdDocumentsGet) | **GET** /v1/consents/{consentId}/documents | Get all documents in a consent.
[**v1ConsentsConsentIdGet()**](DataConsentsApi.md#v1ConsentsConsentIdGet) | **GET** /v1/consents/{consentId} | Get consent details by consent id.
[**v1ConsentsGet()**](DataConsentsApi.md#v1ConsentsGet) | **GET** /v1/consents | Get all consents filtered by status and time.


## `v1ConsentsConsentIdAccountsAccountIdGet()`

```php
v1ConsentsConsentIdAccountsAccountIdGet($consent_id, $account_id): object
```

Get consented financial account details.

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
    $result = $apiInstance->v1ConsentsConsentIdAccountsAccountIdGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdAccountsAccountIdInsightsGet()`

```php
v1ConsentsConsentIdAccountsAccountIdInsightsGet($consent_id, $account_id): object
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
    $result = $apiInstance->v1ConsentsConsentIdAccountsAccountIdInsightsGet($consent_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdAccountsAccountIdInsightsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdAccountsAccountIdTransactionsGet()`

```php
v1ConsentsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date, $to_date): object
```

Get consented financial account transactions.

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
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1ConsentsConsentIdAccountsAccountIdTransactionsGet($consent_id, $account_id, $filters, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **account_id** | **string**|  |
 **filters** | **string**|  | [optional]
 **from_date** | **\DateTime**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdAccountsGet()`

```php
v1ConsentsConsentIdAccountsGet($consent_id): object
```

Get all accounts in a consent.

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
    $result = $apiInstance->v1ConsentsConsentIdAccountsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet()`

```php
v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet($consent_id, $document_id): object
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
$consent_id = 'consent_id_example'; // string
$document_id = 'document_id_example'; // string | Document Id.

try {
    $result = $apiInstance->v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**| Document Id. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdDocumentsDocumentIdDownloadGet()`

```php
v1ConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id): object
```

Download a consented document.

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
    $result = $apiInstance->v1ConsentsConsentIdDocumentsDocumentIdDownloadGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdDocumentsDocumentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**| Document Id. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdDocumentsDocumentIdGet()`

```php
v1ConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id): object
```

Get consented document details.

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
    $result = $apiInstance->v1ConsentsConsentIdDocumentsDocumentIdGet($consent_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |
 **document_id** | **string**| Document Id. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdDocumentsGet()`

```php
v1ConsentsConsentIdDocumentsGet($consent_id): object
```

Get all documents in a consent.

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
    $result = $apiInstance->v1ConsentsConsentIdDocumentsGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsConsentIdGet()`

```php
v1ConsentsConsentIdGet($consent_id): object
```

Get consent details by consent id.

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
    $result = $apiInstance->v1ConsentsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ConsentsGet()`

```php
v1ConsentsGet($status, $start_date, $end_date): object
```

Get all consents filtered by status and time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | System.DateTime.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | till dateSystem.DateTime.

try {
    $result = $apiInstance->v1ConsentsGet($status, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentsApi->v1ConsentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| MyDataMyConsent.Domain.Entities.ConsentAggregate.Enums.DataConsentStatus. | [optional]
 **start_date** | **\DateTime**| System.DateTime. | [optional]
 **end_date** | **\DateTime**| till dateSystem.DateTime. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
