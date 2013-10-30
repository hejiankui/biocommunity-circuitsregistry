<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/regulation.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

class table_regulation extends bm_table
{
	public function __construct() {

		$this->_table = 'regulation';
		$this->_pk    = 'regulation_id';
		$this->_pre_cache_key = 'regulation_';

		parent::__construct();
	}

  public function fetch_all_by_circuitid($circuit_ids) {
    return DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('circuit_id', $circuit_ids));
  }

}

?>