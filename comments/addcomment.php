<?php
session_start();
echo $_SESSION['login_status'];
if($_SESSION['login_status']=='true'){

header('Cache-control:no-cache');
$db=mysql_connect("localhost","root","hjk20121217");
mysql_select_db("igem2013_comments",$db);
echo 'INSERT INTO `igem2013_comments`.`comments` (`comment_time`, `id`, `comment_by`, `comment_content`) VALUES (CURRENT_TIMESTAMP ,\''.$_SESSION['login_user'].'\',\''.htmlspecialchars(($_GET[content])).'\',\''.htmlspecialchars(($_GET[id])).'\')';
$data= mysql_query('INSERT INTO `igem2013_comments`.`comments` (`comment_time`, `comment_by`, `comment_content`, `id`) VALUES (CURRENT_TIMESTAMP ,\''.$_SESSION['login_user'].'\',\''.htmlspecialchars(($_GET[content])).'\',\''.htmlspecialchars(($_GET[id]).'\')'));
mysql_close($db);
}
?>
