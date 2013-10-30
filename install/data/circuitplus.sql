-- CREATE DATABASE circuitplus DEFAULT CHARACTER SET utf8;

-- USE circuitplus;

DROP TABLE IF EXISTS pre_classification;
CREATE TABLE `pre_classification` (
  `classification_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) UNSIGNED DEFAULT 0,
  `name` CHAR(36) NOT NULL,
  PRIMARY KEY (`classification_id`)
);

DROP TABLE IF EXISTS pre_circuit;
CREATE TABLE `pre_circuit` (
  `circuit_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `id` CHAR(36) NOT NULL UNIQUE,
  `name` CHAR(255) NOT NULL,
  `author` CHAR(255) NOT NULL,
  `rating` SMALLINT(8) UNSIGNED DEFAULT 0,
  `subclass_id` mediumint(8) UNSIGNED NOT NULL,
  `chassis_id` mediumint(8) UNSIGNED NOT NULL,
  `input` VARCHAR(255) NULL,
  `output` VARCHAR(255) NULL,
  `description` TEXT NULL,
-- #`application` TEXT NULL,
  `result` TEXT NULL,
  `reference` TEXT NULL,
  PRIMARY KEY (`circuit_id`) 
-- #KEY 
);

DROP TABLE IF EXISTS pre_codingframe;
CREATE TABLE `pre_codingframe` (
  `codingframe_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `state_id` mediumint(8) UNSIGNED NOT NULL,
  `input` VARCHAR(255) NULL,
  `output` VARCHAR(255) NULL,
  `sequence` TEXT NULL,
  PRIMARY KEY (`codingframe_id`)
);

DROP TABLE IF EXISTS pre_biobrick;
CREATE TABLE `pre_biobrick` (
  `biobrick_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `name` CHAR(36) NOT NULL,
  `dnaproperty_id` mediumint(8) UNSIGNED NOT NULL,
-- #`expression_id` mediumint(8) UNSIGNED NOT NULL,
  `function` VARCHAR(255),
  PRIMARY KEY (`biobrick_id`)
);

-- #regulation_type
-- #  0: substance -> substance
-- #  1: substance -> biobrick
-- #  2: biobrick -> substance
DROP TABLE IF EXISTS pre_regulation;
CREATE TABLE `pre_regulation` (
  `regulation_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  `circuit_id` mediumint(8) UNSIGNED NOT NULL,
  `source_id1` mediumint(8) UNSIGNED NOT NULL,
  `source_id2` mediumint(8) UNSIGNED NOT NULL,
  `target_id1` mediumint(8) UNSIGNED NOT NULL,
  `target_id2` mediumint(8) UNSIGNED NOT NULL,
  `expression_id` mediumint(8) UNSIGNED DEFAULT 0,
  `relation_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`regulation_id`)      
);

-- #relationship_type
-- #  0: circuit -> codingframe
-- #  1: circuit -> plasmid
-- #  2: circuit -> parts
-- #  3: codingframe -> biobrick
-- #  4: mindmap -> mindmap
-- #  5: mindmap -> circuit
-- #  6: circuit -> application
DROP TABLE IF EXISTS pre_relationship;
CREATE TABLE `pre_relationship` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` SMALLINT(8) UNSIGNED NOT NULL,
  `parent_id` mediumint(8) UNSIGNED NOT NULL,
  `child_id` mediumint(8) UNSIGNED NOT NULL,
  `order` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
);

-- #term_type
-- #  0: chassis
-- #  1: plasmid
-- #  2: substance
-- #  3: dnaproperty
-- #  4: codingframe_state
-- #  5: mindmap
-- #  6: application tag
-- #  7: parts
DROP TABLE IF EXISTS pre_term;
CREATE TABLE `pre_term` (
  `term_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` SMALLINT(8) UNSIGNED NOT NULL,
  `name` CHAR(255) NOT NULL,
  PRIMARY KEY (`term_id`)
);

   
