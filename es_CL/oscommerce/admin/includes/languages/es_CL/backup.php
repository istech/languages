<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Manager de Respaldar Base de datos ');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuevo Respaldo');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restauración Local');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpir el proceso de respaldo que pudo tomar un par de minutos.');
define('TEXT_INFO_UNPACK', '<br /><br />(despus de extraer el archivo del archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpir el proceso de la restauracin.<br /><br />¡Cuanto más grande es el respaldo, este proceso dura!<br /><br />Si es posible, usa el cliente del mysql.<br /><br />Ejemplo:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpir el proceso de la restauracin.<br /><br />Cuanto más grande es el respaldo, este proceso dura!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo debe ser un archivo raw del sql (texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresión:');
define('TEXT_INFO_USE_GZIP', 'Usa GZIP');
define('TEXT_INFO_USE_ZIP', 'Usa ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'No Compresión (Puro SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Descargar solamente (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Mejor a través de una conexión de HTTPS');
define('TEXT_DELETE_INTRO', '¿Esta seguro que quiere borrar este respaldo?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de Respaldo:');
define('TEXT_LAST_RESTORATION', 'Ultima Restauración:');
define('TEXT_FORGET', '(<u>olvida</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de resspaldo no existe. Por favor fijar esto en configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de respaldo no es escribible.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: Link para descargar no aceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Exito: La fecha de la última restauración ha sido quitada.');
define('SUCCESS_DATABASE_SAVED', 'Exito: Se ha guardado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Exito: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', 'Exito: Se ha quitado el respaldo.');
?>