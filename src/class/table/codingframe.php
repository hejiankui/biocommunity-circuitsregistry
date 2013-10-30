<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/codingframe.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

class table_codingframe extends bm_table
{
	public function __construct() {

		$this->_table = 'codingframe';
		$this->_pk    = 'codingframe_id';
		$this->_pre_cache_key = 'cf_';

		parent::__construct();
	}
}

?>