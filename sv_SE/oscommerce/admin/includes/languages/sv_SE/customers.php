<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Kunder');
define('HEADING_TITLE_SEARCH', 'Sök:');

define('TABLE_HEADING_FIRSTNAME', 'Förnamn');
define('TABLE_HEADING_LASTNAME', 'Efternamn');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Kontot Skapat');
define('TABLE_HEADING_ACTION', 'Funktion');
define('TABLE_HEADING_STATUS', 'Status');

define('CATEGORY_PERSONAL', 'Personligt');
define('CATEGORY_ADDRESS_BOOK', 'Adressbok');

define('TEXT_DATE_ACCOUNT_CREATED', 'Kontot Skapat:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Senast Ändrad:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Senast Inloggad:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Antal Inloggningar:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Antal Kommentarer:');
define('TEXT_DELETE_INTRO', 'Är du säker att du vill ta bort denna kunden?');
define('TEXT_DELETE_BATCH_INTRO', 'Är du säker att du vill ta bort följande kunder?');
define('TEXT_DELETE_ADDRESS_BOOK_INTRO', 'Är du säker att du vill ta bort denna kunds adressboks post?');
define('TEXT_DELETE_REVIEWS', 'Ta bort %s kommentar(er)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Ta Bort Kund');
define('TEXT_INFO_HEADING_NEW_CUSTOMER', 'Ny Kund');
define('TEXT_INFO_HEADING_NEW_ADDRESS_BOOK_ENTRY', 'Ny Adressboks Post');
define('TEXT_BATCH_DELETE_REVIEWS', 'Ta bort kundkommentarer?');
define('TYPE_BELOW', 'Skriv nedan');
define('PLEASE_SELECT', 'Välj En');
define('EMAIL_SUBJECT', 'Välkommen till ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Herr %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Fru %s,' . "\n\n");
define('EMAIL_GREET_NONE', '%s' . "\n\n");
define('EMAIL_WELCOME', 'Vi önskar dig välkommen till <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Du kan nu ta del av de <b>tjänster</b> vi har att erbjuda. Några av dessa tjänster är:' . "\n\n" . '<li><b>Permanent Kundvagn</b> - Produkter lagda i din kundvagn stannar där tills du tar bort dom eller köper produkterna.' . "\n" . '<li><b>Adressbok</b> - Vi kan nu leverera dina produkter till annan adress en din egen! Detta är perfekt att skicka födelsedagspresenter direkt till personen som fyller år.' . "\n" . '<li><b>Orderhistorik</b> - Visar historik från dina tidigare köp du gjort av oss.' . "\n" . '<li><b>Produktkommentarer</b> - Dela dina åsikter med andra kunder om våra produkter.' . "\n\n");
define('EMAIL_CONTACT', 'För hjälp med nån av våra onlinetjänster, var vänlig och eposta affärsinnehavaren: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_PASSWORD', '<b>Notering:</b> Detta kontot har skapats åt dig av affärsinnehavaren. Lösenordet till detta konto är %s.' . "\n");

define('ENTRY_STATUS', 'Status:');
define('ENTRY_SET_AS_PRIMARY', 'Välj Som Förvald Adress:');

define('TEXT_INFO_DELETE_ADDRESS_BOOK_PROHIBITED', 'Varning: Kan ej ta bort kundens förvalda adress. Vänligen ange en annan adress som förvald adress och försök igen.');
?>