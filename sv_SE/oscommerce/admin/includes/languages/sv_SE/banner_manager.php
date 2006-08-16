<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Reklambanderollshanteraren');

define('TABLE_HEADING_BANNERS', 'Reklambanderoll');
define('TABLE_HEADING_GROUPS', 'Grupper');
define('TABLE_HEADING_STATISTICS', 'Visningar / Klickningar');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_BANNERS_TITLE', 'Reklambanderolls Titel:');
define('TEXT_BANNERS_URL', 'Reklambanderolls URL:');
define('TEXT_BANNERS_GROUP', 'Reklambanderolls Grupp:');
define('TEXT_BANNERS_NEW_GROUP', ', eller skriv in ny reklambanderolls grupp nedan');
define('TEXT_BANNERS_IMAGE', 'Bild:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', eller skriv in lokal fil nedan');
define('TEXT_BANNERS_IMAGE_TARGET', 'Bild Destination (Spara Som):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_EXPIRES_ON', 'Utgår Den:');
define('TEXT_BANNERS_OR_AT', ', eller vid');
define('TEXT_BANNERS_IMPRESSIONS', 'visningar.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Schemalagd:');
define('TEXT_BANNERS_STATUS', 'Status:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Reklambanderoll Notering:</b><ul><li>Använd en bild eller HTML text för reklambanderollen - inte båda.</li><li>HTML Text har prioritering över bild</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Bild Notering:</b><ul><li>Uppladdningsmapp måste ha rätt (skriv) rättigheter!</li><li>Fyll inte i \'Spara Till\' fältet om du inte skickar upp en bild till webservern (ex, du använder en lokal (på serversidan) bild).</li><li>\'Spara Till\' fältet måste vara en existerande mapp med ett avslutande snedstreck (ex, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Utgångs Notering:</b><ul><li>Endast ett av de två fälten borde fyllas i</li><li>Om inte reklamenbanderollen automatiskt utgår, så lämna dessa fälten blanka</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Schema Notering:</b><ul><li>Om ett schema är valt så kommer reklambanderollen att aktiveras detta datum.</li><li>Alla schedmalagda reklambanderoller är markerade som avaktiverade till dess startdatum, då de kommer att markeras aktiva.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Tillagd Den:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Schemalagd Den: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Utgår Den: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Utgår Efter: <b>%s</b> Visningar');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status Ändrad: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Senaste 3 Dagarna');
define('TEXT_BANNERS_BANNER_VIEWS', 'Antal Visningar');
define('TEXT_BANNERS_BANNER_CLICKS', 'Antal Klickningar');

define('TEXT_INFO_INSERT_INTRO', 'Var vänlig och ange ny reklambanderoll med relevanta data');
define('TEXT_INFO_EDIT_INTRO', 'Var vänlig och gör nödvändiga ändringar');
define('TEXT_INFO_DELETE_INTRO', 'Är du säker att du vill ta bort reklambanderollen?');
define('TEXT_INFO_DELETE_IMAGE', 'Ta bort reklambild');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Ny Reklambanderoll');

define('SUCCESS_BANNER_INSERTED', 'Utfört: Reklambanderollen har blivit inlagd.');
define('SUCCESS_BANNER_UPDATED', 'Utfört: Reklambanderollen har blivit updaterad.');
define('SUCCESS_BANNER_REMOVED', 'Utfört: Reklambanderollen har tagits bort.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Utfört: Reklambanderollens status har blivit updaterad.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Fel: Reklambanderolls titel behövs.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Fel: Reklambanderolls grupp behövs.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fel: Destinationsmappen existerar ej: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fel: Destinationsmappen är skrivskyddad: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Fel: Bild existerar ej.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Fel: Kan ej ta bort bild.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Fel: Okänd statusflagga.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Fel: Graphsmappen existerar ej. Vänligen skapa en \'graphs\' mapp i \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Fel: Graphsmappen är skrivskyddad.');

define('TABLE_HEADING_SOURCE', 'Källa');
define('TABLE_HEADING_VIEWS', 'Visningar');
define('TABLE_HEADING_CLICKS', 'Klickningar');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s Daglig Statistik För %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Månatlig Statistik För %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Årlig Statistik');

define('STATISTICS_TYPE_DAILY', 'Daglig');
define('STATISTICS_TYPE_MONTHLY', 'Månatlig');
define('STATISTICS_TYPE_YEARLY', 'Årlig');

define('TITLE_TYPE', 'Typ:');
define('TITLE_YEAR', 'År:');
define('TITLE_MONTH', 'Månad:');
?>