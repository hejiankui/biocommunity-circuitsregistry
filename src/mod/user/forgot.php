<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/forgot.php 2013-10-26 23:39 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if ($do == 'submit') {
	define('NOROBOT', TRUE);
	
	$ctl_obj = new password_ctl();
	
	// 自动选择是用户名还是email
	//$_G['setting']['autoidselect'] = true;

	$_GET['type'] = 'reset';
	$_GET['username'] = $_GET['user']['username'];
	$_GET['email'] = $_GET['user']['email'];

	$ctl_obj->setting = $_G['setting'];
	$method = 'on_'.$do;
	$ctl_obj->template = 'user/forgot';
	$ctl_obj->$method();
} else {
	if($_G['uid']) {
		showmessage('login_succeed', '/', array('username' => $_G['member']['username'], 'usergroup' => $_G['group']['grouptitle'], 'uid' => $_G['uid']));
	}
	$navtitle = 'Forgot';
	include template('user/forgot');
}

?>