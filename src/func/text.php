<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/circuit.php 2013-06-14 09:10:00 Zhuoteng Peng $
 */

function explodekey($delimiter, $quote_mark, $string) {
  $a = trim($string);
  $keywords = array();
  $len = strlen($a);
  $pos = 0;
  $pos_bk = 0;
  $in_quote = false;
  $result = array();

  while ($pos < $len) {
    if ($a[$pos] == $quote_mark) {
      $in_quote = !$in_quote;
    } else if ($a[$pos] == $delimiter && !$in_quote) {
      $result[] = substr($a, $pos_bk, $pos - $pos_bk);
      $pos_bk = $pos + 1;
    }
    $pos++;
  }
  if($pos_bk < $pos) {
    $result[]= substr($a, $pos_bk, $pos - $pos_bk);
  }

  return $result;
}

function regexsearchkey($string) {
  $string = str_replace('*', '.*?', $string);
  $string = preg_replace("/^\"(.*?)\"$/i", "\\1", $string);
  return $string;
}

function sqlsearchkey($field, $keywords) {
  $keywords = trim($keywords);
  $sqlkeywords = $or = '';
  if ($keywords) {
    foreach (explodekey(' ', '"', $keywords) as $keyword) {
      if ($keyword) {
        if (preg_match("/^\"(.*?)\"$/i", $keyword, $matches)) {
          $keyword = trim($matches[1]);
          if (!$keyword) {
            continue;
          }
        }
        $keyword = addslashes(stripsearchkey($keyword));
        $sqlkeywords .= " $or $field LIKE '%$keyword%'";
        $or = 'AND';
      }
    }
  }
  return $sqlkeywords;
}

function description_highlight($keywords, $description) {
  $description = preg_replace("/<.*?>/i", "", $description);
  $keywords = trim($keywords);
  $regexkeywords = '';
  foreach (explodekey(' ', '"', $keywords) as $keyword) {
    if ($keyword) {
      $keyword = regexsearchkey($keyword);
      $regexkeywords .= ($regexkeywords ? '|' : '').$keyword;
    }
  }
  $description = preg_replace("/($regexkeywords)/i", "<span class=\"highlight\">\\1</span>", $description);
  $description = preg_replace("/(<\/span>[^<>]{0,20}) [^<>]+? ([^<>]{0,20}<span )/i", "\\1 ... \\2", $description);
  $description = preg_replace("/(<span.*?<\/span>[^<>]{0,20}) [^<>]+?$/i", "\\1 ...", $description);
  $description = preg_replace("/^[^<>]+? ([^<>]{0,20}<span.*?<\/span>)/i", "... \\1", $description);
  return $description;
}

function text_highlight($keywords, $text) {
  $keywords = trim($keywords);
  $regexkeywords = '';
  foreach (explodekey(' ', '"', $keywords) as $keyword) {
    if ($keyword) {
      $keyword = regexsearchkey($keyword);
      $regexkeywords .= ($regexkeywords ? '|' : '').$keyword;
    }
  }
  $text = preg_replace("/($regexkeywords)/i", "<span class=\"highlight\">\\1</span>", $text);
  return $text;
}

?>