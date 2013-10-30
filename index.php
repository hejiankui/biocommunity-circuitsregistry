<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: index.php 2013-10-19 04:12:00 Beijing tengattack $
 */

define('CURMODULE', 'biomiao');
define('CURSCRIPT', 'index');

require_once './src/class/core.php';

$biomiao = C::app();

$biomiao->init();

//runhooks();

$navtitle = 'Home';
include template('index/'.CURMODULE);

?>