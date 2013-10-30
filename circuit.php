<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: circuit.php 2013-10-20 16:55:00 Beijing tengattack $
 */

define('CURSCRIPT', 'circuit');

require_once './src/class/core.php';

$biomiao = C::app();

$biomiao->init();

$mod = getgpc('mod');
if (!in_array($mod, array('', 'list', 'search', 'mindmap', 'show', 'create', 'get', 'feedback'))) {
  include template('error/404');
  exit;
}

if (isset($_GET['id'])) {
  if (!$mod) $mod = 'show';
} else {
  if (!$mod) {
    $mod = 'list';
  }
}

$curmod = $mod;
define('CURMODULE', $curmod);

//require_once libfile('func/user');
require_once libfile('class/circuit');

$do = getgpc('do');
$id = intval(getgpc('id'));

require_once BM_ROOT.'./src/mod/circuit/'.$curmod.'.php';

?>