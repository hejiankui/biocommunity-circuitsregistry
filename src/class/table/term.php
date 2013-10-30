<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/term.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

require_once libfile('func/text');

class table_term extends bm_table
{
	public function __construct() {

		$this->_table = 'term';
		$this->_pk    = 'term_id';
		$this->_pre_cache_key = 'term_';

		parent::__construct();
	}

  public function search_by_type($type, $keywords, $start = 0, $limit = 0) {
    $sql = 'SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('type', intval($type)).' AND ('.sqlsearchkey('name', $keywords).')';
    if ($limit != 0) {
      $sql .= ' '.DB::limit($start, $limit);
    }
    return DB::fetch_all($sql);
  }

  public function search_tag($keywords) {
    return $this->search_by_type(TT_TAG, $keywords);
  }

  public function search_chassis($keywords) {
    return $this->search_by_type(TT_CHASSIS, $keywords);
  }
  
  public function search_plasmid($keywords) {
    return $this->search_by_type(TT_PLASMID, $keywords);
  }
}

?>