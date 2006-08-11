<?php
/*
  $Id: en_US.php 554 2006-04-29 16:26:53Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
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

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Aiuto');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'Sito di supporto per osCommerce');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo Online');
define('HEADER_TITLE_LANGUAGES', 'Lingue');

define('BOX_CONNECTION_PROTECTED', 'Sei protetto da una %s connessione SSL.');
define('BOX_CONNECTION_UNPROTECTED', '<font color="#ff0000">Non</font> sei protetto da una connessione SSL.');
define('BOX_CONNECTION_UNKNOWN', 'sconosciuto');

// text for gender
define('MALE', 'Uomo');
define('FEMALE', 'Donna');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Amministratori');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configurazione');
define('BOX_CONFIGURATION_MYSTORE', 'Il negozio');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Servizi');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Tipi di Carte di Credito');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Moduli');
define('BOX_MODULES_PAYMENT', 'Pagamenti');
define('BOX_MODULES_SHIPPING', 'Spedizioni');
define('BOX_MODULES_ORDER_TOTAL', 'Totale Ordine');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_CATALOG_CATEGORIES', 'Categorie');
define('BOX_CATALOG_PRODUCTS', 'Prodotti');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Attributi');
define('BOX_CATALOG_MANUFACTURERS', 'Produttori');
define('BOX_CATALOG_REVIEWS', 'Recensioni');
define('BOX_CATALOG_SPECIALS', 'Offerte');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Prodotti in arrivo');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clienti');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clienti');
define('BOX_CUSTOMERS_ORDERS', 'Ordini');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locazione / Tasse');
define('BOX_TAXES_COUNTRIES', 'Paesi');
define('BOX_TAXES_ZONES', 'Zone');
define('BOX_TAXES_GEO_ZONES', 'Zone Tasse');
define('BOX_TAXES_TAX_CLASSES', 'Classi di Tasse');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Reports');
define('BOX_REPORTS_STATISTICS', 'Statistiche');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Tools');
define('BOX_TOOLS_BACKUP', 'Backup Database');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestione Banner');
define('BOX_TOOLS_CACHE', 'Controllo Cache');
define('BOX_TOOLS_FILE_MANAGER', 'Gestione File');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gestione Newsletter');
define('BOX_TOOLS_SERVER_INFO', 'Informazioni sul Server');
define('BOX_TOOLS_WHOS_ONLINE', 'Chi c\'è online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localizzazione');
define('BOX_LOCALIZATION_CURRENCIES', 'Valute');
define('BOX_LOCALIZATION_LANGUAGES', 'Linguaggi');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Stato Ordini');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Classi di Peso');

define('BOX_HEADING_LOGOFF', 'Esci');

// javascript messages
define('JS_ERROR', 'Si è verificato un errore durante l\'invio dei dati!\nEffettua le seguenti correzioni:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Il nuovo attributo del prodotto deve avere un prezzo\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Il nuovo attributo del prodotto deve avere il prefisso\n');
define('JS_PRODUCTS_NAME', '* Il nuovo prodotto deve avere un nome\n');
define('JS_PRODUCTS_DESCRIPTION', '* Il nuovo prodotto deve avere una descrizione\n');
define('JS_PRODUCTS_PRICE', '* Il nuovo prodotto deve avere un prezzo\n');
define('JS_PRODUCTS_WEIGHT', '* Il nuovo prodotto deve avere un peso\n');
define('JS_PRODUCTS_QUANTITY', '* Il nuovo prodotto deve avere una quantità\n');
define('JS_PRODUCTS_MODEL', '* Il nuovo prodotto deve avere un numero modello\n');
define('JS_PRODUCTS_IMAGE', '* Il nuovo prodotto deve avere un\'immagine\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Devi inserire un nuovo prezzo\n');
define('JS_ORDER_DOES_NOT_EXIST', 'L'ordine n. %s non esiste!');

define('CATEGORY_PERSONAL', 'Personale');
define('CATEGORY_ADDRESS', 'Indirizzo');
define('CATEGORY_CONTACT', 'Contatto');
define('CATEGORY_COMPANY', 'Azienda');
define('CATEGORY_OPTIONS', 'Opzioni');

define('ENTRY_GENDER', 'Sesso:');
define('ENTRY_GENDER_ERROR', 'Selezona il campo Sesso.');
define('ENTRY_FIRST_NAME', 'Nome:');
define('ENTRY_FIRST_NAME_ERROR', 'Il campo Nome deve contenere almeno ' . ACCOUNT_FIRST_NAME . ' caratteri.');
define('ENTRY_LAST_NAME', 'Cognome:');
define('ENTRY_LAST_NAME_ERROR', 'Il campo Cognome deve contenere almeno ' . ACCOUNT_LAST_NAME . ' caratteri.');
define('ENTRY_DATE_OF_BIRTH', 'Data di Nascita:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La Data di Nascita non è in un formato corretto.');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Il campo E-mail deve contenere almeno ' . ACCOUNT_EMAIL_ADDRESS . ' caratteri.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Il formato dell\'E-Mail non è corretto, correggilo.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'L\'E-mail inserita esiste già nel database - accedi con questa E-mail o crea un nuovo account con un\'E-mail differente.');
define('ENTRY_COMPANY', 'Azienda:');
define('ENTRY_COMPANY_ERROR', 'Il campo Azienda deve contenere almeno ' . ACCOUNT_COMPANY . ' caratteri.');
define('ENTRY_STREET_ADDRESS', 'Indirizzo:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Il campo Indirizzo deve contenere almeno ' . ACCOUNT_STREET_ADDRESS . ' caratteri.');
define('ENTRY_SUBURB', 'Frazione:');
define('ENTRY_SUBURB_ERROR', 'Il campo Frazione deve contenere almeno ' . ACCOUNT_SUBURB . ' caratteri.');
define('ENTRY_POST_CODE', 'CAP:');
define('ENTRY_POST_CODE_ERROR', 'Il campo CAP deve contenere almeno ' . ACCOUNT_POST_CODE . ' caratteri.');
define('ENTRY_CITY', 'Città:');
define('ENTRY_CITY_ERROR', 'Il campo Città deve contenere almeno ' . ACCOUNT_CITY . ' caratteri.');
define('ENTRY_STATE', 'Stato/Provincia:');
define('ENTRY_STATE_ERROR', 'Il campo Stato/Provincia deve contenere almeno ' . ACCOUNT_STATE . ' caratteri.');
define('ENTRY_STATE_ERROR_SELECT', 'Seleziona una nazione dal menu a discesa.');
define('ENTRY_COUNTRY', 'Nazione:');
define('ENTRY_COUNTRY_ERROR', 'Devi selezionare una Nazione dal menu a discesa.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Il campo Telefono deve contenere almeno ' . ACCOUNT_TELEPHONE . ' caratteri.');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', 'Il campo Fax deve contenere almeno ' . ACCOUNT_FAX . ' caratteri.');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Iscrivimi');
define('ENTRY_NEWSLETTER_NO', 'Cancellami');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Il campo Password deve contenere almeno ' . ACCOUNT_PASSWORD . ' caratteri.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Le due Password devono coincidere.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Conferma Password:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Invio E-Mail in corso');
define('IMAGE_APPROVE', 'Approva');
define('IMAGE_BACK', 'Indietro');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_BOX_REMOVE', 'Rimuovi Box');
define('IMAGE_CANCEL', 'Cancella');
define('IMAGE_CONFIGURE', 'Configura');
define('IMAGE_CONFIRM', 'Conferma');
define('IMAGE_COPY', 'Copia');
define('IMAGE_COPY_TO', 'Copia in');
define('IMAGE_DETAILS', 'Detttagli');
define('IMAGE_DELETE', 'Cancella');
define('IMAGE_EDIT', 'Modifica');
define('IMAGE_EDIT_DEFINITIONS', 'Modifica definizioni');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXECUTE', 'Esegui');
define('IMAGE_EXPORT', 'Esporta');
define('IMAGE_FILE_MANAGER', 'Gestione File');
define('IMAGE_ICON_STATUS_GREEN', 'Attivo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Attiva');
define('IMAGE_ICON_STATUS_RED', 'Inattivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Disattiva');
define('IMAGE_ICON_INFO', 'Informazioni');
define('IMAGE_IMPORT', 'Importa');
define('IMAGE_INSERT', 'Inserisci');
define('IMAGE_LOCK', 'Blocca');
define('IMAGE_LOGIN', 'Login');
define('IMAGE_MODULE_INSTALL', 'Installa Modulo');
define('IMAGE_MODULE_REMOVE', 'Rimuovi Modulo');
define('IMAGE_MOVE', 'Muovi');
define('IMAGE_NEW_BANNER', 'Nuovo Banner');
define('IMAGE_NEW_CATEGORY', 'Nuova Categoria');
define('IMAGE_NEW_COUNTRY', 'Nuova Nazione');
define('IMAGE_NEW_CURRENCY', 'Nuova Valuta');
define('IMAGE_NEW_FILE', 'Nuovo File');
define('IMAGE_NEW_FOLDER', 'Nuova Cartella');
define('IMAGE_NEW_LANGUAGE', 'Nuova Lingua');
define('IMAGE_NEW_NEWSLETTER', 'Nuova Newsletter');
define('IMAGE_NEW_PRODUCT', 'Nuovo Prodotto');
define('IMAGE_NEW_TAX_CLASS', 'Nuova Classe Tassa');
define('IMAGE_NEW_TAX_RATE', 'Nuova Aliquota Tassa');
define('IMAGE_NEW_TAX_ZONE', 'Nuova Zanna Tassa');
define('IMAGE_NEW_ZONE', 'Nuova Zona');
define('IMAGE_ORDERS', 'Ordini');
define('IMAGE_ORDERS_INVOICE', 'Fattura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing Slip');
define('IMAGE_PREVIEW', 'Anteprima');
define('IMAGE_REJECT', 'Rifiuta');
define('IMAGE_RESTORE', 'Ripristina');
define('IMAGE_RESET', 'Azzera');
define('IMAGE_SAVE', 'Salva');
define('IMAGE_SEARCH', 'Cerca');
define('IMAGE_SELECT', 'Seleziona');
define('IMAGE_SEND', 'Invia');
define('IMAGE_SEND_EMAIL', 'Invia Email');
define('IMAGE_UNLOCK', 'Sblocca');
define('IMAGE_UPDATE', 'Aggiorna');
define('IMAGE_UPDATE_CURRENCIES', 'Aggiorna le Valute');
define('IMAGE_UPLOAD', 'Carica');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Cartella Corrente');
define('ICON_DELETE', 'Cancella');
define('ICON_ERROR', 'Errore');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Cartella');
define('ICON_LOCKED', 'Bloccato');
define('ICON_PREVIOUS_LEVEL', 'Livello Precedente');
define('ICON_PREVIEW', 'Anteprima');
define('ICON_STATISTICS', 'Statistiche');
define('ICON_SUCCESS', 'Successo');
define('ICON_TICK', 'Vero');
define('ICON_UNLOCKED', 'Sbloccato');
define('ICON_WARNING', 'Attenzione');

define('BUTTON_CANCEL', 'Cancella');
define('BUTTON_BACK', 'Indietro');
define('BUTTON_DELETE', 'Cancella');
define('BUTTON_INSERT', 'Inserisci');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Salva');
define('BUTTON_SEND', 'Invia');

define('ICON_FILES', 'Files');
define('ICON_ORDERS', 'Ordini');
define('ICON_PRODUCTS', 'Prodotti');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina&nbsp;%s&nbsp;di&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> amministratori)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> banner)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> categorie)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> nazioni)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> carte di credito)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> clienti)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> valute)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> lingue)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> produttori)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> newsletter)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> stato ordini)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> attributi prodotto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> gruppi attributi prodotto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> prodotti)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> prodotti in arrivo)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> recensioni prodotti)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> prodotti in offerta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> classi di tasse)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> zone tasse)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> importo tasse)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> classi peso)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> zone)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'predefinito');
define('TEXT_SET_DEFAULT', 'Imposta come predefinito');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obbligatorio</span>');
define('TEXT_IMAGE_NONEXISTENT', 'IMMAGINE NON ESISTENTE');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Errore: Non è definita nessuna valuta. Definiscine una in: Amministrazione->Localizzazione->Valute');

define('TEXT_CACHE_CATEGORIES', 'Box Categorie');
define('TEXT_CACHE_MANUFACTURERS', 'Box Produttori');
define('TEXT_CACHE_ALSO_PURCHASED', 'Modulo Anche Acquistati');

define('TEXT_NONE', '--nessuno--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'Vero');
define('TEXT_FALSE', 'Falso');
define('TEXT_OPTIONAL', 'Facoltativo');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Errore: La destinazione non esiste.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Errore: La destinazione non è scrivibile.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Errore: Non posso rimuovere il file. Imposta i permessi corretti su: %s');
define('ERROR_FILE_NOT_SAVED', 'Errore: File non salvato.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Errore: File non ammesso.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: File salvato con successo.');
define('WARNING_NO_FILE_UPLOADED', 'Attenzione: Nessun file caricato.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Attenzione: Il caricamento dei file non è abilitato nel file php.ini.');

define('SUCCESS_DB_ROWS_UPDATED', 'Successo: Voce aggiornata con successo!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Attenzione: Voce non aggiornata poiché le date coincidono.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Errore: Voce non aggiornata a causa di un errore.');

define('MAXIMUM_FILE_UPLOAD_SIZE', '(Massimo: %s)');
?>