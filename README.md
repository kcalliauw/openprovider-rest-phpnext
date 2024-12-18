# openprovider-rest

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kcalliauw/openprovider-rest-phpnext.git"
    }
  ],
  "require": {
    "kcalliauw/openprovider-rest-phpnext": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/openprovider-rest/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\AdditionalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$operation = 'operation_example'; // string | The operation.

try {
    $result = $apiInstance->getAdditionalData($id, $domain_name, $domain_extension, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalDataApi->getAdditionalData: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.openprovider.eu*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdditionalDataApi* | [**getAdditionalData**](docs/Api/AdditionalDataApi.md#getadditionaldata) | **GET** /v1beta/domains/{id}/additional-data | Get additional data
*ApproverEmailApi* | [**listApproverEmails**](docs/Api/ApproverEmailApi.md#listapproveremails) | **GET** /v1beta/ssl/approver-emails | List approver emails
*AuthApi* | [**login**](docs/Api/AuthApi.md#login) | **POST** /v1beta/auth/login | Login with username and password
*AuthCodeApi* | [**getAuthCode**](docs/Api/AuthCodeApi.md#getauthcode) | **GET** /v1beta/domains/{id}/authcode | Get auth code
*AuthCodeApi* | [**resetAuthCode**](docs/Api/AuthCodeApi.md#resetauthcode) | **POST** /v1beta/domains/{id}/authcode/reset | Reset auth code
*ContactServiceApi* | [**createContact**](docs/Api/ContactServiceApi.md#createcontact) | **POST** /v1beta/contacts | Create contact
*ContactServiceApi* | [**deleteContact**](docs/Api/ContactServiceApi.md#deletecontact) | **DELETE** /v1beta/contacts/{id} | Delete contact
*ContactServiceApi* | [**getContact**](docs/Api/ContactServiceApi.md#getcontact) | **GET** /v1beta/contacts/{id} | Get contact
*ContactServiceApi* | [**listContacts**](docs/Api/ContactServiceApi.md#listcontacts) | **GET** /v1beta/contacts | List contacts
*ContactServiceApi* | [**updateContact**](docs/Api/ContactServiceApi.md#updatecontact) | **PUT** /v1beta/contacts/{id} | Update contact
*CsrApi* | [**createCsr**](docs/Api/CsrApi.md#createcsr) | **POST** /v1beta/ssl/csr | Create csr
*CsrApi* | [**decodeCsr**](docs/Api/CsrApi.md#decodecsr) | **POST** /v1beta/ssl/csr/decode | Decode csr
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /v1beta/customers | Create customer
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /v1beta/customers/{handle} | Delete customer
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /v1beta/customers/{handle} | Get customer
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /v1beta/customers | List customers
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /v1beta/customers/{handle} | Update customer
*CustomerAdditionalDataApi* | [**getData**](docs/Api/CustomerAdditionalDataApi.md#getdata) | **GET** /v1beta/domains/{id}/additional-data/customers | Get data
*DomainServiceApi* | [**approveTransfer**](docs/Api/DomainServiceApi.md#approvetransfer) | **POST** /v1beta/domains/{id}/transfer/approve | Approve transfer
*DomainServiceApi* | [**checkDomain**](docs/Api/DomainServiceApi.md#checkdomain) | **POST** /v1beta/domains/check | Check domain
*DomainServiceApi* | [**createDomain**](docs/Api/DomainServiceApi.md#createdomain) | **POST** /v1beta/domains | Create domain
*DomainServiceApi* | [**deleteDomain**](docs/Api/DomainServiceApi.md#deletedomain) | **DELETE** /v1beta/domains/{id} | Delete domain
*DomainServiceApi* | [**getDomain**](docs/Api/DomainServiceApi.md#getdomain) | **GET** /v1beta/domains/{id} | Get domain
*DomainServiceApi* | [**listDomains**](docs/Api/DomainServiceApi.md#listdomains) | **GET** /v1beta/domains | List domains
*DomainServiceApi* | [**renewDomain**](docs/Api/DomainServiceApi.md#renewdomain) | **POST** /v1beta/domains/{id}/renew | Renew domain
*DomainServiceApi* | [**restoreDomain**](docs/Api/DomainServiceApi.md#restoredomain) | **POST** /v1beta/domains/{id}/restore | Restore domain
*DomainServiceApi* | [**sendFoa1**](docs/Api/DomainServiceApi.md#sendfoa1) | **POST** /v1beta/domains/{id}/transfer/send-foa1 | Send foa1
*DomainServiceApi* | [**tradeDomain**](docs/Api/DomainServiceApi.md#tradedomain) | **POST** /v1beta/domains/trade | Trade domain
*DomainServiceApi* | [**transferDomain**](docs/Api/DomainServiceApi.md#transferdomain) | **POST** /v1beta/domains/transfer | Transfer domain
*DomainServiceApi* | [**tryAgainLastOperation**](docs/Api/DomainServiceApi.md#tryagainlastoperation) | **POST** /v1beta/domains/{id}/last-operation/restart | Try again last operation
*DomainServiceApi* | [**updateDomain**](docs/Api/DomainServiceApi.md#updatedomain) | **PUT** /v1beta/domains/{id} | Update domain
*EmailApi* | [**createEmail**](docs/Api/EmailApi.md#createemail) | **POST** /v1beta/emails | Create email
*EmailApi* | [**deleteEmail**](docs/Api/EmailApi.md#deleteemail) | **DELETE** /v1beta/emails/{id} | Delete email
*EmailApi* | [**listEmails**](docs/Api/EmailApi.md#listemails) | **GET** /v1beta/emails | List emails
*EmailApi* | [**updateEmail**](docs/Api/EmailApi.md#updateemail) | **PUT** /v1beta/emails/{id} | Update email
*EmailVerificationApi* | [**listDomainEmailVerifications**](docs/Api/EmailVerificationApi.md#listdomainemailverifications) | **GET** /v1beta/customers/verifications/emails/domains | List domain email verifications
*EmailVerificationApi* | [**restartEmailVerification**](docs/Api/EmailVerificationApi.md#restartemailverification) | **POST** /v1beta/customers/verifications/emails/restart | Restart email verification
*EmailVerificationApi* | [**startEmailVerification**](docs/Api/EmailVerificationApi.md#startemailverification) | **POST** /v1beta/customers/verifications/emails/start | Start email verification
*InvoiceServiceApi* | [**listInvoices**](docs/Api/InvoiceServiceApi.md#listinvoices) | **GET** /v1beta/invoices | List invoices
*LicenseServiceApi* | [**createPleskLicense**](docs/Api/LicenseServiceApi.md#createplesklicense) | **POST** /v1beta/licenses/plesk | Create plesk license
*LicenseServiceApi* | [**createVirtuozzoLicense**](docs/Api/LicenseServiceApi.md#createvirtuozzolicense) | **POST** /v1beta/licenses/virtuozzo | Create virtuozzo license
*LicenseServiceApi* | [**deletePleskLicense**](docs/Api/LicenseServiceApi.md#deleteplesklicense) | **DELETE** /v1beta/licenses/plesk/{key_id} | Delete plesk license
*LicenseServiceApi* | [**deleteVirtuozzoLicense**](docs/Api/LicenseServiceApi.md#deletevirtuozzolicense) | **DELETE** /v1beta/licenses/virtuozzo/{key_id} | Delete virtuozzo license
*LicenseServiceApi* | [**getPleskKey**](docs/Api/LicenseServiceApi.md#getpleskkey) | **GET** /v1beta/licenses/plesk/key/{key_id} | Get plesk key
*LicenseServiceApi* | [**getPleskLicense**](docs/Api/LicenseServiceApi.md#getplesklicense) | **GET** /v1beta/licenses/plesk/{key_id} | Get plesk license
*LicenseServiceApi* | [**getVirtuozzoKey**](docs/Api/LicenseServiceApi.md#getvirtuozzokey) | **GET** /v1beta/licenses/virtuozzo/{key_id}/key | Get virtuozzo key
*LicenseServiceApi* | [**getVirtuozzoLicense**](docs/Api/LicenseServiceApi.md#getvirtuozzolicense) | **GET** /v1beta/licenses/virtuozzo/{key_id} | Get virtuozzo license
*LicenseServiceApi* | [**listItems**](docs/Api/LicenseServiceApi.md#listitems) | **GET** /v1beta/licenses/items | List items
*LicenseServiceApi* | [**listLicensesWithPriceVersion**](docs/Api/LicenseServiceApi.md#listlicenseswithpriceversion) | **GET** /v1beta/licenses | List licenses with price version
*LicenseServiceApi* | [**listPleskLicenses**](docs/Api/LicenseServiceApi.md#listplesklicenses) | **GET** /v1beta/licenses/plesk | List plesk licenses
*LicenseServiceApi* | [**listVirtuozzoLicenses**](docs/Api/LicenseServiceApi.md#listvirtuozzolicenses) | **GET** /v1beta/licenses/virtuozzo | List virtuozzo licenses
*LicenseServiceApi* | [**resetHwid**](docs/Api/LicenseServiceApi.md#resethwid) | **POST** /v1beta/licenses/hwids/reset/{product}/{key_id} | Reset hwid
*LicenseServiceApi* | [**updatePleskLicense**](docs/Api/LicenseServiceApi.md#updateplesklicense) | **PUT** /v1beta/licenses/plesk/{key_id} | Update plesk license
*LicenseServiceApi* | [**updateVirtuozzoLicense**](docs/Api/LicenseServiceApi.md#updatevirtuozzolicense) | **PUT** /v1beta/licenses/virtuozzo/{key_id} | Update virtuozzo license
*NameserverServiceApi* | [**createNameserver**](docs/Api/NameserverServiceApi.md#createnameserver) | **POST** /v1beta/dns/nameservers | Create nameserver
*NameserverServiceApi* | [**deleteNameserver**](docs/Api/NameserverServiceApi.md#deletenameserver) | **DELETE** /v1beta/dns/nameservers/{name} | Delete nameserver
*NameserverServiceApi* | [**getNameserver**](docs/Api/NameserverServiceApi.md#getnameserver) | **GET** /v1beta/dns/nameservers/{name} | Get nameserver
*NameserverServiceApi* | [**listNameservers**](docs/Api/NameserverServiceApi.md#listnameservers) | **GET** /v1beta/dns/nameservers | List nameservers
*NameserverServiceApi* | [**updateNameserver**](docs/Api/NameserverServiceApi.md#updatenameserver) | **PUT** /v1beta/dns/nameservers/{name} | Update nameserver
*NsGroupServiceApi* | [**createGroup**](docs/Api/NsGroupServiceApi.md#creategroup) | **POST** /v1beta/dns/nameservers/groups | Create group
*NsGroupServiceApi* | [**deleteGroup**](docs/Api/NsGroupServiceApi.md#deletegroup) | **DELETE** /v1beta/dns/nameservers/groups/{ns_group} | Delete group
*NsGroupServiceApi* | [**getGroup**](docs/Api/NsGroupServiceApi.md#getgroup) | **GET** /v1beta/dns/nameservers/groups/{ns_group} | Get group
*NsGroupServiceApi* | [**listGroups**](docs/Api/NsGroupServiceApi.md#listgroups) | **GET** /v1beta/dns/nameservers/groups | List groups
*NsGroupServiceApi* | [**updateGroup**](docs/Api/NsGroupServiceApi.md#updategroup) | **PUT** /v1beta/dns/nameservers/groups/{ns_group} | Update group
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /v1beta/ssl/orders/{id}/cancel | Cancel order
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /v1beta/ssl/orders | Create order
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /v1beta/ssl/orders/{id} | Get order
*OrderApi* | [**listOrders**](docs/Api/OrderApi.md#listorders) | **GET** /v1beta/ssl/orders | List orders
*OrderApi* | [**reissueOrder**](docs/Api/OrderApi.md#reissueorder) | **POST** /v1beta/ssl/orders/{id}/reissue | Reissue order
*OrderApi* | [**renewOrder**](docs/Api/OrderApi.md#reneworder) | **POST** /v1beta/ssl/orders/{id}/renew | Renew order
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PUT** /v1beta/ssl/orders/{id} | Update order
*OrderApproverEmailApi* | [**resendApproverEmail**](docs/Api/OrderApproverEmailApi.md#resendapproveremail) | **POST** /v1beta/ssl/orders/{id}/approver-email/resend | Resend approver email
*OrderApproverEmailApi* | [**updateApproverEmailAddress**](docs/Api/OrderApproverEmailApi.md#updateapproveremailaddress) | **PUT** /v1beta/ssl/orders/{id}/approver-email | Update approver email address
*OtpTokenApi* | [**createOtpToken**](docs/Api/OtpTokenApi.md#createotptoken) | **POST** /v1beta/ssl/orders/{id}/otp-tokens | Create otp token
*PaymentApi* | [**listPayments**](docs/Api/PaymentApi.md#listpayments) | **GET** /v1beta/payments | List payments
*PriceServiceApi* | [**getPrice**](docs/Api/PriceServiceApi.md#getprice) | **GET** /v1beta/domains/prices | Get price
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /v1beta/ssl/products/{id} | Get product
*ProductApi* | [**listProducts**](docs/Api/ProductApi.md#listproducts) | **GET** /v1beta/ssl/products | List products
*ResellerServiceApi* | [**getReseller**](docs/Api/ResellerServiceApi.md#getreseller) | **GET** /v1beta/resellers | Get reseller
*ResellerServiceApi* | [**updateReseller**](docs/Api/ResellerServiceApi.md#updatereseller) | **PUT** /v1beta/resellers/{id} | Update reseller
*SettingsApi* | [**getSettings**](docs/Api/SettingsApi.md#getsettings) | **GET** /v1beta/resellers/settings | Get settings
*StatisticsApi* | [**getStatistics**](docs/Api/StatisticsApi.md#getstatistics) | **GET** /v1beta/resellers/statistics | Get statistics
*TagServiceApi* | [**createTag**](docs/Api/TagServiceApi.md#createtag) | **POST** /v1beta/tags | Create tag
*TagServiceApi* | [**deleteTag**](docs/Api/TagServiceApi.md#deletetag) | **DELETE** /v1beta/tags | Delete tag
*TagServiceApi* | [**listTags**](docs/Api/TagServiceApi.md#listtags) | **GET** /v1beta/tags | List tags
*TemplateServiceApi* | [**createTemplate**](docs/Api/TemplateServiceApi.md#createtemplate) | **POST** /v1beta/dns/templates | Create template
*TemplateServiceApi* | [**deleteTemplate**](docs/Api/TemplateServiceApi.md#deletetemplate) | **DELETE** /v1beta/dns/templates/{id} | Delete template
*TemplateServiceApi* | [**getTemplate**](docs/Api/TemplateServiceApi.md#gettemplate) | **GET** /v1beta/dns/templates/{id} | Get template
*TemplateServiceApi* | [**listTemplates**](docs/Api/TemplateServiceApi.md#listtemplates) | **GET** /v1beta/dns/templates | List templates
*TldServiceApi* | [**getTld**](docs/Api/TldServiceApi.md#gettld) | **GET** /v1beta/tlds/{name} | Get tld
*TldServiceApi* | [**listTlds**](docs/Api/TldServiceApi.md#listtlds) | **GET** /v1beta/tlds | List tlds
*TransactionApi* | [**listTransactions**](docs/Api/TransactionApi.md#listtransactions) | **GET** /v1beta/transactions | List transactions
*ZoneRecordServiceApi* | [**listZoneRecords**](docs/Api/ZoneRecordServiceApi.md#listzonerecords) | **GET** /v1beta/dns/zones/{name}/records | List zone records
*ZoneServiceApi* | [**createZone**](docs/Api/ZoneServiceApi.md#createzone) | **POST** /v1beta/dns/zones | Create zone
*ZoneServiceApi* | [**deleteZone**](docs/Api/ZoneServiceApi.md#deletezone) | **DELETE** /v1beta/dns/zones/{name} | Delete zone
*ZoneServiceApi* | [**getZone**](docs/Api/ZoneServiceApi.md#getzone) | **GET** /v1beta/dns/zones/{name} | Get zone
*ZoneServiceApi* | [**listZones**](docs/Api/ZoneServiceApi.md#listzones) | **GET** /v1beta/dns/zones | List zones
*ZoneServiceApi* | [**updateZone**](docs/Api/ZoneServiceApi.md#updatezone) | **PUT** /v1beta/dns/zones/{name} | Update zone

## Models

- [AdditionalDataDomain](docs/Model/AdditionalDataDomain.md)
- [AdditionalDataGetAdditionalDataResponse](docs/Model/AdditionalDataGetAdditionalDataResponse.md)
- [AdditionalDataSelectOption](docs/Model/AdditionalDataSelectOption.md)
- [AdditionalDataSpecification](docs/Model/AdditionalDataSpecification.md)
- [ApproveremailListApproverEmailsResponse](docs/Model/ApproveremailListApproverEmailsResponse.md)
- [ApproveremailResendApproverEmailRequest](docs/Model/ApproveremailResendApproverEmailRequest.md)
- [ApproveremailResendApproverEmailResponse](docs/Model/ApproveremailResendApproverEmailResponse.md)
- [ApproveremailResendApproverEmailResponseData](docs/Model/ApproveremailResendApproverEmailResponseData.md)
- [ApproveremailUpdateApproverEmailAddressRequest](docs/Model/ApproveremailUpdateApproverEmailAddressRequest.md)
- [ApproveremailUpdateApproverEmailAddressResponse](docs/Model/ApproveremailUpdateApproverEmailAddressResponse.md)
- [ApproveremailUpdateApproverEmailAddressResponseData](docs/Model/ApproveremailUpdateApproverEmailAddressResponseData.md)
- [AuthLoginRequest](docs/Model/AuthLoginRequest.md)
- [AuthLoginResponse](docs/Model/AuthLoginResponse.md)
- [AuthLoginResponseData](docs/Model/AuthLoginResponseData.md)
- [AuthcodeAuthInfo](docs/Model/AuthcodeAuthInfo.md)
- [AuthcodeDomain](docs/Model/AuthcodeDomain.md)
- [AuthcodeGetAuthCodeResponse](docs/Model/AuthcodeGetAuthCodeResponse.md)
- [AuthcodeGetAuthCodeResponseData](docs/Model/AuthcodeGetAuthCodeResponseData.md)
- [AuthcodeResetAuthCodeRequest](docs/Model/AuthcodeResetAuthCodeRequest.md)
- [AuthcodeResetAuthCodeResponse](docs/Model/AuthcodeResetAuthCodeResponse.md)
- [AuthcodeResetAuthCodeResponseData](docs/Model/AuthcodeResetAuthCodeResponseData.md)
- [AuthcodeRgpStatuses](docs/Model/AuthcodeRgpStatuses.md)
- [ContactAdditionalData](docs/Model/ContactAdditionalData.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [ContactClientIpList](docs/Model/ContactClientIpList.md)
- [ContactContact](docs/Model/ContactContact.md)
- [ContactCreateContactRequest](docs/Model/ContactCreateContactRequest.md)
- [ContactCreateContactResponse](docs/Model/ContactCreateContactResponse.md)
- [ContactCreateContactResponseData](docs/Model/ContactCreateContactResponseData.md)
- [ContactDeleteContactResponse](docs/Model/ContactDeleteContactResponse.md)
- [ContactDeleteContactResponseData](docs/Model/ContactDeleteContactResponseData.md)
- [ContactGetContactResponse](docs/Model/ContactGetContactResponse.md)
- [ContactListContactsResponse](docs/Model/ContactListContactsResponse.md)
- [ContactListContactsResponseData](docs/Model/ContactListContactsResponseData.md)
- [ContactName](docs/Model/ContactName.md)
- [ContactPhone](docs/Model/ContactPhone.md)
- [ContactUpdateContactRequest](docs/Model/ContactUpdateContactRequest.md)
- [ContactUpdateContactResponse](docs/Model/ContactUpdateContactResponse.md)
- [ContactUpdateContactResponseData](docs/Model/ContactUpdateContactResponseData.md)
- [CsrCreateCsrRequest](docs/Model/CsrCreateCsrRequest.md)
- [CsrCreateCsrResponse](docs/Model/CsrCreateCsrResponse.md)
- [CsrCreateCsrResponseData](docs/Model/CsrCreateCsrResponseData.md)
- [CsrCsrPublicKey](docs/Model/CsrCsrPublicKey.md)
- [CsrCsrSubject](docs/Model/CsrCsrSubject.md)
- [CsrDecodeCsrRequest](docs/Model/CsrDecodeCsrRequest.md)
- [CsrDecodeCsrResponse](docs/Model/CsrDecodeCsrResponse.md)
- [CsrDecodeCsrResponseData](docs/Model/CsrDecodeCsrResponseData.md)
- [CustomerAdditionalData](docs/Model/CustomerAdditionalData.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerCreateCustomerRequest](docs/Model/CustomerCreateCustomerRequest.md)
- [CustomerCreateCustomerResponse](docs/Model/CustomerCreateCustomerResponse.md)
- [CustomerCreateCustomerResponseData](docs/Model/CustomerCreateCustomerResponseData.md)
- [CustomerDeleteCustomerResponse](docs/Model/CustomerDeleteCustomerResponse.md)
- [CustomerDeleteCustomerResponseData](docs/Model/CustomerDeleteCustomerResponseData.md)
- [CustomerExtensionAdditionalData](docs/Model/CustomerExtensionAdditionalData.md)
- [CustomerExtensionData](docs/Model/CustomerExtensionData.md)
- [CustomerFax](docs/Model/CustomerFax.md)
- [CustomerGetCustomerResponse](docs/Model/CustomerGetCustomerResponse.md)
- [CustomerGetCustomerResponseData](docs/Model/CustomerGetCustomerResponseData.md)
- [CustomerGetDataResponse](docs/Model/CustomerGetDataResponse.md)
- [CustomerListCustomersResponse](docs/Model/CustomerListCustomersResponse.md)
- [CustomerListCustomersResponseData](docs/Model/CustomerListCustomersResponseData.md)
- [CustomerListCustomersResponseDataResults](docs/Model/CustomerListCustomersResponseDataResults.md)
- [CustomerName](docs/Model/CustomerName.md)
- [CustomerPhone](docs/Model/CustomerPhone.md)
- [CustomerTags](docs/Model/CustomerTags.md)
- [CustomerUpdateCustomerRequest](docs/Model/CustomerUpdateCustomerRequest.md)
- [CustomerUpdateCustomerResponse](docs/Model/CustomerUpdateCustomerResponse.md)
- [CustomerUpdateCustomerResponseData](docs/Model/CustomerUpdateCustomerResponseData.md)
- [DomainAbuseDetails](docs/Model/DomainAbuseDetails.md)
- [DomainAdditionalData](docs/Model/DomainAdditionalData.md)
- [DomainApiHistory](docs/Model/DomainApiHistory.md)
- [DomainApproveTransferRequest](docs/Model/DomainApproveTransferRequest.md)
- [DomainApproveTransferResponse](docs/Model/DomainApproveTransferResponse.md)
- [DomainApproveTransferResponseData](docs/Model/DomainApproveTransferResponseData.md)
- [DomainCheckAdditionalData](docs/Model/DomainCheckAdditionalData.md)
- [DomainCheckDomainPrice](docs/Model/DomainCheckDomainPrice.md)
- [DomainCheckDomainRequest](docs/Model/DomainCheckDomainRequest.md)
- [DomainCheckDomainResponse](docs/Model/DomainCheckDomainResponse.md)
- [DomainCheckDomainResponseData](docs/Model/DomainCheckDomainResponseData.md)
- [DomainClientHold](docs/Model/DomainClientHold.md)
- [DomainClientTransferProhibited](docs/Model/DomainClientTransferProhibited.md)
- [DomainCommonPrice](docs/Model/DomainCommonPrice.md)
- [DomainContacts](docs/Model/DomainContacts.md)
- [DomainCreateDomainRequest](docs/Model/DomainCreateDomainRequest.md)
- [DomainCreateDomainResponse](docs/Model/DomainCreateDomainResponse.md)
- [DomainCreateDomainResponseData](docs/Model/DomainCreateDomainResponseData.md)
- [DomainDeleteDomainResponse](docs/Model/DomainDeleteDomainResponse.md)
- [DomainDeleteDomainResponseData](docs/Model/DomainDeleteDomainResponseData.md)
- [DomainDnssecKey](docs/Model/DomainDnssecKey.md)
- [DomainDomain](docs/Model/DomainDomain.md)
- [DomainDomains](docs/Model/DomainDomains.md)
- [DomainGetDomainResponse](docs/Model/DomainGetDomainResponse.md)
- [DomainGetDomainResponseData](docs/Model/DomainGetDomainResponseData.md)
- [DomainHistory](docs/Model/DomainHistory.md)
- [DomainListDomainsRequestOrderBy](docs/Model/DomainListDomainsRequestOrderBy.md)
- [DomainListDomainsRequestResponseField](docs/Model/DomainListDomainsRequestResponseField.md)
- [DomainListDomainsResponse](docs/Model/DomainListDomainsResponse.md)
- [DomainListDomainsResponseData](docs/Model/DomainListDomainsResponseData.md)
- [DomainNameserver](docs/Model/DomainNameserver.md)
- [DomainOwner](docs/Model/DomainOwner.md)
- [DomainPremiumPrice](docs/Model/DomainPremiumPrice.md)
- [DomainPrice](docs/Model/DomainPrice.md)
- [DomainRegistryStatuses](docs/Model/DomainRegistryStatuses.md)
- [DomainRenewDomainRequest](docs/Model/DomainRenewDomainRequest.md)
- [DomainRenewDomainResponse](docs/Model/DomainRenewDomainResponse.md)
- [DomainRenewDomainResponseData](docs/Model/DomainRenewDomainResponseData.md)
- [DomainRestoreDomainRequest](docs/Model/DomainRestoreDomainRequest.md)
- [DomainRestoreDomainResponse](docs/Model/DomainRestoreDomainResponse.md)
- [DomainRestoreDomainResponseData](docs/Model/DomainRestoreDomainResponseData.md)
- [DomainRestorePrice](docs/Model/DomainRestorePrice.md)
- [DomainSendFoa1Request](docs/Model/DomainSendFoa1Request.md)
- [DomainSendFoa1Response](docs/Model/DomainSendFoa1Response.md)
- [DomainSendFoa1ResponseData](docs/Model/DomainSendFoa1ResponseData.md)
- [DomainTradeDomainRequest](docs/Model/DomainTradeDomainRequest.md)
- [DomainTradeDomainResponse](docs/Model/DomainTradeDomainResponse.md)
- [DomainTradeDomainResponseData](docs/Model/DomainTradeDomainResponseData.md)
- [DomainTransferAdditionalData](docs/Model/DomainTransferAdditionalData.md)
- [DomainTransferDomainRequest](docs/Model/DomainTransferDomainRequest.md)
- [DomainTransferDomainResponse](docs/Model/DomainTransferDomainResponse.md)
- [DomainTransferDomainResponseData](docs/Model/DomainTransferDomainResponseData.md)
- [DomainTryAgainLastOperationRequest](docs/Model/DomainTryAgainLastOperationRequest.md)
- [DomainTryAgainLastOperationResponse](docs/Model/DomainTryAgainLastOperationResponse.md)
- [DomainTryAgainLastOperationResponseData](docs/Model/DomainTryAgainLastOperationResponseData.md)
- [DomainUpdateAdditionalData](docs/Model/DomainUpdateAdditionalData.md)
- [DomainUpdateDomainRequest](docs/Model/DomainUpdateDomainRequest.md)
- [DomainUpdateDomainResponse](docs/Model/DomainUpdateDomainResponse.md)
- [DomainUpdateDomainResponseData](docs/Model/DomainUpdateDomainResponseData.md)
- [EmailCreateEmailRequest](docs/Model/EmailCreateEmailRequest.md)
- [EmailCreateEmailResponse](docs/Model/EmailCreateEmailResponse.md)
- [EmailCreateEmailResponseData](docs/Model/EmailCreateEmailResponseData.md)
- [EmailDeleteEmailResponse](docs/Model/EmailDeleteEmailResponse.md)
- [EmailDeleteEmailResponseData](docs/Model/EmailDeleteEmailResponseData.md)
- [EmailDomainEmailVerification](docs/Model/EmailDomainEmailVerification.md)
- [EmailFields](docs/Model/EmailFields.md)
- [EmailListDomainVerificationsResponse](docs/Model/EmailListDomainVerificationsResponse.md)
- [EmailListDomainVerificationsResponseData](docs/Model/EmailListDomainVerificationsResponseData.md)
- [EmailListEmailsResponse](docs/Model/EmailListEmailsResponse.md)
- [EmailListEmailsResponseData](docs/Model/EmailListEmailsResponseData.md)
- [EmailListEmailsResponseDataResults](docs/Model/EmailListEmailsResponseDataResults.md)
- [EmailRestartEmailVerificationRequest](docs/Model/EmailRestartEmailVerificationRequest.md)
- [EmailRestartEmailVerificationResponse](docs/Model/EmailRestartEmailVerificationResponse.md)
- [EmailRestartEmailVerificationResponseData](docs/Model/EmailRestartEmailVerificationResponseData.md)
- [EmailStartEmailVerificationRequest](docs/Model/EmailStartEmailVerificationRequest.md)
- [EmailStartEmailVerificationResponse](docs/Model/EmailStartEmailVerificationResponse.md)
- [EmailStartEmailVerificationResponseData](docs/Model/EmailStartEmailVerificationResponseData.md)
- [EmailTags](docs/Model/EmailTags.md)
- [EmailUpdateEmailRequest](docs/Model/EmailUpdateEmailRequest.md)
- [EmailUpdateEmailResponse](docs/Model/EmailUpdateEmailResponse.md)
- [EmailUpdateEmailResponseData](docs/Model/EmailUpdateEmailResponseData.md)
- [EmailVerificationRecipient](docs/Model/EmailVerificationRecipient.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorWarning](docs/Model/ErrorWarning.md)
- [HistoryZoneHistory](docs/Model/HistoryZoneHistory.md)
- [InvoiceInvoice](docs/Model/InvoiceInvoice.md)
- [InvoiceListInvoicesResponse](docs/Model/InvoiceListInvoicesResponse.md)
- [InvoiceListInvoicesResponseData](docs/Model/InvoiceListInvoicesResponseData.md)
- [InvoicePrice](docs/Model/InvoicePrice.md)
- [InvoicePrices](docs/Model/InvoicePrices.md)
- [LicenseCreateLicenseResponseData](docs/Model/LicenseCreateLicenseResponseData.md)
- [LicenseCreatePleskLicenseRequest](docs/Model/LicenseCreatePleskLicenseRequest.md)
- [LicenseCreatePleskLicenseResponse](docs/Model/LicenseCreatePleskLicenseResponse.md)
- [LicenseCreateVirtuozzoLicenseRequest](docs/Model/LicenseCreateVirtuozzoLicenseRequest.md)
- [LicenseCreateVirtuozzoLicenseResponse](docs/Model/LicenseCreateVirtuozzoLicenseResponse.md)
- [LicenseDeleteLicenseResponse](docs/Model/LicenseDeleteLicenseResponse.md)
- [LicenseDeleteLicenseResponseData](docs/Model/LicenseDeleteLicenseResponseData.md)
- [LicenseExtendedLicense](docs/Model/LicenseExtendedLicense.md)
- [LicenseGetLicenseKeyResponse](docs/Model/LicenseGetLicenseKeyResponse.md)
- [LicenseGetLicenseResponse](docs/Model/LicenseGetLicenseResponse.md)
- [LicenseKey](docs/Model/LicenseKey.md)
- [LicenseLicense](docs/Model/LicenseLicense.md)
- [LicenseLicenseItem](docs/Model/LicenseLicenseItem.md)
- [LicenseLicenseKey](docs/Model/LicenseLicenseKey.md)
- [LicenseLicenseWithPriceVersion](docs/Model/LicenseLicenseWithPriceVersion.md)
- [LicenseListItemsOrderBy](docs/Model/LicenseListItemsOrderBy.md)
- [LicenseListItemsResponse](docs/Model/LicenseListItemsResponse.md)
- [LicenseListItemsResponseData](docs/Model/LicenseListItemsResponseData.md)
- [LicenseListLicensesOrderBy](docs/Model/LicenseListLicensesOrderBy.md)
- [LicenseListLicensesResponse](docs/Model/LicenseListLicensesResponse.md)
- [LicenseListLicensesResponseData](docs/Model/LicenseListLicensesResponseData.md)
- [LicenseListLicensesWithPriceVersionResponse](docs/Model/LicenseListLicensesWithPriceVersionResponse.md)
- [LicenseListLicensesWithPriceVersionResponseData](docs/Model/LicenseListLicensesWithPriceVersionResponseData.md)
- [LicenseResetHwidRequest](docs/Model/LicenseResetHwidRequest.md)
- [LicenseResetHwidResponse](docs/Model/LicenseResetHwidResponse.md)
- [LicenseResetHwidResponseData](docs/Model/LicenseResetHwidResponseData.md)
- [LicenseSkuValues](docs/Model/LicenseSkuValues.md)
- [LicenseUpdateLicenseResponse](docs/Model/LicenseUpdateLicenseResponse.md)
- [LicenseUpdateLicenseResponseData](docs/Model/LicenseUpdateLicenseResponseData.md)
- [LicenseUpdatePleskLicenseRequest](docs/Model/LicenseUpdatePleskLicenseRequest.md)
- [LicenseUpdateVirtuozzoLicenseRequest](docs/Model/LicenseUpdateVirtuozzoLicenseRequest.md)
- [NameserverCreateNameserverResponse](docs/Model/NameserverCreateNameserverResponse.md)
- [NameserverGetNameserverResponse](docs/Model/NameserverGetNameserverResponse.md)
- [NameserverListNameserversResponse](docs/Model/NameserverListNameserversResponse.md)
- [NameserverListNameserversResponseData](docs/Model/NameserverListNameserversResponseData.md)
- [NameserverNameserver](docs/Model/NameserverNameserver.md)
- [NameserverNameserverBoolResponse](docs/Model/NameserverNameserverBoolResponse.md)
- [NameserverNameserverBoolResponseData](docs/Model/NameserverNameserverBoolResponseData.md)
- [NsGroupCreateGroupRequest](docs/Model/NsGroupCreateGroupRequest.md)
- [NsGroupCreateGroupResponse](docs/Model/NsGroupCreateGroupResponse.md)
- [NsGroupGetGroupResponse](docs/Model/NsGroupGetGroupResponse.md)
- [NsGroupGroup](docs/Model/NsGroupGroup.md)
- [NsGroupGroupBoolResponse](docs/Model/NsGroupGroupBoolResponse.md)
- [NsGroupGroupBoolResponseData](docs/Model/NsGroupGroupBoolResponseData.md)
- [NsGroupListGroupsResponse](docs/Model/NsGroupListGroupsResponse.md)
- [NsGroupListGroupsResponseData](docs/Model/NsGroupListGroupsResponseData.md)
- [NsGroupNameServersSet](docs/Model/NsGroupNameServersSet.md)
- [NsGroupUpdateGroupRequest](docs/Model/NsGroupUpdateGroupRequest.md)
- [OrderCancelOrderRequest](docs/Model/OrderCancelOrderRequest.md)
- [OrderCancelOrderResponse](docs/Model/OrderCancelOrderResponse.md)
- [OrderCancelOrderResponseData](docs/Model/OrderCancelOrderResponseData.md)
- [OrderCreateOrderRequest](docs/Model/OrderCreateOrderRequest.md)
- [OrderCreateOrderResponse](docs/Model/OrderCreateOrderResponse.md)
- [OrderCreateOrderResponseData](docs/Model/OrderCreateOrderResponseData.md)
- [OrderGetOrderResponse](docs/Model/OrderGetOrderResponse.md)
- [OrderListOrdersRequestOrderBy](docs/Model/OrderListOrdersRequestOrderBy.md)
- [OrderListOrdersResponse](docs/Model/OrderListOrdersResponse.md)
- [OrderListOrdersResponseData](docs/Model/OrderListOrdersResponseData.md)
- [OrderReissueOrderRequest](docs/Model/OrderReissueOrderRequest.md)
- [OrderReissueOrderResponse](docs/Model/OrderReissueOrderResponse.md)
- [OrderReissueOrderResponseData](docs/Model/OrderReissueOrderResponseData.md)
- [OrderRenewOrderRequest](docs/Model/OrderRenewOrderRequest.md)
- [OrderRenewOrderResponse](docs/Model/OrderRenewOrderResponse.md)
- [OrderRenewOrderResponseData](docs/Model/OrderRenewOrderResponseData.md)
- [OrderSslOrder](docs/Model/OrderSslOrder.md)
- [OrderSslOrderAdditionalData](docs/Model/OrderSslOrderAdditionalData.md)
- [OrderSslOrderDomainValidationMethods](docs/Model/OrderSslOrderDomainValidationMethods.md)
- [OrderSslOrderDomainValidationStatuses](docs/Model/OrderSslOrderDomainValidationStatuses.md)
- [OrderSslOrderOptions](docs/Model/OrderSslOrderOptions.md)
- [OrderUpdateOrderRequest](docs/Model/OrderUpdateOrderRequest.md)
- [OrderUpdateOrderResponse](docs/Model/OrderUpdateOrderResponse.md)
- [OrderUpdateOrderResponseData](docs/Model/OrderUpdateOrderResponseData.md)
- [OtptokenCreateOtpTokenRequest](docs/Model/OtptokenCreateOtpTokenRequest.md)
- [OtptokenCreateOtpTokenResponse](docs/Model/OtptokenCreateOtpTokenResponse.md)
- [OtptokenCreateOtpTokenResponseData](docs/Model/OtptokenCreateOtpTokenResponseData.md)
- [PaymentListPaymentsResponse](docs/Model/PaymentListPaymentsResponse.md)
- [PaymentListPaymentsResponseData](docs/Model/PaymentListPaymentsResponseData.md)
- [PaymentListPaymentsResponseDataResults](docs/Model/PaymentListPaymentsResponseDataResults.md)
- [PaymentPrice](docs/Model/PaymentPrice.md)
- [PaymentPrices](docs/Model/PaymentPrices.md)
- [PriceDomain](docs/Model/PriceDomain.md)
- [PriceGetPriceResponse](docs/Model/PriceGetPriceResponse.md)
- [PriceGetPriceResponseData](docs/Model/PriceGetPriceResponseData.md)
- [PricePrice](docs/Model/PricePrice.md)
- [PricePrices](docs/Model/PricePrices.md)
- [ProductGetProductResponse](docs/Model/ProductGetProductResponse.md)
- [ProductListProductsRequestOrderBy](docs/Model/ProductListProductsRequestOrderBy.md)
- [ProductListProductsResponse](docs/Model/ProductListProductsResponse.md)
- [ProductListProductsResponseData](docs/Model/ProductListProductsResponseData.md)
- [ProductSslProduct](docs/Model/ProductSslProduct.md)
- [ProductSslProductLevelPrices](docs/Model/ProductSslProductLevelPrices.md)
- [ProductSslProductPrice](docs/Model/ProductSslProductPrice.md)
- [ProductSslProductPriceGroup](docs/Model/ProductSslProductPriceGroup.md)
- [ProductSslProductPrices](docs/Model/ProductSslProductPrices.md)
- [ProductSslProductReseller](docs/Model/ProductSslProductReseller.md)
- [ProductSslProductSupportedSoftware](docs/Model/ProductSslProductSupportedSoftware.md)
- [ProductSslProductWarranty](docs/Model/ProductSslProductWarranty.md)
- [RecordListZoneRecordsRequestOrderBy](docs/Model/RecordListZoneRecordsRequestOrderBy.md)
- [RecordListZoneRecordsResponse](docs/Model/RecordListZoneRecordsResponse.md)
- [RecordListZoneRecordsResponseData](docs/Model/RecordListZoneRecordsResponseData.md)
- [RecordZoneRecord](docs/Model/RecordZoneRecord.md)
- [ResellerAddress](docs/Model/ResellerAddress.md)
- [ResellerFax](docs/Model/ResellerFax.md)
- [ResellerGetResellerResponse](docs/Model/ResellerGetResellerResponse.md)
- [ResellerName](docs/Model/ResellerName.md)
- [ResellerPhone](docs/Model/ResellerPhone.md)
- [ResellerReseller](docs/Model/ResellerReseller.md)
- [ResellerSettings](docs/Model/ResellerSettings.md)
- [ResellerStatistics](docs/Model/ResellerStatistics.md)
- [ResellerUpdateResellerRequest](docs/Model/ResellerUpdateResellerRequest.md)
- [ResellerUpdateResellerResponse](docs/Model/ResellerUpdateResellerResponse.md)
- [ResellerUpdateResellerResponseData](docs/Model/ResellerUpdateResellerResponseData.md)
- [SettingsGetSettingsResponse](docs/Model/SettingsGetSettingsResponse.md)
- [SettingsGetSettingsResponseData](docs/Model/SettingsGetSettingsResponseData.md)
- [SettingsPaymentMethodLimit](docs/Model/SettingsPaymentMethodLimit.md)
- [SettingsPaymentMethodLimits](docs/Model/SettingsPaymentMethodLimits.md)
- [SettingsPaymentMethodSettings](docs/Model/SettingsPaymentMethodSettings.md)
- [SettingsPaymentMethods](docs/Model/SettingsPaymentMethods.md)
- [SettingsSignedContracts](docs/Model/SettingsSignedContracts.md)
- [SettingsTacContract](docs/Model/SettingsTacContract.md)
- [SettingsTransactionFee](docs/Model/SettingsTransactionFee.md)
- [StatisticsCustomerStatistics](docs/Model/StatisticsCustomerStatistics.md)
- [StatisticsDnsStatistics](docs/Model/StatisticsDnsStatistics.md)
- [StatisticsDomainStatistics](docs/Model/StatisticsDomainStatistics.md)
- [StatisticsDomainStatisticsByStatus](docs/Model/StatisticsDomainStatisticsByStatus.md)
- [StatisticsGetStatisticsResponse](docs/Model/StatisticsGetStatisticsResponse.md)
- [StatisticsGetStatisticsResponseData](docs/Model/StatisticsGetStatisticsResponseData.md)
- [StatisticsLicenseStatistics](docs/Model/StatisticsLicenseStatistics.md)
- [StatisticsSpamExpertsStatistics](docs/Model/StatisticsSpamExpertsStatistics.md)
- [StatisticsSslStatistics](docs/Model/StatisticsSslStatistics.md)
- [StatisticsSslStatisticsByStatus](docs/Model/StatisticsSslStatisticsByStatus.md)
- [TagCreateTagResponse](docs/Model/TagCreateTagResponse.md)
- [TagCreateTagResponseData](docs/Model/TagCreateTagResponseData.md)
- [TagDeleteTagResponse](docs/Model/TagDeleteTagResponse.md)
- [TagDeleteTagResponseData](docs/Model/TagDeleteTagResponseData.md)
- [TagListTagsResponse](docs/Model/TagListTagsResponse.md)
- [TagListTagsResponseData](docs/Model/TagListTagsResponseData.md)
- [TagTag](docs/Model/TagTag.md)
- [TemplateCreateTemplateRequest](docs/Model/TemplateCreateTemplateRequest.md)
- [TemplateCreateTemplateResponse](docs/Model/TemplateCreateTemplateResponse.md)
- [TemplateCreateTemplateResponseData](docs/Model/TemplateCreateTemplateResponseData.md)
- [TemplateGetTemplateResponse](docs/Model/TemplateGetTemplateResponse.md)
- [TemplateListTemplatesResponse](docs/Model/TemplateListTemplatesResponse.md)
- [TemplateListTemplatesResponseData](docs/Model/TemplateListTemplatesResponseData.md)
- [TemplateRecord](docs/Model/TemplateRecord.md)
- [TemplateTemplate](docs/Model/TemplateTemplate.md)
- [TemplateTemplateBoolResponse](docs/Model/TemplateTemplateBoolResponse.md)
- [TemplateTemplateBoolResponseData](docs/Model/TemplateTemplateBoolResponseData.md)
- [TldApplicationMode](docs/Model/TldApplicationMode.md)
- [TldDescription](docs/Model/TldDescription.md)
- [TldGetTldResponse](docs/Model/TldGetTldResponse.md)
- [TldIdnScript](docs/Model/TldIdnScript.md)
- [TldLevelPrice](docs/Model/TldLevelPrice.md)
- [TldListTldsResponse](docs/Model/TldListTldsResponse.md)
- [TldListTldsResponseData](docs/Model/TldListTldsResponseData.md)
- [TldPrice](docs/Model/TldPrice.md)
- [TldPriceInCurrency](docs/Model/TldPriceInCurrency.md)
- [TldPrices](docs/Model/TldPrices.md)
- [TldTld](docs/Model/TldTld.md)
- [TransactionListTransactionsResponse](docs/Model/TransactionListTransactionsResponse.md)
- [TransactionListTransactionsResponseData](docs/Model/TransactionListTransactionsResponseData.md)
- [TransactionListTransactionsResponseDataResults](docs/Model/TransactionListTransactionsResponseDataResults.md)
- [TransactionPrice](docs/Model/TransactionPrice.md)
- [TransactionPrices](docs/Model/TransactionPrices.md)
- [ZoneCreateZoneRequest](docs/Model/ZoneCreateZoneRequest.md)
- [ZoneDomain](docs/Model/ZoneDomain.md)
- [ZoneGetZoneResponse](docs/Model/ZoneGetZoneResponse.md)
- [ZoneListZonesRequestOrderBy](docs/Model/ZoneListZonesRequestOrderBy.md)
- [ZoneListZonesResponse](docs/Model/ZoneListZonesResponse.md)
- [ZoneListZonesResponseData](docs/Model/ZoneListZonesResponseData.md)
- [ZoneUpdateZoneRequest](docs/Model/ZoneUpdateZoneRequest.md)
- [ZoneZone](docs/Model/ZoneZone.md)
- [ZoneZoneBoolResponse](docs/Model/ZoneZoneBoolResponse.md)
- [ZoneZoneBoolResponseData](docs/Model/ZoneZoneBoolResponseData.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0-beta`
    - Generator version: `7.11.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
