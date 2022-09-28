# MyDataMyConsent\SupportedIdentifiersApi

All URIs are relative to https://api.mydatamyconsent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1SupportedIdentifiersCountryIso2CodeGet()**](SupportedIdentifiersApi.md#v1SupportedIdentifiersCountryIso2CodeGet) | **GET** /v1/supported-identifiers/{country_iso2_code} | Get all supported identifiers by country. |


## `v1SupportedIdentifiersCountryIso2CodeGet()`

```php
v1SupportedIdentifiersCountryIso2CodeGet($country_iso2_code): \MyDataMyConsent\Model\SupportedIdentifier
```

Get all supported identifiers by country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\SupportedIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_iso2_code = 'country_iso2_code_example'; // string

try {
    $result = $apiInstance->v1SupportedIdentifiersCountryIso2CodeGet($country_iso2_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportedIdentifiersApi->v1SupportedIdentifiersCountryIso2CodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_iso2_code** | **string**|  | |

### Return type

[**\MyDataMyConsent\Model\SupportedIdentifier**](../Model/SupportedIdentifier.md)

### Authorization

[OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
