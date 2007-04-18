# $Id: orders_status.php 1498 2007-03-29 14:04:50Z hpdl $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2007 osCommerce
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License v2 (1991)
# as published by the Free Software Foundation.

heading_title = Order Statuses

action_heading_new_order_status = New Order Status
action_heading_batch_delete_order_statuses = Batch Delete Order Statuses

table_heading_order_statuses = Order Statuses
table_heading_action = Action

field_name = Name:
field_set_as_default = Set as Default?

introduction_new_order_status = Please fill in the following information for the new order status.

introduction_edit_order_status = Please make the necessary changes for this order status.

introduction_delete_order_status = Please verify the removal of this order status.
delete_error_order_status_prohibited = Error: The default order status cannot be removed. Please set another order status as the default status and try again.
delete_error_order_status_in_use = Error: This order status is currently assigned to %s orders and cannot be removed.
delete_error_order_status_used = Error: This order status has been used by %s orders and cannot be removed.

introduction_batch_delete_order_statuses = Please verify the removal of the following order statuses.
batch_delete_error_order_status_prohibited = Error: The default order status cannot be removed. Please set another order status as the default status and try again.
batch_delete_error_order_status_in_use = Error: One or more order statuses are currently assigned to orders and cannot be removed.
batch_delete_error_order_status_used = Error: One or more order statuses have been used in orders and cannot be removed.
