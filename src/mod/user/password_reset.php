<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/password_reset.php 2013-10-26 23:39 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if ($do == 'reset') {
	define('NOROBOT', TRUE);
	
	$ctl_obj = new password_ctl();

	$ctl_obj->setting = $_G['setting'];
	$method = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_GET['type'] = 'input';
		$_GET['password1'] = $_GET['user']['password1'];
		$_GET['password2'] = $_GET['user']['password2'];
		$method = 'on_submit';
	} else {
		$method = 'on_'.$do;
	}

	$ctl_obj->template = 'user/password_reset';
	$ctl_obj->$method();
} else {
	include template('error/404');
}

?>