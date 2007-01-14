# $Id$
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2006 osCommerce
#
# Released under the GNU General Public License

page_title_installation = Yeni Kurulum

page_heading_step_1 = Veritabanı Sunucusu
page_heading_step_2 = Web Sunucusu
page_heading_step_3 = Çeverimiçi Mağaza Ayarları
page_heading_step_4 = Tamamlandı!

text_installation = <p>Bu web arayüzlü kurulum işlemi sunucunuzda osCommerce çalıştırmanız için gerekli ayarları gerçekleştirmenize yardım edecektir.</p><p>Lütfen veritabanı sunucusu, web sunucusu ve mağaza ayarları seçenekleri ekranlarındaki talimatları dikkatli takip ediniz. Herhangi bir safhada yardıma ihtiyacınız olursa dökümanlara başvurabilir veya topluluk destek forumlarında yardım arayabilirsiniz.</p>

text_successful_installation = Kurulum ve ayar işlemleri başarıyla tamamlandı!

param_database_server = Veritabanı Sunucusu
param_database_server_description = Anamakina adı veya IP adresi biçiminde veritabanı sunucusunun adresi. 
param_database_username = Kullanıcı İsmi
param_database_username_description = Veritabanı sunucusuna bağlantıda kullanılan kullanıcı adı.
param_database_password = Şifre
param_database_password_description = Veritabanı sunucusuna bağlantıda kullanıcı adı ile birlikte kullanılan parola.
param_database_name = Veritabanı İsmi
param_database_name_description = Verilerin içinde tutulduğu veritabanının adı.
param_database_type = Veritabanı Türü
param_database_type_description = Kullanılan veritabanı sunucusu yazılımı.
param_database_prefix = Veritabanı Tablo Öneki
param_database_prefix_description = Veritabanı tabloları için önek kullan.

param_database_import_sample_data = Örnek Veri Dahil Et.
param_database_import_sample_data_description = Veritabanı içine örnek veri eklenmesi ilk kez kurulumda önerilir.

param_web_address = WWW Adresi
param_web_address_description = Çevrimiçi mağaza için web adresi
param_web_root_directory = Web Sunucusu Kök Dizini
param_web_root_directory_description = Dizin, çevirimiçi mağazanın sunucuda kurulacağı yerdir.
param_web_work_directory = Çalışma Dizini
param_web_work_directory_description = Geçici yapılan dosyalar için çalışma dizini. Bu dizinin yeri güvenlik nedenleriyle halka açık olan web sunucusunun kök dizininin dışında olmalıdır.  (Paylaşımlı sunucu bulundurma hizmetilerinde /tmp/ kullanmayınız)

param_store_name = Mağaza İsmi
param_store_name_description = Halka sunulacak olan çevirimiçi mağaza adı.
param_store_owner_name = Mağaza Sahibi Adı
param_store_owner_name_description = Halka sunulacak olan çevirimiçi mağaza sahibi ismi.
param_store_owner_email_address = Mağaza Sahibi E-Posta Adresi
param_store_owner_email_address_description = Halka sunulacak olan çevirimiçi mağaza sahibinin e-posta adresi.
param_administrator_username = Yönetici Kullanıcı Adı
param_administrator_username_description = Yönetim araçlarını kullanmak için yönetici kullanıcı adı.
param_administrator_password = Yönetici Şifresi
param_administrator_password_description = Yönetici hesabında kullanmak için parola.

box_steps_step_1 = Veritabanı Sunucusu
box_steps_step_2 = Web Sunucusu
box_steps_step_3 = Çevrimiçi Mağaza Ayarları
box_steps_step_4 = Tamamlandı!

box_info_step_1_title = Adım 1: Veritabanı Sunucusu
box_info_step_1_text = <p>Ürün bilgisi, müşteri bilgisi ve yapılan sipariş işlemleri gibi online mağazanızın içeriğinin kaydedildiği veritabanı sunucusu.</p><p>Veritabanı sunucu parametrelerini halen bilmiyorsanız, lütfen sunucu yöneticinize başvurun.</p>

box_info_step_2_title = Adım 2: Web Sunucusu
box_info_step_2_text = <p>Ziyaretçi ve müşterilerinize online mağazanızın sayfalarını sunacak web sunucusu. Web sunucusu parametrelerindeki bağlantıların doğru yerlere hedeflendiğine emin olunuz.</p><p>Oturum bilgileri ve önbellek dosyaları gibi geçiçi dosyalar çalışma dizini içinde tutulacaktır. Bu dizinin web sunucusu kök dizini dışında ve genel erişimden korunan bir yerde olması önemlidir.</p>

box_info_step_3_title = Adım 3: Çevrimiçi Mağaza Ayarları
box_info_step_3_text = <p>Burada çevrimiçi mağazanızın ismini ve mağaza sahibi için iletişim bilgilerini tanımlayacaksınız.</p><p>Yönetici kullanıcı ismi ve şifresi korumalı yönetim araçları bölümüne giriş yapmanızda kullanılacaktır.</p>

box_info_step_4_title = Adım 4: Tamamlandı!
box_info_step_4_text = <p>Çevrimiçi mağaza çözümünü olarak osCommerce kurduğunuz ve ayarladığınız için tebrikler!</p><p>
Çevrimiçi mağazanızın sizin için en iyisi olduğunu umuyoruz ve sizi topluluğumuza katılmaya davet ediyoruz.</p><p align="right">- osCommerce Türkiye Takımı</p>

error_configuration_file_not_writeable = <p>Dosya izini problemleri nedeniyle web sunucusu çevrimiçi mağaza parametrelerini ayar dosyasına yazamıyor.</p><p>Lütfen web sunucusunun ayar dosyasına yazması için gerekli izinleri verdiğinize emin olunuz ve Tekrar Dene düğmesine tıklayarak tekrar deneyiniz.</p><p>Ayar dosyasının bulunduğu yer:</p><p>%s</p>

error_configuration_file_alternate_method = <p>Alternatif olarak aşağıdaki metin kutusundaki içeriği kopyalayarak ayar dosyasına kaydedebilirsiniz.</p>

rpc_database_connection_test = Veritabanı bağlantısı deneniyor..
rpc_database_connection_error = Veritabanı bağlantısında sorun var. Takip eden hata meydana geldi:</p><p><b>%s</b></p><p>Lütfen bağlantı değiştirgelerini doğrulayın ve tekrar denyin.
rpc_database_connected = Veritabanınan başarıyla bağlandı.
rpc_database_importing = Veritabanı yapısı dahil ediliyor. Lütfen bu işlemler süresince sabırlı olunuz.
rpc_database_imported = Veritabanı başarıyla dahil edildi.
rpc_database_import_error = Veritabanı dahil edilmesinde sorun var. Takip eden hata meydana geldi:</p><p><b>%s</b></p><p>Lütfen bağlantı değiştirgelerini doğrulayın ve tekrar denyin.

rpc_work_directory_test = Çalışma dizini deneniyor..
rpc_work_directory_error_non_existent = Çalışma dizini erişiminde sorun var. Takip eden hata meydana geldi:<br /><br /><b>Dizin bulunmuyor:<br /><br />%s</b><br /><br />Lütfen dizinin varlığını kontrol ediniz ve tekrar deneyin.
rpc_work_directory_error_not_writeable = Çalışma dizini erişiminde sorun var. Takip eden hata meydana geldi:<br /><br /><b>Web sunucusunun bu dizine yazma izini bulunmuyor:<br /><br />%s</b><br /><br />Bu dizinin izinlerini kontrol ediniz ve tekrar deneyiniz.
rpc_work_directory_configured = Çalışma dizini başarıyla ayarlandı.

rpc_database_sample_data_importing = Veritabanına örnek veri dahil ediliyor. Lütfen bu işlemler süresince sabırlı olunuz.
rpc_database_sample_data_imported = Örnek veri başarıyla veritabanına dahil edildi.
rpc_database_sample_data_import_error = Örnek verinin veritabanına dahil edilmesinde sorun var. Takip eden hata meydana geldi:</p><p><b>%s</b></p><p>Lütfen veritabanı sunucusunu doğrulayın ve tekrar deneyin.
