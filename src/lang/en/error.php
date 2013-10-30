<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: lang/en/error.php 2013-10-26 21:52 Shenzhen sisi wu $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message' => 'Site Infomation',

	'config_notfound' => 'Configuration file "conf/global.php" not found or not accessible, please make sure you have correctly installed the program',
	'template_notfound' => 'Template file not found or not accessible',
	'directory_notfound' => 'Directory not found or not accessible',
	'request_tainting' => 'Illegal character has been found in your current request, the request has been rejected by the system',
	'db_help_link' => 'Click here for help',
	'db_error_message' => 'Error Message',
	'db_error_sql' => '<b>SQL</b>: $sql<br />',
	'db_error_backtrace' => '<b>Backtrace</b>: $backtrace<br />',
	'db_error_no' => 'Error Codes',
	'db_notfound_config' => 'Configuration file "conf/global.php" not found or not accessible,please make sure you have correctly installed the program.',
	'db_notconnect' => 'Unable to connect to database server',
	'db_security_error' => 'Security threats exist in query statement',
	'db_query_sql' => 'Query statement',
	'db_query_error' => 'Error in Query statement',
	'db_config_db_not_found' => 'Database configurations error, please carefully check the "conf/global.php" file',
	'system_init_ok' => 'Website system initialization completes，please <a href="index.php">Click Here</a> to enter the system',
	'backtrace' => 'Running Information',
	'error_end_message' => '<a href="http://{host}">{host}</a> Has recorded the error message in detail, We sincerely apologize for the inconvenience it brings.',
	'mobile_error_end_message' => '<a href="http://{host}">{host}</a> We sincerely apologize for the inconvenience the error brings.',

	'file_upload_error_-101' => 'Upload Failed ! File not exist or illegal, please return.',
	'file_upload_error_-102' => 'Upload Failed ! Non-image files, please return.',
	'file_upload_error_-103' => 'Upload Failed ! Cannot write to the file or write failed, pleas return.',
	'file_upload_error_-104' => 'Upload Failed ! Unrecognized image file format, please return.',
);

?>