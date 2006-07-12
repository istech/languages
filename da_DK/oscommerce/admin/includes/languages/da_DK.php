<?php
/*
  $Id: en_US.php 608 2006-07-05 10:56:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or execute 'locale -a' on the server.
// Examples:
// on Linux try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
define('LANGUAGE_LOCALE', 'en_US');

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

define('NUMERIC_DECIMAL_SEPARATOR', '.');
define('NUMERIC_THOUSANDS_SEPARATOR', ',');

// Global entries for the <html> tag
define('HTML_PARAMS','xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en" lang="en"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Help');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Catalog');
define('HEADER_TITLE_LANGUAGES', 'Languages');

define('BOX_CONNECTION_PROTECTED', 'You are protected by a %s secure SSL connection.');
define('BOX_CONNECTION_UNPROTECTED', 'You are <font color="#ff0000">not</font> protected by a secure SSL connection.');
define('BOX_CONNECTION_UNKNOWN', 'unknown');

// text for gender
define('MALE', 'Male');
define('FEMALE', 'Female');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administrators');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MYSTORE', 'My Store');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Credit Card Types');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Payment');
define('BOX_MODULES_SHIPPING', 'Shipping');
define('BOX_MODULES_ORDER_TOTAL', 'Order Total');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalog');
define('BOX_CATALOG_CATEGORIES', 'Categories');
define('BOX_CATALOG_PRODUCTS', 'Products');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Products Attributes');
define('BOX_CATALOG_MANUFACTURERS', 'Manufacturers');
define('BOX_CATALOG_REVIEWS', 'Reviews');
define('BOX_CATALOG_SPECIALS', 'Specials');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Products Expected');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Customers');
define('BOX_CUSTOMERS_CUSTOMERS', 'Customers');
define('BOX_CUSTOMERS_ORDERS', 'Orders');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locations / Taxes');
define('BOX_TAXES_COUNTRIES', 'Countries');
define('BOX_TAXES_ZONES', 'Zones');
define('BOX_TAXES_GEO_ZONES', 'Tax Zones');
define('BOX_TAXES_TAX_CLASSES', 'Tax Classes');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Reports');
define('BOX_REPORTS_STATISTICS', 'Statistics');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Tools');
define('BOX_TOOLS_BACKUP', 'Database Backup');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner Manager');
define('BOX_TOOLS_CACHE', 'Cache Control');
define('BOX_TOOLS_IMAGES', 'Images');
define('BOX_TOOLS_FILE_MANAGER', 'File Manager');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Newsletter Manager');
define('BOX_TOOLS_SERVER_INFO', 'Server Info');
define('BOX_TOOLS_WHOS_ONLINE', 'Who\'s Online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localization');
define('BOX_LOCALIZATION_CURRENCIES', 'Currencies');
define('BOX_LOCALIZATION_LANGUAGES', 'Languages');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Orders Status');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Weight Classes');
define('BOX_LOCALIZATION_IMAGE_GROUPS', 'Image Groups');

define('BOX_HEADING_LOGOFF', 'Logoff');

// javascript messages
define('JS_ERROR', 'Errors have occured during the process of your form!\nPlease make the following corrections:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* The new product atribute needs a price value\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* The new product atribute needs a price prefix\n');
define('JS_PRODUCTS_NAME', '* The new product needs a name\n');
define('JS_PRODUCTS_DESCRIPTION', '* The new product needs a description\n');
define('JS_PRODUCTS_PRICE', '* The new product needs a price value\n');
define('JS_PRODUCTS_WEIGHT', '* The new product needs a weight value\n');
define('JS_PRODUCTS_QUANTITY', '* The new product needs a quantity value\n');
define('JS_PRODUCTS_MODEL', '* The new product needs a model value\n');
define('JS_PRODUCTS_IMAGE', '* The new product needs an image value\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* A new price for this product needs to be set\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Order Number %s does not exist!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Address');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Company');
define('CATEGORY_OPTIONS', 'Options');

define('ENTRY_GENDER', 'Gender:');
define('ENTRY_GENDER_ERROR', 'Please select your Gender.');
define('ENTRY_FIRST_NAME', 'First Name:');
define('ENTRY_FIRST_NAME_ERROR', 'Your First Name must contain a minimum of ' . ACCOUNT_FIRST_NAME . ' characters.');
define('ENTRY_LAST_NAME', 'Last Name:');
define('ENTRY_LAST_NAME_ERROR', 'Your Last Name must contain a minimum of ' . ACCOUNT_LAST_NAME . ' characters.');
define('ENTRY_DATE_OF_BIRTH', 'Date of Birth:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Your Date of Birth must be set correctly.');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Address:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Your E-Mail Address must contain a minimum of ' . ACCOUNT_EMAIL_ADDRESS . ' characters.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Your E-Mail Address does not appear to be valid - please make any necessary corrections.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Your E-Mail Address already exists in our records - please log in with the e-mail address or create an account with a different address.');
define('ENTRY_COMPANY', 'Company Name:');
define('ENTRY_COMPANY_ERROR', 'Your Company Name must contain a minimum of ' . ACCOUNT_COMPANY . ' characters.');
define('ENTRY_STREET_ADDRESS', 'Street Address:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Your Street Address must contain a minimum of ' . ACCOUNT_STREET_ADDRESS . ' characters.');
define('ENTRY_SUBURB', 'Suburb:');
define('ENTRY_SUBURB_ERROR', 'Your Suburb must contain a minimum of ' . ACCOUNT_SUBURB . ' characters.');
define('ENTRY_POST_CODE', 'Post Code:');
define('ENTRY_POST_CODE_ERROR', 'Your Post Code must contain a minimum of ' . ACCOUNT_POST_CODE . ' characters.');
define('ENTRY_CITY', 'City:');
define('ENTRY_CITY_ERROR', 'Your City must contain a minimum of ' . ACCOUNT_CITY . ' characters.');
define('ENTRY_STATE', 'State/Province:');
define('ENTRY_STATE_ERROR', 'Your State must contain a minimum of ' . ACCOUNT_STATE . ' characters.');
define('ENTRY_STATE_ERROR_SELECT', 'Please select a state from the States pull down menu.');
define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_COUNTRY_ERROR', 'You must select a country from the Countries pull down menu.');
define('ENTRY_TELEPHONE_NUMBER', 'Telephone Number:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Your Telephone Number must contain a minimum of ' . ACCOUNT_TELEPHONE . ' characters.');
define('ENTRY_FAX_NUMBER', 'Fax Number:');
define('ENTRY_FAX_NUMBER_ERROR', 'Your Fax Number must contain a minium of ' . ACCOUNT_FAX . ' characters.');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Subscribed');
define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Your Password must contain a minimum of ' . ACCOUNT_PASSWORD . ' characters.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'The Password Confirmation must match your Password.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password Confirmation:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_APPROVE', 'Approve');
define('IMAGE_BACK', 'Back');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_BOX_REMOVE', 'Remove Box');
define('IMAGE_CANCEL', 'Cancel');
define('IMAGE_CONFIGURE', 'Configure');
define('IMAGE_CONFIRM', 'Confirm');
define('IMAGE_COPY', 'Copy');
define('IMAGE_COPY_TO', 'Copy To');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'Delete');
define('IMAGE_EDIT', 'Edit');
define('IMAGE_EDIT_DEFINITIONS', 'Edit Definitions');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXECUTE', 'Execute');
define('IMAGE_EXPORT', 'Export');
define('IMAGE_FILE_MANAGER', 'File Manager');
define('IMAGE_ICON_STATUS_GREEN', 'Active');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Set Active');
define('IMAGE_ICON_STATUS_RED', 'Inactive');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Set Inactive');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_IMPORT', 'Import');
define('IMAGE_INSERT', 'Insert');
define('IMAGE_LOCK', 'Lock');
define('IMAGE_LOGIN', 'Login');
define('IMAGE_MODULE_INSTALL', 'Install Module');
define('IMAGE_MODULE_REMOVE', 'Remove Module');
define('IMAGE_MOVE', 'Move');
define('IMAGE_NEW_BANNER', 'New Banner');
define('IMAGE_NEW_CATEGORY', 'New Category');
define('IMAGE_NEW_COUNTRY', 'New Country');
define('IMAGE_NEW_CURRENCY', 'New Currency');
define('IMAGE_NEW_FILE', 'New File');
define('IMAGE_NEW_FOLDER', 'New Folder');
define('IMAGE_NEW_LANGUAGE', 'New Language');
define('IMAGE_NEW_NEWSLETTER', 'New Newsletter');
define('IMAGE_NEW_PRODUCT', 'New Product');
define('IMAGE_NEW_TAX_CLASS', 'New Tax Class');
define('IMAGE_NEW_TAX_RATE', 'New Tax Rate');
define('IMAGE_NEW_TAX_ZONE', 'New Tax Zone');
define('IMAGE_NEW_ZONE', 'New Zone');
define('IMAGE_ORDERS', 'Orders');
define('IMAGE_ORDERS_INVOICE', 'Invoice');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing Slip');
define('IMAGE_PREVIEW', 'Preview');
define('IMAGE_REJECT', 'Reject');
define('IMAGE_RESTORE', 'Restore');
define('IMAGE_RESET', 'Reset');
define('IMAGE_SAVE', 'Save');
define('IMAGE_SEARCH', 'Search');
define('IMAGE_SELECT', 'Select');
define('IMAGE_SEND', 'Send');
define('IMAGE_SEND_EMAIL', 'Send Email');
define('IMAGE_UNLOCK', 'Unlock');
define('IMAGE_UPDATE', 'Update');
define('IMAGE_UPDATE_CURRENCIES', 'Update Exchange Rate');
define('IMAGE_UPLOAD', 'Upload');

define('ICON_CROSS', 'False');
define('ICON_CURRENT_FOLDER', 'Current Folder');
define('ICON_DELETE', 'Delete');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Folder');
define('ICON_LOCKED', 'Locked');
define('ICON_PREVIOUS_LEVEL', 'Previous Level');
define('ICON_PREVIEW', 'Preview');
define('ICON_STATISTICS', 'Statistics');
define('ICON_SUCCESS', 'Success');
define('ICON_TICK', 'True');
define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Warning');

define('BUTTON_CANCEL', 'Cancel');
define('BUTTON_BACK', 'Back');
define('BUTTON_DELETE', 'Delete');
define('BUTTON_INSERT', 'Insert');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Save');
define('BUTTON_SEND', 'Send');

define('ICON_FILES', 'Files');
define('ICON_ORDERS', 'Orders');
define('ICON_PRODUCTS', 'Products');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page&nbsp;%s&nbsp;of&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> administrators)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> categories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> countries)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> credit cards)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> customers)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> currencies)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> languages)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> manufacturers)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> orders)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> orders status)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product attributes)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product attributes groups)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products expected)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product reviews)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products on special)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax classes)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax zones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax rates)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> weight classes)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'default');
define('TEXT_SET_DEFAULT', 'Set as default');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Required</span>');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE DOES NOT EXIST');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: There is currently no default currency set. Please set one at: Administration Tool->Localization->Currencies');

define('TEXT_CACHE_CATEGORIES', 'Categories Box');
define('TEXT_CACHE_MANUFACTURERS', 'Manufacturers Box');
define('TEXT_CACHE_ALSO_PURCHASED', 'Also Purchased Module');

define('TEXT_NONE', '--none--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'True');
define('TEXT_FALSE', 'False');
define('TEXT_OPTIONAL', 'Voluntary');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destination does not exist.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destination not writeable.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: I can not remove this file. Please set the right user permissions on: %s');
define('ERROR_FILE_NOT_SAVED', 'Error: File upload not saved.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: File upload type not allowed.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Success: File upload saved successfully.');
define('WARNING_NO_FILE_UPLOADED', 'Warning: No file uploaded.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Warning: File uploads are disabled in the php.ini configuration file.');

define('SUCCESS_DB_ROWS_UPDATED', 'Success: Entry successfully updated!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Warning: Entry not updated due to the data content being the same.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Error: Entry not updated due to an error.');

define('MAXIMUM_FILE_UPLOAD_SIZE', '(Max: %s)');
?>
