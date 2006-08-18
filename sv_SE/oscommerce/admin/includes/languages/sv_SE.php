<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('DATE_FORMAT_SHORT', '%Y/%m/%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

define('NUMERIC_DECIMAL_SEPARATOR', ',');
define('NUMERIC_THOUSANDS_SEPARATOR', '.');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Hjälp');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Katalog');
define('HEADER_TITLE_LANGUAGES', 'Språk');

define('BOX_CONNECTION_PROTECTED', 'Du är skyddad av en %s säker SSL anslutning.');
define('BOX_CONNECTION_UNPROTECTED', 'Du är <font color="#ff0000">ej</font> skyddad av en säker SSL anslutning.');
define('BOX_CONNECTION_UNKNOWN', 'okänd');

// text for gender
define('MALE', 'Man');
define('FEMALE', 'Kvinna');

// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administratörer');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Konfiguration');
define('BOX_CONFIGURATION_MYSTORE', 'Min Affär');
define('BOX_CONFIGURATION_LOGGING', 'Loggning');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Tjänster');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Kreditkort');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Moduler');
define('BOX_MODULES_PAYMENT', 'Betalning');
define('BOX_MODULES_SHIPPING', 'Leverans');
define('BOX_MODULES_ORDER_TOTAL', 'Order Total');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES', 'Kategorier');
define('BOX_CATALOG_PRODUCTS', 'Produkter');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Produktattribut');
define('BOX_CATALOG_MANUFACTURERS', 'Tillverkare');
define('BOX_CATALOG_REVIEWS', 'Kommentarer');
define('BOX_CATALOG_SPECIALS', 'Specialerbjudande');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Kommande Varor');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_ORDERS', 'Ordrar');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Platser / Skatter');
define('BOX_TAXES_COUNTRIES', 'Länder');
define('BOX_TAXES_ZONES', 'Zoner');
define('BOX_TAXES_GEO_ZONES', 'Skattezoner');
define('BOX_TAXES_TAX_CLASSES', 'Skatteklasser');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapporter');
define('BOX_REPORTS_STATISTICS', 'Statistik');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Verktyg');
define('BOX_TOOLS_BACKUP', 'Databas Säkerhetskopia');
define('BOX_TOOLS_BANNER_MANAGER', 'Reklambanderollshanteraren');
define('BOX_TOOLS_CACHE', 'Cache Kontroll');
define('BOX_TOOLS_IMAGES', 'Bilder');
define('BOX_TOOLS_FILE_MANAGER', 'Filhanteraren');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nyhetshanteraren');
define('BOX_TOOLS_SERVER_INFO', 'Server Information');
define('BOX_TOOLS_WHOS_ONLINE', 'Vem är Online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Lokalt');
define('BOX_LOCALIZATION_CURRENCIES', 'Valutor');
define('BOX_LOCALIZATION_LANGUAGES', 'Språk');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Orderstatus');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Viktklasser');
define('BOX_LOCALIZATION_IMAGE_GROUPS', 'Bildgrupper');

define('BOX_HEADING_LOGOFF', 'Logga ut');

// javascript messages
define('JS_ERROR', 'Fel har uppstått vid bearbetning av ditt formulär!\nVar vänlig och gör följande ändringar:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Det nya produktattributet behöver ett prisvärde\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Det nya produktattributet behöver ett pris prefix\n');
define('JS_PRODUCTS_NAME', '* Den nya produkten behöver ett namn\n');
define('JS_PRODUCTS_DESCRIPTION', '* Den nya produkten behöver en beskrivning\n');
define('JS_PRODUCTS_PRICE', '* Den nya produkten behöver ett pris\n');
define('JS_PRODUCTS_WEIGHT', '* Den nya produkten behöver ett viktvärde\n');
define('JS_PRODUCTS_QUANTITY', '* Den nya produkten behöver ett kvantitetsvärde\n');
define('JS_PRODUCTS_MODEL', '* Den nya produkten behöver ett modellnamn\n');
define('JS_PRODUCTS_IMAGE', '* Den nya produkten behöver en bild\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Ett nytt pris behövs till den här produkten\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Ordernummer %s existerar ej!');

define('CATEGORY_PERSONAL', 'Personlig');
define('CATEGORY_ADDRESS', 'Adress');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_COMPANY', 'Företag');
define('CATEGORY_OPTIONS', 'Alternativ');

define('ENTRY_GENDER', 'Kön:');
define('ENTRY_GENDER_ERROR', 'Var vänlig och välj ditt Kön.');
define('ENTRY_FIRST_NAME', 'Förnamn:');
define('ENTRY_FIRST_NAME_ERROR', 'Ditt Förnamn måste innehålla minst ' . ACCOUNT_FIRST_NAME . ' tecken.');
define('ENTRY_LAST_NAME', 'Efternamn:');
define('ENTRY_LAST_NAME_ERROR', 'Ditt Efternamn måste innehålla minst ' . ACCOUNT_LAST_NAME . ' tecken.');
define('ENTRY_DATE_OF_BIRTH', 'Födelsedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Ditt Födelsedatum måste skrivas rätt.');
define('ENTRY_EMAIL_ADDRESS', 'E-postadress:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Din E-postadress måste innehålla minst ' . ACCOUNT_EMAIL_ADDRESS . ' tecken.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Din E-postadress verkar vara ogiltlig - var vänlig och gör nödvändiga ändringar.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Din E-postadress finns redan i vårat register - var vänlig och logga in med din e-postadress eller skapa ett nytt konto med en annan adress.');
define('ENTRY_COMPANY', 'Företagsnamn:');
define('ENTRY_COMPANY_ERROR', 'Ditt Företagsnamn måste innehålla minst ' . ACCOUNT_COMPANY . ' tecken.');
define('ENTRY_STREET_ADDRESS', 'Gatuadress:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Din Gatuadress måste innehålla minst ' . ACCOUNT_STREET_ADDRESS . ' tecken.');
define('ENTRY_SUBURB', 'Ort:');
define('ENTRY_SUBURB_ERROR', 'Din Ort måste innehålla minst ' . ACCOUNT_SUBURB . ' tecken.');
define('ENTRY_POST_CODE', 'Postnummer:');
define('ENTRY_POST_CODE_ERROR', 'Ditt Postnummer måste innehålla minst ' . ACCOUNT_POST_CODE . ' tecken.');
define('ENTRY_CITY', 'Stad:');
define('ENTRY_CITY_ERROR', 'Din Stad måste innehålla minst ' . ACCOUNT_CITY . ' tecken.');
define('ENTRY_STATE', 'Län:');
define('ENTRY_STATE_ERROR', 'Ditt Län måste innehålla minst ' . ACCOUNT_STATE . ' tecken.');
define('ENTRY_STATE_ERROR_SELECT', 'Var vänlig och välj län från menyn.');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'Du måste välja land från menyn.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Ditt telefonnummer måste innehålla minst ' . ACCOUNT_TELEPHONE . ' tecken.');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', 'Ditt faxnummer måste innehålla minst ' . ACCOUNT_FAX . ' tecken.');
define('ENTRY_NEWSLETTER', 'Nyhetsbrev:');
define('ENTRY_NEWSLETTER_YES', 'Prenumererad');
define('ENTRY_NEWSLETTER_NO', 'Oprenumererad');
define('ENTRY_PASSWORD', 'Lösenord:');
define('ENTRY_PASSWORD_ERROR', 'Ditt lösenord måste innehålla minst ' . ACCOUNT_PASSWORD . ' tecken.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Bekräftelsen måste stämma överens med lösenordet.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Bekräfta Lösenord:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Skicka E-Post');
define('IMAGE_APPROVE', 'Godkänn');
define('IMAGE_BACK', 'Tillbaka');
define('IMAGE_BACKUP', 'Säkerhetskopia');
define('IMAGE_BOX_REMOVE', 'Ta bort Box');
define('IMAGE_CANCEL', 'Avbryt');
define('IMAGE_CONFIGURE', 'Konfigurera');
define('IMAGE_CONFIRM', 'Bekräfta');
define('IMAGE_COPY', 'Kopiera');
define('IMAGE_COPY_TO', 'Kopiera Till');
define('IMAGE_DETAILS', 'Detaljer');
define('IMAGE_DELETE', 'Ta Bort');
define('IMAGE_EDIT', 'Editera');
define('IMAGE_EDIT_DEFINITIONS', 'Editera Definitioner');
define('IMAGE_EMAIL', 'Epost');
define('IMAGE_EXECUTE', 'Kör');
define('IMAGE_EXPORT', 'Exportera');
define('IMAGE_FILE_MANAGER', 'Filhanteraren');
define('IMAGE_ICON_STATUS_GREEN', 'Aktiv');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Aktivera');
define('IMAGE_ICON_STATUS_RED', 'Inaktiv');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Inaktivera');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_IMPORT', 'Importera');
define('IMAGE_INSERT', 'Infoga');
define('IMAGE_LOCK', 'Lås');
define('IMAGE_LOGIN', 'Logga in');
define('IMAGE_MODULE_INSTALL', 'Installera Modul');
define('IMAGE_MODULE_REMOVE', 'Ta bort Modul');
define('IMAGE_MOVE', 'Flytta');
define('IMAGE_NEW_BANNER', 'Ny Reklambanderoll');
define('IMAGE_NEW_CATEGORY', 'Ny Kategori');
define('IMAGE_NEW_COUNTRY', 'Nytt Land');
define('IMAGE_NEW_CURRENCY', 'Ny Valuta');
define('IMAGE_NEW_FILE', 'Ny Fil');
define('IMAGE_NEW_FOLDER', 'Ny Mapp');
define('IMAGE_NEW_LANGUAGE', 'Nytt Språk');
define('IMAGE_NEW_NEWSLETTER', 'Nytt Nyhetsbrev');
define('IMAGE_NEW_PRODUCT', 'Ny Produkt');
define('IMAGE_NEW_TAX_CLASS', 'Ny Skatteklass');
define('IMAGE_NEW_TAX_RATE', 'Ny Skattesats');
define('IMAGE_NEW_TAX_ZONE', 'Ny Skattezon');
define('IMAGE_NEW_ZONE', 'Ny Zon');
define('IMAGE_ORDERS', 'Ordrar');
define('IMAGE_ORDERS_INVOICE', 'Faktura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Ordersedel');
define('IMAGE_PREVIEW', 'Förhandsgranska');
define('IMAGE_REJECT', 'Avstå');
define('IMAGE_RESTORE', 'Återställ');
define('IMAGE_RESET', 'Återställ');
define('IMAGE_SAVE', 'Spara');
define('IMAGE_SEARCH', 'Sök');
define('IMAGE_SELECT', 'Välj');
define('IMAGE_SEND', 'Skicka');
define('IMAGE_SEND_EMAIL', 'Skicka Epost');
define('IMAGE_UNLOCK', 'Lås upp');
define('IMAGE_UPDATE', 'Uppdatera');
define('IMAGE_UPDATE_CURRENCIES', 'Uppdatera Valutakurs');
define('IMAGE_UPLOAD', 'Uppladdning');

define('ICON_CROSS', 'Falskt');
define('ICON_CURRENT_FOLDER', 'Nuvarande Mapp');
define('ICON_DELETE', 'Ta bort');
define('ICON_ERROR', 'Fel');
define('ICON_FILE', 'Fil');
define('ICON_FILE_DOWNLOAD', 'Nedladdning');
define('ICON_FOLDER', 'Mapp');
define('ICON_LOCKED', 'Låst');
define('ICON_PREVIOUS_LEVEL', 'Föregående Nivå');
define('ICON_PREVIEW', 'Förhandsgranska');
define('ICON_STATISTICS', 'Statistik');
define('ICON_SUCCESS', 'Utfört');
define('ICON_TICK', 'Sant');
define('ICON_UNLOCKED', 'Olåst');
define('ICON_WARNING', 'Varning');

define('BUTTON_CANCEL', 'Avbryt');
define('BUTTON_BACK', 'Tillbaka');
define('BUTTON_DELETE', 'Ta bort');
define('BUTTON_INSERT', 'Infoga');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Spara');
define('BUTTON_SEND', 'Skicka');

define('ICON_FILES', 'Filer');
define('ICON_ORDERS', 'Ordrar');
define('ICON_PRODUCTS', 'Produkter');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Sida&nbsp;%s&nbsp;av&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> administratörer)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> reklambanderoller)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kategorier)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> länder)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kreditkort)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kunder)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> valutor)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> språk)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> tillverkare)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> nyhetsbrev)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> ordrar)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> order status)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produktattribut)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produktattributsgrupper)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> produkter)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> kommande produkter)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> varukommentarer)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> specialvaror)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skatteklasser)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skattezoner)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> skattesatser)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> viktklasser)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Visar <b>%d</b> till <b>%d</b> (av <b>%d</b> zoner)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'standard');
define('TEXT_SET_DEFAULT', 'Sätt som standard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Nödvändig</span>');
define('TEXT_IMAGE_NONEXISTENT', 'BILD EXISTERAR EJ');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Fel: Det finns för närvarande ingen standardvaluta vald. Var vänlig och välj en vid: Administration->Lokalt->Valutor');

define('TEXT_CACHE_CATEGORIES', 'Kategoribox');
define('TEXT_CACHE_MANUFACTURERS', 'Tillverkarbox');
define('TEXT_CACHE_ALSO_PURCHASED', 'Även Köpt Modul');

define('TEXT_NONE', '--ingen--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'Sant');
define('TEXT_FALSE', 'Falskt');
define('TEXT_OPTIONAL', 'Frivilligt');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fel: Destination existerar ej.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fel: Destination skrivskyddad.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Fel: Jag kan ej flytta filen. Var vänlig och ändra användarrättigheterna vid: %s');
define('ERROR_FILE_NOT_SAVED', 'Fel: Uppladdad fil ej sparad.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Fel: Uppladdad filtyp ej tillåten.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Utfört: Uppladdad fil sparad.');
define('WARNING_NO_FILE_UPLOADED', 'Varning: Ingen fil uppladdad.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Varning: Uppladdning av filer är avaktiverat i php.ini konfigurationsfil.');

define('SUCCESS_DB_ROWS_UPDATED', 'Utfört: Post updaterad!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Varning: Post ej updaterad på grund av att innehållet är det samma.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Fel: Post ej updaterad på grund av ett fel.');
?>