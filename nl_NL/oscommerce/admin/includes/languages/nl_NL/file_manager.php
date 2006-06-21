<?php
/*
  $Id: file_manager.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  define('HEADING_TITLE', 'File Manager');

  define('TABLE_HEADING_FILENAME', 'Name');
  define('TABLE_HEADING_SIZE', 'Size');
  define('TABLE_HEADING_PERMISSIONS', 'Permissions');
  define('TABLE_HEADING_USER', 'User');
  define('TABLE_HEADING_GROUP', 'Group');
  define('TABLE_HEADING_WRITEABLE', 'Writeable');
  define('TABLE_HEADING_LAST_MODIFIED', 'Last Modified');
  define('TABLE_HEADING_ACTION', 'Action');

  define('TEXT_INFO_HEADING_UPLOAD', 'Upload');
  define('TEXT_FILE_NAME', 'Filename:');
  define('TEXT_FILE_SIZE', 'Size:');
  define('TEXT_FILE_CONTENTS', 'Contents:');
  define('TEXT_LAST_MODIFIED', 'Last Modified:');
  define('TEXT_NEW_FOLDER', 'New Folder');
  define('TEXT_NEW_FOLDER_INTRO', 'Enter the name for the new folder:');
  define('TEXT_DELETE_INTRO', 'Are you sure you want to delete this file?');
  define('TEXT_UPLOAD_INTRO', 'Please select the files to upload.');

  define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Error: I can not write to this directory. Please set the right user permissions on: %s');
  define('ERROR_FILE_NOT_WRITEABLE', 'Error: I can not write to this file. Please set the right user permissions on: %s');
  define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Error: I can not remove this directory. Please set the right user permissions on: %s');
  define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Error: Directory does not exist: %s');
  define('ERROR_DIRECTORY_EXISTS', 'Error: Directory already exists: %s');
?>
