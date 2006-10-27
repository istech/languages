<?php
/*
  $Id: manufacturers.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Fabrikanten');

define('TABLE_HEADING_MANUFACTURERS', 'Fabrikanten');
define('TABLE_HEADING_URL_CLICKS', 'URL kliks');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nieuwe fabrikant');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Wijzig fabrikant');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Verwijder fabrikant');

define('TEXT_MANUFACTURERS', 'Fabrikanten:');
define('TEXT_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_LAST_MODIFIED', 'Laatst gewijzigd:');
define('TEXT_PRODUCTS', 'Produkten:');

define('TEXT_NEW_INTRO', 'Vul aub. de benodigde informatie in voor de nieuwe fabrikant');
define('TEXT_EDIT_INTRO', 'Maak aub. de benodigde wijzigingen');

define('TEXT_MANUFACTURERS_NAME', 'Fabrikantnaam:');
define('TEXT_MANUFACTURERS_IMAGE', 'Fabrikant plaatje:');
define('TEXT_MANUFACTURERS_URL', 'Fabrikant URL:');

define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze fabrikant wilt verwijderen?');
define('TEXT_DELETE_IMAGE', 'Verwijder fabrikant plaatje?');
define('TEXT_DELETE_PRODUCTS', 'Verwijder de produkten van deze fabrikant? (inclusief produktbeoordelingen, aanbiedingen en verwachte produkten)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Waarschuwing:</b> Er zijn nog %s produkten gekoppeld aan deze fabrikant!');

define('ERROR_MANUFACTURER_NAME', 'Fout: Fabrikantnaam moet ingevuld worden');
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: Fabrikant afbeeldingen map is niet schrijfbaar: ' . realpath('../images/manufacturers'));
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: Fabrikant afbeeldingen map bestaat niet: ' . realpath('../images/manufacturers'));
?>