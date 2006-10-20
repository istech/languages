<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Monedas');

define('TABLE_HEADING_CURRENCY_NAME', 'Moneda');
define('TABLE_HEADING_CURRENCY_CODES', 'Código');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Ejemplo');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_INSERT_INTRO', 'Por favor ingresar la nueva moneda y sus datos relacionados');
define('TEXT_INFO_EDIT_INTRO', 'Por favor realizar cualquier cambio necesario');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar esta moneda?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Por favor seleccionar el servicio para usar de la actualización de la moneda.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nueva Moneda');

define('TEXT_INFO_CURRENCY_TITLE', 'Título:');
define('TEXT_INFO_CURRENCY_CODE', 'Código:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Símbolo Izquierda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Símbolo Derecha:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimales:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(requiere una actualización manual de los valores de las monedas)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Usando la actualización seleccionada de la moneda acepta los términos y condiciones que esto implica.');

define('TEXT_INFO_CURRENCY_UPDATED', 'El cambio para %s (%s) fue actualizado con éxito vía %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Advertencia: La moneda predeterminada no puede ser quitada. Por favor elija otra moneda como la predeterminada y inténtelo de nuevo.');
define('ERROR_CURRENCY_INVALID', 'Error: El cambio para %s (%s) no ha sido actualizado va %s. ¿Es un código válido de la moneda?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Advertencia: El servidor primario de cambio (%s) falló para %s (%s) - intente con el servidor secundario de cambio.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Advertencia: La moneda predeterminada no puede ser quitada. Por favor elija otra moneda como la predeterminada y inténtelo de nuevo.');
?>