<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: user.php 2013-10-20 16:55:00 Beijing tengattack $
 */

define('CURSCRIPT', 'user');

require_once './src/class/core.php';

$biomiao = C::app();

$biomiao->init();

$mod = getgpc('mod');
if (!in_array($mod, array('', 'signin', 'signup', 'logout', 'activate', 'forgot', 'settings', 'password'))) {
  include template('error/404');
  exit;
}
if (!$mod) {
  $mod = 'index';
} else if ($mod == 'password') {
  if ($_GET['do'] == 'reset') {
    if ($_GET['hash']) {
      $mod = 'password_reset';
    } else {
      dheader('Location: /user/forgot');
    }
  } else {
    dheader('Location: /user/settings');
  }
}

$curmod = $mod;
define('CURMODULE', $curmod);

require_once libfile('func/user');
require_once libfile('class/user');

$do = getgpc('do');
$id = intval(getgpc('id'));

require_once BM_ROOT.'./src/mod/user/'.$curmod.'.php';

?>