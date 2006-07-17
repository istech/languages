<?php
/*
  $Id: currencies.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valuta');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Kode');
define('TABLE_HEADING_CURRENCY_VALUE', 'Værdi');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Eksempel');
define('TABLE_HEADING_ACTION', 'Handling');

define('TEXT_INFO_INSERT_INTRO', 'Indsæt venligst den nye valuta med tilhørende data');
define('TEXT_INFO_EDIT_INTRO', 'Lav venligst de nødvendige ændringer');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på du vil slette den valuta?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Vælg venligst hvilken valutaopdateringsservice der skal bruges.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Ny valuta');

define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Kode:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Venstre:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol Højre:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimalpladser:');
define('TEXT_INFO_CURRENCY_VALUE', 'Værdi:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(Dette kræver manuel opdatering af valutakurser)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Ved at bruge den valgte valutaopdateringsservice godkender du brugsbetingelserne for denne service.');

define('TEXT_INFO_CURRENCY_UPDATED', 'Udvekslingskursen for %s (%s) blev succesrigt opdateret via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'ADVARSEL: Standardvalutaen kan ikke fjernes. Sæt venligst en anden valuta som standard og prøv igen.');
define('ERROR_CURRENCY_INVALID', 'FEJL: Udvekslingskursen for %s (%s) blev ikke succesrigt opdateret %s. Er det en valideret valutakode?');
define('WARNING_PRIMARY_SERVER_FAILED', 'ADVARSEL: Den primære udvekslingskurs-server (%s) har fejlet for %s (%s) - prøver den sekundære server.');

define('TEXT_INFO_DELETE_PROHIBITED', 'ADVARSEL: Standardvalutaen kan ikke fjernes. Sæt venligst en anden valuta som standard og prøv igen.');
?>
