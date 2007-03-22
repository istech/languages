# $Id: $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2007 osCommerce
#
# Released under the GNU General Public License

page_title_installation = Nueva Instalación

page_heading_step_1 = Servidor De Base De Datos
page_heading_step_2 = Servidor Web
page_heading_step_3 = Configurar De La Tienda
page_heading_step_4 = ¡Terminado!

text_installation = <p>Este script web, configurará correctamente osCommerce para que funcione en este servidor.</p><p>Por favor siga las instrucciones que salen en pantalla que le llevarán a través del servidor de base de datos, servidor web y configuraciones de la tienda online. Si necesita ayuda en cualquier paso, por favor consulte la documentación o busque ayuda en los foros de la comunidad osCommerce.</p>
text_successful_installation = La instalación y la configuración han sido satisfactorias!
text_go_to_shop_after_cfg_file_is_saved = Por favor visite su tienda online una vez se haya guardado la configuración:

param_database_server = Servidor De Base De Datos
param_database_server_description = La dirección del servidor de la base de datos (nombre o dirección IP).
param_database_username = Nombre de Usuario
param_database_username_description = El nombre de usuario para conectar con el servidor de la base de datos.
param_database_password = Contraseña
param_database_password_description = La contraseña que se usa junto con el nombre de usuario para conectar con el servidor de la base de datos.
param_database_name = Nombre De La Base De Datos
param_database_name_description = El nombre de la base de datos para guardar los datos.
param_database_type = Tipo De Base De Datos
param_database_type_description = El tipo de software de la base de datos.
param_database_prefix = Prefijo De La Tabla De Base De Datos
param_database_prefix_description = El prefijo para usar las tablas de la base de datos.

param_database_import_sample_data = Importar datos de muestra
param_database_import_sample_data_description = Importar los datos de muestra en la base de datos (se recomienda para las instalaciones primerizas).

param_web_address = Dirección WWW
param_web_address_description = La dirección web a la tienda.
param_web_root_directory = Directorio Raíz Del Servidor Web
param_web_root_directory_description = El directorio donde el catálogo está instalado en el servidor.
param_web_work_directory = Directorio De Trabajo
param_web_work_directory_description = El directorio para los archivos temporalmente creados. Este directorio se debe situar fuera del directorio de raíz pública del servidor web por razones de seguridad. (Los servidores compartidos no deben usar /tmp/)

param_store_name = Nombre De La Tienda
param_store_name_description = El nombre de la tienda online que se presenta al público.
param_store_owner_name = Nombre Del Propietario De La Tienda Online
param_store_owner_name_description = Nombre del propietario de la tienda online que se presenta al público.
param_store_owner_email_address = Dirección E-Mail Del Propietario De La Tienda Online
param_store_owner_email_address_description = La dirección e-mail del propietario de la tienda online que se presenta al público.
param_administrator_username = Nombre Del Administrador
param_administrator_username_description = El nombre de usuario del administrador para usar en la herramienta de la administración.
param_administrator_password = Contraseña Del Administrador
param_administrator_password_description = La contraseña para ingresar la cuenta del administrador.

box_steps_step_1 = Servidor De Base De Datos
box_steps_step_2 = Servidor Web
box_steps_step_3 = Configurar Tienda Online
box_steps_step_4 = ¡Terminado!

box_info_step_1_title = Paso 1: Servidor De Base De Datos
box_info_step_1_text = <p>El servidor de la base de datos guardará el contenido de la tienda online tal como información de producto, información del cliente, y los pedidos que han sido hechos.</p><p>Por favor consultar a su administrador del servidor si sus parámetros del servidor de la base de datos todavía no lo sabe.</p>

box_info_step_2_title = Paso 2: Servidor Web
box_info_step_2_text = <p>El servidor web se encarga de servir las páginas de la tienda online a los visitantes y los clientes. Los parámetros del servidor web se cerciorará de que los acoplamientos a las páginas señalen a los archivos de correctas locaziones. Los parametros del servidor web se aseguran de que los links a las páginas generadas sean los correctos.</p><p>Los ficheros temporales tales como los datos de las sesiones y ficheros de cache son almacenados en el directorio de trabajo. Es importante que este directorio se localize fuera de la raíz de la web y esté protegido de el acceso público.</p>

box_info_step_3_title = Step 3: Configurar Tienda Online
box_info_step_3_text = <p>Aquí puede definir el nombre de su tienda, y la información de contacto del propietario de la misma.</p><p>El nombre de usuario y contraseña del administrador que se usen para entrar al area protegida de administración de la tienda online.</p>

box_info_step_4_title = Step 4: ¡Terminado!
box_info_step_4_text = <p>Enhorabuena, ha configurado e instalado osCommerce como su solución de tienda online!</p><p>Le deseamos lo mejor con su tienda online y le proponemos que visite y participe en nuestra comunidad online.</p><p align="right">- El equipo de osCommerce</p>

error_configuration_file_not_writeable = <p>El servidor web no ha podido escribir el fichero de configuración debido a un problema con los permisos de escritura del fichero.</p><p>Por favor verifique la configuración de los permisos del fichero para que el servidor web pueda escribir en el, e intente de nuevo haciendo click abajo, en el boton de reintentar.</p><p>El fichero de configuración se ubica en:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Alternativamente puede copiar los contenidos de la caja que hay abajo a mano en el fichero de configuración.</p>

rpc_database_connection_test = Comprobando la conexión a la base de datos..
rpc_database_connection_error = Ocurrió un problema al conectar a la base de datos. Ha ocurrido el siguiente error:</p><p><b>%s</b></p><p>Por favor verifique los parámetros de conexión e inténtelo de nuevo.
rpc_database_connected = Ha conectado a la base de datos satisfactoriamente.
rpc_database_importing = Se está importando ahora la estructura de la base de datos. Por favor sea paciente durante este proceso.
rpc_database_imported = La base de datos se ha importado correctamente.
rpc_database_import_error = Ocurrió un problema importando la base de datos. Ha ocurrido el siguiente error:</p><p><b>%s</b></p><p>Por favor verifique los parámetros de conexión e inténtelo de nuevo.

rpc_work_directory_test = Comprobando el directorio de trabajo..
rpc_work_directory_error_non_existent = Ocurrió un problema al intentar escribir en el directorio de trabajo. Ha ocurrido el siguiente error:<br /><br /><b>El directorio no existe:<br /><br />%s</b><br /><br />Por favor verifique el directorio e inténtelo de nuevo.
rpc_work_directory_error_not_writeable = Ocurrió un problema al acceder al directorio de trabajo. Ha ocurrido el siguiente error:<br /><br /><b>El servidor web no tiene permisos para escribir en ese directorio:<br /><br />%s</b><br /><br />Por favor verifique los permisos del directorio e inténtelo de nuevo.
rpc_work_directory_configured = El directorio de trabajo se ha configurado con éxito.

rpc_database_sample_data_importing = Los datos de ejemplo se están importando. Por favor sea paciente durante este proceso.
rpc_database_sample_data_imported = Los datos de ejemplo se han importado correctamente.
rpc_database_sample_data_import_error = Ha habido un problema al importar los datos de ejemplo en la base de datos. Ha ocurrido el siguiente error:</p><p><b>%s</b></p><p>Por favor verifique el servidor de la base de datos e inténtelo de nuevo.