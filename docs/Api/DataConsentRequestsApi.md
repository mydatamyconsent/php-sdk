# MyDataMyConsent\DataConsentRequestsApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelIndividualDataConsentRequest()**](DataConsentRequestsApi.md#cancelIndividualDataConsentRequest) | **PUT** /v1/consent-requests/individual/{requestId}/cancel | Cancel the individual data consent request by Id.
[**cancelOrganizationDataConsentRequest()**](DataConsentRequestsApi.md#cancelOrganizationDataConsentRequest) | **PUT** /v1/consent-requests/organization/{requestId}/cancel | Cancel the organization data consent request by Id.
[**createIndividualDataConsentRequest()**](DataConsentRequestsApi.md#createIndividualDataConsentRequest) | **POST** /v1/consent-requests/individual | Create data consent request for an individual.
[**createOrganizationDataConsentRequest()**](DataConsentRequestsApi.md#createOrganizationDataConsentRequest) | **POST** /v1/consent-requests/organization | Create data consent request for an organization.
[**getAllConsentRequestsToIndividuals()**](DataConsentRequestsApi.md#getAllConsentRequestsToIndividuals) | **GET** /v1/consent-requests/individuals | Get all Consent Requests sent to individuals.
[**getAllConsentRequestsToOrganizations()**](DataConsentRequestsApi.md#getAllConsentRequestsToOrganizations) | **GET** /v1/consent-requests/organizations | Get all Consent Requests sent to organizations.
[**getIndividualConsentRequestById()**](DataConsentRequestsApi.md#getIndividualConsentRequestById) | **GET** /v1/consent-requests/individuals/{requestId} | Get individual data consent request by id.
[**getOrganizationConsentRequestById()**](DataConsentRequestsApi.md#getOrganizationConsentRequestById) | **GET** /v1/consent-requests/organizations/{requestId} | Get a OrganizationConsent Request by Id.


## `cancelIndividualDataConsentRequest()`

```php
cancelIndividualDataConsentRequest($request_id)
```

Cancel the individual data consent request by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | Individual consent request id.

try {
    $apiInstance->cancelIndividualDataConsentRequest($request_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Individual consent request id. |

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

## `cancelOrganizationDataConsentRequest()`

```php
cancelOrganizationDataConsentRequest($request_id)
```

Cancel the organization data consent request by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | Organization consent request id.

try {
    $apiInstance->cancelOrganizationDataConsentRequest($request_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelOrganizationDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Organization consent request id. |

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

## `createIndividualDataConsentRequest()`

```php
createIndividualDataConsentRequest($create_data_consent_request): \MyDataMyConsent\Model\IndividualDataConsentRequestDetails
```

Create data consent request for an individual.

Create data consent request for an individual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_data_consent_request = new \MyDataMyConsent\Model\CreateDataConsentRequest(); // \MyDataMyConsent\Model\CreateDataConsentRequest | The Individual data consent request payload

try {
    $result = $apiInstance->createIndividualDataConsentRequest($create_data_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->createIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_data_consent_request** | [**\MyDataMyConsent\Model\CreateDataConsentRequest**](../Model/CreateDataConsentRequest.md)| The Individual data consent request payload |

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentRequestDetails**](../Model/IndividualDataConsentRequestDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationDataConsentRequest()`

```php
createOrganizationDataConsentRequest($create_data_consent_request): \MyDataMyConsent\Model\OrganizationDataConsentRequestDetails
```

Create data consent request for an organization.

Create data consent request for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_data_consent_request = new \MyDataMyConsent\Model\CreateDataConsentRequest(); // \MyDataMyConsent\Model\CreateDataConsentRequest | The Organization data consent request payload

try {
    $result = $apiInstance->createOrganizationDataConsentRequest($create_data_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->createOrganizationDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_data_consent_request** | [**\MyDataMyConsent\Model\CreateDataConsentRequest**](../Model/CreateDataConsentRequest.md)| The Organization data consent request payload |

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentRequestDetails**](../Model/OrganizationDataConsentRequestDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllConsentRequestsToIndividuals()`

```php
getAllConsentRequestsToIndividuals($status, $start_date_time, $end_date_time, $page_no, $page_size): \MyDataMyConsent\Model\IndividualDataConsentRequestDetailsPaginatedList
```

Get all Consent Requests sent to individuals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\DataConsentStatus(); // DataConsentStatus | Data consent status.
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start datetime in UTC timezone.
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End datetime in UTC timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getAllConsentRequestsToIndividuals($status, $start_date_time, $end_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getAllConsentRequestsToIndividuals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**DataConsentStatus**](../Model/.md)| Data consent status. | [optional]
 **start_date_time** | **\DateTime**| Start datetime in UTC timezone. | [optional]
 **end_date_time** | **\DateTime**| End datetime in UTC timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentRequestDetailsPaginatedList**](../Model/IndividualDataConsentRequestDetailsPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllConsentRequestsToOrganizations()`

```php
getAllConsentRequestsToOrganizations($status, $start_date_time, $end_date_time, $page_no, $page_size): \MyDataMyConsent\Model\OrganizationDataConsentRequestDetailsPaginatedList
```

Get all Consent Requests sent to organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\DataConsentStatus(); // DataConsentStatus | Data consent status.
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start datetime in UTC timezone.
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End datetime in UTC timezone.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->getAllConsentRequestsToOrganizations($status, $start_date_time, $end_date_time, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getAllConsentRequestsToOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**DataConsentStatus**](../Model/.md)| Data consent status. | [optional]
 **start_date_time** | **\DateTime**| Start datetime in UTC timezone. | [optional]
 **end_date_time** | **\DateTime**| End datetime in UTC timezone. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentRequestDetailsPaginatedList**](../Model/OrganizationDataConsentRequestDetailsPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndividualConsentRequestById()`

```php
getIndividualConsentRequestById($request_id): \MyDataMyConsent\Model\DataConsentRequest
```

Get individual data consent request by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | Individual data consent request id.

try {
    $result = $apiInstance->getIndividualConsentRequestById($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getIndividualConsentRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Individual data consent request id. |

### Return type

[**\MyDataMyConsent\Model\DataConsentRequest**](../Model/DataConsentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConsentRequestById()`

```php
getOrganizationConsentRequestById($request_id): \MyDataMyConsent\Model\DataConsentRequest
```

Get a OrganizationConsent Request by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | Organization consent request id.

try {
    $result = $apiInstance->getOrganizationConsentRequestById($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getOrganizationConsentRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Organization consent request id. |

### Return type

[**\MyDataMyConsent\Model\DataConsentRequest**](../Model/DataConsentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
