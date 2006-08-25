<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valutor');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Kod');
define('TABLE_HEADING_CURRENCY_VALUE', 'Värde');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Exempel');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_INFO_INSERT_INTRO', 'Var vänlig och ange ny valuta med relevanta data');
define('TEXT_INFO_EDIT_INTRO', 'Var vänlig och gör nödvändiga ändringar');
define('TEXT_INFO_DELETE_INTRO', 'Är du säker att du vill ta bort denna valuta?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Var vänlig och välj tjänst för updatering av valutor.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Ny valuta');

define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Kod:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Vänstersymbol:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Högersymbol:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Antal decimaler:');
define('TEXT_INFO_CURRENCY_VALUE', 'Värde:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(behöver en manuell updatering av valutans värde)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Genom att använda den valda tjänsten för valuta updatering accepterar du även tjänstens användningsvillkor.');

define('TEXT_INFO_CURRENCY_UPDATED', 'Valutakursen för %s (%s) blev uppdaterad via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Varning: Standardvalutan kan inte tas bort. Var vänlig och välj en annan valuta som standardvaluta och försök igen.');
define('ERROR_CURRENCY_INVALID', 'Fel: Valutakursen för %s (%s) blev ej uppdaterad via %s. Är det en giltlig valutakod?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Varning: Den primära valutakursservern (%s) misslyckades för %s (%s) - försöker med den sekundära servern.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Varning: Standardvalutan kan inte tas bort. Var vänlig och välj en annan valuta som standardvaluta och försök igen.');
?>