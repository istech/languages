<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Paises');

define('TABLE_HEADING_COUNTRY_NAME', 'País');
define('TABLE_HEADING_COUNTRY_CODES', 'Código ISO');
define('TABLE_HEADING_ZONES_TOTAL', 'Zonas Definidas');
define('TABLE_HEADING_ACTION', 'Acción');

define('TABLE_HEADING_ZONE_NAME', 'Nombre de Zona);
define('TABLE_HEADING_ZONE_CODE', 'Código de Zona');

define('TEXT_INFO_EDIT_INTRO', 'Por favor realice cualquier cambio necesario');
define('TEXT_INFO_COUNTRY_NAME', 'Nombre:');
define('TEXT_INFO_COUNTRY_CODE_2', 'Código ISO (2):');
define('TEXT_INFO_COUNTRY_CODE_3', 'Código ISO (3):');
define('TEXT_INFO_ADDRESS_FORMAT', 'Formato de dirección:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor introduzca el nuevo país y sus datos relacionados');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar este país?');
define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar estos paises?');
define('TEXT_DELETE_BATCH_ZONES_INTRO', '¿Esta seguro que quiere borrar estas zonas?');
define('TEXT_INFO_HEADING_NEW_COUNTRY', 'Nuevo País');
define('TEXT_INFO_HEADING_EDIT_COUNTRY', 'Editar País');
define('TEXT_INFO_HEADING_DELETE_COUNTRY', 'Borrar País');

define('TEXT_INFO_DELETE_PROHIBITED_ADDRESS_BOOK', 'Advertencia: Este País no puede ser borrado mientras que esté asignado actualmente a las entradas de mis direcciones de %s.');
define('TEXT_INFO_DELETE_PROHIBITED_TAX_ZONES', 'Advertencia: Este País no puede ser borrado mientras que esté asignado actualmente a las zonas del impuesto de %s.');
define('TEXT_INFO_BATCH_DELETE_PROHIBITED_ADDRESS_BOOK', 'Advertencia: Följande länder kan ej tas bort eftersom de används i adressboks poster.');
define('TEXT_INFO_BATCH_DELETE_PROHIBITED_TAX_ZONES', 'Advertencia: Följande länder kan ej tas bort eftersom de för närvarande används i skatt zoner.');
define('TEXT_INFO_BATCH_DELETE_ZONES_PROHIBITED_ADDRESS_BOOK', 'Advertencia: Följande zoner kan ej tas bort eftersom de för närvarande används i adressböcker.');
define('TEXT_INFO_BATCH_DELETE_ZONES_PROHIBITED_TAX_ZONES', 'Advertencia: Följande zoner kan ej tas bort eftersom de används i skatt zoner.');
define('TEXT_INFO_DELETE_COUNTRIES_WARNING', 'Advertencia: Este País tiene %s de zonas asignadas que también seran borradas.');
?>