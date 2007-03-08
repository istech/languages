# $Id: $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2007 osCommerce
#
# Released under the GNU General Public License

page_title_installation = Ny Installation

page_heading_step_1 = Databasserver
page_heading_step_2 = Webserver
page_heading_step_3 = Online Affärsinställningar
page_heading_step_4 = Klar!

text_installation = <p>Denna web-baserade installation kommer på ett korrekt sätt att konfigurera osCommerce till att köras på denna server.</p><p>Var vänlig och följ instruktionerna som kommer leda dig genom databasservern, webservern, och affärskonfigurationen. Om du vid något tillfälle behöver hjälp, var vänlig och läs dokumentationen eller sök hjälp via supportforumet.</p>
text_successful_installation = Installation och konfiguration väl utfört!
text_go_to_shop_after_cfg_file_is_saved = Var vänlig och besök din affär efter konfigurationsfilen har sparats:

param_database_server = Databas Server
param_database_server_description = Databas serverns adress i form av hostnamn eller IP adress.
param_database_username = Användarnamn
param_database_username_description = Användarnamnet som används att logga in till databasens server.
param_database_password = Lösenord
param_database_password_description = Lösenordet som används tillsammans med användarnamnet för att logga in till databasens server.
param_database_name = Databasnamn
param_database_name_description = Databasens namn som kommer att hålla datan.
param_database_type = Databasetyp
param_database_type_description = Databas servens programvara som används.
param_database_prefix = Database table prefix
param_database_prefix_description = Prefix att använda till databasens tables.

param_database_import_sample_data = Importera Exempel Data
param_database_import_sample_data_description = Importera exempeldata till databasen är att rekommendera för förstagångs installationer.

param_web_address = WWW Adress
param_web_address_description = Webadressen till online affären.
param_web_root_directory = Webserver Root Katalog
param_web_root_directory_description = Katalogen där onlineaffären är installerad på denna server.
param_web_work_directory = Arbetskatalog
param_web_work_directory_description = Arbetskatalogen för temporärt skapade filer. Denna katalog bör ligga utanför webserverns rootkatalog av säkerhetsskäl. (Delade hosting servrar bör ej använda /tmp/)

param_store_name = Affärsnamn
param_store_name_description = Namnet på onlineaffären somkommer att presenteras för allmänheten.
param_store_owner_name = Affärs Innehavarens Namn
param_store_owner_name_description = Affärs innehavarens namn som kommer att presenteras för allmänheten.
param_store_owner_email_address = Affärs Innehavarens E-Post Adress
param_store_owner_email_address_description = Affärs innehavarens e-postadress som kommer att presenteras för allmänheten.
param_administrator_username = Administratörens Användarnamn
param_administrator_username_description = Administratörens användarnamn för att logga in i administrations verktyget.
param_administrator_password = Administratörens Lösenord
param_administrator_password_description = Lösenordet för att logga in som administratör.

box_steps_step_1 = Databasserver
box_steps_step_2 = Webserver
box_steps_step_3 = Onlineaffärens inställningar
box_steps_step_4 = Klar!

box_info_step_1_title = Steg 1: Databasserver
box_info_step_1_text = <p>Databasservern sparar innehållet från onlineaffären som produktinformation, kundinformation, och ordrar som gjorts.</p><p>Var vänlig och konsultera din serveradministratör om dina databasserverparametrar ej är kända.</p>

box_info_step_2_title = Steg 2: Webserver
box_info_step_2_text = <p>Webservern tar hand om att visa sidor från onlineaffären till besökare och kunder. Webserverparameterarna garanterar att länkarna till sidorna pekar till rätt ställe.</p><p>Temporära filer som sessionsdata och cachefiler sparas i arbetskatalogen. Det är viktigt att denna katalog befinner sig utanför webserverns rootkatalog och skyddad från allmän tillgång.</p>

box_info_step_3_title = Steg 3: Online Affärsinställningar
box_info_step_3_text = <p>Här kan du definiera namnet på din onlineaffär, och kontaktinformation till affärsinnehavaren.</p><p>Administratör användarnamn och lösenord används för att skydda administrationsverktygsdelen.</p>

box_info_step_4_title = Steg 4: Klar!
box_info_step_4_text = <p>Gratulerar till din nya installation och konfiguration av osCommerce som din onlineaffärslösning!</p><p>Vi önskar dig all lycka med din onlineaffär och välkomnar dig att delta i vårt community.</p><p align="right">- osCommerce gruppen</p>

error_configuration_file_not_writeable = <p>Webservern kunde ej skriva onlineaffärens parametrar till konfigurationsfilen på grund av skrivrättighetsproblem.</p><p>Var vänlig och bekräfta rättigheterna i konfigurationsfilen för att låta webservern skriva till den, och försök igen genom att klicka på försök igen knappen under.</p><p>Konfigurationsfilen finns vid:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Alternativt kan du kopiera och spara innehållet från textboxen under till konfigurationsfilen för hand.</p>

rpc_database_connection_test = Testar databasens anslutning..
rpc_database_connection_error = Det uppstod ett problem vid anslutningen till databasservern. Följande fel uppstod:</p><p><b>%s</b></p><p>Var vänlig och bekräfta anslutningensparametrarna och försök igen.
rpc_database_connected = Lyckad anslutning till databasen.
rpc_database_importing = Databasstrukturen importeras nu. Var vänlig och vänta ut processen.
rpc_database_imported = Databasen importerad.
rpc_database_import_error = Det uppstod ett problem vid importeringen av databasen. Följande fel uppstod:</p><p><b>%s</b></p><p>Var vänlig och bekräfta anslutningsparametrarna och försök igen.

rpc_work_directory_test = Testar arbetskatalogen..
rpc_work_directory_error_non_existent = Det uppstod ett problem med arbetskatalogen. Följande fel uppstod:<br /><br /><b>Katalogen existerar ej:<br /><br />%s</b><br /><br />Var vänlig och bekräfta katalogen och försök igen.
rpc_work_directory_error_not_writeable = Det uppstod ett problem med arbetskatalogen. Följande fel uppstod:<br /><br /><b>Webservern har ej skrivrättigheter till katalogen:<br /><br />%s</b><br /><br />Var vänlig och bekräfta rättigheterna och försök igen.
rpc_work_directory_configured = Arbetskatalogen konfigurerad.

rpc_database_sample_data_importing = Exempeldata importeras nu till databasen. Var vänlig och vänta ut processen.
rpc_database_sample_data_imported = Exempeldata är nu importerade i databasen.
rpc_database_sample_data_import_error = Det uppstod ett problem vid importeringen av exempeldatan. Följande fel uppstod:</p><p><b>%s</b></p><p>Var vänlig och bekräfta databasservern och försök igen.