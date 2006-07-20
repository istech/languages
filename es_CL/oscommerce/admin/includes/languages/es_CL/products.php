<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Productos');
  define('HEADING_TITLE_SEARCH', 'Buscar:');
  define('HEADING_TITLE_GOTO', 'Ir A:');

  define('TAB_GENERAL', 'General');
  define('TAB_DATA', 'Datos');
  define('TAB_IMAGES', 'Imágenes');
  define('TAB_ATTRIBUTES', 'Atributos');
  define('TAB_CATEGORIES', 'Categorías');

  define('FIELDSET_ASSIGNED_ATTRIBUTES', 'Atributos Asignadas');

  define('TABLE_HEADING_PRODUCTS', 'Productos');
  define('TABLE_HEADING_PRICE', 'Precio');
  define('TABLE_HEADING_QUANTITY', 'Cantidad');
  define('TABLE_HEADING_STATUS', 'Estatus');
  define('TABLE_HEADING_ACTION', 'Acción');

  define('TEXT_NEW_PRODUCT', 'Nuevo Producto');
  define('TEXT_CATEGORIES', 'Categorías:');

  define('TEXT_EDIT_INTRO', 'Por favor realizar cualquier cambio necesario');

  define('TEXT_INFO_COPY_TO_INTRO', 'Por favor elegir una nueva categoría que deseas copiar este producto a');
  define('TEXT_INFO_CURRENT_CATEGORIES', 'Actuales Categorías:');

  define('TEXT_DELETE_PRODUCT_INTRO', '¿Esta seguro que quiere borrar este producto permanentemente?');

  define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor seleccionar la categoría usted desea residir en <b>%s</b>');
  define('TEXT_MOVE', 'Mover <b>%s</b> a:');

  define('TEXT_PRODUCTS_STATUS', 'Estaus de los Productos:');
  define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha Disponible:');
  define('TEXT_PRODUCT_AVAILABLE', 'En Stock');
  define('TEXT_PRODUCT_NOT_AVAILABLE', 'Sin Stock');
  define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante de Productos:');
  define('TEXT_PRODUCTS_NAME', 'Nombre de Productos:');
  define('TEXT_PRODUCTS_DESCRIPTION', 'Descripción de Productos:');
  define('TEXT_PRODUCTS_QUANTITY', 'Cantidad de Productos:');
  define('TEXT_PRODUCTS_MODEL', 'Modelo de Productos:');
  define('TEXT_PRODUCTS_KEYWORD', 'Palabra clave de los productos:');
  define('TEXT_PRODUCTS_TAGS', 'Etiquetas de Productos:');
  define('TEXT_PRODUCTS_IMAGE', 'Imágenes de Productos:');
  define('TEXT_PRODUCTS_URL', 'URL: de Productos');
  define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sin http://)</small>');
  define('TEXT_PRODUCTS_TAX_CLASS', 'Clase de Impuesto:');
  define('TEXT_PRODUCTS_PRICE_NET', 'Precio de Productos (Neto):');
  define('TEXT_PRODUCTS_PRICE_GROSS', 'Precio de Productos (Bruto):');
  define('TEXT_PRODUCTS_WEIGHT', 'Peso de Productos:');

  define('TEXT_PRODUCT_DATE_ADDED', 'Este producto fue agregado a nuestro catálogo el %s.');
  define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este producto estará en stock en %s.');
  define('TEXT_PRODUCT_MORE_INFORMATION', 'Para más información, por favor visitar este productos <a href="http://%s" target="blank"><u>página web</u></a>.');

  define('TEXT_HOW_TO_COPY', 'Forma de Copiar:');
  define('TEXT_COPY_AS_LINK', 'Link producto');
  define('TEXT_COPY_AS_DUPLICATE', 'Duplicar producto');

  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No puede ligar productos en la misma categoría.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de las imágenes del catálogo no es escribible: ' . realpath('../images'));
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las imágenes del catálogo no existe: ' . realpath('../images'));
?>