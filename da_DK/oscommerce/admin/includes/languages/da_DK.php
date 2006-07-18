<?php
/*
  $Id: en_US.php 608 2006-07-05 10:56:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or execute 'locale -a' on the server.
// Examples:
// on Linux try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
define('LANGUAGE_LOCALE', 'da_DK');

define('DATE_FORMAT_SHORT', '%d/%m-%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A d. %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m-Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m-Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

define('NUMERIC_DECIMAL_SEPARATOR', ',');
define('NUMERIC_THOUSANDS_SEPARATOR', '.');

// Global entries for the <html> tag
define('HTML_PARAMS','xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="da" lang="da"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Hjælp');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Support Side');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Katalog');
define('HEADER_TITLE_LANGUAGES', 'Sprog');

define('BOX_CONNECTION_PROTECTED', 'Du er beskyttet af en %s sikker SSL forbindelse.');
define('BOX_CONNECTION_UNPROTECTED', 'Du er <font color="#ff0000">not</font> beskyttet af en SSL forbindelse.');
define('BOX_CONNECTION_UNKNOWN', 'ukendt');

// text for gender
define('MALE', 'Mand');
define('FEMALE', 'Kvinde');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administratorer');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Konfiguration');
define('BOX_CONFIGURATION_MYSTORE', 'Mine butik');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Kreditkorttyper');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Moduler');
define('BOX_MODULES_PAYMENT', 'Betaling');
define('BOX_MODULES_SHIPPING', 'Forsendelse');
define('BOX_MODULES_ORDER_TOTAL', 'Ordretotal');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES', 'Kategorier');
define('BOX_CATALOG_PRODUCTS', 'Produkter');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Produktattributer');
define('BOX_CATALOG_MANUFACTURERS', 'Producenter');
define('BOX_CATALOG_REVIEWS', 'Anmeldelser');
define('BOX_CATALOG_SPECIALS', 'Tilbud');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Forventede produkter');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_CUSTOMERS', 'Kunder');
define('BOX_CUSTOMERS_ORDERS', 'Ordrer');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lokationer / moms');
define('BOX_TAXES_COUNTRIES', 'Lande');
define('BOX_TAXES_ZONES', 'Zoner');
define('BOX_TAXES_GEO_ZONES', 'Momszoner');
define('BOX_TAXES_TAX_CLASSES', 'Momsklasser');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapporter');
define('BOX_REPORTS_STATISTICS', 'Statistikker');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Værktøjer');
define('BOX_TOOLS_BACKUP', 'Databasebackup');
define('BOX_TOOLS_BANNER_MANAGER', 'Bannermanager');
define('BOX_TOOLS_CACHE', 'Cachekontrol');
define('BOX_TOOLS_IMAGES', 'Billeder');
define('BOX_TOOLS_FILE_MANAGER', 'Filmanager');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nyhedsbrevmanager');
define('BOX_TOOLS_SERVER_INFO', 'Serverinformation');
define('BOX_TOOLS_WHOS_ONLINE', 'Hvem er online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Lokalisering');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuta');
define('BOX_LOCALIZATION_LANGUAGES', 'Sprog');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Ordrestatus');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Vægtklasser');
define('BOX_LOCALIZATION_IMAGE_GROUPS', 'Billedgrupper');

define('BOX_HEADING_LOGOFF', 'Log af');

// javascript messages
define('JS_ERROR', 'Fejl har opstået under processeringen af din formular!\nLav venligst følgende rettelser:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Den nye produktattribut har brug for en prisværdi\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Den nye produktattribut skal bruge et prispræfiks\n');
define('JS_PRODUCTS_NAME', '* Det nye produkt skal bruge et navn\n');
define('JS_PRODUCTS_DESCRIPTION', '* Det nye produkt skal bruge en beskrivelse\n');
define('JS_PRODUCTS_PRICE', '* Det nye produkt skal have bruge en prisværdi\n');
define('JS_PRODUCTS_WEIGHT', '* Det nye produkt skal bruge en vægtværdi\n');
define('JS_PRODUCTS_QUANTITY', '* Det nye produkt skal bruge en mængdeværdi\n');
define('JS_PRODUCTS_MODEL', '* Det nye produkt skal bruge en varenummerværdi\n');
define('JS_PRODUCTS_IMAGE', '* Det nye produkt skal bruge en billedværdi\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* En ny pris for produktet skal sættes\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Ordrenummer %s findes ikke!');

define('CATEGORY_PERSONAL', 'Personlig');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_COMPANY', 'Firma');
define('CATEGORY_OPTIONS', 'Muligheder');

define('ENTRY_GENDER', 'Køn:');
define('ENTRY_GENDER_ERROR', 'Vælg venligst dit køn.');
define('ENTRY_FIRST_NAME', 'Fornavn:');
define('ENTRY_FIRST_NAME_ERROR', 'Dit fornavn skal være minimum af ' . ACCOUNT_FIRST_NAME . ' tegn.');
define('ENTRY_LAST_NAME', 'Efternavn:');
define('ENTRY_LAST_NAME_ERROR', 'Dit efternavn skal være på minimum af ' . ACCOUNT_LAST_NAME . ' tegn.');
define('ENTRY_DATE_OF_BIRTH', 'Fødselsdag:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Din fødelsdag skal sættes korrekt.');
define('ENTRY_EMAIL_ADDRESS', 'E-mail adresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Din E-mail adresse skal have et minimum af ' . ACCOUNT_EMAIL_ADDRESS . ' tegn.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Din E-mail adresse ser ikke ud til at være gyldig - Lav  venligst nødvendige ændringer.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Din E-mail adresse findes allerede i vores kundedatabase - Log venligst ind med denne E-mail adresse eller opret dig med en anden E-mail adresse.');
define('ENTRY_COMPANY', 'Firmanvn:');
define('ENTRY_COMPANY_ERROR', 'Dit firmanavn skal have et minimum af ' . ACCOUNT_COMPANY . ' tegn.');
define('ENTRY_STREET_ADDRESS', 'Adresse:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Din addresse skal have et minimum af' . ACCOUNT_STREET_ADDRESS . ' tegn.');
define('ENTRY_SUBURB', 'Forstad:');
define('ENTRY_SUBURB_ERROR', 'Din forstad skal have et minimum af ' . ACCOUNT_SUBURB . ' tegn.');
define('ENTRY_POST_CODE', 'Postnummer:');
define('ENTRY_POST_CODE_ERROR', 'Dit postnummer skal have et minimum af ' . ACCOUNT_POST_CODE . ' tegn.');
define('ENTRY_CITY', 'By:');
define('ENTRY_CITY_ERROR', 'Din by skal have et minimum af ' . ACCOUNT_CITY . ' tegn.');
define('ENTRY_STATE', 'Stat/Provins:');
define('ENTRY_STATE_ERROR', 'Din stat/provins skal have et minimum af ' . ACCOUNT_STATE . ' tegn.');
define('ENTRY_STATE_ERROR_SELECT', 'Vælg venligst en stat fra rullemenuen.');
define('ENTRY_COUNTRY', 'By:');
define('ENTRY_COUNTRY_ERROR', 'Du skal vælge et land fra rullemenuen.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Dit telefonnummer skal have et minimum af ' . ACCOUNT_TELEPHONE . ' tegn.');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', 'Dit faxnummer skal have et minimum af ' . ACCOUNT_FAX . ' tegn.');
define('ENTRY_NEWSLETTER', 'Nyhedbrev:');
define('ENTRY_NEWSLETTER_YES', 'Tilmeldt');
define('ENTRY_NEWSLETTER_NO', 'Ikke tilmeldt');
define('ENTRY_PASSWORD', 'Kodeord:');
define('ENTRY_PASSWORD_ERROR', 'Dit kodeord skal være på et minimum af ' . ACCOUNT_PASSWORD . ' tegn.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Bekræftelsen af kodeordet skal matche kodeordet.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Bekræft kodeord:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Sender E-mail');
define('IMAGE_APPROVE', 'Godkend');
define('IMAGE_BACK', 'Tilbage');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_BOX_REMOVE', 'Fjern box');
define('IMAGE_CANCEL', 'Annullér');
define('IMAGE_CONFIGURE', 'Konfigurér');
define('IMAGE_CONFIRM', 'Bekræft');
define('IMAGE_COPY', 'Kopier');
define('IMAGE_COPY_TO', 'Kopier til');
define('IMAGE_DETAILS', 'Detaljer');
define('IMAGE_DELETE', 'Slet');
define('IMAGE_EDIT', 'Redigér');
define('IMAGE_EDIT_DEFINITIONS', 'Redigér definitioner');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_EXECUTE', 'Udfør');
define('IMAGE_EXPORT', 'Eksportér');
define('IMAGE_FILE_MANAGER', 'Filmanager');
define('IMAGE_ICON_STATUS_GREEN', 'Aktiv');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Sæt Aktiv');
define('IMAGE_ICON_STATUS_RED', 'Inaktiv');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Sæt Inaktiv');
define('IMAGE_ICON_INFO', 'Information');
define('IMAGE_IMPORT', 'Importér');
define('IMAGE_INSERT', 'Indsæt');
define('IMAGE_LOCK', 'Lås');
define('IMAGE_LOGIN', 'Log ind');
define('IMAGE_MODULE_INSTALL', 'Installér Modul');
define('IMAGE_MODULE_REMOVE', 'Fjern Modul');
define('IMAGE_MOVE', 'Flyt');
define('IMAGE_NEW_BANNER', 'Nyt banner');
define('IMAGE_NEW_CATEGORY', 'Ny kategori');
define('IMAGE_NEW_COUNTRY', 'Nyt land');
define('IMAGE_NEW_CURRENCY', 'Ny valuta');
define('IMAGE_NEW_FILE', 'Ny Fil');
define('IMAGE_NEW_FOLDER', 'Ny mappe');
define('IMAGE_NEW_LANGUAGE', 'Nyt sprog');
define('IMAGE_NEW_NEWSLETTER', 'Nyt nyhedsbrev');
define('IMAGE_NEW_PRODUCT', 'Nyt produkt');
define('IMAGE_NEW_TAX_CLASS', 'Ny momsklasse');
define('IMAGE_NEW_TAX_RATE', 'Ny momsrate');
define('IMAGE_NEW_TAX_ZONE', 'Ny momszone');
define('IMAGE_NEW_ZONE', 'Ny zone');
define('IMAGE_ORDERS', 'Ordrer');
define('IMAGE_ORDERS_INVOICE', 'Faktura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Pakkeseddel');
define('IMAGE_PREVIEW', 'Forsmag');
define('IMAGE_REJECT', 'Afvis');
define('IMAGE_RESTORE', 'Gendan');
define('IMAGE_RESET', 'Nustil');
define('IMAGE_SAVE', 'Gem');
define('IMAGE_SEARCH', 'Søg');
define('IMAGE_SELECT', 'Vælg');
define('IMAGE_SEND', 'Send');
define('IMAGE_SEND_EMAIL', 'Send E-mail');
define('IMAGE_UNLOCK', 'Lås op');
define('IMAGE_UPDATE', 'Opdatér');
define('IMAGE_UPDATE_CURRENCIES', 'Opdatér Valutaraten');
define('IMAGE_UPLOAD', 'Upload');

define('ICON_CROSS', 'Falsk');
define('ICON_CURRENT_FOLDER', 'Nuværende mappe');
define('ICON_DELETE', 'Slet');
define('ICON_ERROR', 'Fejl');
define('ICON_FILE', 'Fil');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'mappe');
define('ICON_LOCKED', 'Låst');
define('ICON_PREVIOUS_LEVEL', 'Tidligere niveau');
define('ICON_PREVIEW', 'Forsmag');
define('ICON_STATISTICS', 'Statistikker');
define('ICON_SUCCESS', 'Succes');
define('ICON_TICK', 'Sand');
define('ICON_UNLOCKED', 'Låst op');
define('ICON_WARNING', 'Advarsel');

define('BUTTON_CANCEL', 'Annullér');
define('BUTTON_BACK', 'Tilbage');
define('BUTTON_DELETE', 'Slet');
define('BUTTON_INSERT', 'Sæt ind');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Gem');
define('BUTTON_SEND', 'Send');

define('ICON_FILES', 'Filer');
define('ICON_ORDERS', 'Ordrer');
define('ICON_PRODUCTS', 'Produkter');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Side&nbsp;%s&nbsp;af&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> administratorer)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> bannere)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> kategorier)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> lande)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> kreditkort)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> kunder)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> valuta)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> sprog)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> producenter)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> nyhedsbreve)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> ordrer)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> ordrestatusser)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> produktattributer)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> produktattributgrupper)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> produkter)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> forventede produkter)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> produktanmeldelser)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> tilbudsprodukter)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> momsklasser)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> momszoner)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> momsrater)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> vægtklasser)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> zoner)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'standard');
define('TEXT_SET_DEFAULT', 'Sæt som standard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Krævet</span>');
define('TEXT_IMAGE_NONEXISTENT', 'BILLEDE FINDES IKKE');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'FEJL: Der er ikke sat nogen standard valuta. Sæt venligst en hert: Administrationsværktøj->Lokalisering->Valuta');

define('TEXT_CACHE_CATEGORIES', 'Kategopriboks');
define('TEXT_CACHE_MANUFACTURERS', 'Producentboks');
define('TEXT_CACHE_ALSO_PURCHASED', '"Har også købt" modul');

define('TEXT_NONE', '--ingen--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'Sand');
define('TEXT_FALSE', 'Falsk');
define('TEXT_OPTIONAL', 'Valgfri');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'FEJL: Destination findes ikke.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'FEJL: Destination er ikke skrivbar.');
define('ERROR_FILE_NOT_REMOVEABLE', 'FEJL: Kan ikke fjerne denne fil. Sæt venligst de rette brugerrettigheder på: %s');
define('ERROR_FILE_NOT_SAVED', 'FEJL: Fil-upload ikke gemt.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'FEJL: Fil-upload type ikke tilladt.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succes: Fil-upload gemt med succes.');
define('WARNING_NO_FILE_UPLOADED', 'ADVARSEL: Ingen fil er uploadet.');
define('WARNING_FILE_UPLOADS_DISABLED', 'ADVARSEL: Fil-uploads er slået fra i php.ini konfigurationsfilen.');

define('SUCCESS_DB_ROWS_UPDATED', 'Succes: Indlæg opdateret med succes!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'ADVARSEL: Indlæg ikke opdateret da indholdet var identisk.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'FEJL: Indlæg ikke opdateret pga. fejl.');

define('MAXIMUM_FILE_UPLOAD_SIZE', '(Maks: %s)');
?>
