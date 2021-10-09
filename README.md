# com.mydatamyconsent

Unleashing the power of data consent

For more information, please visit [https://mydatamyconsent.com/support/developers](https://mydatamyconsent.com/support/developers).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mydatamyconsent/php-sdk.git"
    }
  ],
  "require": {
    "mydatamyconsent/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/com.mydatamyconsent/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: Bearer
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string

try {
    $result = $apiInstance->v1DataConsentRequestsConsentIdGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->v1DataConsentRequestsConsentIdGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataConsentRequestsApi* | [**v1DataConsentRequestsConsentIdGet**](docs/Api/DataConsentRequestsApi.md#v1dataconsentrequestsconsentidget) | **GET** /v1/data-consent-requests/{consentId} | 
*DataConsentRequestsApi* | [**v1DataConsentRequestsIdCancelDelete**](docs/Api/DataConsentRequestsApi.md#v1dataconsentrequestsidcanceldelete) | **DELETE** /v1/data-consent-requests/{id}/cancel | 
*DataConsentRequestsApi* | [**v1DataConsentRequestsPost**](docs/Api/DataConsentRequestsApi.md#v1dataconsentrequestspost) | **POST** /v1/data-consent-requests | 
*DataProcessingAgreementsApi* | [**v1DataAgreementsGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsget) | **GET** /v1/data-agreements | Get All DataProcessingAgreements.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdDelete**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsiddelete) | **DELETE** /v1/data-agreements/{id} | 
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidget) | **GET** /v1/data-agreements/{id} | 
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdPut**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidput) | **PUT** /v1/data-agreements/{id} | 
*DataProcessingAgreementsApi* | [**v1DataAgreementsPost**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementspost) | **POST** /v1/data-agreements | 
*DataProviderDiscoveryApi* | [**v1DataProvidersGet**](docs/Api/DataProviderDiscoveryApi.md#v1dataprovidersget) | **GET** /v1/data-providers | Discover All Data Providers in MDMC by country and filters.
*DigiLockerIssuerApiApi* | [**issuerIssuedoc1XmlPost**](docs/Api/DigiLockerIssuerApiApi.md#issuerissuedoc1xmlpost) | **POST** /issuer/issuedoc/1/xml | 
*DocumentsApi* | [**v1DocumentsPushdocumentPost**](docs/Api/DocumentsApi.md#v1documentspushdocumentpost) | **POST** /v1/documents/pushdocument | 

## Models

- [ApplicationUser](docs/Model/ApplicationUser.md)
- [Country](docs/Model/Country.md)
- [CountryState](docs/Model/CountryState.md)
- [DataConsent](docs/Model/DataConsent.md)
- [DataConsentDetailsDto](docs/Model/DataConsentDetailsDto.md)
- [DataConsentIdentifier](docs/Model/DataConsentIdentifier.md)
- [DataConsentIdentityClaim](docs/Model/DataConsentIdentityClaim.md)
- [DataConsentRequestModel](docs/Model/DataConsentRequestModel.md)
- [DataConsentRequestedDocument](docs/Model/DataConsentRequestedDocument.md)
- [DataConsentRequestedDocumentDto](docs/Model/DataConsentRequestedDocumentDto.md)
- [DataConsentRequestedFa](docs/Model/DataConsentRequestedFa.md)
- [DataConsentRequestedFaDto](docs/Model/DataConsentRequestedFaDto.md)
- [DataConsentRfaFilter](docs/Model/DataConsentRfaFilter.md)
- [DataConsentRfaFilterDto](docs/Model/DataConsentRfaFilterDto.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataFetchFrequencyUnit](docs/Model/DataFetchFrequencyUnit.md)
- [DataFetchType](docs/Model/DataFetchType.md)
- [DataLifeUnit](docs/Model/DataLifeUnit.md)
- [DataProcessingAgreement](docs/Model/DataProcessingAgreement.md)
- [DataProcessingAgreementPaginatedList](docs/Model/DataProcessingAgreementPaginatedList.md)
- [FilterType](docs/Model/FilterType.md)
- [FinancialAccountType](docs/Model/FinancialAccountType.md)
- [Gender](docs/Model/Gender.md)
- [GenericPushDocumentRequest](docs/Model/GenericPushDocumentRequest.md)
- [IdentityClaim](docs/Model/IdentityClaim.md)
- [Operator](docs/Model/Operator.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationAddress](docs/Model/OrganizationAddress.md)
- [OrganizationAddressType](docs/Model/OrganizationAddressType.md)
- [OrganizationCategory](docs/Model/OrganizationCategory.md)
- [OrganizationFinancialAccount](docs/Model/OrganizationFinancialAccount.md)
- [OrganizationType](docs/Model/OrganizationType.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [RefreshToken](docs/Model/RefreshToken.md)
- [Theme](docs/Model/Theme.md)
- [UriDetails](docs/Model/UriDetails.md)

## Authorization

### Bearer

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@mydatamyconsent.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
