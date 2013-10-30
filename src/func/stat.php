<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: func/stat.php 2013-06-14 17:27:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

function updatestat($type, $primary=0, $num=1) {
	$uid = getglobal('uid');
	$updatestat = getglobal('setting/updatestat');
	if(empty($uid) || empty($updatestat)) return false;
	C::t('common_stat')->updatestat($uid, $type, $primary, $num);
}

?>