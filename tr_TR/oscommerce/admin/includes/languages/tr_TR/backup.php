<?php
/*
  $Id: backup.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Veritabanı Yedek Yöneticisi');

define('TABLE_HEADING_TITLE', 'Başlık');
define('TABLE_HEADING_FILE_DATE', 'Tarih');
define('TABLE_HEADING_FILE_SIZE', 'Büyüklük');
define('TABLE_HEADING_ACTION', 'Eylem');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Yeni Yedek');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Yerel Geri yükleme');
define('TEXT_INFO_NEW_BACKUP', 'Bir kaç dakkanızı alsa bile yedek işlemlerinde kesinti yapmayın.');
define('TEXT_INFO_UNPACK', '<br /><br />(paketsizden önce arşivden dosya ? after unpacking the file from the archive)');
define('TEXT_INFO_RESTORE', 'Geri yükleme işlemlerinde kesinti yapmayın.<br /><br />Yedeklemeden daha uzundur, bu işlemler uzun surer!<br /><br />Eğer mümkünse, mysql istemci kullanın.<br /><br />Örnek:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Geri yükleme işlermlerinde kesinti yapmayın.<br /><br />Yeteklemeden daha uzundur, bu işlemler uzun surer!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Bu yukarı yüklenen dosya ham bir sql (metin) dosyası olmalıdır.');
define('TEXT_INFO_DATE', 'Tarih:');
define('TEXT_INFO_SIZE', 'Büyüklük:');
define('TEXT_INFO_COMPRESSION', 'Sıkıştırma:');
define('TEXT_INFO_USE_GZIP', 'GZIP kullan');
define('TEXT_INFO_USE_ZIP', 'ZIP kullan');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sıkıştırma yok (Halis[saf] SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Yalnız indir (sunucu tarafinda saklama)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Bir HTTPS bağlantısı en iyi geçiş');
define('TEXT_DELETE_INTRO', 'Bu yedeği silmek istedğinize eminmisiniz?');
define('TEXT_NO_EXTENSION', 'Hiçbiri');
define('TEXT_BACKUP_DIRECTORY', 'Yedek Dizini:');
define('TEXT_LAST_RESTORATION', 'Son Geri yükleme:');
define('TEXT_FORGET', '(<u>unut</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Hata: Yedek dizini yoktur. Lütfen configure.php içinde bunu ayarlayın.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Hata: Yedek dizini yazılabilir değil.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Hata: İndirme bağı kabul edilebilir değil.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Başarılı: Bu son geri yükleme tarihi silinmiştir.');
define('SUCCESS_DATABASE_SAVED', 'Başarılı: Bu veritabanı korunmuştur.');
define('SUCCESS_DATABASE_RESTORED', 'Başarılı: Bu veritabanı geri yüklenmiştir.');
define('SUCCESS_BACKUP_DELETED', 'Başarılı: Bu yedek kaldırılmıştır.');
?>