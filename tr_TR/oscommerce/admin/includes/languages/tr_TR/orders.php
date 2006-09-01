<?php
/*
  $Id: orders.php 554 2006-04-29 16:26:53Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Siparişler');

define('SEARCH_ORDER_ID', 'Sipariş Kimlik:');
define('SEARCH_CUSTOMER_ID', 'Müşteri Kimlik:');
define('SEARCH_STATUS', 'Durum:');

define('TABLE_HEADING_COMMENTS', 'Açıklamalar');
define('TABLE_HEADING_CUSTOMERS', 'Müşteriler');
define('TABLE_HEADING_ORDER_TOTAL', 'Sipariş Toplamı');
define('TABLE_HEADING_DATE_PURCHASED', 'Tarihinde Satıldı');
define('TABLE_HEADING_STATUS', 'Durum');
define('TABLE_HEADING_ACTION', 'Eylem');
define('TABLE_HEADING_QUANTITY', 'Miktar');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Ürünler');
define('TABLE_HEADING_TAX', 'Vergi');
define('TABLE_HEADING_TOTAL', 'Toplam');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Fiyat (haric)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Fiyat (dahil)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Toplam (haric)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Toplam (dahil)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Müşteri Bilgilendirildi');
define('TABLE_HEADING_DATE_ADDED', 'Tarihinde Eklendi');

define('ENTRY_CUSTOMER', 'Müşteri:');
define('ENTRY_SOLD_TO', 'Satılan ... :');
define('ENTRY_DELIVERY_TO', 'Gönderilen ... :');
define('ENTRY_SHIP_TO', 'Kargolanan ... :');
define('ENTRY_SHIPPING_ADDRESS', 'Kargo Adresi:');
define('ENTRY_BILLING_ADDRESS', 'Fatura Adresi:');
define('ENTRY_PAYMENT_METHOD', 'Ödeme Yöntemi:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kredi Kartı Tipi:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kredi Kartı Sahibi:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kredi Kartı Numarası:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kredi Kartı Son Kullanma Tarihi:');
define('ENTRY_SUB_TOTAL', 'Alt-Toplam:');
define('ENTRY_TAX', 'Vergi:');
define('ENTRY_SHIPPING', 'Shipping:');
define('ENTRY_TOTAL', 'Toplam:');
define('ENTRY_DATE_PURCHASED', 'Tarihinde Satıldı:');
define('ENTRY_STATUS', 'Durum:');
define('ENTRY_POST_TRANSACTION_ACTIONS', 'Post Transaction Actions:');
define('ENTRY_DATE_LAST_UPDATED', 'Tarihinde En Son Güncellendi:');
define('ENTRY_NOTIFY_CUSTOMER', 'Müşteri Bildirisi:');
define('ENTRY_NOTIFY_COMMENTS', 'Eklenen Açıklama:');
define('ENTRY_NEW_COMMENT', 'Yeni Açıklama:');
define('ENTRY_PRINTABLE', 'Fatura Yazdır');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Siparişi Sil');
define('TEXT_INFO_DELETE_INTRO', 'Bu siparişi silme istediğinize emin misiniz?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'ürün miktarını geri stokla');
define('TEXT_DATE_ORDER_CREATED', 'Tarihinde Yapıldı:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'En Son Değiştirildi:');
define('TEXT_INFO_PAYMENT_METHOD', 'Ödeme Yöntemi:');

define('TEXT_ALL_ORDERS', 'Tüm Siparişler');
define('TEXT_NO_ORDER_HISTORY', 'Sipariş Geçmişi Mevcut Değil');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Sipariş Güncelle');
define('EMAIL_TEXT_ORDER_NUMBER', 'Sipariş Numarası:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaylı Fatura:');
define('EMAIL_TEXT_DATE_ORDERED', 'Tarihinde Eklendi:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Siparişiniz takip eden duruma güncellenmişdir.' . "\n\n" . 'Yeni Durum: %s' . "\n\n" . 'Lütfen herhangi bir sorunuz varsa bu epostayi cevaplayınız.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Siparişiniz için açıklamalar ...' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Hata: Sipariş yok.');
define('SUCCESS_ORDER_UPDATED', 'Başarılı: Sipariş başarıyla güncellenmiştir.');
define('WARNING_ORDER_NOT_UPDATED', 'Uyarı: Değişim olmadı. Bu sipariş güncellenmedi.');
?>
