<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/login.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if ($do) {
	define('NOROBOT', TRUE);
	
	$ctl_obj = new logging_ctl();
	
	// 自动选择是用户名还是email
	$_G['setting']['autoidselect'] = true;
	
	$ctl_obj->setting = $_G['setting'];
	$method = 'on_'.$do;
	$ctl_obj->template = 'user/signin';
	$ctl_obj->$method();
} else {
	if($_G['uid']) {
		showmessage('login_succeed', '/', array('username' => $_G['member']['username'], 'usergroup' => $_G['group']['grouptitle'], 'uid' => $_G['uid']));
	}
	$navtitle = 'Sign in';
	include template('user/signin');
}

?>