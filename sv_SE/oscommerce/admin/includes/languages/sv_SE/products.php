<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Produkter');
define('HEADING_TITLE_SEARCH', 'Sök:');
define('HEADING_TITLE_GOTO', 'Gå Till:');

define('TAB_GENERAL', 'Allmänt');
define('TAB_DATA', 'Data');
define('TAB_IMAGES', 'Bild');
define('TAB_ATTRIBUTES', 'Attribut');
define('TAB_CATEGORIES', 'Kategori');

define('FIELDSET_ASSIGNED_ATTRIBUTES', 'Tilldelade Attribut');

define('TABLE_HEADING_PRODUCTS', 'Produkter');
define('TABLE_HEADING_PRICE', 'Pris');
define('TABLE_HEADING_QUANTITY', 'Antal');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_NEW_PRODUCT', 'Ny Produkt');
define('TEXT_CATEGORIES', 'Kategori:');

define('TEXT_EDIT_INTRO', 'Var vänlig och gör nödvändiga ändringar');

define('TEXT_INFO_COPY_TO_INTRO', 'Var vänlig och välj en ny kategori som du vill kopiera denna produkt till');
define('TEXT_INFO_COPY_TO_BATCH_INTRO', 'Var vänlig och välj en ny kategori som du vill kopiera dessa produkter till');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Nuvarande Kategori:');

define('TEXT_DELETE_PRODUCT_INTRO', 'Är du säker att du vill ta bort denna produkt permanent?');
define('TEXT_DELETE_BATCH_INTRO', 'Är du säker att du vill ta bort dessa produkter permanent?');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Var vänlig och välj vilken kategori som du vill lägga <b>%s</b> i');
define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

define('TEXT_PRODUCTS_STATUS', 'Produkt Status:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Tillgänglig Den:');
define('TEXT_PRODUCT_AVAILABLE', 'I Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Slut');
define('TEXT_PRODUCTS_MANUFACTURER', 'Produktens Tillverkare:');
define('TEXT_PRODUCTS_NAME', 'Produkt Namn:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produktens Beskrivning:');
define('TEXT_PRODUCTS_QUANTITY', 'Produktens Kvantitet:');
define('TEXT_PRODUCTS_MODEL', 'Produkt Modell:');
define('TEXT_PRODUCTS_KEYWORD', 'Produktens Nyckelord:');
define('TEXT_PRODUCTS_TAGS', 'Produktens Flaggor:');
define('TEXT_PRODUCTS_IMAGE', 'Produktens Bild:');
define('TEXT_PRODUCTS_URL', 'Produktens URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(utan http://)</small>');
define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');
define('TEXT_PRODUCTS_PRICE_NET', 'Produktens Pris (Netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Produktens Pris (Brutto):');
define('TEXT_PRODUCTS_WEIGHT', 'Produktens Vikt:');

define('TEXT_PRODUCT_DATE_ADDED', 'Denna produkt blev tillagd i vår katalog den %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Denna produkt kommer att finnas i lager den %s.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'För mer information, var vänlig och besök produktens <a href="http://%s" target="blank"><u>websida</u></a>.');

define('TEXT_HOW_TO_COPY', 'Kopierings Metod:');
define('TEXT_COPY_AS_LINK', 'Länka produkten');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicera produkten');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fel: Kan ej länka produkt i samma katalog.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fel: Katalogbildsmappen är skrivskyddad: ' . realpath('../images'));
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fel: Katalogbildsmappen existerar ej: ' . realpath('../images'));
define('ERROR_IMAGE_PROCESSOR_NOT_AVAILABLE', 'Fel: Kan ej bearbeta produktbilder eftersom ImageMagicks "konverterings" program ej är tillgängligt. Detta kan definieras i Konfiguration -> Program Platser.');
?>