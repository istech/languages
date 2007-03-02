<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Especiales');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio de Productos');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_SPECIAL', 'Nuevo Producto En Especial');

define('TEXT_NEW_INTRO', 'Por favor completar la información siguiente para el producto nuevo en especial');
define('TEXT_EDIT_INTRO', 'Por favor realize cualquier cambio necesario');

define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Precio Especial (Neto):');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Precio Especial (Bruto):');
define('TEXT_SPECIALS_STATUS', 'Estado:');
define('TEXT_SPECIALS_START_DATE', 'Fecha de Inicio:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha de Venciemiento:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notas especiales:</b><ul><li>Puede introducir un porcentaje para deducir en el campo de Precio especiales, ejemplo: <b>20%</b></li><li>Si introduce un precio nuevo, el separador decimal debe ser un \'.\' (décimal-punto), ejemplo: <b>49.99</b></li><li>Dejar la fecha de vencimiento vacía para ninguna caducidad</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Fecha Agregada:');
define('TEXT_INFO_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_INFO_NEW_PRICE', 'Precio Nuevo :');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio Original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentaje:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca En:');
define('TEXT_INFO_STATUS_CHANGE', 'Cambiar Estado:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Borrar Especiales');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar el precio especial de los productos?');
define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar los precios especiales de los productos?');

define('ERROR_SPECIALS_PRICE', 'El precio especial no puede ser negativo o mayor que el precio original');
define('ERROR_SPECIALS_DATE', 'La fecha de vencimiento es anterior a la fecha del comienzo');
?>
