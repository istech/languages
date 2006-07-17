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
define('TABLE_HEADING_FILE_DATE', 'Dato');
define('TABLE_HEADING_FILE_SIZE', 'Størrelse');
define('TABLE_HEADING_ACTION', 'Handling');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Ny Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Gendan Lokal');
define('TEXT_INFO_NEW_BACKUP', 'Afbryd venligst ikke backup processen som kan tage nogle minutter.');
define('TEXT_INFO_UNPACK', '<br /><br />(efter at have pakket filen ud fra arkivet)');
define('TEXT_INFO_RESTORE', 'Afbryd venligst ikke gendannelsesprocessen.<br /><br />Des større backup, jo længere tager processen!<br /><br />Hvis muligt, brug mysql klienten.<br /><br />F.eks.:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Afbryd venligst ikke gendannelsesprocessen.<br /><br />Des større backup, jo længere tager processen!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Den uploadede fil skal være ren sql (tekst) fil.');
define('TEXT_INFO_DATE', 'Dato:');
define('TEXT_INFO_SIZE', 'Størrelse:');
define('TEXT_INFO_COMPRESSION', 'Kompression:');
define('TEXT_INFO_USE_GZIP', 'Brug GZIP');
define('TEXT_INFO_USE_ZIP', 'Brug ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Ingen kompression (Ren SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Kun Download (gem ikke på serveren)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Bedst igennem HTTPS forbindelse');
define('TEXT_DELETE_INTRO', 'Er du sikker på du vil slette denne backup?');
define('TEXT_NO_EXTENSION', 'Ingen');
define('TEXT_BACKUP_DIRECTORY', 'Backup Bibliotek:');
define('TEXT_LAST_RESTORATION', 'Seneste gendannelse:');
define('TEXT_FORGET', '(<u>glem</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'FEJL: Backup biblioteket findes ikke. Indstil venligst dette i configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'FEJL: Backup biblioteket kan ikke skrives til.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'FEJL: Download link kan ikke bruges.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succes: Den seneste gendannelsesdato er blevet ryddet.');
define('SUCCESS_DATABASE_SAVED', 'Succes: Databasen er blevet gemt.');
define('SUCCESS_DATABASE_RESTORED', 'Succes: Databasen er blevet gendannet.');
define('SUCCESS_BACKUP_DELETED', 'Succes: Backupen er slettet.');
?>