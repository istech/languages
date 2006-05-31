<?php
/*
  $Id: tax_classes.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Tax Classes');

define('TABLE_HEADING_TAX_CLASSES', 'Tax Classes');
define('TABLE_HEADING_TAX_RATES_TOTAL', 'Defined Tax Rates');

define('TABLE_HEADING_TAX_RATE_PRIORITY', 'Priority');
define('TABLE_HEADING_ZONE', 'Zone');
define('TABLE_HEADING_TAX_RATE', 'Tax Rate');

define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_NEW_TAX_CLASS', 'New Tax Class');
define('TEXT_INFO_HEADING_NEW_TAX_RATE', 'New Tax Rate');

define('TEXT_INFO_INSERT_INTRO', 'Please enter the new tax class with its related data');
define('TEXT_INFO_EDIT_INTRO', 'Please make any necessary changes');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this tax class?');

define('TEXT_INFO_CLASS_TITLE', 'Tax Class Title:');
define('TEXT_INFO_CLASS_DESCRIPTION', 'Description:');

define('TEXT_INFO_ZONE_NAME', 'Zone:');
define('TEXT_INFO_TAX_RATE', 'Tax Rate (%):');
define('TEXT_INFO_TAX_RATE_PRIORITY', 'Priority:');
define('TEXT_INFO_TAX_RATE_DESCRIPTION', 'Description:');

define('TEXT_INFO_DATE_ADDED', 'Date Added:');
define('TEXT_INFO_LAST_MODIFIED', 'Last Modified:');

define('TEXT_INFO_DELETE_PROHIBITED', 'Warning: This Tax Class cannot be deleted as it is currently assigned to one or more products.');
define('TEXT_INFO_DELETE_TAX_RATES_WARNING', 'Warning: This Tax Class has %s tax rate(s) assigned which would also be deleted.');
?>
