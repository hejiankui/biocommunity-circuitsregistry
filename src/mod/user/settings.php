<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/index.php 2013-07-09 21:00:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

$user = array();

if (isset($_GET['id']) && $_GET['id']) {
	$user['uid'] = intval($_GET['id']);
	if ($user['uid'] != $_G['uid']) {
		showmessage('permission_error');
	}
} else if($_G['uid']) {
	$user['uid'] = $_G['uid'];
}

if ($do == 'submit') {
		define('NOROBOT', TRUE);
	
		$ctl_obj = new profile_ctl();

		$ctl_obj->setting = $_G['setting'];
		$method = 'on_'.$do;
		$ctl_obj->user = & $user;
		$ctl_obj->template = 'user/settings';
		$ctl_obj->$method();

} else if ($do == '') {
	if (!$user['uid']) {
		if ($_G['uid']) {
			showmessage('message_bad_touid', '/');
		} else {
			showmessage('permission_error', '/');
		}
	} else {
		$u = getuserbyuid($user['uid']);
		if (!$u) showmessage('message_bad_touid', '/');
		$user = array_merge($user, $u);
		
		$profile = C::t('common_member_profile')->fetch($user['uid']);

		$user['profile'] = $profile;

		$navtitle = 'Settings';
		$navtitle = $user['username'].' - '.$navtitle;
		include template('user/settings');
	}
} else {
	showmessage('undefined_action', '/user/settings');
}

?>