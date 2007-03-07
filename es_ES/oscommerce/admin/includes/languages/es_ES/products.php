<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

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
  define('TABLE_HEADING_STATUS', 'Estado');
  define('TABLE_HEADING_ACTION', 'Acción');

  define('TEXT_NEW_PRODUCT', 'Nuevo Producto');
  define('TEXT_CATEGORIES', 'Categorías:');

  define('TEXT_EDIT_INTRO', 'Por favor realize cualquier cambio necesario');

  define('TEXT_INFO_COPY_TO_INTRO', 'Por favor elija una nueva categoría a la que desee copiar este producto a');
  define('TEXT_INFO_COPY_TO_BATCH_INTRO', 'Por favor elija una nueva categoría a la que desee copiar estos productos a');
  define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorías Actuales:');

  define('TEXT_DELETE_PRODUCT_INTRO', '¿Esta seguro que quiere borrar este producto permanentemente?');
  define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar estos productos permanentemente?');

  define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor seleccione la categoría a la que desea asignar el producto <b>%s</b>');
  define('TEXT_MOVE', 'Mover <b>%s</b> a:');

  define('TEXT_PRODUCTS_STATUS', 'Estado de los Productos:');
  define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de Disponibilidad:');
  define('TEXT_PRODUCT_AVAILABLE', 'En Stock');
  define('TEXT_PRODUCT_NOT_AVAILABLE', 'Sin Stock');
  define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante de Productos:');
  define('TEXT_PRODUCTS_NAME', 'Nombre del Producto:');
  define('TEXT_PRODUCTS_DESCRIPTION', 'Descripción del Producto:');
  define('TEXT_PRODUCTS_QUANTITY', 'Cantidad del Producto:');
  define('TEXT_PRODUCTS_MODEL', 'Modelo del Producto:');
  define('TEXT_PRODUCTS_KEYWORD', 'Palabras Clave del Producto:');
  define('TEXT_PRODUCTS_TAGS', 'Etiquetas del Producto:');
  define('TEXT_PRODUCTS_IMAGE', 'Imágenes del Producto:');
  define('TEXT_PRODUCTS_URL', 'URL del producto');
  define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sin http://)</small>');
  define('TEXT_PRODUCTS_TAX_CLASS', 'Tipo de Impuesto:');
  define('TEXT_PRODUCTS_PRICE_NET', 'Precio del Producto (Neto):');
  define('TEXT_PRODUCTS_PRICE_GROSS', 'Precio del Producto (Bruto):');
  define('TEXT_PRODUCTS_WEIGHT', 'Peso del Producto:');

  define('TEXT_PRODUCT_DATE_ADDED', 'Este producto fué añadido al catálogo el %s.');
  define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este producto estará disponible a partir del %s.');
  define('TEXT_PRODUCT_MORE_INFORMATION', 'Para mas información por favor visite la página del producto <a href="http://%s" target="blank"><u>aquí</u></a>.');
  
  define('TEXT_HOW_TO_COPY', 'Método de Copia:');
  define('TEXT_COPY_AS_LINK', 'Enlace la Producto');
  define('TEXT_COPY_AS_DUPLICATE', 'Duplicar el Producto');

  define('WARNING_PRODUCT_KEY_IN_USE', 'Advertencia: Esta palabra clave es ya funcionando: %s. Por favor utilizar otra palabra clave única para este producto.');
  define('WARNING_PRODUCT_KEY_EMPTY', 'Advertencia: Este producto tiene una palabra clave vacía que tiene que ser definida. Por favor utilizar una palabra clave única para identificar público este producto.');
  define('WARNING_PRODUCT_KEY_INVALID', 'Advertencia: Esta palabra clave del producto es inválida: %s. Las palabras claves del producto deben ser una palabra que contiene las letras y los números (a-zA-Z0-9), y se pueden separar por las rayas (_) y los símbolos menos (-).');

  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No se puede enlazar el producto en la misma categoría.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de imágenes: ' . realpath('../images/products'));
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de imágenes no existe: ' . realpath('../images/products'));
  define('ERROR_IMAGE_PROCESSOR_NOT_AVAILABLE', 'Error: No se pueden procesar las imagenes del producto ya que "convert" que es parte de ImageMagick no está disponible. Este puede ser definido en Configuración -> Localización de programas.');
?>
