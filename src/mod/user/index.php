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
} else if($_G['uid']) {
	$user['uid'] = $_G['uid'];
}

if ($do && $do != 'follow') {
	if(!in_array($do, array('edit', 'change_email', 'resend_email', 'antiactivate_email'))) {
		showmessage('undefined_action', '/');
	}
	
	$ctl_obj = new profile_ctl();
	
	$ctl_obj->setting = $_G['setting'];
	$method = 'on_'.$do;
	$ctl_obj->user = & $user;
	$ctl_obj->template = 'user/profile_'.$do;
	$ctl_obj->$method();
	
} else {
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
		
		//require libfile('func/event');
		
		//$events = getevents(5, $user['uid'], false);
		//$roles = C::t('role')->get_all_by_uid($user['uid']);
		//$stories = C::t('story')->get_all_by_uid($user['uid']);
		
		$profile = C::t('common_member_profile')->fetch($user['uid']);

		$user['profile'] = $profile;
		//$isfollow = C::t('follow')->isfollow($_G['uid'], $user['uid']);

		/*if ($do == 'follow') {

			$followers = C::t('follow')->getfollowers($user['uid']);
			$fusers = C::t('follow')->getusers($user['uid']);

			$uids = array();
			foreach ($followers as $key => $tfollower) {
				$uids[] = $tfollower['follower'];
			}
			foreach ($fusers as $key => $tuser) {
				$uids[] = $tuser['user'];
			}

			$uids = array_unique($uids);
			$users = array();
			if (!empty($uids)) $users = C::t('common_member')->fetch_all($uids);

			$navtitle = $user['username'].' - '.$navtitle;
			include template('account/profile_follow');
		} else*/ {
			$navtitle = 'Profile';
			$navtitle = $user['username'].' - '.$navtitle;
			include template('user/index');
		}
	}
	
}

?>