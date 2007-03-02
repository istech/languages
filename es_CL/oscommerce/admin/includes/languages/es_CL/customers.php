<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Clientes');
define('HEADING_TITLE_SEARCH', 'Buscar:');

define('TABLE_HEADING_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_LASTNAME', 'Apellidos');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Cuenta Creada');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_STATUS', 'Estado');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS_BOOK', 'Libro de Dirección ');

define('TEXT_DATE_ACCOUNT_CREATED', 'Cuenta Creada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Último Login:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Número de Logins:');
define('TEXT_INFO_COUNTRY', 'País:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Número de Comentarios:');
define('TEXT_DELETE_INTRO', '¿Esta seguro que quiere borrar este cliente?');
define('TEXT_DELETE_BATCH_INTRO', '¿Esta seguro que quiere borrar los siguientes clientes?');
define('TEXT_DELETE_ADDRESS_BOOK_INTRO', '¿Estas seguro que quiere borrar esta entrada del libro de dirección de los clientes?');
define('TEXT_DELETE_REVIEWS', 'Borrar %s comentarios');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Borrar Cliente');
define('TEXT_INFO_HEADING_NEW_CUSTOMER', 'Nuevo Cliente');
define('TEXT_INFO_HEADING_NEW_ADDRESS_BOOK_ENTRY', ' Nueva Entrada Del Libro De Dirección');
define('TEXT_BATCH_DELETE_REVIEWS', '¿Comentarios del cliente de la cancelación?');
define('TYPE_BELOW', 'Escriba Abajo');
define('PLEASE_SELECT', 'Elija Uno');
define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado %s' . "\n\n");
define('EMAIL_WELCOME', 'Le damos la bienvenida a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Ahora puede participar en los <b>diferentes servicios</b> que le ofrecemos. Algunos de estos servicios incluyen:' . "\n\n" . '<li><b>Carrito de la Compra Permanente</b> - Cualquier producto añadido a su carrito permanecerá allí hasta que lo quite, o lo compre.' . "\n" . '<li><b>Libreta de Direcciones</b> - Ahora podemos entregar sus productos a otra dirección distinta a la suya! Esto es perfecto para enviar los regalos directos a otros destinatarios o direcciones.' . "\n" . '<li><b>Historial de pedidos</b> - Ver su historial de compras efectuadas con nosotros.' . "\n" . '<li><b>Comentarios de Productos</b> - Compartir sus opiniones sobre los productos con otros clientes.' . "\n\n");
define('EMAIL_CONTACT', 'Para obtener ayuda con cualquiera de nuestros servicios, por favor envíe un email al encargado de la tienda online: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_PASSWORD', '<b>Nota:</b> Esta cuenta ha sido creada para usted por el encargado de la tienda online. La contraseña para tener acceso a esta cuenta es %s.' . "\n");

define('ENTRY_STATUS', 'Estado:');
define('ENTRY_SET_AS_PRIMARY', 'Fijar Como Dirección Primaria:');

define('TEXT_INFO_DELETE_ADDRESS_BOOK_PROHIBITED', 'Advertencia: La dirección primaria de los clientes no puede ser borrada. Asignar por favor otra dirección como la dirección primaria e intente otra vez.');
?>
