<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/circuit.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

require_once libfile('func/text');

class table_circuit extends bm_table
{
	public function __construct() {

		$this->_table = 'circuit';
		$this->_pk    = 'circuit_id';
		$this->_pre_cache_key = 'circuit_';

		parent::__construct();
	}

	public function count() {
		$count = DB::result_first('SELECT COUNT(*) FROM %t', array($this->_table));
		return $count;
	}

	public function range_by_circuitid($from, $limit) {
		return DB::fetch_all('SELECT * FROM %t WHERE circuit_id >= %d ORDER BY circuit_id LIMIT %d', array($this->_table, $from, $limit), $this->_pk);
	}

	public function fetch_by_id($id) {
		return DB::fetch_first('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('id', $id));
	}

	public function count_field($field, $ids) {
		return DB::result_first('SELECT COUNT(*) FROM '.DB::table($this->_table).' WHERE '.DB::field($field, $ids));
	}

	public function fetch_all_range_field($field, $ids, $start = 0, $limit = 0, $sort = '') {
		$sql = 'SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field($field, $ids).($sort ? ' ORDER BY '.DB::order($this->_pk, $sort) : '').DB::limit($start, $limit);
		return DB::fetch_all($sql);
	}

	public function fetch_all_range($ids, $start = 0, $limit = 0, $sort = '') {
		return $this->fetch_all_range_field($this->_pk, $ids, $start, $limit, $sort);
	}

	public function count_by_chassis($chassis_ids) {
		return $this->count_field('chassis_id', $chassis_ids);
	}

	public function fetch_all_by_chassis($chassis_ids, $start = 0, $limit = 0, $sort = '') {
		return $this->fetch_all_range_field('chassis_id', $chassis_ids, $start, $limit, $sort);
	}

	public function count_by_subclassid($subclass_ids) {
		return $this->count_field('subclass_id', $subclass_ids);
	}

	public function fetch_all_by_subclassid($subclass_ids, $start = 0, $limit = 0, $sort = '') {
		return $this->fetch_all_range_field('subclass_id', $subclass_ids, $start, $limit, $sort);
	}

	public function count_search_keywords($field, $keywords) {
		$sql = 'SELECT COUNT(*) FROM '.DB::table($this->_table).' WHERE ('.sqlsearchkey($field, $keywords).')';
		return DB::result_first($sql);
	}

	public function search_by_keywords($field, $keywords, $start = 0, $limit = 0) {
		$sql = 'SELECT * FROM '.DB::table($this->_table).' WHERE ('.sqlsearchkey($field, $keywords).')';
		if ($limit != 0) {
			$sql .= ' '.DB::limit($start, $limit);
		}
		return DB::fetch_all($sql);
	}

	public function count_search_name($name) {
		return $this->count_search_keywords('name', $name);
	}

	public function search_by_name($name, $start = 0, $limit = 0) {
		return $this->search_by_keywords('name', $name, $start, $limit);
	}

	public function count_search_description($description) {
		return $this->count_search_keywords('description', $description);
	}

	public function search_by_description($description, $start = 0, $limit = 0) {
		return $this->search_by_keywords('description', $description, $start, $limit);
	}
}

?>