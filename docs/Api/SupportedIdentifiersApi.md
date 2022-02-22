# MyDataMyConsent\SupportedIdentifiersApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllSupportedIdentifiers()**](SupportedIdentifiersApi.md#getAllSupportedIdentifiers) | **GET** /v1/supported-identifiers/{countryIso2Code} | Get all supported identifiers by country.


## `getAllSupportedIdentifiers()`

```php
getAllSupportedIdentifiers($country_iso2_code): \MyDataMyConsent\Model\SupportedIdentifiersByCountry
```

Get all supported identifiers by country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\SupportedIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_iso2_code = 'country_iso2_code_example'; // string | Country ISO 2 code.

try {
    $result = $apiInstance->getAllSupportedIdentifiers($country_iso2_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportedIdentifiersApi->getAllSupportedIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_iso2_code** | **string**| Country ISO 2 code. |

### Return type

[**\MyDataMyConsent\Model\SupportedIdentifiersByCountry**](../Model/SupportedIdentifiersByCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
