# $Id: banner_manager.php 1498 2007-03-29 14:04:50Z hpdl $
#
# osCommerce, Open Source E-Commerce Solutions
# http://www.oscommerce.com
#
# Copyright (c) 2007 osCommerce
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License v2 (1991)
# as published by the Free Software Foundation.

heading_title = Banner Manager

action_heading_new_banner = New Banner
action_heading_batch_delete_banners = Batch Delete Banners

operation_heading_type = Type:
operation_heading_month = Month:
operation_heading_year = Year:

table_heading_banners = Banners
table_heading_group = Group
table_heading_statistics = Statistics
table_heading_action = Action
table_heading_source = Source
table_heading_views = Views
table_heading_clicks = Clicks

section_daily = Daily
section_monthly = Monthly
section_yearly = Yearly

subsection_heading_statistics_daily = %s Daily Statistics For %s %s
subsection_heading_statistics_monthly = %s Monthly Statistics For %s
subsection_heading_statistics_yearly = %s Yearly Statistics

field_title = Title:
field_url = URL:
field_group = Group:
field_group_new = , or enter a new group below
field_image = Image:
field_image_local = , or enter a local file below
field_image_target = Image Target (Save To):
field_html_text = HTML Text:
field_scheduled_date = Scheduled Date:
field_expiry_date = Expiry Date:
field_maximum_impressions = Maximum Impressions:
field_status = Status:
field_delete_image = Delete Banner Image?

introduction_new_banner = Please fill in the following information for the new banner.

introduction_edit_banner = Please make the necessary changes for this banner.

introduction_delete_banner = Please verify the removal of this banner.

introduction_batch_delete_banners = Please verify the removal of the following banners.

info_banner_fields = <b>Banner Notes:</b><ul><li>Use an image or HTML text for the banner - not both.</li><li>HTML Text has priority over an image</li></ul>
<b>Image Notes:</b><ul><li>Uploading directories must have proper user (write) permissions setup!</li><li>Do not fill out the 'Save To' field if you are not uploading an image to the webserver (ie, you are using a local (serverside) image).</li><li>The 'Save To' field must be an existing directory with an ending slash (eg, banners/).</li></ul>
<b>Expiry Notes:</b><ul><li>Only one of the two fields should be submitted</li><li>If the banner is not to expire automatically, then leave these fields blank</li></ul>
<b>Schedule Notes:</b><ul><li>If a schedule is set, the banner will be activated on that date.</li><li>All scheduled banners are marked as deactive until their date has arrived, to which they will then be marked active.</li></ul>

ms_error_graphs_directory_non_existant = Error: Graphs directory does not exist: %s
ms_error_graphs_directory_not_writable = Error: Graphs directory is not writable: %s
