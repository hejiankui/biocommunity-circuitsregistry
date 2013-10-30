<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: version.php 2013-06-13 03:55:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

if(!defined('BM_VERSION')) {
	define('BM_VERSION', '2.0 alpha');
	define('BM_RELEASE', '2013102909');
	define('BM_FIXBUG', '00000050');
}

define('VERHASH', BM_RELEASE);

?>