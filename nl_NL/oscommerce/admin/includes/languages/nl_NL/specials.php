<?php
/*
  $Id: specials.php 448 2006-02-21 06:27:28Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Aanbiedingen');

define('TABLE_HEADING_PRODUCTS', 'Produkten');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produktprijs');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Aanbiedingsprijs (Netto):');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Aanbiedingsprijs (Bruto):');
define('TEXT_SPECIALS_STATUS', 'Status:');
define('TEXT_SPECIALS_START_DATE', 'Startdatum:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Afloopdatum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Aanbiedingen opmerkingen:</b><ul><li>U kunt een percentage in het aanbiedingsprijsveld als korting invoeren, bijvoorbeeld: <b>20%</b></li><li>Indien u een nieuwe prijs invoert moet het decimaalteken een \'.\' zijn (decimale punt), bijvoorbeeld: <b>49.99</b></li><li>Indien u geen einddatum wenst laat u het afloopdatumveld leeg</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_LAST_MODIFIED', 'Laatst gewijzigd:');
define('TEXT_INFO_NEW_PRICE', 'Nieuwe prijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originele prijs:');
define('TEXT_INFO_PERCENTAGE', 'Percentage:');
define('TEXT_INFO_EXPIRES_DATE', 'Afloopdatum:');
define('TEXT_INFO_STATUS_CHANGE', 'Status verandering:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Verwijder aanbieding');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u de aanbiedingsprijs wilt verwijderen?');

define('ERROR_SPECIALS_PRICE', 'Aanbiedingsprijzen kunnen niet negatief of hoger zijn dan de originele prijs');
define('ERROR_SPECIALS_DATE', 'De afloopdatum ligt voor de startdatum');
?>