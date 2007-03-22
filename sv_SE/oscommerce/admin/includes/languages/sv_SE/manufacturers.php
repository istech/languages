<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Tillverkare');

define('TABLE_HEADING_MANUFACTURERS', 'Tillverkare');
define('TABLE_HEADING_URL_CLICKS', 'URL Klickningar');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Ny Tillverkare');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editera Tillverkare');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Ta Bort Tillverkare');

define('TEXT_MANUFACTURERS', 'Tillverkare:');
define('TEXT_DATE_ADDED', 'Tillagd:');
define('TEXT_LAST_MODIFIED', 'Senast Ändrad:');
define('TEXT_PRODUCTS', 'Produkter:');

define('TEXT_NEW_INTRO', 'Var vänlig och ange följande information för den nya tillverkaren');
define('TEXT_EDIT_INTRO', 'Var vänlig och gör nödvändiga ändringar');

define('TEXT_MANUFACTURERS_NAME', 'Tillverkarens Namn:');
define('TEXT_MANUFACTURERS_IMAGE', 'Tillverkarens Bild:');
define('TEXT_MANUFACTURERS_URL', 'Tillverkarens URL:');

define('TEXT_DELETE_INTRO', 'Är du säker att du vill ta bort denna tillverkaren?');
define('TEXT_DELETE_BATCH_INTRO', 'Är du säker att du vill ta bort följande tillverkare?');
define('TEXT_DELETE_IMAGE', 'Ta bort tillverkarens bild?');
define('TEXT_DELETE_BATCH_IMAGES', 'Ta bort dessa tillverkarnas bilder?');
define('TEXT_DELETE_PRODUCTS', 'Ta bort produkterna från denna tillverkare? (inklusive produkt kommentarer, produkter i kampanjer, kommande produkter, ..)');
define('TEXT_DELETE_BATCH_PRODUCTS', 'Ta bort produkter från dessa tillverkare? (inklusive produkt kommentarer, produkter i kampanjer, kommande produkter, ..)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>VARNING:</b> Det finns fortfarande %s produkter länkade till denna tillverkare!');

define('ERROR_MANUFACTURER_NAME', 'Fel: Tillverkarens namn kan ej vara blankt.');
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fel: Tillverkarbildmappen är skrivskyddad: ' . realpath('../images/manufacturers'));
define('ERROR_MANUFACTURERS_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fel: Tillverkarbildmappen existerar ej: ' . realpath('../images/manufacturers'));
?>