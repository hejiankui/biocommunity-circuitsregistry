<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/signup.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if ($do == 'submit') {
	define('NOROBOT', TRUE);
	$ctl_obj = new register_ctl();
	
	$ctl_obj->setting = $_G['setting'];
	
	$ctl_obj->template = 'user/signup';
	$ctl_obj->on_register();
} else {
	if($_G['uid']) {
		showmessage('login_succeed', '/', array('username' => $_G['member']['username'], 'usergroup' => $_G['group']['grouptitle'], 'uid' => $_G['uid']));
	}
	$navtitle = 'Sign up';
	include template('user/signup');
}

?>