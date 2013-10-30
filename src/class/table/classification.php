<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/classification.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

require_once libfile('func/text');

class table_classification extends bm_table
{
	public function __construct() {

		$this->_table = 'classification';
		$this->_pk    = 'classification_id';
		$this->_pre_cache_key = 'classification_';

		parent::__construct();
	}

	public function get_parent_tree($id) {
		$classtree = array();
		while ($id != 0) {
			$c = $this->fetch($id);
			$classtree[] = $c;
			$id = $c['parent_id'];
		}
		return $classtree;
	}

	public function get_child_tree($id) {
		$classtree = array();
		if (is_array($id)) {
			$ids = $id;
		} else {
			$ids = array($id);
		}
		while (!empty($ids)) {
			$c = DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('parent_id', $ids));
			$classtree[] = $c;
			unset($ids);
			$ids = array();
			foreach ($c as $v) {
				if ($v['child_id'] != 0) {
					$ids[] = $v['child_id'];
				}
			}
		}
		return $classtree;
	}

	public function search_by_name($keywords, $start = 0, $limit = 0) {
    $sql = 'SELECT * FROM '.DB::table($this->_table).' WHERE ('.sqlsearchkey('name', $keywords).')';
    if ($limit != 0) {
      $sql .= ' '.DB::limit($start, $limit);
    }
    return DB::fetch_all($sql);
  }
}

?>