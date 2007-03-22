<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// page title
define('TITLE', 'Administración del osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Ayuda');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'Sitio de soporte de osCommerce');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catálogo');
define('HEADER_TITLE_LANGUAGES', 'Lenguajes');
define('HEADER_TITLE_LOGOFF', 'Salir');

define('BOX_CONNECTION_PROTECTED', 'Está protegido por una conexión segura de SSL de %s.');
define('BOX_CONNECTION_UNPROTECTED', '<font color="#ff0000">No</font> está protegido por una conexión segura de SSL.');
define('BOX_CONNECTION_UNKNOWN', 'desconocido');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Femenino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/AAAA');

// javascript messages
define('JS_ERROR', '¡Hay errores en su formulario!\nPor favor haga las correcciones siguientes:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* El atributo del producto nuevo necesita un precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El atributo del producto nuevo necesita un prefijo del precio\n');
define('JS_PRODUCTS_NAME', '* El producto nuevo necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El producto nuevo necesita una descripción\n');
define('JS_PRODUCTS_PRICE', '* El producto nuevo necesita un precio\n');
define('JS_PRODUCTS_WEIGHT', '* El producto nuevo necesita un peso\n');
define('JS_PRODUCTS_QUANTITY', '* El producto nuevo necesita una cantidad\n');
define('JS_PRODUCTS_MODEL', '* El producto nuevo necesita un  modelo\n');
define('JS_PRODUCTS_IMAGE', '* El producto nuevo necesita una imagen\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Necesita dar un nuevo precio para este producto\n');
define('JS_ORDER_DOES_NOT_EXIST', 'El número del pedido número %s no existe!');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', 'Por favor elija su sexo.');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'Su Nombre debe contener un mínimo de ' . ACCOUNT_FIRST_NAME . ' caracteres.');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', 'Sus Apellidos deben contener un mínimo de ' . ACCOUNT_LAST_NAME . ' caracteres.');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de Nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Su Fecha de Nacimiento se debe fijar correctamente.');
define('ENTRY_EMAIL_ADDRESS', 'Dirección de E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su dirección de E-Mail debe contener un mínimo de ' . ACCOUNT_EMAIL_ADDRESS . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Su dirección de E-Mail no es válida - por favor haga las correcciones necesarias.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Su dirección de E-Mail ya existe en nuestra base de datos - por favor abra una sesión con la dirección E-Mail o cree una cuenta con una dirección diferente.');
define('ENTRY_COMPANY', 'Nombre de Empresa:');
define('ENTRY_COMPANY_ERROR', 'El Nombre de la Empresa debe contener un mínimo de ' . ACCOUNT_COMPANY . ' caracteres.');
define('ENTRY_STREET_ADDRESS', 'Nombre de calle:');
define('ENTRY_STREET_ADDRESS_ERROR', 'En Nombre de la Calle debe contener un mínimo de ' . ACCOUNT_STREET_ADDRESS . ' caracteres.');
define('ENTRY_SUBURB', 'Suburbio / Barrio:');
define('ENTRY_SUBURB_ERROR', 'Su Suburbio/Barrio debe contener un mínimo de ' . ACCOUNT_SUBURB . ' caracteres.');
define('ENTRY_POST_CODE', 'Código Postal:');
define('ENTRY_POST_CODE_ERROR', 'Su Código Postal debe contener un mínimo de ' . ACCOUNT_POST_CODE . ' caracteres.');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', 'Su Ciudad debe contener un mínimo de ' . ACCOUNT_CITY . ' caracteres.');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'Su Provincia debe contener un mínimo de ' . ACCOUNT_STATE . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor elija una provincia del menú.');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un país de los paises menú.');
define('ENTRY_TELEPHONE_NUMBER', 'Número de Telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su Número de Telefono debe contener un mínimo de ' . ACCOUNT_TELEPHONE . ' caracteres.');
define('ENTRY_FAX_NUMBER', 'Número de fax:');
define('ENTRY_FAX_NUMBER_ERROR', 'Su Número de Fax debe contener un mínimo de ' . ACCOUNT_FAX . ' caracteres.');
define('ENTRY_NEWSLETTER', 'Newsletters:');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No suscripción');
define('ENTRY_PASSWORD', 'Contraseña:');
define('ENTRY_PASSWORD_ERROR', 'Su Contraseña debe contener un mínimo de ' . ACCOUNT_PASSWORD . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La Confirmación de Contraseña debe coincidir con su Contraseña.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmar Contraseña:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Enviar E-Mail');
define('IMAGE_APPROVE', 'Aprobar');
define('IMAGE_BACK', 'Atrás');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_BOX_REMOVE', 'Quitar Caja');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIGURE', 'Configurar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a');
define('IMAGE_DEFAULT', 'Predeterminado');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Borrar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EDIT_DEFINITIONS', 'Editar Definiciones');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXECUTE', 'Ejecutar');
define('IMAGE_EXPORT', 'Exportar');
define('IMAGE_FILE_MANAGER', 'Gestor de Archivos');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activar');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Desactivar');
define('IMAGE_IMPORT', 'Importar');
define('IMAGE_INFO', 'Información');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Cerrar');
define('IMAGE_LOG', 'Historia');
define('IMAGE_LOGIN', 'Ingresar');
define('IMAGE_MODULE_INSTALL', 'Instalar Módulo');
define('IMAGE_MODULE_REMOVE', 'Quitar Módulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nueva Banner');
define('IMAGE_NEW_CATEGORY', 'Nueva Categoría');
define('IMAGE_NEW_COUNTRY', 'Nuevo País');
define('IMAGE_NEW_CURRENCY', 'Nueva Moneda');
define('IMAGE_NEW_FILE', 'Nuevo Archivo');
define('IMAGE_NEW_FOLDER', 'Nuevo Carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nueva Lenguaje');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo Newsletter');
define('IMAGE_NEW_PRODUCT', 'Nuevo Producto');
define('IMAGE_NEW_TAX_CLASS', 'Nuevo Tipo de Impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nuevo Impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva Zona de Impuesto');
define('IMAGE_NEW_ZONE', 'Nueva Zona');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Factura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Albarán');
define('IMAGE_PREVIEW', 'Muestra');
define('IMAGE_REJECT', 'Rechazar');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Reajustar');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccione');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar email');
define('IMAGE_UNLOCK', 'Abrir');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualización del cambio de la valuta');
define('IMAGE_UPLOAD', 'Subir');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Cerrado');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Muestra');
define('ICON_STATISTICS', 'Estadística');
define('ICON_SUCCESS', 'Exito');
define('ICON_TICK', 'Verdad');
define('ICON_UNLOCKED', 'Abierto');
define('ICON_WARNING', 'Advertencia');

define('BUTTON_CANCEL', 'Cancelar');
define('BUTTON_BACK', 'Atrás');
define('BUTTON_DELETE', 'Borrar');
define('BUTTON_INSERT', 'Insertar');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Guardar');
define('BUTTON_SEND', 'Enviar');

define('ICON_FILES', 'Archivos');
define('ICON_ORDERS', 'Pedidos');
define('ICON_PRODUCTS', 'Productos');

define('TEXT_RESULT_PAGE', 'Page&nbsp;%s&nbsp;of&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> banderas)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> categorías)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> paises)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> tarjetas de crédito)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> entradas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> lenguajes)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> boletínes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> estados de los pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> atributos del producto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> grupos de atributos de los productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos esperados)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> comentarios de productos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos en especial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clases de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> impuestos fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> tipos de peso)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clientes online)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'predeterminada');
define('TEXT_SET_DEFAULT', 'Fijar como predeterminada');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requerido</span>');
define('TEXT_IMAGE_NONEXISTENT', 'IMÁGEN NO EXISTE');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: Actualmente no hay una moneda predeterminada. Por favor fije una en: Administración ->Localización ->Monedas');

define('TEXT_CACHE_CATEGORIES', 'Categorías');
define('TEXT_CACHE_MANUFACTURERS', 'Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'También compraron');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'Verdadero');
define('TEXT_FALSE', 'Falso');
define('TEXT_OPTIONAL', 'Opcional');
define('TEXT_LEGEND', 'Leyenda');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El destino no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: No se puede escribir en destino.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puede borrar este archivo. Por favor fijar los permisos del usuario en: %s');
define('ERROR_FILE_NOT_SAVED', 'Error: Archivo subido no guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Tipo de archivo subido no está permitido.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Exito: El archivo subido se ha guardado con éxito.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se ha subido ningún archivo.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Los archivos subidos se inhabilitaron en el archivo de la configuración de php.ini.');

define('SUCCESS_DB_ROWS_UPDATED', 'Correcto: Entrada actualizada con éxito!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Advertencia: La entrada no será actualizada debido a que los datos contentidos son iguales.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Error: Entrada no actualizada debido a un error.');
?>