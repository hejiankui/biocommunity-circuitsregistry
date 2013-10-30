<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: class/circuit.php 2013-06-14 09:10:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

require_once libfile('inc/circuit');
require_once libfile('func/text');
require_once libfile('func/page');

class circuit_ctl {

	function circuit_ctl() {
	}

	function on_feedback() {
	}

	function on_get() {
		global $_G;
		$idorname = trim(getgpc('id'));
		$circuit = false;
		if (is_numeric($idorname)) {
			$circuit = C::t('circuit')->fetch(intval($idorname));
		} else {
			$circuit = C::t('circuit')->fetch_by_id($idorname);
		}
		if ($circuit) {
			$r = C::t('relationship')->get_circuit_relationship($circuit['circuit_id']);
			$circuit['codingframe'] = C::t('codingframe')->fetch_all($r['child'][RT_CIRCUIT_CODINGFRAME]);
			$codingframe_ids = array();
			$codingframe_state_ids = array();
			foreach ($circuit['codingframe'] as $cf) {
				$codingframe_ids[] = $cf['codingframe_id'];
				$codingframe_state_ids[] = $cf['state_id'];
			}
			$rbs = C::t('relationship')->get_codingframe_relationship($codingframe_ids);
			$biobrick_ids = array();
			foreach ($rbs as $rbkey => $rb) {
				$biobrick_ids = array_merge($biobrick_ids, $rb['child'][RT_CODINGFRAME_BIOBRICK]);
			}
			$biobrick_ids = array_unique($biobrick_ids);
			$biobricks = C::t('biobrick')->fetch_all($biobrick_ids);	//fetch_all_by_codingframeid
			$codingframe_state = C::t('term')->fetch_all($codingframe_state_ids);
			foreach ($circuit['codingframe'] as $key => $cf) {
				$bs = array();
				foreach ($rbs as $rbkey => $rb) {
					if ($rb['parent_id'] == $cf['codingframe_id']) {
						foreach ($rb['child'][RT_CODINGFRAME_BIOBRICK] as $bidkey => $bid) {
							$bs[] = $biobricks[$bid];
						}
					}
				}
				$circuit['codingframe'][$key]['biobricks'] = $bs;
				$circuit['codingframe'][$key]['state'] = $codingframe_state[$cf['state_id']]['name'];
			}

			dheader('Content-type: text/xml; charset=UTF-8');

			$writer = new XMLWriter();
			$writer->openMemory();
			$writer->startDocument('1.0', 'UTF-8');

			$writer->startElementNS('rdf', 'RDF', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
			$writer->writeAttributeNS('xmlns','s', null, 'http://sbols.org/v1#');
			$writer->writeAttributeNS('xmlns','so', null, 'http://purl.obolibrary.org/obo/');
			$writer->writeAttributeNS('xmlns','d', null, 'http://sbols.org/data#');
			
			$writer->startElement('s:DnaComponent');
			$writer->writeAttributeNS('rdf','about', null, $_G['siteurl'].'circuit/'.$circuit['id']);
			$writer->writeElementNS('s', 'displayId', null, $circuit['id']);
			$writer->writeElementNS('s', 'name', null, $circuit['name']);
			if ($circuit['author']) {
				$writer->writeElementNS('s', 'author', null, $circuit['author']);
			}
			$writer->writeElementNS('s', 'description', null, $circuit['description']);
			$writer->writeElementNS('s', 'input', null, $circuit['input']);
			$writer->writeElementNS('s', 'output', null, $circuit['output']);
			{
				$writer->startElement('s:annotation');
				$writer->startElement('s:SequenceAnnotation');
				$writer->startElement('s:subComponent');
				foreach ($circuit['codingframe'] as $key => $cf) {
					$writer->startElement('s:DnaComponent');
					$writer->writeElementNS('s', 'displayId', null, $cf['codingframe_id']);
					$writer->writeElementNS('s', 'name', null, '');
					if ($cf['sequence']) {
						$writer->startElement('s:dnasequence');
						$writer->startElement('s:Dnasequence');
						$writer->writeElementNS('s', 'nucleotides', null, $cf['sequence']);
						$writer->endElement();
						$writer->endElement();
					}
					$writer->writeElementNS('s', 'discription', null, '');
					$writer->writeElementNS('s', 'state', null, $cf['state']);
					$writer->startElement('s:annotation');
					$writer->startElement('s:SequenceAnnotation');
					$writer->startElement('s:subComponent');
					$order = 1;
					foreach ($cf['biobricks'] as $bkey => $b) {
						$writer->startElement('s:DnaComponent');
						$writer->writeElementNS('s', 'displayId', null, $b['biobrick_id']);
						$writer->writeElementNS('s', 'name', null, $b['name']);
						$writer->writeElementNS('s', 'dnapropertyId', null, $b['dnaproperty_id']);
						$writer->writeElementNS('s', 'function', null, $b['function']);
						$writer->writeElementNS('s', 'order', null, $order++);
						$writer->endElement();	//s:DnaComponent
					}
					$writer->endElement();
					$writer->endElement();
					$writer->endElement();
					$writer->endElement();	//s:DnaComponent
				}
				$writer->endElement();
				$writer->endElement();
				$writer->endElement();
			}
			$writer->endElement();	//s:DnaComponent
			
			$writer->endElement();	//rdf:RDF

			$writer->endDocument();
			echo $writer->outputMemory(TRUE);
		}
	}

	function on_part() {
		$id = trim(getgpc('id'));
		if ($id) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'http://parts.igem.org/xml/part.' . $id);
			//curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
			$data = curl_exec($ch);
			$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
			if ($contentType) {
				dheader('Content-Type: ' . $contentType);
			}
			curl_close($ch);
			echo $data;
		} else {
			echo 'Error';
		}
	}

	function on_create() {
		
	}

	function on_list() {
		global $_G;
		$circuits = false;

		$p = 1;
		if (isset($_GET['p'])) {
			$p = intval($_GET['p']);
			if ($p <= 0) {
				dheader('Location: /circuit');
			}
		}
		$navtitle = 'List - Page ';
		$navtitle .= $p;

		$perpage = SHOW_COUNT_PERPAGE;

		$circuits = C::t('circuit')->range(($p - 1) * $perpage, $perpage);
		$result_count = C::t('circuit')->count();
		$pagecount = floor($result_count / $perpage) + 1;
		if ($result_count > 0 && $p > $pagecount) {
			showmessage('no_more_page', '/circuit');
		}
		if ($circuits) {
			$circuit_ids = array();
			foreach ($circuits as $circuit) {
				$circuit_ids[] = $circuit['circuit_id'];
			}

			$circuit_ids = array_unique($circuit_ids);
			$r = C::t('relationship')->get_circuit_relationship($circuit_ids);

			foreach ($circuits as $key => $circuit) {
				$ats = C::t('term')->fetch_all($r[$circuit['circuit_id']]['child'][RT_CIRCUIT_TAG]);
				foreach ($ats as $akey => $at) {
					$ats[$akey]['name'] = text_highlight($q, $at['name']);
				}
				$circuits[$key]['tags'] = $ats;
			}
		}
		
		$pagination = getpagination($p, $pagecount, '/circuit');
		include template('circuit/list');
	}

	function on_search() {
		global $_G;
		$circuits = false;
		$result_count = 0;
		$qtooshort = false;

		$perpage = SHOW_COUNT_PERPAGE;

		$q = trim($_GET['q']);
		$method = trim($_GET['method']);
		$search_method = $method;

		$url = '/circuit/search?method='.urlencode($method).'&q='.urlencode($q);

		$p = 1;
		if (isset($_GET['p'])) {
			$p = intval($_GET['p']);
			if ($p <= 0) {
				dheader('Location: '.$url);
			}
		}

		$navtitle = 'Search';
		if ($q && dstrlen($q) > 3) {
			$navtitle = $q . ' - ' . $navtitle;

			switch ($method) {
				case 'name':
					$c = C::t('circuit')->fetch_by_id($q);
					if ($c) {
						dheader('Location: /circuit/'.$c['circuit_id']);
					}
					$result_count = C::t('circuit')->count_search_name($q);
					if ($result_count > 0) {
						$circuits = C::t('circuit')->search_by_name($q, ($p - 1) * $perpage, $perpage);
						foreach ($circuits as $key => $circuit) {
							$circuits[$key]['name'] = text_highlight($q, $circuit['name']);
						}
					}
					break;
				case 'classification':
					$findcls = C::t('classification')->search_by_name($q);
					$cls_ids = array();
					foreach ($findcls as $cls) {
						$cls_ids[] = $cls['classification_id'];
					}
					$cls_ids = array_unique($cls_ids);
					$children_tree = C::t('classification')->get_child_tree($cls_ids);
					foreach ($children_tree as $clsp) {
						foreach ($clsp as $cls) {
							$cls_ids[] = $cls['classification_id'];
						}
					}
					$cls_ids = array_unique($cls_ids);
					$result_count = C::t('circuit')->count_by_subclassid($cls_ids);
					if ($result_count > 0) {
						$circuits = C::t('circuit')->fetch_all_by_subclassid($cls_ids, ($p - 1) * $perpage, $perpage);
						if ($circuits) {
							$parent_trees = array();
							foreach ($cls_ids as $cls_id) {
								$parent_trees[$cls_id] = C::t('classification')->get_parent_tree($cls_id);
								foreach ($parent_trees[$cls_id] as $key => $cls) {
									$parent_trees[$cls_id][$key]['name'] = text_highlight($q, $cls['name']);
								}
							}
							foreach ($circuits as $key => $circuit) {
								$circuits[$key]['classification'] = $parent_trees[$circuit['subclass_id']];
							}
						}
					}
					break;
				case 'description':
					$result_count = C::t('circuit')->count_search_description($q);
					if ($result_count > 0) {
						$circuits = C::t('circuit')->search_by_description($q, ($p - 1) * $perpage, $perpage);
						foreach ($circuits as $key => $circuit) {
							$circuits[$key]['description_short'] = description_highlight($q, $circuit['description']);
						}
					}
					break;
				case 'chassis':
					$chassiss = C::t('term')->search_chassis($q);
					$term_ids = array();
					foreach ($chassiss as $chassis) {
						$term_ids[] = $chassis['term_id'];
					}
					$term_ids = array_unique($term_ids);

					$result_count = C::t('circuit')->count_by_chassis($term_ids);
					if ($result_count > 0) {
						$circuits = C::t('circuit')->fetch_all_by_chassis($term_ids, ($p - 1) * $perpage, $perpage);
						if ($circuits) {
							foreach ($chassiss as $key => $chassis) {
								$chassiss[$key]['name'] = text_highlight($q, $chassis['name']);
							}
							foreach ($circuits as $key => $circuit) {
								foreach ($chassiss as $chassis) {
									if ($circuit['chassis_id'] == $chassis['term_id']) {
										$circuits[$key]['chassis'] = $chassis;
										break;
									}
								}
							}
						}
					}
					break;
				case 'plasmid':
					$plasmids = C::t('term')->search_plasmid($q);
					$term_ids = array();
					foreach ($plasmids as $plasmid) {
						$term_ids[] = $plasmid['term_id'];
					}
					$term_ids = array_unique($term_ids);

					$rs = C::t('relationship')->get_circuit_by_plasmid($term_ids);
					$circuit_ids = array();
					foreach ($rs as $rt) {
						$circuit_ids[] = $rt['parent_id'];
					}

					$circuit_ids = array_unique($circuit_ids);
					$result_count = count($circuit_ids);

					$circuits = C::t('circuit')->fetch_all_range($circuit_ids, ($p - 1) * $perpage, $perpage);
					$r = C::t('relationship')->get_circuit_relationship($circuit_ids);

					foreach ($circuits as $key => $circuit) {
						$ats = C::t('term')->fetch_all($r[$circuit['circuit_id']]['child'][RT_CIRCUIT_PLASMID]);
						foreach ($ats as $akey => $at) {
							$ats[$akey]['name'] = text_highlight($q, $at['name']);
						}
						$circuits[$key]['plasmids'] = $ats;
					}
					break;
				case 'tag':
					$tags = C::t('term')->search_tag($q);
					$term_ids = array();
					foreach ($tags as $tag) {
						$term_ids[] = $tag['term_id'];
					}

					$rs = C::t('relationship')->get_circuit_by_tag($term_ids);
					$circuit_ids = array();
					foreach ($rs as $rt) {
						$circuit_ids[] = $rt['parent_id'];
					}

					$circuit_ids = array_unique($circuit_ids);
					$result_count = count($circuit_ids);

					$circuits = C::t('circuit')->fetch_all_range($circuit_ids, ($p - 1) * $perpage, $perpage);
					$r = C::t('relationship')->get_circuit_relationship($circuit_ids);

					foreach ($circuits as $key => $circuit) {
						$ats = C::t('term')->fetch_all($r[$circuit['circuit_id']]['child'][RT_CIRCUIT_TAG]);
						foreach ($ats as $akey => $at) {
							$ats[$akey]['name'] = text_highlight($q, $at['name']);
						}
						$circuits[$key]['tags'] = $ats;
					}

					break;
			}
			if ($circuits && !$result_count) {
				$result_count = count($circuits);
			}
			$pagecount = floor($result_count / $perpage) + 1;
			if ($result_count > 0 && $p > $pagecount) {
				showmessage('no_more_page', $url);
			}
			$pagination = getpagination($p, $pagecount, $url);
		} else {
			$qtooshort = true;
		}
		include template('circuit/search');
	}

	function build_mindmap_tree($entry_id) {
		$m = $this->mindmaps[$entry_id];
		$tree = array('name' => $m['name'], 'children' => array());
		foreach ($this->r as $rkey => $_r) {
			if ($_r['parent_id'] == $entry_id && $_r['child_id'] != 0) {
				switch ($_r['type']) {
					case RT_MINDMAP_MINDMAP:
						$tree['children'][] = $this->build_mindmap_tree($_r['child_id']);
					break;
					case RT_MINDMAP_CIRCUIT:
						$c = $this->circuits[$_r['child_id']];
						if ($c) {
							$tree['children'][] = array('name' => $c['id'], 'url' => '/circuit/'.$c['circuit_id']);
						}
					break;
				}
			}
		}
		return $tree;
	}

	function on_mindmap() {
		global $_G;

		$r = C::t('relationship')->get_all_mindmap();
		$mindmap_ids = array();
		$circuit_ids = array();
		$entry_id = 0;
		foreach ($r as $rkey => $_r) {
			switch ($_r['type']) {
				case RT_MINDMAP_MINDMAP:
					if ($_r['parent_id'] != 0) {
						$mindmap_ids[] = $_r['parent_id'];
						if (!$entry_id) {
							$entry_id = $_r['parent_id'];
						}
						if ($entry_id == $_r['child_id']) {
							$entry_id = $_r['parent_id'];
						}
					}
					//$mindmap_ids[] = $_r['child_id'];
				break;
				case RT_MINDMAP_CIRCUIT:
					if ($_r['parent_id'] != 0) {
						$mindmap_ids[] = $_r['parent_id'];
					}
					if ($_r['child_id'] != 0) {
						$circuit_ids[] = $_r['child_id'];
					}
				break;
			}
			$ats[$akey]['name'] = text_highlight($q, $at['name']);
		}

		if (!$entry_id) {
			showmessage('mindmap_build_failed');
		}

		$circuit_ids = array_unique($circuit_ids);
		$mindmap_ids = array_unique($mindmap_ids);

		$circuits = C::t('circuit')->fetch_all($circuit_ids);
		$mindmaps = C::t('term')->fetch_all($mindmap_ids);

		$this->r = $r;
		$this->mindmaps = &$mindmaps;
		$this->circuits = &$circuits;
		$mindmap_tree = $this->build_mindmap_tree($entry_id);
		$json_mindmap_tree = json_encode($mindmap_tree, JSON_UNESCAPED_UNICODE);

		$navtitle = 'Mindmap';
		include template('circuit/mindmap');
	}

	function build_lgd_data(&$circuit) {
		$lgd = array(
			'circuit' => array(
				'id' => intval($circuit['circuit_id'])
			),
			'codingframe' => array(),
			'regulation' => array(),
			'substance' => array()
		);

		foreach ($circuit['codingframe'] as $key => $cf) {
			$c = array(
				'id' => intval($cf['codingframe_id']),
				'input' => $cf['input'],
				'output' => $cf['output'],
				'biobrick' => array(),
			);
			$order = 1;
			foreach ($cf['biobricks'] as $bkey => $b) {
				$ab = array(
					'id' => intval($b['biobrick_id']),
					'order' => $order,
					'name' => $b['name'],
					"dnaproperty" => array(
            'id' => intval($b['dnaproperty_id']),
            'name' => $b['dnaproperty']['name']
          ),
					"function" => $b['function']
				);

				$c['biobrick'][] = $ab;
				$order++;
			}
			$lgd['codingframe'][] = $c;
		}

		$substance_ids = array();
		foreach ($circuit['regulation'] as $key => $rg) {
			$r = array(
        "type" => $rg['type'],
        "relation" => array(
          "id" => intval($rg['relation_id'])
        ),
        "source" => array(),
        "target" => array(),
        "expression" => array()
      );
      if ($rg['source_id2'] == 0) {
        $r["source"] = array(
        	"type" => "substance",
        	"id" => intval($rg['source_id1'])
        );
        $substance_ids[] = $rg['source_id1'];
      } else {
      	$r["source"] = array(
        	"type" => "biobrick",
        	"codingframe_id" => intval($rg['source_id1']),
        	"order" => intval($rg['source_id2'])
        );
      }
      if ($rg['target_id2'] == 0) {
      	$r["target"] = array(
        	"type" => "substance",
        	"id" => intval($rg['target_id1'])
        );
        $substance_ids[] = $rg['target_id1'];
      } else if ($rg['target_id1'] == 0) {
      	$r["target"] = array(
        	"type" => "none",
        	"id" => 0
        );
      } else {
      	$r["target"] = array(
        	"type" => "biobrick",
        	"codingframe_id" => intval($rg['target_id1']),
        	"order" => intval($rg['target_id2'])
        );
      }
      if ($rg['expression_id'] == 0) {
      	$r["expression"] = array(
        	"type" => "none",
        	"id" => 0
        );
      } else {
      	$r["expression"] = array(
        	"type" => "substance",
        	"id" => intval($rg['expression_id'])
        );
        $substance_ids[] = $rg['expression_id'];
      }
			$lgd['regulation'][] = $r;
		}

		$substance_ids = array_unique($substance_ids);
		$substances = C::t('term')->fetch_all($substance_ids);

		foreach ($substances as $key => $substance) {
			$lgd['substance'][] = array(
				'id' => intval($substance['term_id']),
				'name' => $substance['name']
			);
		}

		return $lgd;
	}

	function on_show() {
		global $_G;
		$idorname = trim(getgpc('id'));
		$circuit = false;
		if (is_numeric($idorname)) {
			$circuit = C::t('circuit')->fetch(intval($idorname));
		} else {
			$circuit = C::t('circuit')->fetch_by_id($idorname);
		}
		if (!$circuit) {
			showmessage('circuit_notfound');
		}

		$circuit_id = $circuit['circuit_id'];

		if ($circuit['subclass_id']) {
			$circuit['classification'] = C::t('classification')->get_parent_tree($circuit['subclass_id']);
		}

		$r = C::t('relationship')->get_circuit_relationship($circuit_id);

		$circuit['chassis'] = C::t('term')->fetch($circuit['chassis_id']);
		$circuit['plasmids'] = C::t('term')->fetch_all($r['child'][RT_CIRCUIT_PLASMID]);

		$circuit['codingframe'] = C::t('codingframe')->fetch_all($r['child'][RT_CIRCUIT_CODINGFRAME]);
		
		$codingframe_ids = array();
		$codingframe_state_ids = array();
		foreach ($circuit['codingframe'] as $cf) {
			$codingframe_ids[] = $cf['codingframe_id'];
			$codingframe_state_ids[] = $cf['state_id'];
		}
		$codingframe_state = C::t('term')->fetch_all($codingframe_state_ids);

		$rbs = C::t('relationship')->get_codingframe_relationship($codingframe_ids);
		$biobrick_ids = array();
		foreach ($rbs as $rbkey => $rb) {
			$biobrick_ids = array_merge($biobrick_ids, $rb['child'][RT_CODINGFRAME_BIOBRICK]);
		}
		$biobrick_ids = array_unique($biobrick_ids);
		$biobricks = C::t('biobrick')->fetch_all($biobrick_ids);

		$dnaproperty_ids = array();
		foreach ($biobricks as $bkey => $b) {
			$dnaproperty_ids[] = $b['dnaproperty_id'];
		}
		$dnaproperty_ids = array_unique($dnaproperty_ids);
		$dnaproperties = C::t('term')->fetch_all($dnaproperty_ids);
		foreach ($biobricks as $bkey => $b) {
			$biobricks[$bkey]['dnaproperty'] = $dnaproperties[$b['dnaproperty_id']];
		}

		foreach ($circuit['codingframe'] as $key => $cf) {
			$bs = array();
			foreach ($rbs as $rbkey => $rb) {
				if ($rb['parent_id'] == $cf['codingframe_id']) {
					foreach ($rb['child'][RT_CODINGFRAME_BIOBRICK] as $bidkey => $bid) {
						$bs[] = $biobricks[$bid];
					}
				}
			}
			$circuit['codingframe'][$key]['biobricks'] = $bs;
			$circuit['codingframe'][$key]['state'] = $codingframe_state[$cf['state_id']]['name'];
			$circuit['codingframe'][$key]['length'] = strlen($cf['sequence']);
		}

		$circuit['parts'] = C::t('term')->fetch_all($r['child'][RT_CIRCUIT_PARTS]);

		$circuit['tags'] = C::t('term')->fetch_all($r['child'][RT_CIRCUIT_TAG]);

		$circuit['regulation'] = C::t('regulation')->fetch_all_by_circuitid($circuit_id);

		if ($circuit['user_id']) {
			$circuit['user'] = getuserbyuid($circuit['user_id']);
		}

		$circuit['lgd'] = json_encode($this->build_lgd_data($circuit), JSON_UNESCAPED_UNICODE);

		$navtitle = $circuit['id'].' - Circuit';
		$q = $circuit['id'];

		include template('circuit/show');
	}
}

?>