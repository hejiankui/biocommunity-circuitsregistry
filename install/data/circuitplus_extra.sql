--
-- EI INSTALL MAKE SQL DUMP V1.0
-- DO NOT modify this file
--
-- Create: 2013-10-27 1:48
--

DROP TABLE IF EXISTS pre_circuit_feedback;
CREATE TABLE pre_circuit_feedback (
  feedback_id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  user_id mediumint(8) unsigned NOT NULL,
  circuit_id mediumint(8) unsigned NOT NULL DEFAULT '0',
  reply_id mediumint(8) unsigned NOT NULL DEFAULT '0',
  time int(10) unsigned NOT NULL DEFAULT '0',
  content text NOT NULL,
  PRIMARY KEY (feedback_id),
  KEY user_id (user_id),
  KEY circuit_id (circuit_id),
  KEY reply_id (reply_id)
) TYPE=InnoDB;
