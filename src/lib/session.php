<?php
/**
 * @ignore
 */
if (!defined('IN_SUSTC')) {
	exit;
}

/**
 * Session class
 */
class session
{
	function session() {
		if (isset($_GET['sid'])){
			session_id($_GET['sid']);
		}
		session_start();
	}
}


/**
 * Base user class
 *
 * This is the overarching class which contains (through session extend)
 * all methods utilised for user functionality during a session.
 */
class user extends session
{
	function user()
	{
		parent::session();
	}
}

?>