<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/biobrick.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

class table_biobrick extends bm_table
{
	public function __construct() {

		$this->_table = 'biobrick';
		$this->_pk    = 'biobrick_id';
		$this->_pre_cache_key = 'biobrick_';

		parent::__construct();
	}

/*
  public function fetch_all_by_codingframeid($codingframe_ids) {
    return DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('codingframe_id', $codingframe_ids));
  }
*/
}

?>