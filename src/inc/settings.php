<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: inc/settings.php 2013-06-14 10:47:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

error_reporting(E_ALL | E_STRICT);

function set_def_settings() {
	global $_G;
	
	setglobal('setting/mobile', array('allowmobile' => 1));
	//setglobal('setting/dateformat', 'Y-m-d');
	//setglobal('setting/timeformat', 'H:i');
	//setglobal('setting/timeoffset', 8);

	$_G['setting']['sitename'] = 'Circuit+';
	$_G['setting']['bbname'] = 'Circuit+';

	$_G['version'] = array('core' => BM_RELEASE, 'js' => BM_RELEASE, 'css' => BM_RELEASE);
	
	$_G['setting']['dateformat'] = 'Y-m-d';
	$_G['setting']['timeformat'] = 'H:i';
	$_G['setting']['timeoffset'] = 8;
	$_G['setting']['dateconvert'] = true;

	//reg
	$_G['setting']['regctrl'] = true;
	$_G['setting']['regfloodctrl'] = true;
	$_G['setting']['sendregisterurl'] = true;
	$_G['setting']['pwlength'] = 6;
	//$_G['setting']['regclosed'] = true;
}

set_def_settings();

?>