<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: term.php 2013-10-20 16:55:00 Beijing tengattack $
 */

define('CURSCRIPT', 'term');

require_once './src/class/core.php';

$biomiao = C::app();

$biomiao->init();

$mod = getgpc('mod');
if (!in_array($mod, array('tag', 'chassis', 'plasmid', 'classification', 'part'))) {
  include template('error/404');
  exit;
}

$curmod = $mod;
define('CURMODULE', $curmod);

//require_once libfile('class/term');

$do = getgpc('do');
$id = intval(getgpc('id'));

require_once BM_ROOT.'./src/mod/term/term.php';

?>