<?php

if (!defined('IN_BIOMIAO')) {
  exit;
}

define('BM_DBHOST', 'localhost');
define('BM_DBUSER', 'biomiao');
define('BM_DBPW', '69YUKuJMZjPJVtrB');
define('BM_DBCHARSET', 'utf8');
define('BM_DBCONNECT', 0);
define('BM_DBTABLEPRE', 'bm_');
define('BM_DBNAME', 'biomiao');

define('BM_DEBUG', true);

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: conf/global.php 2013-06-13 11:57:00 Zhuoteng Peng $
 */

$_config = array();

// ----------------------------  CONFIG DB  ----------------------------- //

$_config['db'][1]['dbhost']     = BM_DBHOST;
$_config['db'][1]['dbuser']     = BM_DBUSER;
$_config['db'][1]['dbpw']       = BM_DBPW;
$_config['db'][1]['dbcharset']  = BM_DBCHARSET;
$_config['db'][1]['pconnect']   = BM_DBCONNECT;
$_config['db'][1]['dbname']     = BM_DBNAME;
$_config['db'][1]['tablepre']   = BM_DBTABLEPRE;

$_config['db']['slave'] = array();


// 页面输出设置
$_config['output']['charset']       = 'utf-8';  // 页面字符集
$_config['output']['forceheader']   = 1;    // 强制输出页面字符集，用于避免某些环境乱码
$_config['output']['gzip']      = 0;    // 是否采用 Gzip 压缩输出
$_config['output']['tplrefresh']    = 1;    // 模板自动刷新开关 0=关闭, 1=打开
$_config['output']['language']      = 'en';  // 页面语言 zh_cn/zh_tw
$_config['output']['staticurl']     = 'static/';  // 站点静态文件路径，“/”结尾
$_config['output']['ajaxvalidate']    = 0;    // 是否严格验证 Ajax 页面的真实性 0=关闭，1=打开
$_config['output']['iecompatible']    = 0;    // 页面 IE 兼容模式

// COOKIE 设置
$_config['cookie']['cookiepre']     = 'bm_';  // COOKIE前缀
$_config['cookie']['cookiedomain']    = '';     // COOKIE作用域
$_config['cookie']['cookiepath']    = '/';    // COOKIE作用路径

// 站点安全设置
$_config['security']['authkey']     = '1yPGpDUSdA7aVnn6'; // 站点加密密钥
$_config['security']['urlxssdefend']    = true;   // 自身 URL XSS 防御
$_config['security']['attackevasive']   = 0;    // CC 攻击防御 1|2|4|8

$_config['security']['querysafe']['status'] = 1;    // 是否开启SQL安全检测，可自动预防SQL注入攻击
$_config['security']['querysafe']['dfunction']  = array('load_file','hex','substring','if','ord','char');
$_config['security']['querysafe']['daction']  = array('intooutfile','intodumpfile','unionselect','(select', 'unionall', 'uniondistinct');
$_config['security']['querysafe']['dnote']  = array('/*','*/','#','--','"');
$_config['security']['querysafe']['dlikehex'] = 1;
$_config['security']['querysafe']['afullnote']  = 0;

//$_config['debug'] = 1;

?>