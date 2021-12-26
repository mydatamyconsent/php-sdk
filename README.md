# mydatamyconsent

Unleashing the power of data consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.

For more information, please visit [https://mydatamyconsent.com/en-us/developers](https://mydatamyconsent.com/en-us/developers).

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
require_once('/path/to/mydatamyconsent/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new MyDataMyConsent\Api\DataConsentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | consent request id.

try {
    $apiInstance->cancelConsentRequest($request_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelConsentRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataConsentRequestsApi* | [**cancelConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelconsentrequest) | **DELETE** /v1/consent-requests/{requestId}/cancel | Cancel a Consent Request by ID.
*DataConsentRequestsApi* | [**createRequest**](docs/Api/DataConsentRequestsApi.md#createrequest) | **POST** /v1/consent-requests | Create a consent request.
*DataConsentRequestsApi* | [**getAllConsentRequests**](docs/Api/DataConsentRequestsApi.md#getallconsentrequests) | **GET** /v1/consent-requests | Get all Consent Requests.
*DataConsentRequestsApi* | [**getConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getconsentrequestbyid) | **GET** /v1/consent-requests/{requestId} | Get a Consent Request by ID.
*DataConsentsApi* | [**v1ConsentsConsentIdAccountsAccountIdGet**](docs/Api/DataConsentsApi.md#v1consentsconsentidaccountsaccountidget) | **GET** /v1/consents/{consentId}/accounts/{accountId} | Get consented financial account details.
*DataConsentsApi* | [**v1ConsentsConsentIdAccountsAccountIdInsightsGet**](docs/Api/DataConsentsApi.md#v1consentsconsentidaccountsaccountidinsightsget) | **GET** /v1/consents/{consentId}/accounts/{accountId}/insights | Get consented financial account insights.
*DataConsentsApi* | [**v1ConsentsConsentIdAccountsAccountIdTransactionsGet**](docs/Api/DataConsentsApi.md#v1consentsconsentidaccountsaccountidtransactionsget) | **GET** /v1/consents/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions.
*DataConsentsApi* | [**v1ConsentsConsentIdAccountsGet**](docs/Api/DataConsentsApi.md#v1consentsconsentidaccountsget) | **GET** /v1/consents/{consentId}/accounts | Get all accounts in a consent.
*DataConsentsApi* | [**v1ConsentsConsentIdDocumentsDocumentIdAnalysisGet**](docs/Api/DataConsentsApi.md#v1consentsconsentiddocumentsdocumentidanalysisget) | **GET** /v1/consents/{consentId}/documents/{documentId}/analysis | Get analysis of a consented document.
*DataConsentsApi* | [**v1ConsentsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/DataConsentsApi.md#v1consentsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/consents/{consentId}/documents/{documentId}/download | Download a consented document.
*DataConsentsApi* | [**v1ConsentsConsentIdDocumentsDocumentIdGet**](docs/Api/DataConsentsApi.md#v1consentsconsentiddocumentsdocumentidget) | **GET** /v1/consents/{consentId}/documents/{documentId} | Get consented document details.
*DataConsentsApi* | [**v1ConsentsConsentIdDocumentsGet**](docs/Api/DataConsentsApi.md#v1consentsconsentiddocumentsget) | **GET** /v1/consents/{consentId}/documents | Get all documents in a consent.
*DataConsentsApi* | [**v1ConsentsConsentIdGet**](docs/Api/DataConsentsApi.md#v1consentsconsentidget) | **GET** /v1/consents/{consentId} | Get consent details by consent id.
*DataConsentsApi* | [**v1ConsentsGet**](docs/Api/DataConsentsApi.md#v1consentsget) | **GET** /v1/consents | Get all consents filtered by status and time.
*DataProcessingAgreementsApi* | [**v1DataAgreementsGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsget) | **GET** /v1/data-agreements | Get all data processing agreements.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdDelete**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsiddelete) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement. This will not delete a published or a agreement in use with consents.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidget) | **GET** /v1/data-agreements/{id} | Get data processing agreement by Id.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdPut**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidput) | **PUT** /v1/data-agreements/{id} | Update a data processing agreement.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdTerminatePut**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidterminateput) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement.
*DataProcessingAgreementsApi* | [**v1DataAgreementsPost**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementspost) | **POST** /v1/data-agreements | Create a data processing agreement.
*DataProviderDiscoveryApi* | [**v1DataProvidersGet**](docs/Api/DataProviderDiscoveryApi.md#v1dataprovidersget) | **GET** /v1/data-providers | Discover all data providers in My Data My Consent by country and filters.
*DataProviderDiscoveryApi* | [**v1DataProvidersProviderIdGet**](docs/Api/DataProviderDiscoveryApi.md#v1dataprovidersprovideridget) | **GET** /v1/data-providers/{providerId} | Get a Data Provider details.
*DigiLockerCompatIssuerApi* | [**issuerIssuedoc1XmlPost**](docs/Api/DigiLockerCompatIssuerApi.md#issuerissuedoc1xmlpost) | **POST** /issuer/issuedoc/1/xml | Digilocker Compatible endpoint to Issue Documents.
*DocumentsApi* | [**issueDocument**](docs/Api/DocumentsApi.md#issuedocument) | **POST** /v1/documents/issue | Issue a new document.
*DocumentsApi* | [**v1DocumentsIssuedDocumentIdGet**](docs/Api/DocumentsApi.md#v1documentsissueddocumentidget) | **GET** /v1/documents/issued/{documentId} | Get issued document.
*DocumentsApi* | [**v1DocumentsIssuedGet**](docs/Api/DocumentsApi.md#v1documentsissuedget) | **GET** /v1/documents/issued | Get issued documents.
*DocumentsApi* | [**v1DocumentsTypesGet**](docs/Api/DocumentsApi.md#v1documentstypesget) | **GET** /v1/documents/types | Get registered document types.

## Models

- [ApplicationUser](docs/Model/ApplicationUser.md)
- [AuthorizedPersonnelKycDocumentType](docs/Model/AuthorizedPersonnelKycDocumentType.md)
- [BankAccountType](docs/Model/BankAccountType.md)
- [CategoryIconFontFamily](docs/Model/CategoryIconFontFamily.md)
- [Country](docs/Model/Country.md)
- [CountryState](docs/Model/CountryState.md)
- [DataConsent](docs/Model/DataConsent.md)
- [DataConsentDetailsDto](docs/Model/DataConsentDetailsDto.md)
- [DataConsentIdentifier](docs/Model/DataConsentIdentifier.md)
- [DataConsentRequestModel](docs/Model/DataConsentRequestModel.md)
- [DataConsentRequestedAccountDto](docs/Model/DataConsentRequestedAccountDto.md)
- [DataConsentRequestedDocument](docs/Model/DataConsentRequestedDocument.md)
- [DataConsentRequestedDocumentDto](docs/Model/DataConsentRequestedDocumentDto.md)
- [DataConsentRequestedFaDto](docs/Model/DataConsentRequestedFaDto.md)
- [DataConsentRequestedFinancialAccount](docs/Model/DataConsentRequestedFinancialAccount.md)
- [DataConsentRequesterDto](docs/Model/DataConsentRequesterDto.md)
- [DataConsentRfaFilter](docs/Model/DataConsentRfaFilter.md)
- [DataConsentRfaFilterDto](docs/Model/DataConsentRfaFilterDto.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataFetchFrequencyUnit](docs/Model/DataFetchFrequencyUnit.md)
- [DataFetchType](docs/Model/DataFetchType.md)
- [DataLifeUnit](docs/Model/DataLifeUnit.md)
- [DataProcessingAgreement](docs/Model/DataProcessingAgreement.md)
- [DataProcessingAgreementPaginatedList](docs/Model/DataProcessingAgreementPaginatedList.md)
- [DataProtectionOfficer](docs/Model/DataProtectionOfficer.md)
- [DataProvider](docs/Model/DataProvider.md)
- [DataProviderPaginatedList](docs/Model/DataProviderPaginatedList.md)
- [DocumentIssueRequest](docs/Model/DocumentIssueRequest.md)
- [DocumentProviderCategory](docs/Model/DocumentProviderCategory.md)
- [FileType](docs/Model/FileType.md)
- [FilterType](docs/Model/FilterType.md)
- [FinancialAccountTypes](docs/Model/FinancialAccountTypes.md)
- [Gender](docs/Model/Gender.md)
- [IdentificationStrategy](docs/Model/IdentificationStrategy.md)
- [Identifier](docs/Model/Identifier.md)
- [IdentifierStringKeyValuePair](docs/Model/IdentifierStringKeyValuePair.md)
- [IdentityClaim](docs/Model/IdentityClaim.md)
- [JsonSchema](docs/Model/JsonSchema.md)
- [Operator](docs/Model/Operator.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationAddress](docs/Model/OrganizationAddress.md)
- [OrganizationAddressType](docs/Model/OrganizationAddressType.md)
- [OrganizationCategory](docs/Model/OrganizationCategory.md)
- [OrganizationFinancialAccount](docs/Model/OrganizationFinancialAccount.md)
- [OrganizationKyoDocument](docs/Model/OrganizationKyoDocument.md)
- [OrganizationMetaData](docs/Model/OrganizationMetaData.md)
- [OrganizationStatus](docs/Model/OrganizationStatus.md)
- [OrganizationType](docs/Model/OrganizationType.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProofDocumentType](docs/Model/ProofDocumentType.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [Receiver](docs/Model/Receiver.md)
- [ReceiverType](docs/Model/ReceiverType.md)
- [RefreshToken](docs/Model/RefreshToken.md)
- [Rejection](docs/Model/Rejection.md)
- [SuggestedAccountDto](docs/Model/SuggestedAccountDto.md)
- [Theme](docs/Model/Theme.md)
- [UriDetails](docs/Model/UriDetails.md)

## Authorization
All endpoints do not require authorization.
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
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
