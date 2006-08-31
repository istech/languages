<?php
/*
  $Id: products.php 608 2006-07-05 10:56:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Ürünler');
  define('HEADING_TITLE_SEARCH', 'Ara:');
  define('HEADING_TITLE_GOTO', 'Git:');

  define('TAB_GENERAL', 'Genel');
  define('TAB_DATA', 'Tarih');
  define('TAB_IMAGES', 'Resimler');
  define('TAB_ATTRIBUTES', 'Öznitelikler');
  define('TAB_CATEGORIES', 'Kategoriler');

  define('FIELDSET_ASSIGNED_ATTRIBUTES', 'Atanmış Öznitelikler');

  define('TABLE_HEADING_PRODUCTS', 'Ürünler');
  define('TABLE_HEADING_PRICE', 'Fiyat');
  define('TABLE_HEADING_QUANTITY', 'Miktar');
  define('TABLE_HEADING_STATUS', 'Durumlar');
  define('TABLE_HEADING_ACTION', 'Eylem');

  define('TEXT_NEW_PRODUCT', 'Yeni Ürün');
  define('TEXT_CATEGORIES', 'Kategoriler:');

  define('TEXT_EDIT_INTRO', 'Lütfen gerekli tüm değişiklikleri yapınız');

  define('TEXT_INFO_COPY_TO_INTRO', 'Lütfen bu ürünü kopyalamak istediğiniz yeni kategortiyi seçiniz');
  define('TEXT_INFO_CURRENT_CATEGORIES', 'Mevcut Kategorisi:');

  define('TEXT_DELETE_PRODUCT_INTRO', 'Bu ürünü daimi olarak silmek istediğinize emin misiniz?');

  define('TEXT_MOVE_PRODUCTS_INTRO', 'Lütfen <b>%s</b> ürününü içine yerleştirmeği dilediğiniz hangi kategoriyse seçiniz');
  define('TEXT_MOVE', 'Taşı <b>%s</b> buraya:');

  define('TEXT_PRODUCTS_STATUS', 'Ürün Durumu:');
  define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Elde Edilebilirlilik Tarihi:');
  define('TEXT_PRODUCT_AVAILABLE', 'Stokta var');
  define('TEXT_PRODUCT_NOT_AVAILABLE', 'Stokta yok');
  define('TEXT_PRODUCTS_MANUFACTURER', 'Ürün Üretiticisi:');
  define('TEXT_PRODUCTS_NAME', 'Ürün İsmi:');
  define('TEXT_PRODUCTS_DESCRIPTION', 'Ürün Açıklaması:');
  define('TEXT_PRODUCTS_QUANTITY', 'Ürün Miktarı:');
  define('TEXT_PRODUCTS_MODEL', 'Ürün Modeli:');
  define('TEXT_PRODUCTS_KEYWORD', 'Ürün Anahtar Kelimeleri(*):');
  define('TEXT_PRODUCTS_TAGS', 'Ürün Tagları(*):');
  define('TEXT_PRODUCTS_IMAGE', 'Ürün Resimi:');
  define('TEXT_PRODUCTS_URL', 'Ürün URL:');
  define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(http:// kullanmadan)</small>');
  define('TEXT_PRODUCTS_TAX_CLASS', 'Vergi Sınıfı:');
  define('TEXT_PRODUCTS_PRICE_NET', 'Ürün Fiyatı (Net):');
  define('TEXT_PRODUCTS_PRICE_GROSS', 'Ürün Fiyatı (Bürüt):');
  define('TEXT_PRODUCTS_WEIGHT', 'Ürün Ağırlığı:');

  define('TEXT_PRODUCT_DATE_ADDED', 'Bu ürün %s katalogumuza tarihinde eklenmiştir.');
  define('TEXT_PRODUCT_DATE_AVAILABLE', 'Bu ürün % de stoklarımızda olacaktır.');
  define('TEXT_PRODUCT_MORE_INFORMATION', 'Daha fazla bilgi için, lütfen bu ürünün <a href="http://%s" target="blank"><u>web sayfasını</u></a> ziyaret ediniz.');

  define('TEXT_HOW_TO_COPY', 'Kopya Yöntemi:');
  define('TEXT_COPY_AS_LINK', 'Bağ Ürün');
  define('TEXT_COPY_AS_DUPLICATE', 'Teksir Ürün');

  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Hata: bağ ürün aynı kategoride yapılamaz.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Hata: Katalog images dizini yazılabilir degil: ' . realpath('../images'));
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Hata: Katalog images dizini yok: ' . realpath('../images'));
  define('ERROR_IMAGE_PROCESSOR_NOT_AVAILABLE', 'Hata: ImageMagicks "dönüştürücü" programı kullanılabilir değil iken ürün resmi işlenemedi. Yapılandırma -> Program Yerleri içinde bu tanımlanabilir.');
?>
