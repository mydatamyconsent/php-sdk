# MyDataMyConsent\DataProviderDiscoveryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DataProvidersGet()**](DataProviderDiscoveryApi.md#v1DataProvidersGet) | **GET** /v1/data-providers | Discover All Data Providers in MDMC by country and filters.


## `v1DataProvidersGet()`

```php
v1DataProvidersGet($account_type, $document_type, $organization_category, $country): object
```

Discover All Data Providers in MDMC by country and filters.

.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataProviderDiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_type = 'account_type_example'; // string
$document_type = 'document_type_example'; // string
$organization_category = 'organization_category_example'; // string
$country = 'IN'; // string

try {
    $result = $apiInstance->v1DataProvidersGet($account_type, $document_type, $organization_category, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProviderDiscoveryApi->v1DataProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_type** | **string**|  | [optional]
 **document_type** | **string**|  | [optional]
 **organization_category** | **string**|  | [optional]
 **country** | **string**|  | [optional] [default to &#39;IN&#39;]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
