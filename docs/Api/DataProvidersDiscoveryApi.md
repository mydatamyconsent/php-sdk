# MyDataMyConsent\DataProvidersDiscoveryApi

All URIs are relative to https://api.mydatamyconsent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1DataProvidersGet()**](DataProvidersDiscoveryApi.md#v1DataProvidersGet) | **GET** /v1/data-providers | Discover all data providers in my data my consent by country and filters. |
| [**v1DataProvidersIdGet()**](DataProvidersDiscoveryApi.md#v1DataProvidersIdGet) | **GET** /v1/data-providers/{id} | Get a data provider details by provider id. |


## `v1DataProvidersGet()`

```php
v1DataProvidersGet($country_iso2_code, $page_no, $page_size): \MyDataMyConsent\Model\PaginatedListOfDataProviders
```

Discover all data providers in my data my consent by country and filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataProvidersDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_iso2_code = 'country_iso2_code_example'; // string
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1DataProvidersGet($country_iso2_code, $page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProvidersDiscoveryApi->v1DataProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_iso2_code** | **string**|  | |
| **page_no** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\MyDataMyConsent\Model\PaginatedListOfDataProviders**](../Model/PaginatedListOfDataProviders.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DataProvidersIdGet()`

```php
v1DataProvidersIdGet($id): \MyDataMyConsent\Model\DataProviderDetails
```

Get a data provider details by provider id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataProvidersDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->v1DataProvidersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProvidersDiscoveryApi->v1DataProvidersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\DataProviderDetails**](../Model/DataProviderDetails.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
