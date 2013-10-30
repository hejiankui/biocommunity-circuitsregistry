<?php
session_start();
$usr=htmlspecialchars($_GET['username']);
$pass=htmlspecialchars($_GET['password']);


    header('Cache-control:no-cache');
    $db=mysql_connect("localhost","root","hjk20121217");
    mysql_select_db("igem2013_comments",$db);
    $data= mysql_query('SELECT * FROM users WHERE username="'.$usr.'"');
    $found=false;
if($_SESSION['login_status']!='true'){
    while ($row = mysql_fetch_assoc($data)) {
        $found=true;
        if($pass==$row['password']) {
            $_SESSION['login_status']='true';
            $_SESSION['login_user']=$usr;
            echo('SUCCESS');
        } else {
            echo('FAILURE');
        }
    }
    if ($found==false){
        echo('NOTFOUND');
    }
    mysql_close($db); 
}
?>
