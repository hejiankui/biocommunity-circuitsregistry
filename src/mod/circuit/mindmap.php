<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/circuit/mindmap.php 2013-10-26 20:28 Zhuoteng Peng $
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