<?php
/*
  $Id: banner_manager.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Banner Manager');

define('TABLE_HEADING_BANNERS', 'Bannere');
define('TABLE_HEADING_GROUPS', 'Grupper');
define('TABLE_HEADING_STATISTICS', 'Visninger / Antal Klik');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Handling');

define('TEXT_BANNERS_TITLE', 'Banner Titel:');
define('TEXT_BANNERS_URL', 'Banner URL:');
define('TEXT_BANNERS_GROUP', 'Banner Gruppe:');
define('TEXT_BANNERS_NEW_GROUP', ', eller indtast ny banner gruppe nedenfor');
define('TEXT_BANNERS_IMAGE', 'Billede:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', eller indtast lokal fil nedenfor');
define('TEXT_BANNERS_IMAGE_TARGET', 'Billede destination (Gem til):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Tekst:');
define('TEXT_BANNERS_EXPIRES_ON', 'Udløber:');
define('TEXT_BANNERS_OR_AT', ', eller ved');
define('TEXT_BANNERS_IMPRESSIONS', 'indtryk/visninger.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Planlagt til:');
define('TEXT_BANNERS_STATUS', 'Status:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner Notat:</b><ul><li>Brug et billede eller HTML tekst til banneret - ikke begge dele.</li><li>HTML Tekst har prioritet over et billede</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Billede Notat:</b><ul><li>Upload biblioteker skal have rette bruger (skrive) rettigheder sat op!</li><li>Udfyld venligst ikke \'Gem til\' feltet hvis du ikke uploader et billede til webserveren (f.eks. hvis du bruger et lokalt (serverside) billede).</li><li>\'Gem til\' skal være et eksisterende bibliotek med en slut slash (f.eks. banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Udløbsnotat:</b><ul><li>Kun en af de to felter skal vælges</li><li>Hvis et banner ikke skal udløbe automatisk, efterlad venligst felterne tomme</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Planlægningsnotat:</b><ul><li>Hvis en planlagt dato er sat, vil banneret blive aktiveret på denne dato.</li><li>Alle planlagte bannere er markeret som inaktive indtil deres dato er nået, hvoefter de vil være markeret som aktive.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Dato tilføjet:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Planlagt til: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Udløber: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Udløber: <b>%s</b> indtryk');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status skifte: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Sidste 3 Dage');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner Visninger');
define('TEXT_BANNERS_BANNER_CLICKS', 'Antal banner klik');

define('TEXT_INFO_INSERT_INTRO', 'Venligst indsæt det nye banner med dets tilhørende data');
define('TEXT_INFO_EDIT_INTRO', 'Venligst lav de nødvendige ændringer');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker på du vil slette dette banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Delete banner billede');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Nyt Banner');

define('SUCCESS_BANNER_INSERTED', 'Succes: Banneret er blevet indsat.');
define('SUCCESS_BANNER_UPDATED', 'Succes: Banneret er blevet opdateret.');
define('SUCCESS_BANNER_REMOVED', 'Succes: Banneret er blevet fjernet.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succes: Bannerets status er blevet opdateret.');

define('ERROR_BANNER_TITLE_REQUIRED', 'FEJL: Banner titel krævet.');
define('ERROR_BANNER_GROUP_REQUIRED', 'FEJL: Banner gruppe krævet.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'FEJL: Destinationen findes ikke: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'FEJL: Destination er ikke skrivbar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'FEJL: Billedet findes ikke.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'FEJL: Billedet kan ikke slettes.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'FEJL: Ukendt status flag.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'FEJL: Grafbiblioteket findes ikke. Opret venligst et \'graphs\' bibliotek inde i \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'FEJL: Grafbiblioteket er ikke skrivbart.');

define('TABLE_HEADING_SOURCE', 'Kilde');
define('TABLE_HEADING_VIEWS', 'Visninger');
define('TABLE_HEADING_CLICKS', 'Antal klik');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s daglig statistik for %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s månedlig statistik for %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Årlige statistikker');

define('STATISTICS_TYPE_DAILY', 'Daglig');
define('STATISTICS_TYPE_MONTHLY', 'Månedlig');
define('STATISTICS_TYPE_YEARLY', 'Årlig');

define('TITLE_TYPE', 'Type:');
define('TITLE_YEAR', 'År:');
define('TITLE_MONTH', 'Måned:');
?>