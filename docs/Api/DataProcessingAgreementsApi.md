# MyDataMyConsent\DataProcessingAgreementsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DataAgreementsGet()**](DataProcessingAgreementsApi.md#v1DataAgreementsGet) | **GET** /v1/data-agreements | Get all data processing agreements.
[**v1DataAgreementsIdDelete()**](DataProcessingAgreementsApi.md#v1DataAgreementsIdDelete) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement. This will not delete a published or a agreement in use with consents.
[**v1DataAgreementsIdGet()**](DataProcessingAgreementsApi.md#v1DataAgreementsIdGet) | **GET** /v1/data-agreements/{id} | Get data processing agreement by Id.
[**v1DataAgreementsIdPut()**](DataProcessingAgreementsApi.md#v1DataAgreementsIdPut) | **PUT** /v1/data-agreements/{id} | Update a data processing agreement.
[**v1DataAgreementsIdTerminatePut()**](DataProcessingAgreementsApi.md#v1DataAgreementsIdTerminatePut) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement.
[**v1DataAgreementsPost()**](DataProcessingAgreementsApi.md#v1DataAgreementsPost) | **POST** /v1/data-agreements | Create a data processing agreement.


## `v1DataAgreementsGet()`

```php
v1DataAgreementsGet($page_no, $page_size): \MyDataMyConsent\Model\DataProcessingAgreementPaginatedList
```

Get all data processing agreements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.

try {
    $result = $apiInstance->v1DataAgreementsGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreementPaginatedList**](../Model/DataProcessingAgreementPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataAgreementsIdDelete()`

```php
v1DataAgreementsIdDelete($id)
```

Delete a data processing agreement. This will not delete a published or a agreement in use with consents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->v1DataAgreementsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataAgreementsIdGet()`

```php
v1DataAgreementsIdGet($id): \MyDataMyConsent\Model\DataProcessingAgreement
```

Get data processing agreement by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->v1DataAgreementsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreement**](../Model/DataProcessingAgreement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataAgreementsIdPut()`

```php
v1DataAgreementsIdPut($id, $data_processing_agreement): \MyDataMyConsent\Model\DataProcessingAgreement
```

Update a data processing agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$data_processing_agreement = new \MyDataMyConsent\Model\DataProcessingAgreement(); // \MyDataMyConsent\Model\DataProcessingAgreement

try {
    $result = $apiInstance->v1DataAgreementsIdPut($id, $data_processing_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **data_processing_agreement** | [**\MyDataMyConsent\Model\DataProcessingAgreement**](../Model/DataProcessingAgreement.md)|  | [optional]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreement**](../Model/DataProcessingAgreement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataAgreementsIdTerminatePut()`

```php
v1DataAgreementsIdTerminatePut($id)
```

Terminate a data processing agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->v1DataAgreementsIdTerminatePut($id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsIdTerminatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataAgreementsPost()`

```php
v1DataAgreementsPost($data_processing_agreement): \MyDataMyConsent\Model\DataProcessingAgreement
```

Create a data processing agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_processing_agreement = new \MyDataMyConsent\Model\DataProcessingAgreement(); // \MyDataMyConsent\Model\DataProcessingAgreement

try {
    $result = $apiInstance->v1DataAgreementsPost($data_processing_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_processing_agreement** | [**\MyDataMyConsent\Model\DataProcessingAgreement**](../Model/DataProcessingAgreement.md)|  | [optional]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreement**](../Model/DataProcessingAgreement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
