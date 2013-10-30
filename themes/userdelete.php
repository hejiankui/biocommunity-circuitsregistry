<?php
require('conn.php');
$sql=mysql_query("delete from login where username='".$_GET['username']."'",$link);
$user=$_POST[user];
$pwd=$_POST[pwd];
$email=$_POST[email];
$birth=$_POST[birth];
$phone=$_POST[phone];

  $sql="delete login  username='$user',userpwd='$pwd',birthday ='$birth',email='$email',phone=$phone where username='".$_GET['user']."'";                            // id  username  userpwd  email  birthday  phone  regdate  lastip
  mysql_query($sql,$link);
  header("location:list.php");
?>