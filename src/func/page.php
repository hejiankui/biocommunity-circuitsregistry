<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: func/page.php 2013-06-14 09:10:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
  exit('Access Denied');
}

define('SHOW_COUNT_PERPAGE', 20);
define('PAGINATION_SHOW_COUNT', 5);

function getpagination($current, $count, $url) {
  $current = intval($current);
  $page = array(
    'current' => $current, 
    'start' => 1,
    'count' => $count,
    'url' => $url,
    'havequery' => (strpos($url, '?') !== false)
  );
  if ($page['havequery']) {
      $page['url'] .= '&';
  } else {
      $page['url'] .= '?';
  }
  if ($current > PAGINATION_SHOW_COUNT / 2) {
      $page['start'] = $current - intval(PAGINATION_SHOW_COUNT / 2);
  } else if ($current === 0) {
      $page['start'] = 1;
  }
  if ($current === 1) {
      $page['disable_begin'] = true;
  }
  if ($current === $count) {
      $page['disable_last'] = true;
  }

  $page['end'] = $page['start'] + PAGINATION_SHOW_COUNT - 1;
  if ($page['end'] >= $count) {
      $page['end'] = $count;
  }

  if ($page['start'] > 1) {
      $page['show_ellipsis_begin'] = true;
  }
  if ($count - $page['end'] > 0) {
      $page['show_ellipsis_last'] = true;
  }
  return $page;
}

?>