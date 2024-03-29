# mydatamyconsent

Unleashing the power of consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.

For more information, please visit [https://mydatamyconsent.com/en-us/contact-us](https://mydatamyconsent.com/en-us/contact-us).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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



// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = MyDataMyConsent\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyDataMyConsent\Api\DataProcessingAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_no = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->v1DataAgreementsGet($page_no, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingAgreementsApi->v1DataAgreementsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mydatamyconsent.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataProcessingAgreementsApi* | [**v1DataAgreementsGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsget) | **GET** /v1/data-agreements | Get paginated data processing agreements.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdDelete**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsiddelete) | **DELETE** /v1/data-agreements/{id} | Delete a data processing agreement this will not delete a published or a agreement in use with consents.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdGet**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidget) | **GET** /v1/data-agreements/{id} | Get data processing agreement by id.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdPut**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidput) | **PUT** /v1/data-agreements/{id} | Update data processing agreement.
*DataProcessingAgreementsApi* | [**v1DataAgreementsIdTerminatePut**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementsidterminateput) | **PUT** /v1/data-agreements/{id}/terminate | Terminate a data processing agreement by id.
*DataProcessingAgreementsApi* | [**v1DataAgreementsPost**](docs/Api/DataProcessingAgreementsApi.md#v1dataagreementspost) | **POST** /v1/data-agreements | Create a data processing agreement.
*DataProvidersDiscoveryApi* | [**v1DataProvidersGet**](docs/Api/DataProvidersDiscoveryApi.md#v1dataprovidersget) | **GET** /v1/data-providers | Discover all data providers in my data my consent by country and filters.
*DataProvidersDiscoveryApi* | [**v1DataProvidersIdGet**](docs/Api/DataProvidersDiscoveryApi.md#v1dataprovidersidget) | **GET** /v1/data-providers/{id} | Get a data provider details by provider id.
*IndividualsApi* | [**issuerIssuedoc1XmlPost**](docs/Api/IndividualsApi.md#issuerissuedoc1xmlpost) | **POST** /issuer/issuedoc/1/xml | Digilocker compatible endpoint to issue document.
*IndividualsApi* | [**v1IndividualsConsentRequestsGet**](docs/Api/IndividualsApi.md#v1individualsconsentrequestsget) | **GET** /v1/individuals/consent-requests | Get all consent requests sent to Individuals.
*IndividualsApi* | [**v1IndividualsConsentRequestsPost**](docs/Api/IndividualsApi.md#v1individualsconsentrequestspost) | **POST** /v1/individuals/consent-requests | Create individual consent request.
*IndividualsApi* | [**v1IndividualsConsentRequestsRequestIdCancelPut**](docs/Api/IndividualsApi.md#v1individualsconsentrequestsrequestidcancelput) | **PUT** /v1/individuals/consent-requests/{request_id}/cancel | Cancel the Individual data request by id.
*IndividualsApi* | [**v1IndividualsConsentRequestsRequestIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentrequestsrequestidget) | **GET** /v1/individuals/consent-requests/{request_id} | Get Individual data consent request by id.
*IndividualsApi* | [**v1IndividualsConsentTemplatesGet**](docs/Api/IndividualsApi.md#v1individualsconsenttemplatesget) | **GET** /v1/individuals/consent-templates | Get the paginated list of individual consent templates.
*IndividualsApi* | [**v1IndividualsConsentTemplatesTemplateIdGet**](docs/Api/IndividualsApi.md#v1individualsconsenttemplatestemplateidget) | **GET** /v1/individuals/consent-templates/{template_id} | Get Individual consent template details by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id}/download | Download Individual consented document by document id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsDocumentIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsdocumentidget) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id} | Get Individual consented document by document id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsget) | **GET** /v1/individuals/consents/{consent_id}/documents | Get Individual consented document by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsaccountidget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id} | Get individual consented financial account details.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsaccountidtransactionsget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id}/transactions | Get individual consented financial account transactions.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts | Get all individual consented financial accounts.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidget) | **GET** /v1/individuals/consents/{consent_id} | Get Individuals consent details by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdHealthFhirBundleGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidhealthfhirbundleget) | **GET** /v1/individuals/consents/{consent_id}/health/fhir/bundle | Get Individual consented Health Records by consent id.
*IndividualsApi* | [**v1IndividualsConsentsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsget) | **GET** /v1/individuals/consents | Get the paginated list of Individual consents.
*IndividualsApi* | [**v1IndividualsDocumentsIssueIssueRequestIdUploadPost**](docs/Api/IndividualsApi.md#v1individualsdocumentsissueissuerequestiduploadpost) | **POST** /v1/individuals/documents/issue/{issue_request_id}/upload | Upload a document for issuance request of individual.
*IndividualsApi* | [**v1IndividualsDocumentsIssuePost**](docs/Api/IndividualsApi.md#v1individualsdocumentsissuepost) | **POST** /v1/individuals/documents/issue | Issue a new document to an individual user.
*IndividualsApi* | [**v1IndividualsDocumentsIssuedDocumentIdGet**](docs/Api/IndividualsApi.md#v1individualsdocumentsissueddocumentidget) | **GET** /v1/individuals/documents/issued/{document_id} | Get issued document.
*IndividualsApi* | [**v1IndividualsDocumentsIssuedGet**](docs/Api/IndividualsApi.md#v1individualsdocumentsissuedget) | **GET** /v1/individuals/documents/issued | Get paginated list of issued documents of given document type.
*IndividualsApi* | [**v1IndividualsDocumentsTypesGet**](docs/Api/IndividualsApi.md#v1individualsdocumentstypesget) | **GET** /v1/individuals/documents/types | Get paginated list of registered document types.
*OrganizationsApi* | [**v1OrganizationsConsentRequestsGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentrequestsget) | **GET** /v1/organizations/consent-requests | Get all consent requests sent to Organizations.
*OrganizationsApi* | [**v1OrganizationsConsentRequestsPost**](docs/Api/OrganizationsApi.md#v1organizationsconsentrequestspost) | **POST** /v1/organizations/consent-requests | Create consent request for an Organization.
*OrganizationsApi* | [**v1OrganizationsConsentRequestsRequestIdCancelPut**](docs/Api/OrganizationsApi.md#v1organizationsconsentrequestsrequestidcancelput) | **PUT** /v1/organizations/consent-requests/{request_id}/cancel | Cancel the  Organization data request by id.
*OrganizationsApi* | [**v1OrganizationsConsentRequestsRequestIdGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentrequestsrequestidget) | **GET** /v1/organizations/consent-requests/{request_id} | Get Organization data request by id.
*OrganizationsApi* | [**v1OrganizationsConsentTemplatesGet**](docs/Api/OrganizationsApi.md#v1organizationsconsenttemplatesget) | **GET** /v1/organizations/consent-templates | Get the paginated list of organization consent templates.
*OrganizationsApi* | [**v1OrganizationsConsentTemplatesTemplateIdGet**](docs/Api/OrganizationsApi.md#v1organizationsconsenttemplatestemplateidget) | **GET** /v1/organizations/consent-templates/{template_id} | Get Organization consent template details by consent id.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/organizations/consents/{consent_id}/documents/{document_id}/download | Download Organization consent document by document id.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdDocumentsDocumentIdGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentiddocumentsdocumentidget) | **GET** /v1/organizations/consents/{consent_id}/documents/{document_id} | Get Organization consent document based on document id and consent id.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdDocumentsGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentiddocumentsget) | **GET** /v1/organizations/consents/{consent_id}/documents | Get Organization consent document by consent id.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentidfinancialaccountsaccountidget) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts/{account_id} | Get organization consented financial account details.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentidfinancialaccountsaccountidtransactionsget) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts/{account_id}/transactions | Get organization consented financial account transactions.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdFinancialAccountsGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentidfinancialaccountsget) | **GET** /v1/organizations/consents/{consent_id}/financial-accounts | Get all organization consented financial accounts.
*OrganizationsApi* | [**v1OrganizationsConsentsConsentIdGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsconsentidget) | **GET** /v1/organizations/consents/{consent_id} | Get Organization consent request details by consent id.
*OrganizationsApi* | [**v1OrganizationsConsentsGet**](docs/Api/OrganizationsApi.md#v1organizationsconsentsget) | **GET** /v1/organizations/consents | Get the paginated list of Organization consents.
*OrganizationsApi* | [**v1OrganizationsDocumentsIssuePost**](docs/Api/OrganizationsApi.md#v1organizationsdocumentsissuepost) | **POST** /v1/organizations/documents/issue | Issue a new document to an organization.
*OrganizationsApi* | [**v1OrganizationsDocumentsIssueUploadIssueRequestIdPost**](docs/Api/OrganizationsApi.md#v1organizationsdocumentsissueuploadissuerequestidpost) | **POST** /v1/organizations/documents/issue/upload/{issue_request_id} | Upload a document for issuance request of Organization.
*OrganizationsApi* | [**v1OrganizationsDocumentsIssuedDocumentIdGet**](docs/Api/OrganizationsApi.md#v1organizationsdocumentsissueddocumentidget) | **GET** /v1/organizations/documents/issued/{document_id} | Get issued document.
*OrganizationsApi* | [**v1OrganizationsDocumentsIssuedGet**](docs/Api/OrganizationsApi.md#v1organizationsdocumentsissuedget) | **GET** /v1/organizations/documents/issued | Get paginated list of issued documents of given document type.
*OrganizationsApi* | [**v1OrganizationsDocumentsTypesGet**](docs/Api/OrganizationsApi.md#v1organizationsdocumentstypesget) | **GET** /v1/organizations/documents/types | Get paginated list of registered document types.
*SupportedIdentifiersApi* | [**v1SupportedIdentifiersCountryIso2CodeGet**](docs/Api/SupportedIdentifiersApi.md#v1supportedidentifierscountryiso2codeget) | **GET** /v1/supported-identifiers/{country_iso2_code} | Get all supported identifiers by country.

## Models

- [ApiErrorType](docs/Model/ApiErrorType.md)
- [CollectibleTypes](docs/Model/CollectibleTypes.md)
- [Consent](docs/Model/Consent.md)
- [ConsentDetails](docs/Model/ConsentDetails.md)
- [ConsentDocumentIssuer](docs/Model/ConsentDocumentIssuer.md)
- [ConsentRequest](docs/Model/ConsentRequest.md)
- [ConsentRequestReceiver](docs/Model/ConsentRequestReceiver.md)
- [ConsentRequestTemplate](docs/Model/ConsentRequestTemplate.md)
- [ConsentRequestTemplateStatus](docs/Model/ConsentRequestTemplateStatus.md)
- [ConsentedDocument](docs/Model/ConsentedDocument.md)
- [ConsentedFinancialAccount](docs/Model/ConsentedFinancialAccount.md)
- [ConsentedFinancialAccountField](docs/Model/ConsentedFinancialAccountField.md)
- [ConsentedFinancialAccountFieldTransactionPeriod](docs/Model/ConsentedFinancialAccountFieldTransactionPeriod.md)
- [ConsentedIdentifier](docs/Model/ConsentedIdentifier.md)
- [ConsentedMedicalRecord](docs/Model/ConsentedMedicalRecord.md)
- [CreateConsentRequest](docs/Model/CreateConsentRequest.md)
- [CreateDataProcessingAgreement](docs/Model/CreateDataProcessingAgreement.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataProcessingAgreement](docs/Model/DataProcessingAgreement.md)
- [DataProtectionOfficer](docs/Model/DataProtectionOfficer.md)
- [DataProvider](docs/Model/DataProvider.md)
- [DataProviderDetails](docs/Model/DataProviderDetails.md)
- [DocumentCategoryType](docs/Model/DocumentCategoryType.md)
- [DocumentDigitalSignature](docs/Model/DocumentDigitalSignature.md)
- [DocumentField](docs/Model/DocumentField.md)
- [DocumentIssueRequest](docs/Model/DocumentIssueRequest.md)
- [DocumentIssueRequestDetails](docs/Model/DocumentIssueRequestDetails.md)
- [DocumentIssueRequestDetailsReceiver](docs/Model/DocumentIssueRequestDetailsReceiver.md)
- [DocumentIssueRequestPaymentRequest](docs/Model/DocumentIssueRequestPaymentRequest.md)
- [DocumentIssueRequestReceiver](docs/Model/DocumentIssueRequestReceiver.md)
- [DocumentIssueRequestStatus](docs/Model/DocumentIssueRequestStatus.md)
- [DocumentReceiver](docs/Model/DocumentReceiver.md)
- [DocumentSubCategoryType](docs/Model/DocumentSubCategoryType.md)
- [DocumentType](docs/Model/DocumentType.md)
- [Equity](docs/Model/Equity.md)
- [EquityTransaction](docs/Model/EquityTransaction.md)
- [Error](docs/Model/Error.md)
- [FhirBundleAny](docs/Model/FhirBundleAny.md)
- [FinancialAccount](docs/Model/FinancialAccount.md)
- [FinancialAccountCategoryType](docs/Model/FinancialAccountCategoryType.md)
- [FinancialAccountDetailsRequired](docs/Model/FinancialAccountDetailsRequired.md)
- [FinancialAccountEquity](docs/Model/FinancialAccountEquity.md)
- [FinancialAccountEquityAllOf](docs/Model/FinancialAccountEquityAllOf.md)
- [FinancialAccountField](docs/Model/FinancialAccountField.md)
- [FinancialAccountMutualFund](docs/Model/FinancialAccountMutualFund.md)
- [FinancialAccountMutualFundAllOf](docs/Model/FinancialAccountMutualFundAllOf.md)
- [FinancialAccountSip](docs/Model/FinancialAccountSip.md)
- [FinancialAccountSipAllOf](docs/Model/FinancialAccountSipAllOf.md)
- [FinancialAccountSubCategoryType](docs/Model/FinancialAccountSubCategoryType.md)
- [FinancialAccountTransaction](docs/Model/FinancialAccountTransaction.md)
- [FinancialAccountTransactionEquityTransaction](docs/Model/FinancialAccountTransactionEquityTransaction.md)
- [FinancialAccountTransactionEquityTransactionAllOf](docs/Model/FinancialAccountTransactionEquityTransactionAllOf.md)
- [FinancialAccountTransactionMutualFundTransaction](docs/Model/FinancialAccountTransactionMutualFundTransaction.md)
- [FinancialAccountTransactionMutualFundTransactionAllOf](docs/Model/FinancialAccountTransactionMutualFundTransactionAllOf.md)
- [FinancialAccountTransactionPeriod](docs/Model/FinancialAccountTransactionPeriod.md)
- [FinancialAccountTransactionSipTransaction](docs/Model/FinancialAccountTransactionSipTransaction.md)
- [FinancialAccountTransactionSipTransactionAllOf](docs/Model/FinancialAccountTransactionSipTransactionAllOf.md)
- [Holder](docs/Model/Holder.md)
- [IdentificationStrategy](docs/Model/IdentificationStrategy.md)
- [Identifier](docs/Model/Identifier.md)
- [IdentityField](docs/Model/IdentityField.md)
- [IndividualConsentRequestDetails](docs/Model/IndividualConsentRequestDetails.md)
- [IndividualConsentRequestTemplateDetails](docs/Model/IndividualConsentRequestTemplateDetails.md)
- [IndividualConsentRequestTemplateDetailsDataFrequency](docs/Model/IndividualConsentRequestTemplateDetailsDataFrequency.md)
- [IndividualConsentRequestTemplateDetailsDataLife](docs/Model/IndividualConsentRequestTemplateDetailsDataLife.md)
- [IndividualConsentRequestTemplateDetailsRequestLife](docs/Model/IndividualConsentRequestTemplateDetailsRequestLife.md)
- [IssuedDocument](docs/Model/IssuedDocument.md)
- [KeyValuePair](docs/Model/KeyValuePair.md)
- [Life](docs/Model/Life.md)
- [MedicalRecordField](docs/Model/MedicalRecordField.md)
- [MutualFund](docs/Model/MutualFund.md)
- [MutualFundFundType](docs/Model/MutualFundFundType.md)
- [MutualFundHoldingMode](docs/Model/MutualFundHoldingMode.md)
- [MutualFundSchemeCategory](docs/Model/MutualFundSchemeCategory.md)
- [MutualFundSchemeOption](docs/Model/MutualFundSchemeOption.md)
- [MutualFundSchemePlan](docs/Model/MutualFundSchemePlan.md)
- [MutualFundSchemeType](docs/Model/MutualFundSchemeType.md)
- [MutualFundTransaction](docs/Model/MutualFundTransaction.md)
- [MutualFundTransactionType](docs/Model/MutualFundTransactionType.md)
- [OrganizationConsentRequestDetails](docs/Model/OrganizationConsentRequestDetails.md)
- [OrganizationConsentRequestTemplateDetails](docs/Model/OrganizationConsentRequestTemplateDetails.md)
- [PaginatedListOfConsentRequestTemplates](docs/Model/PaginatedListOfConsentRequestTemplates.md)
- [PaginatedListOfConsents](docs/Model/PaginatedListOfConsents.md)
- [PaginatedListOfDataProcessingAgreements](docs/Model/PaginatedListOfDataProcessingAgreements.md)
- [PaginatedListOfDataProviders](docs/Model/PaginatedListOfDataProviders.md)
- [PaginatedListOfDocumentTypes](docs/Model/PaginatedListOfDocumentTypes.md)
- [PaginatedListOfFinancialAccountTransactions](docs/Model/PaginatedListOfFinancialAccountTransactions.md)
- [PaginatedListOfIndividualConsentRequestDetailss](docs/Model/PaginatedListOfIndividualConsentRequestDetailss.md)
- [PaginatedListOfIssuedDocuments](docs/Model/PaginatedListOfIssuedDocuments.md)
- [PaginatedListOfOrganizationConsentRequestDetailss](docs/Model/PaginatedListOfOrganizationConsentRequestDetailss.md)
- [PaymentOrderItem](docs/Model/PaymentOrderItem.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [SelectedFinancialAccountType](docs/Model/SelectedFinancialAccountType.md)
- [Sip](docs/Model/Sip.md)
- [SipInvestmentInformation](docs/Model/SipInvestmentInformation.md)
- [SipPlanInformation](docs/Model/SipPlanInformation.md)
- [SipTransaction](docs/Model/SipTransaction.md)
- [SupportedDocumentType](docs/Model/SupportedDocumentType.md)
- [SupportedEntityType](docs/Model/SupportedEntityType.md)
- [SupportedIdentifier](docs/Model/SupportedIdentifier.md)
- [UpdateDataProcessingAgreement](docs/Model/UpdateDataProcessingAgreement.md)
- [UploadDocumentResponse](docs/Model/UploadDocumentResponse.md)
- [UriDetails](docs/Model/UriDetails.md)

## Authorization

### OAuth2ClientCredentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **SupportedIdentifiers:Read**: Read SupportedIdentifiers.
    - **DataProviders:Read**: Read DataProviders.
    - **DataProcessingAgreements:Read**: Read DataProcessingAgreements.
    - **DataProcessingAgreements:Write**: Read & Write DataProcessingAgreements.
    - **Individuals:DocumentTypes:Read**: Read Individual DocumentTypes.
    - **Individuals:Documents:Read**: Read Individual Issued Documents.
    - **Individuals:Documents:Issue**: Issue Individual Documents.
    - **Organizations:DocumentTypes:Read**: Read Organization DocumentTypes.
    - **Organizations:Documents:Read**: Read Organization Issued Documents.
    - **Organizations:Documents:Issue**: Issue Organization Documents.
    - **Individuals:ConsentRequests:Request**: Request Individual Consent requests.
    - **Individuals:ConsentRequests:Cancel**: Cancel Individual Consent requests.
    - **Individuals:ConsentRequests:Read**: Read Individual Consent requests.
    - **Organizations:ConsentRequests:Request**: Request Organization Consent requests.
    - **Organizations:ConsentRequests:Cancel**: Cancel Organization Consent requests.
    - **Organizations:ConsentRequests:Read**: Read Organization Consent requests.
    - **Individuals:Consents:Read**: Read Individual Consents.
    - **Organizations:Consents:Read**: Read Organization Consents.
    - **Individuals:ConsentRequestTemplates:Read**: Read Individual Consent Request templates.
    - **Organizations:ConsentRequestTemplates:Read**: Read Organization Consent Request templates.

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

- API version: `1.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
