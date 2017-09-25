<?php
/*
  $Id: orders.php,v 1.25 2003/06/20 00:28:44 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Ordre');
define('HEADING_TITLE_SEARCH', 'Skriv Ordre ID');
define('HEADING_TITLE_STATUS', 'Status:');

define('TABLE_HEADING_COMMENTS', 'Kommentar');
define('TABLE_HEADING_CUSTOMERS', 'Kunder');
define('TABLE_HEADING_ORDER_TOTAL', 'Ordre Total');
define('TABLE_HEADING_DATE_PURCHASED', 'Købs dato');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Mulighed');
define('TABLE_HEADING_QUANTITY', 'Antal');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_TAX', 'Moms');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Pris (excl)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Pris (inkl)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (excl)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inkl)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde underrettet');
define('TABLE_HEADING_DATE_ADDED', 'Dato tilført');

define('ENTRY_CUSTOMER', 'Kunde:');
define('ENTRY_SOLD_TO', 'Solgt til:');
define('ENTRY_DELIVERY_TO', 'Leveres til:');
define('ENTRY_SHIP_TO', 'Send til:');
define('ENTRY_SHIPPING_ADDRESS', 'Leveringsadresse:');
define('ENTRY_BILLING_ADDRESS', 'Faktureringsadresse:');
define('ENTRY_PAYMENT_METHOD', 'Betalingsmetode:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkort Type:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kreditkort Ejer:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kreditkort Nummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kreditkort Udløbsdato:');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Moms:');
define('ENTRY_SHIPPING', 'Levering:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Købsdato:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Sidst opdateret:');
define('ENTRY_NOTIFY_CUSTOMER', 'Informér kunde:');
define('ENTRY_NOTIFY_COMMENTS', 'Tilføj kommentar:');
define('ENTRY_PRINTABLE', 'Udskriv faktura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Slet ordre');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på at ville slette denne ordre?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Tilføj/gendan vare til lagerbeholdning');
define('TEXT_DATE_ORDER_CREATED', 'Dato oprettet:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Sidst ændret:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betalingsmetode:');

define('TEXT_ALL_ORDERS', 'Alle ordrer');
define('TEXT_NO_ORDER_HISTORY', 'Ingen ordre historik');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Ordre opdatering');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordrenummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaljeret faktura:');
define('EMAIL_TEXT_DATE_ORDERED', 'Ordredato:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Din ordre er blevet opdateret til følgende status:' . "\n\n" . 'New status: %s' . "\n\n" . 'Besvar venligst denne e-mail, hvis du har spørgsmål.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Eventuelle kommentarer til din ordre er:' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fejl: Ordren eksisterer ikke.');
define('SUCCESS_ORDER_UPDATED', 'Udført: Ordren er blevet opdateret.');
define('WARNING_ORDER_NOT_UPDATED', 'Advarsel: Intet at ændre. Ordren blev ikke opdateret.');

// QuickPay added start
define('ENTRY_QUICKPAY_TRANSACTION', 'QuickPay transaktion:');
define('ENTRY_QUICKPAY_CARDHASH', 'Type:');
define('IMAGE_TRANSACTION_CAPTURE_INFO', 'Gennemfør betaling');
define('IMAGE_TRANSACTION_REVERSE_INFO', 'Annulér betaling');
define('IMAGE_TRANSACTION_CREDIT_INFO', 'Krediter betaling');
define('IMAGE_TRANSACTION_TIME_INFO_GREEN', 'Kan stadig hæves inden for PBS-garanteret periode');
define('IMAGE_TRANSACTION_TIME_INFO_YELLOW', 'Sidste dag for PBS-garanteret hævning');
define('IMAGE_TRANSACTION_TIME_INFO_RED', 'Sidste dag for PBS-garanteret hævning er overskredet');
define('INFO_QUICKPAY_CAPTURED', 'Betalingen er gennemført');
define('INFO_QUICKPAY_CREDITED', 'Beløbet er krediteret');
define('INFO_QUICKPAY_REVERSED', 'Betalingen er annulleret');
define('ENTRY_QUICKPAY_TRANSACTION_ID', 'Transaktions-id:');
define('CONFIRM_REVERSE', 'Vil du annullere denne betaling?');
define('CONFIRM_CAPTURE', 'Advarsel: Transaktionsbeløb er ikke identisk med ordrens total. Vil du gennemføre betalingen?');
define('CONFIRM_CREDIT', 'Vil du kreditere kunden dette beløb?');
define('PENDING_STATUS', 'Afventer indløser godkendelse.');
define('PAYMENTLINK_INFO', 'Send dette link til kunde ved transaktionsproblem.');
define('SUBSCRIPTION_ADMIN'	, 'Administration af abonnement betaling samt gentagne abonnementsbetalinger er ikke implementeret i denne gratis distribuerede version.<br>Brug Quickpay manager til administration af abonnementsbetalinger. Venligst kontakt <a href="mailto:info@blkom.dk" ><b>udvikler</b></a> for implementering af gentagne abonnementsbetalinger og abonnementsadministration <br>');
define('ENTRY_QUICKPAY_STATUS','Gateway status');
// QuickPay added end
?>
