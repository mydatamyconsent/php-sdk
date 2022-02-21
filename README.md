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
$request_id = 'request_id_example'; // string | Individual consent request id.

try {
    $result = $apiInstance->cancelIndividualDataConsentRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataConsentRequestsApi* | [**cancelIndividualDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelindividualdataconsentrequest) | **PUT** /v1/consent-requests/individual/{requestId}/cancel | Cancel the individual data consent request based on Id.
*DataConsentRequestsApi* | [**cancelOrganizationDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelorganizationdataconsentrequest) | **PUT** /v1/consent-requests/organization/{requestId}/cancel | Cancel the Organization data consent request based on Id.
*DataConsentRequestsApi* | [**createIndividualDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#createindividualdataconsentrequest) | **POST** /v1/consent-requests/individual | Create a individual data consent request.
*DataConsentRequestsApi* | [**createOrganizationDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#createorganizationdataconsentrequest) | **POST** /v1/consent-requests/organization | Create a organization data consent request.
*DataConsentRequestsApi* | [**getAllConsentRequestsToIndividuals**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoindividuals) | **GET** /v1/consent-requests/individuals | Get all Consent Requests sent to Individuals.
*DataConsentRequestsApi* | [**getAllConsentRequestsToOrganizations**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoorganizations) | **GET** /v1/consent-requests/organizations | Get All Consent Requests sent to Organizations.
*DataConsentRequestsApi* | [**getIndividualConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getindividualconsentrequestbyid) | **GET** /v1/consent-requests/individuals/{requestId} | Get a Consent Request by ID.
*DataConsentRequestsApi* | [**getOrganizationConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getorganizationconsentrequestbyid) | **GET** /v1/consent-requests/organizations/{requestId} | Get a OrganizationConsent Request by Id.
*DataConsentsApi* | [**downloadConsentedDocumentById**](docs/Api/DataConsentsApi.md#downloadconsenteddocumentbyid) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download a individuals consented document.
*DataConsentsApi* | [**downloadOrgConsentedDocumentById**](docs/Api/DataConsentsApi.md#downloadorgconsenteddocumentbyid) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download a organizations consented document.
*DataConsentsApi* | [**getAllConsentedDocuments**](docs/Api/DataConsentsApi.md#getallconsenteddocuments) | **GET** /v1/consents/individuals/{consentId}/documents | Get the individual documents based on ConsentId.
*DataConsentsApi* | [**getAllConsentedFinancialAccounts**](docs/Api/DataConsentsApi.md#getallconsentedfinancialaccounts) | **GET** /v1/consents/individuals/{consentId}/accounts | Get all individual consented financial accounts.
*DataConsentsApi* | [**getAllOrganizationConsentedAccounts**](docs/Api/DataConsentsApi.md#getallorganizationconsentedaccounts) | **GET** /v1/consents/organizations/{consentId}/accounts | Get all organizational consented financial accounts.
*DataConsentsApi* | [**getAllOrganizationConsentedDocuments**](docs/Api/DataConsentsApi.md#getallorganizationconsenteddocuments) | **GET** /v1/consents/organizations/{consentId}/documents | Get the organization documents based on ConsentId.
*DataConsentsApi* | [**getConsentDetailsById**](docs/Api/DataConsentsApi.md#getconsentdetailsbyid) | **GET** /v1/consents/individuals/{consentId} | Get all individuals consent details by consent id.
*DataConsentsApi* | [**getConsentedAccountById**](docs/Api/DataConsentsApi.md#getconsentedaccountbyid) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId} | Get individual consented financial account details based on account id.
*DataConsentsApi* | [**getConsentedDocumentById**](docs/Api/DataConsentsApi.md#getconsenteddocumentbyid) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individuals consent document based on document id.
*DataConsentsApi* | [**getConsentedFinancialAccount**](docs/Api/DataConsentsApi.md#getconsentedfinancialaccount) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId} | Get organization consented financial account details based on account id.
*DataConsentsApi* | [**getConsentedFinancialAccountTransactions**](docs/Api/DataConsentsApi.md#getconsentedfinancialaccounttransactions) | **GET** /v1/consents/individuals/{consentId}/accounts/{accountId}/transactions | Get individual consented financial account transactions of an individual based on accountId.
*DataConsentsApi* | [**getConsents**](docs/Api/DataConsentsApi.md#getconsents) | **GET** /v1/consents/individuals | Get the list of Consents Sent to Individuals.
*DataConsentsApi* | [**getConsentsForOrganizations**](docs/Api/DataConsentsApi.md#getconsentsfororganizations) | **GET** /v1/consents/organizations | Get the list of data consents sent for organizations.
*DataConsentsApi* | [**getOrgConsentedAccountTransactions**](docs/Api/DataConsentsApi.md#getorgconsentedaccounttransactions) | **GET** /v1/consents/organizations/{consentId}/accounts/{accountId}/transactions | Get organization consented financial account transactions of an individual based on accountId.
*DataConsentsApi* | [**getOrganizationConsentDetailsById**](docs/Api/DataConsentsApi.md#getorganizationconsentdetailsbyid) | **GET** /v1/consents/organizations/{consentId} | Get all organization consent details by consent id.
*DataConsentsApi* | [**getOrganizationConsentedDocumentById**](docs/Api/DataConsentsApi.md#getorganizationconsenteddocumentbyid) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organization consent document based on document id.
*DataProcessingAgreementsApi* | [**createDataProcessingAgreement**](docs/Api/DataProcessingAgreementsApi.md#createdataprocessingagreement) | **POST** /v1/data-agreements | Create a data processing agreement.
*DataProcessingAgreementsApi* | [**deleteDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#deletedataprocessingagreementbyid) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement. This will not delete a published or a agreement in use with consents.
*DataProcessingAgreementsApi* | [**getDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#getdataprocessingagreementbyid) | **GET** /v1/data-agreements/{id} | Get data processing agreement by id.
*DataProcessingAgreementsApi* | [**getDataProcessingAgreements**](docs/Api/DataProcessingAgreementsApi.md#getdataprocessingagreements) | **GET** /v1/data-agreements | Get all data processing agreements.
*DataProcessingAgreementsApi* | [**terminateDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#terminatedataprocessingagreementbyid) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement.
*DataProcessingAgreementsApi* | [**updateDataProcessingAgreement**](docs/Api/DataProcessingAgreementsApi.md#updatedataprocessingagreement) | **PUT** /v1/data-agreements/{id} | Update a data processing agreement.
*DataProviderDiscoveryApi* | [**getDataProviderById**](docs/Api/DataProviderDiscoveryApi.md#getdataproviderbyid) | **GET** /v1/data-providers/{providerId} | Get a Data Provider details based on provider id.
*DataProviderDiscoveryApi* | [**getDataProviders**](docs/Api/DataProviderDiscoveryApi.md#getdataproviders) | **GET** /v1/data-providers | Discover all data providers in My Data My Consent by country and filters.
*DigiLockerCompatIssuerApi* | [**digilockerCompatIssueDocument**](docs/Api/DigiLockerCompatIssuerApi.md#digilockercompatissuedocument) | **POST** /issuer/issuedoc/1/xml | Digilocker Compatible endpoint to issue document.
*DocumentsApi* | [**getIssuedDocumentById**](docs/Api/DocumentsApi.md#getissueddocumentbyid) | **GET** /v1/documents/issued/{documentId} | Get issued document.
*DocumentsApi* | [**getIssuedDocuments**](docs/Api/DocumentsApi.md#getissueddocuments) | **GET** /v1/documents/issued | Get issued documents.
*DocumentsApi* | [**getRegisteredDocumentTypes**](docs/Api/DocumentsApi.md#getregistereddocumenttypes) | **GET** /v1/documents/types | Get registered document types.
*DocumentsApi* | [**issueDocument**](docs/Api/DocumentsApi.md#issuedocument) | **POST** /v1/documents/issue | Issue a new document.

## Models

- [Activity](docs/Model/Activity.md)
- [ApprovedConsentRequest](docs/Model/ApprovedConsentRequest.md)
- [BankAccountType](docs/Model/BankAccountType.md)
- [CollectibleTypes](docs/Model/CollectibleTypes.md)
- [ConsentTemplateTypes](docs/Model/ConsentTemplateTypes.md)
- [CreateDataProcessingAgreementRequestModel](docs/Model/CreateDataProcessingAgreementRequestModel.md)
- [CreateIndividualDataConsentRequest](docs/Model/CreateIndividualDataConsentRequest.md)
- [CreateOrganizationDataConsentRequest](docs/Model/CreateOrganizationDataConsentRequest.md)
- [DataConsentDetailsDto](docs/Model/DataConsentDetailsDto.md)
- [DataConsentDocumentsDto](docs/Model/DataConsentDocumentsDto.md)
- [DataConsentFinancialsDto](docs/Model/DataConsentFinancialsDto.md)
- [DataConsentIdentifier](docs/Model/DataConsentIdentifier.md)
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
- [DocumentSubCategoryType](docs/Model/DocumentSubCategoryType.md)
- [DocumentTypeDetailsDto](docs/Model/DocumentTypeDetailsDto.md)
- [DocumentTypeDetailsDtoPaginatedList](docs/Model/DocumentTypeDetailsDtoPaginatedList.md)
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
- [IndividualDataConsentRequestResponse](docs/Model/IndividualDataConsentRequestResponse.md)
- [IssuedDocument](docs/Model/IssuedDocument.md)
- [IssuedDocumentPaginatedList](docs/Model/IssuedDocumentPaginatedList.md)
- [Life](docs/Model/Life.md)
- [OrganizationDataConsentInfoDto](docs/Model/OrganizationDataConsentInfoDto.md)
- [OrganizationDataConsentInfoDtoPaginatedList](docs/Model/OrganizationDataConsentInfoDtoPaginatedList.md)
- [OrganizationDataConsentRequestResponse](docs/Model/OrganizationDataConsentRequestResponse.md)
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
- [SupportedEntityType](docs/Model/SupportedEntityType.md)
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
