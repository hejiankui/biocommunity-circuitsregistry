<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: mod/term/term.php 2013-06-14 9:01:00 Zhuoteng Peng $
 */
 
if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if ($mod == 'classification') {
  $term = C::t('classification')->fetch($id);
} else if ($mod == 'part' && $do == 'get') {

  require_once libfile('class/circuit');

  $ctl_obj = new circuit_ctl();

  $ctl_obj->setting = $_G['setting'];
  $ctl_obj->template = 'circuit/'.$curmod;
  $ctl_obj->on_part($id);

  exit();

} else {
  $term = C::t('term')->fetch($id);
}

dheader('Location: /circuit/search?method='.urlencode($mod).'&q="'.urlencode($term['name']).'"');

?>