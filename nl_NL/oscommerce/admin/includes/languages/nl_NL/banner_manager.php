<?php
/*
  $Id: banner_manager.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Banner Manager');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Groepen');
define('TABLE_HEADING_STATISTICS', 'Vertoningen / Kliks');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_BANNERS_TITLE', 'Banner Titel:');
define('TEXT_BANNERS_URL', 'Banner URL:');
define('TEXT_BANNERS_GROUP', 'Banner Groep:');
define('TEXT_BANNERS_NEW_GROUP', ', of voeg hieronder een nieuwe banner groep in');
define('TEXT_BANNERS_IMAGE', 'Plaatje:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', of vul hieronder een lokale bestandsnaam in');
define('TEXT_BANNERS_IMAGE_TARGET', 'Plaatje bestemming (Bewaren als):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML tekst:');
define('TEXT_BANNERS_EXPIRES_ON', 'Verloopt op:');
define('TEXT_BANNERS_OR_AT', ', of op');
define('TEXT_BANNERS_IMPRESSIONS', 'impressies/bekeken.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Gepland voor:');
define('TEXT_BANNERS_STATUS', 'Status:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner opmerkingen:</b><ul><li>Gebruik een plaatje of HTML tekst voor de banner - niet beide.</li><li>HTML tekst heeft een hogere prioriteit als een plaatje</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Plaatje opmerkingen:</b><ul><li>Upload mappen moeten correcte toegangsinstellingen hebben (schrijfrechten)!</li><li>Vul niet het \'Bewaren als\' veld in indien u niet het plaatje upload naar de (bijv. u maakt gebruik van een lokaal plaatje).</li><li>De \'Bewaar als\' veld moet een bestaande map zijn eindigend met een \'/\'(bijv. banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Aflopings opmerkingen:</b><ul><li>U hoeft slecht één van de twee velden in te vullen</li><li>Indien de banner niet automatisch af hoeft te lopen laat deze velden dan leeg</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Gepland notities:</b><ul><li>Indien een planning is gezet wordt de banner op die dag geactiveerd.</li><li>Alle geplande banners zijn als niet-actief gemarkeerd totdat de ingestelde dag is aangebroken en ze als actief worden gemarkeerd.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Gepland voor: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Loopt af op: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Loopt af bij: <b>%s</b> impressies');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status verandering: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Laatste 3 dagen');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banners bekeken');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banners geklikt');

define('TEXT_INFO_INSERT_INTRO', 'Voegt u aub. de nieuwe banner met de bijbehorende gegevens in');
define('TEXT_INFO_EDIT_INTRO', 'Maakt u aub. de benodigde wijzigingen');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze banner wilt verwijderen?');
define('TEXT_INFO_DELETE_IMAGE', 'Verwijder banner plaatje');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Nieuwe banner');

define('SUCCESS_BANNER_INSERTED', 'Succes: De banner is ingevoegd.');
define('SUCCESS_BANNER_UPDATED', 'Succes: De banner is bijgewerkt.');
define('SUCCESS_BANNER_REMOVED', 'Succes: De banner is verwijderd.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succes: De status van de banner is bijgewerkt.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Fout: Banner titel verplicht.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Fout: Banner groep verplicht.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: Doel map bestaat niet: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: Doel map is niet beschrijfbaar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Foutje: Plaatje bestaat niet.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Foutje: Plaatje kan niet verwijderd worden.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Foutje: Onbekende status.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Fout: Graphs map bestaat niet. Maakt u aub. een map genaamd \'graphs\'  aan onder de map \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Fout: De Graphs map is niet beschrijfbaar (geen schrijfrechten).');

define('TABLE_HEADING_SOURCE', 'Bron');
define('TABLE_HEADING_VIEWS', 'Bekeken');
define('TABLE_HEADING_CLICKS', 'Kliks');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s Dagelijkse statistieken voor %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Maandelijkse statistieken voor %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Jaarlijkse statistieken');

define('STATISTICS_TYPE_DAILY', 'Dagelijks');
define('STATISTICS_TYPE_MONTHLY', 'Maandelijks');
define('STATISTICS_TYPE_YEARLY', 'Jaarlijks');

define('TITLE_TYPE', 'Type:');
define('TITLE_YEAR', 'Jaar:');
define('TITLE_MONTH', 'Maand:');
?>
