<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/logout.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

define('NOROBOT', TRUE);

$ctl_obj = new logging_ctl();

// 自动选择是用户名还是email
$_G['setting']['autoidselect'] = true;

$ctl_obj->setting = $_G['setting'];
//$ctl_obj->template = 'user/logout';
$ctl_obj->on_logout();


?>