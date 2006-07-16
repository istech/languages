<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Manager de Banderas');

define('TABLE_HEADING_BANNERS', 'Banderas');
define('TABLE_HEADING_GROUPS', 'Grupos');
define('TABLE_HEADING_STATISTICS', 'Mostrado / Cliqueado');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_BANNERS_TITLE', 'Titulo de la Bandera:');
define('TEXT_BANNERS_URL', 'URL de la Bandera:');
define('TEXT_BANNERS_GROUP', 'Grupo de la Bandera:');
define('TEXT_BANNERS_NEW_GROUP', ', o ingresar un nuevo grupo de la bandera de abajo');
define('TEXT_BANNERS_IMAGE', 'Imagen:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o entrar a un archivo local de abajo');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destinación de la Imagen (Guardar Como):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Texto:');
define('TEXT_BANNERS_EXPIRES_ON', 'Expira En:');
define('TEXT_BANNERS_OR_AT', ', o a');
define('TEXT_BANNERS_IMPRESSIONS', 'impresiones/mostradas.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Programar En:');
define('TEXT_BANNERS_STATUS', 'Estatus:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Notas de la Bandera:</b><ul><li>Usar una imagen o el texto para la bandera - no ambas.</li><li>El texto de HTML tiene prioridad sobre una imagen</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Notas de la Imagen:</b><ul><li>¡Los directorios deben tener disposición apropiada de los permisos del usuario (escribir)!</li><li>No completar \'Guardar Como\' campo si no agregar una imagen al servidor web (EJ, si esta usando una imagen local (del servidor)).</li><li>El campo de \'Guardar Como\' debe ser un directorio existente con un eslach de la conclusión (ej., banderas/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Notas de la Expiración:</b><ul><li>Solamente uno de los dos campos debe ser sometido</li><li>Si la bandera no se expira automáticamente, entonces deja estos campos en blanco</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Nota de la Programación:</b><ul><li>Si se fija un horario, la bandera será activada esa fecha.</li><li>Todas las banderas programadas están marcadas como desactivadas hasta que su fecha ha llegado, a la cual entonces serán marcadas activas.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Fecha Agregada:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Programar En: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Expira En: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Expira En: <b>%s</b> impresiones');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambio Estatus: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', '3 Últimos Dias');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banderas Mostradas');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banderas Cliqueadas');

define('TEXT_INFO_INSERT_INTRO', 'Por favor ingresar la bandera nueva con sus datos relacionados');
define('TEXT_INFO_EDIT_INTRO', 'Por favor realizar cualquier cambio necesario');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar esta bandera?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen de la bandera');

define('TEXT_INFO_HEADING_NEW_BANNER', 'Nueva Bandera');

define('SUCCESS_BANNER_INSERTED', 'Exito: Se ha insertado la bandera.');
define('SUCCESS_BANNER_UPDATED', 'Exito: Se ha actualizado la bandera.');
define('SUCCESS_BANNER_REMOVED', 'Exito: Se ha quitado la bandera.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Exito: El estatus de la bandera se ha puesto al día.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Título de la bandera requerida.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Grupo de la bandera requerida.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio no existe: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio no es escribible: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: Imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: No se puede quitar la imagen.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estatus desconocido.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de los gráficos no existe. Por favor crear \'graphs\' interior del directorio \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de los gráficos no es escribible.');

define('TABLE_HEADING_SOURCE', 'Fuente');
define('TABLE_HEADING_VIEWS', 'Comentarios');
define('TABLE_HEADING_CLICKS', 'Cliqueadas');

define('TEXT_BANNERS_DAILY_STATISTICS', '%s Estadísticas diarias para %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Estadísticas mensuales para %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Estadísticas anuales');

define('STATISTICS_TYPE_DAILY', 'Diario');
define('STATISTICS_TYPE_MONTHLY', 'Mensual');
define('STATISTICS_TYPE_YEARLY', 'Anual');

define('TITLE_TYPE', 'Tipo:');
define('TITLE_YEAR', 'Año:');
define('TITLE_MONTH', 'Mes:');
?>