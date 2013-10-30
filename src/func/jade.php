<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: func/jade.php 2013-10-20 01:13:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
    exit('Access Denied');
}

/*
function jade_init() {
  spl_autoload_register(function($class) {
    if(!strstr($class, 'Jade'))
      return;
    include_once(BM_ROOT.'src/inc/'.$class.'.php');
  });
}
*/

// return cache file name if $file=true else rendered content
function jade($fn, $fileid, $file = false, $deps = array()) {
    global $jade;
    $time = @filectime($fn);
    foreach ($deps as $dn) {
        $x = @filectime($dn);
        if ($x === FALSE)
            break;
        if ($x > $time)
            $time = $x;
    }
    if ($time === FALSE)
        die("can't open jade file '$fn'");

    if (!isset($jade) || !$jade)
        $jade = new Jade\Jade(true);

    if ($file) {
        $cn = BM_ROOT.'data/cache/view/'.$fileid.'.tpl.php';
        $to = @filectime($cn);
        if ((defined('BM_DEBUG') && BM_DEBUG) || $to === FALSE || $to < $time)
            file_put_contents($cn, $jade->render($fn));
        return $cn;
    }
    return $jade->render($fn);
}

?>