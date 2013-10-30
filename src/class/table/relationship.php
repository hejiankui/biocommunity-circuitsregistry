<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/relationship.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

require_once libfile('inc/circuit');
//require_once libfile('func/circuit');

class table_relationship extends bm_table
{
	public function __construct() {

		$this->_table = 'relationship';
		$this->_pk    = 'id';
		$this->_pre_cache_key = 'relationship_';

		parent::__construct();
	}

	public function get_parent($child_id, $type) {
		$r = DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('child_id', $child_id).' AND '.DB::field('type', $type));
		return $r;
	}

	public function get_child($parent_id, $types, $sort = '', $translate = true) {
		$r = DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('parent_id', $parent_id).' AND '.DB::field('type', $types).($sort ? ' ORDER BY '.DB::order('order', $sort) : ''));
		if (!is_array($types)) {
			$types = array($types);
		}
		if ($translate) {
			$rtranslate = array();
			if (is_array($parent_id)) {
				foreach ($parent_id as $pid) {
					$rtranslate[$pid] = array(
						'parent_id' => $pid,
						'child' => array()
					);
					foreach ($types as $value) {
						$rtranslate[$pid]['child'][$value] = array();
						foreach ($r as $rv) {
							if ($rv['type'] == $value && $rv['parent_id'] == $pid) {
								$rtranslate[$pid]['child'][$value][] = $rv['child_id'];
							}
						}
					}
				}
			} else {
				$rtranslate = array(
					'parent_id' => $parent_id,
					'child' => array()
				);
				foreach ($types as $value) {
					$rtranslate['child'][$value] = array();
					foreach ($r as $rv) {
						if ($rv['type'] == $value) {
							$rtranslate['child'][$value][] = $rv['child_id'];
						}
					}
				}
			}
			return $rtranslate;
		} else {
			return $r;
		}
	}

	public function get_circuit_relationship($circuit_id) {
		//, RT_CIRCUIT_REGULATION
		$circuit_relationship_type = array(RT_CIRCUIT_CODINGFRAME, RT_CIRCUIT_PLASMID, RT_CIRCUIT_PARTS, RT_CIRCUIT_TAG);
		return $this->get_child($circuit_id, $circuit_relationship_type);
	}

	public function get_codingframe_relationship($codingframe_id) {
		return $this->get_child($codingframe_id, RT_CODINGFRAME_BIOBRICK, 'ASC');
	}

	public function get_circuit_by_tag($term_ids) {
		return $this->get_parent($term_ids, RT_CIRCUIT_TAG);
	}

	public function get_circuit_by_plasmid($term_ids) {
		return $this->get_parent($term_ids, RT_CIRCUIT_PLASMID);
	}

	public function get_all_mindmap() {
		return DB::fetch_all('SELECT * FROM '.DB::table($this->_table).' WHERE '.DB::field('type', array(RT_MINDMAP_MINDMAP, RT_MINDMAP_CIRCUIT)));
	}

}

?>