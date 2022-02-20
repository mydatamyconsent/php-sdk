# MyDataMyConsent\DataConsentRequestsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelIndividualDataConsentRequest()**](DataConsentRequestsApi.md#cancelIndividualDataConsentRequest) | **PUT** /v1/consent-requests/individual/{requestId}/cancel | Cancel the individual data consent request based on Id.
[**cancelOrganizationDataConsentRequest()**](DataConsentRequestsApi.md#cancelOrganizationDataConsentRequest) | **PUT** /v1/consent-requests/organization/{requestId}/cancel | Cancel the Organization data consent request based on Id.
[**createIndividualDataConsentRequest()**](DataConsentRequestsApi.md#createIndividualDataConsentRequest) | **POST** /v1/consent-requests/individual | Create a individual data consent request.
[**createOrganizationDataConsentRequest()**](DataConsentRequestsApi.md#createOrganizationDataConsentRequest) | **POST** /v1/consent-requests/organization | Create a organization data consent request.
[**getAllConsentRequestsToIndividuals()**](DataConsentRequestsApi.md#getAllConsentRequestsToIndividuals) | **GET** /v1/consent-requests/individuals | Get all Consent Requests sent to Individuals.
[**getAllConsentRequestsToOrganizations()**](DataConsentRequestsApi.md#getAllConsentRequestsToOrganizations) | **GET** /v1/consent-requests/organizations | Get All Consent Requests sent to Organizations.
[**getIndividualConsentRequestById()**](DataConsentRequestsApi.md#getIndividualConsentRequestById) | **GET** /v1/consent-requests/individuals/{requestId} | Get a Consent Request by ID.
[**getOrganizationConsentRequestById()**](DataConsentRequestsApi.md#getOrganizationConsentRequestById) | **GET** /v1/consent-requests/organizations/{requestId} | Get a OrganizationConsent Request by Id.


## `cancelIndividualDataConsentRequest()`

```php
cancelIndividualDataConsentRequest($request_id): \MyDataMyConsent\Model\IndividualDataConsentRequestResponse
```

Cancel the individual data consent request based on Id.

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
    $result = $apiInstance->cancelIndividualDataConsentRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Individual consent request id. |

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentRequestResponse**](../Model/IndividualDataConsentRequestResponse.md)

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
cancelOrganizationDataConsentRequest($request_id): \MyDataMyConsent\Model\OrganizationDataConsentRequestResponse
```

Cancel the Organization data consent request based on Id.

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
    $result = $apiInstance->cancelOrganizationDataConsentRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelOrganizationDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Organization consent request id. |

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentRequestResponse**](../Model/OrganizationDataConsentRequestResponse.md)

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
createIndividualDataConsentRequest($create_individual_data_consent_request): \MyDataMyConsent\Model\IndividualDataConsentRequestResponse
```

Create a individual data consent request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_individual_data_consent_request = new \MyDataMyConsent\Model\CreateIndividualDataConsentRequest(); // \MyDataMyConsent\Model\CreateIndividualDataConsentRequest | M:MyDataMyConsent.DeveloperApi.Controllers.DataConsentRequestsController.CreateIndividualDataConsentRequest(MyDataMyConsent.DeveloperApi.Models.CreateIndividualDataConsentRequest).

try {
    $result = $apiInstance->createIndividualDataConsentRequest($create_individual_data_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->createIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_individual_data_consent_request** | [**\MyDataMyConsent\Model\CreateIndividualDataConsentRequest**](../Model/CreateIndividualDataConsentRequest.md)| M:MyDataMyConsent.DeveloperApi.Controllers.DataConsentRequestsController.CreateIndividualDataConsentRequest(MyDataMyConsent.DeveloperApi.Models.CreateIndividualDataConsentRequest). |

### Return type

[**\MyDataMyConsent\Model\IndividualDataConsentRequestResponse**](../Model/IndividualDataConsentRequestResponse.md)

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
createOrganizationDataConsentRequest($create_organization_data_consent_request): \MyDataMyConsent\Model\OrganizationDataConsentRequestResponse
```

Create a organization data consent request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_organization_data_consent_request = new \MyDataMyConsent\Model\CreateOrganizationDataConsentRequest(); // \MyDataMyConsent\Model\CreateOrganizationDataConsentRequest | M:MyDataMyConsent.DeveloperApi.Controllers.DataConsentRequestsController.CreateOrganizationDataConsentRequest(MyDataMyConsent.DeveloperApi.Models.CreateOrganizationDataConsentRequest).

try {
    $result = $apiInstance->createOrganizationDataConsentRequest($create_organization_data_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->createOrganizationDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_organization_data_consent_request** | [**\MyDataMyConsent\Model\CreateOrganizationDataConsentRequest**](../Model/CreateOrganizationDataConsentRequest.md)| M:MyDataMyConsent.DeveloperApi.Controllers.DataConsentRequestsController.CreateOrganizationDataConsentRequest(MyDataMyConsent.DeveloperApi.Models.CreateOrganizationDataConsentRequest). |

### Return type

[**\MyDataMyConsent\Model\OrganizationDataConsentRequestResponse**](../Model/OrganizationDataConsentRequestResponse.md)

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
getAllConsentRequestsToIndividuals($status, $start_date_time, $end_date_time, $page_no, $page_size): \MyDataMyConsent\Model\UserDataConsentInfoDtoPaginatedList
```

Get all Consent Requests sent to Individuals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status.
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time.
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date time.
$page_no = 1; // int | Page no.
$page_size = 25; // int | Page size.

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
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status. | [optional]
 **start_date_time** | **\DateTime**| Start date time. | [optional]
 **end_date_time** | **\DateTime**| End date time. | [optional]
 **page_no** | **int**| Page no. | [optional] [default to 1]
 **page_size** | **int**| Page size. | [optional] [default to 25]

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

## `getAllConsentRequestsToOrganizations()`

```php
getAllConsentRequestsToOrganizations($status, $start_date_time, $end_date_time, $page_no, $page_size): \MyDataMyConsent\Model\OrganizationDataConsentInfoDtoPaginatedList
```

Get All Consent Requests sent to Organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus | Data consent status.
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time.
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date time.
$page_no = 1; // int | Page no.
$page_size = 25; // int | Page size.

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
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)| Data consent status. | [optional]
 **start_date_time** | **\DateTime**| Start date time. | [optional]
 **end_date_time** | **\DateTime**| End date time. | [optional]
 **page_no** | **int**| Page no. | [optional] [default to 1]
 **page_size** | **int**| Page size. | [optional] [default to 25]

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

## `getIndividualConsentRequestById()`

```php
getIndividualConsentRequestById($request_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```

Get a Consent Request by ID.

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
    $result = $apiInstance->getIndividualConsentRequestById($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getIndividualConsentRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Individual consent request id. |

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

## `getOrganizationConsentRequestById()`

```php
getOrganizationConsentRequestById($request_id): \MyDataMyConsent\Model\DataConsentDetailsDto
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

[**\MyDataMyConsent\Model\DataConsentDetailsDto**](../Model/DataConsentDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
