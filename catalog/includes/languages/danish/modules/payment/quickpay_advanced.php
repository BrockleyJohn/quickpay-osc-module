<?php
/*
  quickpay.php

  The Exchange Project - Community Made Shopping!
  http://www.theexchangeproject.org

  Copyright (c) 2008 Jakob Høy Biegel

  Released under the GNU General Public License
*/
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_TITLE', 'Quickpay: Online betaling');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_PUBLIC_TITLE', 'Quickpay: Online betaling');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_DESCRIPTION', 'Betalingen overføres elektronisk, ved betaling med');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_EMAIL_FOOTER', 'Betalingen er nu reserveret hos PBS. Din online betaling har fået transaktions-id: %s.' . "\n" . 'Når ordren ekspederes bliver beløbet overført til ' . STORE_NAME); 

  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_SELECT_CARD', '* Vælg hvilken måde du vil benytte til online betaling\n');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_WAIT', 'Vent venligst et øjeblik. Betalingsside forberedes...');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_TEXT_ERROR', 'Online betaling kunne ikke gennemføres');
define('MODULE_PAYMENT_QUICKPAY_ADVANCED_FEEINFO', '(evt. gebyr tilføjes ved betaling)');
define('MODULE_PAYMENT_QUICKPAY_ADVANCED_FEELOCKINFO', ' evt. gebyr');
// Transaction errors  
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_MERCHANT_UNKNOWN', 'Ukendt Merchant Nr');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_CARDNO_NOT_VALID', 'Ugyldigt kortnummer');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_CVC_NOT_VALID', 'Ugyldige kontrolcifre');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_ORDERID', 'OrderID ugyldigt eller mangler');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_TRANSACTION_DECLINED', 'Transaktionen blev afbrudt');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_WRONG_NUMBER_FORMAT', 'Beløbet blev angivet i et forkert format');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_ILLEGAL_TRANSACTION', 'Ugyldig transaktion');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_TRANSACTION_EXPIRED', 'Transaktionen er udløbet');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_NO_ANSWER', 'Intet svar');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_SYSTEM_FAILURE', 'Systemfejl');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_CARD_EXPIRED', 'Kortet er udløbet');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_COMMUNICATION_FAILURE', 'Kommunikationsfejl');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_INTERNAL_FAILURE', 'Intern fejl');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_CARD_NOT_REGISTERED', 'Kunden ikke oprettet i systemet');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_RETRY_FAILURE', 'Kan ikke betale samme transaktion flere gange');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_UNKNOWN', 'Fejl i indtastede oplysninger');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_ERROR_CANCELLED', 'Transaktionen blev afbrudt') ;
  
// Name of credit cards options (3D Secure)
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_JCB_3D_TEXT', 'JCB 3D-Secure');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MAESTRO_3D_TEXT', 'Maestro 3D-Secure');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MAESTRO_DK_3D_TEXT', 'Maestro 3D-Secure (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_3D_TEXT', 'MasterCard 3D-Secure');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_DK_3D_TEXT', 'Mastercard 3D-Secure (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_3D_TEXT', 'Visa 3D-Secure');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_DK_3D_TEXT', 'Visa 3D-Secure (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_ELECTRON_3D_TEXT', 'Visa Electron 3D-Secure');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_ELECTRON_DK_3D_TEXT', 'Visa Electron 3D-Secure (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_DEBET_3D_TEXT', 'Visa debet 3D-secure ');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_DEBET_DK_3D_TEXT', 'Visa debet 3D-secure (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_CREDITCARD_3D_TEXT', 'Kreditkort 3D-secure');

// Name of credit cards options 
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_AMERICAN_EXPRESS_TEXT', 'American Express');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_AMERICAN_EXPRESS_DK_TEXT', 'American Express (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_DANKORT_TEXT', 'Dankort');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_DANSKE_DK_TEXT', 'Danske Netbank');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_DINERS_TEXT', 'Diners Club');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_DINERS_DK_TEXT', 'Diners Club (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_EDANKORT_TEXT', 'eDankort');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_JCB_TEXT', 'JCB');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_TEXT', 'Mastercard');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_DK_TEXT', 'Mastercard (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_DEBET_TEXT', 'Mastercard debet');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MASTERCARD_DEBET_DK_TEXT', 'Mastercard debet(Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_NORDEA_DK_TEXT', 'Nordea Netbank');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_TEXT', 'Visa');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_DK_TEXT', 'Visa (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_ELECTRON_TEXT', 'Visa Electron');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_VISA_ELECTRON_DK_TEXT', 'Visa Electron (Dansk)');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_FBG1886_TEXT', 'Forbrugsforeningen af 1886');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_CREDITCARD_TEXT', 'Kreditkort');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_PAYPAL_TEXT', 'Paypal');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_SOFORT_TEXT', 'Sofort');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_IBILL_TEXT', 'ViaBill betaling');
  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_IBILL_DESCRIPTION', 'Køb nu - betal, når du vil');
///  define('MODULE_PAYMENT_QUICKPAY_ADVANCED_PAII_TEXT', 'Paii mobil betaling');
    define('MODULE_PAYMENT_QUICKPAY_ADVANCED_MOBILEPAY_TEXT', 'Mobilepay betaling');
?>