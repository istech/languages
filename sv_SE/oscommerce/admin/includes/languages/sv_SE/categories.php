<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Kategorier');
  define('HEADING_TITLE_SEARCH', 'Sök:');
  define('HEADING_TITLE_GOTO', 'Gå Till:');

  define('TABLE_HEADING_CATEGORIES', 'Kategorier');
  define('TABLE_HEADING_ACTION', 'Funktion');
  define('TABLE_HEADING_STATUS', 'Status');

  define('TEXT_EDIT_INTRO', 'Var vänlig och gör nödvändiga ändringar');
  define('TEXT_EDIT_PARENT_CATEGORY', 'Föräldra Kategori:');
  define('TEXT_EDIT_CATEGORIES_NAME', 'Kategorinamn:');
  define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategoribild:');
  define('TEXT_EDIT_SORT_ORDER', 'Sorteringsordning:');

  define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Ny Kategori');

  define('TEXT_DELETE_CATEGORY_INTRO', 'Är du säker att du vill ta bort denna kategori?');
  define('TEXT_DELETE_BATCH_INTRO', 'Är du säker att du vill ta bort följande kategorier?');
  define('TEXT_DELETE_WARNING_CHILDS', '<b>VARNING:</b> Det finns fortfarande %s underkategorier länkade till denna kategori!');
  define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns fortfarande %s produkter länkade till denna kategori!');

  define('TEXT_MOVE_CATEGORIES_INTRO', 'Var vänlig och välj vilken kategori du vill <b>%s</b> gå till');
  define('TEXT_MOVE_BATCH_INTRO', 'Var vänlig och välj vilken kategori du vill flytta följande kategorier till');
  define('TEXT_MOVE', 'Flytta <b>%s</b> till:');

  define('TEXT_NEW_CATEGORY_INTRO', 'Var vänlig och ange följande information för den nya kategorin');
  define('TEXT_CATEGORIES_NAME', 'Kategorinamn:');
  define('TEXT_CATEGORIES_IMAGE', 'Kategoribild:');
  define('TEXT_SORT_ORDER', 'Sorteringsordning:');

  define('EMPTY_CATEGORY', 'Tom Kategori');

  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Fel: Kategorin kan ej flyttas till underkatalog.');
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fel: Kategoribildsmappen är skrivskyddad: ' . realpath('../images/categories'));
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fel: Kategoribildsmappen existerar ej: ' . realpath('../images/categories'));
?>