# MyDataMyConsent\DigiLockerIssuerApiApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**issuerIssuedoc1XmlPost()**](DigiLockerIssuerApiApi.md#issuerIssuedoc1XmlPost) | **POST** /issuer/issuedoc/1/xml | 


## `issuerIssuedoc1XmlPost()`

```php
issuerIssuedoc1XmlPost($push_uri_request): \MyDataMyConsent\Model\PushUriResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DigiLockerIssuerApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_uri_request = new \MyDataMyConsent\Model\PushUriRequest(); // \MyDataMyConsent\Model\PushUriRequest

try {
    $result = $apiInstance->issuerIssuedoc1XmlPost($push_uri_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigiLockerIssuerApiApi->issuerIssuedoc1XmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_uri_request** | [**\MyDataMyConsent\Model\PushUriRequest**](../Model/PushUriRequest.md)|  | [optional]

### Return type

[**\MyDataMyConsent\Model\PushUriResponse**](../Model/PushUriResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
