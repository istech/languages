<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestor de Banners');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Grupos');
define('TABLE_HEADING_STATISTICS', 'Mostrados / Clicks');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_BANNERS_TITLE', 'Nombre del Banner:');
define('TEXT_BANNERS_URL', 'Dirección del Banner:');
define('TEXT_BANNERS_GROUP', 'Grupo del Banner:');
define('TEXT_BANNERS_NEW_GROUP', ', o introduzca un nuevo grupo de banners debajo');
define('TEXT_BANNERS_IMAGE', 'Imagen:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o introduzca un ficherlo local debajo');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destino de la Imagen (Guardar En):');
define('TEXT_BANNERS_HTML_TEXT', 'Texto HTML:');
define('TEXT_BANNERS_EXPIRES_ON', 'Expira El:');
define('TEXT_BANNERS_OR_AT', ', o en');
define('TEXT_BANNERS_IMPRESSIONS', 'impresiones/visto.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Programado El:');
define('TEXT_BANNERS_STATUS', 'Estado:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Notas Del Banner:</b><ul><li>Use una imagen o texto HTML para el banner - No ambos.</li><li>El texto HTML tiene prioridad sobre una imagen</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Notas De La Imagen:</b><ul><li>La subida de directorios debe tener un permiso adecuado (escritura) establecido!</li><li>No rellene el campo \'Guardar en\' si no está subiendo una imagen al servidor (Ej: está usando una imagen local en el servidor.</li><li>El campo \'Guardar en\' debe ser en undirectorio existente terminado en barra (Ej: banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Notas De Caducidad:</b><ul><li>Solo uno de los dos campos debe ser enviado</li><li>Si el banner no debe caducar automáticamente, entonces deje los campos en blanco</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Notas Sobre Programación:</b><ul><li>Si se ha programado un banner, éste será activado en la fecha indicada.</li><li>Todos los banners programados son marcados como inactivos hasta que llegue su fecha de activación, en la cual serán marcados como activos.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Fecha Añadido:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Programado Para: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Caduca El: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Caduca a Las: <b>%s</b> impresiones');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambio de Estado: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Últimos 3 Días');
define('TEXT_BANNERS_BANNER_VIEWS', 'Impresiones del Banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clicks en el Banner');

define('TEXT_INFO_INSERT_INTRO', 'Por favor introduzca el nuevo banner y sus datos relacionados');
define('TEXT_INFO_EDIT_INTRO', 'Por favor realize los cambios necesarios');
define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de querer borrar éste banner?');
define('TEXT_DELETE_BATCH_INTRO', '¿Está seguro de querer borrar los siguientes banners?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar la imagen del banner');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Nuevo Banner');

define('SUCCESS_BANNER_INSERTED', 'Correcto: El banner ha sido insertado.');
define('SUCCESS_BANNER_UPDATED', 'Correcto: El banner ha sido actualizado.');
define('SUCCESS_BANNER_REMOVED', 'Correcto: El banner ha sido eliminado.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Correcto: El estado de este banner ha sido actualizado.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Se requiere un título para el banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Se reguiere un grupo para el banner.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de destino no existe: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de destino: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: La imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: La imagen no puede ser eliminada.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estado de flag desconocido.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de gráficos no existe. Por favor cree un directorio llamado \'graphs\' dentro de \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de gráficos.');

define('TABLE_HEADING_SOURCE', 'Fuente');
define('TABLE_HEADING_VIEWS', 'Impresiones');
define('TABLE_HEADING_CLICKS', 'Clicks');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s Estadísticas Diarias para %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Estadísticas Mensuales para %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Estadísticas Anuales');

define('STATISTICS_TYPE_DAILY', 'Diario');
define('STATISTICS_TYPE_MONTHLY', 'Mensual');
define('STATISTICS_TYPE_YEARLY', 'Anual');

define('TITLE_TYPE', 'Tipo:');
define('TITLE_YEAR', 'Año:');
define('TITLE_MONTH', 'Mes:');
?>