# $Id: install.php 466 2006-03-05 16:34:20Z hpdl $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2006 osCommerce
#
# Released under the GNU General Public License

page_title_installation = Nieuwe installatie

page_heading_step_1 = Database Server
page_heading_step_2 = Web Server
page_heading_step_3 = Online winkelinstellingen
page_heading_step_4 = Klaar!

text_installation = <p>De installatieroutine zal osCommerce op een juiste wijze installeren en configureren voor gebruik op deze server.</p><p>Volgt u aub. de aanwijzingen op het scherm welke u zullen helpen bij het instellen van de database server, de web server, en de winkelconfiguratie opties. Indien u op enig moment toch hulp nodig heeft raadpleegt u de documentatie danwel verzoekt u om hulp/uitleg op onze support forums.</p>
text_successful_installation = De installatie en configuratie is succesvol verlopen!

param_database_server = Database Server
param_database_server_description = Het adres van de database server in de vorm van een hostnaam of IP adres.
param_database_username = Gebruikersnaam
param_database_username_description = De gebruikersnaam welke wordt gebruikt om contact te leggen met de database server.
param_database_password = Wachtwoord
param_database_password_description = Het wachtwoord dat wordt gebruikt in combinatie met de gebruikersnaam om conctact te leggen met de database server.
param_database_name = Databasenaam
param_database_name_description = De naam van de database waar uw gegevens in worden opgeslagen.
param_database_type = Database type
param_database_type_description = De database server software welke wordt gebruikt.
param_database_prefix = Databasetabel voorvoegsel
param_database_prefix_description = Het voorvoegsel te gebruiken voor de database tabellen.

param_database_import_sample_data = Importeer voorbeelddata
param_database_import_sample_data_description = Het invoegen van voorbeelddata in de database wordt aanbevolen bij een eerste installatie.

param_web_address = WWW adres
param_web_address_description = Het webadres naar de online webwinkel.
param_web_root_directory = Webserver Root Map
param_web_root_directory_description = De map waar de online webwinkel is geinstalleerd op de server.
param_web_work_directory = Werkmap
param_web_work_directory_description = De werkmap voor tijdelijke bestanden. Deze map kan het best buiten de root map geplaatst worden vanwege veiligheidsredenen. (gedeelde hosting servers moeten niet gebruik maken van de map /tmp/)

param_store_name = Winkelnaam
param_store_name_description = De naam van de online winkel zoals deze naar de bezoekers toe wordt gepresenteerd.
param_store_owner_name = Naam winkeleigenaar
param_store_owner_name_description = De naam van de winkeleigenaar zoals deze naar de bezoekers toe wordt gepresenteerd.
param_store_owner_email_address = E-mailadres winkeleigenaar
param_store_owner_email_address_description = Het E-mailadres van de winkeleigenaar zoals deze naar de bezoekers toe zal worden gebruikt.
param_administrator_username = Administratie gebruikersnaam
param_administrator_username_description = De administratie gebruikersnaam voor gebruik van de administratieve gereedschappen.
param_administrator_password = Administratie wachtwoord
param_administrator_password_description = Het wachtwoord te gebruiken voor de administratie gebruikersnaam.

box_steps_step_1 = Database Server
box_steps_step_2 = Web Server
box_steps_step_3 = Online winkelinstellingen
box_steps_step_4 = Klaar!

box_info_step_1_title = Step 1: Database Server
box_info_step_1_text = <p>De database server slaat de gegevens op van de online winkel zoals bijvoorbeeld produktinformatie, klantinformatie, en de bestellingen die geplaatst zijn.</p><p>Raadpleeg aub. uw server administrateur indien uw database server gegevens nog onbekend voor u zijn.</p>

box_info_step_2_title = Step 2: Web Server
box_info_step_2_text = <p>De web server heeft tot taak om de verschillende pagina\'s van uw online winkel te tonen aan bezoekers en klanten. De web server instellingen zorgen ervoor dat de links voor de diverse pagina's naar de juiste lokatie wijzen.</p><p>Tijdelijke bestanden zoals sessie gegevens en cache bestanden worden bewaard in de werkmap. Het is belangrijk dat deze map buiten de root map is gelegen en op deze wijze is beschermd tegen publieke toegang.</p>

box_info_step_3_title = Step 3: Online winkelinstellingen
box_info_step_3_text = <p>Hier kunt u oa. de naam van uw online winkel en de contact informatie naar de winkeleigenaar definiëren.</p><p>De administratie gebruikersnaam en wachtwoord wordt gebruikt om in te loggen in het beveiligde administratie gedeelte.</p>

box_info_step_4_title = Step 4: Klaar!
box_info_step_4_text = <p>Gefeliciteerd met het installeren en configureren van osCommerce als uw online webwinkel!</p><p>Wij wensen u het allerbeste met uw online webwinkel en hopen dat wij u ook mogen verwelkomen in onze gemeenschap.</p><p align="right">- Het osCommerce Team</p>

error_configuration_file_not_writeable = <p>De web server was niet in staat de winkelinstellingen naar het configuratiebestand te schrijven tengevolge van problemen met de bestandsrechten.</p><p>Controleert u aub. de bestandsrechten op het configuratiebestand zodat de web server ernaar toe mag schrijven en probeer het nog een keer door op de \'Opnieuw\' knop te drukken.</p><p>Het configuratiebestand kunt u vinden onder:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Als alternatief kunt u de inhoud van de tekstbox hieronder kopiëren en handmatig toevoegen en opslaan in het configuratiebestand.</p>

rpc_database_connection_test = Testen database verbinding..
rpc_database_connection_error = Er is een probleem met de verbinding naar uw database server. De volgende fout is opgetreden:</p><p><b>%s</b></p><p>Controleert u aub. de verbindingsinstellingen en probeer het opnieuw.
rpc_database_connected = Succesvol verbonden met de database.
rpc_database_importing = De database structuur wordt nu geimporteerd. Hebt u aub. geduld tijdens dit proces.
rpc_database_imported = Database succesvol geimporteerd.
rpc_database_import_error = Er is een probleem opgetreden tijdens het importeren in de database. De volgende fout is opgetreden:</p><p><b>%s</b></p><p>Controleert u aub. de verbindingsinstellingen en probeer het opnieuw.

rpc_work_directory_test = Testen werkmap..
rpc_work_directory_error_non_existent = Er is een probleem met de toegang tot uw werkmap. De volgende fout is opgetreden:<br /><br /><b>De map bestaat niet:<br /><br />%s</b><br /><br />Controleer aub. de map en probeer het opnieuw.
rpc_work_directory_error_not_writeable = Er is een probleem met de toegang tot uw werkmap. De volgende fout is opgetreden:<br /><br /><b>De web server heeft geen schrijfrechtenvoor de werkmap:<br /><br />%s</b><br /><br />Controleer aub. de bestandsrechten op uw werkmap en probeer het opnieuw.
rpc_work_directory_configured = Werkmap is succesvol geconfigureerd.

rpc_database_sample_data_importing = De voorbeelddata wordt nu in uw database geimporteerd. Hebt u aub. geduld tijdens dit proces.
rpc_database_sample_data_imported = Database voorbeelddata succesvol geimporteerd.
rpc_database_sample_data_import_error = Er is een probleem met het importeren van de voorbeelddata in uw database. De volgende fout is opgetreden:</p><p><b>%s</b></p><p>Controleert u aub. de database server en probeer het opnieuw.
