<?php
/*
  $Id: currencies.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Currencies');

define('TABLE_HEADING_CURRENCY_NAME', 'Currency');
define('TABLE_HEADING_CURRENCY_CODES', 'Code');
define('TABLE_HEADING_CURRENCY_VALUE', 'Value');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Example');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_INSERT_INTRO', 'Please enter the new currency with its related data');
define('TEXT_INFO_EDIT_INTRO', 'Please make any necessary changes');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this currency?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Please select the currency update service to use.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'New Currency');

define('TEXT_INFO_CURRENCY_TITLE', 'Title:');
define('TEXT_INFO_CURRENCY_CODE', 'Code:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Left:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol Right:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimal Places:');
define('TEXT_INFO_CURRENCY_VALUE', 'Value:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(requires a manual update of currency values)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'By using the selected currency update service you are agreeing to the terms and conditions of the service involved.');

define('TEXT_INFO_CURRENCY_UPDATED', 'The exchange rate for %s (%s) was updated successfully via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Warning: The default currency can not be removed. Please set another currency as the default and try again.');
define('ERROR_CURRENCY_INVALID', 'Error: The exchange rate for %s (%s) was not updated via %s. Is it a valid currency code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warning: The primary exchange rate server (%s) failed for %s (%s) - trying the secondary exchange rate server.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Warning: The default currency can not be removed. Please set another currency as the default and try again.');
?>
