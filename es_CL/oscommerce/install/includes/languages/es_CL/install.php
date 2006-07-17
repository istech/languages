<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

page_title_installation = Nueva Instalación

page_heading_step_1 = Servidor de Base de Datos
page_heading_step_2 = Servidor Web
page_heading_step_3 = Configurar Tienda
page_heading_step_4 = ¡Terminado!

text_installation = <p>Esta instalación web-basada va a correctamente instalar y configurar el osCommerce para funcionar en este servidor.</p><p>Por favor sigua las instrucciones en la pantalla que le tomarán con el servidor de la base de datos, el servidor web, y las configuraones de la tienda. Si necesita ayuda en cualquier etapa, por favor consultar la documentación o buscar la ayuda en los foros de la comunidad.</p>
text_successful_installation = ¡La instalación y configuración fueron con exito!

param_database_server = Servidor de Base de Datos
param_database_server_description = La dirección del servidor de la base de datos bajo la forma de nombre de anfitrión o dirección IP.
param_database_username = Nombre de usuario
param_database_username_description = El nombre de usuario para conectar con el servidor de la base de datos.
param_database_password = Contraseña
param_database_password_description = La contraseña que se usa junto con el nombre de usuario para conectar con el servidor de la base de datos.
param_database_name = Nombre de la Base de Datos
param_database_name_description = El nombre de la base de datos para guardar los datos.
param_database_type = Tipo de Base de Datos
param_database_type_description = El tipo de software de la base de datos.
param_database_prefix = Prefijo de la Tabla de Base de Datos
param_database_prefix_description = El prefijo para usar las tablas de la base de datos.

param_database_import_sample_data = Importar Datos de Muestra
param_database_import_sample_data_description = Poner los datos de muestra en la base de datos se recomienda para las instalaciones de la primera vez.

param_web_address = Dirección WWW
param_web_address_description = La dirección web a la tienda.
param_web_root_directory = Directorio Raíz del Servidor Web
param_web_root_directory_description = El directorio donde la tienda está instalada en el servidor.
param_web_work_directory = Directorio de Trabajo
param_web_work_directory_description = El directorio para los archivos temporalmente creados. Este directorio se debe situar fuera del directorio de raíz pública del servidor web por razones de seguridad. (Los servidores compartidos no se deben usar /tmp/)

param_store_name = Nombre de la Tienda
param_store_name_description = El nombre de la tienda que se presenta al público.
param_store_owner_name = Nombre del Dueño de la Tienda
param_store_owner_name_description = Nombre del dueño de la tienda que se presenta al público.
param_store_owner_email_address = Dirección E-Mail del Dueño de la Tienda
param_store_owner_email_address_description = La dirección e-mail del dueño de la tienda que se presenta al público.
param_administrator_username = Nombre del Administrador
param_administrator_username_description = El nombre de usuario del administrador para usar en la herramienta de la administración.
param_administrator_password = Contraseña del Administrador
param_administrator_password_description = La contraseña para ingresar la cuenta del administrador.

box_steps_step_1 = Servidor de Base de Datos
box_steps_step_2 = Servidor Web
box_steps_step_3 = Configurar Tienda
box_steps_step_4 = ¡Terminado!

box_info_step_1_title = Paso 1: Servidor de Base de Datos
box_info_step_1_text = <p>El servidor de la base de datos guardará el contenido de la tienda tal como información de producto, información del cliente, y los pedidos que han sido hechos.</p><p>Por favor consultar a su administrador del servidor si sus parámetros del servidor de la base de datos todavía no lo sabe.</p>

box_info_step_2_title = Paso 2: Servidor Web
box_info_step_2_text = <p>El servidor web cuida el servir las páginas de la tienda de los visitantes y los clientes. Los parámetros del servidor web se cerciorará de que los links a las páginas señalen a los archivos de correctas locaziones.</p><p>Archivos temporarios como datos de la sesión y los archivos del cache está link en el directorio del trabajo. Es importante que este directorio este situado fuera del directorio de raíz del servidor web y protegido contra el acceso público.</p>

box_info_step_3_title = Paso 3: Configurar Tienda
box_info_step_3_text = <p>Aquí puedes definir el nombre de su tienda, y la información del contacto para el nombre de usuario del administrador del dueño de la tienda.</p><p>El nombre de usuario y la contraseña del administrador se usa para ingresar en la sección protegida de la herramienta de la administración.</p>

box_info_step_4_title = Paso 4: ¡Terminado!
box_info_step_4_text = <p>¡Felicitaciones por la instalación y configuración de osCommerce como su solución de la tienda!</p><p>Le deseamos lo mejor con su tienda y le damos la bienvenida para ensamblar y participar en nuestra comunidad.</p><p align="right">- El Equipo del osCommerce</p>

error_configuration_file_not_writeable = <p>El servidor web no pudo escribir los parámetros de la tienda a su archivo de la configuración debido a los problemas del permiso del archivo.</p><p>Por favor verificar los permisos del archivo de la configuración de permitir que el servidor web le escriba, y haga click en el archivo de la configuración del botón de abajo.</p><p>El archivo de la configuración se localiza en:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Puede copiar y guardar alternativamente el contenido del box de texto abajo al archivo de la configuración a mano.</p>

rpc_database_connection_test = Probando la conexión de la base de datos..
rpc_database_connection_error = Había un problema que conectaba con el servidor de la base de datos. El error siguiente había ocurrido:</p><p><b>%s</b></p><p>Por favor verificar los parámetros de la conexión y intente otra vez.
rpc_database_connected = Conectado con éxito con la base de datos.
rpc_database_importing = La estructura de la base de datos ahora se está importando. Por favor sea paciente durante este procedimiento.
rpc_database_imported = La base de datos sea importado con éxito.
rpc_database_import_error = Había un problema que importaba la base de datos. El error siguiente había ocurrido:</p><p><b>%s</b></p><p>Por favor verificar los parámetros de la conexión y intente otra vez.

rpc_work_directory_test = Probando el directorio de trabajo..
rpc_work_directory_error_non_existent = Había un problema de acceso al directorio de trabajo. El error siguiente había ocurrido:<br /><br /><b>El directorio no existe:<br /><br />%s</b><br /><br />Por favor verificar el directorio y intente otra vez.
rpc_work_directory_error_not_writeable = Había un problema de acceso al directorio de trabajo. El error siguiente había ocurrido:<br /><br /><b>El servidor web no tiene permisos para escribir al directorio:<br /><br />%s</b><br /><br />Por favor verificar los permisos del directorio y intente otra vez.
rpc_work_directory_configured = El directorio de trabajo se configuró con éxito.

rpc_database_sample_data_importing = Los datos de muestra ahora ya se están importando en la base de datos. Por favor sea paciente durante este procedimiento.
rpc_database_sample_data_imported = Los datos de muestra de la base de datos importaron con éxito.
rpc_database_sample_data_import_error = Había un problema que importaba los datos de muestra de la base de datos. El error siguiente había ocurrido:</p><p><b>%s</b></p><p>Por favor verificar el servidor de la base de datos y intente otra vez.
?>