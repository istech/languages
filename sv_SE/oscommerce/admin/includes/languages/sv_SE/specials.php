<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Kampanjer');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produktens Pris');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Kampanjpris (Netto):');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Kampanjpris (Brutto):');
define('TEXT_SPECIALS_STATUS', 'Status:');
define('TEXT_SPECIALS_START_DATE', 'Startdatum:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Slutdatum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Kampanjnotering:</b><ul><li>Du kan ange en procentsats att dra av i kampanjprisfältet, till exempel: <b>20%</b></li><li>Om du anger ett nytt pris, måste decimalavskiljaren vara en \'.\' (punkt), exempel: <b>49.50</b></li><li>Lämna utgångsdatumet blankt för att permanent sänka priset</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Tillagd:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast Ändrad:');
define('TEXT_INFO_NEW_PRICE', 'Nytt Pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Normalpris:');
define('TEXT_INFO_PERCENTAGE', 'Procentsats:');
define('TEXT_INFO_EXPIRES_DATE', 'Utgår Den:');
define('TEXT_INFO_STATUS_CHANGE', 'Status Ändring:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Ta Bort Kampanj');
define('TEXT_INFO_DELETE_INTRO', 'Är du säker att du vill ta bort produktens kampanjpris?');

define('ERROR_SPECIALS_PRICE', 'Kampanjpriset kan inte vara negativt eller större än normalpriset');
define('ERROR_SPECIALS_DATE', 'Slutdatumet är före startdatumet');
?>