<?php
/*
  $Id: products.php 474 2006-03-06 00:37:29Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Produkten');
  define('HEADING_TITLE_SEARCH', 'Zoeken:');
  define('HEADING_TITLE_GOTO', 'Ga naar:');

  define('TAB_GENERAL', 'Algemeen');
  define('TAB_DATA', 'Gegevens');
  define('TAB_IMAGES', 'Plaatjes');
  define('TAB_ATTRIBUTES', 'Attributem');
  define('TAB_CATEGORIES', 'Categoriën');

  define('FIELDSET_ASSIGNED_ATTRIBUTES', 'Gekoppelde attributen');

  define('TABLE_HEADING_PRODUCTS', 'Produkten');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_STATUS', 'Status');
  define('TABLE_HEADING_ACTION', 'Actie');

  define('TEXT_NEW_PRODUCT', 'Nieuw produkt in &quot;%s&quot;');
  define('TEXT_CATEGORIES', 'Categoriën:');

  define('TEXT_EDIT_INTRO', 'Maak aub. de benodigde wijzigingen');

  define('TEXT_INFO_COPY_TO_INTRO', 'Selecteer aub. de categorie waarnaar toe u het produkt wilt kopiëren');
  define('TEXT_INFO_CURRENT_CATEGORIES', 'Huidige categoriën:');

  define('TEXT_DELETE_PRODUCT_INTRO', 'Weet u zeker dat u dit produkt permanent wilt verwijderen?');

  define('TEXT_MOVE_PRODUCTS_INTRO', 'Selecteer aub. de categorie waar u <b>%s</b> wilt onderbrengen');
  define('TEXT_MOVE', 'Verplaats <b>%s</b> naar:');

  define('TEXT_PRODUCTS_STATUS', 'Produktstatus:');
  define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum beschikbaar:');
  define('TEXT_PRODUCT_AVAILABLE', 'Op voorraad');
  define('TEXT_PRODUCT_NOT_AVAILABLE', 'Niet op voorraad');
  define('TEXT_PRODUCTS_MANUFACTURER', 'Fabrikant produkt:');
  define('TEXT_PRODUCTS_NAME', 'Produktnaam:');
  define('TEXT_PRODUCTS_DESCRIPTION', 'Produktbeschrijving:');
  define('TEXT_PRODUCTS_QUANTITY', 'Produkt aantal:');
  define('TEXT_PRODUCTS_MODEL', 'Produkt Model:');
  define('TEXT_PRODUCTS_KEYWORD', 'Produkt sleutelwoord:');
  define('TEXT_PRODUCTS_TAGS', 'Produkt kenwoorden:');
  define('TEXT_PRODUCTS_IMAGE', 'Produkt plaatje:');
  define('TEXT_PRODUCTS_URL', 'Produkt URL:');
  define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(zonder http://)</small>');
  define('TEXT_PRODUCTS_TAX_CLASS', 'BTW klasse:');
  define('TEXT_PRODUCTS_PRICE_NET', 'Produktprijs (Netto):');
  define('TEXT_PRODUCTS_PRICE_GROSS', 'Produktprijs (Bruto):');
  define('TEXT_PRODUCTS_WEIGHT', 'Produkt gewicht:');

  define('TEXT_PRODUCT_DATE_ADDED', 'Dit produkt is toegevoegd aan onze catalogus op %s.');
  define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dit produkt zal op voorraad zijn op %s.');
  define('TEXT_PRODUCT_MORE_INFORMATION', 'Voor meer informatie kunt u de volgende <a href="http://%s" target="blank"><u>produktpagina</u></a> bezoeken.');

  define('TEXT_HOW_TO_COPY', 'Kopieermethode:');
  define('TEXT_COPY_AS_LINK', 'Link produkt');
  define('TEXT_COPY_AS_DUPLICATE', 'Vermenigvuldig produkt');

  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fout: Produkten kunnen niet in dezelfde categorie gelinkt worden.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: De catalogus images directory is niet beschrijfbaar: ' . realpath('../images'));
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: De catalogus images directory bestaat niet: ' . realpath('../images'));
  define('ERROR_IMAGE_PROCESSOR_NOT_AVAILABLE', 'Fout: Kan geen afbeeldingen verwerken omdat ImageMagicks "converteer" programma niet beschikbaar is. Dit kan ingesteld worden in Configuratie -> Programma Lokaties.');
?>