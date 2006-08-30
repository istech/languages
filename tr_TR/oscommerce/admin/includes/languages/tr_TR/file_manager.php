<?php
/*
  $Id: file_manager.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Dosya Yöneticisi');

  define('TABLE_HEADING_FILENAME', 'İsim');
  define('TABLE_HEADING_SIZE', 'Büyüklük');
  define('TABLE_HEADING_PERMISSIONS', 'İzinler');
  define('TABLE_HEADING_USER', 'Kullanıcı');
  define('TABLE_HEADING_GROUP', 'Grup');
  define('TABLE_HEADING_WRITEABLE', 'Yazılabilir');
  define('TABLE_HEADING_LAST_MODIFIED', 'En Son Değişti');
  define('TABLE_HEADING_ACTION', 'Eylem');

  define('TEXT_INFO_HEADING_UPLOAD', 'Yukarı Yükle');
  define('TEXT_FILE_NAME', 'Dosya İsmi:');
  define('TEXT_FILE_SIZE', 'Büyüklük:');
  define('TEXT_FILE_CONTENTS', 'İçerik:');
  define('TEXT_LAST_MODIFIED', 'En Son Değişti:');
  define('TEXT_NEW_FOLDER', 'Yeni Dizin');
  define('TEXT_NEW_FOLDER_INTRO', 'Yeni dizin için bir isim girin:');
  define('TEXT_DELETE_INTRO', 'Bu doysayı silmek istediğinize eminmisiniz?');
  define('TEXT_UPLOAD_INTRO', 'Lütfen yukarı yüklemek için bir dosya seçiniz.');

  define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Hata: Bu dizine yazamıyorum. Lütfen %s üzerinde doğru kullanıcı izinlerini ayarlayınız.');
  define('ERROR_FILE_NOT_WRITEABLE', 'Hata: Bu dosyaya yazamıyorum. Lütfen %s üzerinde doğru kullanıcı izinlerini ayarlayınız.');
  define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Hata: Bu dizini kaldıramıyorum. Lütfen %s üzerinde doğru izinleri ayarlayınız.');
  define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Hata: %s Dizini yok');
  define('ERROR_DIRECTORY_EXISTS', 'Hata: %s dizin zaten var');
?>
