<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Fabricantes');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricantes');
define('TABLE_HEADING_URL_CLICKS', 'Visitas');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nuevo Fabricante');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editar Fabricante');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Borrar Fabricante');

define('TEXT_MANUFACTURERS', 'Fabricantes:');
define('TEXT_DATE_ADDED', 'Fecha Agregada:');
define('TEXT_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_PRODUCTS', 'Productos:');

define('TEXT_NEW_INTRO', 'Por favor complete la información siguiente para el nuevo fabricante');
define('TEXT_EDIT_INTRO', 'Por favor realize cualquier cambio necesario');

define('TEXT_MANUFACTURERS_NAME', 'Nombre del Fabricante:');
define('TEXT_MANUFACTURERS_IMAGE', 'Imágen del Fabricante:');
define('TEXT_MANUFACTURERS_URL', 'URL del Fabricante:');

define('TEXT_DELETE_INTRO', '¿Esta seguro que quiere borrar este fabricante?');
define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar estos fabricantes?');
define('TEXT_DELETE_IMAGE', '¿Borrar la imágen del fabricante?');
define('TEXT_DELETE_BATCH_IMAGES', '¿Borrar estas imáges del fabricante?');
define('TEXT_DELETE_PRODUCTS', '¿Borrar productos de este fabricante? (incluyendo comentarios del producto, productos en especiales, próximos productos, ..)');
define('TEXT_DELETE_BATCH_PRODUCTS', '¿Borrar productos de estos fabricantes? (incluyendo comentarios del producto, productos en especiales, próximos productos, ..)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> ¡Hay %s productos que todavía estan relacionados con este fabricante!');

define('ERROR_MANUFACTURER_NAME', 'Error: El nombre del fabricante no puede estar vacío');
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de las imágenes del fabricante: ' . realpath('../images/manufacturers'));
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las imágenes del fabricante no existe: ' . realpath('../images/manufacturers'));
?>