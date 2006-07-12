# $Id: install.php 466 2006-03-05 16:34:20Z hpdl $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2006 osCommerce
#
# Released under the GNU General Public License

page_title_installation = New Installation

page_heading_step_1 = Database Server
page_heading_step_2 = Web Server
page_heading_step_3 = Online Store Settings
page_heading_step_4 = Finished!

text_installation = <p>This web-based installation routine will correctly setup and configure osCommerce to run on this server.</p><p>Please following the on-screen instructions that will take you through the database server, web server, and store configuration options. If help is needed at any stage, please consult the documentation or seek help at the community support forums.</p>
text_successful_installation = The installation and configuration was successful!

param_database_server = Database Server
param_database_server_description = The address of the database server in the form of a hostname or IP address.
param_database_username = Username
param_database_username_description = The username used to connect to the database server.
param_database_password = Password
param_database_password_description = The password that is used together with the username to connect to the database server.
param_database_name = Database Name
param_database_name_description = The name of the database to hold the data in.
param_database_type = Database Type
param_database_type_description = The database server software that is used.
param_database_prefix = Database Table Prefix
param_database_prefix_description = The prefix to use for the database tables.

param_database_import_sample_data = Import Sample Data
param_database_import_sample_data_description = Inserting sample data into the database is recommended for first time installations.

param_web_address = WWW Address
param_web_address_description = The web address to the online store.
param_web_root_directory = Webserver Root Directory
param_web_root_directory_description = The directory where the online store is installed on the server.
param_web_work_directory = Work Directory
param_web_work_directory_description = The working directory for temporarily created files. This directory should be located outside the public webserver root directory for security reasons. (Shared hosting servers should not use /tmp/)

param_store_name = Store Name
param_store_name_description = The name of the online store that is presented to the public.
param_store_owner_name = Store Owner Name
param_store_owner_name_description = The name of the store owner that is presented to the public.
param_store_owner_email_address = Store Owner E-Mail Address
param_store_owner_email_address_description = The e-mail address of the store owner that is presented to the public.
param_administrator_username = Administrator Username
param_administrator_username_description = The administrator username to use for the administration tool.
param_administrator_password = Administrator Password
param_administrator_password_description = The password to use for the administrator account.

box_steps_step_1 = Database Server
box_steps_step_2 = Web Server
box_steps_step_3 = Online Store Settings
box_steps_step_4 = Finished!

box_info_step_1_title = Step 1: Database Server
box_info_step_1_text = <p>The database server stores the content of the online store such as product information, customer information, and the orders that have been made.</p><p>Please consult your server administrator if your database server parameters are not yet known.</p>

box_info_step_2_title = Step 2: Web Server
box_info_step_2_text = <p>The web server takes care of serving the pages of the online store to the visitors and customers. The web server parameters make sure the links to the pages point to the correct location.</p><p>Temporary files such as session data and cache files are stored in the work directory. It is important that this directory is located outside the web server root directory and is protected from public access.</p>

box_info_step_3_title = Step 3: Online Store Settings
box_info_step_3_text = <p>Here you can define the name of your online store, and the contact information for the store owner.</p><p>The administrator username and password are used to log into the protected administration tool section.</p>

box_info_step_4_title = Step 4: Finished!
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
