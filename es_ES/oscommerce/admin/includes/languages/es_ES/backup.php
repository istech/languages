<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestor de Copias de Seguridad de la Base de Datos');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuevo Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar Localmente');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpir el proceso de copia de seguridad que puede llevar unos minutos.');
define('TEXT_INFO_UNPACK', '<br /><br />(después de extraer el archivo del archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpir el proceso de la restauración.<br /><br />¡Cuanto más grande es la copia de seguridad, más dura este proceso!<br /><br />Si es posible, usa el cliente del mysql en linea de comandos.<br /><br />Ejemplo:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de la restauración.<br /><br />¡Cuanto más grande es la copia de seguridad, más dura este proceso!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo debe ser un archivo raw de sql (texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresión:');
define('TEXT_INFO_USE_GZIP', 'Usa GZIP');
define('TEXT_INFO_USE_ZIP', 'Usa ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin Compresión (Puro SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Descargar solamente (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Mejor a través de una conexión de HTTPS');
define('TEXT_DELETE_INTRO', '¿Esta seguro que quiere borrar este backup?');
define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar los siguientes backups?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de Backup:');
define('TEXT_LAST_RESTORATION', 'Última Restauración:');
define('TEXT_FORGET', '(<u>olvida</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de backup no existe. Por favor establezca esto en configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de backup.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: El link de descarga no es aceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Exito: La fecha de la última restauración ha sido quitada.');
define('SUCCESS_DATABASE_SAVED', 'Exito: Se ha guardado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Exito: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', 'Exito: Se ha borrado el backup.');
?>