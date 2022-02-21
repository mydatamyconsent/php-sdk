# MyDataMyConsent\DataProviderDiscoveryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDataProviderById()**](DataProviderDiscoveryApi.md#getDataProviderById) | **GET** /v1/data-providers/{providerId} | Get a Data Provider details based on provider id.
[**getDataProviders()**](DataProviderDiscoveryApi.md#getDataProviders) | **GET** /v1/data-providers | Discover all data providers in My Data My Consent by country and filters.


## `getDataProviderById()`

```php
getDataProviderById($provider_id): \MyDataMyConsent\Model\DataProvider
```

Get a Data Provider details based on provider id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProviderDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider_id = 'provider_id_example'; // string | Provider id.

try {
    $result = $apiInstance->getDataProviderById($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProviderDiscoveryApi->getDataProviderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**| Provider id. |

### Return type

[**\MyDataMyConsent\Model\DataProvider**](../Model/DataProvider.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataProviders()`

```php
getDataProviders($account_type, $document_type, $organization_category, $page_no, $page_size, $country): \MyDataMyConsent\Model\DataProviderPaginatedList
```

Discover all data providers in My Data My Consent by country and filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProviderDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_type = 'account_type_example'; // string | Account type.
$document_type = 'document_type_example'; // string | Document type.
$organization_category = 'organization_category_example'; // string | Organization category.
$page_no = 1; // int | Page number.
$page_size = 25; // int | Number of items to return.
$country = 'IN'; // string | ISO2 Country code.

try {
    $result = $apiInstance->getDataProviders($account_type, $document_type, $organization_category, $page_no, $page_size, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProviderDiscoveryApi->getDataProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_type** | **string**| Account type. | [optional]
 **document_type** | **string**| Document type. | [optional]
 **organization_category** | **string**| Organization category. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return. | [optional] [default to 25]
 **country** | **string**| ISO2 Country code. | [optional] [default to &#39;IN&#39;]

### Return type

[**\MyDataMyConsent\Model\DataProviderPaginatedList**](../Model/DataProviderPaginatedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
