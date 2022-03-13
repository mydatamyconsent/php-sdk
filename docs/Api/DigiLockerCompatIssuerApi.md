# MyDataMyConsent\DigiLockerCompatIssuerApi

All URIs are relative to https://api.mydatamyconsent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**digilockerCompatIssueDocument()**](DigiLockerCompatIssuerApi.md#digilockerCompatIssueDocument) | **POST** /issuer/issuedoc/1/xml | Digilocker Compatible endpoint to issue document.


## `digilockerCompatIssueDocument()`

```php
digilockerCompatIssueDocument($push_uri_request): \MyDataMyConsent\Model\PushUriResponse
```

Digilocker Compatible endpoint to issue document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MyDataMyConsent\Api\DigiLockerCompatIssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_uri_request = new \MyDataMyConsent\Model\PushUriRequest(); // \MyDataMyConsent\Model\PushUriRequest | Push URI request payload

try {
    $result = $apiInstance->digilockerCompatIssueDocument($push_uri_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigiLockerCompatIssuerApi->digilockerCompatIssueDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_uri_request** | [**\MyDataMyConsent\Model\PushUriRequest**](../Model/PushUriRequest.md)| Push URI request payload |

### Return type

[**\MyDataMyConsent\Model\PushUriResponse**](../Model/PushUriResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
