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
*IndividualsApi* | [**v1IndividualsConsentRequestsRequestIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentrequestsrequestidget) | **GET** /v1/individuals/consent-requests/{request_id} | Get Individual data request by id.
*IndividualsApi* | [**v1IndividualsConsentTemplatesGet**](docs/Api/IndividualsApi.md#v1individualsconsenttemplatesget) | **GET** /v1/individuals/consent-templates | Get the paginated list of individual consent templates.
*IndividualsApi* | [**v1IndividualsConsentTemplatesTemplateIdGet**](docs/Api/IndividualsApi.md#v1individualsconsenttemplatestemplateidget) | **GET** /v1/individuals/consent-templates/{template_id} | Get Individual consent template details by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsDocumentIdDownloadGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsdocumentiddownloadget) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id}/download | Download Individual consented document by document id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsDocumentIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsdocumentidget) | **GET** /v1/individuals/consents/{consent_id}/documents/{document_id} | Get Individual consented document by document id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdDocumentsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentiddocumentsget) | **GET** /v1/individuals/consents/{consent_id}/documents | Get Individual consented document by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsaccountidget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id} | Get individual consented financial account details.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsAccountIdTransactionsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsaccountidtransactionsget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts/{account_id}/transactions | Get individual consented financial account transactions.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdFinancialAccountsGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidfinancialaccountsget) | **GET** /v1/individuals/consents/{consent_id}/financial-accounts | Get all individual consented financial accounts.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidget) | **GET** /v1/individuals/consents/{consent_id} | Get Individuals consent details by consent id.
*IndividualsApi* | [**v1IndividualsConsentsConsentIdHealthFhirBundleGet**](docs/Api/IndividualsApi.md#v1individualsconsentsconsentidhealthfhirbundleget) | **GET** /v1/individuals/consents/{consent_id}/health/fhir/bundle | Get Individual consented document by consent id.
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

- [Aif](docs/Model/Aif.md)
- [AifTransaction](docs/Model/AifTransaction.md)
- [ApiErrorType](docs/Model/ApiErrorType.md)
- [BillPayment](docs/Model/BillPayment.md)
- [BillPaymentTransaction](docs/Model/BillPaymentTransaction.md)
- [Bond](docs/Model/Bond.md)
- [BondTransaction](docs/Model/BondTransaction.md)
- [CIS](docs/Model/CIS.md)
- [CISTransaction](docs/Model/CISTransaction.md)
- [CertificateOfDeposit](docs/Model/CertificateOfDeposit.md)
- [CertificateOfDepositTransaction](docs/Model/CertificateOfDepositTransaction.md)
- [CollectibleTypes](docs/Model/CollectibleTypes.md)
- [CommercialPaper](docs/Model/CommercialPaper.md)
- [CommercialPaperTransaction](docs/Model/CommercialPaperTransaction.md)
- [Consent](docs/Model/Consent.md)
- [ConsentDetails](docs/Model/ConsentDetails.md)
- [ConsentDocumentIssuer](docs/Model/ConsentDocumentIssuer.md)
- [ConsentRequest](docs/Model/ConsentRequest.md)
- [ConsentRequestReceiver](docs/Model/ConsentRequestReceiver.md)
- [ConsentRequestTemplate](docs/Model/ConsentRequestTemplate.md)
- [ConsentRequestTemplateStatus](docs/Model/ConsentRequestTemplateStatus.md)
- [ConsentedDocument](docs/Model/ConsentedDocument.md)
- [ConsentedFinancialAccount](docs/Model/ConsentedFinancialAccount.md)
- [ConsentedFinancialAccountTransactionPeriod](docs/Model/ConsentedFinancialAccountTransactionPeriod.md)
- [ConsentedIdentifier](docs/Model/ConsentedIdentifier.md)
- [ConsentedMedicalRecord](docs/Model/ConsentedMedicalRecord.md)
- [CreateConsentRequest](docs/Model/CreateConsentRequest.md)
- [CreateDataProcessingAgreement](docs/Model/CreateDataProcessingAgreement.md)
- [CreditCard](docs/Model/CreditCard.md)
- [CreditCardHolder](docs/Model/CreditCardHolder.md)
- [CreditCardHolders](docs/Model/CreditCardHolders.md)
- [CreditCardProfile](docs/Model/CreditCardProfile.md)
- [CreditCardSummary](docs/Model/CreditCardSummary.md)
- [CreditCardTransaction](docs/Model/CreditCardTransaction.md)
- [CreditCardTransactionType](docs/Model/CreditCardTransactionType.md)
- [DataConsentStatus](docs/Model/DataConsentStatus.md)
- [DataProcessingAgreement](docs/Model/DataProcessingAgreement.md)
- [DataProtectionOfficer](docs/Model/DataProtectionOfficer.md)
- [DataProvider](docs/Model/DataProvider.md)
- [DataProviderDetails](docs/Model/DataProviderDetails.md)
- [Debenture](docs/Model/Debenture.md)
- [DebentureTransaction](docs/Model/DebentureTransaction.md)
- [Deposit](docs/Model/Deposit.md)
- [DepositTransaction](docs/Model/DepositTransaction.md)
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
- [Epf](docs/Model/Epf.md)
- [EpfTransaction](docs/Model/EpfTransaction.md)
- [Equity](docs/Model/Equity.md)
- [EquityHolding](docs/Model/EquityHolding.md)
- [EquityHoldingMode](docs/Model/EquityHoldingMode.md)
- [EquityHoldings](docs/Model/EquityHoldings.md)
- [EquityInvestment](docs/Model/EquityInvestment.md)
- [EquitySummary](docs/Model/EquitySummary.md)
- [EquityTransaction](docs/Model/EquityTransaction.md)
- [Error](docs/Model/Error.md)
- [Etf](docs/Model/Etf.md)
- [EtfTransaction](docs/Model/EtfTransaction.md)
- [FinancialAccount](docs/Model/FinancialAccount.md)
- [FinancialAccountAif](docs/Model/FinancialAccountAif.md)
- [FinancialAccountAifAllOf](docs/Model/FinancialAccountAifAllOf.md)
- [FinancialAccountAifTransaction](docs/Model/FinancialAccountAifTransaction.md)
- [FinancialAccountAifTransactionAllOf](docs/Model/FinancialAccountAifTransactionAllOf.md)
- [FinancialAccountBillPayment](docs/Model/FinancialAccountBillPayment.md)
- [FinancialAccountBillPaymentAllOf](docs/Model/FinancialAccountBillPaymentAllOf.md)
- [FinancialAccountBillPaymentTransaction](docs/Model/FinancialAccountBillPaymentTransaction.md)
- [FinancialAccountBillPaymentTransactionAllOf](docs/Model/FinancialAccountBillPaymentTransactionAllOf.md)
- [FinancialAccountBond](docs/Model/FinancialAccountBond.md)
- [FinancialAccountBondAllOf](docs/Model/FinancialAccountBondAllOf.md)
- [FinancialAccountBondTransaction](docs/Model/FinancialAccountBondTransaction.md)
- [FinancialAccountBondTransactionAllOf](docs/Model/FinancialAccountBondTransactionAllOf.md)
- [FinancialAccountCIS](docs/Model/FinancialAccountCIS.md)
- [FinancialAccountCISAllOf](docs/Model/FinancialAccountCISAllOf.md)
- [FinancialAccountCISTransaction](docs/Model/FinancialAccountCISTransaction.md)
- [FinancialAccountCISTransactionAllOf](docs/Model/FinancialAccountCISTransactionAllOf.md)
- [FinancialAccountCategoryType](docs/Model/FinancialAccountCategoryType.md)
- [FinancialAccountCertificateOfDeposit](docs/Model/FinancialAccountCertificateOfDeposit.md)
- [FinancialAccountCertificateOfDepositAllOf](docs/Model/FinancialAccountCertificateOfDepositAllOf.md)
- [FinancialAccountCertificateOfDepositTransaction](docs/Model/FinancialAccountCertificateOfDepositTransaction.md)
- [FinancialAccountCertificateOfDepositTransactionAllOf](docs/Model/FinancialAccountCertificateOfDepositTransactionAllOf.md)
- [FinancialAccountCommercialPaper](docs/Model/FinancialAccountCommercialPaper.md)
- [FinancialAccountCommercialPaperAllOf](docs/Model/FinancialAccountCommercialPaperAllOf.md)
- [FinancialAccountCommercialPaperTransaction](docs/Model/FinancialAccountCommercialPaperTransaction.md)
- [FinancialAccountCommercialPaperTransactionAllOf](docs/Model/FinancialAccountCommercialPaperTransactionAllOf.md)
- [FinancialAccountCreditCard](docs/Model/FinancialAccountCreditCard.md)
- [FinancialAccountCreditCardAllOf](docs/Model/FinancialAccountCreditCardAllOf.md)
- [FinancialAccountCreditCardTransaction](docs/Model/FinancialAccountCreditCardTransaction.md)
- [FinancialAccountCreditCardTransactionAllOf](docs/Model/FinancialAccountCreditCardTransactionAllOf.md)
- [FinancialAccountDebenture](docs/Model/FinancialAccountDebenture.md)
- [FinancialAccountDebentureAllOf](docs/Model/FinancialAccountDebentureAllOf.md)
- [FinancialAccountDebentureTransaction](docs/Model/FinancialAccountDebentureTransaction.md)
- [FinancialAccountDebentureTransactionAllOf](docs/Model/FinancialAccountDebentureTransactionAllOf.md)
- [FinancialAccountDeposit](docs/Model/FinancialAccountDeposit.md)
- [FinancialAccountDepositAllOf](docs/Model/FinancialAccountDepositAllOf.md)
- [FinancialAccountDepositTransaction](docs/Model/FinancialAccountDepositTransaction.md)
- [FinancialAccountDepositTransactionAllOf](docs/Model/FinancialAccountDepositTransactionAllOf.md)
- [FinancialAccountDetailsRequired](docs/Model/FinancialAccountDetailsRequired.md)
- [FinancialAccountEpf](docs/Model/FinancialAccountEpf.md)
- [FinancialAccountEpfAllOf](docs/Model/FinancialAccountEpfAllOf.md)
- [FinancialAccountEpfTransaction](docs/Model/FinancialAccountEpfTransaction.md)
- [FinancialAccountEpfTransactionAllOf](docs/Model/FinancialAccountEpfTransactionAllOf.md)
- [FinancialAccountEquity](docs/Model/FinancialAccountEquity.md)
- [FinancialAccountEquityAllOf](docs/Model/FinancialAccountEquityAllOf.md)
- [FinancialAccountEquityTransaction](docs/Model/FinancialAccountEquityTransaction.md)
- [FinancialAccountEquityTransactionAllOf](docs/Model/FinancialAccountEquityTransactionAllOf.md)
- [FinancialAccountEtf](docs/Model/FinancialAccountEtf.md)
- [FinancialAccountEtfAllOf](docs/Model/FinancialAccountEtfAllOf.md)
- [FinancialAccountEtfTransaction](docs/Model/FinancialAccountEtfTransaction.md)
- [FinancialAccountEtfTransactionAllOf](docs/Model/FinancialAccountEtfTransactionAllOf.md)
- [FinancialAccountField](docs/Model/FinancialAccountField.md)
- [FinancialAccountGovtSecurity](docs/Model/FinancialAccountGovtSecurity.md)
- [FinancialAccountGovtSecurityAllOf](docs/Model/FinancialAccountGovtSecurityAllOf.md)
- [FinancialAccountGovtSecurityTransaction](docs/Model/FinancialAccountGovtSecurityTransaction.md)
- [FinancialAccountGovtSecurityTransactionAllOf](docs/Model/FinancialAccountGovtSecurityTransactionAllOf.md)
- [FinancialAccountIdr](docs/Model/FinancialAccountIdr.md)
- [FinancialAccountIdrAllOf](docs/Model/FinancialAccountIdrAllOf.md)
- [FinancialAccountIdrTransaction](docs/Model/FinancialAccountIdrTransaction.md)
- [FinancialAccountIdrTransactionAllOf](docs/Model/FinancialAccountIdrTransactionAllOf.md)
- [FinancialAccountInsurancePolicy](docs/Model/FinancialAccountInsurancePolicy.md)
- [FinancialAccountInsurancePolicyAllOf](docs/Model/FinancialAccountInsurancePolicyAllOf.md)
- [FinancialAccountInsurancePolicyTransaction](docs/Model/FinancialAccountInsurancePolicyTransaction.md)
- [FinancialAccountInsurancePolicyTransactionAllOf](docs/Model/FinancialAccountInsurancePolicyTransactionAllOf.md)
- [FinancialAccountInvit](docs/Model/FinancialAccountInvit.md)
- [FinancialAccountInvitAllOf](docs/Model/FinancialAccountInvitAllOf.md)
- [FinancialAccountInvitTransaction](docs/Model/FinancialAccountInvitTransaction.md)
- [FinancialAccountInvitTransactionAllOf](docs/Model/FinancialAccountInvitTransactionAllOf.md)
- [FinancialAccountLoan](docs/Model/FinancialAccountLoan.md)
- [FinancialAccountLoanAllOf](docs/Model/FinancialAccountLoanAllOf.md)
- [FinancialAccountLoanTransaction](docs/Model/FinancialAccountLoanTransaction.md)
- [FinancialAccountLoanTransactionAllOf](docs/Model/FinancialAccountLoanTransactionAllOf.md)
- [FinancialAccountMutualFund](docs/Model/FinancialAccountMutualFund.md)
- [FinancialAccountMutualFundAllOf](docs/Model/FinancialAccountMutualFundAllOf.md)
- [FinancialAccountMutualFundTransaction](docs/Model/FinancialAccountMutualFundTransaction.md)
- [FinancialAccountMutualFundTransactionAllOf](docs/Model/FinancialAccountMutualFundTransactionAllOf.md)
- [FinancialAccountNps](docs/Model/FinancialAccountNps.md)
- [FinancialAccountNpsAllOf](docs/Model/FinancialAccountNpsAllOf.md)
- [FinancialAccountNpsTransaction](docs/Model/FinancialAccountNpsTransaction.md)
- [FinancialAccountNpsTransactionAllOf](docs/Model/FinancialAccountNpsTransactionAllOf.md)
- [FinancialAccountPpf](docs/Model/FinancialAccountPpf.md)
- [FinancialAccountPpfAllOf](docs/Model/FinancialAccountPpfAllOf.md)
- [FinancialAccountPpfTransaction](docs/Model/FinancialAccountPpfTransaction.md)
- [FinancialAccountPpfTransactionAllOf](docs/Model/FinancialAccountPpfTransactionAllOf.md)
- [FinancialAccountRecurringDeposit](docs/Model/FinancialAccountRecurringDeposit.md)
- [FinancialAccountRecurringDepositAllOf](docs/Model/FinancialAccountRecurringDepositAllOf.md)
- [FinancialAccountRecurringDepositTransaction](docs/Model/FinancialAccountRecurringDepositTransaction.md)
- [FinancialAccountRecurringDepositTransactionAllOf](docs/Model/FinancialAccountRecurringDepositTransactionAllOf.md)
- [FinancialAccountReit](docs/Model/FinancialAccountReit.md)
- [FinancialAccountReitAllOf](docs/Model/FinancialAccountReitAllOf.md)
- [FinancialAccountReitTransaction](docs/Model/FinancialAccountReitTransaction.md)
- [FinancialAccountReitTransactionAllOf](docs/Model/FinancialAccountReitTransactionAllOf.md)
- [FinancialAccountSip](docs/Model/FinancialAccountSip.md)
- [FinancialAccountSipAllOf](docs/Model/FinancialAccountSipAllOf.md)
- [FinancialAccountSipTransaction](docs/Model/FinancialAccountSipTransaction.md)
- [FinancialAccountSipTransactionAllOf](docs/Model/FinancialAccountSipTransactionAllOf.md)
- [FinancialAccountSubCategoryType](docs/Model/FinancialAccountSubCategoryType.md)
- [FinancialAccountTermDeposit](docs/Model/FinancialAccountTermDeposit.md)
- [FinancialAccountTermDepositAllOf](docs/Model/FinancialAccountTermDepositAllOf.md)
- [FinancialAccountTermDepositTransaction](docs/Model/FinancialAccountTermDepositTransaction.md)
- [FinancialAccountTermDepositTransactionAllOf](docs/Model/FinancialAccountTermDepositTransactionAllOf.md)
- [FinancialAccountTransaction](docs/Model/FinancialAccountTransaction.md)
- [FinancialAccountTransactionPeriod](docs/Model/FinancialAccountTransactionPeriod.md)
- [FinancialAccountUlip](docs/Model/FinancialAccountUlip.md)
- [FinancialAccountUlipAllOf](docs/Model/FinancialAccountUlipAllOf.md)
- [FinancialAccountUlipTransaction](docs/Model/FinancialAccountUlipTransaction.md)
- [FinancialAccountUlipTransactionAllOf](docs/Model/FinancialAccountUlipTransactionAllOf.md)
- [GovtSecurity](docs/Model/GovtSecurity.md)
- [GovtSecurityTransaction](docs/Model/GovtSecurityTransaction.md)
- [Holder](docs/Model/Holder.md)
- [Holders](docs/Model/Holders.md)
- [HoldersType](docs/Model/HoldersType.md)
- [HoldingNominee](docs/Model/HoldingNominee.md)
- [IdentificationStrategy](docs/Model/IdentificationStrategy.md)
- [Identifier](docs/Model/Identifier.md)
- [IdentityField](docs/Model/IdentityField.md)
- [Idr](docs/Model/Idr.md)
- [IdrTransaction](docs/Model/IdrTransaction.md)
- [IndividualConsentRequestDetails](docs/Model/IndividualConsentRequestDetails.md)
- [IndividualConsentRequestTemplateDetails](docs/Model/IndividualConsentRequestTemplateDetails.md)
- [IndividualConsentRequestTemplateDetailsDataFrequency](docs/Model/IndividualConsentRequestTemplateDetailsDataFrequency.md)
- [IndividualConsentRequestTemplateDetailsDataLife](docs/Model/IndividualConsentRequestTemplateDetailsDataLife.md)
- [IndividualConsentRequestTemplateDetailsRequestLife](docs/Model/IndividualConsentRequestTemplateDetailsRequestLife.md)
- [InsurancePolicy](docs/Model/InsurancePolicy.md)
- [InsurancePolicyTransaction](docs/Model/InsurancePolicyTransaction.md)
- [Invit](docs/Model/Invit.md)
- [InvitTransaction](docs/Model/InvitTransaction.md)
- [IssuedDocument](docs/Model/IssuedDocument.md)
- [KeyValuePair](docs/Model/KeyValuePair.md)
- [Life](docs/Model/Life.md)
- [Loan](docs/Model/Loan.md)
- [LoanTransaction](docs/Model/LoanTransaction.md)
- [MedicalRecordField](docs/Model/MedicalRecordField.md)
- [MutualFund](docs/Model/MutualFund.md)
- [MutualFundFundType](docs/Model/MutualFundFundType.md)
- [MutualFundHolding](docs/Model/MutualFundHolding.md)
- [MutualFundHoldingMode](docs/Model/MutualFundHoldingMode.md)
- [MutualFundHoldings](docs/Model/MutualFundHoldings.md)
- [MutualFundInvestment](docs/Model/MutualFundInvestment.md)
- [MutualFundSchemeCategory](docs/Model/MutualFundSchemeCategory.md)
- [MutualFundSchemeOption](docs/Model/MutualFundSchemeOption.md)
- [MutualFundSchemePlan](docs/Model/MutualFundSchemePlan.md)
- [MutualFundSchemeType](docs/Model/MutualFundSchemeType.md)
- [MutualFundSummary](docs/Model/MutualFundSummary.md)
- [MutualFundTransaction](docs/Model/MutualFundTransaction.md)
- [MutualFundTransactionType](docs/Model/MutualFundTransactionType.md)
- [Nps](docs/Model/Nps.md)
- [NpsTransaction](docs/Model/NpsTransaction.md)
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
- [Ppf](docs/Model/Ppf.md)
- [PpfTransaction](docs/Model/PpfTransaction.md)
- [Profile](docs/Model/Profile.md)
- [PushUriRequest](docs/Model/PushUriRequest.md)
- [PushUriResponse](docs/Model/PushUriResponse.md)
- [RecurringDeposit](docs/Model/RecurringDeposit.md)
- [RecurringDepositTransaction](docs/Model/RecurringDepositTransaction.md)
- [Reit](docs/Model/Reit.md)
- [ReitTransaction](docs/Model/ReitTransaction.md)
- [SelectedFinancialAccountType](docs/Model/SelectedFinancialAccountType.md)
- [Sip](docs/Model/Sip.md)
- [SipTransaction](docs/Model/SipTransaction.md)
- [SupportedDocumentType](docs/Model/SupportedDocumentType.md)
- [SupportedEntityType](docs/Model/SupportedEntityType.md)
- [SupportedIdentifier](docs/Model/SupportedIdentifier.md)
- [TermDeposit](docs/Model/TermDeposit.md)
- [TermDepositTransaction](docs/Model/TermDepositTransaction.md)
- [Ulip](docs/Model/Ulip.md)
- [UlipTransaction](docs/Model/UlipTransaction.md)
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
