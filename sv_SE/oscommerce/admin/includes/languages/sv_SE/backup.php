<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Säkerhetskopierings Hanteraren');

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Storlek');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Ny Säkerhetskopia');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Återställ Lokal');
define('TEXT_INFO_NEW_BACKUP', 'Avbryt ej säkerhetskopieringen vilket kan ta ett par minuter.');
define('TEXT_INFO_UNPACK', '<br /><br />(efter uppackning av fil från arkivet)');
define('TEXT_INFO_RESTORE', 'Avbryt ej återställandet.<br /><br />Större säkerhetskopia innebär längre processtid!<br /><br />Om möjligt, använd mysql klienten.<br /><br />Till exampel:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Avbryt ej återställningsprocessen.<br /><br />Större säkerhetskopia innebär längre processtid!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Den uppladdade filen måste vara en rå sql (text) fil.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Storlek:');
define('TEXT_INFO_COMPRESSION', 'Komprimering:');
define('TEXT_INFO_USE_GZIP', 'Använd GZIP');
define('TEXT_INFO_USE_ZIP', 'Använd ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Ingen Komprimering (Ren SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Endast nedladdning (spara ej på serversidan)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Bäst genom en HTTPS anslutning');
define('TEXT_DELETE_INTRO', 'Är du säker på att du vill ta bort säkerhetskopian?');
define('TEXT_DELETE_BATCH_INTRO', 'Är du säker på att du vill ta bort följande säkerhetskopior?');
define('TEXT_NO_EXTENSION', 'Ingen');
define('TEXT_BACKUP_DIRECTORY', 'Mapp för Säkerhetskopia:');
define('TEXT_LAST_RESTORATION', 'Sista Återställning:');
define('TEXT_FORGET', '(<u>glöm</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fel: Mappen för säkerhetskopior existerar ej. Var vänlig och ändra detta i configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fel: Mappen för säkerhetskopior är skrivskyddad.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fel: Länk för nedladdning oacceptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Utfört: Datum för den senaste återställningen rensat.');
define('SUCCESS_DATABASE_SAVED', 'Utfört: Databasen har sparats.');
define('SUCCESS_DATABASE_RESTORED', 'Utfört: Databasen har återställts.');
define('SUCCESS_BACKUP_DELETED', 'Utfört: Säkerhetskopian har tagits bort.');
?>