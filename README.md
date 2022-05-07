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
    $apiInstance->cancelIndividualDataConsentRequest($request_id);
} catch (Exception $e) {
    echo 'Exception when calling DataConsentRequestsApi->cancelIndividualDataConsentRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mydatamyconsent.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataConsentRequestsApi* | [**cancelIndividualDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelindividualdataconsentrequest) | **PUT** /v1/consent-requests/individual/{requestId}/cancel | Cancel the individual data consent request by Id.
*DataConsentRequestsApi* | [**cancelOrganizationDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#cancelorganizationdataconsentrequest) | **PUT** /v1/consent-requests/organization/{requestId}/cancel | Cancel the organization data consent request by Id.
*DataConsentRequestsApi* | [**createIndividualDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#createindividualdataconsentrequest) | **POST** /v1/consent-requests/individual | Create data consent request for an individual.
*DataConsentRequestsApi* | [**createOrganizationDataConsentRequest**](docs/Api/DataConsentRequestsApi.md#createorganizationdataconsentrequest) | **POST** /v1/consent-requests/organization | Create data consent request for an organization.
*DataConsentRequestsApi* | [**getAllConsentRequestsToIndividuals**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoindividuals) | **GET** /v1/consent-requests/individuals | Get all Consent Requests sent to individuals.
*DataConsentRequestsApi* | [**getAllConsentRequestsToOrganizations**](docs/Api/DataConsentRequestsApi.md#getallconsentrequeststoorganizations) | **GET** /v1/consent-requests/organizations | Get all Consent Requests sent to organizations.
*DataConsentRequestsApi* | [**getIndividualConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getindividualconsentrequestbyid) | **GET** /v1/consent-requests/individuals/{requestId} | Get individual data consent request by id.
*DataConsentRequestsApi* | [**getOrganizationConsentRequestById**](docs/Api/DataConsentRequestsApi.md#getorganizationconsentrequestbyid) | **GET** /v1/consent-requests/organizations/{requestId} | Get a OrganizationConsent Request by Id.
*DataConsentsApi* | [**downloadConsentedDocumentAnalysis**](docs/Api/DataConsentsApi.md#downloadconsenteddocumentanalysis) | **GET** /v1/consents/{consentId}/documents/{documentId}/analysis | Get analysis of a consented document.
*DataConsentsApi* | [**downloadIndividualConsentedDocumentById**](docs/Api/DataConsentsApi.md#downloadindividualconsenteddocumentbyid) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId}/download | Download individual consented document by document id.
*DataConsentsApi* | [**downloadOrganizationConsentedDocumentById**](docs/Api/DataConsentsApi.md#downloadorganizationconsenteddocumentbyid) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId}/download | Download organization consent document based on document id.
*DataConsentsApi* | [**getAllConsentedFinancialAccounts**](docs/Api/DataConsentsApi.md#getallconsentedfinancialaccounts) | **GET** /v1/consents/individuals/{consentId}/financial-accounts | Get all individual consented financial accounts.
*DataConsentsApi* | [**getConsentFinancialAccounts**](docs/Api/DataConsentsApi.md#getconsentfinancialaccounts) | **GET** /v1/consents/organizations/{consentId}/financial-accounts | Get all organizational consented financial accounts.
*DataConsentsApi* | [**getConsentedAccountById**](docs/Api/DataConsentsApi.md#getconsentedaccountbyid) | **GET** /v1/consents/individuals/{consentId}/financial-accounts/{accountId} | Get individual consented financial account details based on account id.
*DataConsentsApi* | [**getConsentedDocumentById**](docs/Api/DataConsentsApi.md#getconsenteddocumentbyid) | **GET** /v1/consents/individuals/{consentId}/documents/{documentId} | Get individual consented document by document id.
*DataConsentsApi* | [**getConsentedFinancialAccount**](docs/Api/DataConsentsApi.md#getconsentedfinancialaccount) | **GET** /v1/consents/organizations/{consentId}/financial-accounts/{accountId} | Get organization consented financial account details based on account id.
*DataConsentsApi* | [**getConsentedFinancialAccountInsights**](docs/Api/DataConsentsApi.md#getconsentedfinancialaccountinsights) | **GET** /v1/consents/{consentId}/financial-accounts/{accountId}/insights | Get consented financial account insights.
*DataConsentsApi* | [**getConsentedFinancialAccountTransactions**](docs/Api/DataConsentsApi.md#getconsentedfinancialaccounttransactions) | **GET** /v1/consents/individuals/{consentId}/financial-accounts/{accountId}/transactions | Get individual consented financial account transactions of an individual based on accountId.
*DataConsentsApi* | [**getConsents**](docs/Api/DataConsentsApi.md#getconsents) | **GET** /v1/consents/individuals | Get the paginated list of individual data consents.
*DataConsentsApi* | [**getIndividualConsentedDocuments**](docs/Api/DataConsentsApi.md#getindividualconsenteddocuments) | **GET** /v1/consents/individuals/{consentId}/documents | Get individual consented documents by consent id.
*DataConsentsApi* | [**getIndividualDataConsentById**](docs/Api/DataConsentsApi.md#getindividualdataconsentbyid) | **GET** /v1/consents/individuals/{consentId} | Get individuals data consent details by consent id.
*DataConsentsApi* | [**getOrgConsentedAccountTransactions**](docs/Api/DataConsentsApi.md#getorgconsentedaccounttransactions) | **GET** /v1/consents/organizations/{consentId}/financial-accounts/{accountId}/transactions | Get organization consented financial account transactions of an individual based on accountId.
*DataConsentsApi* | [**getOrganizationConsentedDocumentById**](docs/Api/DataConsentsApi.md#getorganizationconsenteddocumentbyid) | **GET** /v1/consents/organizations/{consentId}/documents/{documentId} | Get organization consent document based on document id.
*DataConsentsApi* | [**getOrganizationConsentedDocuments**](docs/Api/DataConsentsApi.md#getorganizationconsenteddocuments) | **GET** /v1/consents/organizations/{consentId}/documents | Get organization consented documents by consent id.
*DataConsentsApi* | [**getOrganizationDataConsentById**](docs/Api/DataConsentsApi.md#getorganizationdataconsentbyid) | **GET** /v1/consents/organizations/{consentId} | Get organizations data consent details by consent id.
*DataConsentsApi* | [**getOrganizationDataConsents**](docs/Api/DataConsentsApi.md#getorganizationdataconsents) | **GET** /v1/consents/organizations | Get the paginated list of organization data consents.
*DataProcessingAgreementsApi* | [**createDataProcessingAgreement**](docs/Api/DataProcessingAgreementsApi.md#createdataprocessingagreement) | **POST** /v1/data-agreements | Create a data processing agreement.
*DataProcessingAgreementsApi* | [**deleteDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#deletedataprocessingagreementbyid) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement. This will not delete a published or a agreement in use with consents.
*DataProcessingAgreementsApi* | [**getDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#getdataprocessingagreementbyid) | **GET** /v1/data-agreements/{id} | Get data processing agreement by id.
*DataProcessingAgreementsApi* | [**getDataProcessingAgreements**](docs/Api/DataProcessingAgreementsApi.md#getdataprocessingagreements) | **GET** /v1/data-agreements | Get paginated data processing agreements.
*DataProcessingAgreementsApi* | [**terminateDataProcessingAgreementById**](docs/Api/DataProcessingAgreementsApi.md#terminatedataprocessingagreementbyid) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement.
*DataProcessingAgreementsApi* | [**updateDataProcessingAgreement**](docs/Api/DataProcessingAgreementsApi.md#updatedataprocessingagreement) | **PUT** /v1/data-agreements/{id} | Update a data processing agreement.
*DataProviderDiscoveryApi* | [**getDataProviderById**](docs/Api/DataProviderDiscoveryApi.md#getdataproviderbyid) | **GET** /v1/data-providers/{providerId} | Get a Data Provider details by provider id.
*DataProviderDiscoveryApi* | [**getDataProviders**](docs/Api/DataProviderDiscoveryApi.md#getdataproviders) | **GET** /v1/data-providers | Discover all data providers in My Data My Consent by country and filters.
*DigiLockerCompatIssuerApi* | [**digilockerCompatIssueDocument**](docs/Api/DigiLockerCompatIssuerApi.md#digilockercompatissuedocument) | **POST** /issuer/issuedoc/1/xml | Digilocker Compatible endpoint to issue document.
*DocumentsApi* | [**getIssuedDocumentById**](docs/Api/DocumentsApi.md#getissueddocumentbyid) | **GET** /v1/documents/issued/{documentId} | Get issued document.
*DocumentsApi* | [**getIssuedDocuments**](docs/Api/DocumentsApi.md#getissueddocuments) | **GET** /v1/documents/issued | Get paginated list of issued documents of given document type.
*DocumentsApi* | [**getRegisteredDocumentTypes**](docs/Api/DocumentsApi.md#getregistereddocumenttypes) | **GET** /v1/documents/types | Get paginated list of registered document types.
*DocumentsApi* | [**issueDocumentToIndividual**](docs/Api/DocumentsApi.md#issuedocumenttoindividual) | **POST** /v1/documents/issue/individual | Issue a new document to an individual user.
*DocumentsApi* | [**issueDocumentToOrganization**](docs/Api/DocumentsApi.md#issuedocumenttoorganization) | **POST** /v1/documents/issue/organization | Issue a new document to an organization.
*DocumentsApi* | [**uploadDocumentForIndividual**](docs/Api/DocumentsApi.md#uploaddocumentforindividual) | **POST** /v1/documents/issue/individual/upload/{issueRequestId} | Upload a document for issuance request of individual.
*DocumentsApi* | [**uploadDocumentForOrganization**](docs/Api/DocumentsApi.md#uploaddocumentfororganization) | **POST** /v1/documents/issue/organization/upload/{issueRequestId} | Upload a document for issuance request of organization.
*SupportedIdentifiersApi* | [**getAllSupportedIdentifiers**](docs/Api/SupportedIdentifiersApi.md#getallsupportedidentifiers) | **GET** /v1/supported-identifiers/{countryIso2Code} | Get all supported identifiers by country.

## Models

- [Activity](docs/Model/Activity.md)
- [ApprovedConsentRequest](docs/Model/ApprovedConsentRequest.md)
- [BankAccountType](docs/Model/BankAccountType.md)
- [BillPaymentOrderItem](docs/Model/BillPaymentOrderItem.md)
- [CollectibleTypes](docs/Model/CollectibleTypes.md)
- [ConsentRequestReceiver](docs/Model/ConsentRequestReceiver.md)
- [CreateDataConsentRequest](docs/Model/CreateDataConsentRequest.md)
- [CreateDataProcessingAgreement](docs/Model/CreateDataProcessingAgreement.md)
- [DataConsent](docs/Model/DataConsent.md)
- [DataConsentDetails](docs/Model/DataConsentDetails.md)
- [DataConsentDetailsPaginatedList](docs/Model/DataConsentDetailsPaginatedList.md)
- [DataConsentDocument](docs/Model/DataConsentDocument.md)
- [DataConsentDocumentIssuer](docs/Model/DataConsentDocumentIssuer.md)
- [DataConsentFinancialsDto](docs/Model/DataConsentFinancialsDto.md)
- [DataConsentRequest](docs/Model/DataConsentRequest.md)
- [DataConsentRequestDetails](docs/Model/DataConsentRequestDetails.md)
- [DataConsentRequestedFinancialAccount](docs/Model/DataConsentRequestedFinancialAccount.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataProcessingAgreement](docs/Model/DataProcessingAgreement.md)
- [DataProcessingAgreementBase](docs/Model/DataProcessingAgreementBase.md)
- [DataProcessingAgreementPaginatedList](docs/Model/DataProcessingAgreementPaginatedList.md)
- [DataProtectionOfficer](docs/Model/DataProtectionOfficer.md)
- [DataProvider](docs/Model/DataProvider.md)
- [DataProviderPaginatedList](docs/Model/DataProviderPaginatedList.md)
- [DocumentCategoryType](docs/Model/DocumentCategoryType.md)
- [DocumentDigitalSignature](docs/Model/DocumentDigitalSignature.md)
- [DocumentIssueRequest](docs/Model/DocumentIssueRequest.md)
- [DocumentIssueRequestDetails](docs/Model/DocumentIssueRequestDetails.md)
- [DocumentIssueRequestStatus](docs/Model/DocumentIssueRequestStatus.md)
- [DocumentReceiver](docs/Model/DocumentReceiver.md)
- [DocumentSubCategoryType](docs/Model/DocumentSubCategoryType.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentTypePaginatedList](docs/Model/DocumentTypePaginatedList.md)
- [DocumentsRequired](docs/Model/DocumentsRequired.md)
- [FileType](docs/Model/FileType.md)
- [Financial](docs/Model/Financial.md)
- [FinancialAccount](docs/Model/FinancialAccount.md)
- [FinancialAccountDetailsRequired](docs/Model/FinancialAccountDetailsRequired.md)
- [FinancialAccounts](docs/Model/FinancialAccounts.md)
- [IdentificationStrategy](docs/Model/IdentificationStrategy.md)
- [Identifier](docs/Model/Identifier.md)
- [IndividualDataConsentRequestDetails](docs/Model/IndividualDataConsentRequestDetails.md)
- [IndividualDataConsentRequestDetailsPaginatedList](docs/Model/IndividualDataConsentRequestDetailsPaginatedList.md)
- [IssuedDocument](docs/Model/IssuedDocument.md)
- [IssuedDocumentDetails](docs/Model/IssuedDocumentDetails.md)
- [IssuedDocumentPaginatedList](docs/Model/IssuedDocumentPaginatedList.md)
- [Life](docs/Model/Life.md)
- [OrganizationDataConsentRequestDetails](docs/Model/OrganizationDataConsentRequestDetails.md)
- [OrganizationDataConsentRequestDetailsPaginatedList](docs/Model/OrganizationDataConsentRequestDetailsPaginatedList.md)
- [OrganizationFinancialAccountDto](docs/Model/OrganizationFinancialAccountDto.md)
- [OrganizationFinancialTransactionsDto](docs/Model/OrganizationFinancialTransactionsDto.md)
- [OrganizationFinancialTransactionsDtoPaginatedList](docs/Model/OrganizationFinancialTransactionsDtoPaginatedList.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [SharedWith](docs/Model/SharedWith.md)
- [StringStringKeyValuePair](docs/Model/StringStringKeyValuePair.md)
- [SupportedEntityType](docs/Model/SupportedEntityType.md)
- [SupportedIdentifier](docs/Model/SupportedIdentifier.md)
- [UpdateDataProcessingAgreement](docs/Model/UpdateDataProcessingAgreement.md)
- [UriDetails](docs/Model/UriDetails.md)
- [UserAccountFinancialTransactionsDto](docs/Model/UserAccountFinancialTransactionsDto.md)
- [UserAccountFinancialTransactionsDtoPaginatedList](docs/Model/UserAccountFinancialTransactionsDtoPaginatedList.md)

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
