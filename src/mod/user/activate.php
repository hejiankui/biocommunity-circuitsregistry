<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/user/activate.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

$hash = $_GET['hash'];
$uid = intval($_GET['uid']);
$hash = explode("\t", authcode($_GET['hash'], 'DECODE', $_G['config']['security']['authkey']));

if(is_array($hash) && isemail($hash[0]) && TIMESTAMP - $hash[1] < 259200) {
	$u = getuserbyuid($uid);
	if (!empty($u)) {
		if ($u['emailstatus'] == 0 && $u['email'] == $hash[0]) {
			if (C::t('common_member')->update($uid, array('emailstatus' => 1))) {
				//C::t('opt_logs')->add_opt($uid, OPT_TYPE_SGINUP, $uid);	//add opt
				showmessage('activate_succeed', '/', array('username' => $u['username']));
			}
		} /*else {
			showmessage('activate_succeed', 'index.php', array('username' => $u['username']));
		}*/
	}
}

showmessage('register_activation_invalid', '/user/signin');

?>