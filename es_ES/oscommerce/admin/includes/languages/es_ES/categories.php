<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'Categorías');
  define('HEADING_TITLE_SEARCH', 'Buscar:');
  define('HEADING_TITLE_GOTO', 'Ir a:');

  define('TABLE_HEADING_CATEGORIES', 'Categorías');
  define('TABLE_HEADING_ACTION', 'Acción');
  define('TABLE_HEADING_STATUS', 'Estado');

  define('TEXT_EDIT_INTRO', 'Por favor realice cualquier cambio necesario');
  define('TEXT_EDIT_CATEGORIES_NAME', 'Nombre de la categoría:');
  define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imágen de la categoría:');
  define('TEXT_EDIT_SORT_ORDER', ' Orden:');

  define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nueva categoría');

  define('TEXT_DELETE_CATEGORY_INTRO', '¿Esta seguro que quiere borrar esta categoría?');
  define('TEXT_DELETE_WARNING_CHILDS', '<b>ADVERTENCIA:</b> ¡Hay %s subcategorías que todavía están ligadas a esta categoría!');
  define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> ¡Hay %s productos que todavía están ligadas a esta categoría!');

  define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor seleccione la categoría que usted desea <b>%s</b> para residir en');
  define('TEXT_MOVE', 'Mover <b>%s</b> a:');

  define('TEXT_NEW_CATEGORY_INTRO', 'Por favor complete la información para la nueva categoría');
  define('TEXT_CATEGORIES_NAME', 'Nombre de la categoría:');
  define('TEXT_CATEGORIES_IMAGE', 'Imágen de la categoría');
  define('TEXT_SORT_ORDER', 'Orden de sorteo:');

  define('EMPTY_CATEGORY', 'Categoría vacía');

  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: La categoría no se puede mover a una subcategoría.');
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de imágenes de las categorias: ' . realpath('../images/categories'));
  define('ERROR_CATEGORIES_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las imágenes de las categorias no existe: ' . realpath('../images/categories'));
?>
