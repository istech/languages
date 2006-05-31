<?php
/*
  $Id: orders_status.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Orders Status');

define('TABLE_HEADING_ORDERS_STATUS', 'Orders Status');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_INSERT_INTRO', 'Please enter the new orders status with its related data');
define('TEXT_INFO_EDIT_INTRO', 'Please make any necessary changes');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this order status?');

define('TEXT_INFO_ORDERS_STATUS_NAME', 'Orders Status:');

define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'New Orders Status');

define('TEXT_INFO_DELETE_PROHIBITED', 'Warning: The default order status can not be removed. Please set another order status as the default, and try again.');
define('TEXT_INFO_DELETE_PROHIBITED_ORDERS', 'Warning: This order status is currently used in %s orders and cannot be removed.');
define('TEXT_INFO_DELETE_PROHIBITED_HISTORY', 'Warning: This order status is currently used in the order status history of %s orders and cannot be removed.');
?>
