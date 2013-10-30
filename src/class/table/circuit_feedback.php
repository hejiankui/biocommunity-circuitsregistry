<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/circuit_feedback.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

class table_circuit_feedback extends bm_table
{
	public function __construct() {

		$this->_table = 'circuit_feedback';
		$this->_pk    = 'feedback_id';
		$this->_pre_cache_key = 'feedback_';

		parent::__construct();
	}

}

?>