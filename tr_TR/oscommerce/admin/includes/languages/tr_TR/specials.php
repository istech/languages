<?php
/*
  $Id: specials.php 448 2006-02-21 06:27:28Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'İndirimdekiler');

define('TABLE_HEADING_PRODUCTS', 'Ürünler');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Ürün Fiyatı');
define('TABLE_HEADING_STATUS', 'Durumlar');
define('TABLE_HEADING_ACTION', 'Eylem');

define('TEXT_SPECIALS_PRODUCT', 'Ürün:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Özel Fiyat (Net):');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Özel Fiyat (Bürüt):');
define('TEXT_SPECIALS_STATUS', 'Durumlar:');
define('TEXT_SPECIALS_START_DATE', 'Başlama Tarihi:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Son Erme Tarihi:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Özel Notlar:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Tariihinde Eklendi:');
define('TEXT_INFO_LAST_MODIFIED', 'En Son Değiştirildi:');
define('TEXT_INFO_NEW_PRICE', 'Yeni Fiyat:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Özgün Fiyat:');
define('TEXT_INFO_PERCENTAGE', 'Yuzdelik Değer:');
define('TEXT_INFO_EXPIRES_DATE', 'Sona Erme Tarihi:');
define('TEXT_INFO_STATUS_CHANGE', 'Durumu Degiştir:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'İndirmdekini Sil');
define('TEXT_INFO_DELETE_INTRO', 'İndirdeki özel ürün fiyatını silmek istediğinize emin misiniz?');

define('ERROR_SPECIALS_PRICE', 'İndirimdeki ürün fiyatı özgün ürün fiyatının üstünde yada eksi olamaz.');
define('ERROR_SPECIALS_DATE', 'Sona erme tarihi başlangıç tarihden öndedir');
?>