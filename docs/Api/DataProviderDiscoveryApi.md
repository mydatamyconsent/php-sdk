# MyDataMyConsent\DataProviderDiscoveryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DataProvidersGet()**](DataProviderDiscoveryApi.md#v1DataProvidersGet) | **GET** /v1/data-providers | Discover all data providers in My Data My Consent by country and filters.
[**v1DataProvidersProviderIdGet()**](DataProviderDiscoveryApi.md#v1DataProvidersProviderIdGet) | **GET** /v1/data-providers/{providerId} | Get a Data Provider details.


## `v1DataProvidersGet()`

```php
v1DataProvidersGet($account_type, $document_type, $organization_category, $page_no, $page_size, $country): \MyDataMyConsent\Model\DataProviderPaginatedList
```

Discover all data providers in My Data My Consent by country and filters.

.

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
$page_no = 56; // int | Page number.
$page_size = 56; // int | Page size.
$country = 'IN'; // string | ISO2 Country code.

try {
    $result = $apiInstance->v1DataProvidersGet($account_type, $document_type, $organization_category, $page_no, $page_size, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProviderDiscoveryApi->v1DataProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_type** | **string**| Account type. | [optional]
 **document_type** | **string**| Document type. | [optional]
 **organization_category** | **string**| Organization category. | [optional]
 **page_no** | **int**| Page number. | [optional]
 **page_size** | **int**| Page size. | [optional]
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

## `v1DataProvidersProviderIdGet()`

```php
v1DataProvidersProviderIdGet($provider_id): \MyDataMyConsent\Model\DataProvider
```

Get a Data Provider details.

.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DataProviderDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider_id = 'provider_id_example'; // string | Provider Id.

try {
    $result = $apiInstance->v1DataProvidersProviderIdGet($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProviderDiscoveryApi->v1DataProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**| Provider Id. |

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
