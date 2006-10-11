<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Fabricantes');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricantes');
define('TABLE_HEADING_URL_CLICKS', 'URL cliqueadas');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nuevo fabricante');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editar fabricante');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Borrar fabricante');

define('TEXT_MANUFACTURERS', 'Fabricantes:');
define('TEXT_DATE_ADDED', 'Fecha agregada:');
define('TEXT_LAST_MODIFIED', 'Ultima modificación:');
define('TEXT_PRODUCTS', 'Productos:');

define('TEXT_NEW_INTRO', 'Por favor completar la información siguiente para el fabricante nuevo');
define('TEXT_EDIT_INTRO', 'Por favor realizar cualquier cambio necesario');

define('TEXT_MANUFACTURERS_NAME', 'Nombre del fabricante:');
define('TEXT_MANUFACTURERS_IMAGE', 'Imágen del fabricante:');
define('TEXT_MANUFACTURERS_URL', 'URL del fabricante:');

define('TEXT_DELETE_INTRO', '¿Esta seguro que quiere borrar este fabricante?');
define('TEXT_DELETE_IMAGE', '¿Borrar la imágen del fabricante?');
define('TEXT_DELETE_PRODUCTS', '¿Borrar productos de este fabricante? (incluyendo comentarios del producto, productos en especiales, próximos productos)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> ¡Hay %s productos que todavía estan ligados a este fabricante!');

define('ERROR_MANUFACTURER_NAME', 'Error: El nombre del fabricante no puede quedar en blanco');
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de las imágenes del fabricante no es escribible: ' . realpath('../images/manufacturers'));
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las imágenes del fabricante no existe: ' . realpath('../images/manufacturers'));
?>
