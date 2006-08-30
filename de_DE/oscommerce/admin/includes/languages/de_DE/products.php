<?php
/*
  $Id: products.php 885 2006-08-30 14:02:08Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Products');
  define('HEADING_TITLE_SEARCH', 'Search:');
  define('HEADING_TITLE_GOTO', 'Go To:');

  define('TAB_GENERAL', 'General');
  define('TAB_DATA', 'Data');
  define('TAB_IMAGES', 'Images');
  define('TAB_ATTRIBUTES', 'Attributes');
  define('TAB_CATEGORIES', 'Categories');

  define('FIELDSET_ASSIGNED_ATTRIBUTES', 'Assigned Attributes');

  define('TABLE_HEADING_PRODUCTS', 'Products');
  define('TABLE_HEADING_PRICE', 'Price');
  define('TABLE_HEADING_QUANTITY', 'Quantity');
  define('TABLE_HEADING_STATUS', 'Status');
  define('TABLE_HEADING_ACTION', 'Action');

  define('TEXT_NEW_PRODUCT', 'New Product');
  define('TEXT_CATEGORIES', 'Categories:');

  define('TEXT_EDIT_INTRO', 'Please make any necessary changes');

  define('TEXT_INFO_COPY_TO_INTRO', 'Please choose a new category you wish to copy this product to');
  define('TEXT_INFO_CURRENT_CATEGORIES', 'Current Categories:');

  define('TEXT_DELETE_PRODUCT_INTRO', 'Are you sure you want to permanently delete this product?');

  define('TEXT_MOVE_PRODUCTS_INTRO', 'Please select which category you wish <b>%s</b> to reside in');
  define('TEXT_MOVE', 'Move <b>%s</b> to:');

  define('TEXT_PRODUCTS_STATUS', 'Products Status:');
  define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Date Available:');
  define('TEXT_PRODUCT_AVAILABLE', 'In Stock');
  define('TEXT_PRODUCT_NOT_AVAILABLE', 'Out of Stock');
  define('TEXT_PRODUCTS_MANUFACTURER', 'Products Manufacturer:');
  define('TEXT_PRODUCTS_NAME', 'Products Name:');
  define('TEXT_PRODUCTS_DESCRIPTION', 'Products Description:');
  define('TEXT_PRODUCTS_QUANTITY', 'Products Quantity:');
  define('TEXT_PRODUCTS_MODEL', 'Products Model:');
  define('TEXT_PRODUCTS_KEYWORD', 'Products Keyword:');
  define('TEXT_PRODUCTS_TAGS', 'Products Tags:');
  define('TEXT_PRODUCTS_IMAGE', 'Products Image:');
  define('TEXT_PRODUCTS_URL', 'Products URL:');
  define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(without http://)</small>');
  define('TEXT_PRODUCTS_TAX_CLASS', 'Tax Class:');
  define('TEXT_PRODUCTS_PRICE_NET', 'Products Price (Net):');
  define('TEXT_PRODUCTS_PRICE_GROSS', 'Products Price (Gross):');
  define('TEXT_PRODUCTS_WEIGHT', 'Products Weight:');

  define('TEXT_PRODUCT_DATE_ADDED', 'This product was added to our catalog on %s.');
  define('TEXT_PRODUCT_DATE_AVAILABLE', 'This product will be in stock on %s.');
  define('TEXT_PRODUCT_MORE_INFORMATION', 'For more information, please visit this products <a href="http://%s" target="blank"><u>webpage</u></a>.');

  define('TEXT_HOW_TO_COPY', 'Copy Method:');
  define('TEXT_COPY_AS_LINK', 'Link product');
  define('TEXT_COPY_AS_DUPLICATE', 'Duplicate product');

  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: Can not link products in the same category.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Product images directory is not writeable: ' . realpath('../images/products'));
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: Product images directory does not exist: ' . realpath('../images/products'));
?>
