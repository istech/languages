<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Kategoriler');
  define('HEADING_TITLE_SEARCH', 'Ara:');
  define('HEADING_TITLE_GOTO', 'Git:');

  define('TABLE_HEADING_CATEGORIES', 'Kategoriler');
  define('TABLE_HEADING_ACTION', 'Eylem');
  define('TABLE_HEADING_STATUS', 'Durum');

  define('TEXT_EDIT_INTRO', 'Lütfen gerekli değişiklerden herhangi birini yapınız');
  define('TEXT_EDIT_CATEGORIES_NAME', 'Kategori İsmi:');
  define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategori Resimi:');
  define('TEXT_EDIT_SORT_ORDER', 'Sıralama Düzeni:');

  define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Yeni Kategori');

  define('TEXT_DELETE_CATEGORY_INTRO', 'Bu kategoriyi silmek istediğinize emin misiniz?');
  define('TEXT_DELETE_WARNING_CHILDS', '<b>UYARI:</b> Bu kategoriye halen bağlı %s (evlat-)kategori var!');
  define('TEXT_DELETE_WARNING_PRODUCTS', '<b>UYARI:</b> Bu kategoriye halen bağlı %s ürün var!');

  define('TEXT_MOVE_CATEGORIES_INTRO', '<b>%s</b> Lütfen yerleştirmeği dilediğiniz hangi kategoriyse seçiniz');
  define('TEXT_MOVE', 'Taşı <b>%s</b> buraya:');

  define('TEXT_NEW_CATEGORY_INTRO', 'Bu yeni kategori için lütfen aşağıdaki bilgileri doldurun');
  define('TEXT_CATEGORIES_NAME', 'Kategori İsmi:');
  define('TEXT_CATEGORIES_IMAGE', 'Kategori Resmi:');
  define('TEXT_SORT_ORDER', 'Sıralama Düzeni:');

  define('EMPTY_CATEGORY', 'Boş Kategori');

  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Hata: Kategori evlat kategoriye taşınamaz.');
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Hata: Kategori resmi yazılabilir degil: ' . realpath('../images/categories'));
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Hata: Kategori resmi dizini yok: ' . realpath('../images/categories'));
?>
