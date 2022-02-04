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
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->cancelConsentRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelConsentRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataConsentRequestsApi* | [**cancelConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelconsentrequest) | **DELETE** /v1/consent-requests/{requestId}/cancel | Revoke / Cancel the ConsentRequest based on Id.
*DataConsentRequestsApi* | [**createRequest**](docs/Api/DataConsentRequestsApi.md#createrequest) | **POST** /v1/consent-requests | Create a consent request.
*DataConsentRequestsApi* | [**getAllConsentRequestsToIndividuals**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoindividuals) | **GET** /v1/consent-requests/individuals | Get all Consent Requests sent to Individuals.
*DataConsentRequestsApi* | [**getAllConsentRequestsToOrganizations**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoorganizations) | **GET** /v1/consent-requests/organizations | Get All Consent Requests sent to Organizations
*DataConsentRequestsApi* | [**getIndividualConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getindividualconsentrequestbyid) | **GET** /v1/consent-requests/individuals/{requestId} | Get a Consent Request by ID.
*DataConsentRequestsApi* | [**getOrganizationConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getorganizationconsentrequestbyid) | **GET** /v1/consent-requests/organizations/{requestId} | Get a OrganizationConsent Request by Id
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdAccountsAccountIdGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentidaccountsaccountidget) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId} | Get individual consented financial account details based on account id.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdAccountsAccountIdTransactionsGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentidaccountsaccountidtransactionsget) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions of an individual based on accountId.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdAccountsGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentidaccountsget) | **GET** /v1/consents/individuals/{consentId}/accounts | Get all individual financial accounts in a consent.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download a individuals consented document.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdDocumentsDocumentIdGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentiddocumentsdocumentidget) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individuals consent document based on document id.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdDocumentsGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentiddocumentsget) | **GET** /v1/consents/individuals/{consentId}/documents | Get the individual documents based on ConsentId.
*DataConsentsApi* | [**v1ConsentsIndividualsConsentIdGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsconsentidget) | **GET** /v1/consents/individuals/{consentId} | Get individuals consent details by consent id.
*DataConsentsApi* | [**v1ConsentsIndividualsGet**](docs/Api/DataConsentsApi.md#v1consentsindividualsget) | **GET** /v1/consents/individuals | Get the list of Consents Sent to Individuals.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdAccountsAccountIdGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentidaccountsaccountidget) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId} | Get orgnization consented financial account details based on account id.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdAccountsAccountIdTransactionsGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentidaccountsaccountidtransactionsget) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId}/transactions | Get consented financial account transactions of an organization based on accountId.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdAccountsGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentidaccountsget) | **GET** /v1/consents/organizations/{consentId}/accounts | Get all organizational financial accounts in a consent.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download organizations consented document.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdDocumentsDocumentIdGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentiddocumentsdocumentidget) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organizations consent document based on document id.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdDocumentsGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentiddocumentsget) | **GET** /v1/consents/organizations/{consentId}/documents | Get the organizations documents based on ConsentId.
*DataConsentsApi* | [**v1ConsentsOrganizationsConsentIdGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsconsentidget) | **GET** /v1/consents/organizations/{consentId} | Get organizations consent details by consent id.
*DataConsentsApi* | [**v1ConsentsOrganizationsGet**](docs/Api/DataConsentsApi.md#v1consentsorganizationsget) | **GET** /v1/consents/organizations | Get the list of data consents sent for organizations.
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

- [Activity](docs/Model/Activity.md)
- [ApprovedConsentRequest](docs/Model/ApprovedConsentRequest.md)
- [BankAccountType](docs/Model/BankAccountType.md)
- [CollectibleTypes](docs/Model/CollectibleTypes.md)
- [ConsentTemplateTypes](docs/Model/ConsentTemplateTypes.md)
- [CreateDataProcessingAgreementRequestModel](docs/Model/CreateDataProcessingAgreementRequestModel.md)
- [DataConsentDetailsDto](docs/Model/DataConsentDetailsDto.md)
- [DataConsentDocumentsDto](docs/Model/DataConsentDocumentsDto.md)
- [DataConsentFinancialsDto](docs/Model/DataConsentFinancialsDto.md)
- [DataConsentIdentifier](docs/Model/DataConsentIdentifier.md)
- [DataConsentRequestModel](docs/Model/DataConsentRequestModel.md)
- [DataConsentRequestedDocument](docs/Model/DataConsentRequestedDocument.md)
- [DataConsentRequestedFinancialAccount](docs/Model/DataConsentRequestedFinancialAccount.md)
- [DataConsentRequesterDto](docs/Model/DataConsentRequesterDto.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataProcessingAgreementDto](docs/Model/DataProcessingAgreementDto.md)
- [DataProcessingAgreementDtoPaginatedList](docs/Model/DataProcessingAgreementDtoPaginatedList.md)
- [DataProtectionOfficer](docs/Model/DataProtectionOfficer.md)
- [DataProvider](docs/Model/DataProvider.md)
- [DataProviderPaginatedList](docs/Model/DataProviderPaginatedList.md)
- [DigitalSignature](docs/Model/DigitalSignature.md)
- [Document](docs/Model/Document.md)
- [DocumentCategoryType](docs/Model/DocumentCategoryType.md)
- [DocumentIssueRequest](docs/Model/DocumentIssueRequest.md)
- [DocumentsRequired](docs/Model/DocumentsRequired.md)
- [FetchTypes](docs/Model/FetchTypes.md)
- [FileType](docs/Model/FileType.md)
- [Financial](docs/Model/Financial.md)
- [FinancialAccount](docs/Model/FinancialAccount.md)
- [FinancialAccountDetailsRequired](docs/Model/FinancialAccountDetailsRequired.md)
- [FinancialAccounts](docs/Model/FinancialAccounts.md)
- [GetConsentTemplateDetailsDto](docs/Model/GetConsentTemplateDetailsDto.md)
- [IdentificationStrategy](docs/Model/IdentificationStrategy.md)
- [Identifier](docs/Model/Identifier.md)
- [IdentifierStringKeyValuePair](docs/Model/IdentifierStringKeyValuePair.md)
- [IdentitySupportedFields](docs/Model/IdentitySupportedFields.md)
- [Life](docs/Model/Life.md)
- [OrganizationDataConsentInfoDto](docs/Model/OrganizationDataConsentInfoDto.md)
- [OrganizationDataConsentInfoDtoPaginatedList](docs/Model/OrganizationDataConsentInfoDtoPaginatedList.md)
- [OrganizationDocumentDetailsDto](docs/Model/OrganizationDocumentDetailsDto.md)
- [OrganizationDocumentDownloadDto](docs/Model/OrganizationDocumentDownloadDto.md)
- [OrganizationFinancialAccountDto](docs/Model/OrganizationFinancialAccountDto.md)
- [OrganizationFinancialTransactionsDto](docs/Model/OrganizationFinancialTransactionsDto.md)
- [OrganizationFinancialTransactionsDtoPaginatedList](docs/Model/OrganizationFinancialTransactionsDtoPaginatedList.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [Receiver](docs/Model/Receiver.md)
- [ReceiverType](docs/Model/ReceiverType.md)
- [SharedWith](docs/Model/SharedWith.md)
- [UpdateDataProcessingAgreementRequestModel](docs/Model/UpdateDataProcessingAgreementRequestModel.md)
- [UriDetails](docs/Model/UriDetails.md)
- [UserAccountFinancialTransactionsDto](docs/Model/UserAccountFinancialTransactionsDto.md)
- [UserAccountFinancialTransactionsDtoPaginatedList](docs/Model/UserAccountFinancialTransactionsDtoPaginatedList.md)
- [UserDataConsentInfoDto](docs/Model/UserDataConsentInfoDto.md)
- [UserDataConsentInfoDtoPaginatedList](docs/Model/UserDataConsentInfoDtoPaginatedList.md)
- [UserDocumentDetailsDto](docs/Model/UserDocumentDetailsDto.md)
- [UserDocumentDownloadDto](docs/Model/UserDocumentDownloadDto.md)

## Authorization

### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: `https://accounts.mydatamyconsent.com/connect/authorize`
- **Scopes**: 
    - **developer**: Developer API

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
