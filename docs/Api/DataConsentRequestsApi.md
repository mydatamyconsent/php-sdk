# MyDataMyConsent\DataConsentRequestsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DataConsentRequestsConsentIdGet()**](DataConsentRequestsApi.md#v1DataConsentRequestsConsentIdGet) | **GET** /v1/data-consent-requests/{consentId} | 
[**v1DataConsentRequestsIdCancelDelete()**](DataConsentRequestsApi.md#v1DataConsentRequestsIdCancelDelete) | **DELETE** /v1/data-consent-requests/{id}/cancel | 
[**v1DataConsentRequestsPost()**](DataConsentRequestsApi.md#v1DataConsentRequestsPost) | **POST** /v1/data-consent-requests | 


## `v1DataConsentRequestsConsentIdGet()`

```php
v1DataConsentRequestsConsentIdGet($consent_id): \MyDataMyConsent\Model\DataConsentDetailsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1DataConsentRequestsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->v1DataConsentRequestsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | [**string**](../Model/.md)|  |

### Return type

[**\MyDataMyConsent\Model\DataConsentDetailsDto**](../Model/DataConsentDetailsDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataConsentRequestsIdCancelDelete()`

```php
v1DataConsentRequestsIdCancelDelete($id)
```



.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->v1DataConsentRequestsIdCancelDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->v1DataConsentRequestsIdCancelDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataConsentRequestsPost()`

```php
v1DataConsentRequestsPost($data_consent_request_model): \MyDataMyConsent\Model\DataConsent
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_consent_request_model = new \MyDataMyConsent\Model\DataConsentRequestModel(); // \MyDataMyConsent\Model\DataConsentRequestModel

try {
    $result = $apiInstance->v1DataConsentRequestsPost($data_consent_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->v1DataConsentRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_consent_request_model** | [**\MyDataMyConsent\Model\DataConsentRequestModel**](../Model/DataConsentRequestModel.md)|  | [optional]

### Return type

[**\MyDataMyConsent\Model\DataConsent**](../Model/DataConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
