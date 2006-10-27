<?php
/*
  $Id: currencies.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valuta\'s');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Code');
define('TABLE_HEADING_CURRENCY_VALUE', 'Waarde');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Voorbeeld');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_INSERT_INTRO', 'Voegt u aub. de nieuwe valuta met de benodigde gegevens in');
define('TEXT_INFO_EDIT_INTRO', 'Maakt u aub. de benodigde wijzigingen');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze valuta wilt verwijderen?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Selecteer aub. de valuta update service die u wilt gebruiken.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nieuwe valuta');

define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Code:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbool links:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbool rechts:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimale posities:');
define('TEXT_INFO_CURRENCY_VALUE', 'Waarde:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(vereist een handmatige update van de valutawaarden)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Middels het gebruik van de geselecteerde valuta update service stemt u in met de gebruiksvoorwaarden van de betreffende service.');

define('TEXT_INFO_CURRENCY_UPDATED', 'De wisselkoers voor %s (%s) is succesvol bijgewerkt via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Waarschuwing: De standaard valuta kan niet worden verwijderd. Stel een andere valuta als standaard in en probeert u het opnieuw.');
define('ERROR_CURRENCY_INVALID', 'Fout: De wisselkoers voor %s (%s) is niet bijgewerkt via %s. Is de valuta code een geldige?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Waarschuwing: De eerst gekozen wisselkoers server (%s) heeft gefaald voor %s (%s) - de tweede gekozen wisselkoers server wordt geprobeerd.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Waarschuwing: De standaard valuta kan niet worden verwijderd.  Stel een andere valuta als standaard in en probeert u het opnieuw.');
?>