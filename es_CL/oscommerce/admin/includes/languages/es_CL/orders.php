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
define('TABLE_HEADING_ORDER_TOTAL', 'Total del Pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de la Compra');
define('TABLE_HEADING_STATUS', 'Estatus');
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

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente Notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha Agregada');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_DELIVERY_TO', 'Enviar A:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección del Envío:');
define('ENTRY_BILLING_ADDRESS', 'Dirección de la Facturación:');
define('ENTRY_PAYMENT_METHOD', 'Forma de Pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de Tarjeta de Crédito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Dueño de la Tarjeta de Crédito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Número de la Tarjeta de Crédito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Vencimiento de la Tarjeta de Crédito:');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Impuesto:');
define('ENTRY_SHIPPING', 'Envío:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de la Compra:');
define('ENTRY_STATUS', 'Estatus:');
define('ENTRY_POST_TRANSACTION_ACTIONS', 'Acciones Posteriores de la Transacción:');
define('ENTRY_DATE_LAST_UPDATED', 'Ultima Fecha al Día:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar Cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Agregar Commentario:');
define('ENTRY_NEW_COMMENT', 'Nuevo Comentario:');
define('ENTRY_PRINTABLE', 'Imprimir Factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Borrar Pedido');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que quiere borrar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Volver a stock la cantidad del producto');
define('TEXT_DATE_ORDER_CREATED', 'Fecha Creada:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima Modificación:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de Pago:');

define('TEXT_ALL_ORDERS', 'Todos los Pedidos');
define('TEXT_NO_ORDER_HISTORY', 'Ninguna Historia de Pedido Disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Pedido Actualizado');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número del Pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Factura Detallada:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del Pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido se ha puesto al día al siguiente estatus.' . "\n\n" . 'Nuevo estatus: %s' . "\n\n" . 'Por favor contestar a este email si tiene alguna pregunta.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Los comentarios para su pedido son' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: Pedido no existe.');
define('SUCCESS_ORDER_UPDATED', 'Exito: Pedido se ha actualizado con éxito.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: Nada para cambiar. El pedido no esta actualizado.');
?>