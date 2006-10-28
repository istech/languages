<?php
/*
  $Id: tr_TR.php 658 2006-07-19 20:28:32Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Yardım');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Destek Sitesi');
define('HEADER_TITLE_ONLINE_CATALOG', 'Çevrimiçi Katalog');
define('HEADER_TITLE_LANGUAGES', 'Diller');

define('BOX_CONNECTION_PROTECTED', 'Bu güvenli %s SSL  bağlantısıyla korunmaktanızın.');
define('BOX_CONNECTION_UNPROTECTED', 'Güvenli SSL bağlantısıyla koruma<font color="#ff0000">ma</font>ktasınız.');
define('BOX_CONNECTION_UNKNOWN', 'bilinmeyen');

// text for gender
define('MALE', 'Bay');
define('FEMALE', 'Bayan');

// text for date of birth example
define('DOB_FORMAT_STRING', 'gg/aa/yyyy');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Yöneticiler');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Yapılandırma');
define('BOX_CONFIGURATION_MYSTORE', 'Mağazam');
define('BOX_CONFIGURATION_LOGGING', 'Günlük');
define('BOX_CONFIGURATION_CACHE', 'Önbellek');
define('BOX_CONFIGURATION_SERVICES', 'Hizmetler');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Kredi Kartı Tipleri');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modüller');
define('BOX_MODULES_PAYMENT', 'Ödeme');
define('BOX_MODULES_SHIPPING', 'Kargo');
define('BOX_MODULES_ORDER_TOTAL', 'Sipariş Toplamı');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES', 'Kategoriler');
define('BOX_CATALOG_PRODUCTS', 'Ürünler');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Ürün Öznitelikleri');
define('BOX_CATALOG_MANUFACTURERS', 'Üreticiler');
define('BOX_CATALOG_REVIEWS', 'Yorumlar');
define('BOX_CATALOG_SPECIALS', 'Özel Ürünler');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Beklenen Ürünler');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Müşteriler');
define('BOX_CUSTOMERS_CUSTOMERS', 'Müşteriler');
define('BOX_CUSTOMERS_ORDERS', 'Şiparişler');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Yerler / Vergiler');
define('BOX_TAXES_COUNTRIES', 'Ülkeler');
define('BOX_TAXES_ZONES', 'Bölgeler');
define('BOX_TAXES_GEO_ZONES', 'Vergi Bölgesi');
define('BOX_TAXES_TAX_CLASSES', 'Vergi Sınıfları');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Raporlar');
define('BOX_REPORTS_STATISTICS', 'İstatistikler');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Araçlar');
define('BOX_TOOLS_BACKUP', 'Veritabanı Yedekleme');
define('BOX_TOOLS_BANNER_MANAGER', 'Reklam Yöneticisi');
define('BOX_TOOLS_CACHE', 'Önbellek Kontrolü');
define('BOX_TOOLS_IMAGES', 'Resimler');
define('BOX_TOOLS_FILE_MANAGER', 'Dosya Yöneticisi');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Haber Postası Yöneticisi');
define('BOX_TOOLS_SERVER_INFO', 'Sunucu Bilgisi');
define('BOX_TOOLS_WHOS_ONLINE', 'Kimler Çevrimiçi');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Yerelleştirme');
define('BOX_LOCALIZATION_CURRENCIES', 'Para Birimleri');
define('BOX_LOCALIZATION_LANGUAGES', 'Diller');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Sipariş Durumları');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Ağırlık Sınıfları');
define('BOX_LOCALIZATION_IMAGE_GROUPS', 'Resim Grupları');

define('BOX_HEADING_LOGOFF', 'Çıkış');

// javascript messages
define('JS_ERROR', 'Form işlemleriniz sırasında hatalarla karşılaşıldı!\nLütfen aşağıdaki düzeltmeleri yapın:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Bu yeni ürün özelliği fiyat değeri gerektirir\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Bu yeni ürün özelliği fiyat öneki gerektirir.\n');
define('JS_PRODUCTS_NAME', '* Bu yeni ürün bir isim gerektirir.\n');
define('JS_PRODUCTS_DESCRIPTION', '* Bu yeni ürün bir tanımlama gerektirir.\n');
define('JS_PRODUCTS_PRICE', '* Bu yeni ürün bir fiyat değeri gerektirir.\n');
define('JS_PRODUCTS_WEIGHT', '* Bu yeni ürün bir ağırlık değeri gerektirir.\n');
define('JS_PRODUCTS_QUANTITY', '* Bu yeni ürün bir miktar değeri gerektirir.\n');
define('JS_PRODUCTS_MODEL', '* Bu yeni ürün bir model değeri gerektirir.\n');
define('JS_PRODUCTS_IMAGE', '* Bu yeni ürün bir resim değeri gerektirir.\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Bu ürün için yeni bir ürün fiyatı ayarlanmalıdır.\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Sipariş Numarası %s yoktur!');

define('CATEGORY_PERSONAL', 'Kişisel');
define('CATEGORY_ADDRESS', 'Adresler');
define('CATEGORY_CONTACT', 'İletişim');
define('CATEGORY_COMPANY', 'Şirket');
define('CATEGORY_OPTIONS', 'Seçenekler');

define('ENTRY_GENDER', 'Cinsiyet:');
define('ENTRY_GENDER_ERROR', 'Lütfen cinsiyetinizi seçiniz.');
define('ENTRY_FIRST_NAME', 'İsim:');
define('ENTRY_FIRST_NAME_ERROR', 'İsminiz en az ' . ACCOUNT_FIRST_NAME . ' karakter içermelidir.');
define('ENTRY_LAST_NAME', 'Soyad:');
define('ENTRY_LAST_NAME_ERROR', 'Soyadınız en az ' . ACCOUNT_LAST_NAME . ' karakter içermelidir.');
define('ENTRY_DATE_OF_BIRTH', 'Doğum Tarihi:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Doğum tarihiniz doğru ayarlanmalıdır.');
define('ENTRY_EMAIL_ADDRESS', 'E-Posta Adresi:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'E-Posta Adresiniz ' . ACCOUNT_EMAIL_ADDRESS . ' karakter içermelidir.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'E-Posta Adresiniz geçerli görünmüyor - Lütfen gerekli düzeltmeyi yapın.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'E-Posta Adresiniz kayıtlarımızda zaten var - lütfen bu e-posta adresiyle giriş yapın yada farklı bir adresle bir hesap açınız.');
define('ENTRY_COMPANY', 'Şirket Adı:');
define('ENTRY_COMPANY_ERROR', 'Şirket Adınız en az ' . ACCOUNT_COMPANY . ' karakter içermeldir.');
define('ENTRY_STREET_ADDRESS', 'Sokak Adresi:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Sokak Adresiniz en az ' . ACCOUNT_STREET_ADDRESS . ' karakter içermelidir.');
define('ENTRY_SUBURB', 'Yörekent:');
define('ENTRY_SUBURB_ERROR', 'Yörekentiniz en az ' . ACCOUNT_SUBURB . ' karakter içermelidir.');
define('ENTRY_POST_CODE', 'Posta Kodu:');
define('ENTRY_POST_CODE_ERROR', 'Posta Kodunuz en az ' . ACCOUNT_POST_CODE . ' karakter içermelidir.');
define('ENTRY_CITY', 'Şehir:');
define('ENTRY_CITY_ERROR', 'Şehiriniz en az ' . ACCOUNT_CITY . ' karakter içermelidir.');
define('ENTRY_STATE', 'Eyalet/Vilayet:'); //////// alp.2006 Osmanlıda il anlamında kullanılır. ///////
define('ENTRY_STATE_ERROR', 'Eyaletiniz en az ' . ACCOUNT_STATE . ' karakter içermelidir.');
define('ENTRY_STATE_ERROR_SELECT', 'Lütfen aşağı çekilir menuden bir eyalet seçiniz.');
define('ENTRY_COUNTRY', 'Ülke:');
define('ENTRY_COUNTRY_ERROR', 'Aşağı açılır menudeki ülkelerden bir ülke seçmek zorundasınız.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefon Numarası:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Telefon Numaranız en az ' . ACCOUNT_TELEPHONE . ' karakter içermelidir.');
define('ENTRY_FAX_NUMBER', 'Faks Numarası:');
define('ENTRY_FAX_NUMBER_ERROR', 'Faks Numaranız en az ' . ACCOUNT_FAX . ' karakter içermelidir.');
define('ENTRY_NEWSLETTER', 'Haber Postası:');
define('ENTRY_NEWSLETTER_YES', 'Abone Ol');
define('ENTRY_NEWSLETTER_NO', 'Abone Olma');
define('ENTRY_PASSWORD', 'Parola:');
define('ENTRY_PASSWORD_ERROR', 'Parolanız en az ' . ACCOUNT_PASSWORD . ' karakter içermelidir.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Bu Parola Doğrulaması parolanızla aynı olmalıdır.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Parola Doğrulama:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'E-Posta Göner');
define('IMAGE_APPROVE', 'Kabul et');
define('IMAGE_BACK', 'Geri');
define('IMAGE_BACKUP', 'Yedek');
define('IMAGE_BOX_REMOVE', 'Kutu Kaldır');
define('IMAGE_CANCEL', 'İptal');
define('IMAGE_CONFIGURE', 'Yapılandır');
define('IMAGE_CONFIRM', 'Doğrula');
define('IMAGE_COPY', 'Kopya');
define('IMAGE_COPY_TO', 'Kopyala');
define('IMAGE_DEFAULT', 'Varsayilan');
define('IMAGE_DETAILS', 'Ayrıntılar');
define('IMAGE_DELETE', 'Sil');
define('IMAGE_EDIT', 'Düzelt');
define('IMAGE_EDIT_DEFINITIONS', 'Tanımları Düzelt');
define('IMAGE_EMAIL', 'Eposta');
define('IMAGE_EXECUTE', 'Çalıştır');
define('IMAGE_EXPORT', 'Haric');
define('IMAGE_FILE_MANAGER', 'Dosya Yönetiçisi');
define('IMAGE_ICON_STATUS_GREEN', 'Aktif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Aktif Ayarla');
define('IMAGE_ICON_STATUS_RED', 'Aktif Değil');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Aktif Değil Ayarla');
define('IMAGE_ICON_INFO', 'Bilgi');
define('IMAGE_IMPORT', 'Dahil');
define('IMAGE_INFO', 'Bilgi');
define('IMAGE_INSERT', 'Ekle');
define('IMAGE_LOCK', 'Kilitli');
define('IMAGE_LOGIN', 'Giriş');
define('IMAGE_MODULE_INSTALL', 'Modülü Kur');
define('IMAGE_MODULE_REMOVE', 'Modülü Kaldır');
define('IMAGE_MOVE', 'Taşı');
define('IMAGE_NEW_BANNER', 'Yeni Reklam');
define('IMAGE_NEW_CATEGORY', 'Yeni Kategori');
define('IMAGE_NEW_COUNTRY', 'Yeni Ülke');
define('IMAGE_NEW_CURRENCY', 'Yeni Para Birimi');
define('IMAGE_NEW_FILE', 'Yeni Dosya');
define('IMAGE_NEW_FOLDER', 'Yeni Dizin');
define('IMAGE_NEW_LANGUAGE', 'Yeni Dil');
define('IMAGE_NEW_NEWSLETTER', 'Yeni Haber Postası');
define('IMAGE_NEW_PRODUCT', 'Yeni Ürün');
define('IMAGE_NEW_TAX_CLASS', 'Yeni Vergi Sınıfı');
define('IMAGE_NEW_TAX_RATE', 'Yeni Vergi Oranı');
define('IMAGE_NEW_TAX_ZONE', 'Yeni Vergi Bölgesi');
define('IMAGE_NEW_ZONE', 'Yeni Bölge');
define('IMAGE_ORDERS', 'Siparişler');
define('IMAGE_ORDERS_INVOICE', 'Fatura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Paket Fişi(İrsaliye)');
define('IMAGE_PREVIEW', 'Önizleme');
define('IMAGE_REJECT', 'Geri çevir');
define('IMAGE_RESTORE', 'Geri yükle');
define('IMAGE_RESET', 'Yeniden ayarla');
define('IMAGE_SAVE', 'Kaydet');
define('IMAGE_SEARCH', 'Ara');
define('IMAGE_SELECT', 'Seç');
define('IMAGE_SEND', 'Gönder');
define('IMAGE_SEND_EMAIL', 'Eposta Gönder');
define('IMAGE_UNLOCK', 'Kilitsiz');
define('IMAGE_UPDATE', 'Güncelle');
define('IMAGE_UPDATE_CURRENCIES', 'Değişim Oranlarını Güncelle');
define('IMAGE_UPLOAD', 'Yukar Yükle');

define('ICON_CROSS', 'Yanlış');
define('ICON_CURRENT_FOLDER', 'Şu anki Dizin');
define('ICON_DELETE', 'Sil');
define('ICON_ERROR', 'Hata');
define('ICON_FILE', 'Dosya');
define('ICON_FILE_DOWNLOAD', 'İndir');
define('ICON_FOLDER', 'Dizin');
define('ICON_LOCKED', 'Kilitli');
define('ICON_PREVIOUS_LEVEL', 'Önçeki Aşama');
define('ICON_PREVIEW', 'Önizleme');
define('ICON_STATISTICS', 'İstatistik');
define('ICON_SUCCESS', 'Başarılı');
define('ICON_TICK', 'Doğru');
define('ICON_UNLOCKED', 'Kilitsiz');
define('ICON_WARNING', 'Uyarı');

define('BUTTON_CANCEL', 'İptal');
define('BUTTON_BACK', 'Geri');
define('BUTTON_DELETE', 'Sil');
define('BUTTON_INSERT', 'Ekle');
define('BUTTON_OK', 'Tamam');
define('BUTTON_SAVE', 'Kaydet');
define('BUTTON_SEND', 'Gönder');

define('ICON_FILES', 'Dosyalar');
define('ICON_ORDERS', 'Siparişler');
define('ICON_PRODUCTS', 'Ürünler');

define('TEXT_RESULT_PAGE', 'Sayfa No&nbsp;%s&nbsp;toplam&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> yöneticiden)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> reklam)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> kategoriden)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> ülkeden)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> kredi kartından)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> müşteriden)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> para biriminden)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> dilden)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> üreticiden)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> haber postasından)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> siparişten)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> sipariş durumundan)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> ürün özniteliklerinden)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> ürün öznitelikleri grubundan)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> üründen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> beklenen üründen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> ürün yorumundan)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> özel ürünlerden)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> vergi sınıfından)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> vergi alanından)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> vergi oranından)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> ağırlık sınıfından)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Gösterilen <b>%d</b> - <b>%d</b> (<b>%d</b> alandan)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'varsayılan');
define('TEXT_SET_DEFAULT', 'varsayılan olarak ayarla');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Gerekli</span>');
define('TEXT_IMAGE_NONEXISTENT', 'RESIM YOK');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Hata: Şu anda mevcut varsayılan para birimi ayarlı değil.  Lütfen buradan bi ayarlayın: Yönetim Araçları->Yerelleştirme->Para Birimleri');

define('TEXT_CACHE_CATEGORIES', 'Katergoriler Kutusu');
define('TEXT_CACHE_MANUFACTURERS', 'Üreticiler Kutusu');
define('TEXT_CACHE_ALSO_PURCHASED', 'Aynı Zamanda Satılan Modülü');

define('TEXT_NONE', '--boş--');
define('TEXT_TOP', 'Üst');
define('TEXT_TRUE', 'Doğru');
define('TEXT_FALSE', 'Yanlış');
define('TEXT_OPTIONAL', 'Seçimlik');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Hata: Error: varacağı yer yoktur.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Hata: varacağı yer yazılabilir değildir.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Hata: Bu dosyayı kaldıramıyorum. Lütfen %s üzerinde doğru kullanıcı izinlerini ayarlayın.');
define('ERROR_FILE_NOT_SAVED', 'Hata: Yukarı yüklenen dosya kaydedilmedi.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Hata: Yukarı yüklenen doysa tipine musade edilmiyor.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Başarılı: Yukarı yüklenen dosya başarıyala kaydedildi.');
define('WARNING_NO_FILE_UPLOADED', 'Uyarı: Yukarı dosya yüklenmedi.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Uyarı: php.ini ayara dosyası içinde doysa yukarı yükleme kullanılamaz.');

define('SUCCESS_DB_ROWS_UPDATED', 'Başarılı: Kaydınız başarıyla güncellendi!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Uyarı: Veri içeriginiz başlangışla aynı olduğundan girdiniz güncellenmedi.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Hata: Girdiniz bir hatadan dolayı yukarı yüklenmedi.');
?>
