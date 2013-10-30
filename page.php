<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: page.php 2013-10-20 15:23:00 Beijing tengattack $
 */

define('CURSCRIPT', 'page');

require_once './src/class/core.php';

$biomiao = C::app();

$biomiao->init();

$mod = getgpc('mod');
if (!in_array($mod, array('about', 'privacypolicy', 'thanks'))) {
  //include template('error/404');
  showmessage('nopage_error');
}

$curmod = $mod;
define('CURMODULE', $curmod);

$pagetitle = array(
  'about' => 'About',
  'privacypolicy' => 'Privacypolicy',
  'thanks' => 'Thanks'
);

$navtitle = $pagetitle[$curmod];
include template('page/'.CURMODULE);

?>