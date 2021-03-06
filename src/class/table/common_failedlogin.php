<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/table/common_failedlogin.php 2013-06-14 15:56:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

class table_common_failedlogin extends bm_table
{
	public function __construct() {

		$this->_table = 'common_failedlogin';
		$this->_pk    = '';

		parent::__construct();
	}

	public function fetch_username($ip, $username) {
		return DB::fetch_first("SELECT * FROM %t WHERE ip=%s AND username=%s", array($this->_table, $ip, $username));
	}
	public function fetch_ip($ip) {
		return DB::fetch_first("SELECT * FROM %t WHERE ip=%s", array($this->_table, $ip));
	}

	public function delete_old($time) {
		DB::query("DELETE FROM %t WHERE lastupdate<%d", array($this->_table, TIMESTAMP - intval($time)), 'UNBUFFERED');
	}

	public function update_failed($ip, $username) {
		DB::query("UPDATE %t SET count=count+1, lastupdate=%d WHERE ip=%s", array($this->_table, TIMESTAMP, $ip));
	}

}

?>