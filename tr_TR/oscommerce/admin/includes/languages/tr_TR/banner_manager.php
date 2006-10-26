<?php
/*
  $Id: banner_manager.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Reklam Yöneticisi');

define('TABLE_HEADING_BANNERS', 'Reklamlar');
define('TABLE_HEADING_GROUPS', 'Gruplar');
define('TABLE_HEADING_STATISTICS', 'Görünenler / Tıklananlar');
define('TABLE_HEADING_STATUS', 'Durum');
define('TABLE_HEADING_ACTION', 'Eylem');

define('TEXT_BANNERS_TITLE', 'Reklam Başlığı:');
define('TEXT_BANNERS_URL', 'Reklam URL:');
define('TEXT_BANNERS_GROUP', 'Reklam Grubu:');
define('TEXT_BANNERS_NEW_GROUP', ', yada aşağıya yeni bir reklam grubu girin.');
define('TEXT_BANNERS_IMAGE', 'Resim:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', yada aşağıya yerel dosyayı girin.');
define('TEXT_BANNERS_IMAGE_TARGET', 'Resim Hedefe (Kaydet):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Yazı:');
define('TEXT_BANNERS_EXPIRES_ON', 'Son Kullanım Süresi Dolar:');
define('TEXT_BANNERS_OR_AT', ', veya ');
define('TEXT_BANNERS_IMPRESSIONS', 'izlenimler/görüşler');
define('TEXT_BANNERS_SCHEDULED_AT', 'Tarife Ata:');
define('TEXT_BANNERS_STATUS', 'Durum:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Reklam Notları:</b><ul><li>Bu reklam için bir resim veya HTML metni kullanın - herikisi birden değil.</li><li>HTML Metni bir resimden daha önceliklidir.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Resim Notları:</b><ul><li>Yukarı yüklenecek dizin kullanıcıya özel (yazma) iznine sahip olmadır! </li><li>Eğer bu web sunucusuna bir resim yukarı yüklemiyorsanız (önr: yerel (sunucu tarafında) bir resim kullanıyorsan) bu \'Hedefe Kaydet\' alanını doldurmayın.</li><li>Bu \'Hedefe Kaydet\' alanı bir düz yarma ile biten (örn: reklamlar/) bir dizin olmalıdır.</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Son Kullanım Notları:</b><ul><li>İki alandan yalnız biri gönderilebilir.</li><li>Eğer bu reklamın otomatik süresi bitmiyorsa, o zaman bu alanları boş bırakın</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Tarife Notları:</b><ul><li>Eğer bir tarife ayarlanırsa, reklam o tarihde aktif olacaktır.</li><li>Tüm tarifeli reklamlar kendi tarihlerine varıncaya kadar aktif degil olarak işaretlidir, sonradan aktif işaretli olcaktırlar.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Tarihinde Eklendi:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Tarifelendi: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Son Kullanma Süresi: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Son Kullanma Süresi: <b>%s</b> izlenim/etki');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status Change: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Son 3 Gün');
define('TEXT_BANNERS_BANNER_VIEWS', 'Reklam Gösterimleri');
define('TEXT_BANNERS_BANNER_CLICKS', 'Reklam Tıklamaları');

define('TEXT_INFO_INSERT_INTRO', 'Lütfen yeni reklam ile ilgili veri giriniz');
define('TEXT_INFO_EDIT_INTRO', 'Lütfen gerekli tüm değişiklikleri yapınız');
define('TEXT_INFO_DELETE_INTRO', 'Bu reklamı silmek istediğinie emin misiniz?');
define('TEXT_INFO_DELETE_IMAGE', 'Reklam resimini sil');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Yeni Reklam');

define('SUCCESS_BANNER_INSERTED', 'Başarılı: Bu reklam eklendi.');
define('SUCCESS_BANNER_UPDATED', 'Başarılı: Bu reklam güncellendi.');
define('SUCCESS_BANNER_REMOVED', 'Başarılı: Bu reklam kaldırıldı..');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Başarılı: Bu reklamın durumu güncellendi.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Hata: Reklam başlığı gerekli.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Hata: Reklam grubu gerekli.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Hata: Hedef dizin yok: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Hata: Hedef dizin yazılabilir değil: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Hata: Resim yok.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Hata: Resimi kaldırılamıyor.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Hata: Bilinmeyen durum bayrağı.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Hata: Graphs dizini yok. Lütfen \'images\' dizini içinde bir \'graphs\' dizini yapın.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Hata: Graphs dizini yazılabilir değil.');

define('TABLE_HEADING_SOURCE', 'Kaynak');
define('TABLE_HEADING_VIEWS', 'Gosterimler');
define('TABLE_HEADING_CLICKS', 'Tıklamalar');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s Günlük İstatistikler için  %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Aylık İstatistikler için %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Yıllık İstatistikler');

define('STATISTICS_TYPE_DAILY', 'Günlük');
define('STATISTICS_TYPE_MONTHLY', 'Aylık');
define('STATISTICS_TYPE_YEARLY', 'Yıllık');

define('TITLE_TYPE', 'Tip:');
define('TITLE_YEAR', 'Yıl:');
define('TITLE_MONTH', 'Ay:');
?>
