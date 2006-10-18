<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Pedidos');

define('SEARCH_ORDER_ID', 'Pedido ID:');
define('SEARCH_CUSTOMER_ID', 'Cliente ID:');
define('SEARCH_STATUS', '<br />Estatus:');

define('TABLE_HEADING_COMMENTS', 'Commentarios');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Total del pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de la compra');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_QUANTITY', 'Cant.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuesto');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inc)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha añadido');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_DELIVERY_TO', 'Enviar a:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección del envío:');
define('ENTRY_BILLING_ADDRESS', 'Dirección de la facturación:');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular de la tarjeta de crédito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Número de la tarjeta de crédito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Vencimiento de la tarjeta de crédito:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'Impuesto:');
define('ENTRY_SHIPPING', 'Envío:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de la compra:');
define('ENTRY_STATUS', 'Estatus:');
define('ENTRY_POST_TRANSACTION_ACTIONS', 'Acciones posteriores de la transacción:');
define('ENTRY_DATE_LAST_UPDATED', 'Ultima fecha al día:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Agregar commentario:');
define('ENTRY_NEW_COMMENT', 'Nuevo comentario:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Borrar pedido');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Volver a incluir en stock la cantidad del producto');
define('TEXT_DATE_ORDER_CREATED', 'Fecha creada:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima modificación:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'Ninguna historia de pedido disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Pedido actualizado');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número del pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Factura detallada:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido se ha cambiado al siguiente estado.' . "\n\n" . 'Nuevo estado: %s' . "\n\n" . 'Por favor conteste a este email si tiene alguna pregunta.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Los comentarios para su pedido son' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: El pedido no existe.');
define('SUCCESS_ORDER_UPDATED', 'Exito: El pedido se ha actualizado con éxito.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: Nada para cambiar. El pedido no se ha actualizado.');
?>
