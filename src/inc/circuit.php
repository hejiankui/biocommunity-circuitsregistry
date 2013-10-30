<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: inc/circuit.php 2013-06-24 00:43:00 Zhuoteng Peng $
 */

/*
-- #relationship_type
-- #  0: circuit -> codingframe
-- #  1: circuit -> plasmid
-- #  2: circuit -> parts
-- #  3: codingframe -> biobrick
-- #  4: mindmap -> mindmap
-- #  5: mindmap -> circuit
-- #  6: circuit -> application
*/
define('RT_CIRCUIT_CODINGFRAME', 0);
define('RT_CIRCUIT_PLASMID', 1);
//define('RT_CIRCUIT_REGULATION', 2);
define('RT_CIRCUIT_PARTS', 2);
define('RT_CODINGFRAME_BIOBRICK', 3);
define('RT_MINDMAP_MINDMAP', 4);
define('RT_MINDMAP_CIRCUIT', 5);
define('RT_CIRCUIT_TAG', 6);

/*
-- #term_type
-- #  0: chassis
-- #  1: plasmid
-- #  2: substance
-- #  3: dnaproperty
-- #  4: codingframe_state
-- #  5: mindmap
-- #  6: application tag
-- #  7: parts
*/
define('TT_CHASSIS', 0);
define('TT_PLASMID', 1);
define('TT_SUBSTANCE', 2);
define('TT_DNAPROPERTY', 3);
define('TT_CODINGFRAME_STATE', 4);
define('TT_MINDMAP', 5);
define('TT_TAG', 6);
define('TT_PARTS', 7);

?>