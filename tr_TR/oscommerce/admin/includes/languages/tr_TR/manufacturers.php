<?php
/*
  $Id: manufacturers.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Üreticiler');

define('TABLE_HEADING_MANUFACTURERS', 'Üreticiler');
define('TABLE_HEADING_URL_CLICKS', 'URL Tıklamaları');
define('TABLE_HEADING_ACTION', 'Eylem');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Yeni Üretici');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Üretici Düzelt');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Üretici Sil');

define('TEXT_MANUFACTURERS', 'Üreticiler:');
define('TEXT_DATE_ADDED', 'Tarihinde Eklendi:');
define('TEXT_LAST_MODIFIED', 'En Son Değişti:');
define('TEXT_PRODUCTS', 'Ürünler:');

define('TEXT_NEW_INTRO', 'Lütfen yeni üretici için takip eden bilgileri doldurunuz');
define('TEXT_EDIT_INTRO', 'Lütfen gerekli tüm değişiklikleri yapınız');

define('TEXT_MANUFACTURERS_NAME', 'Üretici İsimleri:');
define('TEXT_MANUFACTURERS_IMAGE', 'Üretici Resimleri:');
define('TEXT_MANUFACTURERS_URL', 'Üretici URL\'leri:');

define('TEXT_DELETE_INTRO', 'Bu üreticiyi silmek istediğinize emin misiniz?');
define('TEXT_DELETE_IMAGE', 'Üretici resmini sil?');
define('TEXT_DELETE_PRODUCTS', 'Ürünleri bu üreticiden sil? (ürün yorumları, indirimdeki ürünler ve yakında gelcek ürünleri içerir)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>UYARI:</b> Bu üreticiye halen bağlı olan %s ürün var!');

define('ERROR_MANUFACTURER_NAME', 'Hata: Üretiçi ismi boş olamaz');
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Hata: Üreticiler resim dizini yazılabilir degil: ' . realpath('../images/manufacturers'));
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Hata: Üreticiler resim dizini yok: ' . realpath('../images/manufacturers'));
?>