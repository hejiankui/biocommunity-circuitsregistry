<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/circuit/get.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

$ctl_obj = new circuit_ctl();

$ctl_obj->setting = $_G['setting'];
$method = 'on_'.$curmod;
$ctl_obj->template = 'circuit/'.$curmod;
$ctl_obj->$method();

?>