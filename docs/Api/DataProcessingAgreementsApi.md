# MyDataMyConsent\DataProcessingAgreementsApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDataProcessingAgreement()**](DataProcessingAgreementsApi.md#createDataProcessingAgreement) | **POST** /v1/data-agreements | Create a data processing agreement.
[**deleteDataProcessingAgreementById()**](DataProcessingAgreementsApi.md#deleteDataProcessingAgreementById) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement. This will not delete a published or a agreement in use with consents.
[**getDataProcessingAgreementById()**](DataProcessingAgreementsApi.md#getDataProcessingAgreementById) | **GET** /v1/data-agreements/{id} | Get data processing agreement by id.
[**getDataProcessingAgreements()**](DataProcessingAgreementsApi.md#getDataProcessingAgreements) | **GET** /v1/data-agreements | Get all data processing agreements.
[**terminateDataProcessingAgreementById()**](DataProcessingAgreementsApi.md#terminateDataProcessingAgreementById) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement.
[**updateDataProcessingAgreement()**](DataProcessingAgreementsApi.md#updateDataProcessingAgreement) | **PUT** /v1/data-agreements/{id} | Update a data processing agreement.


## `createDataProcessingAgreement()`

```php
createDataProcessingAgreement($create_data_processing_agreement_request_model): \MyDataMyConsent\Model\DataProcessingAgreementDto
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
$create_data_processing_agreement_request_model = new \MyDataMyConsent\Model\CreateDataProcessingAgreementRequestModel(); // \MyDataMyConsent\Model\CreateDataProcessingAgreementRequestModel | Create data processing agreement MyDataMyConsent.Models.DataProcessingAgreements.CreateDataProcessingAgreementRequestModel.

try {
    $result = $apiInstance->createDataProcessingAgreement($create_data_processing_agreement_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->createDataProcessingAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_data_processing_agreement_request_model** | [**\MyDataMyConsent\Model\CreateDataProcessingAgreementRequestModel**](../Model/CreateDataProcessingAgreementRequestModel.md)| Create data processing agreement MyDataMyConsent.Models.DataProcessingAgreements.CreateDataProcessingAgreementRequestModel. | [optional]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreementDto**](../Model/DataProcessingAgreementDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDataProcessingAgreementById()`

```php
deleteDataProcessingAgreementById($id)
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
$id = 'id_example'; // string | Agreement id.

try {
    $apiInstance->deleteDataProcessingAgreementById($id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->deleteDataProcessingAgreementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id. |

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

## `getDataProcessingAgreementById()`

```php
getDataProcessingAgreementById($id): \MyDataMyConsent\Model\DataProcessingAgreementDto
```

Get data processing agreement by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Agreement id.

try {
    $result = $apiInstance->getDataProcessingAgreementById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->getDataProcessingAgreementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id. |

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreementDto**](../Model/DataProcessingAgreementDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataProcessingAgreements()`

```php
getDataProcessingAgreements($page_no, $page_size): \MyDataMyConsent\Model\DataProcessingAgreementDtoPaginatedList
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
    $result = $apiInstance->getDataProcessingAgreements($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->getDataProcessingAgreements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreementDtoPaginatedList**](../Model/DataProcessingAgreementDtoPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateDataProcessingAgreementById()`

```php
terminateDataProcessingAgreementById($id)
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
$id = 'id_example'; // string | Agreement id.

try {
    $apiInstance->terminateDataProcessingAgreementById($id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->terminateDataProcessingAgreementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id. |

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

## `updateDataProcessingAgreement()`

```php
updateDataProcessingAgreement($id, $update_data_processing_agreement_request_model): \MyDataMyConsent\Model\DataProcessingAgreementDto
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
$id = 'id_example'; // string | Agreement id.
$update_data_processing_agreement_request_model = new \MyDataMyConsent\Model\UpdateDataProcessingAgreementRequestModel(); // \MyDataMyConsent\Model\UpdateDataProcessingAgreementRequestModel | Updated data processing agreement MyDataMyConsent.Models.DataProcessingAgreements.UpdateDataProcessingAgreementRequestModel.

try {
    $result = $apiInstance->updateDataProcessingAgreement($id, $update_data_processing_agreement_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->updateDataProcessingAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id. |
 **update_data_processing_agreement_request_model** | [**\MyDataMyConsent\Model\UpdateDataProcessingAgreementRequestModel**](../Model/UpdateDataProcessingAgreementRequestModel.md)| Updated data processing agreement MyDataMyConsent.Models.DataProcessingAgreements.UpdateDataProcessingAgreementRequestModel. | [optional]

### Return type

[**\MyDataMyConsent\Model\DataProcessingAgreementDto**](../Model/DataProcessingAgreementDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
