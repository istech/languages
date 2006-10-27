<?php
/*
  $Id: orders.php 554 2006-04-29 16:26:53Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Bestellingen');

define('SEARCH_ORDER_ID', 'Bestelling ID:');
define('SEARCH_CUSTOMER_ID', 'Klant ID:');
define('SEARCH_STATUS', 'Status:');

define('TABLE_HEADING_COMMENTS', 'Opmerkingen');
define('TABLE_HEADING_CUSTOMERS', 'Klanten');
define('TABLE_HEADING_ORDER_TOTAL', 'Totaal bestelling');
define('TABLE_HEADING_DATE_PURCHASED', 'Datum aankoop');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_QUANTITY', 'Aantal.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Produkten');
define('TABLE_HEADING_TAX', 'BTW');
define('TABLE_HEADING_TOTAL', 'Totaal');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prijs (excl.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prijs (incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totaal (excl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totaal (incl.)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Klant ingelicht');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');

define('ENTRY_CUSTOMER', 'Klant:');
define('ENTRY_SOLD_TO', 'Verkocht aan:');
define('ENTRY_DELIVERY_TO', 'Levering aan:');
define('ENTRY_SHIP_TO', 'Verzending aan:');
define('ENTRY_SHIPPING_ADDRESS', 'Verzendingsadres:');
define('ENTRY_BILLING_ADDRESS', 'Factuuradres:');
define('ENTRY_PAYMENT_METHOD', 'Betalingsmethode:');
define('ENTRY_CREDIT_CARD_TYPE', 'Type kredietkaart:');
define('ENTRY_CREDIT_CARD_OWNER', 'Eigenaar kredietkaart:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Nummer kredietkaart:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kredietkaart verloopt op:');
define('ENTRY_SUB_TOTAL', 'Sub-totaal:');
define('ENTRY_TAX', 'BTW:');
define('ENTRY_SHIPPING', 'Verzending:');
define('ENTRY_TOTAL', 'Totaal:');
define('ENTRY_DATE_PURCHASED', 'Datum aankoop:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_POST_TRANSACTION_ACTIONS', 'Post transactie acties:');
define('ENTRY_DATE_LAST_UPDATED', 'Datum laatst gewijzigd:');
define('ENTRY_NOTIFY_CUSTOMER', 'Verwittig klant:');
define('ENTRY_NOTIFY_COMMENTS', 'Opmerkingen toevoegen:');
define('ENTRY_NEW_COMMENT', 'Nieuwe opmerking:');
define('ENTRY_PRINTABLE', 'Print Invoice');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Verwijder bestelling');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze bestelling wilt verwijderen?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Voorraad produkt bijwerken');
define('TEXT_DATE_ORDER_CREATED', 'Datum aangemaakt:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Laatst gewijzigd:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betalingswijze:');

define('TEXT_ALL_ORDERS', 'Alle bestellingen');
define('TEXT_NO_ORDER_HISTORY', 'Geen bestellingsgeschiedenis beschikbaar');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Wijziging bestelling');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellingsnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Gedetailleerde rekening:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestellingsdatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Uw bestelling is gewijzigd naar de volgende status.' . "\n\n" . 'Nieuwe status: %s' . "\n\n" . 'Reageer aub. op deze e-mail indien u vragen heeft.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'De opmerkingen bij uw bestelling zijn' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fout: Bestelling bestaat niet.');
define('SUCCESS_ORDER_UPDATED', 'Succes: De bestelling is succesvol gewijzigd.');
define('WARNING_ORDER_NOT_UPDATED', 'Waarschuwing: Niets te wijzigen. De bestelling is niet gewijzigd.');
?>