<?php

/*
	[RasCenter] (C)2009-2011 TengAttack.

	$Id: base.php 2011-07-31 09:00 GMT+8 $
*/

!defined('IN_BIOMIAO') && exit('Access Denied');

class bm_base {

	var $time;
	var $onlineip;
	var $db;
	
	function base() {
		$this->init_var();
		$this->init_db();
	}
	
	function init_var() {
		$this->time = time();
		$cip = getenv('HTTP_CLIENT_IP');
		$xip = getenv('HTTP_X_FORWARDED_FOR');
		$rip = getenv('REMOTE_ADDR');
		$srip = $_SERVER['REMOTE_ADDR'];
		if($cip && strcasecmp($cip, 'unknown')) {
			$this->onlineip = $cip;
		} elseif($xip && strcasecmp($xip, 'unknown')) {
			$this->onlineip = $xip;
		} elseif($rip && strcasecmp($rip, 'unknown')) {
			$this->onlineip = $rip;
		} elseif($srip && strcasecmp($srip, 'unknown')) {
			$this->onlineip = $srip;
		}
		preg_match("/[\d\.]{7,15}/", $this->onlineip, $match);
		$this->onlineip = $match[0] ? $match[0] : 'unknown';
	}
	
	function init_db() {
		require_once BM_ROOT.'src/lib/db.class.php';
		$this->db = new db();
		$this->db->connect(SC_DBHOST, SC_DBUSER, SC_DBPW, SC_DBNAME, SC_DBCHARSET, SC_DBCONNECT, SC_DBTABLEPRE);
	}
	
	function implode($arr) {
		return "'".implode("','", (array)$arr)."'";
	}
}

?>