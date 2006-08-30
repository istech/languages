<?php
/*
  $Id: currencies.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Para Birimleri');

define('TABLE_HEADING_CURRENCY_NAME', 'Para');
define('TABLE_HEADING_CURRENCY_CODES', 'Kod');
define('TABLE_HEADING_CURRENCY_VALUE', 'Değer');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Örnek');
define('TABLE_HEADING_ACTION', 'Eylem');

define('TEXT_INFO_INSERT_INTRO', 'Lütfen yeni para birimi ile ilgili veri giriniz');
define('TEXT_INFO_EDIT_INTRO', 'Lütfen gerekli tüm değişiklikleri yapınız');
define('TEXT_INFO_DELETE_INTRO', 'Bu para birini silmek istediğinize eminmisiniz?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Lütfen para birimi günvelleme hizmetini seçerek kullanınız.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Yeni Para Birimi ');

define('TEXT_INFO_CURRENCY_TITLE', 'Başlık:');
define('TEXT_INFO_CURRENCY_CODE', 'Kod:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Sol Sembol:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Sağ Sembol:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Ondalık Basamak:');
define('TEXT_INFO_CURRENCY_VALUE', 'Değer:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(Para Birimi değeri için bir elle güncelleme gerekli.)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Seçilmiş para birimi güncelleme hizmetini kullanarak söz konusu servisin terim ve şartlarını kabulleniyorsunuz.');

define('TEXT_INFO_CURRENCY_UPDATED', '%s (%s) için bu değişim oranı %s yolu ile başarıyla güncellendi.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Uyarı: Bu varsayılan para birimi kaldırılamaz. Lütfen başka para birimini varsayılan olarak ayarlayın ve tekrar deneyiniz.');
define('ERROR_CURRENCY_INVALID', 'Hata:  %s (%s) için bu değişim oranı %s yoluyla güncellenemedi. Bu gecerli bir para birimi kodu mudur?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Uyarı: %s (%s) için birincil oran değişim sunucusu (%s) başarısız oldu - ikinci oran değişim sunucusunu deneyin.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Uyarı: Bu varsayılan parabirimi kaldırılamaz. Lütfen başka para birimini varsayılan olarak ayarlayın ve tekrar deneyiniz.');
?>
