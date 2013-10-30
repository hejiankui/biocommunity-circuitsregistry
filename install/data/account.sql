--
-- BM INSTALL MAKE SQL DUMP V1.0
-- DO NOT modify this file
--
-- Create: 2012-10-07 22:55:00
--

DROP TABLE IF EXISTS pre_account;
CREATE TABLE pre_account (
  uid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  username char(15) NOT NULL DEFAULT '',
  username_clean char(15) NOT NULL DEFAULT '',
  `password` char(36) NOT NULL DEFAULT '',
  PRIMARY KEY (uid),
  UNIQUE KEY username_clean (username_clean)
) TYPE=InnoDB;

DROP TABLE IF EXISTS pre_msgs;
CREATE TABLE pre_msgs (
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  user mediumint(8) unsigned NOT NULL,
  friend mediumint(8) unsigned NOT NULL,
  sender mediumint(8) unsigned NOT NULL,
  receiver mediumint(8) unsigned NOT NULL,
  type tinyint(4) unsigned NOT NULL DEFAULT '0',
  content TEXT NOT NULL,
  send_time int(10) unsigned NOT NULL DEFAULT '0',
  read_time int(10) unsigned DEFAULT '0',
  status tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  KEY user (user),
  KEY friend (friend),
  KEY status (status)
) TYPE=MyISAM;

DROP TABLE IF EXISTS pre_follow;
CREATE TABLE pre_follow (
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  follower mediumint(8) unsigned NOT NULL,
  user mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (id),
  KEY follower (follower),
  KEY user (user)
) TYPE=MyISAM;

