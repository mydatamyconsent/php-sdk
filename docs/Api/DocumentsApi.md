# MyDataMyConsent\DocumentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1DocumentsPushdocumentPost()**](DocumentsApi.md#v1DocumentsPushdocumentPost) | **POST** /v1/documents/pushdocument | 


## `v1DocumentsPushdocumentPost()`

```php
v1DocumentsPushdocumentPost($generic_push_document_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generic_push_document_request = new \MyDataMyConsent\Model\GenericPushDocumentRequest(); // \MyDataMyConsent\Model\GenericPushDocumentRequest

try {
    $apiInstance->v1DocumentsPushdocumentPost($generic_push_document_request);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1DocumentsPushdocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generic_push_document_request** | [**\MyDataMyConsent\Model\GenericPushDocumentRequest**](../Model/GenericPushDocumentRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
