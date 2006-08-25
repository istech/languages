# $Id: $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2006 osCommerce
#
# Released under the GNU General Public License

page_title_installation = Ny Installation

page_heading_step_1 = Databasserver
page_heading_step_2 = Webserver
page_heading_step_3 = Online Affärsinställningar
page_heading_step_4 = Klar!

text_installation = <p>Denna web-baserade installation kommer på ett korrekt sätt att konfigurera osCommerce till att köras på denna server.</p><p>Var vänlig och följ instruktionerna som kommer leda dig genom databasservern, webservern, och affärskonfigurationen. Om du vid något tillfälle behöver hjälp, var vänlig och läs dokumentationen eller sök hjälp via supportforumet.</p>
text_successful_installation = Installation och konfiguration väl utfört!

param_database_server = Databasserver
param_database_server_description = Databasserverns adress i form av hostnamn eller IP adress.
param_database_username = Användarnamn
param_database_username_description = Användarnamnet som används att logga in till databasens server.
param_database_password = Lösenord
param_database_password_description = Lösenordet som används tillsammans med användarnamnet för att logga in till databasens server.
param_database_name = Databasnamn
param_database_name_description = Databasens namn som kommer att hålla datan.
param_database_type = Databasetyp
param_database_type_description = Databasservens programvara som används.
param_database_prefix = Database table prefix
param_database_prefix_description = Prefix att använda till databasens tables.

param_database_import_sample_data = Importera Exempeldata
param_database_import_sample_data_description = Inserting sample data into the database is recommended for first time installations.

param_web_address = WWW Adress
param_web_address_description = Webadressen till onlineaffären.
param_web_root_directory = Webserver Root Directory
param_web_root_directory_description = The directory where the online store is installed on the server.
param_web_work_directory = Arbetskatalog
param_web_work_directory_description = Arbetskatalogen för temporärt skapade filer. Denna katalog bör ligga utanför webserverns rootkatalog av säkerhetsskäl. (Delade hosting servrar bör ej använda /tmp/)

param_store_name = Affärsnamn
param_store_name_description = Namnet på onlineaffären somkommer att presenteras för allmänheten.
param_store_owner_name = Affärsinnehavarens namn
param_store_owner_name_description = Affärsinnehavarens namn som kommer att presenteras för allmänheten.
param_store_owner_email_address = Affärsinnehavarens e-postadress
param_store_owner_email_address_description = Affärsinnehavarens e-postadress som kommer att presenteras för allmänheten.
param_administrator_username = Administratörens användarnamn
param_administrator_username_description = Administratörens användarnamn för att logga in i administrationsverktyget.
param_administrator_password = Administratörens lösenord
param_administrator_password_description = Lösenordet för att logga in som administratör.

box_steps_step_1 = Databas server
box_steps_step_2 = Web server
box_steps_step_3 = Onlineaffärens inställningar
box_steps_step_4 = Klar!

box_info_step_1_title = Steg 1: Databasserver
box_info_step_1_text = <p>The database server stores the content of the online store such as product information, customer information, and the orders that have been made.</p><p>Please consult your server administrator if your database server parameters are not yet known.</p>

box_info_step_2_title = Steg 2: Webserver
box_info_step_2_text = <p>The web server takes care of serving the pages of the online store to the visitors and customers. The web server parameters make sure the links to the pages point to the correct location.</p><p>Temporary files such as session data and cache files are stored in the work directory. It is important that this directory is located outside the web server root directory and is protected from public access.</p>

box_info_step_3_title = Steg 3: Online Affärsinställningar
box_info_step_3_text = <p>Here you can define the name of your online store, and the contact information for the store owner.</p><p>The administrator username and password are used to log into the protected administration tool section.</p>

box_info_step_4_title = Steg 4: Klar!
box_info_step_4_text = <p>Congratulations on installing and configuring osCommerce as your online store solution!</p><p>We hope you all the best with your online store and welcome you to join and participate in our community.</p><p align="right">- The osCommerce Team</p>

error_configuration_file_not_writeable = <p>The webserver was not able to write the online store parameters to its configuration file due to file permission problems.</p><p>Please verify the permissions of the configuration file to allow the webserver to write to it, and try again by clicking on the Retry button below.</p><p>The configuration file is located at:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Alternatively you can copy and save the contents of the textbox below to the configuration file by hand.</p>

rpc_database_connection_test = Testing database connection..
rpc_database_connection_error = There was a problem connecting to the database server. The following error had occured:</p><p><b>%s</b></p><p>Please verify the connection parameters and try again.
rpc_database_connected = Successfully connected to the database.
rpc_database_importing = The database structure is now being imported. Please be patient during this procedure.
rpc_database_imported = Database imported successfully.
rpc_database_import_error = There was a problem importing the database. The following error had occured:</p><p><b>%s</b></p><p>Please verify the connection parameters and try again.

rpc_work_directory_test = Testing work directory..
rpc_work_directory_error_non_existent = There was a problem accessing the working directory. The following error had occured:<br /><br /><b>The directory does not exist:<br /><br />%s</b><br /><br />Please verify the directory and try again.
rpc_work_directory_error_not_writeable = There was a problem accessing the working directory. The following error had occured:<br /><br /><b>The webserver does not have write permissions to the directory:<br /><br />%s</b><br /><br />Please verify the permissions of the directory and try again.
rpc_work_directory_configured = Working directory successfully configured.

rpc_database_sample_data_importing = The sample data is now being imported into the database. Please be patient during this procedure.
rpc_database_sample_data_imported = Database sample data imported successfully.
rpc_database_sample_data_import_error = There was a problem importing the database sample data. The following error had occured:</p><p><b>%s</b></p><p>Please verify the database server and try again.
