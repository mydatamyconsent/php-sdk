# MyDataMyConsent\DataConsentRequestsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelConsentRequest()**](DataConsentRequestsApi.md#cancelConsentRequest) | **DELETE** /v1/consent-requests/{requestId}/cancel | Revoke / Cancel the ConsentRequest based on Id
[**createRequest()**](DataConsentRequestsApi.md#createRequest) | **POST** /v1/consent-requests | Create a consent request.
[**getAllConsentRequests()**](DataConsentRequestsApi.md#getAllConsentRequests) | **GET** /v1/consent-requests | Get all Consent Requests.
[**getConsentRequestById()**](DataConsentRequestsApi.md#getConsentRequestById) | **GET** /v1/consent-requests/{requestId} | Get a Consent Request by ID.


## `cancelConsentRequest()`

```php
cancelConsentRequest($request_id): bool
```

Revoke / Cancel the ConsentRequest based on Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->cancelConsentRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelConsentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | [**string**](../Model/.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRequest()`

```php
createRequest($data_consent_request_model): bool
```

Create a consent request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_consent_request_model = new \MyDataMyConsent\Model\DataConsentRequestModel(); // \MyDataMyConsent\Model\DataConsentRequestModel | MyDataMyConsent.Models.Consents.DataConsentRequestModel.

try {
    $result = $apiInstance->createRequest($data_consent_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->createRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_consent_request_model** | [**\MyDataMyConsent\Model\DataConsentRequestModel**](../Model/DataConsentRequestModel.md)| MyDataMyConsent.Models.Consents.DataConsentRequestModel. | [optional]

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

## `getAllConsentRequests()`

```php
getAllConsentRequests($page_no, $page_size, $status): object
```

Get all Consent Requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int
$page_size = 56; // int
$status = new \MyDataMyConsent\Model\\MyDataMyConsent\Model\DataConsentStatus(); // \MyDataMyConsent\Model\DataConsentStatus

try {
    $result = $apiInstance->getAllConsentRequests($page_no, $page_size, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getAllConsentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **status** | [**\MyDataMyConsent\Model\DataConsentStatus**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsentRequestById()`

```php
getConsentRequestById($request_id): \MyDataMyConsent\Model\DataConsentDetailsDto
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
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->getConsentRequestById($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->getConsentRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | [**string**](../Model/.md)|  |

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
