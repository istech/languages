<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Special');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produktpriser');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Specialpris (Netto):');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Specialpris (Brutto):');
define('TEXT_SPECIALS_STATUS', 'Status:');
define('TEXT_SPECIALS_START_DATE', 'Start Datum:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Slut Datum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Special Notering:</b><ul><li>Du kan ange en procentsats att dra av i Specialprisfältet, till exempel: <b>20%</b></li><li>Om du anger ett nytt pris, måste decimal skiljaren vara en \'.\' (decimal-point), exempel: <b>49.99</b></li><li>Lämna utgångsdatumet blankt för att permanent sänka priset</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Tillagd Den:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast Ändrad:');
define('TEXT_INFO_NEW_PRICE', 'Nytt Pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Normalpris:');
define('TEXT_INFO_PERCENTAGE', 'Procentsats:');
define('TEXT_INFO_EXPIRES_DATE', 'Utgår Den:');
define('TEXT_INFO_STATUS_CHANGE', 'Status Ändring:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Ta bort Special');
define('TEXT_INFO_DELETE_INTRO', 'Är du säker att du vill ta bort produktens specialpris?');

define('ERROR_SPECIALS_PRICE', 'Specialpris kan inte vara negativt eller större än Normalpriset');
define('ERROR_SPECIALS_DATE', 'Utgångsdatumet är före startdatumet');
?>