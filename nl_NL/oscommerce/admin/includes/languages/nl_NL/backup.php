<?php
/*
  $Id: backup.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Database Backup Manager');

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Grootte');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nieuwe Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Lokaal herstel');
define('TEXT_INFO_NEW_BACKUP', 'Gelieve het backup proces niet te onderbreken, dit kan enkele minuten duren.');
define('TEXT_INFO_UNPACK', '<br /><br />(na het uitpakken van het bestand uit het archief)');
define('TEXT_INFO_RESTORE', 'Gelieve het herstelproces niet te onderbreken.<br><br>Hoe groter de backup, hoe langer dit kan duren!<br /><br />Indien mogelijk gebruik hiervoor uw mysql programma.<br /><br />Bijvoorbeeld:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Onderbreekt u niet het terugzet proces.<br /><br />Hoe groter de backup hoe langer dit proces duurt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'De bestandsupload moet een raw sql (tekst) bestand zijn.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Grootte:');
define('TEXT_INFO_COMPRESSION', 'Compressie:');
define('TEXT_INFO_USE_GZIP', 'Gebruik GZIP');
define('TEXT_INFO_USE_ZIP', 'Gebruik ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Geen compressie (pure SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Alleen downloaden (niet op de server opslaan)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Het best middels een HTTPS connectie');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze backup wilt verwijderen?');
define('TEXT_NO_EXTENSION', 'Geen');
define('TEXT_BACKUP_DIRECTORY', 'Backup map:');
define('TEXT_LAST_RESTORATION', 'Laatste herstel:');
define('TEXT_FORGET', '(<u>vergeet</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: De backup map bestaat niet. Stelt u deze aub. in in het configure.php bestand.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fout: De backup map is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fout: De download link is niet acceptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succes: De datum van laatste herstel is verwijderd.');
define('SUCCESS_DATABASE_SAVED', 'Succes: De database is opgeslagen.');
define('SUCCESS_DATABASE_RESTORED', 'Succes: De database is teruggezet.');
define('SUCCESS_BACKUP_DELETED', 'Succes: De backup is verwijderd.');
?>